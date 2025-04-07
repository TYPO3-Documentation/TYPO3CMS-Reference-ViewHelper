:navigation-title: form.button

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-button:

========================================
Form.button ViewHelper `<f:form.button>`
========================================

This ViewHelper creates a :html:`<button>` HTML element within the
`Form ViewHelper <f:form> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form>`_.

Unlike the `Form.submit ViewHelper <f:form.submit> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-submit>`_,
the Form.button ViewHelper can contain HTML content — for example, an icon.

By using the :ref:`type <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-buttonviewhelper-type>`
argument, you can create button types other than `submit`, such as `button`
or `reset`.

..  typo3:viewhelper:: form.button
    :source: /Global.json
    :display: tags,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-form-button-example:

A Fluid form with a submit button containing an icon
====================================================

You can use the `<f:form.button>` ViewHelper within an Extbase
form to render a `<button type="submit">` element that allows HTML content.

This is especially useful when you want to include custom elements inside the button,
such as icons or styled spans.

When the user clicks the button, the action specified by the surrounding
`<f:form> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form>`_
is triggered.

..  tabs::

    ..  group-tab:: Fluid

        .. literalinclude:: _codesnippets/_FormSubmitButton.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

    ..  group-tab:: Controller

        You can use the same Extbase controller as in the example
        `A Fluid form with a single submit button <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-submit-example>`_,
        which uses the `<f:form.submit>` ViewHelper.

        ..  literalinclude:: _codesnippets/_SubmitController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

..  _typo3-fluid-form-button-multiple:

A Fluid form with multiple buttons of different types
=====================================================

The `<f:form.button>` ViewHelper supports the `type` attribute, allowing you to
render buttons of type `submit`, `reset`, or `button`. This is useful when you
want to offer multiple actions within the same form, each with a distinct
purpose and custom styling or icons.

Unlike `<f:form.submit>`, you can include inline HTML (e.g. icons, spans) in each button.

..  tabs::

    ..  group-tab:: Fluid

        .. literalinclude:: _codesnippets/_FormMultipleButtons.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

    ..  group-tab:: Controller

        A single Extbase controller action can be used to differentiate the submitted action
        based on the button name or value.

        ..  literalinclude:: _codesnippets/_MultipleButtonsController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

        ..  note::
            The reset button does **not** submit the form and is not processed by the controller.
            It resets all form fields to their initial values using standard HTML behavior
            (`<button type="reset">`). Therefore, there is no need to handle it in the controller.

..  note::
    When using multiple buttons, you can assign different `name` and `value` attributes
    to detect which button was clicked in the controller.

..  _typo3-fluid-form-button-html5:

A button with additional HTML5 attributes
=========================================

The `<f:form.button>` ViewHelper allows you to pass through standard HTML5
button attributes such as `disabled`, `formmethod`, and `formnovalidate`.

This is useful when you need more control over how the button behaves in relation to
form submission and validation.

..  literalinclude:: _codesnippets/_FormButtonHtml5Attributes.html
    :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

..  note::
    You can use these attributes with any button type (`submit`, `reset`, or `button`) and
    they will be passed through to the rendered `<button>` tag.

..  _typo3-fluid-form-button-aria:

A button with accessibility attributes
======================================

The `<f:form.button>` ViewHelper supports accessibility attributes like `aria-label`,
`aria-disabled`, or `aria-describedby`.

These attributes are passed directly to the rendered `<button>` tag, allowing you to make your forms
more accessible for assistive technologies such as screen readers.

For convenience, you can also use the
:ref:`aria <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-buttonviewhelper-aria>`
attribute and pass an array to it.

Fluid will automatically generate the corresponding `aria-*` attributes
based on the key-value pairs in the array.

..  literalinclude:: _codesnippets/_FormButtonAria.html
    :caption: packages/my_extension/Resources/Private/Templates/Comment/Edit.html

..  note::
    Combine visible labels with appropriate `ARIA <https://www.w3.org/WAI/ARIA/apg/>`_
    attributes to improve the experience for users with screen readers.

..  _typo3-fluid-form-button-arguments:

Arguments of the form.button ViewHelper
=======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.button
    :source: /Global.json
    :display: arguments-only
