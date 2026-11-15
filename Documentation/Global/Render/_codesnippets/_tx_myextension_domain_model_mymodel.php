<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns(
  'tx_myextension_domain_model_mymodel',
  [
    'my_link_text' => [
      'label' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:my_link_text',
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
