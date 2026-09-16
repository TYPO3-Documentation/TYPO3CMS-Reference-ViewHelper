:navigation-title: debug

..  include:: /Includes.rst.txt
..  _typo3-fluid-debug:

============================
Debug ViewHelper `<f:debug>`
============================

..  typo3:viewhelper:: debug
    :source: ../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-debug-example:

Examples
========

..  _typo3-fluid-debug-simple:

Simple
------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/List.fluid.html

    <f:debug>{myVariable}</f:debug>

[A HTML dump of myVariable value]

..  _typo3-fluid-debug-all-features:

All features
------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/List.fluid.html

    <f:debug title="My Title" maxDepth="5"
      blacklistedClassNames="{0:'ACME\BlogExample\Domain\Model\Administrator'}"
      blacklistedPropertyNames="{0:'posts'}"
      plainText="true" ansiColors="false"
      inline="true"
    >
      {blogs}
    </f:debug>

[A HTML view of the var_dump]

..  _typo3-fluid-debug-arguments:

Arguments
=========

..  typo3:viewhelper:: debug
    :source: ../Global.json
    :display: arguments-only
