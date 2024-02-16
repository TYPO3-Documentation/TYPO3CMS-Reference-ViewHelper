.. include:: /Includes.rst.txt

.. _typo3-fluid-form-submit:

========================================
form.submit ViewHelper `<f:form.submit>`
========================================


Creates a submit button.

Examples
========

Defaults
--------

::

   <f:form.submit value="Send Mail" />

Output::

   <input type="submit" />

Dummy content for template preview
----------------------------------

::

   <f:form.submit name="mySubmit" value="Send Mail"><button>dummy button</button></f:form.submit>

Output::

   <input type="submit" name="mySubmit" value="Send Mail" />


.. _typo3-fluid-form-submit_arguments:

Arguments
=========


.. _form.submit_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form.submit_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form.submit_aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _form.submit_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _form.submit_value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _form.submit_property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _form.submit_disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _form.submit_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _form.submit_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form.submit_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form.submit_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form.submit_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _form.submit_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _form.submit_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form.submit_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _form.submit_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
