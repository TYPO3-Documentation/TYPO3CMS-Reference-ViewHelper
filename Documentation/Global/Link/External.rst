:navigation-title: link.external

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-external:

============================================
Link.external ViewHelper `<f:link.external>`
============================================

..  typo3:viewhelper:: link.external
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-external-example:

Examples
========

..  _typo3-fluid-link-external-default:

Default
-------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.external uri="https://www.typo3.org" target="_blank">external link</f:link.external>

..  code-block:: html
    :caption: Output

    <a href="https://www.typo3.org" target="_blank">external link</a>

..  _typo3-fluid-link-external-custom-default-scheme:

Custom default scheme
---------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.external uri="typo3.org" defaultScheme="ftp">external ftp link</f:link.external>

..  code-block:: html
    :caption: Output

    <a href="ftp://typo3.org">external ftp link</a>

..  _typo3-fluid-link-external-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.external
    :source: ../../Global.json
    :display: arguments-only
