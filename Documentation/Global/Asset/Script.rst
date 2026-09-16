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

    <f:asset.script identifier="identifier123" src="EXT:my_ext/Resources/Public/JavaScript/foo.js" />
    <f:asset.script identifier="identifier987">
      alert('hello world');
    </f:asset.script>

..  _typo3-fluid-asset-script-details:

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: async, crossorigin, defer, integrity, nomodule, nonce, referrerpolicy, src, type.

Using the "inline" argument, the file content of the referenced file is added as inline script.

..  _typo3-fluid-asset-script-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.script
    :source: ../../Global.json
    :display: arguments-only
