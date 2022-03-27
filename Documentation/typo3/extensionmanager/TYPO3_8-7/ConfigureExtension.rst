.. include:: /Includes.rst.txt

.. _typo3-extensionmanager-configureextension:

==================
configureExtension
==================


View helper for configure extension link

Arguments
=========


.. _configureextension_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _configureextension_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _configureextension_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _configureextension_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _configureextension_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _configureextension_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _configureextension_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _configureextension_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _configureextension_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _configureextension_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _configureextension_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _configureextension_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the name of an anchor

.. _configureextension_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _configureextension_rev:
rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _configureextension_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies where to open the linked document

.. _configureextension_extension:
extension
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Extension configuration array with extension information

.. _configureextension_forceconfiguration:
forceConfiguration
------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE the content is only returned if a link could be generated

.. _configureextension_showdescription:
showDescription
---------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE the extension description is also shown in the title attribute
