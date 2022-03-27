.. include:: /Includes.rst.txt

.. _typo3-fluid-form:

====
form
====


Form view helper. Generates a <form> Tag.

Basic usage
===========

Use <f:form> to output an HTML <form> tag which is targeted at the specified action, in the current controller and package.
It will submit the form data via a POST request. If you want to change this, use method="get" as an argument.
Example::

   <f:form action="...">...</f:form>

A complex form with a specified encoding type
=============================================

Form with enctype set::

   <f:form action=".." controller="..." package="..." enctype="multipart/form-data">...</f:form>

A Form which should render a domain object
==========================================

Binding a domain object to a form::

   <f:form action="..." name="customer" object="{customer}">
      <f:form.hidden property="id" />
      <f:form.textbox property="name" />
   </f:form>

This automatically inserts the value of {customer.name} inside the textbox and adjusts the name of the textbox accordingly.

Arguments
=========


.. _form_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target action

.. _form_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Arguments

.. _form_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target controller

.. _form_extensionname:
extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target Extension Name (without "tx_" prefix and no underscores). If NULL the current extension name is used

.. _form_pluginname:
pluginName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target plugin. If empty, the current plugin name is used

.. _form_pageuid:
pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Target page uid

.. _form_object:
object
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Object to use for the form. Use in conjunction with the "property" attribute on the sub tags

.. _form_pagetype:
pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Target page type

.. _form_nocache:
noCache
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _form_nocachehash:
noCacheHash
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Set this to suppress the cHash query parameter created by TypoLink. You should not need this.

.. _form_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The anchor to be added to the action URI (only active if $actionUri is not set)

.. _form_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The requested format (e.g. ".html") of the target page (only active if $actionUri is not set)

.. _form_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Additional action URI query parameters that won't be prefixed like $arguments (overrule $arguments) (only active if $actionUri is not set)

.. _form_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If set, an absolute action URI is rendered (only active if $actionUri is not set)

.. _form_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If set, the current query parameters will be kept in the action URI (only active if $actionUri is not set)

.. _form_argumentstobeexcludedfromquerystring:
argumentsToBeExcludedFromQueryString
------------------------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Arguments to be removed from the action URI. Only active if $addQueryString = TRUE and $actionUri is not set

.. _form_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Default`
   'GET'

:aspect:`Required`
   true
:aspect:`Description`
   Method to use when keeping query parameters (GET or POST, only active if $actionUri is not set

.. _form_fieldnameprefix:
fieldNamePrefix
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Prefix that will be added to all field names within this form. If not set the prefix will be tx_yourExtension_plugin

.. _form_actionuri:
actionUri
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Can be used to overwrite the "action" attribute of the form tag

.. _form_objectname:
objectName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of the object that is bound to this form. If this argument is not specified, the name attribute of this form is used to determine the FormObjectName

.. _form_hiddenfieldclassname:
hiddenFieldClassName
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   HiddenFieldClassName

.. _form_enctype:
enctype
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   MIME type with which the form is submitted

.. _form_method:
method
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Transfer type (GET or POST)

.. _form_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of form

.. _form_onreset:
onreset
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript: On reset of the form

.. _form_onsubmit:
onsubmit
--------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript: On submit of the form

.. _form_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target attribute of the form

.. _form_novalidate:
novalidate
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Indicate that the form is not to be validated on submit.

.. _form_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _form_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _form_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _form_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _form_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event
