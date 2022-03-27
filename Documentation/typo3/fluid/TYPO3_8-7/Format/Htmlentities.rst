.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentities:

===================
format.htmlentities
===================


Applies htmlentities() escaping to a value

Examples
========

default notation::

   <f:format.htmlentities>{text}</f:format.htmlentities>

Output::

   Text with & " ' < > * replaced by HTML entities (htmlentities applied).

inline notation::

   {text -> f:format.htmlentities(encoding: 'ISO-8859-1')}

Output::

   Text with & " ' < > * replaced by HTML entities (htmlentities applied).

Arguments
=========


.. _format.htmlentities_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   String to format

.. _format.htmlentities_keepquotes:
keepQuotes
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _format.htmlentities_encoding:
encoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _format.htmlentities_doubleencode:
doubleEncode
------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   If FALSE existing html entities won't be encoded, the default is to convert everything.
