.. include:: /Includes.rst.txt

.. _typo3-fluid-link-typolink:

=============
link.typolink
=============


A ViewHelper to create links from fields supported by the link wizard

Examples
========

{link} contains "19 _blank - "testtitle with whitespace" &X=y"

minimal usage::

   <f:link.typolink parameter="{link}">
   Linktext
   </f:link.typolink>

Output::

   <a href="index.php?id=19&X=y" title="testtitle with whitespace" target="_blank">
   Linktext
   </a>

Full parameter usage::

   <f:link.typolink parameter="{link}" target="_blank" class="ico-class" title="some title" additionalParams="&u=b" additionalAttributes="{type:'button'}" useCacheHash="true">
   Linktext
   </f:link.typolink>

Output::

   <a href="index.php?id=19&X=y&u=b" title="some title" target="_blank" class="ico-class" type="button">
   Linktext
   </a>

Arguments
=========


.. _link.typolink_parameter:
parameter
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   StdWrap.typolink style parameter string

.. _link.typolink_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_addquerystring:
addQueryString
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Default`
   'GET'

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_addquerystringexclude:
addQueryStringExclude
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _link.typolink_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Ensure the resulting URL is an absolute URL
