.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-external:

============
uri.external
============


A view helper for creating URIs to external targets.
Currently the specified URI is simply passed through.

Examples
========

::

   <f:uri.external uri="https://typo3.org" />

Output::

   https://typo3.org

custom default scheme::

   <f:uri.external uri="typo3.org" defaultScheme="ftp" />

Output::

   ftp://typo3.org

Arguments
=========


.. _uri.external_uri:
uri
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
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
   true
:aspect:`Description`
   Scheme the href attribute will be prefixed with if specified $uri does not contain a scheme already
