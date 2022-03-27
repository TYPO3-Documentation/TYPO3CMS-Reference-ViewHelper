.. include:: /Includes.rst.txt

.. _typo3-fluid-cobject:

=======
cObject
=======


This ViewHelper renders CObjects from the global TypoScript configuration.
NOTE: You have to ensure proper escaping (htmlspecialchars/intval/etc.) on your own!

Examples
========

Render lib object::

   <f:cObject typoscriptObjectPath="lib.someLibObject" />

Output::

   rendered lib.someLibObject

Specify cObject data & current value::

   <f:cObject typoscriptObjectPath="lib.customHeader" data="{article}" currentValueKey="title" />

Output::

   rendered lib.customHeader. data and current value will be available in TypoScript

inline notation::

   {article -> f:cObject(typoscriptObjectPath: 'lib.customHeader')}

Output::

   rendered lib.customHeader. data will be available in TypoScript

Arguments
=========


.. _cobject_typoscriptobjectpath:
typoscriptObjectPath
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The TypoScript setup path of the TypoScript object to render

.. _cobject_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The data to be used for rendering the cObject. Can be an object, array or string. If this argument is not set, child nodes will be used

.. _cobject_currentvaluekey:
currentValueKey
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CurrentValueKey

.. _cobject_table:
table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The table name associated with "data" argument. Typically tt_content or one of your custom tables. This argument should be set if rendering a FILES cObject where file references are used, or if the data argument is a database record.
