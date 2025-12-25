
..  include:: /Includes.rst.txt
..  _typo3-fluid-page-viewhelpers:

================
Page ViewHelpers
================

..  versionadded:: 14.0

The Page ViewHelpers provide access to page-level functionality in frontend
Fluid templates. They are used to control aspects of the rendered HTML
document that belong to the page itself rather than to individual content
elements.

Typical use cases include:

*   setting the document title
*   defining SEO and social media meta tags
*   injecting additional markup into the HTML `<head>` section

The Page ViewHelpers are designed to be used together and integrate with
TYPO3’s frontend rendering and MetaTagManager systems.

For detailed information about each ViewHelper and its arguments, refer to
the individual reference pages:

..  toctree::
    :titlesonly:
    :glob:

    */Index
    *

..  _typo3-fluid-page-viewhelpers-integrated-example:

Setting meta data in a PAGEVIEW layout via Fluid
================================================

The following example shows how multiple Page ViewHelpers can be combined
in a `PAGEVIEW <https://docs.typo3.org/permalink/t3tsref:cobj-pageview>`_
layout to manage common page-level concerns such as the document title,
SEO-related meta tags, OpenGraph and Twitter / X meta data, as well as
favicon and other `<head>` assets.

This approach is typically used in site packages and custom frontend
rendering setups where page title, meta data, and head markup are defined
centrally in a layout.

..  literalinclude:: _codesnippets/_PageLayout.html
    :caption: EXT:my_extension/Resources/Private/PageView/Layout/Default.html

The example above combines several Page ViewHelpers, each responsible for a
specific page-level concern:

*   `Page.title ViewHelper <f:page.title> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-page-title>`_
    Used to compose a dynamic document title from multiple values instead of
    relying on the default page title.

*   `Page.meta ViewHelper <f:page.meta> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-page-meta>`_
    Used to define SEO-related, OpenGraph, and Twitter / X meta tags directly
    in the Fluid template.

*   `Page.headerData ViewHelper <f:page.headerData> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-page-headerdata>`_
    Used to inject additional markup into the HTML `<head>` section, for
    example favicon and touch icon definitions.

In addition, the example uses format ViewHelpers to normalize content before
it is used in titles and meta tags:

*   `Format.stripTags ViewHelper <f:format.stripTags> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-format-striptags>`_
    Removes HTML markup from rich text values.

*   `Format.html ViewHelper <f:format.html> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-format-html>`_
    Renders HTML content safely in the page body.
