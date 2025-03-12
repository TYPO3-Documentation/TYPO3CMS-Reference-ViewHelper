..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemGroupViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemGroupViewHelper.php
:navigation-title: be.menus.actionMenuItemGroup

..  include:: /Includes.rst.txt

..  _typo3-fluid-be-menus-actionmenuitemgroup:

==========================================================================
Be.menus.actionMenuItemGroup ViewHelper `<f:be.menus.actionMenuItemGroup>`
==========================================================================

..  typo3:viewhelper:: be.menus.actionMenuItemGroup
    :source: ../../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-menus-actionmenuitemgroup-example:

Example
=======

::

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
