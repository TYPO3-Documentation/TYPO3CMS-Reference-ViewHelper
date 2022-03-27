.. include:: /Includes.rst.txt

.. _typo3-fluid-format-nl2br:

============
format.nl2br
============


Wrapper for PHPs :php:`nl2br` function.
See https://www.php.net/manual/function.nl2br.php.

Examples
========

Default
-------

::

   <f:format.nl2br>{text_with_linebreaks}</f:format.nl2br>

Text with line breaks replaced by ``<br />``

Inline notation
---------------

::

   {text_with_linebreaks -> f:format.nl2br()}

Text with line breaks replaced by ``<br />``

Arguments
=========


.. _format.nl2br_value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format
