.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-for:

===
for
===


Loop view helper which can be used to iterate over arrays.
Implements what a basic foreach()-PHP-method does.

Examples
========

Simple Loop::

   <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo">{foo}</f:for>

Output::

   1234

Output array key::

   <ul>
   <f:for each="{fruit1: 'apple', fruit2: 'pear', fruit3: 'banana', fruit4: 'cherry'}" as="fruit" key="label">
      <li>{label}: {fruit}</li>
   </f:for>
   </ul>
Output::

   <ul>
      <li>fruit1: apple</li>
      <li>fruit2: pear</li>
      <li>fruit3: banana</li>
      <li>fruit4: cherry</li>
   </ul>

Iteration information::

   <ul>
   <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo" iteration="fooIterator">
      <li>Index: {fooIterator.index} Cycle: {fooIterator.cycle} Total: {fooIterator.total}{f:if(condition: fooIterator.isEven, then: ' Even')}{f:if(condition: fooIterator.isOdd, then: ' Odd')}{f:if(condition: fooIterator.isFirst, then: ' First')}{f:if(condition: fooIterator.isLast, then: ' Last')}</li>
   </f:for>
   </ul>

Output::

   <ul>
      <li>Index: 0 Cycle: 1 Total: 4 Odd First</li>
      <li>Index: 1 Cycle: 2 Total: 4 Even</li>
      <li>Index: 2 Cycle: 3 Total: 4 Odd</li>
      <li>Index: 3 Cycle: 4 Total: 4 Even Last</li>
   </ul>

Arguments
=========


.. _for_each:
each
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The array or \SplObjectStorage to iterated over

.. _for_as:
as
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The name of the iteration variable

.. _for_key:
key
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Variable to assign array key to

.. _for_reverse:
reverse
-------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, iterates in reverse

.. _for_iteration:
iteration
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The name of the variable to store iteration information (index, cycle, isFirst, isLast, isEven, isOdd)
