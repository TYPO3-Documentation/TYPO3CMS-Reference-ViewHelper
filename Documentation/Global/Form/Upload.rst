:navigation-title: form.upload

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-upload:

========================================
Form.upload ViewHelper `<f:form.upload>`
========================================

..  typo3:viewhelper:: form.upload
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  _typo3-fluid-form-upload-example:

Examples
========


..  _typo3-fluid-form-upload-example-basic:

Basic usage
-----------

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Partials/Upload.html

   <f:form.upload name="file" />

..  code-block:: html
    :caption: HTML output

   <input type="file" name="file" />

..  _typo3-fluid-form-upload-example-accept:

Example for allowed MIME types / file extensions (native HTML5 attribute)
-------------------------------------------------------------------------

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Partials/Upload.html

   <f:form.upload name="file" accept=".gif,.jpg,image/jpg,image/jpeg,image/gif" />

..  code-block:: html
    :caption: HTML output

   <input type="file" name="file" accept=".gif,.jpg,image/jpg,image/jpeg,image/gif" />
..  hint::

    Please be aware that the `accept` attribute is a native HTML5 element. It has no specific Extbase or Fluid implementation, so validation of the incoming file is only performed in the client. It does not replace proper validation on the backend / server side, so proper `UploadedFile` or Extbase File-Upload-Handling validation needs to be implemented, too.
..  _typo3-fluid-form-upload-arguments:

Arguments of f:form.upload
==========================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.upload
    :source: ../../Global.json
    :display: arguments-only
