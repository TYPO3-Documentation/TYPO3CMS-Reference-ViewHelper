..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/ShortcutViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/ShortcutViewHelper.php
:navigation-title: be.buttons.shortcut
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-buttons-shortcut:

========================================================
Be.buttons.shortcut ViewHelper `<f:be.buttons.shortcut>`
========================================================



ViewHelper which returns shortcut button with icon.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.buttons.shortcut />

Shortcut button as known from the TYPO3 backend.
By default the current page id, module name and all module arguments will be stored.

Explicitly set parameters to be stored in the shortcut::

   <f:be.buttons.shortcut getVars="{0: 'route', 1: 'myOwnPrefix'}" setVars="{0: 'function'}" />

Shortcut button as known from the TYPO3 backend.
This time only the specified GET parameters and SET[]-settings will be stored.

.. note:

   Normally you won't need to set getVars & setVars parameters in Extbase modules.

.. _typo3-fluid-be-buttons-shortcut_source:

Source code
===========

Go to the source code of this ViewHelper: `ShortcutViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Buttons/ShortcutViewHelper.php>`__.

.. _typo3-fluid-be-buttons-shortcut_arguments:

Arguments
=========

The following arguments are available for `<f:be.buttons.shortcut>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-buttons-shortcut-getvars_argument:

..  confval:: getVars
    :name: typo3-fluid-be-buttons-shortcut-getvars
    :type: mixed
    :Default: array ()
    :required: false

    List of GET variables to store. By default the current id, module and all module arguments will be stored

.. _typo3-fluid-be-buttons-shortcut-setvars_argument:

..  confval:: setVars
    :name: typo3-fluid-be-buttons-shortcut-setvars
    :type: mixed
    :Default: array ()
    :required: false

    List of SET[] variables to store. See ModuleTemplate::makeShortcutIcon(). Normally won't be used by Extbase modules
