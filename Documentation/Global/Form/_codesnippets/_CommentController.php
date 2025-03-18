<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use T3docs\BlogExample\Domain\Model\Comment;
use T3docs\BlogExample\Domain\Repository\CommentRepository;
use TYPO3\CMS\Extbase\Annotation\IgnoreValidation;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
    public function __construct(
        protected readonly CommentRepository $commentRepository,
    ) {}

    #[IgnoreValidation(['argumentName' => 'newComment'])]
    public function commentFormAction(?Comment $newComment = null): ResponseInterface
    {
        if ($newComment === null) {
            $newComment = new Comment();
            $newComment->setDate(new \DateTime());
        }
        // The assigned object will be used in argument object
        $this->view->assign('newComment', $newComment);
        return $this->htmlResponse();
    }

    public function createAction(
        // This parameter must have the same name as argument `objectName` of f:form
        Comment $comment,
    ): ResponseInterface {
        $this->commentRepository->add($comment);
        $this->addFlashMessage('Comment was saved');
        return $this->redirect('show');
    }
}
