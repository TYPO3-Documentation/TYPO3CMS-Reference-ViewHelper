.. include:: /Includes.rst.txt

.. _typo3-fluid-widget-uri:

==========
widget.uri
==========


A view helper for creating URIs to extbase actions within widgets.

Examples
========

URI to the show-action of the current controller::

   <f:widget.uri action="show" />

Output::

   index.php?id=123&tx_myextension_plugin[widgetIdentifier][action]=show&tx_myextension_plugin[widgetIdentifier][controller]=Standard&cHash=xyz

(depending on the current page, widget and your TS configuration)

Arguments
=========


.. _widget.uri_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   True whether the cache hash should be appended to the URL

.. _widget.uri_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Method to be used for query string

.. _widget.uri_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target action

.. _widget.uri_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Arguments

.. _widget.uri_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The anchor to be added to the URI

.. _widget.uri_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The requested format, e.g. ".html

.. _widget.uri_ajax:
ajax
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   TRUE if the URI should be to an AJAX widget, FALSE otherwise.
