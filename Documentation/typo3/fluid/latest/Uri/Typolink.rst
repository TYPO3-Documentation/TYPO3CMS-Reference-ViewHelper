.. include:: ../../../../Includes.txt

.. _typo3-fluid-uri-typolink:

============
uri.typolink
============


A ViewHelper to create uris from fields supported by the link wizard.

Example
=======

``{link}`` contains ``19 - - - &X=y``

Please note that due to the nature of typolink you have to provide a full
set of parameters.
If you use the parameter only, then target, class and title will be discarded.

Minimal usage
-------------

::

   <f:uri.typolink parameter="{link}" />

:samp:`/page/path/name.html?X=y`

Depending on routing and page path configuration.

Full parameter usage
--------------------

::

   <f:uri.typolink parameter="{link}" additionalParams="&u=b" />

:samp:`/page/path/name.html?X=y&u=b`

Depending on routing and page path configuration.

Arguments
=========


.. _uri.typolink_parameter:
parameter
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   StdWrap.typolink style parameter string

.. _uri.typolink_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   StdWrap.typolink additionalParams

.. _uri.typolink_language:
language
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _uri.typolink_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Deprecated: You should not need this.

.. _uri.typolink_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL

.. _uri.typolink_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Default`
   'GET'

:aspect:`Required`
   false
:aspect:`Description`
   Method to use when keeping query parameters (only active if addQueryString is set)

.. _uri.typolink_addquerystringexclude:
addQueryStringExclude
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define parameters to be excluded from the query string (only active if addQueryString is set)

.. _uri.typolink_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Ensure the resulting URL is an absolute URL
