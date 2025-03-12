:navigation-title: format.padding

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-padding:

==============================================
Format.padding ViewHelper `<f:format.padding>`
==============================================

..  typo3:viewhelper:: format.padding
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-format-padding-example:

Examples
========

Defaults
--------

::

   <f:format.padding padLength="10">TYPO3</f:format.padding>

Output::

    TYPO3␠␠␠␠␠

``TYPO3␠␠␠␠␠``

Specify padding string
----------------------

::

   <f:format.padding padLength="10" padString="-=">TYPO3</f:format.padding>

``TYPO3-=-=-``

Specify padding type
--------------------

::

   <f:format.padding padLength="10" padString="-" padType="both">TYPO3</f:format.padding>

``--TYPO3---``
