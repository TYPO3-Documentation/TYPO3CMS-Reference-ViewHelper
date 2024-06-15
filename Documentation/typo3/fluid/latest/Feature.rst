..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/FeatureViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/FeatureViewHelper.php
:navigation-title: feature

.. include:: /Includes.rst.txt

.. _typo3-fluid-feature:

================================
Feature ViewHelper `<f:feature>`
================================



This ViewHelper checks if a feature flag is enabled

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

.. _typo3-fluid-feature_source:

Source code
===========

Go to the source code of this ViewHelper: `FeatureViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/FeatureViewHelper.php>`__.

.. _typo3-fluid-feature_arguments:

Arguments
=========

The following arguments are available for `<f:feature>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-feature-then_argument:

..  confval:: then
    :name: typo3-fluid-feature-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-fluid-feature-else_argument:

..  confval:: else
    :name: typo3-fluid-feature-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-fluid-feature-name_argument:

..  confval:: name
    :name: typo3-fluid-feature-name
    :type: string
    :required: true

    Name of the feature flag that should be checked
