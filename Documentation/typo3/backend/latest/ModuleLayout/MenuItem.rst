:navigation-title: moduleLayout.menuItem
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menuitem:

==================================================================
moduleLayout.menuItem ViewHelper `<backend:moduleLayout.menuItem>`
==================================================================


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


.. _typo3-backend-modulelayout-menuitem_arguments:

Arguments
=========


.. _typo3-backend-modulelayout-menuitem-label:

label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Label of the menu item

.. _typo3-backend-modulelayout-menuitem-uri:

uri
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Action uri
