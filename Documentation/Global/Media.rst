:navigation-title: media

..  include:: /Includes.rst.txt
..  _typo3-fluid-media:

============================
Media ViewHelper `<f:media>`
============================

..  typo3:viewhelper:: media
    :source: ../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-media-example:

Examples
========

Image Object
------------

::

   <f:media file="{file}" width="400" height="375" />

Output::

   <img alt="alt set in image record" src="fileadmin/_processed_/323223424.png" width="396" height="375" />

MP4 Video Object
----------------

::

   <f:media file="{file}" width="400" height="375" />

Output::

   <video width="400" height="375" controls><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

MP4 Video Object with loop and autoplay option set
--------------------------------------------------

::

   <f:media file="{file}" width="400" height="375" additionalConfig="{loop: '1', autoplay: '1'}" />

Output::

   <video width="400" height="375" controls loop><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

