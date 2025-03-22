<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class User extends AbstractEntity
{
    #[Validate([
        'validator' => 'Boolean',
        'options' => ['is' => true],
    ])]
    protected bool $consentGiven = false;

    public function isConsentGiven(): bool
    {
        return $this->consentGiven;
    }

    public function setConsentGiven(bool $consentGiven): void
    {
        $this->consentGiven = $consentGiven;
    }
}
