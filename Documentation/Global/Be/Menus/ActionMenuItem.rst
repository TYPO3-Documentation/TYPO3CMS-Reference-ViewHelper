:navigation-title: be.menus.actionMenuItem

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-menus-actionmenuitem:

================================================================
Be.menus.actionMenuItem ViewHelper `<f:be.menus.actionMenuItem>`
================================================================

..  typo3:viewhelper:: be.menus.actionMenuItem
    :source: ../../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-menus-actionmenuitem-example:

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
      <f:be.menus.actionMenuItem label="{f:translate(key='overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key='create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Localized select box.
