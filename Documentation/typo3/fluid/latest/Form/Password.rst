.. include:: /Includes.rst.txt

.. _typo3-fluid-form-password:

=============
form.password
=============


ViewHelper which creates a simple Password Text Box :html:`<input type="password">`.

Examples
========

Example::

   <f:form.password name="myPassword" />

Output::

   <input type="password" name="myPassword" value="default value" />

Arguments
=========


.. _form.password_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.password_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.password_aria:
aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _form.password_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _form.password_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _form.password_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.password_disabled:
disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.password_maxlength:
maxlength
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The maxlength attribute of the input field (will not be validated)

.. _form.password_placeholder:
placeholder
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The placeholder of the textfield

.. _form.password_readonly:
readonly
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The readonly attribute of the input field

.. _form.password_autocomplete:
autocomplete
------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specify the autocomplete behaviour for password managers

.. _form.password_size:
size
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The size of the input field

.. _form.password_errorclass:
errorClass
----------

:aspect:`DataType`
   string

:aspect:`Default`
   'f3-form-error'

:aspect:`Required`
   false
:aspect:`Description`
   CSS class to set if there are errors for this ViewHelper

.. _form.password_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _form.password_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.password_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.password_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.password_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _form.password_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _form.password_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.password_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _form.password_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
