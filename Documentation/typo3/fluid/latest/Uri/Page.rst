.. include:: ../../../../Includes.txt

.. _typo3-fluid-uri-page:

========
uri.page
========


A ViewHelper for creating URIs to TYPO3 pages.

Examples
========

URI to the current page
-----------------------

::

   <f:uri.page>page link</f:uri.page>

:samp:`/page/path/name.html`

Depending on current page, routing and page path configuration.

Query parameters
----------------

::

   <f:uri.page pageUid="1" additionalParams="{foo: 'bar'}" />

:samp:`/page/path/name.html?foo=bar`

Depending on current page, routing and page path configuration.

Query parameters for extensions
-------------------------------

::

   <f:uri.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}" />

:samp:`/page/path/name.html?extension_key[foo]=bar`

Depending on current page, routing and page path configuration.

Arguments
=========


.. _uri.page_pageuid:
pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target PID

.. _uri.page_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Query parameters to be attached to the resulting URI

.. _uri.page_pagetype:
pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Type of the target page. See typolink.parameter

.. _uri.page_nocache:
noCache
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _uri.page_nocachehash:
noCacheHash
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Set this to suppress the cHash query parameter created by TypoLink. You should not need this.

.. _uri.page_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _uri.page_linkaccessrestrictedpages:
linkAccessRestrictedPages
-------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _uri.page_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the URI of the rendered link is absolute

.. _uri.page_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URI

.. _uri.page_argumentstobeexcludedfromquerystring:
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

.. _uri.page_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Set which parameters will be kept. Only active if $addQueryString = TRUE
