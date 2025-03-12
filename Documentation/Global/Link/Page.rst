:navigation-title: link.page

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-page:

====================================
Link.page ViewHelper `<f:link.page>`
====================================

..  typo3:viewhelper:: link.page
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-link-page-example:

Examples
========

Link to the current page
------------------------

::

   <f:link.page>page link</f:link.page>

Output::

   <a href="/page/path/name.html">page link</a>

Depending on current page, routing and page path configuration.

Query parameters
----------------

::

   <f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>

Output::

   <a href="/page/path/name.html?foo=bar">page link</a>

Depending on current page, routing and page path configuration.

Query parameters for extensions
-------------------------------

::

   <f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>

Output::

   <a href="/page/path/name.html?extension_key[foo]=bar">page link</a>

Depending on current page, routing and page path configuration.
