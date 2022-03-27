.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentitiesdecode:

=========================
format.htmlentitiesDecode
=========================


Applies :php:`html_entity_decode()` to a value.
See https://www.php.net/html_entity_decode.

Examples
========

Default notation
----------------

::

   <f:format.htmlentitiesDecode>{text}</f:format.htmlentitiesDecode>

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

Inline notation
---------------

::

   {text -> f:format.htmlentitiesDecode(encoding: 'ISO-8859-1')}

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

But encoded as ISO-8859-1.

Arguments
=========


.. _format.htmlentitiesdecode_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format

.. _format.htmlentitiesdecode_keepquotes:
keepQuotes
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _format.htmlentitiesdecode_encoding:
encoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the encoding used when converting characters (Default: UTF-8).
