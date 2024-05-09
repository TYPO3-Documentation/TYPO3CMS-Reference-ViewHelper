..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuViewHelper.php
:navigation-title: moduleLayout.menu
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menu:

==========================================================
ModuleLayout.menu ViewHelper `<backend:moduleLayout.menu>`
==========================================================

A ViewHelper for adding a menu to the doc header area
of :ref:`<be:moduleLayout> <typo3-backend-modulelayout>`. It accepts only
:ref:`<be:moduleLayout.menuItem> <typo3-backend-modulelayout-menuitem>` view
helpers as children.

Examples
========

Default::

   <be:moduleLayout>
       <be:moduleLayout.menu identifier="MenuIdentifier">
           <be:moduleLayout.menuItem label="Menu item 1" uri="{f:uri.action(action: 'index')}"/>
       </be:moduleLayout.menu>
   </be:moduleLayout>

.. _typo3-backend-modulelayout-menu_source:

Source code
===========

Go to the source code of this ViewHelper: `MenuViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuViewHelper.php>`__.

.. _typo3-backend-modulelayout-menu_arguments:

Arguments
=========

The following arguments are available for `<backend:moduleLayout.menu>`:

..  contents::
    :local:


.. _typo3-backend-modulelayout-menu-identifier_argument:

identifier
----------

..  confval:: identifier
    :name: typo3-backend-modulelayout-menu-identifier
    :type: string
    :required: true

    Identifier of the menu
