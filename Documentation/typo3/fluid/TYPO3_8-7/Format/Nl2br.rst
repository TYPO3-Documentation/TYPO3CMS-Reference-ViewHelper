.. include:: /Includes.rst.txt

.. _typo3-fluid-format-nl2br:

============
format.nl2br
============


Wrapper for PHPs nl2br function.

Examples
========

Example::

   <f:format.nl2br>{text_with_linebreaks}</f:format.nl2br>

Output::

   text with line breaks replaced by <br />

Inline notation::

   {text_with_linebreaks -> f:format.nl2br()}

Output::

   text with line breaks replaced by <br />

Arguments
=========


.. _format.nl2br_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   String to format
