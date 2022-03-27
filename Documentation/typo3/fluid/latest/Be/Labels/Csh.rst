.. include:: /Includes.rst.txt

.. _typo3-fluid-be-labels-csh:

=============
be.labels.csh
=============


ViewHelper which returns CSH (context sensitive help) label with icon hover.

.. note::
   The CSH label will only work, if the current BE user has the "Context
   Sensitive Help mode" set to something else than "Display no help
   information" in the Users settings.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.labels.csh />

CSH label as known from the TYPO3 backend.

Full configuration::

   <f:be.labels.csh table="xMOD_csh_corebe" field="someCshKey" label="lang/Resources/Private/Language/locallang/header.languages" />

CSH label as known from the TYPO3 backend with some custom settings.

Arguments
=========


.. _be.labels.csh_table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Table name ('_MOD_'+module name). If not set, the current module name will be used

.. _be.labels.csh_field:

field
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Field name (CSH locallang main key)

.. _be.labels.csh_label:

label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language label which is wrapped with the CSH
