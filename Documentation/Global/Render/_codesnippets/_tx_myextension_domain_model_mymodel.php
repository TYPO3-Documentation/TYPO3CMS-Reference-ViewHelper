<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns(
    'tx_myextension_domain_model_mymodel',
    [
        'my_link_text' => [
            'label' => 'my_extension.backend_fields:tx_myextension_domain_model_mymodel.my_link_text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
    ],
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tx_myextension_domain_model_mymodel',
    'my_link_text',
    'my_content_element',
    'after:bodytext',
);
