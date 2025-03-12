:navigation-title: image

..  include:: /Includes.rst.txt
..  _typo3-fluid-image:

============================
Image ViewHelper `<f:image>`
============================

..  typo3:viewhelper:: image
    :source: ../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-image-example:

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

Base64 attribute
----------------

When the :typo3:viewhelper-argument:`base64 <typo3-cms-fluid-viewhelpers-imageviewhelper-base64>`
argument is set to true, the resulting image tag contains the source of the image in a base64
encoded form.

..  code-block:: html

    <f:image base64="true"
             src="EXT:backend/Resources/Public/Images/typo3_logo_orange.svg"
             class="pr-2"
    />

Will result in the according HTML tag providing the image encoded in base64.

.. code-block:: html

    <img class="pr-2"
         src="data:image/svg+xml;base64,PHN2...cuODQ4LTYuNzU3Ii8+Cjwvc3ZnPgo="
         alt=""
    >

This can be particularly useful inside `FluidEmail` or to prevent unneeded HTTP calls.
