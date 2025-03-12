:navigation-title: uri.action

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-action:

======================================
Uri.action ViewHelper `<f:uri.action>`
======================================

..  typo3:viewhelper:: uri.action
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-uri-action-example:

Examples
========

URI to the show-action of the current controller::

   <f:uri.action action="show" />

``/page/path/name.html?tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz``

Depending on current page, routing and page path configuration.
