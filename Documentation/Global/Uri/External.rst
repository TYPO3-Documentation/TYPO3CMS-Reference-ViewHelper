:navigation-title: uri.external

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-external:

==========================================
Uri.external ViewHelper `<f:uri.external>`
==========================================

..  typo3:viewhelper:: uri.external
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-uri-external-example:

Examples
========

Default
-------

::

   <f:uri.external uri="https://www.typo3.org" />

``https://www.typo3.org``

Custom default scheme
---------------------

::

   <f:uri.external uri="typo3.org" defaultScheme="ftp" />

``ftp://typo3.org``
