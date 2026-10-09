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

..  _typo3-fluid-asset-css-details:

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: as, crossorigin, disabled, href, hreflang, importance, integrity, media, referrerpolicy,
sizes, type, nonce.

Using the "inline" argument, the file content of the referenced file is added as inline style.

..  _typo3-fluid-asset-css-uri:

Link a stylesheet by URL
========================

The `href` argument accepts a file of an extension with the `EXT:` syntax,
a file in the public folder of the project, and a URL. TYPO3 renders a URL
that contains `://` or starts with `//` as is, without a cache busting
parameter.

A local path such as `/styles/main.css` must point to an existing file
in the public folder, otherwise TYPO3 throws an exception. To render a
local URL as is, for example a URL that no file backs, prefix it with
`URI:`:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    <f:asset.css identifier="cdnStyles" href="https://example.com/main.css" />
    <f:asset.css identifier="mainStyles" href="URI:/styles/main.css" />

Resulting in the following HTML output:

..  code-block:: html

    <link href="https://example.com/main.css" rel="stylesheet" >
    <link href="/styles/main.css" rel="stylesheet" >

The string after `URI:` must be a valid URI, otherwise TYPO3 throws an
exception. The `inline` argument reads the content from a local file. With a
URL, it adds nothing.

..  versionchanged:: 14.0
    :changelog: breaking-107927-1763052738

    A relative URL that does not point to a file in the public folder
    needs the prefix `URI:`. See also `Asset collector examples
    <https://docs.typo3.org/permalink/t3coreapi:assets-examples>`_.

..  _typo3-fluid-asset-css-arguments:

Arguments of the `<f:asset.css>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.css
    :source: ../../Global.json
    :display: arguments-only
