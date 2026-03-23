:navigation-title: format.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-html:

========================================
Format.html ViewHelper `<f:format.html>`
========================================

..  typo3:viewhelper:: format.html
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-html-example:

Using the `<f:format.html>` ViewHelper with default arguments
=============================================================

..  code-block:: html

    <f:format.html>
        {$myConstant.project} is a cool <b>CMS</b>
        (<a href="https://www.typo3.org">TYPO3</a>).
    </f:format.html>

..  code-block:: html

    <p class="bodytext">TYPO3 is a cool <strong>CMS</strong>
    (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).</p>

The exact output depends on TYPO3 constants.

..  _typo3-fluid-format-html-arguments:

Arguments of the `<f:format.html>` ViewHelper
=============================================

..  typo3:viewhelper:: format.html
    :source: ../../Global.json
    :display: arguments-only

..  _typo3-fluid-format-html-parseFunc:

parseFuncTSPath argument: formatting text with a custom parsing function
------------------------------------------------------------------------

The `parseFuncTSPath` argument specifies which TypoScript `parseFunc`
configuration is used to process the content.

..  code-block:: html

    <f:format.html parseFuncTSPath="lib.parseFunc">
        {someText}
    </f:format.html>

or inline:

..  code-block:: html

    {someText -> f:format.html(parseFuncTSPath: 'lib.myParseFunc')}

With a custom parsing function defined in TypoScript:

..  code-block:: typoscript
    :caption: config/site/mysite/setup.typoscript

    lib.myParseFunc < lib.parseFunc
    lib.myParseFunc {
        // replace --- with soft-hyphen
        short.--- = &shy;
    }

..  seealso::

    For all options see the
    `TypoScript reference, chapter parseFunc <https://docs.typo3.org/permalink/t3tsref:parsefunc>`_.

..  _typo3-fluid-format-html-arguments-data:

Data argument
--------------

If you use TypoScript properties such as :typoscript:`field` or :typoscript:`dataWrap`,
you should pass the current record as `data`. This ensures that field references like
`{FIELD:title}` are resolved correctly.

..  code-block:: html

    <f:format.html
        data="{newsRecord}"
        parseFuncTSPath="lib.myParseFunc"
    >
        News title:
    </f:format.html>

You may get the following output:

..  code-block:: html

    News title: <strong>TYPO3, greatest CMS ever</strong>

With a custom parsing function defined in TypoScript:

..  code-block:: typoscript
    :caption: config/site/mysite/setup.typoscript

    lib.myParseFunc < lib.parseFunc
    lib.myParseFunc {
        dataWrap = |<strong>{FIELD:title}</strong>
    }

..  _typo3-fluid-format-html-arguments-data-current:

Current argument
-----------------

Use the `current` argument to override the current value used by the TypoScript
content object.

..  code-block:: html

    <f:format.html
        current="{strContent}"
        parseFuncTSPath="lib.myParseFunc"
    >
        I'm gone
    </f:format.html>

You may get the following output:

..  code-block:: html

    Thanks Kasper for this great CMS

With the following custom parsing function defined in TypoScript:

..  code-block:: typoscript
    :caption: config/site/mysite/setup.typoscript

    lib.myParseFunc < lib.parseFunc
    lib.myParseFunc {
        setContentToCurrent = 1
    }

..  _typo3-fluid-format-html-arguments-data-CurrentValueKey:

CurrentValueKey argument
-------------------------

Use the `currentValueKey` argument to define a value of data object as the
current value.

..  code-block:: html

    <f:format.html
        data="{contentRecord}"
        currentValueKey="header"
        parseFuncTSPath="lib.content"
    >
        Content:
    </f:format.html>

You may get the following output:

..  code-block:: html

    Content: How to install TYPO3 in under 2 minutes ;-)

With the following custom parsing function defined in TypoScript:

..  code-block:: typoscript
    :caption: config/site/mysite/setup.typoscript

    lib.myParseFunc < lib.parseFunc
    lib.myParseFunc {
        dataWrap = |{CURRENT:1}
    }
