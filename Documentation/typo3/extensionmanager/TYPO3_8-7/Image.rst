.. include:: /Includes.rst.txt

.. _typo3-extensionmanager-image:

=====
image
=====


Render an img tag for given image src. If $src doesn't exist and
$fallbackImage is given check if that file exists and render img tag.

If no existing file is found no tag is rendered.

Examples
========

Default::

      <em:image src="EXT:myext/Resources/Public/typo3_logo.png" alt="alt text" />

Output::

      <img alt="alt text" src="../typo3conf/ext/myext/Resources/Public/typo3_logo.png" />

non existing image::

      <f:image src="NonExistingImage.png" alt="foo" />

Output::


Arguments
=========


.. _image_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _image_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _image_src:
src
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`


.. _image_width:
width
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Width of the image

.. _image_height:
height
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Height of the image

.. _image_fallbackimage:
fallbackImage
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   An optional fallback image if the $src image cannot be loaded

.. _image_class:
class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   CSS class(es) for this element

.. _image_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _image_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _image_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _image_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _image_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _image_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _image_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _image_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _image_alt:
alt
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies an alternate text for an image
