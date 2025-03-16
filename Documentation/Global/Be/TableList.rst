:navigation-title: be.tableList

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-tablelist:

==========================================
Be.tableList ViewHelper `<f:be.tableList>`
==========================================

..  figure:: /Images/BeTablelistCategory.png
    :alt: Screenshot of a table of categories.

..  typo3:viewhelper:: be.tableList
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-tablelist-example:

Examples
========

Display and make editable the content elements of page 1 and its direct children:

..  tabs::

    ..  group-tab:: Code example

        ..  literalinclude:: /Global/Be/_TableList/_Content.html
            :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    ..  group-tab:: Screenshot

        ..  figure:: /Images/BeTablelist.png
            :alt: Screenshot of a table of content elements with edit options.

List all categories on page 5 and make them editable when clicking the title:

..  tabs::

    ..  group-tab:: Code example

        ..  literalinclude:: /Global/Be/_TableList/_Category.html
            :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    ..  group-tab:: Screenshot

        ..  figure:: /Images/BeTablelistCategory.png
            :alt: Screenshot of a table of categories.

..  _typo3-fluid-be-tablelist-arguments:

Arguments
=========

..  typo3:viewhelper:: be.tableList
    :source: ../../Global.json
    :display: arguments-only
