:navigation-title: image

..  include:: /Includes.rst.txt
..  _typo3-fluid-image:

============================
Image ViewHelper `<f:image>`
============================

..  typo3:viewhelper:: image
    :source: ../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-image-src:

Argument src - displaying images from extension assets
======================================================

Images used for design purposes and not content purposes are commonly shipped
in an extension. These images cannot be edited by backend users. They can be
displayed using the `<f:image>` ViewHelper using the
:ref:`src <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-src>`
argument and `EXT:` syntax:

..  code-block:: html

    <f:image src="EXT:my_site_package/Resources/Public/images/typo3_logo.png" alt="alt text" />

In the extension the assets **must** be stored under :path:`Resources/Public/` or
a subfolder of this folder.

If you installed the extension via Composer **before** it had a folder of that
exact name, reinstall it so that the symlinks in folder :path:`public/_assets`
are correctly created for you.

..  note::

    Avoid using image operations such as the arguments
    :ref:`width <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-width>` or
    :ref:`crop <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-crop>`
    with images included from an extensions' assets. Each
    non-FAL image operation creates a "fake" FAL record, which may lead to problems.

..  _typo3-fluid-image-image:

Argument image - display images from the folder fileadmin / from FAL
====================================================================

Folders from inside the folder :path:`fileadmin` are usually accessed using the
`file abstraction layer (FAL) <https://docs.typo3.org/permalink/t3coreapi:fal-introduction>`_.

For example, if you want to display an image that is attached to a content
element, the content element typically stores a reference count of attached images in
its `media` field. Intermediate tables are then used to attach the actual image
to the content elements. This allows backend users to move or rename files,
without the files connection being lost in the content element.

..  versionadded:: TYPO3 14.0

The default image conversion format used can be configured
via the `$GLOBALS['TYPO3_CONF_VARS']['GFX']['imageFileConversionFormats']
<https://docs.typo3.org/permalink/t3coreapi:confval-globals-typo3-conf-vars-sys-gfx-imagefileconversionformats>`_.

This allows integrators to globally define which output format TYPO3 should
use when converting images, for example, to prefer WebP output for JPEG and
GIF sources by default.

..  _typo3-fluid-image-fluidtemplate:

FLUIDTEMPLATE and data processors and images
--------------------------------------------

In a TypoScript `FLUIDTEMPLATE <https://docs.typo3.org/permalink/t3tsref:cobj-template>`_
you can use the `files data processor <https://docs.typo3.org/permalink/t3tsref:filesprocessor>`_
to display an image with the `<f:image>` ViewHelper.

See `Example: Render the images stored in field image <https://docs.typo3.org/permalink/t3tsref:filesprocessor-example-render-image>`_
in the TypoScript reference.

You can then use the :ref:`image <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-image>`
argument to pass the :php-short:`\TYPO3\CMS\Core\Resource\File` or
:php-short:`\TYPO3\CMS\Core\Resource\FileReference`
provided by the TypoScript data processor to the ViewHelper.

..  code-block:: html

    <f:for each="{images}" as="image">
        <f:image image="{image}" class="something" height="250" alt="Description"/>
    </f:for>

The :abbr:`FAL (file abstraction layer)` will scale the image and
convert it to a web format if necessary (for example from a pdf to a png).

The `<f:image>` ViewHelper generates a HTML `<img>` tag with the correct paths, etc.

..  _typo3-fluid-image-extbase:

Images from Extbase models in Fluid
-----------------------------------

In Extbase models you can use fields of type :php:`\TYPO3\CMS\Extbase\Persistence\ObjectStorage` with
the TCA type `File <https://docs.typo3.org/permalink/t3tca:columns-file>`_.

When you are looping through the object storage, each element will be of type
:php:`\TYPO3\CMS\Extbase\Domain\Model\FileReference`. They can be used with the
:ref:`image <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-image>`
argument:

..  code-block:: html

    <f:for each="{mymodel.images}" as="image">
        <f:image image="{image}" class="something" height="250"/>
    </f:for>

If the field should only contain a maximum of one image
(`maxitems=1  <https://docs.typo3.org/permalink/t3tca:confval-file-maxitems>`_),
you can display the image simply by selecting
the first array element:

..  code-block:: html

    <f:if condition="{mymodel.image.0}">
        <f:image image="{mymodel.image.0}" class="something" height="250"/>
    </f:if>

..  _typo3-fluid-image-uidreference:

Using the UID of the database entry directly
============================================

If you have the UID of the **sys_file_reference** table (preferred) you have to set
:ref:`treatIdAsReference <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-treatidasreference>`
to true and pass the UID of the file reference to the
:ref:`src <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-src>`
argument.

If only the UID of the **sys_file** table is available, you can pass this value to
the :ref:`src <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-src>`
argument of the ViewHelper and `treatIdAsReference` can be kept as the default value (false).
In this case no data from the file reference, such as default cropping or overrides for alt text and
description, will be available.

..  code-block:: html

    <f:image src="{reference.uid}" treatIdAsReference="1" height="250"/>
    <f:image src="{file.uid}" height="250" alt="My image description"/>

    <!-- File with uid 42 -->
    <f:image src="42" treatIdAsReference="1" class="something" height="250"/>

..  _typo3-fluid-image-typolink:

Displaying an image using its typolink string
=============================================

If the file is configured as a typolink, for example from a TCA field of type
`Link <https://docs.typo3.org/permalink/t3tca:columns-link>`_, you can use
the typolink string, starting with `t3://file`, as
:ref:`src <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-imageviewhelper-src>`:

..  code-block:: html

    <f:image src="{file.link}" height="250"/>

    <!-- File with uid 928 -->
    <f:image src="t3://file?uid=928" height="250"/>

..  _typo3-fluid-image-example:

Embedding SVG files with the base64 attribute
=============================================

When the :typo3:viewhelper-argument:`base64 <typo3-cms-fluid-viewhelpers-imageviewhelper-base64>`
argument is set to true, the resulting image tag will contain the source of the image in a base64
encoded form.

..  code-block:: html

    <f:image base64="true"
             src="EXT:backend/Resources/Public/Images/typo3_logo_orange.svg"
             class="pr-2"
    />

This will result in the HTML tag providing the image encoded in
base64.

.. code-block:: html

    <img class="pr-2"
         src="data:image/svg+xml;base64,PHN2...cuODQ4LTYuNzU3Ii8+Cjwvc3ZnPgo="
         alt=""
    >

This can be particularly useful inside
`FluidEmail <https://docs.typo3.org/permalink/t3coreapi:mail-fluid-email>`_
or to prevent unnecessary HTTP calls.

..  _typo3-fluid-image-arguments:

Arguments of the `<f:image>` ViewHelper
=======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: image
    :source: ../Global.json
    :display: arguments-only
