:navigation-title: form.typoScriptConstants
.. include:: /Includes.rst.txt

.. _typo3-core-form-typoscriptconstants:

=====================================================================
form.typoScriptConstants ViewHelper `<core:form.typoScriptConstants>`
=====================================================================


ViewHelper for rendering
- extension configuration forms in install tool (Settings -> Extension Configuration
- site settings in Sites Module (site settings per site configuration)


.. _typo3-core-form-typoscriptconstants_arguments:

Arguments
=========


.. _typo3-core-form-typoscriptconstants-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-core-form-typoscriptconstants-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-core-form-typoscriptconstants-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-core-form-typoscriptconstants-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _typo3-core-form-typoscriptconstants-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _typo3-core-form-typoscriptconstants-configuration:

configuration
-------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The TypoScript constant configuration, e.g. labels, category, type and value.

.. _typo3-core-form-typoscriptconstants-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-core-form-typoscriptconstants-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-core-form-typoscriptconstants-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-core-form-typoscriptconstants-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-core-form-typoscriptconstants-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-core-form-typoscriptconstants-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-core-form-typoscriptconstants-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-core-form-typoscriptconstants-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-core-form-typoscriptconstants-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
