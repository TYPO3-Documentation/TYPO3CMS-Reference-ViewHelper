<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\ORM\Transient;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Annotation\Validate;

class User extends AbstractEntity
{
    #[Validate(['validator' => 'NotEmpty'])]
    public string $username = '';

    // Never save a plaintext password to the database. Make it transient to
    // prevent saving
    #[Transient]
    #[Validate(['validator' => 'NotEmpty'])]
    #[Validate(['validator' => 'StringLength', 'options' => ['minimum' => 8]])]
    public string $plainTextPassword = '';

    // Saved the hashed password to the database
    public string $password = '';
}
