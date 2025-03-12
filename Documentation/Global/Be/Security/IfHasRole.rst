:navigation-title: be.security.ifHasRole

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-security-ifhasrole:

============================================================
Be.security.ifHasRole ViewHelper `<f:be.security.ifHasRole>`
============================================================

..  typo3:viewhelper:: be.security.ifHasRole
    :source: ../../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-security-ifhasrole-example:

Examples
========

Basic usage::

   <f:be.security.ifHasRole role="Administrator">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) titled "Administrator" (case sensitive)
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:ifHasRole>` tag is being displayed if the
logged in backend user belongs to the specified backend group.

Using the usergroup uid as role identifier::

   <f:be.security.ifHasRole role="1">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) with the uid "1"
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:ifHasRole>` tag is being displayed if the
logged in backend user belongs to the specified backend group.

IfRole / then / else::

   <f:be.security.ifHasRole role="Administrator">
      <f:then>
         This is being shown in case you have the role.
      </f:then>
      <f:else>
         This is being displayed in case you do not have the role.
      </f:else>
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:then></f:then>` tag is displayed if the
logged in backend user belongs to the specified backend group.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.
