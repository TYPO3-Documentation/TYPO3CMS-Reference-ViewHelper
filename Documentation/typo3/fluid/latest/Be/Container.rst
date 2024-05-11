..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/ContainerViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/ContainerViewHelper.php
:navigation-title: be.container
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-container:

==========================================
Be.container ViewHelper `<f:be.container>`
==========================================



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

.. _typo3-fluid-be-container_source:

Source code
===========

Go to the source code of this ViewHelper: `ContainerViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/ContainerViewHelper.php>`__.

.. _typo3-fluid-be-container_arguments:

Arguments
=========

The following arguments are available for `<f:be.container>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-container-pagetitle_argument:

..  confval:: pageTitle
    :name: typo3-fluid-be-container-pagetitle
    :type: string
    :required: false

    Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _typo3-fluid-be-container-includecssfiles_argument:

..  confval:: includeCssFiles
    :name: typo3-fluid-be-container-includecssfiles
    :type: mixed
    :required: false

    List of custom CSS file to be loaded

.. _typo3-fluid-be-container-includejsfiles_argument:

..  confval:: includeJsFiles
    :name: typo3-fluid-be-container-includejsfiles
    :type: mixed
    :required: false

    List of custom JavaScript file to be loaded

.. _typo3-fluid-be-container-addjsinlinelabels_argument:

..  confval:: addJsInlineLabels
    :name: typo3-fluid-be-container-addjsinlinelabels
    :type: mixed
    :required: false

    Custom labels to add to JavaScript inline labels

.. _typo3-fluid-be-container-includerequirejsmodules_argument:

..  confval:: includeRequireJsModules
    :name: typo3-fluid-be-container-includerequirejsmodules
    :type: mixed
    :required: false

    List of RequireJS modules to be loaded

.. _typo3-fluid-be-container-enabledocheader_argument:

..  confval:: enableDocHeader
    :name: typo3-fluid-be-container-enabledocheader
    :type: boolean
    :required: false

    Add an empty doc header
