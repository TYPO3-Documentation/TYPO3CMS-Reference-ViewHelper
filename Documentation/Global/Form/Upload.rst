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

Example::

   <f:form.upload name="file" />

Output::

   <input type="file" name="file" />

Example for allowed MIME types (native HTML5 attribute)::

   <f:form.upload name="file" accept=".gif,.jpg,image/jpg,image/jpeg,image/gif" />

Output::

   <input type="file" name="file" accept=".gif,.jpg,image/jpg,image/jpeg,image/gif" />

..  _typo3-fluid-form-upload-arguments:

Arguments of f:form.upload
==========================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.upload
    :source: ../../Global.json
    :display: arguments-only
