.. include:: ../../../../Includes.txt

.. _typo3-fluid-link-file:

=========
link.file
=========


A ViewHelper for creating links to a file (FAL).

Examples
========

Link to a file
--------------

::

   <f:link.file file="{file}" target="_blank">See file</f:link.file>

Output of a public file::

   <a href="https://example.org/fileadmin/path/to/file.jpg" target="_blank">See file</a>

Output of a non-public file::

   <a href="https://example.org/index.php?eID=dumpFile&t=f&f=123&token=79bce812" target="_blank">See file</a>

Link to download a file
-----------------------

::

   <f:link.file file="{file}" download="true" filename="alternative-name.jpg">Download file</f:link.file>

Output of a public file::

   <a href="https://example.org/fileadmin/path/to/file.jpg" download="alternative-name.jpg">Download file</a>

Output of a non-public file::

   <a href="https://example.org/index.php?eID=dumpFile&t=f&f=123&dl=1&fn=alternative-name.jpg&token=79bce812">Download file</a>

Arguments
=========


.. _link.file_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.file_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _link.file_aria:
aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _link.file_file:
file
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the file to create a link to

.. _link.file_download:
download
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Specifies if file should be downloaded instead of displayed

.. _link.file_filename:
filename
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an alternative filename. If filename contains a file extension, this must be the same as from 'file'.

.. _link.file_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _link.file_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.file_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.file_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.file_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _link.file_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _link.file_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.file_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _link.file_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.file_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the name of an anchor

.. _link.file_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _link.file_rev:
rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _link.file_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies where to open the linked document
