:navigation-title: format.bytes

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-bytes:

==========================================
Format.bytes ViewHelper `<f:format.bytes>`
==========================================

..  typo3:viewhelper:: format.bytes
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-format-byte-example:

Examples
========

Simple
------

::

   {fileSize -> f:format.bytes()}

``123 KB``
Depending on the value of ``{fileSize}``.

With arguments
--------------

::

   {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: '.', thousandsSeparator: ',')}

``1,023.00 B``
Depending on the value of ``{fileSize}``.

You may provide an own set of units, like this: ``B,KB,MB,GB,TB,PB,EB,ZB,YB``.

Custom units
------------

::

   {fileSize -> f:format.bytes(units: '{f:translate(\'viewhelper.format.bytes.units\', \'fluid\')}'

``123 KB``
Depending on the value of ``{fileSize}``.
