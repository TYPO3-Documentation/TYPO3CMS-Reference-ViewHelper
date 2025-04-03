<?php
declare(strict_types=1);

namespace MyVendor\MyExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Comment extends AbstractEntity
{
    protected string $authorName = '';
    protected string $content = '';
    protected BlogPost $blogPost;

    // Getters and setters...
}
