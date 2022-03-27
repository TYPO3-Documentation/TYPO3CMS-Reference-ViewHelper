.. include:: /Includes.rst.txt

.. _typo3-fluid-link-action:

===========
link.action
===========


A ViewHelper for creating links to extbase actions.

Examples
========

link to the show-action of the current controller::

   <f:link.action action="show">action link</f:link.action>

Output::

   <a href="index.php?id=123&tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz">action link</a>

Depending on the current page and your TypoScript configuration.

Arguments
=========


.. _link.action_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.action_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _link.action_aria:
aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _link.action_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _link.action_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.action_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.action_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.action_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _link.action_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _link.action_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.action_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _link.action_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.action_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the name of an anchor

.. _link.action_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _link.action_rev:
rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _link.action_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies where to open the linked document

.. _link.action_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target action

.. _link.action_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target controller. If NULL current controllerName is used

.. _link.action_extensionname:
extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target Extension Name (without "tx_" prefix and no underscores). If NULL the current extension name is used

.. _link.action_pluginname:
pluginName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target plugin. If empty, the current plugin name is used

.. _link.action_pageuid:
pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target page. See TypoLink destination

.. _link.action_pagetype:
pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Type of the target page. See typolink.parameter

.. _link.action_nocache:
noCache
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _link.action_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _link.action_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The requested format, e.g. ".html

.. _link.action_linkaccessrestrictedpages:
linkAccessRestrictedPages
-------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _link.action_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _link.action_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the URI of the rendered link is absolute

.. _link.action_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URI

.. _link.action_argumentstobeexcludedfromquerystring:
argumentsToBeExcludedFromQueryString
------------------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be removed from the URI. Only active if $addQueryString = TRUE

.. _link.action_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   This argument is not evaluated anymore and will be removed in TYPO3 v12.

.. _link.action_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Arguments for the controller action, associative array
