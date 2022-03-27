.. include:: /Includes.rst.txt

.. _typo3-fluid-sanitize-html:

=============
sanitize.html
=============


Passes a given content through `typo3/html-sanitizer` to mitigate potential
cross-site scripting occurrences. Given `default` build corresponds to class
`TYPO3\CMS\Core\Html\DefaultSanitizerBuilder` declaring allowed HTML tags,
attributes and their values.

Examples
========

Default parameters
------------------

::

   <f:sanitize.html>
     <img src="/img.png" class="image" onmouseover="alert(document.location)">
   </f:sanitize.html>

Output::

   <img src="/img.png" class="image">

Inline notation
---------------

::

   {richTextFieldContent -> f:sanitize.html(build: 'default')}

Arguments
=========


.. _sanitize.html_build:

build
-----

:aspect:`DataType`
   string

:aspect:`Default`
   'default'

:aspect:`Required`
   false
:aspect:`Description`
   Preset name or class-like name of sanitization builder
