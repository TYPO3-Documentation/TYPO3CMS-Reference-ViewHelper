:navigation-title: link.action

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-action:

========================================
Link.action ViewHelper `<f:link.action>`
========================================

..  typo3:viewhelper:: link.action
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-link-action-example:

Examples
========

link to the show-action of the current controller::

   <f:link.action action="show">action link</f:link.action>

Output::

   <a href="index.php?id=123&tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz">action link</a>

Depending on the current page and your TypoScript configuration.
