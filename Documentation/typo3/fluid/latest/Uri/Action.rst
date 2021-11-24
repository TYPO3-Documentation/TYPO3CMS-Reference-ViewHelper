.. include:: ../../../../Includes.txt

.. _typo3-fluid-uri-action:

==========
uri.action
==========


A ViewHelper for creating URIs to extbase actions.

Examples
========

URI to the show-action of the current controller::

   <f:uri.action action="show" />

:samp:`/page/path/name.html?tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz`

Depending on current page, routing and page path configuration.

Arguments
=========


.. _uri.action_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target action

.. _uri.action_arguments:
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

.. _uri.action_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target controller. If NULL current controllerName is used

.. _uri.action_extensionname:
extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target Extension Name (without "tx_" prefix and no underscores). If NULL the current extension name is used

.. _uri.action_pluginname:
pluginName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target plugin. If empty, the current plugin name is used

.. _uri.action_pageuid:
pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target page. See TypoLink destination

.. _uri.action_pagetype:
pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Type of the target page. See typolink.parameter

.. _uri.action_nocache:
noCache
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _uri.action_nocachehash:
noCacheHash
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Deprecated: Set this to suppress the cHash query parameter created by TypoLink. You should not need this.

.. _uri.action_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _uri.action_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The requested format, e.g. ".html

.. _uri.action_linkaccessrestrictedpages:
linkAccessRestrictedPages
-------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _uri.action_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _uri.action_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, an absolute URI is rendered

.. _uri.action_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URI

.. _uri.action_argumentstobeexcludedfromquerystring:
argumentsToBeExcludedFromQueryString
------------------------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be removed from the URI. Only active if $addQueryString = TRUE

.. _uri.action_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Set which parameters will be kept. Only active if $addQueryString = TRUE
