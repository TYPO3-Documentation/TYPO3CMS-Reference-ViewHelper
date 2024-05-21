..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuViewHelper.php
:navigation-title: moduleLayout.menu

.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menu:

=====================================================
ModuleLayout.menu ViewHelper `<be:moduleLayout.menu>`
=====================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


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

The following arguments are available for `<be:moduleLayout.menu>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-modulelayout-menu-identifier_argument:

..  confval:: identifier
    :name: typo3-backend-modulelayout-menu-identifier
    :type: string
    :required: true

    Identifier of the menu
