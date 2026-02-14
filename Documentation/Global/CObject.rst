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

As an example of a more advanced use case, the cObject viewhelper can pass
content data from a Fluid template to a content object defined in TypoScript. The
following example demonstrates this with a user counter. The user counter is in
a blog post (the blog post has a count of how many times it has been viewed.)

Add the viewhelper to your Fluid template. This can be done in 3 different
ways. The basic tag syntax:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    <f:cObject typoscriptObjectPath="lib.myCounter">{post.viewCount}</f:cObject>

Or a self-closing tag. Data is passed in the :html:`data` attribute.

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    <f:cObject typoscriptObjectPath="lib.myCounter" data="{post.viewCount}" />

Or inline notation, which is easy to read and understand (from left to right):

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post.viewCount -> f:cObject(typoscriptObjectPath: 'lib.myCounter')}

Then, add TypoScript (to your TypoScript template) to process this data. In our
example below, the :typoscript:`stdWrap` attribute :typoscript:`current`
works like a switch: if set to 1, it contains the value that was passed to the
TypoScript object from the Fluid template:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/TypoScript/setup.typoscript

    lib.myCounter = TEXT
    lib.myCounter {
      current = 1
      wrap = <strong>|</strong>
    }

This TypoScript snippet outputs the current number of visits in bold.

We can easily modify this TypoScript to output the user counter as an image instead
of text:

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

..  _typo3-fluid-cobject-contentobject-typoscript:

Passing objects to TypoScript
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Up till now, we have only been passing a single value to the TypoScript object.
However, it is also possible to pass multiple values, useful for selecting  which value to
use or concatenating values, or you can pass objects (here the `post` object):

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post -> f:cObject(typoscriptObjectPath: 'lib.myCounter')}

But how do we access the object's properties in our TypoScript? By setting the
:typoscript:`field` property of :typoscript:`stdWrap` (in a :typoscript:`COA`):

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

This TypoScript snippet outputs the title of the blog and the number of page visits in parentheses.

..  _typo3-fluid-cobject-contentobject-typoscript-current:

Using :typoscript:`current` to pass values
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

It is also possible to use the :typoscript:`current` switch here.
If you set the property :html:`currentValueKey`
in the cObject ViewHelper, the value will be available in
the TypoScript template as :typoscript:`current`. That is especially useful
when you want to emphasize that the value is very
*important* for the TypoScript template. For example, the
*number of visits* is significant in our view
counter:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/SomeTemplate.html

    {post -> f:cObject(typoscriptObjectPath: 'lib.myCounter', currentValueKey: 'viewCount')}

Then, in the TypoScript template, use :typoscript:`field` aswell as
:typoscript:`current` to output the value of the view count. The following
TypoScript snippet outputs the same information as above:

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

Using :typoscript:`current` makes the TypoScript easier to read and the logic
easier to understand.

In summary, the cObject ViewHelper is a powerful option to embed TypoScript
expressions in Fluid templates.
