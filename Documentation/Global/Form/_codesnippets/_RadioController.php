<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class NewsletterController extends ActionController
{
    public function orderNewsletterAction(
        bool $orderNewsletter,
    ): ResponseInterface {
        if ($orderNewsletter) {
            // TODO: Newsletter ordering
        }
        return $this->htmlResponse();
    }
}
