.. include:: /Includes.rst.txt

.. _typo3-fluid-be-infobox:

==========
be.infobox
==========


ViewHelper for rendering a styled content infobox markup.

States
======

The Infobox provides different context sensitive states that
can be used to provide an additional visual feedback to the
to the user to underline the meaning of the information.

Possible values are in range from ``-2`` to ``2``. Please choose a
meaningful value from the following list.

``-2``
   Notices (Default)
``-1``
   Information
``0``
   Positive feedback
``1``
   Warnings
``2``
   Error

Examples
========

Simple::

   <f:be.infobox title="Message title">your box content</f:be.infobox>

All options::

   <f:be.infobox title="Message title" message="your box content" state="-2" iconName="check" disableIcon="true" />

Arguments
=========


.. _be.infobox_message:

message
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The message of the info box, if NULL tag content is used

.. _be.infobox_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The title of the info box

.. _be.infobox_state:

state
-----

:aspect:`DataType`
   mixed

:aspect:`Default`
   -2

:aspect:`Required`
   false
:aspect:`Description`
   The state of the box, InfoboxViewHelper::STATE_*

.. _be.infobox_iconname:

iconName
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The icon name from font awesome, NULL sets default icon

.. _be.infobox_disableicon:

disableIcon
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   If set to TRUE, the icon is not rendered.
