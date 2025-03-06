:navigation-title: cObject

..  include:: /Includes.rst.txt
..  _typo3-fluid-cobject:

================================
CObject ViewHelper `<f:cObject>`
================================

..  typo3:viewhelper:: cObject
    :display: tags,description,gitHubLink
    :source: ../Global.json
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-cobject-arguments:

Arguments
=========

..  typo3:viewhelper:: cObject
    :display: arguments-only
    :source: ../Global.json

..  _typo3-fluid-cobject-examples:

Examples for the CObject ViewHelper `<f:cObject>`
=================================================

The cObject ViewHelper can be used to render any TypoScript content object, for
example on stored in the `lib <https://docs.typo3.org/permalink/t3tsref:tlo-lib>`_
top-level object:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Pages/Default.html

    <f:cObject typoscriptObjectPath="lib.someLibObject" />

The TypoScript could look like this:

..  code-block:: html
    :caption: packages/my_sitepackage/Configuration/Sets/MySet/setup.typoscript

    lib.someLibObject = TEXT
    lib.someLibObject.value = Hello World!

..  _typo3-fluid-cobject-content:

Displaying content elements provided by the page-content data processor
-----------------------------------------------------------------------

When using the `page-content data processor <https://docs.typo3.org/permalink/t3tsref:pagecontentfetchingprocessor>`_
to display the content elements of a
`PAGEVIEW <https://docs.typo3.org/permalink/t3tsref:cobj-pageview>`_,
the CObject ViewHelper can be used to display the actual content elements:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Pages/Default.html

    <f:for each="{myContent.left.records}" as="contentElement">
        <f:cObject
            typoscriptObjectPath="{contentElement.mainType}"
            table="{contentElement.mainType}"
            data="{contentElement}"
        />
    </f:for>

Variable `{contentElement.mainType}` already contains the correct TypoScript path
to the TypoScript top-level object `tt_content <https://docs.typo3.org/permalink/t3tsref:tlo-tt-content>`_.

The table storing the content elements is also called `tt_content` so we can use
the same variable here. Variable `contentElement` already contains the
`Record object <https://docs.typo3.org/permalink/t3coreapi:record-objects>`_
containing the data needed to render the content element with the
CObject ViewHelper.

..  _typo3-fluid-cobject-plugin:

Use data from a plugin in TypoScript
------------------------------------

By using the `data` property you can forward data provided by the controller
to the TypoScript object doing the actual rendering:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Plugin/Default.html

    <f:cObject
        typoscriptObjectPath="lib.customHeader"
        data="{myplugin.article}"
        currentValueKey="title"
    />

The same can also be done in the inline notation.

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Plugin/Default.html

    {article -> f:cObject(typoscriptObjectPath: 'lib.customHeader', currentValueKey: 'title')}

The TypoScript could for example look like this:

..  code-block:: typoscript
    :caption: packages/my_sitepackage/Configuration/Sets/MySet/setup.typoscript

    lib.customHeader = COA
    lib.customHeader {
       10 = TEXT
       10.field = author
       20 = TEXT
       20.current = 1
    }

When passing an object with `{data}`, the properties of the object are
accessible with :typoscript:`.field` in TypoScript. If only a single value is
passed or the `currentValueKey` is specified, :typoscript:`.current = 1`
can be used in the TypoScript.
