:navigation-title: be.link

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-link:

================================
Be.link ViewHelper `<f:be.link>`
================================

..  typo3:viewhelper:: be.link
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-link-example:

Examples
========

URI to the web_ts module on page 92:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.link route="web_ts" parameters="{id: 92}">Go to web_ts</f:be.link>

..  code-block:: html
    :caption: Output

    <a href="/typo3/module/web/ts?token=b6e9c9f&id=92">Go to web_ts</a>

..  _typo3-fluid-be-link-arguments:

Arguments of the `<f:be.link>` ViewHelper
=========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: be.link
    :source: ../../Global.json
    :display: arguments-only
