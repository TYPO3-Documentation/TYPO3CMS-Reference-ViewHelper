:navigation-title: be.pagePath

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-pagepath:

========================================
Be.pagePath ViewHelper `<f:be.pagePath>`
========================================

..  deprecated:: 15.0
    :changelog: deprecation-110148-1751533200

    The ViewHelper will be removed in TYPO3 v16.0. The doc header of a
    backend module already shows the page path. It is rendered by
    :php-short:`\TYPO3\CMS\Backend\Template\ModuleTemplate` in the backend
    controller.

..  typo3:viewhelper:: be.pagePath
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-pagepath-example:

Examples
========

Default:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Module/Index.fluid.html

    <f:be.pagePath />

Current page path, prefixed with "Path:" and wrapped in a span with the class `typo3-docheader-pagePath`.

..  _typo3-fluid-be-pagepath-arguments:

Arguments of the `<f:be.pagePath>` ViewHelper
=============================================

..  typo3:viewhelper:: be.pagePath
    :source: ../../Global.json
    :display: arguments-only
