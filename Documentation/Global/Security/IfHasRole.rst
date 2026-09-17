:navigation-title: security.ifHasRole

..  include:: /Includes.rst.txt
..  _typo3-fluid-security-ifhasrole:

======================================================
Security.ifHasRole ViewHelper `<f:security.ifHasRole>`
======================================================

..  typo3:viewhelper:: security.ifHasRole
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-security-ifhasrole-example:

Examples
========

..  _typo3-fluid-security-ifhasrole-basic-usage:

Basic usage
-----------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Account/Show.fluid.html

    <f:security.ifHasRole role="Administrator">
      This is being shown in case the current FE user belongs to a FE usergroup (aka role) titled "Administrator" (case sensitive)
    </f:security.ifHasRole>

Everything inside the :html:`<f:security.ifHasRole>` tag is being displayed if the
logged in frontend user belongs to the specified frontend user group.
Comparison is done by comparing to title of the user groups.

..  _typo3-fluid-security-ifhasrole-using-the-usergroup-uid-as-role-identifier:

Using the usergroup uid as role identifier
------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Account/Show.fluid.html

    <f:security.ifHasRole role="1">
      This is being shown in case the current FE user belongs to a FE usergroup (aka role) with the uid "1"
    </f:security.ifHasRole>

Everything inside the :html:`<f:security.ifHasRole>` tag is being displayed if the
logged in frontend user belongs to the specified role. Comparison is done
using the `uid` of frontend user groups.

..  _typo3-fluid-security-ifhasrole-ifrole-then-else:

IfRole / then / else
--------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Account/Show.fluid.html

    <f:security.ifHasRole role="Administrator">
      <f:then>
        This is being shown in case you have the role.
      </f:then>
      <f:else>
        This is being displayed in case you do not have the role.
      </f:else>
    </f:security.ifHasRole>

Everything inside the :html:`<f:then></f:then>` tag is displayed if the logged in FE user belongs to the specified role.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.

..  _typo3-fluid-security-ifhasrole-arguments:

Arguments of the `<f:security.ifHasRole>` ViewHelper
====================================================

..  typo3:viewhelper:: security.ifHasRole
    :source: ../../Global.json
    :display: arguments-only
