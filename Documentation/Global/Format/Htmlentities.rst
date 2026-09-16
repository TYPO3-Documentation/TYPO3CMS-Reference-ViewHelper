:navigation-title: format.htmlentities

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-htmlentities:

========================================================
Format.htmlentities ViewHelper `<f:format.htmlentities>`
========================================================

..  typo3:viewhelper:: format.htmlentities
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-htmlentities-examples:

Examples
========

..  _typo3-fluid-format-htmlentities-default-notation:

Default notation
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.htmlentities>{text}</f:format.htmlentities>

Text containing the following signs `&` `"` `'` `<` `>` will be processed by :php:`htmlentities()`.
These will result in: `&amp;` `&quot;` `&#039;` `&lt;` `&gt;`.

..  _typo3-fluid-format-htmlentities-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {text -> f:format.htmlentities(encoding: 'ISO-8859-1')}

Text containing the following signs `&` `"` `'` `<` `>` will be processed by :php:`htmlentities()`.
These will result in: `&amp;` `&quot;` `&#039;` `&lt;` `&gt;`.

But encoded as ISO-8859-1.

..  _typo3-fluid-format-htmlentities-arguments:

Arguments
=========

..  typo3:viewhelper:: format.htmlentities
    :source: ../../Global.json
    :display: arguments-only
