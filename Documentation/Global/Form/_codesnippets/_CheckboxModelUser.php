<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class User extends AbstractEntity
{
    protected bool $orderNewsletter = false;

    public function isOrderNewsletter(): bool
    {
        return $this->orderNewsletter;
    }

    public function setOrderNewsletter(bool $orderNewsletter): void
    {
        $this->orderNewsletter = $orderNewsletter;
    }

}
