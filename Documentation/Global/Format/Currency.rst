:navigation-title: format.currency

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-currency:

================================================
Format.currency ViewHelper `<f:format.currency>`
================================================

..  typo3:viewhelper:: format.currency
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-currency-example:

Examples
========

..  _typo3-fluid-format-currency-defaults:

Defaults
--------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.currency>123.456</f:format.currency>

..  code-block:: text
    :caption: Output

    123,46

..  _typo3-fluid-format-currency-all-parameters:

All parameters
--------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.currency decimalSeparator="." thousandsSeparator="," decimals="2"
      currencySign="$" prependCurrency="true" separateCurrency="false"
    >
      54321
    </f:format.currency>

..  code-block:: text
    :caption: Output

    $54,321.00

..  _typo3-fluid-format-currency-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {someNumber -> f:format.currency(thousandsSeparator: ',', currencySign: 'EUR')}

..  code-block:: text
    :caption: Output

    54,321,00 EUR

Depending on the value of `{someNumber}`.

..  _typo3-fluid-format-currency-use-dash-for-decimals-without-value:

Use dash for decimals without value
-----------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.currency useDash="true">123.00</f:format.currency>

..  code-block:: text
    :caption: Output

    123,-

..  _typo3-fluid-format-currency-arguments:

Arguments of the `<f:format.currency>` ViewHelper
=================================================

..  typo3:viewhelper:: format.currency
    :source: ../../Global.json
    :display: arguments-only
