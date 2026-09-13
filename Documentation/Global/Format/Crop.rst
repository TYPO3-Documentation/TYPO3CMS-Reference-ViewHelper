:navigation-title: format.crop

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-crop:

========================================
Format.crop ViewHelper `<f:format.crop>`
========================================

..  typo3:viewhelper:: format.crop
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-crop-example:

Examples
========

..  _typo3-fluid-format-crop-defaults:

Defaults
--------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.crop maxCharacters="10">
    This is some very long text
    </f:format.crop>

..  code-block:: text
    :caption: Output

    This is...

The third word "some" does not fit in the 10 character limit, because respectWordBoundaries
is true by default.

..  _typo3-fluid-format-crop-custom-suffix:

Custom suffix
-------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.crop maxCharacters="17" append="&nbsp;[more]">
    This is some very long text
    </f:format.crop>

..  code-block:: text
    :caption: Output

    This is some&nbsp;[more]

..  _typo3-fluid-format-crop-dont-respect-word-boundaries:

Don't respect word boundaries
-----------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.crop maxCharacters="10" respectWordBoundaries="false">
    This is some very long text
    </f:format.crop>

..  code-block:: text
    :caption: Output

    This is s...

..  _typo3-fluid-format-crop-dont-respect-html-tags:

Don't respect HTML tags
-----------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.crop maxCharacters="28" respectWordBoundaries="false" respectHtml="false">
    This is some text with <strong>HTML</strong> tags
    </f:format.crop>

..  code-block:: text
    :caption: Output

    This is some text with <stro

..  _typo3-fluid-format-crop-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {someLongText -> f:format.crop(maxCharacters: 10)}

..  code-block:: text
    :caption: Output

    someLongText cropped after 10 characters…

Depending on the value of `{someLongText}`.

..  _typo3-fluid-format-crop-arguments:

Arguments
=========

..  typo3:viewhelper:: format.crop
    :source: ../../Global.json
    :display: arguments-only
