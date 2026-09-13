:navigation-title: uri.image

..  include:: /Includes.rst.txt
..  _typo3-fluid-uri-image:

====================================
Uri.image ViewHelper `<f:uri.image>`
====================================

..  typo3:viewhelper:: uri.image
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  versionchanged:: 14.2
    When working with `srcset` in HTML, the
    `Image.srcset ViewHelper <f:image.srcset> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-image-srcset>`_
    simplifies previous manual implementations
    using :fluid:`{f:uri.image}` for each image size manually.

..  contents:: Table of contents

..  _typo3-fluid-uri-image-example:

Examples
========

..  _typo3-fluid-uri-image-default:

Default
-------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.image src="EXT:myext/Resources/Public/typo3_logo.png" />

Results in the following output within TYPO3 frontend:

`typo3conf/ext/myext/Resources/Public/typo3_logo.png`

and the following output inside TYPO3 backend:

`../typo3conf/ext/myext/Resources/Public/typo3_logo.png`

..  _typo3-fluid-uri-image-image-object:

Image object
------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.image image="{imageObject}" />

Results in the following output within TYPO3 frontend:

`fileadmin/images/image.png`

and the following output inside TYPO3 backend:

`fileadmin/images/image.png`

..  _typo3-fluid-uri-image-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    {f:uri.image(src: 'EXT:myext/Resources/Public/typo3_logo.png', minWidth: 30, maxWidth: 40)}

..  code-block:: text
    :caption: Output

    typo3temp/assets/images/[b4c0e7ed5c].png

Depending on your TYPO3s encryption key.

..  _typo3-fluid-uri-image-non-existing-image:

Non existing image
------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:uri.image src="NonExistingImage.png" />

..  code-block:: text
    :caption: Output

    Could not get image resource for "NonExistingImage.png".

..  _typo3-fluid-uri-image-base-64:

Base 64
=======

When the :typo3:viewhelper-argument:`base64 <t3viewhelper:typo3-cms-fluid-viewhelpers-uri-imageviewhelper-base64>`
argument is set to true, this ViewHelper returns a base 64 encoded version of the ressource.

..  code-block:: html

    <img src="{f:uri.image(base64: 'true',
                           src:'EXT:backend/Resources/Public/Images/typo3_logo_orange.svg')}">

Will return the image encoded in base64:

..  code-block:: html

    <img src="data:image/svg+xml;base64,PHN2...cuODQ4LTYuNzU3Ii8+Cjwvc3ZnPgo=">

This can be particularly useful inside `FluidEmail` or to prevent unneeded HTTP calls.

..  _typo3-fluid-uri-image-arguments:

Arguments
=========

..  typo3:viewhelper:: uri.image
    :source: ../../Global.json
    :display: arguments-only
