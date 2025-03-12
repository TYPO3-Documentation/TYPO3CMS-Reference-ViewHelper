:navigation-title: uri.resource

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-resource:

==========================================
Uri.resource ViewHelper `<f:uri.resource>`
==========================================

..  typo3:viewhelper:: uri.resource
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-uri-resource-example:

Examples
========

Best practice with EXT: syntax
------------------------------

::

   <link href="{f:uri.resource(path:'EXT:indexed_search/Resources/Public/Css/Stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="typo3/sysext/indexed_search/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Preferred syntax that works in both extbase and non-extbase context.

Defaults
--------

::

   <link href="{f:uri.resource(path:'Css/Stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/example_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Works only in extbase context since it uses the extbase request to find current extension, magically adds 'Resources/Public' to path.

With extension name
-------------------

::

   <link href="{f:uri.resource(path:'Css/Stylesheet.css', extensionName: 'AnotherExtension')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/another_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Magically adds 'Resources/Public' to path.
