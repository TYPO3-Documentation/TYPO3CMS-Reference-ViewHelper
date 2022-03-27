.. include:: /Includes.rst.txt

.. _typo3-fluid-format-crop:

===========
format.crop
===========


Use this ViewHelper to crop the text between its opening and closing tags.

Whitespace within the f:format.crop element will be considered as characters.

Examples
========

Defaults
--------

::

   <f:format.crop maxCharacters="10">
   This is some very long text
   </f:format.crop>

``This is...``

The third word "some" does not fit in the 10 character limit, because respectWordBoundaries
is true by default.

Custom suffix
-------------

::

   <f:format.crop maxCharacters="17" append="&nbsp;[more]">
   This is some very long text
   </f:format.crop>

``This is some&nbsp;[more]``

Don't respect word boundaries
-----------------------------

::

   <f:format.crop maxCharacters="10" respectWordBoundaries="false">
   This is some very long text
   </f:format.crop>

``This is s...``

Don't respect HTML tags
-----------------------

::

   <f:format.crop maxCharacters="28" respectWordBoundaries="false" respectHtml="false">
   This is some text with <strong>HTML</strong> tags
   </f:format.crop>

``This is some text with <stro``

Inline notation
---------------

::

   {someLongText -> f:format.crop(maxCharacters: 10)}

``someLongText cropped after 10 characters``
Depending on the value of ``{someLongText}``.

Arguments
=========


.. _format.crop_maxcharacters:
maxCharacters
-------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Place where to truncate the string

.. _format.crop_append:
append
------

:aspect:`DataType`
   string

:aspect:`Default`
   '&hellip;'

:aspect:`Required`
   false
:aspect:`Description`
   What to append, if truncation happened

.. _format.crop_respectwordboundaries:
respectWordBoundaries
---------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE and division is in the middle of a word, the remains of that word is removed.

.. _format.crop_respecthtml:
respectHtml
-----------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE the cropped string will respect HTML tags and entities. Technically that means, that cropHTML() is called rather than crop()
