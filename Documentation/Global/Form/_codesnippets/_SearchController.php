<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class SearchController extends ActionController
{
    public function searchAction(array $search = []): ResponseInterface
    {
        // TODO: implement search
        return $this->htmlResponse();
    }
}
