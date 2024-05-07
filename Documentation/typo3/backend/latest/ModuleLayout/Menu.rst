:navigation-title: moduleLayout.menu
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menu:

==========================================================
moduleLayout.menu ViewHelper `<backend:moduleLayout.menu>`
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


.. _typo3-backend-modulelayout-menu_arguments:

Arguments
=========


.. _modulelayout.menu_identifier:

identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Identifier of the menu
