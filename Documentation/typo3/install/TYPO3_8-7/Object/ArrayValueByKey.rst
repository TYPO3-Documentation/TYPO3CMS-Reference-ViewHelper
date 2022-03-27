.. include:: /Includes.rst.txt

.. _typo3-install-object-arrayvaluebykey:

======================
object.arrayValueByKey
======================


View helper which allows you to access a key in an array.

Examples
========

Defaults::

   <i:object.key array="{array}" key="{key}" />

Output::

   The key in the array, if it exists, otherwise an empty string.

Arguments
=========


.. _object.arrayvaluebykey_array:
array
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The array being processed

.. _object.arrayvaluebykey_key:
key
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The key being accessed
