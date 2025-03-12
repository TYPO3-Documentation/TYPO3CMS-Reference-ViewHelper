:navigation-title: uri.page

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-page:

==================================
Uri.page ViewHelper `<f:uri.page>`
==================================

..  typo3:viewhelper:: uri.page
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-uri-page-example:

Examples
========

URI to the current page
-----------------------

::

   <f:uri.page>page link</f:uri.page>

``/page/path/name.html``

Depending on current page, routing and page path configuration.

Query parameters
----------------

::

   <f:uri.page pageUid="1" additionalParams="{foo: 'bar'}" />

``/page/path/name.html?foo=bar``

Depending on current page, routing and page path configuration.

Query parameters for extensions
-------------------------------

::

   <f:uri.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}" />

``/page/path/name.html?extension_key[foo]=bar``

Depending on current page, routing and page path configuration.
