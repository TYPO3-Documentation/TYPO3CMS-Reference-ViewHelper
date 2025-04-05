<?php

declare(strict_types=1);

namespace Vendor\Extension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
    public function saveAction(string $message, ?string $commentId = null): ResponseInterface
    {
        if ($commentId === null) {
            // Create new comment
            $this->addFlashMessage('Created a new comment');
        } else {
            // Fetch and update an existing comment
            $this->addFlashMessage('Updated comment with ID ' . $commentId);
        }
        return $this->redirect('list');
    }
}
