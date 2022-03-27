.. include:: /Includes.rst.txt

.. _typo3-core-iconforrecord:

=============
iconForRecord
=============


Displays icon for record.

Examples
========

Default::

   <core:iconForRecord table="tt_content" row="{record}" />

Output::

    <span class="t3js-icon icon icon-size-small icon-state-default icon-mimetypes-x-content-text" data-identifier="mimetypes-x-content-text">
        <span class="icon-markup">
            <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-x-content-text.svg" width="16" height="16">
        </span>
    </span>

Arguments
=========


.. _iconforrecord_table:
table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The table for the record icon

.. _iconforrecord_row:
row
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The record row

.. _iconforrecord_size:
size
----

:aspect:`DataType`
   string

:aspect:`Default`
   'small'

:aspect:`Required`
   false
:aspect:`Description`
   The icon size

.. _iconforrecord_alternativemarkupidentifier:
alternativeMarkupIdentifier
---------------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Alternative markup identifier
