:navigation-title: format.nl2br

..  include:: /Includes.rst.txt

..  _typo3fluid-fluid-format-nl2br:

==========================================
Format.nl2br ViewHelper `<f:format.nl2br>`
==========================================

..  versionchanged:: 14.0

    The `Render.text ViewHelper <f:render.text> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-render-text>`_
    should be used whenever text fields from records are
    displayed in HTML output.

    Depending on the TCA definition of the rendered field `nl2br` is then
    automatically applied for multi line text areas.

..  typo3:viewhelper:: format.nl2br
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-nl2br-example:

Preserving line breaks in HTML output
=====================================

HTML ignores line breaks within text. To display text while preserving line
breaks, you must convert newline characters such as `\\n` or `\\r\\n` into
HTML line break elements :html:`<br />`.

The `<f:format.nl2br>` ViewHelper uses PHP's
`nl2br() <https://www.php.net/manual/en/function.nl2br.php>`_ function
to insert HTML line breaks.

..  code-block:: plaintext
    :caption: User input

    This is
    a
    string

..  code-block:: html

    <f:format.nl2br>{userInput}</f:format.nl2br>

or inline:

..  code-block:: html

    {userInput -> f:format.nl2br()}

..  code-block:: html
    :caption: Output

    This is<br />
    a<br />
    string

..  _typo3-fluid-format-nl2br-arguments:

Arguments of the `<f:format.nl2br>` ViewHelper
==============================================

..  typo3:viewhelper:: format.nl2br
    :source: ../../Global.json
    :display: arguments-only
