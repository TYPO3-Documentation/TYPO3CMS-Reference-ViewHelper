:navigation-title: form.radio

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-radio:

======================================
Form.radio ViewHelper `<f:form.radio>`
======================================
..  typo3:viewhelper:: form.radio
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  tip::

    When using multiple related radio buttons, wrap them
    in a `<fieldset>` with a `<legend>`, which  helps screen readers understand
    the purpose of the group and improves overall accessibility. It also gives
    your form better semantic structure.

..  contents:: Table of content

..  _typo3-fluid-form-radio-example:

Basic yes/no radio buttons tied to an action argument
=====================================================

The following shows two radio buttons, the one labeled "No" is preselected.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_RadioYesNo.html
            :caption: packages/my_extension/Resources/Private/Templates/Comment/Newsletter.html

    ..  group-tab:: Controller

        The controller action can then look like this:

        ..  literalinclude:: _codesnippets/_RadioController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

..  tip::
    You could ask the same question with a
    `Single optional checkbox <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-checkbox-example>`_.
    The main difference is, when you have a preselected radio button, the radio
    button group cannot be disabled again, therefore the parameter is always
    supplied to the action.

..  _typo3-fluid-form-radio-example-property:

Property mapping - Radio buttons bound to a model
=================================================

The radio buttons from this example look the same as those from the previous
example, however an object of type `User` is now provided as parameter for
the Extbase action.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_RadioProperty.html
            :caption: packages/my_extension/Resources/Private/Templates/Newsletter/SomeForm.html

    ..  group-tab:: Controller

        Then the controller action can look like this:

        ..  literalinclude:: _codesnippets/_CheckboxModelController.php
            :caption: packages/my_extension/Classes/Controller/NewsletterController.php

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_CheckboxModelUser.php
            :caption: packages/my_extension/Classes/Domain/Model/User.php

..  _typo3-fluid-form-radio-example-options:

Radio buttons with options from an array or query result
========================================================

The form radio ViewHelper does not supply an argument that creates it from
an array as you might have seen for the form select ViewHelper
(`Select field for selecting (persisted) models <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-select-usage-models>`_).

You can however just use the `For ViewHelper <f:for> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-for>`_
to iterate your items and display them one by one. If you use the objects uid
for the key, the radio button can be matched to the model in use.

..  tabs::

    ..  group-tab:: Fluid

        The Fluid template can be left unchanged even though we are dealing with a
        different data source:

        ..  literalinclude:: _codesnippets/_SelectPayment.html
            :caption: packages/my_extension/Resources/Private/Templates/User/PaymentForm.html

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_SelectPaymentMethod.php
            :caption: packages/my_extension/Classes/Domain/Model/PaymentMethod.php

    ..  group-tab:: Controller

        In the controller we can get all payment methods from the
        `Repository <https://docs.typo3.org/permalink/t3coreapi:extbase-repository>`_
        now and pass it to the view as variable:

        ..  literalinclude:: _codesnippets/_SelectPaymentModelController.php
            :caption: packages/my_extension/Classes/Controller/UserController.php

..  tip::
    You can use the same model and controller as with
    `Select field for selecting (persisted) models <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-select-usage-models>`_.

    The integrator can choose to use a radio button or select element without
    that the backend has to be changed.

..  _typo3-fluid-form-radio-example-multiple:

Multiple radio button groups
============================

Only one radio button per group can be checked at a time. Each group has the
same :ref:`name <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-radioviewhelper-name>`
or :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-radioviewhelper-property>`.

..  tip::

    Each group of related radio buttons should be wrapped in its own
    `<fieldset>` with a `<legend>` to describe the purpose of the group.

    This ensures that screen readers and other assistive technologies can
    correctly interpret the relationship between the options. It also improves
    the semantic structure and visual clarity of your form.

..  _typo3-fluid-form-radio-arguments:

Arguments of the form radio ViewHelper
======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.radio
    :source: /Global.json
    :display: arguments-only
