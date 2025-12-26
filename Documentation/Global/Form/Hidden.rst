:navigation-title: form.hidden

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-hidden:

========================================
Form.hidden ViewHelper `<f:form.hidden>`
========================================

..  typo3:viewhelper:: form.hidden
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-form-hidden-example:

Hidden field bound to a controller argument
===========================================

Hidden fields can be used to pass additional arguments to a controller action.

..  tabs::

    ..  group-tab:: Fluid

        The form includes a hidden field to pass the blog post UID:

        ..  literalinclude:: _codesnippets/_hiddenComment.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Form.html

    ..  group-tab:: Controller

        The controller action can then look like this:

        ..  literalinclude:: _codesnippets/_HiddenCommentController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

..  tip::
    In a `<f:form>` with the :ref:`method
    <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-formviewhelper-method>`
    set to `post`, the content of hidden fields is sent in the POST body.
    This is ideal for data that should not be visible in the URL or is too
    large to include in the query string.


..  _typo3-fluid-form-hidden-example-property:

Use case: Creating a comment for a specific blog post
=====================================================

You have:

*   A `Comment` domain model that relates to a `BlogPost`
*   A `BlogPost` detail page that includes a comment form
*   The property `blogPost` is set automatically and not selectable by the user

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_hiddenCommentPost.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/CreateForm.html

    ..  group-tab:: Model

        The domain model includes a relation to the BlogPost entity:

        ..  literalinclude:: _codesnippets/_HiddenCommentPostModel.php
            :caption: packages/my_extension/Classes/Domain/Model/Comment.php

    ..  group-tab:: Controller

        The controller saves the comment and redirects to the related blog post:

        ..  literalinclude:: _codesnippets/_HiddenCommentPostController.php
            :caption: packages/my_extension/Classes/Controller/CommentController.php

..  tip::

    Use a hidden field to bind a new object (like a `Comment`) to its parent
    (like a `BlogPost`). This keeps the relation intact without exposing
    it in the user interface.

    In this example, the `blogPost` property is set via a hidden input and
    automatically mapped back to a domain object using Extbase's property
    mapping.

..  _typo3-fluid-form-hidden-example-arguments:

Arguments of the form hidden ViewHelper
=======================================

..  typo3:viewhelper:: form.hidden
    :source: /Global.json
    :display: arguments-only
