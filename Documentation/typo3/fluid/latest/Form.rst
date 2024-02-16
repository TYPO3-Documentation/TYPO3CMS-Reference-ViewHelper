.. include:: /Includes.rst.txt

.. _typo3-fluid-form:

==============================
form ViewHelper `<fluid:form>`
==============================


Form ViewHelper. Generates a :html:`<form>` Tag. Tailored for extbase plugins, uses extbase Request.

Basic usage
===========

Use :html:`<f:form>` to output an HTML :html:`<form>` tag which is targeted
at the specified action, in the current controller and package.
It will submit the form data via a POST request. If you want to change this,
use :html:`method="get"` as an argument.

Examples
========

A complex form with a specified encoding type
---------------------------------------------

Form with enctype set::

   <f:form action=".." controller="..." package="..." enctype="multipart/form-data">...</f:form>

A Form which should render a domain object
------------------------------------------

Binding a domain object to a form::

   <f:form action="..." name="customer" object="{customer}">
      <f:form.hidden property="id" />
      <f:form.textarea property="name" />
   </f:form>

This automatically inserts the value of ``{customer.name}`` inside the
textarea and adjusts the name of the textarea accordingly.


.. _typo3-fluid-form_arguments:

Arguments
=========


.. _form_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _form_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _form_aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _form_action:

action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
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
   false
:aspect:`Description`
   Arguments

.. _form_controller:

controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target controller

.. _form_extensionname:

extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target Extension Name (without `tx_` prefix and no underscores). If NULL the current extension name is used

.. _form_pluginname:

pluginName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target plugin. If empty, the current plugin name is used

.. _form_pageuid:

pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target page uid

.. _form_object:

object
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Object to use for the form. Use in conjunction with the "property" attribute on the sub tags

.. _form_pagetype:

pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target page type

.. _form_nocache:

noCache
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _form_section:

section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the action URI (only active if $actionUri is not set)

.. _form_format:

format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
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
   false
:aspect:`Description`
   Additional action URI query parameters that won't be prefixed like $arguments (overrule $arguments) (only active if $actionUri is not set)

.. _form_absolute:

absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, an absolute action URI is rendered (only active if $actionUri is not set)

.. _form_addquerystring:

addQueryString
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _form_argumentstobeexcludedfromquerystring:

argumentsToBeExcludedFromQueryString
------------------------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be removed from the action URI. Only active if $addQueryString = TRUE and $actionUri is not set

.. _form_fieldnameprefix:

fieldNamePrefix
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Prefix that will be added to all field names within this form. If not set the prefix will be tx_yourExtension_plugin

.. _form_actionuri:

actionUri
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Can be used to overwrite the "action" attribute of the form tag

.. _form_objectname:

objectName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of the object that is bound to this form. If this argument is not specified, the name attribute of this form is used to determine the FormObjectName

.. _form_hiddenfieldclassname:

hiddenFieldClassName
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   HiddenFieldClassName

.. _form_requesttoken:

requestToken
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Whether to add that request token to the form

.. _form_signingtype:

signingType
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Which signing type to be used on the request token (falls back to "nonce")

.. _form_enctype:

enctype
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   MIME type with which the form is submitted

.. _form_method:

method
------

:aspect:`DataType`
   string

:aspect:`Default`
   'post'

:aspect:`Required`
   false
:aspect:`Description`
   Transfer type (get or post)

.. _form_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of form

.. _form_onreset:

onreset
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript: On reset of the form

.. _form_onsubmit:

onsubmit
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript: On submit of the form

.. _form_target:

target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target attribute of the form

.. _form_novalidate:

novalidate
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Indicate that the form is not to be validated on submit.

.. _form_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _form_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _form_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _form_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _form_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _form_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _form_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _form_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _form_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
