:navigation-title: link.external

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-external:

============================================
Link.external ViewHelper `<f:link.external>`
============================================

..  typo3:viewhelper:: link.external
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-link-external-example:

Examples
========

Default
-------

::

   <f:link.external uri="https://www.typo3.org" target="_blank">external link</f:link.external>

Output::

   <a href="https://www.typo3.org" target="_blank">external link</a>

Custom default scheme
---------------------

::

   <f:link.external uri="typo3.org" defaultScheme="ftp">external ftp link</f:link.external>

Output::

   <a href="ftp://typo3.org">external ftp link</a>
