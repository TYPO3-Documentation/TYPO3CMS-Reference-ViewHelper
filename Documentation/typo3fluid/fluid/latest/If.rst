..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/IfViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/IfViewHelper.php
:navigation-title: if

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-if:

======================
If ViewHelper `<f:if>`
======================



This ViewHelper implements an if/else condition.

Conditions:

As a condition is a boolean value, you can just use a boolean argument.
Alternatively, you can write a boolean expression there.
Boolean expressions have the following form:

XX Comparator YY

Comparator is one of: ==, !=, <, <=, >, >= and %
The % operator converts the result of the % operation to boolean.

XX and YY can be one of:

- number
- Object Accessor
- Array
- a ViewHelper
- string

::

      <f:if condition="{rank} > 100">
          Will be shown if rank is > 100
      </f:if>
      <f:if condition="{rank} % 2">
          Will be shown if rank % 2 != 0.
      </f:if>
      <f:if condition="{rank} == {k:bar()}">
          Checks if rank is equal to the result of the ViewHelper "k:bar"
      </f:if>
      <f:if condition="{foo.bar} == 'stringToCompare'">
          Will result in true if {foo.bar}'s represented value equals 'stringToCompare'.
      </f:if>

Examples
========

Basic usage
-----------

::

    <f:if condition="somecondition">
        This is being shown in case the condition matches
    </f:if>

Output::

    Everything inside the <f:if> tag is being displayed if the condition evaluates to TRUE.

If / then / else
----------------

::

    <f:if condition="somecondition">
        <f:then>
            This is being shown in case the condition matches.
        </f:then>
        <f:else>
            This is being displayed in case the condition evaluates to FALSE.
        </f:else>
    </f:if>

Output::

    Everything inside the "then" tag is displayed if the condition evaluates to TRUE.
    Otherwise, everything inside the "else"-tag is displayed.

inline notation
---------------

::

    {f:if(condition: someCondition, then: 'condition is met', else: 'condition is not met')}

Output::

    The value of the "then" attribute is displayed if the condition evaluates to TRUE.
    Otherwise, everything the value of the "else"-attribute is displayed.

.. _typo3fluid-fluid-if_source:

Source code
===========

Go to the source code of this ViewHelper: `IfViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/IfViewHelper.php>`__.

.. _typo3fluid-fluid-if_arguments:

Arguments
=========

The following arguments are available for `<f:if>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-if-then_argument:

..  confval:: then
    :name: typo3fluid-fluid-if-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3fluid-fluid-if-else_argument:

..  confval:: else
    :name: typo3fluid-fluid-if-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3fluid-fluid-if-condition_argument:

..  confval:: condition
    :name: typo3fluid-fluid-if-condition
    :type: boolean
    :required: false

    Condition expression conforming to Fluid boolean rules
