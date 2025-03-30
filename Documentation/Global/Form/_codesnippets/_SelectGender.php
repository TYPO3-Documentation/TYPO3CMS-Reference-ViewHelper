<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UserController extends ActionController
{
    public function genderFormAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }
    public function selectGenderAction(int $gender): ResponseInterface
    {
        // do something
        return $this->redirect('show');
    }
}
