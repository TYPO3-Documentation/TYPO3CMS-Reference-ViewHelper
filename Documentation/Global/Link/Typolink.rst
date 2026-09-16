:navigation-title: link.typolink

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-typolink:

============================================
Link.typolink ViewHelper `<f:link.typolink>`
============================================

..  typo3:viewhelper:: link.typolink
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-typolink-example:

Example
=======

`{link}` contains: `t3://page?uid=2&arg1=val1#9 _blank some-css-class "Title containing Whitespace"`.

..  _typo3-fluid-link-typolink-minimal-usage:

Minimal usage
-------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.typolink parameter="{link}">
      Linktext
    </f:link.typolink>

..  code-block:: html
    :caption: Output

    <a href="/page/path/name.html?X=y" title="testtitle with whitespace" target="_blank">
      Linktext
    </a>

Depending on current page, routing and page path configuration.

..  _typo3-fluid-link-typolink-textwrap-usage:

TextWrap usage
--------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.typolink parameter="123" textWrap="<span>|</span>"/>

..  code-block:: html
    :caption: Output

    <a href="/some/page">
      <span>Page title of some page wrapped in span</span>
    </a>

Depending on current page, routing and page path configuration.

..  _typo3-fluid-link-typolink-full-parameter-usage:

Full parameter usage
--------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.typolink parameter="{link}" additionalParams="&u=b"
      target="_blank"
      class="ico-class" title="some title"
      additionalAttributes="{type:'button'}"
    >
      Linktext
    </f:link.typolink>

..  code-block:: html
    :caption: Output

    <a href="/page/path/name.html?X=y&u=b" title="some title" target="_blank" class="ico-class" type="button">
      Linktext
    </a>

Depending on routing and page path configuration.

..  _typo3-fluid-link-typolink-arguments:

Arguments
=========

..  typo3:viewhelper:: link.typolink
    :source: ../../Global.json
    :display: arguments-only
