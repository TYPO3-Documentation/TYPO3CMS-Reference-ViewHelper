.. include:: /Includes.rst.txt

.. _typo3-fluid-format-number:

=============
format.number
=============


Formats a number with custom precision, decimal point and grouped thousands.
See https://www.php.net/manual/function.number-format.php.

Examples
========

Defaults
--------

::

   <f:format.number>423423.234</f:format.number>

``423,423.20``

With all parameters
-------------------

::

   <f:format.number decimals="1" decimalSeparator="," thousandsSeparator=".">
       423423.234
   </f:format.number>

``423.423,2``

Arguments
=========


.. _format.number_decimals:

decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Default`
   '2'

:aspect:`Required`
   false
:aspect:`Description`
   The number of digits after the decimal point

.. _format.number_decimalseparator:

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

.. _format.number_thousandsseparator:

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
