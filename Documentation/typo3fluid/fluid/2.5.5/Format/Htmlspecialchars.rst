.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-htmlspecialchars:

=======================
format.htmlspecialchars
=======================


Applies htmlspecialchars() escaping to a value


Examples
========

default notation::

   <f:format.htmlspecialchars>{text}</f:format.htmlspecialchars>

Output::

   Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).

inline notation::

   {text -> f:format.htmlspecialchars(encoding: 'ISO-8859-1')}

Output::

   Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).

Arguments
=========


.. _format.htmlspecialchars_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Value to format

.. _format.htmlspecialchars_keepquotes:
keepQuotes
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE quotes will not be replaced (ENT_NOQUOTES)

.. _format.htmlspecialchars_encoding:
encoding
--------

:aspect:`DataType`
   string

:aspect:`Default`
   'UTF-8'

:aspect:`Required`
   true
:aspect:`Description`
   Encoding

.. _format.htmlspecialchars_doubleencode:
doubleEncode
------------

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   If FALSE html entities will not be encoded
