.. include:: /Includes.rst.txt

.. _typo3-fluid-form-select-optgroup:

====================
form.select.optgroup
====================


Adds custom `<optgroup>` tags inside an `<f:form.select>`,
supports further child `<f:form.select.option>` tags.

Arguments
=========


.. _form.select.optgroup_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form.select.optgroup_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.select.optgroup_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.select.optgroup_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.select.optgroup_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form.select.optgroup_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form.select.optgroup_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.select.optgroup_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form.select.optgroup_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.select.optgroup_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.select.optgroup_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.select.optgroup_label:
label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Human-readable label property for the generated optgroup tag

.. _form.select.optgroup_disabled:
disabled
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If true, option group is rendered as disabled
