<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UserController extends ActionController
{
    /**
     * @param string $country ISO 2 country code ("BE", "FR", "US", ...)
     */
    public function createAction(string $country): ResponseInterface
    {
        return $this->redirect('show');
    }
}
