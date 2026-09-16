:navigation-title: be.uri

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-uri:

==============================
Be.uri ViewHelper `<f:be.uri>`
==============================

..  typo3:viewhelper:: be.uri
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-uri-example:

Examples
========

URI to the web_ts module on page 92:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.uri route="web_ts" parameters="{id: 92}"/>

..  code-block:: text
    :caption: Output

    /typo3/module/web/ts?token=b6e9c9f&id=92

Inline notation:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    {f:be.uri(route: 'web_ts', parameters: '{id: 92}')}

..  code-block:: text
    :caption: Output

    /typo3/module/web/ts?token=b6e9c9f&id=92

..  _typo3-fluid-be-uri-arguments:

Arguments of the `<f:be.uri>` ViewHelper
========================================

..  typo3:viewhelper:: be.uri
    :source: ../../Global.json
    :display: arguments-only
