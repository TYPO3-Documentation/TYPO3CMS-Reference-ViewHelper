:navigation-title: sanitize.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-sanitize-html:

============================================
Sanitize.html ViewHelper `<f:sanitize.html>`
============================================

..  typo3:viewhelper:: sanitize.html
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-sanitize-html-example:

Examples
========

..  _typo3-fluid-sanitize-html-default-parameters:

Default parameters
------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:sanitize.html>
      <img src="/img.png" class="image" onmouseover="alert(document.location)">
    </f:sanitize.html>

..  code-block:: html
    :caption: Output

    <img src="/img.png" class="image">

..  _typo3-fluid-sanitize-html-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {richTextFieldContent -> f:sanitize.html(build: 'default')}

..  _typo3-fluid-sanitize-html-arguments:

Arguments
=========

..  typo3:viewhelper:: sanitize.html
    :source: ../../Global.json
    :display: arguments-only
