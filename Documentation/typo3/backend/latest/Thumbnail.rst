.. include:: /Includes.rst.txt

.. _typo3-backend-thumbnail:

=========
thumbnail
=========


ViewHelper for the backend which generates an :html:`<img>` tag with the special URI to render thumbnails deferred.

Examples
========

Default
-------

::

   <be:thumbnail image="{file.resource}" width="{thumbnail.width}" height="{thumbnail.height}" />

Output::

   <img src="/typo3/index.php?route=/thumbnails&token=&parameters={"fileId":1,"configuration":{"_context":"Image.Preview","maxWidth":64,"maxHeight":64}}&hmac="
        width="64"
        height="64"
        alt="alt set in image record"
        title="title set in image record"/>

Inline notation
---------------

::

   {be:thumbnail(image: file.resource, maxWidth: thumbnail.width, maxHeight: thumbnail.height)}

Output::

   <img src="/typo3/index.php?route=/thumbnails&token=&parameters={"fileId":1,"configuration":{"_context":"Image.Preview","maxWidth":64,"maxHeight":64}}&hmac="
        width="64"
        height="64"
        alt="alt set in image record"
        title="title set in image record"/>

Arguments
=========


.. _thumbnail_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _thumbnail_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _thumbnail_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _thumbnail_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _thumbnail_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _thumbnail_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _thumbnail_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _thumbnail_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _thumbnail_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _thumbnail_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _thumbnail_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _thumbnail_alt:

alt
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an alternate text for an image

.. _thumbnail_ismap:

ismap
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a server-side image-map. Rarely used. Look at usemap instead

.. _thumbnail_longdesc:

longdesc
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the URL to a document that contains a long description of an image

.. _thumbnail_usemap:

usemap
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a client-side image-map

.. _thumbnail_loading:

loading
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Native lazy-loading for images property. Can be "lazy", "eager" or "auto"

.. _thumbnail_src:

src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _thumbnail_treatidasreference:

treatIdAsReference
------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Given src argument is a sys_file_reference record

.. _thumbnail_image:

image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   A FAL object

.. _thumbnail_crop:

crop
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _thumbnail_cropvariant:

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

.. _thumbnail_fileextension:

fileExtension
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Custom file extension to use

.. _thumbnail_width:

width
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _thumbnail_height:

height
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _thumbnail_minwidth:

minWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum width of the image

.. _thumbnail_minheight:

minHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum height of the image

.. _thumbnail_maxwidth:

maxWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum width of the image

.. _thumbnail_maxheight:

maxHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum height of the image

.. _thumbnail_absolute:

absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Force absolute URL

.. _thumbnail_context:

context
-------

:aspect:`DataType`
   string

:aspect:`Default`
   'Image.Preview'

:aspect:`Required`
   false
:aspect:`Description`
   Context for image rendering
