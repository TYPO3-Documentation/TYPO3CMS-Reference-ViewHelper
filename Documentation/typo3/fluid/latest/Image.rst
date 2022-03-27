.. include:: /Includes.rst.txt

.. _typo3-fluid-image:

=====
image
=====


Resizes a given image (if required) and renders the respective img tag.

External URLs are not processed. Only a given width and height will be set on the tag.

Examples
========

Default
-------

::

   <f:image src="EXT:myext/Resources/Public/typo3_logo.png" alt="alt text" />

Output in frontend::

   <img alt="alt text" src="typo3conf/ext/myext/Resources/Public/typo3_logo.png" width="396" height="375" />

or in backend::

   <img alt="alt text" src="../typo3conf/ext/viewhelpertest/Resources/Public/typo3_logo.png" width="396" height="375" />

Image Object
------------

::

   <f:image image="{imageObject}" />

Output::

   <img alt="alt set in image record" src="fileadmin/_processed_/323223424.png" width="396" height="375" />

Inline notation
---------------

::

   {f:image(src: 'EXT:viewhelpertest/Resources/Public/typo3_logo.png', alt: 'alt text', minWidth: 30, maxWidth: 40)}

Output::

   <img alt="alt text" src="../typo3temp/assets/images/f13d79a526.png" width="40" height="38" />

Depending on your TYPO3s encryption key.

Other resource type (e.g. PDF)
------------------------------

::

   <f:image src="fileadmin/user_upload/example.pdf" alt="foo" />

If your graphics processing library is set up correctly then it will output a thumbnail of the first page of your PDF document:
``<img src="fileadmin/_processed_/1/2/csm_example_aabbcc112233.gif" width="200" height="284" alt="foo">``

Non-existent image
------------------

::

   <f:image src="NonExistingImage.png" alt="foo" />

``Could not get image resource for "NonExistingImage.png".``

Arguments
=========


.. _image_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _image_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _image_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _image_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _image_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _image_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _image_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _image_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _image_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _image_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _image_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _image_alt:

alt
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an alternate text for an image

.. _image_ismap:

ismap
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a server-side image-map. Rarely used. Look at usemap instead

.. _image_longdesc:

longdesc
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the URL to a document that contains a long description of an image

.. _image_usemap:

usemap
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a client-side image-map

.. _image_loading:

loading
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Native lazy-loading for images property. Can be "lazy", "eager" or "auto"

.. _image_src:

src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _image_treatidasreference:

treatIdAsReference
------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Given src argument is a sys_file_reference record

.. _image_image:

image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   A FAL object

.. _image_crop:

crop
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _image_cropvariant:

cropVariant
-----------

:aspect:`DataType`
   string

:aspect:`Default`
   'default'

:aspect:`Required`
   false
:aspect:`Description`
   Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _image_fileextension:

fileExtension
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Custom file extension to use

.. _image_width:

width
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _image_height:

height
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _image_minwidth:

minWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum width of the image

.. _image_minheight:

minHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum height of the image

.. _image_maxwidth:

maxWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum width of the image

.. _image_maxheight:

maxHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum height of the image

.. _image_absolute:

absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Force absolute URL
