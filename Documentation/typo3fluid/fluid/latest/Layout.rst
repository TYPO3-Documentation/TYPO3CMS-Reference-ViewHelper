.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-layout:

==================================
layout ViewHelper `<fluid:layout>`
==================================


With this tag, you can select a layout to be used for the current template.

Examples
========

::

    <f:layout name="main" />

Output::

    (no output)


.. _typo3fluid-fluid-layout_arguments:

Arguments
=========


.. _layout_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of layout to use. If none given, "Default" is used.
