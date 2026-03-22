<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'tx_mytheme_my_richtext' => [
            'label' => 'my_theme.backend_fields:tt_content.tx_mytheme_my_richtext',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'tx_mytheme_my_textarea' => [
            'label' => 'my_theme.backend_fields:tt_content.tx_mytheme_my_textarea',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 2,
            ],
        ],
    ],
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_mytheme_my_richtext,tx_mytheme_my_textarea',
    'my_content_element',
    'after:bodytext',
);
