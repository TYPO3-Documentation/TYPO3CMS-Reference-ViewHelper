<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter;

class NewsletterController extends ActionController
{
    public function orderNewsletterAction(
        // This argument is mapped in initializeOrderNewsletterAction()
        array $orderNewsletters = [],
    ): ResponseInterface {
        if ($orderNewsletters !== []) {
            // TODO: Newsletter ordering
        }
        return $this->htmlResponse();
    }
    public function initializeOrderNewsletterAction()
    {
        if ($this->request->hasArgument('orderNewsletters')) {
            $this->arguments['orderNewsletters']
                ->getPropertyMappingConfiguration()
                ->setTypeConverterOption(
                    ArrayConverter::class,
                    ArrayConverter::CONFIGURATION_DELIMITER,
                    ',',
                );
        }
    }
}
