.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenuitem:

=======================
be.menus.actionMenuItem
=======================


View helper which returns an option tag.
This view helper only works in conjunction with \TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuViewHelper
Note: This view helper is experimental!

Examples
========

Simple::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="Overview" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="Create new Blog" controller="Blog" action="new" />
      <f:be.menus.actionMenuItem label="List Posts" controller="Post" action="index" arguments="{blog: blog}" />
   </f:be.menus.actionMenu>

Output::

   Selectbox with the options "Overview", "Create new Blog" and "List Posts"

Localized::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="{f:translate(key='overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key='create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Output::

   localized selectbox

Arguments
=========


.. _be.menus.actionmenuitem_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _be.menus.actionmenuitem_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _be.menus.actionmenuitem_label:
label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Label of the option tag

.. _be.menus.actionmenuitem_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Controller to be associated with this ActionMenuItem

.. _be.menus.actionmenuitem_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The action to be associated with this ActionMenuItem

.. _be.menus.actionmenuitem_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Additional controller arguments to be passed to the action when this ActionMenuItem is selected
