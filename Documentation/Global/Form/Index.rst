:navigation-title: form

..  include:: /Includes.rst.txt
..  _typo3-fluid-form:

==========================
Form ViewHelper `<f:form>`
==========================

..  typo3:viewhelper:: form
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  include:: /_Includes/_ExtbaseFormViewHelpers.rst.txt

..  contents:: Table of contents

..  _typo3-fluid-form-example:

Array parameter passed to Extbase controller action
===================================================

For example a very simplified search form could look like this:

..  literalinclude:: _codesnippets/_PlainParameterForm.html
    :caption: packages/my_extension/Resources/Private/Templates/Search/SearchForm.html

The `Extbase controller <https://docs.typo3.org/permalink/t3coreapi:extbase-controller>`_
action could for example look like this:

..  literalinclude:: _codesnippets/_SearchController.php
    :caption: packages/my_extension/Classes/Controller/SearchController.php

..  _typo3-fluid-form-example-property:

Property mapping - using the form with a model
==============================================

In most cases you will use the f:form ViewHelper with
`Extbase models <https://docs.typo3.org/permalink/t3coreapi:extbase-model>`_ or
data objects.

For example, user could add a comment in such a form:

..  literalinclude:: _codesnippets/_CommentForm.html
    :caption: packages/my_extension/Resources/Private/Templates/Comment/_CommentForm.html

The Extbase Controller action displaying the form then creates the Domain object
and passes it to the view. In the Fluid template above we use argument
:ref:`object <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-formviewhelper-object>`
to pass any data the object might already contain to the ViewHelper.

By using the argument "property" on the form input elements the properties of
the model are automatically bound to the input elements.

The controller could look like this:

..  literalinclude:: _codesnippets/_CommentController.php
    :caption: packages/my_extension/Classes/Controller/CommentController.php

If the model is not valid (see `Validation <https://docs.typo3.org/permalink/t3coreapi:extbase-validation>`_)
Extbase will automatically refer the request back to the referring action
(here commentFormAction()). By passing the object with the non-validated object
to the view again, the user can see their faulty inputs and correct them instead
of seeing an empty form.

..  _typo3-fluid-form-security:

Security in Fluid forms
=======================

Fluid automatically adds a hidden field to forms, including an `__hmac`
value. This value lists all allowed fields. If fields are added or
removed via attacks, Extbase detects the mismatch and blocks submission.

Form fields can be grouped in an array for efficient processing. The
receiving action maps the data to a model, where validation occurs if
rules are defined. Only valid data is passed to the action and stored in
the database.

..  _typo3-fluid-form-arguments:

Arguments of the form ViewHelper
================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form
    :source: /Global.json
    :display: arguments-only


..  _typo3-fluid-form-viewhelpers:

ViewHelpers for form input elements
===================================

..  toctree::
    :titlesonly:
    :glob:

    */Index
    *
