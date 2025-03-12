:navigation-title: security.nonce

..  include:: /Includes.rst.txt
..  _typo3-fluid-security-nonce:

==============================================
Security.nonce ViewHelper `<f:security.nonce>`
==============================================

..  typo3:viewhelper:: security.nonce
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-security-nonce-example:

Examples
========

Basic usage
-----------

::

   <script nonce="{f:security.nonce()}">const inline = 'script';</script>
