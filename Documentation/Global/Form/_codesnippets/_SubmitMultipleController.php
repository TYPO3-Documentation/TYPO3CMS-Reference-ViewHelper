<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\Comment;
use MyVendor\MyExtension\Domain\Repository\CommentRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CommentController extends ActionController
{
  public function __construct(
    protected readonly CommentRepository $commentRepository,
  ) {}

  public function submitAction(
    Comment $comment,
    bool $cancelButton = false,
    bool $spellingButton = false,
  ): ResponseInterface {
    if ($cancelButton) {
      $this->addFlashMessage(
        'Your comment was NOT saved, you pressed the cancel button',
        'Attention',
        ContextualFeedbackSeverity::WARNING,
      );
      return $this->redirect('show');
    }
    if ($spellingButton) {
      if (!$this->mySpellCheckService->check($comment->getMessage())) {
        $this->addFlashMessage('There are spelling errors. ');
      }
      return $this->redirect('edit', null, null, ['comment' => $comment]);
    }
    // Form was submitted by submit button or for example by JavaScript
    $this->commentRepository->update($comment);
    $this->addFlashMessage('Your comment was saved');
    return $this->redirect('show');
  }

  // Other actions
}
