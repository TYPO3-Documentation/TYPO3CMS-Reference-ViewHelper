.. include:: /Includes.rst.txt

.. _typo3-fluid-link-typolink:

=============
link.typolink
=============


A ViewHelper to create links from fields supported by the link wizard

Example
=======

``{link}`` contains: ``t3://page?uid=2&arg1=val1#9 _blank some-css-class "Title containing Whitespace"``.

Or a legacy version from older TYPO3 versions:
``{link}`` contains: ``9 _blank - "testtitle with whitespace" &X=y``.

Minimal usage
-------------

::

   <f:link.typolink parameter="{link}">
      Linktext
   </f:link.typolink>

Output::

   <a href="/page/path/name.html?X=y" title="testtitle with whitespace" target="_blank">
      Linktext
   </a>

Depending on current page, routing and page path configuration.

Full parameter usage
--------------------

::

   <f:link.typolink parameter="{link}" additionalParams="&u=b"
       target="_blank"
       class="ico-class" title="some title"
       additionalAttributes="{type:'button'}"
   >
      Linktext
   </f:link.typolink>

Output::

   <a href="/page/path/name.html?X=y&u=b" title="some title" target="_blank" class="ico-class" type="button">
       Linktext
   </a>

Depending on routing and page path configuration.

Arguments
=========


.. _link.typolink_parameter:

parameter
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   StdWrap.typolink style parameter string

.. _link.typolink_target:

target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define where to display the linked URL

.. _link.typolink_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define classes for the link element

.. _link.typolink_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the title for the link element

.. _link.typolink_language:

language
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _link.typolink_additionalparams:

additionalParams
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Additional query parameters to be attached to the resulting URL

.. _link.typolink_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes to be added directly to the resulting HTML tag

.. _link.typolink_usecachehash:

useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Deprecated: You should not need this.

.. _link.typolink_addquerystring:

addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL

.. _link.typolink_addquerystringmethod:

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

.. _link.typolink_addquerystringexclude:

addQueryStringExclude
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define parameters to be excluded from the query string (only active if addQueryString is set)

.. _link.typolink_absolute:

absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Ensure the resulting URL is an absolute URL

.. _link.typolink_parts-as:

parts-as
--------

:aspect:`DataType`
   string

:aspect:`Default`
   'typoLinkParts'

:aspect:`Required`
   false
:aspect:`Description`
   Variable name containing typoLink parts (if any)
