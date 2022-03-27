.. include:: /Includes.rst.txt

.. _typo3-fluid-format-striptags:

================
format.stripTags
================


Removes tags from the given string (applying PHPs strip_tags() function)


Examples
========

default notation::

   <f:format.stripTags>Some Text with <b>Tags</b> and an &Uuml;mlaut.</f:format.stripTags>

Output::

   Some Text with Tags and an &Uuml;mlaut. (strip_tags() applied. Note: encoded entities are not decoded)

inline notation::

   {text -> f:format.stripTags()}

Output::

   Text without tags (strip_tags() applied)

Arguments
=========


.. _format.striptags_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   String to format

.. _format.striptags_allowedtags:
allowedTags
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Optional string of allowed tags as required by PHPs strip_tags() f
unction
