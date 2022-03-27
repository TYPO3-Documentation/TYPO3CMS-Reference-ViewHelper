.. include:: /Includes.rst.txt

.. _typo3-fluid-format-urlencode:

================
format.urlencode
================


Encodes the given string according to `RFC 3986 <https://www.ietf.org/rfc/rfc3986.txt>`__.
Applying PHPs :php:`rawurlencode()` function.
See https://www.php.net/manual/function.rawurlencode.php.

.. note::
   The output is not escaped. You may have to ensure proper escaping on your own.

Examples
========

Default notation
----------------

::


``foo%20%40%2B%25%2F`` :php:`rawurlencode()` applied.

Inline notation
---------------

::

   {text -> f:format.urlencode()}

Url encoded text :php:`rawurlencode()` applied.

Arguments
=========


.. _format.urlencode_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format
