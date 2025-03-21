<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MyController extends ActionController
{
    public function demonstrateFlashMessagesAction(): ResponseInterface
    {
        $this->addFlashMessage('This is a success message.');
        $this->addFlashMessage('This is a warning.', 'Warning Headline', ContextualFeedbackSeverity::WARNING);
        return $this->htmlResponse();
    }
}
