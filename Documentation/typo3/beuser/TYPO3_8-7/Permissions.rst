.. include:: /Includes.rst.txt

.. _typo3-beuser-permissions:

===========
permissions
===========


Render permission icon group (user / group / others) of the "Access" module.

Most of that could be done in fluid directly, but this view helper
is much better performance wise.

Arguments
=========


.. _permissions_permission:
permission
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Current permission

.. _permissions_scope:
scope
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   "user" / "group" / "everybody"

.. _permissions_pageid:
pageId
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
