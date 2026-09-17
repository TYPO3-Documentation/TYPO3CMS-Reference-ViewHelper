:navigation-title: form.uploadDeleteCheckbox

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-uploaddeletecheckbox:

====================================================================
Form.uploadDeleteCheckbox ViewHelper `<f:form.uploadDeleteCheckbox>`
====================================================================

..  typo3:viewhelper:: form.uploadDeleteCheckbox
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-form-uploaddeletecheckbox-example:

Examples
========

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Partials/Upload.fluid.html

    <f:form.uploadDeleteCheckbox id="file" property="file" fileReference="{myModel.file}" />

..  code-block:: html
    :caption: HTML output

    <input type="checkbox" id="file" name="tx_extension_plugin[@delete][item][hash]" value="signed-json-string">

..  _typo3-fluid-form-uploaddeletecheckbox-arguments:

Argument of the f:form.uploadDeleteCheckbox
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.uploadDeleteCheckbox
    :source: ../../Global.json
    :display: arguments-only
