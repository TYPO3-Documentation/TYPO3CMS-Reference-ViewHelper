.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-cdata:

============
format.cdata
============


Outputs an argument/value without any escaping and wraps it with CDATA tags.

PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
as the output is NOT SANITIZED!

Examples
========

Child nodes::

   <f:format.cdata>{string}</f:format.cdata>

Output::

   <![CDATA[(Content of {string} without any conversion/escaping)]]>

Value attribute::

   <f:format.cdata value="{string}" />

Output::

   <![CDATA[(Content of {string} without any conversion/escaping)]]>

Inline notation::

   {string -> f:format.cdata()}

Output::

   <![CDATA[(Content of {string} without any conversion/escaping)]]>

Arguments
=========


.. _format.cdata_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The value to output
