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
for this ViewHelper are: async, crossorigin, defer, integrity, nomodule, nonce, referrerpolicy, type.

Using the "inline" argument, the file content of the referenced file is added as inline script.

..  _typo3-fluid-asset-script-uri:

Link a script by URL
====================

The `src` argument accepts a file of an extension with the `EXT:` syntax,
a file in the public folder of the project, and a URL. TYPO3 renders a URL
that contains `://` or starts with `//` as is, without a cache busting
parameter.

A relative path such as `/scripts/main.js` must point to an existing file
in the public folder, otherwise TYPO3 throws an exception. To render a
relative URL as is, for example a URL that no file backs, prefix it with
`URI:`:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.script identifier="cdnScript" src="https://example.com/main.js" />
    <f:asset.script identifier="mainScript" src="URI:/scripts/main.js" />

Resulting in the following HTML output:

..  code-block:: html

    <script src="https://example.com/main.js"></script>
    <script src="/scripts/main.js"></script>

The string after `URI:` must be a valid URI, otherwise TYPO3 throws an
exception. The `inline` argument reads the content from a local file. With a
URL, it adds nothing.

..  versionchanged:: 14.0
    :changelog: breaking-107927-1763052738

    A relative URL that does not point to a file in the public folder
    needs the prefix `URI:`. See also `Asset collector examples
    <https://docs.typo3.org/permalink/t3coreapi:assets-examples>`_.

..  _typo3-fluid-asset-script-arguments:

Arguments of the `<f:asset.script>` ViewHelper
==============================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.script
    :source: ../../Global.json
    :display: arguments-only
