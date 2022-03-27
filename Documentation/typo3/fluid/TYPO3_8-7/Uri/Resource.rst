.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-resource:

============
uri.resource
============


A view helper for creating URIs to resources.

Examples
========

Defaults::

   <link href="{f:uri.resource(path:'css/stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="Resources/Packages/MyPackage/stylesheet.css" rel="stylesheet" />

(depending on current package)

Arguments
=========


.. _uri.resource_path:
path
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The path and filename of the resource (relative to Public resource directory of the extension).

.. _uri.resource_extensionname:
extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target extension name. If not set, the current extension name will be used

.. _uri.resource_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If set, an absolute URI is rendered
