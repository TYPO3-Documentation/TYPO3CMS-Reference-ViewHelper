.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-css:

=========
asset.css
=========


CssViewHelper

Examples
========

::

   <f:asset.css identifier="identifier123" href="EXT:my_ext/Resources/Public/Css/foo.css" />
   <f:asset.css identifier="identifier123">
      .foo { color: black; }
   </f:asset.css>

See also :ref:`_changelog-Feature-90522-IntroduceAssetCollector`

Arguments
=========


.. _asset.css_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _asset.css_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _asset.css_aria:
aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _asset.css_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _asset.css_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _asset.css_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _asset.css_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _asset.css_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _asset.css_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _asset.css_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _asset.css_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _asset.css_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _asset.css_as:
as
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the type of content being loaded (For rel="preload" or rel="prefetch" only).

.. _asset.css_crossorigin:
crossorigin
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define how to handle crossorigin requests.

.. _asset.css_disabled:
disabled
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Define whether or not the described stylesheet should be loaded and applied to the document.

.. _asset.css_href:
href
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the URL of the resource (absolute or relative).

.. _asset.css_hreflang:
hreflang
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the language of the resource (Only to be used if 'href' is set).

.. _asset.css_importance:
importance
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the relative fetch priority of the resource.

.. _asset.css_integrity:
integrity
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _asset.css_media:
media
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which media type the resources applies to.

.. _asset.css_referrerpolicy:
referrerpolicy
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which referrer is sent when fetching the resource.

.. _asset.css_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the relationship of the target object to the link object.

.. _asset.css_sizes:
sizes
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the icon size of the resource.

.. _asset.css_type:
type
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the MIME type (usually 'text/css').

.. _asset.css_nonce:
nonce
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _asset.css_identifier:
identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Use this identifier within templates to only inject your CSS once, even though it is added multiple times.

.. _asset.css_priority:
priority
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define whether the CSS should be included before other CSS. CSS will always be output in the <head> tag.
