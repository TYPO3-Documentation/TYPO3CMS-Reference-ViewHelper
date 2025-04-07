:navigation-title: form.textarea

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-textarea:

============================================
Form.textarea ViewHelper `<f:form.textarea>`
============================================

..  typo3:viewhelper:: form.textarea
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  warning::
    User input, especially from free text fields, may contain harmful content.
    Sanitize all input data and prevent
    `Cross-site scripting (XSS) <https://docs.typo3.org/permalink/t3coreapi:security-xss>`_.

    Also consider if `SQL injection <https://docs.typo3.org/permalink/t3coreapi:security-sql-injection>`_
    is possible.

..  _typo3-fluid-form-textarea-example:

A basic text area bound to an action argument
=============================================

This example shows how to bind a textarea to an Extbase controller action
argument.

This approach is appropriate when you want to handle input directly in a
controller action, without relying on a domain model or Data Transfer Object (DTO).

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_TextfieldSimple.html
            :caption: packages/my_extension/Resources/Private/Templates/Contact/ShowForm.html

    ..  group-tab:: Controller

        The controller action can then look like this:

        ..  literalinclude:: _codesnippets/_TextfieldSimpleController.php
            :caption: packages/my_extension/Classes/Controller/ContactController.php

..  _typo3-fluid-form-textarea-example-property:

Property binding: A text area bound to a model property
=======================================================

Using the :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-textfieldviewhelper-property>`
argument, a text field can be bound to the property of an
`Extbase model <https://docs.typo3.org/permalink/t3coreapi:extbase-model>`_.

For this, the surrounding form must also define the
:ref:`object <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-formviewhelper-object>`
property. As the textarea ViewHelper may provide texts longer than 255 chars,
the TCA for the field should be of type `Text areas & RTE <https://docs.typo3.org/permalink/t3tca:columns-text>`_.
This ensures that the auto-generated database field will also be of type :sql:`TEXT`,
which is suitable for longer content.”

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CommentForm.html
            :caption: packages/my_extension/Resources/Private/Templates/Blog/Comment.html

    ..  group-tab:: Controller

        The controller action can then look like this:

        ..  literalinclude:: _codesnippets/_CommentController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_Comment.php
            :caption: packages/my_extension/Classes/Domain/Model/Comment.php

    ..  group-tab:: TCA Configuration

        ..  literalinclude:: _codesnippets/_comment_tca.php
            :caption: packages/my_extension/Configuration/TCA/tx_myextension_domain_model_comment.php

        ..  _typo3-fluid-form-textarea-arguments:

Arguments of the textarea form field ViewHelper
===============================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.textarea
    :source: /Global.json
    :display: arguments-only
