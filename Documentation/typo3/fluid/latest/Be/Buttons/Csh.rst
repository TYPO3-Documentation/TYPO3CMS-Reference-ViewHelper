..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/CshViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/CshViewHelper.php
:navigation-title: be.buttons.csh
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-buttons-csh:

==============================================
Be.buttons.csh ViewHelper `<f:be.buttons.csh>`
==============================================

ViewHelper which returns CSH (context sensitive help) button with icon.

.. note::
   The CSH button will only work, if the current BE user has the "Context
   Sensitive Help mode" set to something else than "Display no help
   information" in the Users settings.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.buttons.csh />

CSH button as known from the TYPO3 backend.

Full configuration::

   <f:be.buttons.csh table="xMOD_csh_corebe" field="someCshKey" />

CSH button as known from the TYPO3 backend with some custom settings.

Full configuration with content::

   <f:be.buttons.csh table="xMOD_csh_corebe" field="someCshKey">
      some text to link
   </f:be.buttons.csh>

A link with text "some text to link" to link the help.

.. _typo3-fluid-be-buttons-csh_source:

Source code
===========

Go to the source code of this ViewHelper: `CshViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/CshViewHelper.php>`__.

.. _typo3-fluid-be-buttons-csh_arguments:

Arguments
=========

The following arguments are available for `<f:be.buttons.csh>`:

..  contents::
    :local:


.. _typo3-fluid-be-buttons-csh-table_argument:

table
-----

..  confval:: table
    :name: typo3-fluid-be-buttons-csh-table
    :type: string
    :required: false

    Table name ('_MOD_'+module name). If not set, the current module name will be used

.. _typo3-fluid-be-buttons-csh-field_argument:

field
-----

..  confval:: field
    :name: typo3-fluid-be-buttons-csh-field
    :type: string
    :required: false

    Field name (CSH locallang main key)

.. _typo3-fluid-be-buttons-csh-wrap_argument:

wrap
----

..  confval:: wrap
    :name: typo3-fluid-be-buttons-csh-wrap
    :type: string
    :required: false

    Markup to wrap around the CSH, split by "|"
