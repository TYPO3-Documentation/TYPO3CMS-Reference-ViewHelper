.. include:: /Includes.rst.txt

.. _typo3-css_styled_content-link-clickenlarge:

=================
link.clickEnlarge
=================


A view helper for creating a link for an image popup.

= Example =

<code title="enlarge image on click">
<ce:link.clickEnlarge image="{image}" configuration="{settings.images.popup}"><img src=""></ce:link.clickEnlarge>
</code>

<output>
<a href="url" onclick="javascript" target="thePicture"><img src=""></a>
</output>

Arguments
=========


.. _link.clickenlarge_image:
image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The original image file

.. _link.clickenlarge_configuration:
configuration
-------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   String, \TYPO3\CMS\Core\Resource\File or \TYPO3\CMS\Core\Resource\FileReference with link configuration
