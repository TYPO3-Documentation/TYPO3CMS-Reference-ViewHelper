.. include:: /Includes.rst.txt

.. _typo3-fluid-format-bytes:

============
format.bytes
============


Formats an integer with a byte count into human readable form.

Examples
========

Simple
------

::

   {fileSize -> f:format.bytes()}

``123 KB``
Depending on the value of ``{fileSize}``.

With arguments
--------------

::

   {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: '.', thousandsSeparator: ',')}

``1,023.00 B``
Depending on the value of ``{fileSize}``.

You may provide an own set of units, like this: ``B,KB,MB,GB,TB,PB,EB,ZB,YB``.

Custom units
------------

::

   {fileSize -> f:format.bytes(units: '{f:translate(\'viewhelper.format.bytes.units\', \'fluid\')}'

``123 KB``
Depending on the value of ``{fileSize}``.

Arguments
=========


.. _format.bytes_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The incoming data to convert, or NULL if VH children should be used

.. _format.bytes_decimals:
decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The number of digits after the decimal point

.. _format.bytes_decimalseparator:
decimalSeparator
----------------

:aspect:`DataType`
   string

:aspect:`Default`
   '.'

:aspect:`Required`
   false
:aspect:`Description`
   The decimal point character

.. _format.bytes_thousandsseparator:
thousandsSeparator
------------------

:aspect:`DataType`
   string

:aspect:`Default`
   ','

:aspect:`Required`
   false
:aspect:`Description`
   The character for grouping the thousand digits

.. _format.bytes_units:
units
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Comma separated list of available units, default is LocalizationUtility::translate('viewhelper.format.bytes.units', 'fluid')
