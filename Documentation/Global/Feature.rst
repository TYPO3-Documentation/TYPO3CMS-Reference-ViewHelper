:navigation-title: feature

..  include:: /Includes.rst.txt
..  _typo3-fluid-feature:

================================
Feature ViewHelper `<f:feature>`
================================

..  typo3:viewhelper:: feature
    :source: ../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-feature-example:

Examples
========

..  _typo3-fluid-feature-basic-usage:

Basic usage
-----------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/List.fluid.html

    <f:feature name="myFeatureFlag">
      This is being shown if the flag is enabled
    </f:feature>

..  _typo3-fluid-feature-feature-then-else:

Feature / then / else
---------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/List.fluid.html

    <f:feature name="myFeatureFlag">
      <f:then>
        Flag is enabled
      </f:then>
      <f:else>
        Flag is undefined or not enabled
      </f:else>
    </f:feature>

..  _typo3-fluid-feature-arguments:

Arguments of the `<f:feature>` ViewHelper
=========================================

..  typo3:viewhelper:: feature
    :source: ../Global.json
    :display: arguments-only
