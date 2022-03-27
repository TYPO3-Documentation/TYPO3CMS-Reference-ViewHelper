.. include:: /Includes.rst.txt

.. _typo3-fluid-debug:

=====
debug
=====


This ViewHelper generates a HTML dump of the tagged variable.

Examples
========

Simple::

   <f:debug>{testVariables.array}</f:debug>

Output::

   foobarbazfoo

All Features::

   <f:debug title="My Title" maxDepth="5" blacklistedClassNames="{0:'Tx_BlogExample_Domain_Model_Administrator'}" plainText="true" ansiColors="false" inline="true" blacklistedPropertyNames="{0:'posts'}">{blogs}</f:debug>

Output::

   [A HTML view of the var_dump]

Arguments
=========


.. _debug_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Optional custom title for the debug output

.. _debug_maxdepth:
maxDepth
--------

:aspect:`DataType`
   mixed

:aspect:`Default`
   8

:aspect:`Required`
   true
:aspect:`Description`
   Sets the max recursion depth of the dump (defaults to 8). De- or increase the number according to your needs and memory limit.

.. _debug_plaintext:
plainText
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, the dump is in plain text, if FALSE the debug output is in HTML format.

.. _debug_ansicolors:
ansiColors
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, ANSI color codes is added to the plaintext output, if FALSE (default) the plaintext debug output not colored.

.. _debug_inline:
inline
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, the dump is rendered at the position of the <f:debug> tag. If FALSE (default), the dump is displayed at the top of the page.

.. _debug_blacklistedclassnames:
blacklistedClassNames
---------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   An array of class names (RegEx) to be filtered. Default is an array of some common class names.

.. _debug_blacklistedpropertynames:
blacklistedPropertyNames
------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   An array of property names and/or array keys (RegEx) to be filtered. Default is an array of some common property names.
