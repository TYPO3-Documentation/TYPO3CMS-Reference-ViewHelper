.. include:: /Includes.rst.txt

.. _typo3-fluid-widget-autocomplete:

===================
widget.autocomplete
===================


Simple autocomplete widget.

.. note::
    Make sure to include jQuery and jQuery UI in the HTML, like that::

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />

You can include the provided TypoScript template that includes the above snippet to the pages headerData.

Examples
========

Render lib object::

   <input type="text" id="name" />
   <f:widget.autocomplete for="name" objects="{posts}" searchProperty="author">

Output::

   <input type="text" id="name" />

The input field and the required JavaScript for the Ajax communication.
See Resources/Private/Templates/ViewHelpers/Widget/Autocomplete/Index.html

Arguments
=========


.. _widget.autocomplete_customwidgetid:
customWidgetId
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Extend the widget identifier with a custom widget id

.. _widget.autocomplete_objects:
objects
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Objects to auto-complete

.. _widget.autocomplete_for:
for
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Property to fill

.. _widget.autocomplete_searchproperty:
searchProperty
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Property to search within when filtering list
