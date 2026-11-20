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

The `identifier` attribute is a unique identifier into the AssetCollector. If
multiple assets are added using the same identifier, only the asset that is
added last will be served.

Some attributes are defaults but do not make sense for this ViewHelper. The
attributes for this ViewHelper are: as, crossorigin, hreflang, importance,
integrity, media, referrerpolicy, sizes, type, nonce.

If the `inline` argument is set to 1, the contents of the file in `href` are added
to the page in the HTML `<style>` tag instead of linking the file with a
`<link>` tag.

..  versionchanged:: 14.3.10
    :changelog: important-107420-1792093888

TYPO3 rewrites relative paths in `url()` and `@import` of an inlined file to
the public URL of the file they point to, as for
`page.includeCSS <https://docs.typo3.org/permalink/t3tsref:confval-page-includecss>`_
with `inline = 1`. A relative `url()` to a file that does not exist throws a
:php:`\TYPO3\CMS\Core\SystemResource\Exception\CanNotResolveSystemResourceException`
during page rendering. Make sure that all relative paths in an inlined file
point to files that exist.

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

    A local URL that does not point to a file in the public folder
    needs the prefix `URI:`. See also `Asset collector examples
    <https://docs.typo3.org/permalink/t3coreapi:assets-examples>`_.

..  _typo3-fluid-asset-css-arguments:

Arguments of the `<f:asset.css>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: asset.css
    :source: ../../Global.json
    :display: arguments-only
