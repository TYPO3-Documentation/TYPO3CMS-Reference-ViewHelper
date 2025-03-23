:navigation-title: form.textfield

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-textfield:

==============================================
Form.textfield ViewHelper `<f:form.textfield>`
==============================================

..  typo3:viewhelper:: form.textfield
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  warning::
    User input, especially from free text fields, may contain harmful content.
    Sanitize all input data and prevent
    `Cross-site scripting (XSS) <https://docs.typo3.org/permalink/t3coreapi:security-xss>`_.

    Also consider if `SQL injection <https://docs.typo3.org/permalink/t3coreapi:security-sql-injection>`_
    is possible.

..  _typo3-fluid-form-textfield-example:

A basic text input bound to an action argument
==============================================

For example a very simplified search form could look like this:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_PlainParameterForm.html
            :caption: packages/my_extension/Resources/Private/Templates/Search/SearchForm.html

    ..  group-tab:: Controller

        The `Extbase controller <https://docs.typo3.org/permalink/t3coreapi:extbase-controller>`_
        action could for example look like this:

        ..  literalinclude:: _codesnippets/_SearchController.php
            :caption: packages/my_extension/Classes/Controller/SearchController.php

..  _typo3-fluid-form-textfield-example-property:

A text input bound to a model property
======================================

Using the :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-textfieldviewhelper-property>`
argument, a text field can be bound to the property of an
`Extbase model <https://docs.typo3.org/permalink/t3coreapi:extbase-model>`_.

For this the surrounding form must also define the
:ref:`object <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-formviewhelper-object>`
property.

..  literalinclude:: _codesnippets/_CommentForm.html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Comment.html

..  _typo3-fluid-form-textfield-example-validation:

Validation of plain text input fields
=====================================

User input often requires validation. For text fields, some common cases include:

*   The name should not be empty
*   The email address must be a valid email address and it is required.
*   The link to the user's homepage must be a valid URL if it is entered at all.

..  _typo3-fluid-form-textfield-example-validation-arbitrary:

Using arbitrary arguments
-------------------------

As the Form.textfield ViewHelper allows arbitrary arguments, you can use any
additional argument that you would also use on an HTML input element, including
HTML 5 arguments like `required <https://www.w3schools.com/tags/att_input_required.asp>`_
and `autocomplete <https://www.w3schools.com/tags/att_input_autocomplete.asp>`_.

..  _typo3-fluid-form-textfield-example-validation-aria:

ARIA arguments for improved accessibility
-----------------------------------------

You have the choice of defining each `aria-* <https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA>`_
attribute separately as you would do in HTML or passing them as an array to
the Fluid argument :ref:`aria <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-textfieldviewhelper-aria>`.

..  _typo3-fluid-form-textfield-example-validation-data:

Data arguments for JavaScript validation etc
--------------------------------------------

Same goes with `data-* <https://www.w3schools.com/tags/att_data-.asp>`_ attributes.
They can also be set with the Fluid argument
:ref:`data <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-textfieldviewhelper-data>`
as an array. `data-*` attributes are commonly used with JavaScript libraries
for frontend validation like `Parsley <https://parsleyjs.org/>`_.

..  _typo3-fluid-form-textfield-example-validation-server:

Server side validation
----------------------

..  warning::
    Never rely on frontend validation alone! It might not work in all browsers.

Always use `Validation for Extbase models and controllers <https://docs.typo3.org/permalink/t3coreapi:extbase-validation>`_
or validate the input on server-side manually.

..  _typo3-fluid-form-textfield-example-validation-complete:

Example with validation and aria-attributes
-------------------------------------------

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CommentFormValidation.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/CommentForm.html

    ..  group-tab:: Controller

        The `Extbase controller <https://docs.typo3.org/permalink/t3coreapi:extbase-controller>`_
        action `commentFormAction()` uses the `IgnoreValidation <https://docs.typo3.org/permalink/t3coreapi:extbase-annotation-ignore-validation>`_
        argument to disable the validation. Whenever the validation fails in the
        `createAction()` the request will be forwarded back to this action. The
        model still contains the non-valid data so that the user can edit it.

        ..  literalinclude:: _codesnippets/_CommentController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

    ..  group-tab:: Model

        The `Extbase model <https://docs.typo3.org/permalink/t3coreapi:extbase-model>`_
        uses `built-in validators <https://docs.typo3.org/permalink/t3coreapi:extbase-validation>`_:

        ..  literalinclude:: _codesnippets/_CommentValidators.php
            :caption: packages/my_extension/Classes/Domain/Model/Comment.php

..  _typo3-fluid-form-textfield-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.textfield
    :source: /Global.json
    :display: arguments-only
