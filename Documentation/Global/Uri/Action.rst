:navigation-title: uri.action

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-action:

======================================
Uri.action ViewHelper `<f:uri.action>`
======================================

..  typo3:viewhelper:: uri.action
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-uri-action-example:

Examples
========

URI to the show-action of the current controller:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.action action="show" />

..  code-block:: text
    :caption: Output

    /page/path/name.html?tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz

Depending on current page, routing and page path configuration.

..  _typo3-fluid-uri-action-arguments:

Arguments
=========

..  typo3:viewhelper:: uri.action
    :source: ../../Global.json
    :display: arguments-only
