.. include:: ../../../../Includes.txt

.. _typo3-backend-uri-editrecord:

==============
uri.editRecord
==============


Use this ViewHelper to provide edit links (only the uri) to records. The ViewHelper will
pass the uid and table to FormEngine.

The uid must be given as a positive integer.
For new records, use the :ref:`<be:uri.newRecord> <typo3-backend-uri-newrecord>`.

Examples
========

URI to the record-edit action passed to FormEngine::

   <be:uri.editRecord uid="42" table="a_table" returnUrl="foo/bar" />

:samp:`/typo3/index.php?route=/record/edit&edit[a_table][42]=edit&returnUrl=foo/bar`

URI to the edit record action: edit only the fields title and subtitle of
page uid=42 and return to foo/bar::

   <be:uri.editRecord uid="42" table="pages" fields="title,subtitle" returnUrl="foo/bar" />

``<a href="/typo3/index.php?route=/record/edit&edit[pages][42]=edit&returnUrl=foo/bar&columnsOnly=title,subtitle">``

Arguments
=========


.. _uri.editrecord_uid:
uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Uid of record to be edited, 0 for creation

.. _uri.editrecord_table:
table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target database table

.. _uri.editrecord_fields:
fields
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Edit only these fields (comma separated list)

.. _uri.editrecord_returnurl:
returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Return to this URL after closing the edit dialog
