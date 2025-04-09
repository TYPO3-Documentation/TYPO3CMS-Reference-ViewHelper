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
    :caption: packages/my_extension/Resources/Private/Templates/Comment/CommentForm.html

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

Fluid automatically adds several hidden field to forms:

*  `__referrer[]` with an array of items `@extension`, `@controller`,
   `@action`, `arguments` and `@request`. This holds information about
   where the form has been created, so that in case of errors,
   redirection to the originating Extbase controller and action
   (and extension) is possible.
*  `__trustedProperties` (string) holds information about all used properties
   of all Extbase domain models that have been utilized within the
   related `<f:form>` context. This is used to ensure only properties
   will be evaluated for persistence that have an editable form field
   associated with them.

To prevent tampering with this vital data, the important fields
(`__referrer[arguments]`, `__referrer[@request]`, `__trustedProperties`)
are signed with the private TYPO3 encryption key using an HMAC
hash.

An example would look like this:

..  code-block:: html
    :caption: Example HTML rendered after Fluid processing

    <form action="/admin/update?token=328190ab378fe49af07d8b6b4ec31f87bd910efc" method="post">
      <div>
        <input type="hidden" name="__referrer[@extension]" value="Beuser">
        <input type="hidden" name="__referrer[@controller]" value="BackendUser">
        <input type="hidden" name="__referrer[@action]" value="list">
        <input type="hidden" name="__referrer[arguments]" value="YTozOntzOjEwOiJjb250cm9sbGVyIjtzOjExOiJCYWNrZW5kVXNlciI7czo2OiJhY3Rpb24iO3M6NToiaW5kZXgiO3M6NToidG9rZW4iO3M6NDA6IjgxNWZhOGI0OGYyZDg0N2NkMzcwYWIzYTkyMjhlNDY2OWI4OTI0MmUiO30=b305f0773528375502f167cde7c6c63f6ba988f9">
        <input type="hidden" name="__referrer[@request]" value="{&quot;@extension&quot;:&quot;Beuser&quot;,&quot;@controller&quot;:&quot;BackendUser&quot;,&quot;@action&quot;:&quot;list&quot;}51b024523b594011fa9054f7fc82c03ead78061b">
        <input type="hidden" name="__trustedProperties" value="{&quot;demand&quot;:{&quot;userName&quot;:1,&quot;userType&quot;:1,&quot;status&quot;:1,&quot;logins&quot;:1,&quot;backendUserGroup&quot;:1},&quot;operation&quot;:1}c25fc9eb44fc0e40e8ec5cf39fc5d21022172ebf">
      </div>
    </form>

If form fields are added or removed via attacks, Extbase detects the
mismatch and blocks further processing.

Form fields can be grouped in an array for efficient processing. An
internal Extbase processing action maps the received data to a model,
where (optional and configurable) validation occurs.
Only valid data is passed on to the action and stored in
the database.

..  _typo3-fluid-form-talk:

Ask the community about the form ViewHelper
===========================================

..  typo3:talk::

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
