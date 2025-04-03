<?php
declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\Comment;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
    public function createAction(Comment $comment): ResponseInterface
    {
        // $comment->getBlogPost() returns the associated BlogPost object
        $this->commentRepository->add($comment);
        $this->addFlashMessage('Your comment was submitted!');
        return $this->redirect('show', 'BlogPost', null, ['blogPost' => $comment->getBlogPost()]);
    }
}
