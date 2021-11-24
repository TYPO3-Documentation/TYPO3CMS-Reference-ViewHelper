.. include:: ../../../../Includes.txt

.. _typo3-fluid-be-uri:

======
be.uri
======


A ViewHelper for creating URIs to modules.

Examples
========

URI to the web_ts module on page 92::

   <f:be.uri route="web_ts" parameters="{id: 92}"/>

:samp:`/typo3/index.php?M=web_ts&moduleToken=b6e9c9f?id=92`

Inline notation::

   {f:be.uri(route: 'web_ts', parameters: '{id: 92}')}

:samp:`/typo3/index.php?route=%2module%2web_ts%2&moduleToken=b6e9c9f?id=92`

Arguments
=========


.. _be.uri_route:
route
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The name of the route

.. _be.uri_parameters:
parameters
----------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   An array of parameters

.. _be.uri_referencetype:
referenceType
-------------

:aspect:`DataType`
   string

:aspect:`Default`
   'absolute'

:aspect:`Required`
   false
:aspect:`Description`
   The type of reference to be generated (one of the constants)
