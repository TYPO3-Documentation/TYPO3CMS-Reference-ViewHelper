:navigation-title: link.action

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-action:

========================================
Link.action ViewHelper `<f:link.action>`
========================================

..  typo3:viewhelper:: link.action
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-action-example:

Examples
========

Link to the show-action of the current controller:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.action action="show">action link</f:link.action>

..  code-block:: html
    :caption: Output

    <a href="index.php?id=123&tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz">action link</a>

Depending on the current page and your TypoScript configuration.

..  _typo3-fluid-link-action-arguments:

Arguments of the `<f:link.action>` ViewHelper
=============================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.action
    :source: ../../Global.json
    :display: arguments-only
