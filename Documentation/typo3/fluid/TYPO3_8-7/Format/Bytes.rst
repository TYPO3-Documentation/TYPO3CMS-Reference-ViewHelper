.. include:: /Includes.rst.txt

.. _typo3-fluid-format-bytes:

============
format.bytes
============


Formats an integer with a byte count into human-readable form.

Examples
========

Defaults::

   {fileSize -> f:format.bytes()}

Output::

   123 KB
   // depending on the value of {fileSize}

Defaults::

   {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: '.', thousandsSeparator: ',')}

Output::

   1,023.00 B
   // depending on the value of {fileSize}

You may provide an own set of units, like this: B,KB,MB,GB,TB,PB,EB,ZB,YB
custom units::

   {fileSize -> f:format.bytes(units: '{f:translate(\'viewhelper.format.bytes.units\', \'fluid\')}'

Output::

   123 KB
   // depending on the value of {fileSize}

Arguments
=========


.. _format.bytes_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The incoming data to convert, or NULL if VH children should be used

.. _format.bytes_decimals:
decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
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
   true
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
   true
:aspect:`Description`
   The character for grouping the thousand digits

.. _format.bytes_units:
units
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Comma separated list of available units, default is LocalizationUtility::translate('viewhelper.format.bytes.units', 'fluid')
