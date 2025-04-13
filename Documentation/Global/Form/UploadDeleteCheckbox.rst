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

..  _typo3-fluid-form-uploaddeletecheckbox-example:

Examples
========

Example::

   <f:form.uploadDeleteCheckbox id="file" property="file" fileReference="{myModel.file}" />

Output::

   <input type="checkbox" id="file" name="tx_extension_plugin[@delete][item][hash]" value="signed-json-string">


..  _typo3-fluid-form-uploaddeletecheckbox-arguments:

Argument of the f:form.uploadDeleteCheckbox
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.uploadDeleteCheckbox
    :source: ../../Global.json
    :display: arguments-only
