<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UserController extends ActionController
{
    public function paymentFormAction(): ResponseInterface
    {
        $paymentOptions =
            ['payPal' => 'PayPal International Services', 'visa' => 'VISA Card'];
        $this->view->assign('paymentOptions', $paymentOptions);
        $this->view->assign('myPayment', 'visa');
        return $this->htmlResponse();
    }
    public function selectPaymentAction(string $payment): ResponseInterface
    {
        // do something
        return $this->redirect('show');
    }
}
