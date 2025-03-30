<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use MyVendor\MyExtension\Domain\Model\PaymentMethod;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class User extends AbstractEntity
{
    //Other fields
    protected ?PaymentMethod $preferredPayment;
    /** @var ObjectStorage<PaymentMethod>  */
    protected ObjectStorage $availablePaymentOptions;

    // initialize method, getters and setters
}
