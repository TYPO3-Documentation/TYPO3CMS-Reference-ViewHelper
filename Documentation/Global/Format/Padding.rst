:navigation-title: format.padding

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-padding:

==============================================
Format.padding ViewHelper `<f:format.padding>`
==============================================

..  typo3:viewhelper:: format.padding
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-padding-example:

Examples
========

..  _typo3-fluid-format-padding-defaults:

Defaults
--------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.padding padLength="10">TYPO3</f:format.padding>

..  code-block:: text
    :caption: Output

    TYPO3␠␠␠␠␠

..  _typo3-fluid-format-padding-specify-padding-string:

Specify padding string
----------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.padding padLength="10" padString="-=">TYPO3</f:format.padding>

..  code-block:: text
    :caption: Output

    TYPO3-=-=-

..  _typo3-fluid-format-padding-specify-padding-type:

Specify padding type
--------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.padding padLength="10" padString="-" padType="both">TYPO3</f:format.padding>

..  code-block:: text
    :caption: Output

    --TYPO3---

..  _typo3-fluid-format-padding-arguments:

Arguments of the `<f:format.padding>` ViewHelper
================================================

..  typo3:viewhelper:: format.padding
    :source: ../../Global.json
    :display: arguments-only
