.. include:: /Includes.rst.txt

.. _typo3-beuser-arrayelement:

============
arrayElement
============


Get a value from an array by given key.

Arguments
=========


.. _arrayelement_array:
array
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Array to search in

.. _arrayelement_key:
key
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Key to return its value

.. _arrayelement_subkey:
subKey
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   If result of key access is an array, subkey can be used to fetch an element from this again
