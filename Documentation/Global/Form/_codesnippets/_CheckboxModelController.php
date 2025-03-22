<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\User;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class NewsletterController extends ActionController
{
    public function orderNewsletterAction(
        User $user,
    ): ResponseInterface {
        if ($user->isOrderNewsletter()) {
            // TODO: Newsletter ordering
        }
        return $this->htmlResponse();
    }
}
