.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-resource:

============
uri.resource
============


A ViewHelper for creating URIs to resources.

Examples
========

Defaults
--------

::

   <link href="{f:uri.resource(path:'css/stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/example_extension/Resources/Resources/Public/css/stylesheet.css" rel="stylesheet" />

Depending on current extension.

With extension name
-------------------

::

   <link href="{f:uri.resource(path:'css/stylesheet.css', extensionName: 'AnotherExtension')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/another_extension/Resources/Resources/Public/css/stylesheet.css" rel="stylesheet" />

Arguments
=========


.. _uri.resource_path:
path
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The path and filename of the resource (relative to Public resource directory of the extension).

.. _uri.resource_extensionname:
extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target extension name. If not set, the current extension name will be used

.. _uri.resource_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set, an absolute URI is rendered
