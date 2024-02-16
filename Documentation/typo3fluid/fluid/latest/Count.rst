.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-count:

================================
count ViewHelper `<fluid:count>`
================================


This ViewHelper counts elements of the specified array or countable object.

Examples
========

Count array elements
--------------------

::

    <f:count subject="{0:1, 1:2, 2:3, 3:4}" />

Output::

    4

inline notation
---------------

::

    {objects -> f:count()}

Output::

    10 (depending on the number of items in ``{objects}``)


.. _typo3fluid-fluid-count_arguments:

Arguments
=========


.. _count_subject:

subject
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Countable subject, array or \Countable
