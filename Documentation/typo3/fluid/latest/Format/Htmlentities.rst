.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentities:

===================
format.htmlentities
===================


Applies :php:`htmlentities()` escaping to a value.
See https://www.php.net/manual/function.htmlentities.php.

Examples
========

Default notation
----------------

::

   <f:format.htmlentities>{text}</f:format.htmlentities>

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

Inline notation
---------------

::

   {text -> f:format.htmlentities(encoding: 'ISO-8859-1')}

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

But encoded as ISO-8859-1.

Arguments
=========


.. _format.htmlentities_value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format

.. _format.htmlentities_keepquotes:

keepQuotes
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _format.htmlentities_encoding:

encoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the encoding used when converting characters (Default: UTF-8

.. _format.htmlentities_doubleencode:

doubleEncode
------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If FALSE existing html entities won't be encoded, the default is to convert everything.
