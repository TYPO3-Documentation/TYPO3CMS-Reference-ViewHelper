<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UserController extends ActionController
{
    public function __construct(
        protected readonly PaymentMethodRepository $paymentMethodRepository,
    ) {}

    public function paymentFormAction(): ResponseInterface
    {
        $paymentOptions = $this->paymentMethodRepository->findAll();
        $this->view->assign('paymentOptions', $paymentOptions);
        $this->view->assign('myPayment', 'visa');
        return $this->htmlResponse();
    }
    public function selectPaymentAction(PaymentMethod $payment): ResponseInterface
    {
        // do something
        return $this->redirect('show');
    }
}
