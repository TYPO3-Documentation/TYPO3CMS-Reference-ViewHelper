:navigation-title: form.checkbox

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-checkbox:

============================================
Form.checkbox ViewHelper `<f:form.checkbox>`
============================================

..  typo3:viewhelper:: form.checkbox
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-form-checkbox-single:

Single checkboxes
=================

A single checkbox is usually mapped to a boolean property or controller
argument.

However due to how checkboxes work in HTML a non-checked checkbox does not
appear in the request send by the form. Therefore properties and arguments
need to default to `false` they will then be set to `true` if the checkbox
was checked.

While the :ref:`value <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-value>`
does not play a role if you are working with a checkbox the argument must still
be supplied.

..  _typo3-fluid-form-checkbox-example:

Single optional checkbox tied to a action argument
--------------------------------------------------

Checkboxes in HTML work a little different from other input fields in that
multiple or none at all can be checked.

Fluid outputs a normal HTML `<input type="checkbox" <https://www.w3schools.com/tags/att_input_type_checkbox.asp>`_
and some of the pitfalls also apply here. Especially a check box that is not
sends no argument to the request.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CheckboxOptional.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Newsletter.html

    ..  group-tab:: Controller

        Then the controller action can then look like this:

        ..  literalinclude:: _codesnippets/_CheckboxController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

..  note::
    If a checkbox is not checked it sends NO argument as opposed to a text input
    with no text entered. Therefore in the Extbase action you **must** supply
    a default for the argument if non-checked fields should be allowed.

..  _typo3-fluid-form-checkbox-example-preselected:

The checkbox should already by checked / preselected
----------------------------------------------------

..  code-block:: html

    <f:form.checkbox name="accept" value="yes" checked="true" />

You can also use a variable to determine weather the field should be
checked:

..  code-block:: html

    <f:form.checkbox name="accept" value="yes" checked="{myVariable} == 5" />

..  note::
    When you work with `Property mapping <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-checkbox-property>`_
    the checkbox is automatically preselected if the models property is true.

..  _typo3-fluid-form-checkbox-property:

Property mapping - domain model property bound to single checkbox
-----------------------------------------------------------------

If you are using a `the form with a model <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-example-property>`_
you can use argument :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-property>`
to map the checkbox to a property of you domain model or data object:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CheckboxProperty.html
            :caption: packages/my_extension/Resources/Private/Templates/Newsletter/SomeForm.html

    ..  group-tab:: Controller

        Then the controller action can then look like this:

        ..  literalinclude:: _codesnippets/_CheckboxModelController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

    ..  group-tab:: Model

        An unchecked checkbox results in the property not being set. It should
        therefore default to `false`.

        ..  literalinclude:: _codesnippets/_CheckboxModelUser.php
            :caption: packages/my_extension/Classes/Domain/Model/User.php

If the property in the domain model is `true` when the form is displayed, the
checkbox is preselected.

..  _typo3-fluid-form-checkbox-multiple:

Multiple checkboxes for the same property
=========================================

Unlike other input elements, multiple checkboxes can be used for the same
property or action argument.

In this case they share the same :ref:`name <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-name>`
or property binding :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-property>`
but have distinct :ref:`values <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-value>`.

If you are working with action arguments, :ref:`multiple <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-multiple>`
must be set.

..  _typo3-fluid-form-checkbox-multiple-action:

Multiple checkboxes mapped to an array in a controller action
-------------------------------------------------------------

Multiple checkboxes are usually mapped to array. It would however be possible
to map them to, for example, an integer using binaries or such.

Therefore when working with multiple checkboxes and array you have to tell
Extbase how to map the data from the request to your controller action in an
`initialize` action.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CheckboxMultiple.html
            :caption: packages/my_extension/Resources/Private/Templates/Newsletter/SomeForm.html

    ..  group-tab:: Controller

        Then the controller action can then look like this:

        ..  literalinclude:: _codesnippets/_CheckboxMultipleController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

..  note::
    See class :php:`\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter`
    for details on mapping array.

..  _typo3-fluid-form-checkbox-multiple-property:

Property mapping of multiple checkboxes
---------------------------------------

When working with multiple checkboxes mapped to the property of an Extbase model
or data object the same
:ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-property>`
is used for all checkboxes to be mapped to that property.

..  note::
    An example is still missing. **You** can help by providing an example.

    Click the "report issue" button above and hand in your examples.

..  _typo3-fluid-form-checkbox-multiple-independent:

Multiple checkboxes for multiple independent properties
=======================================================

When multiple checkboxes should be used independently they must have unique
:ref:`name <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-name>`
properties to map to multiple action arguments or unique
:ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-checkboxviewhelper-property>`
values to bins to multiple properties.

..  _typo3-fluid-form-checkbox-mandatory:

Mandatory checkboxes - require a checkbox to be set
===================================================

On the browser side you can use the `HTML 5  required Attribute <https://www.w3schools.com/tags/att_input_required.asp>`_.
As the `<f:form.checkbox>` ViewHelper allows arbitrary arguments, using
the `required` property is possible even though it is not listed.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CheckboxRequired.html
            :caption: packages/my_extension/Resources/Private/Templates/Newsletter/SomeForm.html

    ..  group-tab:: Controller

        Then the controller action can then look like this:

        ..  literalinclude:: _codesnippets/_CheckboxModelController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

    ..  group-tab:: Model

        You should also validate the model for the property to be true:

        ..  literalinclude:: _codesnippets/_CheckboxModelUserRequired.php
            :caption: packages/my_extension/Classes/Domain/Model/User.php

If the server side validation on the model fails the request is forwarded to
the calling request with an error message.

..  _typo3-fluid-form-checkbox-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.checkbox
    :source: ../../Global.json
    :display: arguments-only
