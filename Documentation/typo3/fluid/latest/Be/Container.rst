.. include:: /Includes.rst.txt

.. _typo3-fluid-be-container:

============
be.container
============


ViewHelper which allows you to create extbase based modules in the style of TYPO3 default modules.

Examples
========

Simple::

   <f:be.container>your module content</f:be.container>

"your module content" wrapped with proper head & body tags.
Default backend CSS styles and JavaScript will be included.

All options::

   <f:be.container pageTitle="foo"
       includeCssFiles="{0: '{f:uri.resource(path:\'Css/Styles.css\')}'}"
       includeJsFiles="{0: '{f:uri.resource(path:\'JavaScript/Library1.js\')}', 1: '{f:uri.resource(path:\'JavaScript/Library2.js\')}'}"
       addJsInlineLabels="{0: 'label1', 1: 'label2'}"
   >
       your module content
   </f:be.container>

"your module content" wrapped with proper head & body tags.
Custom CSS file :file:`EXT:your_extension/Resources/Public/Css/styles.css` and
JavaScript files :file:`EXT:your_extension/Resources/Public/JavaScript/Library1.js` and
:file:`EXT:your_extension/Resources/Public/JavaScript/Library2.js`
will be loaded, plus some inline labels for usage in JS code.

Arguments
=========


.. _be.container_pagetitle:
pageTitle
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _be.container_includecssfiles:
includeCssFiles
---------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom CSS file to be loaded

.. _be.container_includejsfiles:
includeJsFiles
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom JavaScript file to be loaded

.. _be.container_addjsinlinelabels:
addJsInlineLabels
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Custom labels to add to JavaScript inline labels

.. _be.container_includerequirejsmodules:
includeRequireJsModules
-----------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of RequireJS modules to be loaded
