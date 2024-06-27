..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ConstantViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/ConstantViewHelper.php
:navigation-title: constant

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-constant:

==================================
Constant ViewHelper `<f:constant>`
==================================



Wrapper for PHPs :php:`constant` function.
See https://www.php.net/manual/function.constant.php.

Examples
========

Get built-in PHP constant
-------------------------

::

   {f:constant(value: 'PHP_INT_MAX')}

Output::

   9223372036854775807
   (Depending on CPU architecture).

Get class constant
------------------

::

   {f:constant(value: '\Vendor\Package\Class::CONSTANT')}

Get enum value
--------------

::

   {f:constant(value: '\Vendor\Package\Enum::CASE')}

.. _typo3fluid-fluid-constant_source:

Source code
===========

Go to the source code of this ViewHelper: `ConstantViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ConstantViewHelper.php>`__.

.. _typo3fluid-fluid-constant_arguments:

Arguments
=========

The following arguments are available for `<f:constant>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-constant-name_argument:

..  confval:: name
    :name: typo3fluid-fluid-constant-name
    :type: string
    :required: false

    String representation of a PHP constant or enum
