:navigation-title: feature

..  include:: /Includes.rst.txt
..  _typo3-fluid-feature:

================================
Feature ViewHelper `<f:feature>`
================================

..  typo3:viewhelper:: feature
    :source: ../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-feature-example:

Examples
========

Basic usage
-----------

::

   <f:feature name="myFeatureFlag">
      This is being shown if the flag is enabled
   </f:feature>

feature / then / else
---------------------

::

   <f:feature name="myFeatureFlag">
      <f:then>
         Flag is enabled
      </f:then>
      <f:else>
         Flag is undefined or not enabled
      </f:else>
   </f:feature>
