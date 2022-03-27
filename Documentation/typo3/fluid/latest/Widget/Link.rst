.. include:: /Includes.rst.txt

.. _typo3-fluid-widget-link:

===========
widget.link
===========


A ViewHelper for creating Links to Extbase actions within widgets.

Examples
========

URI to the show-action of the current controller::

   <f:widget.link action="show">link</f:widget.link>

Output::

   <a href="index.php?id=123&tx_myextension_plugin[widgetIdentifier][action]=show&tx_myextension_plugin[widgetIdentifier][controller]=Standard&cHash=xyz">link</a>

Depending on current page, routing and page path configuration.

Arguments
=========


.. _widget.link_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _widget.link_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _widget.link_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _widget.link_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _widget.link_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _widget.link_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _widget.link_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _widget.link_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _widget.link_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _widget.link_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _widget.link_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _widget.link_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the name of an anchor

.. _widget.link_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _widget.link_rev:
rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _widget.link_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies where to open the linked document

.. _widget.link_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   True whether the cache hash should be appended to the URL

.. _widget.link_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Method to be used for query string

.. _widget.link_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target action

.. _widget.link_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Arguments

.. _widget.link_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _widget.link_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The requested format, e.g. ".html

.. _widget.link_ajax:
ajax
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   TRUE if the URI should be to an AJAX widget, FALSE otherwise.
