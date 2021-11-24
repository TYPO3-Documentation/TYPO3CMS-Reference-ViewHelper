.. include:: ../../../../Includes.txt

.. _typo3-form-form-datepicker:

===============
form.datePicker
===============


Display a jQuery date picker.

Note: Requires jQuery UI to be included on the page.

Scope: frontend

Arguments
=========


.. _form.datepicker_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.datepicker_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.datepicker_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of input tag

.. _form.datepicker_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value of input tag

.. _form.datepicker_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.datepicker_size:
size
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The size of the input field

.. _form.datepicker_placeholder:
placeholder
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies a short hint that describes the expected value of an input element

.. _form.datepicker_errorclass:
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

.. _form.datepicker_initialdate:
initialDate
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Initial date (@see https://www.php.net/manual/en/datetime.formats.php for supported formats)

.. _form.datepicker_enabledatepicker:
enableDatePicker
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   Enable the Datepicker

.. _form.datepicker_previewmode:
previewMode
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Preview mde flag

.. _form.datepicker_dateformat:
dateFormat
----------

:aspect:`DataType`
   string

:aspect:`Default`
   'Y-m-d'

:aspect:`Required`
   true
:aspect:`Description`
   The date format

.. _form.datepicker_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form.datepicker_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.datepicker_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.datepicker_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.datepicker_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form.datepicker_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form.datepicker_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.datepicker_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form.datepicker_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event
