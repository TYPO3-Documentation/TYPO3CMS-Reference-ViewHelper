:navigation-title: debug.render

..  include:: /Includes.rst.txt
..  _typo3-fluid-debug-render:

==========================================
Debug.render ViewHelper `<f:debug.render>`
==========================================

..  deprecated:: 14.2
    :changelog: deprecation-107208-1754387701

    The ViewHelper triggers a deprecation warning and will be removed in
    TYPO3 v15.0. Use the `Render ViewHelper <f:render>
    <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-render>`_
    instead.

..  typo3:viewhelper:: debug.render
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-debug-render-migration:

Migration: Use the `f:render` ViewHelper
========================================

The admin panel used `<f:debug.render>` internally to show the Fluid
debug output. Since TYPO3 v14.2, :composer:`typo3/cms-adminpanel` replaces
`<f:render>` with its own implementation. If the admin panel is installed,
every `<f:render>` call shows the debug output when the option
:guilabel:`Show fluid debug output` is active in the :guilabel:`Preview`
settings of the admin panel.

Replace `<f:debug.render>` with `<f:render>`. The arguments stay the same:

..  code-block:: diff
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.fluid.html

    -<f:debug.render partial="SomePartial" arguments="{_all}" />
    +<f:render partial="SomePartial" arguments="{_all}" />

The `debug` argument is only available while the admin panel is installed.
Without the admin panel, Fluid throws an exception for this undeclared
argument. Remove the argument unless your project always has the admin
panel installed.

..  _typo3-fluid-debug-render-arguments:

Arguments of the `<f:debug.render>` ViewHelper
==============================================

..  typo3:viewhelper:: debug.render
    :source: ../../Global.json
    :display: arguments-only
