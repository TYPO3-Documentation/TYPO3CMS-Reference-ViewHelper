:navigation-title: format.crop

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-crop:

========================================
Format.crop ViewHelper `<f:format.crop>`
========================================

..  typo3:viewhelper:: format.crop
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-format-crop-example:

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

``someLongText cropped after 10 characters…``
Depending on the value of ``{someLongText}``.
