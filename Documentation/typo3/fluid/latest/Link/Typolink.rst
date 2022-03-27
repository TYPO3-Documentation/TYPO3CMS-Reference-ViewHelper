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
       useCacheHash="true"
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


.. _link.typolink_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`


.. _link.typolink_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`


.. _link.typolink_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`


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


.. _link.typolink_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`


.. _link.typolink_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`


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


.. _link.typolink_addquerystringexclude:
addQueryStringExclude
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`


.. _link.typolink_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Ensure the resulting URL is an absolute URL
