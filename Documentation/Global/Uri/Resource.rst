:navigation-title: uri.resource

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-resource:

==========================================
Uri.resource ViewHelper `<f:uri.resource>`
==========================================

..  typo3:viewhelper:: uri.resource
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-uri-resource-example:

Examples
========

..  _typo3-fluid-uri-resource-best-practice-with-ext-syntax:

Best practice with EXT: syntax
------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <link href="{f:uri.resource(path:'EXT:indexed_search/Resources/Public/Css/Stylesheet.css')}" rel="stylesheet" />

..  code-block:: html
    :caption: Output

    <link href="typo3/sysext/indexed_search/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Preferred syntax that works in both extbase and non-extbase context.

..  _typo3-fluid-uri-resource-defaults:

Defaults
--------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <link href="{f:uri.resource(path:'Css/Stylesheet.css')}" rel="stylesheet" />

..  code-block:: html
    :caption: Output

    <link href="typo3conf/ext/example_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Works only in extbase context since it uses the extbase request to find current extension, magically adds 'Resources/Public' to path.

..  _typo3-fluid-uri-resource-with-extension-name:

With extension name
-------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <link href="{f:uri.resource(path:'Css/Stylesheet.css', extensionName: 'AnotherExtension')}" rel="stylesheet" />

..  code-block:: html
    :caption: Output

    <link href="typo3conf/ext/another_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Magically adds 'Resources/Public' to path.

..  _typo3-fluid-uri-resource-arguments:

Arguments of the `<f:uri.resource>` ViewHelper
==============================================

..  typo3:viewhelper:: uri.resource
    :source: ../../Global.json
    :display: arguments-only
