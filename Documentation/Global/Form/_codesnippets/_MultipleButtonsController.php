<?php

namespace Vendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\Comment;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
    public function submitAction(Comment $comment, string $action): ResponseInterface
    {
        switch ($action) {
            case 'save':
                // Save logic here
                $this->addFlashMessage('Comment saved!');
                return $this->redirect('edit');

            case 'preview':
                // Assign preview-related data and render the same view
                $this->view->assign('preview', true);
                $this->view->assign('comment', $comment);
                return $this->htmlResponse();

            default:
                $this->addFlashMessage('Unknown action');
                return $this->redirect('edit');
        }
    }
}
