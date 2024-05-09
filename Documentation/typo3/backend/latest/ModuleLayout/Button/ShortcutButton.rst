..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/ShortcutButtonViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/ShortcutButtonViewHelper.php
:navigation-title: moduleLayout.button.shortcutButton
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-shortcutbutton:

============================================================================================
ModuleLayout.button.shortcutButton ViewHelper `<backend:moduleLayout.button.shortcutButton>`
============================================================================================

A ViewHelper for adding a shortcut button to the doc header area.
It must be a child of :ref:`<be:moduleLayout> <typo3-backend-modulelayout>`.

The 'arguments' argument should contain key/value pairs of all arguments
relevant for the specific view.

Examples
--------

Default::

   <be:moduleLayout>
       <be:moduleLayout.button.shortcutButton displayName="Shortcut label" arguments="{parameter: '{someValue}'}"/>
   </be:moduleLayout>

.. _typo3-backend-modulelayout-button-shortcutbutton_source:

Source code
===========

Go to the source code of this ViewHelper: `ShortcutButtonViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/ShortcutButtonViewHelper.php>`__.

.. _typo3-backend-modulelayout-button-shortcutbutton_arguments:

Arguments
=========

The following arguments are available for `<backend:moduleLayout.button.shortcutButton>`:

..  contents::
    :local:


.. _typo3-backend-modulelayout-button-shortcutbutton-icon_argument:

icon
----

..  confval:: icon
    :name: typo3-backend-modulelayout-button-shortcutbutton-icon
    :type: string
    :required: false

    Icon identifier for the button

.. _typo3-backend-modulelayout-button-shortcutbutton-title_argument:

title
-----

..  confval:: title
    :name: typo3-backend-modulelayout-button-shortcutbutton-title
    :type: string
    :required: false

    Title of the button

.. _typo3-backend-modulelayout-button-shortcutbutton-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-backend-modulelayout-button-shortcutbutton-disabled
    :type: boolean
    :required: false

    Whether the button is disabled

.. _typo3-backend-modulelayout-button-shortcutbutton-showlabel_argument:

showLabel
---------

..  confval:: showLabel
    :name: typo3-backend-modulelayout-button-shortcutbutton-showlabel
    :type: boolean
    :required: false

    Defines whether to show the title as a label within the button

.. _typo3-backend-modulelayout-button-shortcutbutton-position_argument:

position
--------

..  confval:: position
    :name: typo3-backend-modulelayout-button-shortcutbutton-position
    :type: string
    :required: false

    Position of the button (left or right)

.. _typo3-backend-modulelayout-button-shortcutbutton-group_argument:

group
-----

..  confval:: group
    :name: typo3-backend-modulelayout-button-shortcutbutton-group
    :type: integer
    :required: false

    Button group of the button

.. _typo3-backend-modulelayout-button-shortcutbutton-displayname_argument:

displayName
-----------

..  confval:: displayName
    :name: typo3-backend-modulelayout-button-shortcutbutton-displayname
    :type: string
    :required: false

    Name for the shortcut

.. _typo3-backend-modulelayout-button-shortcutbutton-arguments_argument:

arguments
---------

..  confval:: arguments
    :name: typo3-backend-modulelayout-button-shortcutbutton-arguments
    :type: mixed
    :Default: array ()
    :required: false

    List of relevant GET variables as key/values list to store

.. _typo3-backend-modulelayout-button-shortcutbutton-getvars_argument:

getVars
-------

..  confval:: getVars
    :name: typo3-backend-modulelayout-button-shortcutbutton-getvars
    :type: mixed
    :Default: array ()
    :required: false

    List of additional GET variables to store. The current id, module and all module arguments will always be stored
