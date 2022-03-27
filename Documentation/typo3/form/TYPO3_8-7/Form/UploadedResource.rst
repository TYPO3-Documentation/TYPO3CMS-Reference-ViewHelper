.. include:: /Includes.rst.txt

.. _typo3-form-form-uploadedresource:

=====================
form.uploadedResource
=====================


This ViewHelper makes the specified Image object available for its
childNodes.
In case the form is redisplayed because of validation errors, a previously
uploaded image will be correctly used.

Scope: frontend

Arguments
=========


.. _form.uploadedresource_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.uploadedresource_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.uploadedresource_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of input tag

.. _form.uploadedresource_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value of input tag

.. _form.uploadedresource_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.uploadedresource_disabled:
disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.uploadedresource_multiple:
multiple
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies that the file input element should allow multiple selection of files

.. _form.uploadedresource_errorclass:
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

.. _form.uploadedresource_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form.uploadedresource_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.uploadedresource_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.uploadedresource_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.uploadedresource_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form.uploadedresource_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form.uploadedresource_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.uploadedresource_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form.uploadedresource_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.uploadedresource_as:
as
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _form.uploadedresource_accept:
accept
------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Values for the accept attribute
