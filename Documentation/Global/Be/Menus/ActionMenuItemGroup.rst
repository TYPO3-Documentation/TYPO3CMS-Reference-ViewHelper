:navigation-title: be.menus.actionMenuItemGroup

..  include:: /Includes.rst.txt

..  _typo3-fluid-be-menus-actionmenuitemgroup:

==========================================================================
Be.menus.actionMenuItemGroup ViewHelper `<f:be.menus.actionMenuItemGroup>`
==========================================================================

..  typo3:viewhelper:: be.menus.actionMenuItemGroup
    :source: ../../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-menus-actionmenuitemgroup-example:

Example
=======

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="Default: Welcome" controller="Default" action="index" />
      <f:be.menus.actionMenuItem label="Community: get in touch" controller="Community" action="index" />

      <f:be.menus.actionMenuItemGroup label="Information">
        <f:be.menus.actionMenuItem label="PHP Information" controller="Information" action="listPhpInfo" />
        <f:be.menus.actionMenuItem label="Documentation" controller="Information" action="documentation" />
        <f:be.menus.actionMenuItem label="Hooks" controller="Information" action="hooks" />
        <f:be.menus.actionMenuItem label="Signals" controller="Information" action="signals" />
        <f:be.menus.actionMenuItem label="XClasses" controller="Information" action="xclass" />
      </f:be.menus.actionMenuItemGroup>
    </f:be.menus.actionMenu>

..  _typo3-fluid-be-menus-actionmenuitemgroup-arguments:

Arguments of the `<f:be.menus.actionMenuItemGroup>` ViewHelper
==============================================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: be.menus.actionMenuItemGroup
    :source: ../../../Global.json
    :display: arguments-only
