.. include:: ../../../../Includes.txt

.. _typo3-fluid-uri-external:

============
uri.external
============


A ViewHelper for creating URIs to external targets.
Currently the specified URI is simply passed through.

Examples
========

Default
-------

::

   <f:uri.external uri="http://www.typo3.org" />

``http://www.typo3.org``

Custom default scheme
---------------------

::

   <f:uri.external uri="typo3.org" defaultScheme="ftp" />

``ftp://typo3.org``

Arguments
=========


.. _uri.external_uri:
uri
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target URI

.. _uri.external_defaultscheme:
defaultScheme
-------------

:aspect:`DataType`
   string

:aspect:`Default`
   'http'

:aspect:`Required`
   false
:aspect:`Description`
   Scheme the href attribute will be prefixed with if specified $uri does not contain a scheme already
