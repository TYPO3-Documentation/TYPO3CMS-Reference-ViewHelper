..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/BaseViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/BaseViewHelper.php
:navigation-title: base

.. include:: /Includes.rst.txt

.. _typo3-fluid-base:

==========================
Base ViewHelper `<f:base>`
==========================

.. deprecated:: TYPO3 v11.5

   The :html:`<f:base>` ViewHelper is not suitable in almost all use cases
   and has been deprecated: In most cases the :php:`PageRenderer` takes care of the
   main :html:`<head>` markup, directly, or indirectly via TypoScript :html:`config.baseURL`.


ViewHelper which creates a :html:`<base href="..."></base>` tag.

The Base URI is taken from the current request.

.. _typo3-fluid-base-migration:

Migration
=========

If the ViewHelper is still needed, copy
:php:`TYPO3\CMS\Fluid\ViewHelpers\BaseViewHelper` to the consuming extension,
giving the ViewHelper a happy life in an extension specific namespace.

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
