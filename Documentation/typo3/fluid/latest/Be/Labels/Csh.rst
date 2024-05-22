..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Labels/CshViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Labels/CshViewHelper.php
:navigation-title: be.labels.csh

.. include:: /Includes.rst.txt

.. _typo3-fluid-be-labels-csh:

============================================
Be.labels.csh ViewHelper `<f:be.labels.csh>`
============================================



ViewHelper which returns CSH (context sensitive help) label with icon hover.

.. note::
   The CSH label will only work, if the current BE user has the "Context
   Sensitive Help mode" set to something else than "Display no help
   information" in the Users settings.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.labels.csh />

CSH label as known from the TYPO3 backend.

Full configuration::

   <f:be.labels.csh table="xMOD_csh_corebe" field="someCshKey" label="lang/Resources/Private/Language/locallang/header.languages" />

CSH label as known from the TYPO3 backend with some custom settings.

..  attention::
    **Deprecated**

.. _typo3-fluid-be-labels-csh_source:

Source code
===========

Go to the source code of this ViewHelper: `CshViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Labels/CshViewHelper.php>`__.

.. _typo3-fluid-be-labels-csh_arguments:

Arguments
=========

The following arguments are available for `<f:be.labels.csh>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-be-labels-csh-table_argument:

..  confval:: table
    :name: typo3-fluid-be-labels-csh-table
    :type: string
    :required: false

    Table name ('_MOD_'+module name). If not set, the current module name will be used

.. _typo3-fluid-be-labels-csh-field_argument:

..  confval:: field
    :name: typo3-fluid-be-labels-csh-field
    :type: string
    :required: false

    Field name (CSH locallang main key)

.. _typo3-fluid-be-labels-csh-label_argument:

..  confval:: label
    :name: typo3-fluid-be-labels-csh-label
    :type: string
    :required: false

    Language label which is wrapped with the CSH
