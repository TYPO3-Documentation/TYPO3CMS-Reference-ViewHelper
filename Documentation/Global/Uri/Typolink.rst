:navigation-title: uri.typolink

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-typolink:

==========================================
Uri.typolink ViewHelper `<f:uri.typolink>`
==========================================

..  typo3:viewhelper:: uri.typolink
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-uri-typolink-example:

Example
=======

``{link}`` contains ``19 - - - &X=y``

Please note that due to the nature of typolink you have to provide a full
set of parameters.
If you use the parameter only, then target, class and title will be discarded.

Minimal usage
-------------

::

   <f:uri.typolink parameter="{link}" />

``/page/path/name.html?X=y``

Depending on routing and page path configuration.

Full parameter usage
--------------------

::

   <f:uri.typolink parameter="{link}" additionalParams="&u=b" />

``/page/path/name.html?X=y&u=b``

Depending on routing and page path configuration.
