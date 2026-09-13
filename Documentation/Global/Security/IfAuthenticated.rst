:navigation-title: security.ifAuthenticated

..  include:: /Includes.rst.txt
..  _typo3-fluid-security-ifauthenticated:

==================================================================
Security.ifAuthenticated ViewHelper `<f:security.ifAuthenticated>`
==================================================================

..  typo3:viewhelper:: security.ifAuthenticated
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-security-ifauthenticated-example:

Examples
========

..  _typo3-fluid-security-ifauthenticated-basic-usage:

Basic usage
-----------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Account/Show.fluid.html

    <f:security.ifAuthenticated>
      This is being shown whenever a FE user is logged in
    </f:security.ifAuthenticated>

Everything inside the :html:`<f:security.ifAuthenticated>` tag is being displayed if
current frontend user is authenticated.

..  _typo3-fluid-security-ifauthenticated-ifauthenticated-then-else:

IfAuthenticated / then / else
-----------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Account/Show.fluid.html

    <f:security.ifAuthenticated>
      <f:then>
        This is being shown in case you have access.
      </f:then>
      <f:else>
        This is being displayed in case you do not have access.
      </f:else>
    </f:security.ifAuthenticated>

Everything inside the :html:`<f:then></f:then>` tag is displayed if frontend user is authenticated.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.

..  _typo3-fluid-security-ifauthenticated-arguments:

Arguments
=========

..  typo3:viewhelper:: security.ifAuthenticated
    :source: ../../Global.json
    :display: arguments-only
