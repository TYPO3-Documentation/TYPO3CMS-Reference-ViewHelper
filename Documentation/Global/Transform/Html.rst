:navigation-title: transform.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-transform-html:

==============================================
Transform.html ViewHelper `<f:transform.html>`
==============================================

..  typo3:viewhelper:: transform.html
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-transform-html-example:

Examples
========

..  _typo3-fluid-transform-html-default-parameters:

Default parameters
------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:transform.html selector="a.href" onFailure="removeEnclosure">
      <a href="t3://page?uid=1" class="home">Home</a>
    </f:transform.html>

..  code-block:: html
    :caption: Output

    <a href="https://example.com/home" class="home">Home</a>

..  _typo3-fluid-transform-html-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {content -> f:transform.html(selector:'a.href', onFailure:'removeEnclosure')}

..  _typo3-fluid-transform-html-arguments:

Arguments of the `<f:transform.html>` ViewHelper
================================================

..  typo3:viewhelper:: transform.html
    :source: ../../Global.json
    :display: arguments-only
