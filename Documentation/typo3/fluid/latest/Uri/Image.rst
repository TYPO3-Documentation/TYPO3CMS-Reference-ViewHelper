.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-image:

=========
uri.image
=========


Resizes a given image (if required) and returns its relative path.

External URLs are not processed and just returned as is.

Examples
========

Default
-------

::

   <f:uri.image src="EXT:myext/Resources/Public/typo3_logo.png" />

Results in the following output within TYPO3 frontend:

``typo3conf/ext/myext/Resources/Public/typo3_logo.png``

and the following output inside TYPO3 backend:

``../typo3conf/ext/myext/Resources/Public/typo3_logo.png``

Image Object
------------

::

   <f:uri.image image="{imageObject}" />

Results in the following output within TYPO3 frontend:

``fileadmin/images/image.png``

and the following output inside TYPO3 backend:

``fileadmin/images/image.png``

Inline notation
---------------

::

   {f:uri.image(src: 'EXT:myext/Resources/Public/typo3_logo.png', minWidth: 30, maxWidth: 40)}

``typo3temp/assets/images/[b4c0e7ed5c].png``

Depending on your TYPO3s encryption key.

Non existing image
------------------

::

   <f:uri.image src="NonExistingImage.png" />

``Could not get image resource for "NonExistingImage.png".``

Arguments
=========


.. _uri.image_src:
src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Src

.. _uri.image_treatidasreference:
treatIdAsReference
------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Given src argument is a sys_file_reference record

.. _uri.image_image:
image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Image

.. _uri.image_crop:
crop
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _uri.image_cropvariant:
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

.. _uri.image_fileextension:
fileExtension
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Custom file extension to use

.. _uri.image_width:
width
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _uri.image_height:
height
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _uri.image_minwidth:
minWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum width of the image

.. _uri.image_minheight:
minHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum height of the image

.. _uri.image_maxwidth:
maxWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum width of the image

.. _uri.image_maxheight:
maxHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum height of the image

.. _uri.image_absolute:
absolute
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Force absolute URL
