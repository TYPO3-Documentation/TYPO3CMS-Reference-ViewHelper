:navigation-title: be.pageRenderer

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-pagerenderer:

================================================
Be.pageRenderer ViewHelper `<f:be.pageRenderer>`
================================================

..  typo3:viewhelper:: be.pageRenderer
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-pagerenderer-example:

Examples
========

All options::

   <f:be.pageRenderer
       pageTitle="foo"
       includeCssFiles="{0: 'EXT:my_ext/Resources/Public/Css/Stylesheet.css'}"
       includeJsFiles="{0: 'EXT:my_ext/Resources/Public/JavaScript/Library1.js', 1: 'EXT:my_ext/Resources/Public/JavaScript/Library2.js'}"
       addJsInlineLabels="{'my_ext.label1': 'LLL:EXT:my_ext/Resources/Private/Language/locallang.xlf:label1'}"
       includeJavaScriptModules="{0: '@my-vendor/my-ext/my-module.js'}"
       addInlineSettings="{'some.setting.key': 'some.setting.value'}"
   />

This will load the specified css, js files and JavaScript modules, adds a custom js
inline setting, and adds a resolved label to be used in js.
