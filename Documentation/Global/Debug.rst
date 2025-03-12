:navigation-title: debug

..  include:: /Includes.rst.txt
..  _typo3-fluid-debug:

============================
Debug ViewHelper `<f:debug>`
============================

..  typo3:viewhelper:: debug
    :source: ../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-debug-example:

Examples
========

Simple
------

::

   <f:debug>{myVariable}</f:debug>

[A HTML dump of myVariable value]

All Features
------------

::

   <f:debug title="My Title" maxDepth="5"
       blacklistedClassNames="{0:'ACME\BlogExample\Domain\Model\Administrator'}"
       blacklistedPropertyNames="{0:'posts'}"
       plainText="true" ansiColors="false"
       inline="true"
   >
       {blogs}
   </f:debug>

[A HTML view of the var_dump]
