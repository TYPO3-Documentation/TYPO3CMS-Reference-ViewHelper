:navigation-title: format.htmlentitiesDecode

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-htmlentitiesdecode:

====================================================================
Format.htmlentitiesDecode ViewHelper `<f:format.htmlentitiesDecode>`
====================================================================

..  typo3:viewhelper:: format.htmlentitiesDecode
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-htmlentitiesdecode-example:

Examples
========

..  _typo3-fluid-format-htmlentitiesdecode-default-notation:

Default notation
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.htmlentitiesDecode>{text}</f:format.htmlentitiesDecode>

Text containing the following escaped signs: `&amp;` `&quot;` `&#039;` `&lt;` `&gt;`, will be processed by :php:`html_entity_decode()`.
These will result in: `&` `"` `'` `<` `>`.

..  _typo3-fluid-format-htmlentitiesdecode-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {text -> f:format.htmlentitiesDecode(encoding: 'ISO-8859-1')}

Text containing the following escaped signs: `&amp;` `&quot;` `&#039;` `&lt;` `&gt;`, will be processed by :php:`html_entity_decode()`.
These will result in: `&` `"` `'` `<` `>`.

But encoded as ISO-8859-1.

..  _typo3-fluid-format-htmlentitiesdecode-arguments:

Arguments
=========

..  typo3:viewhelper:: format.htmlentitiesDecode
    :source: ../../Global.json
    :display: arguments-only
