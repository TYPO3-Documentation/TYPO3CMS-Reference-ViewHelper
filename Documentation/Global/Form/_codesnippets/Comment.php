<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Comment extends AbstractEntity
{
    #[Validate(['validator' => 'EmailAddress'])]
    protected string $email = '';

    #[Validate(['validator' => 'StringLength', 'options' => ['maximum' => 500]])]
    protected string $content = '';

    // Getters and setters ...
}
