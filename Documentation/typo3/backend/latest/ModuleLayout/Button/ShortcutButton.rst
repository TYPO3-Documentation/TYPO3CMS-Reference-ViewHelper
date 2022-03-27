.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-shortcutbutton:

==================================
moduleLayout.button.shortcutButton
==================================


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

Arguments
=========


.. _modulelayout.button.shortcutbutton_icon:
icon
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Icon identifier for the button

.. _modulelayout.button.shortcutbutton_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title of the button

.. _modulelayout.button.shortcutbutton_disabled:
disabled
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Whether the button is disabled

.. _modulelayout.button.shortcutbutton_showlabel:
showLabel
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Defines whether to show the title as a label within the button

.. _modulelayout.button.shortcutbutton_position:
position
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Position of the button (left or right)

.. _modulelayout.button.shortcutbutton_group:
group
-----

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Button group of the button

.. _modulelayout.button.shortcutbutton_displayname:
displayName
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name for the shortcut

.. _modulelayout.button.shortcutbutton_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   List of relevant GET variables as key/values list to store

.. _modulelayout.button.shortcutbutton_getvars:
getVars
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   List of additional GET variables to store. The current id, module and all module arguments will always be stored
