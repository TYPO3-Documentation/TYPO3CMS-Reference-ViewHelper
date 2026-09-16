:navigation-title: uri.page

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-page:

==================================
Uri.page ViewHelper `<f:uri.page>`
==================================

..  typo3:viewhelper:: uri.page
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-uri-page-example:

Examples
========

..  _typo3-fluid-uri-page-uri-to-the-current-page:

URI to the current page
-----------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.page>page link</f:uri.page>

..  code-block:: text
    :caption: Output

    /page/path/name.html

Depending on current page, routing and page path configuration.

..  _typo3-fluid-uri-page-query-parameters:

Query parameters
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.page pageUid="1" additionalParams="{foo: 'bar'}" />

..  code-block:: text
    :caption: Output

    /page/path/name.html?foo=bar

Depending on current page, routing and page path configuration.

..  _typo3-fluid-uri-page-query-parameters-for-extensions:

Query parameters for extensions
-------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}" />

..  code-block:: text
    :caption: Output

    /page/path/name.html?extension_key[foo]=bar

Depending on current page, routing and page path configuration.

..  _typo3-fluid-uri-page-arguments:

Arguments
=========

..  typo3:viewhelper:: uri.page
    :source: ../../Global.json
    :display: arguments-only
