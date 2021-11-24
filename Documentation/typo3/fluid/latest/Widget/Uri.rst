.. include:: ../../../../Includes.txt

.. _typo3-fluid-widget-uri:

==========
widget.uri
==========


A ViewHelper for creating URIs to Extbase actions within widgets.

Examples
========

URI to the show-action of the current controller::

   <f:widget.uri action="show" />

:samp:`/page/path/name.html?tx_myextension_plugin[widgetIdentifier][action]=show&tx_myextension_plugin[widgetIdentifier][controller]=Standard&cHash=xyz`

Depending on current page, routing and page path configuration.

Arguments
=========


.. _widget.uri_usecachehash:
useCacheHash
------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Deprecated: True whether the cache hash should be appended to the URL

.. _widget.uri_addquerystringmethod:
addQueryStringMethod
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Method to be used for query string

.. _widget.uri_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
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
   false
:aspect:`Description`
   Arguments

.. _widget.uri_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _widget.uri_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The requested format, e.g. ".html

.. _widget.uri_ajax:
ajax
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   TRUE if the URI should be to an AJAX widget, FALSE otherwise.
