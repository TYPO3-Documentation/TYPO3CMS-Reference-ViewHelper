:navigation-title: link.page

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-page:

====================================
Link.page ViewHelper `<f:link.page>`
====================================

..  typo3:viewhelper:: link.page
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-page-example:

Examples
========

..  _typo3-fluid-link-page-link-to-the-current-page:

Link to the current page
------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.page>page link</f:link.page>

..  code-block:: html
    :caption: Output

    <a href="/page/path/name.html">page link</a>

Depending on current page, routing and page path configuration.

..  _typo3-fluid-link-page-query-parameters:

Query parameters
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>

..  code-block:: html
    :caption: Output

    <a href="/page/path/name.html?foo=bar">page link</a>

Depending on current page, routing and page path configuration.

..  _typo3-fluid-link-page-query-parameters-for-extensions:

Query parameters for extensions
-------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>

..  code-block:: html
    :caption: Output

    <a href="/page/path/name.html?extension_key[foo]=bar">page link</a>

Depending on current page, routing and page path configuration.

..  _typo3-fluid-link-page-arguments:

Arguments of the `<f:link.page>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.page
    :source: ../../Global.json
    :display: arguments-only
