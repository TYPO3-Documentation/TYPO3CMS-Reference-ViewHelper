.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-htmlspecialchars:

=======================
format.htmlspecialchars
=======================


Applies htmlspecialchars() escaping to a value


= Examples =

<code title="default notation">
<f:format.htmlspecialchars>{text}</f:format.htmlspecialchars>
</code>
<output>
Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).
</output>

<code title="inline notation">
{text -> f:format.htmlspecialchars(encoding: 'ISO-8859-1')}
</code>
<output>
Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).
</output>

Arguments
=========


.. _format.htmlspecialchars_value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Value to format

.. _format.htmlspecialchars_keepquotes:

keepQuotes
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
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
   false
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
   false
:aspect:`Description`
   If FALSE html entities will not be encoded
