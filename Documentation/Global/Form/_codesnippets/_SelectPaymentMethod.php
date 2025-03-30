<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class PaymentMethod extends AbstractEntity implements \Stringable
{
    protected string $title;
    protected string $paymentIdentifier;

    // Getters and setters

    // If the model implement the __toString() method
    // The result of that method is displayed in the select form
    public function __toString(): string
    {
        return $this->title;
    }
}
