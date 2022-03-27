.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-script:

============
asset.script
============


ScriptViewHelper

Examples
========

::

   <f:asset.script identifier="identifier123" src="EXT:my_ext/Resources/Public/JavaScript/foo.js" />
   <f:asset.script identifier="identifier123">
      alert('hello world');
   </f:asset.script>

Arguments
=========


.. _asset.script_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _asset.script_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _asset.script_aria:
aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _asset.script_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _asset.script_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _asset.script_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _asset.script_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _asset.script_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _asset.script_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _asset.script_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _asset.script_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _asset.script_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _asset.script_async:
async
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script will be fetched in parallel to parsing and evaluation.

.. _asset.script_crossorigin:
crossorigin
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define how to handle crossorigin requests.

.. _asset.script_defer:
defer
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script is meant to be executed after the document has been parsed.

.. _asset.script_integrity:
integrity
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _asset.script_nomodule:
nomodule
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script should not be executed in browsers that support ES2015 modules.

.. _asset.script_nonce:
nonce
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _asset.script_referrerpolicy:
referrerpolicy
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which referrer is sent when fetching the resource.

.. _asset.script_src:
src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the URI of the external resource.

.. _asset.script_type:
type
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the MIME type (usually 'text/javascript').

.. _asset.script_identifier:
identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Use this identifier within templates to only inject your JS once, even though it is added multiple times.

.. _asset.script_priority:
priority
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define whether the JavaScript should be put in the <head> tag above-the-fold or somewhere in the body part.
