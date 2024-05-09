:navigation-title: moduleLayout.button.linkButton
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-linkbutton:

====================================================================================
moduleLayout.button.linkButton ViewHelper `<backend:moduleLayout.button.linkButton>`
====================================================================================


A ViewHelper for adding a link button to the doc header area.
It must be a child of :ref:`<be:moduleLayout> <typo3-backend-modulelayout>`.

Examples
--------

Default::

   <be:moduleLayout>
       <be:moduleLayout.button.linkButton
           icon="actions-add"
           title="Add record')}"
           link="{be:uri.newRecord(table: 'tx_my_table')}"
       />
   </be:moduleLayout>


.. _typo3-backend-modulelayout-button-linkbutton_arguments:

Arguments
=========


.. _typo3-backend-modulelayout-button-linkbutton-icon:

icon
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Icon identifier for the button

.. _typo3-backend-modulelayout-button-linkbutton-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title of the button

.. _typo3-backend-modulelayout-button-linkbutton-disabled:

disabled
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Whether the button is disabled

.. _typo3-backend-modulelayout-button-linkbutton-showlabel:

showLabel
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Defines whether to show the title as a label within the button

.. _typo3-backend-modulelayout-button-linkbutton-position:

position
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Position of the button (left or right)

.. _typo3-backend-modulelayout-button-linkbutton-group:

group
-----

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Button group of the button

.. _typo3-backend-modulelayout-button-linkbutton-link:

link
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Link for the button
