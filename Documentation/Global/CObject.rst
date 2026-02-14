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

..  _typo3-fluid-cobject-contentobject:

Use data from a TypoScript ContentObject
----------------------------------------

As a more advanced use case, the ViewHelper can be used to pass data from a
Fluid template to a content object defined in TypoScript. The following example
demonstrates this with a user counter. The value
of our user counter should come from theblog post. (In this example, every blog post should count how many times it has been viewed.)

In the Fluid template we add:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    <f:cObject typoscriptObjectPath="lib.myCounter">{post.viewCount}</f:cObject>

Alternatively, we can use a self-closing tag. The data is passed
with the help of the :html:`data` attribute.

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    <f:cObject typoscriptObjectPath="lib.myCounter" data="{post.viewCount}" />

Inline notation is also advisable in this example, because it is
easy to read from left to right:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post.viewCount -> f:cObject(typoscriptObjectPath: 'lib.myCounter')}

Now we still have to evaluate the passed value in our TypoScript
template. We can use the :typoscript:`stdWrap` attribute :typoscript:`current`
to achieve this. It works like a switch: If set to 1, the value, which we
passed to the TypoScript object in the Fluid template will be used. In our
example, it looks like this:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/TypoScript/setup.typoscript

    lib.myCounter = TEXT
    lib.myCounter {
      current = 1
      wrap = <strong>|</strong>
    }

This TypoScript snippet outputs the current number of visits written
in bold.

For example, we can output the user counter as image instead of
text without modifying the Fluid template. We have to use the
following TypoScript:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/TypoScript/setup.typoscript

    lib.myCounter = IMAGE
    lib.myCounter {
      file = GIFBUILDER
      file {
         10 = TEXT
         10.text.current = 1
      }
    }

At the moment, we're only passing a single value to the TypoScript.
It's more versatile, though, to pass multiple values to the TypoScript object
because then you can select which value to use in the TypoScript, and the
values can be concatenated. You can also pass whole objects to the
ViewHelper in the template:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post -> f:cObject(typoscriptObjectPath: 'lib.myCounter')}

Now, how do you access individual properties of the object in the
TypoScript-Setup? You can use the property :typoscript:`field` of
:typoscript:`stdWrap`:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/TypoScript/setup.typoscript

    lib.myCounter = COA
    lib.myCounter {
      10 = TEXT
      10.field = title
      20 = TEXT
      20.field = viewCount
      wrap = (<strong>|</strong>)
    }

Now we always output the title of the blog, followed by the amount of
page visits in parenthesis in the example above.

You can also combine the :typoscript:`field` based approach with
:typoscript:`current`: If you set the property :html:`currentValueKey`
in the cObject ViewHelper, this value will be available in
the TypoScript template with :typoscript:`current`. That is especially useful
when you want to emphasize that the value is very
*important* for the TypoScript template. For example, the
*number of visits* is significant in our view
counter:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post -> f:cObject(typoscriptObjectPath: 'lib.myCounter', currentValueKey: 'viewCount')}

In the TypoScript template you can now use both, :typoscript:`current`
and :typoscript:`field`, and have therefore the maximum flexibility with the
greatest readability. The following TypoScript snippet outputs the same
information as the previous example:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/TypoScript/setup.typoscript

    lib.myCounter = COA
    lib.myCounter {
      10 = TEXT
      10.field = title
      20 = TEXT
      20.current = 1
      wrap = (<strong>|</strong>)
    }

The cObject ViewHelper is a powerful option to use the
best advantages of both worlds by making it possible to embed TypoScript
expressions in Fluid templates.
