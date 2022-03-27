.. include:: /Includes.rst.txt

.. _typo3-fluid-be-pagerenderer:

===============
be.pageRenderer
===============


ViewHelper which allows you to create extbase based modules in the style of TYPO3 default modules.

Examples
========

All options::

   <f:be.pageRenderer pageTitle="foo"
       includeCssFiles="{0: '{f:uri.resource(path:\'Css/Styles.css\')}'}"
       includeJsFiles="{0: '{f:uri.resource(path:\'JavaScript/Library1.js\')}', 1: '{f:uri.resource(path:\'JavaScript/Library2.js\')}'}"
       addJsInlineLabels="{0: 'label1', 1: 'label2'}" />

Custom CSS file :file:`EXT:your_extension/Resources/Public/Css/styles.css` and
JavaScript files :file:`EXT:your_extension/Resources/Public/JavaScript/Library1.js` and
:file:`EXT:your_extension/Resources/Public/JavaScript/Library2.js`
will be loaded, plus some inline labels for usage in JS code.

Arguments
=========


.. _be.pagerenderer_pagetitle:
pageTitle
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _be.pagerenderer_includecssfiles:
includeCssFiles
---------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom CSS file to be loaded

.. _be.pagerenderer_includejsfiles:
includeJsFiles
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom JavaScript file to be loaded

.. _be.pagerenderer_addjsinlinelabels:
addJsInlineLabels
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Custom labels to add to JavaScript inline labels

.. _be.pagerenderer_includerequirejsmodules:
includeRequireJsModules
-----------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of RequireJS modules to be loaded

.. _be.pagerenderer_addinlinesettings:
addInlineSettings
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Adds Javascript Inline Setting
