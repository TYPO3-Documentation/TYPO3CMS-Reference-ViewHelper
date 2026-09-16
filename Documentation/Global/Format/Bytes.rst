:navigation-title: format.bytes

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-bytes:

==========================================
Format.bytes ViewHelper `<f:format.bytes>`
==========================================

..  typo3:viewhelper:: format.bytes
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-byte-example:

Examples
========

..  _typo3-fluid-format-bytes-simple:

Simple
------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {fileSize -> f:format.bytes()}

..  code-block:: text
    :caption: Output

    123 KB

Depending on the value of `{fileSize}`.

..  _typo3-fluid-format-bytes-with-arguments:

With arguments
--------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: '.', thousandsSeparator: ',')}

..  code-block:: text
    :caption: Output

    1,023.00 B

Depending on the value of `{fileSize}`.

You may provide an own set of units, like this: `B,KB,MB,GB,TB,PB,EB,ZB,YB`.

..  _typo3-fluid-format-bytes-custom-units:

Custom units
------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {fileSize -> f:format.bytes(units: '{f:translate(\'viewhelper.format.bytes.units\', \'fluid\')}')}

..  code-block:: text
    :caption: Output

    123 KB

Depending on the value of `{fileSize}`.

..  _typo3-fluid-format-bytes-arguments:

Arguments
=========

..  typo3:viewhelper:: format.bytes
    :source: ../../Global.json
    :display: arguments-only
