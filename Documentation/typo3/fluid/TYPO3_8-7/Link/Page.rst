.. include:: /Includes.rst.txt

.. _typo3-fluid-link-page:

=========
link.page
=========


A view helper for creating links to TYPO3 pages.

Examples
========

link to the current page::

   <f:link.page>page link</f:link.page>

Output::

   <a href="index.php?id=123">page link</f:link.action>

(depending on the current page and your TS configuration)

query parameters::

   <f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>

Output::

   <a href="index.php?id=1&foo=bar">page link</f:link.action>

(depending on your TS configuration)

query parameters for extensions::

   <f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>

Output::

   <a href="index.php?id=1&extension_key[foo]=bar">page link</f:link.action>

(depending on your TS configuration)

Arguments
=========


.. _link.page_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.page_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _link.page_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _link.page_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.page_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.page_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.page_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _link.page_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _link.page_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.page_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _link.page_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.page_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target of link

.. _link.page_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the relationship between the current document and the linked document
