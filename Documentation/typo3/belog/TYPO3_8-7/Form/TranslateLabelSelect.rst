.. include:: /Includes.rst.txt

.. _typo3-belog-form-translatelabelselect:

=========================
form.translateLabelSelect
=========================


Extends the usual select view helper, but additionally translates
the select option labels

Example::

   <belog:form.translateLabelSelect property="number" options="{settings.selectableNumberOfLogEntries}" optionLabelPrefix="numbers"

Will lookup number.200 (or whatever optionValue is given) in locallang database

Arguments
=========


.. _form.translatelabelselect_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.translatelabelselect_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.translatelabelselect_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of input tag

.. _form.translatelabelselect_value:
value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value of input tag

.. _form.translatelabelselect_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.translatelabelselect_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form.translatelabelselect_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.translatelabelselect_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.translatelabelselect_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.translatelabelselect_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form.translatelabelselect_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form.translatelabelselect_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.translatelabelselect_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form.translatelabelselect_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.translatelabelselect_size:
size
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Size of input field

.. _form.translatelabelselect_disabled:
disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.translatelabelselect_options:
options
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Associative array with internal IDs as key, and the values are displayed in the select box. Can be combined with or replaced by child f:form.select.* nodes.

.. _form.translatelabelselect_optionsaftercontent:
optionsAfterContent
-------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If true, places auto-generated option tags after those rendered in the tag content. If false, automatic options come first.

.. _form.translatelabelselect_optionvaluefield:
optionValueField
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   If specified, will call the appropriate getter on each object to determine the value.

.. _form.translatelabelselect_optionlabelfield:
optionLabelField
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   If specified, will call the appropriate getter on each object to determine the label.

.. _form.translatelabelselect_sortbyoptionlabel:
sortByOptionLabel
-----------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If true, List will be sorted by label.

.. _form.translatelabelselect_selectallbydefault:
selectAllByDefault
------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If specified options are selected if none was set before.

.. _form.translatelabelselect_errorclass:
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

.. _form.translatelabelselect_prependoptionlabel:
prependOptionLabel
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   If specified, will provide an option at first position with the specified label.

.. _form.translatelabelselect_prependoptionvalue:
prependOptionValue
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   If specified, will provide an option at first position with the specified value.

.. _form.translatelabelselect_multiple:
multiple
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If set multiple options may be selected.

.. _form.translatelabelselect_optionlabelprefix:
optionLabelPrefix
-----------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Prefix for locallang lookup
