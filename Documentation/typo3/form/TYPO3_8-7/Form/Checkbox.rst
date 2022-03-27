.. include:: /Includes.rst.txt

.. _typo3-form-form-checkbox:

=============
form.checkbox
=============


Fix a bug within the fluid checkbox viewhelper.
It is not possible to pass a bool value for the 'multiple' option

Scope: frontend

Arguments
=========


.. _form.checkbox_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.checkbox_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.checkbox_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of input tag

.. _form.checkbox_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Value of input tag. Required for checkboxes

.. _form.checkbox_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.checkbox_disabled:
disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.checkbox_errorclass:
errorClass
----------

:aspect:`DataType`
   string

:aspect:`Default`
   'f3-form-error'

:aspect:`Required`
   true
:aspect:`Description`
   CSS class to set if there are errors for this view helper

.. _form.checkbox_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form.checkbox_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.checkbox_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.checkbox_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.checkbox_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form.checkbox_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form.checkbox_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.checkbox_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form.checkbox_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.checkbox_checked:
checked
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Specifies that the input element should be preselected

.. _form.checkbox_multiple:
multiple
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Specifies whether this checkbox belongs to a multivalue (is part of a checkbox group)
