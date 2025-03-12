:navigation-title: format.currency

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-currency:

================================================
Format.currency ViewHelper `<f:format.currency>`
================================================

..  typo3:viewhelper:: format.currency
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-format-currency-example:

Examples
========

Defaults
--------

::

   <f:format.currency>123.456</f:format.currency>

Output::

    123,46

All parameters
--------------

::

   <f:format.currency decimalSeparator="." thousandsSeparator="," decimals="2"
       currencySign="$" prependCurrency="true" separateCurrency="false"
   >
       54321
   </f:format.currency>

Output::

    $54,321.00

Inline notation
---------------

::

   {someNumber -> f:format.currency(thousandsSeparator: ',', currencySign: 'EUR')}

Output::

   54,321,00 EUR

Depending on the value of ``{someNumber}``.

Use dash for decimals without value
-----------------------------------

::

   <f:format.currency useDash="true">123.00</f:format.currency>

Output::

    123,-
