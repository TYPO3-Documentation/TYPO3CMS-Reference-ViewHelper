:navigation-title: uri.external

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-external:

==========================================
Uri.external ViewHelper `<f:uri.external>`
==========================================

..  typo3:viewhelper:: uri.external
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-uri-external-example:

Examples
========

..  _typo3-fluid-uri-external-default:

Default
-------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.external uri="https://www.typo3.org" />

..  code-block:: text
    :caption: Output

    https://www.typo3.org

..  _typo3-fluid-uri-external-custom-default-scheme:

Custom default scheme
---------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.external uri="typo3.org" defaultScheme="ftp" />

..  code-block:: text
    :caption: Output

    ftp://typo3.org

..  _typo3-fluid-uri-external-arguments:

Arguments
=========

..  typo3:viewhelper:: uri.external
    :source: ../../Global.json
    :display: arguments-only
