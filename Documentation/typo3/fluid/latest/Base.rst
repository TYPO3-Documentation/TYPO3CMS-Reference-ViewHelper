..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/BaseViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/BaseViewHelper.php
:navigation-title: base
.. include:: /Includes.rst.txt

.. _typo3-fluid-base:

==========================
Base ViewHelper `<f:base>`
==========================

ViewHelper which creates a :html:`<base href="..."></base>` tag.

The Base URI is taken from the current request.

Examples
========

Example::

   <f:base />

Output::

   <base href="http://yourdomain.tld/" />

Depending on your domain.

.. _typo3-fluid-base_source:

Source code
===========

Go to the source code of this ViewHelper: `BaseViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/BaseViewHelper.php>`__.

..  note:: `<f:base>` has no arguments.
