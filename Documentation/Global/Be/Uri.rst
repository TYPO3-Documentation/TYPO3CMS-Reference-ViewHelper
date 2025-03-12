:navigation-title: be.uri

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-uri:

==============================
Be.uri ViewHelper `<f:be.uri>`
==============================

..  typo3:viewhelper:: be.uri
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-uri-example:

Examples
========

URI to the web_ts module on page 92::

   <f:be.uri route="web_ts" parameters="{id: 92}"/>

``/typo3/module/web/ts?token=b6e9c9f&id=92``

Inline notation::

   {f:be.uri(route: 'web_ts', parameters: '{id: 92}')}

``/typo3/module/web/ts?token=b6e9c9f&id=92``
