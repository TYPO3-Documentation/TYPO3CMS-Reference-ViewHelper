.. include:: /Includes.rst.txt

.. _typo3-fluid-be-container:

============
be.container
============


View helper which allows you to create extbase based modules in the style of TYPO3 default modules.

Examples
========

Simple::

   <f:be.container>your module content</f:be.container>

Output::

   "your module content" wrapped with proper head & body tags.
Default backend CSS styles and JavaScript will be included

All options::

   <f:be.container pageTitle="foo" enableClickMenu="false" loadExtJs="true" loadExtJsTheme="false" enableExtJsDebug="true" loadJQuery="true" includeCssFiles="{0: '{f:uri.resource(path:\'Css/Styles.css\')}'}" includeJsFiles="{0: '{f:uri.resource(path:\'JavaScript/Library1.js\')}', 1: '{f:uri.resource(path:\'JavaScript/Library2.js\')}'}" addJsInlineLabels="{0: 'label1', 1: 'label2'}">your module content</f:be.container>

Output::

   "your module content" wrapped with proper head & body tags.
   Custom CSS file EXT:your_extension/Resources/Public/Css/styles.css and
   JavaScript files EXT:your_extension/Resources/Public/JavaScript/Library1.js and EXT:your_extension/Resources/Public/JavaScript/Library2.js
   will be loaded, plus ExtJS and jQuery and some inline labels for usage in JS code.

Arguments
=========


.. _be.container_pagetitle:
pageTitle
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _be.container_enableclickmenu:
enableClickMenu
---------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, loads clickmenu.js required by BE context menus. Defaults to TRUE. This option will be removed in TYPO3 v9

.. _be.container_loadextjs:
loadExtJs
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Specifies whether to load ExtJS library. Defaults to FALSE. This option will be removed in TYPO3 v9

.. _be.container_loadextjstheme:
loadExtJsTheme
--------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   Whether to load ExtJS "grey" theme. Defaults to FALSE. This option will be removed in TYPO3 v9

.. _be.container_enableextjsdebug:
enableExtJsDebug
----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, debug version of ExtJS is loaded. Use this for development only. This option will be removed in TYPO3 v9

.. _be.container_loadjquery:
loadJQuery
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Whether to load jQuery library. Defaults to FALSE. This option will be removed in TYPO3 v9

.. _be.container_includecssfiles:
includeCssFiles
---------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   List of custom CSS file to be loaded

.. _be.container_includejsfiles:
includeJsFiles
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   List of custom JavaScript file to be loaded

.. _be.container_addjsinlinelabels:
addJsInlineLabels
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Custom labels to add to JavaScript inline labels

.. _be.container_includerequirejsmodules:
includeRequireJsModules
-----------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   List of RequireJS modules to be loaded

.. _be.container_jquerynamespace:
jQueryNamespace
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Store the jQuery object in a specific namespace. This option will be removed in TYPO3 v9
