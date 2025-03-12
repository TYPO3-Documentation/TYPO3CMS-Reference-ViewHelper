:navigation-title: be.menus.actionMenu

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-menus-actionmenu:

========================================================
Be.menus.actionMenu ViewHelper `<f:be.menus.actionMenu>`
========================================================

..  typo3:viewhelper:: be.menus.actionMenu
    :source: ../../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-menus-actionmenu-example:

Examples
========

Simple::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="Overview" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="Create new Blog" controller="Blog" action="new" />
      <f:be.menus.actionMenuItem label="List Posts" controller="Post" action="index" arguments="{blog: blog}" />
   </f:be.menus.actionMenu>

Select box with the options "Overview", "Create new Blog" and "List Posts".

Localized::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="{f:translate(key:'overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key:'create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Localized select box.
