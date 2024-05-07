:navigation-title: be.pageRenderer
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-pagerenderer:

================================================
be.pageRenderer ViewHelper `<f:be.pageRenderer>`
================================================


ViewHelper to register backend module resources like CSS and JavaScript using the PageRenderer.

Examples
========

All options::

   <f:be.pageRenderer
       pageTitle="foo"
       includeCssFiles="{0: 'EXT:my_ext/Resources/Public/Css/Stylesheet.css'}"
       includeJsFiles="{0: 'EXT:my_ext/Resources/Public/JavaScript/Library1.js', 1: 'EXT:my_ext/Resources/Public/JavaScript/Library2.js'}"
       addJsInlineLabels="{'my_ext.label1': 'LLL:EXT:my_ext/Resources/Private/Language/locallang.xlf:label1'}"
       includeJavaScriptModules="{0: '@my-vendor/my-ext/my-module.js'}"
       includeRequireJsModules="{0: 'EXT:my_ext/Resources/Public/JavaScript/RequireJsModule'}"
       addInlineSettings="{'some.setting.key': 'some.setting.value'}"
   />

This will load the specified css, js files and requireJs modules, adds a custom js
inline setting, and adds a resolved label to be used in js.


.. _typo3-fluid-be-pagerenderer_arguments:

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

.. _be.pagerenderer_includejavascriptmodules:

includeJavaScriptModules
------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of JavaScript modules to be loaded

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
