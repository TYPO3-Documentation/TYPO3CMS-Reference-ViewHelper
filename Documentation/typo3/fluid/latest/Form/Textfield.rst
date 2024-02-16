.. include:: /Includes.rst.txt

.. _typo3-fluid-form-textfield:

==============================================
form.textfield ViewHelper `<f:form.textfield>`
==============================================


ViewHelper which creates a text field :html:`<input type="text">`.

Examples
========

Example::

   <f:form.textfield name="myTextBox" value="default value" />

Output::

   <input type="text" name="myTextBox" value="default value" />


.. _typo3-fluid-form-textfield_arguments:

Arguments
=========


.. _form.textfield_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.textfield_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.textfield_aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _form.textfield_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _form.textfield_value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _form.textfield_property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _form.textfield_autofocus:

autofocus
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that an input should automatically get focus when the page loads

.. _form.textfield_disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.textfield_maxlength:

maxlength
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The maxlength attribute of the input field (will not be validated)

.. _form.textfield_readonly:

readonly
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The readonly attribute of the input field

.. _form.textfield_size:

size
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The size of the input field

.. _form.textfield_placeholder:

placeholder
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The placeholder of the textfield

.. _form.textfield_pattern:

pattern
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   HTML5 validation pattern

.. _form.textfield_errorclass:

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

.. _form.textfield_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _form.textfield_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.textfield_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.textfield_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.textfield_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _form.textfield_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _form.textfield_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.textfield_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _form.textfield_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.textfield_required:

required
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If the field is required or not

.. _form.textfield_type:

type
----

:aspect:`DataType`
   string

:aspect:`Default`
   'text'

:aspect:`Required`
   false
:aspect:`Description`
   The field type, e.g. "text", "email", "url" etc.
