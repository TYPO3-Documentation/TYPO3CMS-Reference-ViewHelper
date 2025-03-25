<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use T3docs\BlogExample\Domain\Model\Comment;
use T3docs\BlogExample\Domain\Repository\CommentRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
    public function __construct(
        protected readonly CommentRepository $commentRepository,
    ) {}

    public function submitAction(Comment $comment): ResponseInterface
    {
        $this->commentRepository->update($comment);
        $this->addFlashMessage('Your comment was saved');
        return $this->redirect('show');
    }

    // Other actions
}
