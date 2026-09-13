:navigation-title: be.security.ifAuthenticated

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-security-ifauthenticated:

========================================================================
Be.security.ifAuthenticated ViewHelper `<f:be.security.ifAuthenticated>`
========================================================================

..  typo3:viewhelper:: be.security.ifAuthenticated
    :source: ../../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-security-ifauthenticated-example:

Examples
========

Basic usage:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.security.ifAuthenticated>
      This is being shown whenever a BE user is logged in
    </f:be.security.ifAuthenticated>

Everything inside the :html:`<f:be.security.ifAuthenticated>` tag is being displayed
if the user is authenticated with any backend user account.

IfAuthenticated / then / else:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.security.ifAuthenticated>
      <f:then>
        This is being shown in case you have access.
      </f:then>
      <f:else>
        This is being displayed in case you do not have access.
      </f:else>
    </f:be.security.ifAuthenticated>

Everything inside the :html:`<f:then></f:then>` is displayed if the backend user is logged in.
:html:`<f:else></f:else>` is displayed if no backend user is logged in.

..  _typo3-fluid-be-security-ifauthenticated-arguments:

Arguments
=========

..  typo3:viewhelper:: be.security.ifAuthenticated
    :source: ../../../Global.json
    :display: arguments-only
