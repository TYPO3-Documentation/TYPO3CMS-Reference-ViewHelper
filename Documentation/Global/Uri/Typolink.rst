:navigation-title: uri.typolink

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-typolink:

==========================================
Uri.typolink ViewHelper `<f:uri.typolink>`
==========================================

..  typo3:viewhelper:: uri.typolink
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-uri-typolink-example:

Example
=======

`{link}` contains `19 - - - &X=y`

Please note that due to the nature of typolink you have to provide a full
set of parameters.
If you use the parameter only, then target, class and title will be discarded.

..  _typo3-fluid-uri-typolink-minimal-usage:

Minimal usage
-------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.typolink parameter="{link}" />

..  code-block:: text
    :caption: Output

    /page/path/name.html?X=y

Depending on routing and page path configuration.

..  _typo3-fluid-uri-typolink-full-parameter-usage:

Full parameter usage
--------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.typolink parameter="{link}" additionalParams="&u=b" />

..  code-block:: text
    :caption: Output

    /page/path/name.html?X=y&u=b

Depending on routing and page path configuration.

..  _typo3-fluid-uri-typolink-arguments:

Arguments
=========

..  typo3:viewhelper:: uri.typolink
    :source: ../../Global.json
    :display: arguments-only
