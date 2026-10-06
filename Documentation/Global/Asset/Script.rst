:navigation-title: asset.script

..  include:: /Includes.rst.txt
..  _typo3-fluid-asset-script:

==========================================
Asset.script ViewHelper `<f:asset.script>`
==========================================

..  typo3:viewhelper:: asset.script
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-asset-script-example:

Examples
========

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.script identifier="identifier123" src="EXT:my_sitepackage/Resources/Public/JavaScript/foo.js" />
    <f:asset.script identifier="identifier987">
      alert('hello world');
    </f:asset.script>

..  _typo3-fluid-asset-script-csp:

Content security policy
=======================

The `csp` argument controls whether TYPO3 adds the script to the
`content security policy
<https://docs.typo3.org/permalink/t3coreapi:content-security-policy>`_ of
the page. TYPO3 then adds a hash of the script to the CSP header, and a
`nonce` attribute to the tag if the page uses a nonce. If `csp` is not set,
TYPO3 does this for a file in `src`, but not for an inline script:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.script identifier="greeting" csp="1">
      console.log('Hello');
    </f:asset.script>

..  versionchanged:: 15.0
    :changelog: breaking-109783-1776735296

    The `useNonce` argument, deprecated since TYPO3 v14.2, has been removed.
    Use the `csp` argument instead:

    ..  code-block:: diff

         <f:asset.script identifier="main"
           src="EXT:my_sitepackage/Resources/Public/JavaScript/main.js"
        -  useNonce="1" />
        +  csp="1" />

..  _typo3-fluid-asset-script-details:

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: async, crossorigin, defer, integrity, nomodule, nonce, referrerpolicy, src, type.

Using the "inline" argument, the file content of the referenced file is added as inline script.

..  _typo3-fluid-asset-script-arguments:

Arguments of the `<f:asset.script>` ViewHelper
==============================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.script
    :source: ../../Global.json
    :display: arguments-only
