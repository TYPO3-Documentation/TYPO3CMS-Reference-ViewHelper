<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ContactController extends ActionController
{
    public function sendMessageAction(string $name, string $message): ResponseInterface
    {
        // Process data
        $this->addFlashMessage('Your message was received.');
        return $this->redirect('showForm');
    }
    // ...
}
