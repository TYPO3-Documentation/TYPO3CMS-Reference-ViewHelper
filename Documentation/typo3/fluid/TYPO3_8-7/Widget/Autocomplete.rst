.. include:: ../../../../Includes.txt

.. _typo3-fluid-widget-autocomplete:

===================
widget.autocomplete
===================


Simple paginate widget
Note: Make sure to include jQuery and jQuery UI in the HTML, like that::

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/themes/base/jquery-ui.css" type="text/css" media="all" />
   <link rel="stylesheet" href="https://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />

You can include the provided TS template that includes the above snippet to the pages headerData.

Examples
========

Render lib object::

   <input type="text" id="name" />
   <f:widget.autocomplete for="name" objects="{posts}" searchProperty="author">

Output::

   <input type="text" id="name" />

the input field and the required JavaScript for the Ajax communication (see Resources/Private/Templates/ViewHelpers/Widget/Autocomplete/Index.html

Arguments
=========


.. _widget.autocomplete_customwidgetid:
customWidgetId
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Extend the widget identifier with a custom widget id
