:navigation-title: page.title

..  include:: /Includes.rst.txt

..  _typo3-fluid-page-title:

======================================
Page.title ViewHelper `<f:page.title>`
======================================

..  versionadded:: 14.0

The ViewHelper allows setting the page title directly from Fluid templates.

This is especially useful for Extbase plugins that need to set a page title
in their detail views without having to implement their own custom `page title
provider <https://docs.typo3.org/permalink/t3coreapi:pagetitle>`_.

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/Item/Show.html

    <f:page.title>{item.title}</f:page.title>

    <h1>{item.title}</h1>
    <p>{item.description}</p>

The ViewHelper can also be used with static content:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/Static/About.html

    <f:page.title>About Us - Company Information</f:page.title>

    <h1>About Us</h1>
    <p>Welcome to our company...</p>

..  typo3:viewhelper:: page.title
    :source: ../../Global.json
    :display: tags,gitHubLink
    :noindex:

The ViewHelper integrates seamlessly with TYPO3's existing `page title
provider <https://docs.typo3.org/permalink/t3coreapi:pagetitle>`_
system and respects the configured provider priorities.
