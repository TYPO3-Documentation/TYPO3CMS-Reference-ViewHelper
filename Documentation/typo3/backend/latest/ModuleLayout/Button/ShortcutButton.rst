:navigation-title: moduleLayout.button.shortcutButton
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-shortcutbutton:

============================================================================================
moduleLayout.button.shortcutButton ViewHelper `<backend:moduleLayout.button.shortcutButton>`
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


.. _typo3-backend-modulelayout-button-shortcutbutton_arguments:

Arguments
=========


.. _typo3-backend-modulelayout-button-shortcutbutton-icon:

icon
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Icon identifier for the button

.. _typo3-backend-modulelayout-button-shortcutbutton-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title of the button

.. _typo3-backend-modulelayout-button-shortcutbutton-disabled:

disabled
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Whether the button is disabled

.. _typo3-backend-modulelayout-button-shortcutbutton-showlabel:

showLabel
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Defines whether to show the title as a label within the button

.. _typo3-backend-modulelayout-button-shortcutbutton-position:

position
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Position of the button (left or right)

.. _typo3-backend-modulelayout-button-shortcutbutton-group:

group
-----

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Button group of the button

.. _typo3-backend-modulelayout-button-shortcutbutton-displayname:

displayName
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name for the shortcut

.. _typo3-backend-modulelayout-button-shortcutbutton-arguments:

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

.. _typo3-backend-modulelayout-button-shortcutbutton-getvars:

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
