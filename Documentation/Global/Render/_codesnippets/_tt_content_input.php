<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'tx_mytheme_link_label' => [
            'label' => 'my_theme.backend_fields:tt_content.tx_mytheme_link_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
    ],
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_mytheme_link_label',
    'my_content_element',
    'after:bodytext',
);
