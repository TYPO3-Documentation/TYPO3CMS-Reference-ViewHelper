:navigation-title: render.contentArea

..  include:: /Includes.rst.txt

..  _typo3-fluid-render-contentarea:

======================================================
Render.contentArea ViewHelper `<f:render.contentArea>`
======================================================

..  versionadded:: 14.2
    Instead of using the :html:`<f:cObject>` and :html:`<f:for>` ViewHelpers to
    render content areas, use the new :html:`<f:render.contentArea>` ViewHelper.

This ViewHelper can be used to render a content area provided by the
`page-content data processor <https://docs.typo3.org/permalink/t3tsref:pagecontentfetchingprocessor>`_.

It is commonly used with the `PAGEVIEW <https://docs.typo3.org/permalink/t3tsref:cobj-pageview>`_
TypoScript content object.

Theme creators are encouraged to use the :html:`<f:render.contentArea>` ViewHelper
to allow other extensions to modify the output via event listeners.

..  typo3:viewhelper:: render.contentArea
    :source: /Global.json
    :display: tags,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-render-contentarea-example:

Rendering all content elements within a backend layout column
=============================================================

The most common use case for the `<f:render.contentArea>` is to render all
content elements within a column from a backend layout.

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.html

            <f:render.contentArea contentArea="{content.main}"/>

        Or using inline syntax:

        ..  code-block:: html
            :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.html

            {content.main -> f:render.contentArea()}

    ..  group-tab:: TypoScript

        ..  code-block:: typoscript
            :caption: packages/my_sitepackage/Configuration/Sets/main/setup.typoscript

            page = PAGE
            page {
                10 = PAGEVIEW
                10 {
                    paths.10 = EXT:my_sitepackage/Resources/Private/Templates/
                    dataProcessing.10 = page-content
                }
            }

For an example of how to configure the backend layout in page TSconfig
and further data processor options, see
`Example: Use the page-content data processor to display the content
<https://docs.typo3.org/permalink/t3tsref:pagecontentfetchingprocessor-example>`_.

..  _typo3-fluid-render-contentarea-example-recordas:

Using the "recordAs" argument to wrap each content element
==========================================================

Using the :ref:`recordAs <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-render-contentareaviewhelper-recordas>`
argument, `<f:render.contentArea>` can be combined with the
`Render.record ViewHelper <f:render.record> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-render-record>`_
to wrap each content element:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Page/Default.html

    <div id="sidebar">
        <f:render.contentArea contentArea="{content.left}" recordAs="record">
            <div id="sidebarItem{record.uid}">
                <f:render.record record="{record}" />
            </div>
        </f:render.contentArea>
    </div>

..  _typo3-fluid-render-contentarea-event:

Intercepting the rendering of content areas via an event
========================================================

Developers can intercept the rendering of content areas in Fluid templates using
:php:`\TYPO3\CMS\Fluid\Event\ModifyRenderedContentAreaEvent` to modify output.

..  _typo3-fluid-render-contentarea-arguments:

Arguments of the `<f:render.contentArea>` ViewHelper
====================================================

..  typo3:viewhelper:: render.contentArea
    :source: /Global.json
    :display: arguments-only
