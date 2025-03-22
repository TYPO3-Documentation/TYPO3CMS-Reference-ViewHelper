<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class NewsletterController extends ActionController
{
    public function orderNewsletterAction(
        // If the checkbox is not checked, no argument is provided.
        // Default to false
        bool $orderNewsletter = false,
    ): ResponseInterface {
        if ($orderNewsletter) {
            // TODO: Newsletter ordering
        }
        return $this->htmlResponse();
    }
}
