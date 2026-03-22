<?php

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class MyModel extends AbstractEntity
{
    // Extbase automatically maps this field to my_link_text
    protected string $myLinkText = '';
    protected string $myRecordType = '';

    // Getters and Setters
}
