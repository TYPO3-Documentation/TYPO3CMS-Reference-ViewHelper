..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuItemViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuItemViewHelper.php
:navigation-title: moduleLayout.menuItem

.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menuitem:

=============================================================
ModuleLayout.menuItem ViewHelper `<be:moduleLayout.menuItem>`
=============================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


A ViewHelper for adding a menu item to a doc header menu.
It must be a child of :ref:`<be:moduleLayout.menu> <typo3-backend-modulelayout-menu>`.

Examples
========

Default::

   <be:moduleLayout>
       <be:moduleLayout.menu identifier="MenuIdentifier">
           <be:moduleLayout.menuItem label="Menu item 1" uri="{f:uri.action(action: 'index')}"/>
       </be:moduleLayout.menu>
   </be:moduleLayout>

.. _typo3-backend-modulelayout-menuitem_source:

Source code
===========

Go to the source code of this ViewHelper: `MenuItemViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/MenuItemViewHelper.php>`__.

.. _typo3-backend-modulelayout-menuitem_arguments:

Arguments
=========

The following arguments are available for `<be:moduleLayout.menuItem>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-modulelayout-menuitem-label_argument:

..  confval:: label
    :name: typo3-backend-modulelayout-menuitem-label
    :type: string
    :required: true

    Label of the menu item

.. _typo3-backend-modulelayout-menuitem-uri_argument:

..  confval:: uri
    :name: typo3-backend-modulelayout-menuitem-uri
    :type: string
    :required: true

    Action uri
