<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Comment extends AbstractEntity
{
    #[Validate(['validator' => 'NotEmpty'])]
    protected string $name = '';

    #[Validate(['validator' => 'NotEmpty'])]
    #[Validate(['validator' => 'EmailAddress'])]
    protected string $email = '';

    #[Validate(['validator' => 'Url'])]
    protected string $homepage = '';
}
