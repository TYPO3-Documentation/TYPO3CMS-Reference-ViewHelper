.. include:: /Includes.rst.txt

.. _typo3-fluid-format-json:

===========
format.json
===========


Wrapper for PHPs json_encode function.

Examples
========

encoding a view variable::

   {someArray -> f:format.json()}

Output::

   ["array","values"]

depending on the value of {someArray}

associative array::

   {f:format.json(value: {foo: 'bar', bar: 'baz'})}

Output::

   {"foo":"bar","bar":"baz"}

non-associative array with forced object::

   {f:format.json(value: {0: 'bar', 1: 'baz'}, forceObject: true)}

Output::

   {"0":"bar","1":"baz"}

Arguments
=========


.. _format.json_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The incoming data to convert, or null if VH children should be used

.. _format.json_forceobject:
forceObject
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Outputs an JSON object rather than an array
