:navigation-title: asset.css

..  include:: /Includes.rst.txt
..  _typo3-fluid-asset-css:

====================================
Asset.css ViewHelper `<f:asset.css>`
====================================

..  typo3:viewhelper:: asset.css
    :source: ../../Global.json
    :display: tags, description, gitHubLink, arguments

..  _typo3-fluid-asset-css-example:

Examples
========

::

   <f:asset.css identifier="identifier123" href="EXT:my_ext/Resources/Public/Css/foo.css" />
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
