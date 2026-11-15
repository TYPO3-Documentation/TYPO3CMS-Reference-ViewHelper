<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns(
  'tt_content',
  [
    'tx_mysitepackage_link_label' => [
      'label' => 'LLL:EXT:my_sitepackage/Resources/Private/Language/locallang_db.xlf:link_label',
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
  'tx_mysitepackage_link_label',
  'my_content_element',
  'after:bodytext',
);
