:navigation-title: render

..  include:: /Includes.rst.txt
..  _typo3-fluid-render:

==============================
Render ViewHelper `<f:render>`
==============================

..  typo3:viewhelper:: render
    :source: ../Global.json
    :display: tags, description, gitHubLink
    :noindex:

..  note::
    While a partial or section can be rendered using this ViewHelper, a
    **layout** can only be included using the
    `Layout ViewHelper <f:layout> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-layout>`_.

..  contents:: Table of contents

..  _typo3-fluid-render-partial:

Rendering a partial
===================

..  seealso::
    *   `Site package tutorial: The default page template <https://docs.typo3.org/permalink/t3sitepackage:default-page-template>`_
    *   `Override the partial template for image rendering <https://docs.typo3.org/permalink/t3sitepackage:content-element-rendering-image>`_
    *   `Split up the template into partials <https://docs.typo3.org/permalink/t3sitepackage:partials>`_

The render ViewHelper can be used with the argument
:ref:`partial <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-partial>`
to render the content of a "partial". A partial is a separate Fluid file.

..  code-block:: html
    :caption: packages/my_site_package/Resources/Private/PageView/Pages/Default.html

    <f:render partial="Footer" arguments="{_all}"/>

During rendering the content of file
:file:`packages/my_site_package/Resources/Private/PageView/Partials/Footer.html`
will be rendered with all variables that are also available in the main template.

It is possible to render a partial within a partial or layout as well. For
example the footer partial could look like this:

..  code-block::
    :caption: packages/my_site_package/Resources/Private/PageView/Partials/Footer.html

    <footer class="my-footer">
        <f:render partial="Navigation/FooterMenu" arguments="{_all}"/>
    </footer>

When the argument :ref:`partial <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-partial>`
contains a slash `/` the partial will be searched in a subfolder. The partial
from the above example will therefore be expected in file
:file:`packages/my_site_package/Resources/Private/PageView/Partials/Navigation/FooterMenu.html`.

..  _typo3-fluid-render-partial-path:

Configuring the path in which to save the partials
--------------------------------------------------

*   Partials used to display pages with the TypoScript object
    `PAGEVIEW <https://docs.typo3.org/permalink/t3tsref:cobj-pageview>`_ are
    always found in folder `Partials` within the path that has been defined in
    property :ref:`paths.[priority] <t3tsref:confval-pageview-paths>`.

*   Partials used to display content elements or pages using the TypoScript
    object `FLUIDTEMPLATE <https://docs.typo3.org/permalink/t3tsref:cobj-template>`_
    are searched in the paths defined in property
    :ref:`partialRootPaths <t3tsref:confval-fluidtemplate-partialrootpaths>`.

*   In Extbase plugins the paths to the partials are configured in
    :ref:`plugin.tx_myextension_someplugin.view.partialRootPaths.[priority] <t3tsref:confval-plugin-view-partialrootpaths>`.
    If not path is defined here there is a fallback to folder
    :path:`EXT:my_extension/Resources/Private/Partials`.

..  _typo3-fluid-render-section:

Rendering a section
===================

When the render ViewHelper is used with the argument
:ref:`section <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-section>`
the content of a `Section ViewHelper <f:section> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-section>`_
can be rendered.

..  code-block:: html
    :caption: packages/my_site_package/Resources/Private/PageView/Layouts/PageLayout.html

    <f:render section="SomeSection"/>

    <f:section name="SomeSection">
        This is the section.
    </f:section>

..  _typo3-fluid-render-section-layout:

Rendering sections in layouts
-----------------------------

..  seealso::
    *   `Site Package Tutorial: The Fluid layout template <https://docs.typo3.org/permalink/t3sitepackage:layout-template>`_

If the section is rendered from within a layout file the section can be defined
in the template using the layout. Since usually several templates use the same
layout, it can be helpful to mark the render tag as
:ref:`optional <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-optional>`.
It is also possible to provide a default value to be displayed if the section
was not found in the template. You can use the content of the tag or the argument
:ref:`default <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-default>`.

..  code-block:: html
    :caption: packages/my_site_package/Resources/Private/PageView/Layouts/PageLayout.html

    <f:render section="Header" optional="true">
        <f:render partial="Header" arguments="{_all}"/>
    </f:render>
    <f:render section="Breadcrumb" optional="true"/>
    <f:render section="Main"/>

In this example the templates may define a section called "Header" to override
the default header rendered from a partial.

If the template defines no section named "Breadcrumb" that section is just
ignored.

All templates have to define the section "Main" otherwise there is an error.

Template 1 just defines some content:

..  code-block:: html
    :caption: packages/my_site_package/Resources/Private/PageView/Pages/Template1.html

    <f:layout name="PageLayout"/>
    <f:section name="Main">
        <main>Main content of Template 1</main>
    </f:section>

..  code-block:: html
    :caption: packages/my_site_package/Resources/Private/PageView/Pages/Template2.html

    <f:layout name="PageLayout"/>
    <f:section name="Header">
        <header>My Special header</header>
    </f:section>
    <f:section name="Breadcrumb">
        <f:render partial="Navigation/Breadcrumb" arguments="{_all}">
    </f:section>
    <f:section name="Main">
        <main>Main content of Template 1</main>
    </f:section>

..  _typo3-fluid-render-section-partial:

Rendering a section from a (different) partial
----------------------------------------------

If both arguments :ref:`section <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-section>`
and :ref:`partial <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-renderviewhelper-partial>`
are used a section found in a partial can be rendered.

..  _typo3-fluid-render-arguments:

Arguments
=========

..  typo3:viewhelper:: render
    :source: ../Global.json
    :display: arguments-only
