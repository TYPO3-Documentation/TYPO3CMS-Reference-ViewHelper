.. include:: /Includes.rst.txt

.. _typo3-fluid-be-buttons-csh:

==============
be.buttons.csh
==============


ViewHelper which returns CSH (context sensitive help) button with icon.

.. note::
   The CSH button will only work, if the current BE user has the "Context
   Sensitive Help mode" set to something else than "Display no help
   information" in the Users settings.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.buttons.csh />

CSH button as known from the TYPO3 backend.

Full configuration::

   <f:be.buttons.csh table="xMOD_csh_corebe" field="someCshKey" />

CSH button as known from the TYPO3 backend with some custom settings.

Full configuration with content::

   <f:be.buttons.csh table="xMOD_csh_corebe" field="someCshKey">
      some text to link
   </f:be.buttons.csh>

A link with text "some text to link" to link the help.

Arguments
=========


.. _be.buttons.csh_table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Table name ('_MOD_'+module name). If not set, the current module name will be used

.. _be.buttons.csh_field:

field
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Field name (CSH locallang main key)

.. _be.buttons.csh_wrap:

wrap
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Markup to wrap around the CSH, split by "|"
