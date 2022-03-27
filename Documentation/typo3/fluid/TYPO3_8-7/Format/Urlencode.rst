.. include:: /Includes.rst.txt

.. _typo3-fluid-format-urlencode:

================
format.urlencode
================


Encodes the given string according to `RFC 3986 <https://www.ietf.org/rfc/rfc3986.txt>`__ (applying PHPs rawurlencode() function).
Note: The output is not escaped. You may have to ensure proper escaping on your own.

Examples
========

inline notation::

   {text -> f:format.urlencode()}

Output::

   Url encoded text (rawurlencode() applied)

Arguments
=========


.. _format.urlencode_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   String to format
