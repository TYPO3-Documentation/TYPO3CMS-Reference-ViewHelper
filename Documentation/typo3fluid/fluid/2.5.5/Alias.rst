.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-alias:

=====
alias
=====


Declares new variables which are aliases of other variables.
Takes a "map"-Parameter which is an associative array which defines the shorthand mapping.

The variables are only declared inside the <f:alias>...</f:alias>-tag. After the
closing tag, all declared variables are removed again.

Examples
========

Single alias::

   <f:alias map="{x: 'foo'}">{x}</f:alias>

Output::

   foo

Multiple mappings::

   <f:alias map="{x: foo.bar.baz, y: foo.bar.baz.name}">
   {x.name} or {y}
   </f:alias>

Output::

   [name] or [name]
   depending on {foo.bar.baz}

Note: Using this view helper can be a sign of weak architecture. If you end up using it extensively
you might want to fine-tune your "view model" (the data you assign to the view).

Arguments
=========


.. _alias_map:
map
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Array that specifies which variables should be mapped to which alias
