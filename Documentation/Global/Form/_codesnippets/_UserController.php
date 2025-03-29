<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\User;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Crypto\PasswordHashing\PasswordHashFactory;
use TYPO3\CMS\Core\PasswordPolicy\PasswordPolicyAction;
use TYPO3\CMS\Core\PasswordPolicy\PasswordPolicyValidator;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UserController extends ActionController
{
    public function __construct(
        private readonly PasswordHashFactory $passwordHashFactory,
        private readonly UserRepository $userRepository,
    ) {}

    public function registerFormAction(?User $user = null): ResponseInterface
    {
        $this->view->assign('newUser', $user ?? new User());
        return $this->htmlResponse();
    }

    public function registerAction(User $user): ResponseInterface
    {
        $passwordValidator = new PasswordPolicyValidator(
            PasswordPolicyAction::NEW_USER_PASSWORD,
        );
        // validate password against password policy
        if (!$passwordValidator->isValidPassword($user->plainTextPassword)) {
            foreach ($passwordValidator->getValidationErrors() as $error) {
                $this->addFlashMessage('Password is not correct: ' . $error);
            }
            // Unset the plain text password before returning it to the view
            $user->plainTextPassword = '';
            return $this->redirect('registerForm', null, null, ['user' => $user]);
        }

        // Hash password using the default hash instance for the Frontend
        // NEVER save a plain text password to the database!
        $user->password = $this->passwordHashFactory
            ->getDefaultHashInstance('FE')
            ->getHashedPassword($user->plainTextPassword);
        $this->userRepository->update($user);

        $this->addFlashMessage('Password was saved.');
        return $this->redirect('registerForm');
    }
}
