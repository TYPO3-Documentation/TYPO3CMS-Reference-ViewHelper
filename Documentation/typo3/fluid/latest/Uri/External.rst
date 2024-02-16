.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-external:

==============================================
uri.external ViewHelper `<fluid:uri.external>`
==============================================


A ViewHelper for creating URIs to external targets.
Currently the specified URI is simply passed through.

Examples
========

Default
-------

::

   <f:uri.external uri="https://www.typo3.org" />

``https://www.typo3.org``

Custom default scheme
---------------------

::

   <f:uri.external uri="typo3.org" defaultScheme="ftp" />

``ftp://typo3.org``


.. _typo3-fluid-uri-external_arguments:

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
   'https'

:aspect:`Required`
   false
:aspect:`Description`
   Scheme the href attribute will be prefixed with if specified $uri does not contain a scheme already
