..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php
:navigation-title: be.pageRenderer

.. include:: /Includes.rst.txt

.. _typo3-fluid-be-pagerenderer:

================================================
Be.pageRenderer ViewHelper `<f:be.pageRenderer>`
================================================



ViewHelper to register backend module resources like CSS and JavaScript using the PageRenderer.

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

.. _typo3-fluid-be-pagerenderer_source:

Source code
===========

Go to the source code of this ViewHelper: `PageRendererViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php>`__.

.. _typo3-fluid-be-pagerenderer_arguments:

Arguments
=========

The following arguments are available for `<f:be.pageRenderer>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-be-pagerenderer-pagetitle_argument:

..  confval:: pageTitle
    :name: typo3-fluid-be-pagerenderer-pagetitle
    :type: string
    :required: false

    Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _typo3-fluid-be-pagerenderer-includecssfiles_argument:

..  confval:: includeCssFiles
    :name: typo3-fluid-be-pagerenderer-includecssfiles
    :type: mixed
    :required: false

    List of custom CSS file to be loaded

.. _typo3-fluid-be-pagerenderer-includejsfiles_argument:

..  confval:: includeJsFiles
    :name: typo3-fluid-be-pagerenderer-includejsfiles
    :type: mixed
    :required: false

    List of custom JavaScript file to be loaded

.. _typo3-fluid-be-pagerenderer-addjsinlinelabels_argument:

..  confval:: addJsInlineLabels
    :name: typo3-fluid-be-pagerenderer-addjsinlinelabels
    :type: mixed
    :required: false

    Custom labels to add to JavaScript inline labels

.. _typo3-fluid-be-pagerenderer-includerequirejsmodules_argument:

..  confval:: includeRequireJsModules
    :name: typo3-fluid-be-pagerenderer-includerequirejsmodules
    :type: mixed
    :required: false

    List of RequireJS modules to be loaded

.. _typo3-fluid-be-pagerenderer-addinlinesettings_argument:

..  confval:: addInlineSettings
    :name: typo3-fluid-be-pagerenderer-addinlinesettings
    :type: mixed
    :required: false

    Adds Javascript Inline Setting
