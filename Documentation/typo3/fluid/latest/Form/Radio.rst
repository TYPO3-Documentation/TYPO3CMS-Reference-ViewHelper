.. include:: /Includes.rst.txt

.. _typo3-fluid-form-radio:

==========
form.radio
==========


ViewHelper which creates a simple radio button :html:`<input type="radio">`.

Examples
========

Simple
------

::

   <f:form.radio name="myRadioButton" value="someValue" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" />

Preselect
---------

::

   <f:form.radio name="myRadioButton" value="someValue" checked="{object.value} == 5" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" checked="checked" />

Depending on bound ``object`` to surrounding :ref:`f:form <typo3-fluid-form>`.

Bind to object property
-----------------------

::

   <f:form.radio property="newsletter" value="1" /> yes
   <f:form.radio property="newsletter" value="0" /> no

Output::

   <input type="radio" name="user[newsletter]" value="1" checked="checked" /> yes
   <input type="radio" name="user[newsletter]" value="0" /> no

Depending on property ``newsletter``.

Arguments
=========


.. _form.radio_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.radio_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.radio_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _form.radio_value:
value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag. Required for radio buttons

.. _form.radio_property:
property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, "name" and "value" properties will be ignored.

.. _form.radio_errorclass:
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

.. _form.radio_checked:
checked
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be preselected

.. _form.radio_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _form.radio_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.radio_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.radio_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.radio_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _form.radio_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _form.radio_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.radio_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _form.radio_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _form.radio_disabled:
disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads
