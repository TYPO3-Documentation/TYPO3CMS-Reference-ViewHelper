:navigation-title: asset.css

..  include:: /Includes.rst.txt
..  _typo3-fluid-asset-css:

====================================
Asset.css ViewHelper `<f:asset.css>`
====================================

..  typo3:viewhelper:: asset.css
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-asset-css-example:

Examples
========

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.css identifier="identifier123" href="EXT:my_sitepackage/Resources/Public/Css/foo.css" />
    <f:asset.css identifier="identifier123">
      .foo { color: black; }
    </f:asset.css>

..  _typo3-fluid-asset-css-csp:

Content security policy
=======================

The `csp` argument controls whether TYPO3 adds the stylesheet to the
`content security policy
<https://docs.typo3.org/permalink/t3coreapi:content-security-policy>`_ of
the page. TYPO3 then adds a hash of the stylesheet to the CSP header, and a
`nonce` attribute to the tag if the page uses a nonce. If `csp` is not set,
TYPO3 does this for a file in `href`, but not for inline CSS:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.css identifier="highlight" csp="1">
      .highlight { color: red; }
    </f:asset.css>

..  versionchanged:: 15.0
    :changelog: breaking-109783-1776735296

    The `useNonce` argument, deprecated since TYPO3 v14.2, has been removed.
    Use the `csp` argument instead:

    ..  code-block:: diff

         <f:asset.css identifier="main"
           href="EXT:my_sitepackage/Resources/Public/Css/main.css"
        -  useNonce="1" />
        +  csp="1" />

..  _typo3-fluid-asset-css-details:

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: as, crossorigin, hreflang, importance, integrity, media, referrerpolicy,
sizes, type, nonce.

Using the "inline" argument, the file content of the referenced file is added as inline style.

..  _typo3-fluid-asset-css-arguments:

Arguments of the `<f:asset.css>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.css
    :source: ../../Global.json
    :display: arguments-only
