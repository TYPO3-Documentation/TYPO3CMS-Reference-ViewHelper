.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenu:

===================
be.menus.actionMenu
===================


View helper which returns a select box, that can be used to switch between
multiple actions and controllers and looks similar to TYPO3s funcMenu.
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
      <f:be.menus.actionMenuItem label="{f:translate(key:'overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key:'create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Output::

   localized selectbox

Arguments
=========


.. _be.menus.actionmenu_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _be.menus.actionmenu_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _be.menus.actionmenu_defaultcontroller:
defaultController
-----------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   DefaultController
