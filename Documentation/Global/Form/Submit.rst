:navigation-title: form.submit

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-submit:

========================================
Form.submit ViewHelper `<f:form.submit>`
========================================

..  typo3:viewhelper:: form.submit
    :source: ../../Global.json
    :display: tags
    :noindex:

Creates a submit button (`<input type="submit"`) within a
`Form ViewHelper <f:form> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form>`_.

..  note::
    If you you need a `<button>` with extended HTML content, use the
    `Form.button ViewHelper <f:form.button> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-button>`_
    instead.

..  typo3:viewhelper:: form.submit
    :source: ../../Global.json
    :display: gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-form-submit-example:

A Fluid form with a single submit button
========================================

You can use the `<f:form.submit value="Submit!">` button within an Extbase
form to display a `<input type="submit" value="Submit!">` button.

When the user clicks the button, the action specified by the surrounding
`<f:form> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form>`_
is called.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_FormSubmit.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

    ..  group-tab:: Controller

        Then controller action can then look like this:

        ..  literalinclude:: _codesnippets/_SubmitController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

..  _typo3-fluid-form-submit-example-multiple:

A Fluid form with multiple submit buttons
=========================================

When you want to offer different actions it can be helpful to use multiple
submit buttons with different labels:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_FormSubmitMultiple.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

    ..  group-tab:: Controller

        Then controller action can then look like this:

        ..  literalinclude:: _codesnippets/_SubmitMultipleController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

..  note::
    All rendered buttons will be rendered as `<input type="submit"`.
    If you need a button with a different type then "submit" use the
    `Form.button ViewHelper <f:form.button> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-button>`_
    instead.

..  _typo3-fluid-form-submit-arguments:

Arguments of the form.submit ViewHelper
=======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.submit
    :source: /Global.json
    :display: arguments-only
