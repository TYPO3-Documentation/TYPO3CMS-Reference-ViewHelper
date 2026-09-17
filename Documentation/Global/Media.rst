:navigation-title: media

..  include:: /Includes.rst.txt
..  _typo3-fluid-media:

============================
Media ViewHelper `<f:media>`
============================

..  typo3:viewhelper:: media
    :source: ../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-media-example:

Examples
========

..  _typo3-fluid-media-image-object:

Image object
------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Media/Show.fluid.html

    <f:media file="{file}" width="400" height="375" />

..  code-block:: html
    :caption: Output

    <img alt="alt set in image record" src="fileadmin/_processed_/323223424.png" width="396" height="375" />

..  _typo3-fluid-media-mp4-video-object:

MP4 video object
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Media/Show.fluid.html

    <f:media file="{file}" width="400" height="375" />

..  code-block:: html
    :caption: Output

    <video width="400" height="375" controls><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

..  _typo3-fluid-media-mp4-video-object-with-loop-and-autoplay-option-set:

MP4 video object with loop and autoplay option set
--------------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Media/Show.fluid.html

    <f:media file="{file}" width="400" height="375" additionalConfig="{loop: '1', autoplay: '1'}" />

..  code-block:: html
    :caption: Output

    <video width="400" height="375" controls loop><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

..  _typo3-fluid-media-arguments:

Arguments of the `<f:media>` ViewHelper
=======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: media
    :source: ../Global.json
    :display: arguments-only
