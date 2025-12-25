:navigation-title: page.meta

..  include:: /Includes.rst.txt

..  _typo3-fluid-page-meta:

====================================
Page.meta ViewHelper `<f:page.meta>`
====================================

..  versionadded:: 14.0

..  typo3:viewhelper:: page.meta
    :source: /Global.json
    :display: tags, gitHubLink
    :noindex:

..  contents:: Table of contents

The Fluid ViewHelper :html:`<f:page.meta>` allows meta tags to be defined
directly within Fluid templates by leveraging TYPO3's MetaTagManager API.

This allows frontend rendering logic—such as Extbase plugins, Fluid-based
content elements, or site package templates—to control meta tags (for
example descriptions, OpenGraph data, and social media cards) directly in
Fluid templates, without requiring custom PHP logic.

Meta tags can be defined and managed directly in Fluid templates, reducing
or eliminating the need for additional TypoScript configuration in many
common scenarios.

..  _typo3-fluid-page-meta-usage-examples:

Using the `<f:page.meta>` ViewHelper
===================================

The following examples demonstrate common use cases for the
:html:`<f:page.meta>` ViewHelper in frontend Fluid templates. They show how
meta tags can be defined, extended, and replaced directly in Fluid while
integrating with TYPO3's MetaTagManager system.

..  _typo3-fluid-page-meta-example-detail-view:

Set meta tags in a detail view template
--------------------------------------

Meta tags can be defined directly in a Fluid template, for example in a
detail view that renders a single domain object.

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/Item/Show.html

    <f:page.meta property="description">{item.description}</f:page.meta>
    <f:page.meta property="og:title">{item.title}</f:page.meta>
    <f:page.meta property="og:type">article</f:page.meta>

    <h1>{item.title}</h1>
    <p>{item.description}</p>


..  _typo3-fluid-page-meta-example-opengraph:

Define OpenGraph and Twitter / X Card meta tags
-----------------------------------------------

OpenGraph and Twitter / X Card meta tags can be used to control how pages
are displayed when shared on social media platforms.

..  code-block:: html

    <f:page.meta property="og:title">My Article Title</f:page.meta>
    <f:page.meta property="og:description">Article description</f:page.meta>
    <f:page.meta property="twitter:card">
        summary_large_image
    </f:page.meta>


..  _typo3-fluid-page-meta-example-subproperties:

Use sub-properties for complex meta tags
----------------------------------------

Some meta tags, such as image-related tags, support additional
sub-properties like dimensions or alternative text.

..  code-block:: html

    <f:page.meta property="og:image"
                 subProperties="{width: 1200, height: 630,
                 alt: 'Article image'}">
        {item.image.url}
    </f:page.meta>


..  _typo3-fluid-page-meta-example-custom-types:

Define custom meta tag types
----------------------------

Custom meta tags can be defined by explicitly specifying the meta tag type
attribute.

..  code-block:: html

    <f:page.meta property="author" type="name">John Doe</f:page.meta>
    <f:page.meta property="robots" type="name">
        index, follow
    </f:page.meta>


..  _typo3-fluid-page-meta-example-replace:

Replace existing meta tags
--------------------------

Existing meta tags with the same property can be replaced explicitly when
required.

..  code-block:: html

    <f:page.meta property="description" replace="true">
        Override any existing description
    </f:page.meta>


All examples shown above integrate with TYPO3's MetaTagManager system and
respect configured meta tag managers, priorities, and rendering rules.
This enables a template-centric approach to managing SEO-relevant meta
data that reflects the rendered content accurately.

..  _typo3-fluid-page-meta-arguments:

Arguments of the `<f:page.meta>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: page.meta
    :source: /Global.json
    :display: arguments-only
