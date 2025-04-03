:navigation-title: form.select

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-select:

========================================
Form.select ViewHelper `<f:form.select>`
========================================

..  typo3:viewhelper:: form.select
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  include:: /_Includes/_ExtbaseFormViewHelpers.rst.txt

..  contents:: Table of contents

..  _typo3-fluid-form-select-usage:

Select field with hardcoded options
===================================

Using the
:ref:`options <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-options>`
parameter, you can pass a hardcoded array to the form.select ViewHelper.

The key of that array is used as option key, and the value is used as
human-readable name.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_SelectGender.html
            :caption: packages/my_extension/Resources/Private/Templates/User/GenderForm.html

    ..  group-tab:: Controller

        The argument will have the key of the chosen entry as value.

        ..  literalinclude:: _codesnippets/_SelectGender.php
            :caption: packages/my_extension/Classes/Controller/UserController.php

..  _typo3-fluid-form-select-usage-array:

Preselected field with options supplied by the controller
=========================================================

Most options will be supplied by the controller. You can pass an associative
array with the options to the view:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_SelectPayment.html
            :caption: packages/my_extension/Resources/Private/Templates/User/PaymentForm.html

    ..  group-tab:: Controller

        The argument for the select field will have the key of the chosen entry as value.

        ..  literalinclude:: _codesnippets/_SelectPayment.php
            :caption: packages/my_extension/Classes/Controller/UserController.php

To pre-select a value, use the argument
:ref:`value <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-value>`.

..  _typo3-fluid-form-select-usage-models:

Select field for selecting (persisted) models
=============================================

Consider we have the payment options from the previous example in the database
and in an Extbase model:


..  tabs::

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_SelectPaymentMethod.php
            :caption: packages/my_extension/Classes/Domain/Model/PaymentMethod.php

    ..  group-tab:: Controller

        In the controller we can get all payment methods from the
        `Repository <https://docs.typo3.org/permalink/t3coreapi:extbase-repository>`_
        now and pass it to the view as variable:

        ..  literalinclude:: _codesnippets/_SelectPaymentModelController.php
            :caption: packages/my_extension/Classes/Controller/UserController.php

    ..  group-tab:: Fluid

        The Fluid template can be left unchanged even though we are dealing with a
        different data source:

        ..  literalinclude:: _codesnippets/_SelectPayment.html
            :caption: packages/my_extension/Resources/Private/Templates/User/PaymentForm.html

When the form gets submitted, the UID of the chosen model appears in the request
data. Extbase will then map that uid back to the model for you.

The ViewHelper will then use the model's UID as data submitted in the form and
the result of method :php:`__toString()` as display text.

..  note::
    You can pass any array or :php:`\Traversable` object to
    the :ref:`options <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-options>`
    argument. This includes the result of `findBy()` methods on
    `Extbase repositories <https://docs.typo3.org/permalink/t3coreapi:extbase-repository>`_,
    :php-short:`\TYPO3\CMS\Extbase\Persistence\QueryResultInterface` and objects
    stored as relation in another object as
    :php-short:`\TYPO3\CMS\Extbase\Persistence\ObjectStorage`.

..  _typo3-fluid-form-select-usage-models-optionLabelField:

optionLabelField: Define another property of the model for the option label
---------------------------------------------------------------------------

If the model to be displayed has no :php:`__toString()` method or you want to
display the content of a different field, use option
:ref:`optionLabelField <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-optionlabelfield>`

..  code-block:: html

    <f:form.select name="payment" value="{myPayment}"
        options="{paymentOptions}" optionLabelField="someLabel"/>

The :ref:`options <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-options>`
may contain an array or anything else `Traversable` including

..  _typo3-fluid-form-select-usage-models-optionValueField:

optionValueField: Define another property of the model as value
---------------------------------------------------------------

If you are dealing with non-persisted models or Data-Transfer-Objects (DTO) there is
no valid identifier that could be used to automatically map the user's selection
in your controller. In this case, you must provide the name of the field to
be used to identify the object:

..  code-block:: html

    <f:form.select name="payment" value="{myPayment}"
        options="{paymentOptions}" optionValueField="paymentIdentifier"/>

The controller action will then be called with the content of that field:

..  code-block:: html

    // Variable $payment contains the paymentIdentifier from the model
    public function selectPaymentAction(String $payment): ResponseInterface

..  _typo3-fluid-form-select-usage-propery:

Binding the select field to an object property
==============================================

When the surrounding `<f:form>` uses `Property mapping <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-example-property>`_
we can also map the selected option to the model:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_SelectPaymentProperty.html
            :caption: packages/my_extension/Resources/Private/Templates/User/PaymentForm.html

    ..  group-tab:: User Model

        The user model could have the following fields

        ..  literalinclude:: _codesnippets/_SelectPaymentUser.php
            :caption: packages/my_extension/Classes/Domain/Model/User.php

    ..  group-tab:: Controller

        The controller action will then be called with the user object:

        ..  code-block:: php

            public function selectPreferredPaymentAction(User $user): ResponseInterface

..  _typo3-fluid-form-select-subviewHelper:

Working with options and option groups
======================================

..  _typo3-fluid-form-select-option:

Form.select.option ViewHelper `<f:form.select.option>`
------------------------------------------------------

..  typo3:viewhelper:: form.select.option
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

The `<f:form.select.option>` ViewHelper can be used to create a completely
`<f:form.select.option>` :html:`<option>`  tags in a way compatible with the
HMAC generation.
To do so, leave out the `options` argument and use child ViewHelpers:

..  code-block:: html

    <f:form.select name="myproperty">
      <f:form.select.option value="1">Option one</f:form.select.option>
      <f:form.select.option value="2" selected="1">Option two</f:form.select.option>
    </f:form.select>

..  note::
    Do not use HTML :html:`<option>` tags!
    They will invalidate the HMAC generation!

..  _typo3-fluid-form-select-optgroup:

Form.select.optgroup ViewHelper `<f:form.select.optgroup>`
----------------------------------------------------------

..  typo3:viewhelper:: form.select.optgroup
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

The `<f:form.select.option>` can be grouped with the `<f:form.select.optgroup>`
to produce :html:`<optgroup>` in the HTML output.

..  code-block:: html

    <f:form.select name="myproperty">
       <f:form.select.option value="1">Option one</f:form.select.option>
       <f:form.select.option value="2">Option two</f:form.select.option>
       <f:form.select.optgroup>
          <f:form.select.option value="3">Grouped option one</f:form.select.option>
          <f:form.select.option value="4">Grouped option twi</f:form.select.option>
       </f:form.select.optgroup>
    </f:form.select>

..  _typo3-fluid-form-select-option-placeholder:

Using an "Please select an option" placeholder
==============================================

In HTML, the :html:`<select>` element always selects the first option, if nothing
else is selected. If the field is mandatory and the user should be forced to
make a selection or if an empty value should be possible, you need an empty
option as first option. You can use the argument
:ref:`prependOptionLabel <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-prependoptionlabel>`
to set a label for this object. The value of the option will be an empty string.
If you need another value, for example 0 because you are expecting an integer,
you can use
:ref:`prependOptionValue <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-prependoptionvalue>`.

..  code-block:: html

    <f:form.select options="{user.availablePaymentOptions}"
                   property="preferredPayment"
                   prependOptionLabel="Ask me every time!"
                   prependOptionValue="ask"
    />

You can achieve the same effect by combining  the
:ref:`options <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-selectviewhelper-options>`
argument with one (or several)
`<form.select.option> <f:form.select.option> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-select-option>`_:

..  code-block:: html

    <f:form.select options="{user.availablePaymentOptions}"
                   property="preferredPayment"
                   optionsAfterContent="true"
                   required="1"
    >
       <f:form.select.option value="">Please Chose *</f:form.select.option>
       <f:form.select.option value="ask">Ask me every time!</f:form.select.option>
    </f:form.select>

It is possible to put the additional options last and combine the two:

..  code-block:: html

    <f:form.select options="{user.availablePaymentOptions}"
                   property="preferredPayment"
                   prependOptionLabel="Please Chose *"
                   required="1"
    >
       <f:form.select.option value="ask">Ask me every time!</f:form.select.option>
    </f:form.select>

..  _typo3-fluid-form-select-arguments:

Arguments of the Form.select ViewHelper
=======================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.select
    :source: /Global.json
    :display: arguments-only

..  _typo3-fluid-form-select-option-arguments:

Arguments of the Form.select.option ViewHelper
==============================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.select.option
    :source: /Global.json
    :display: arguments-only

..  _typo3-fluid-form-select-optgroup-arguments:

Arguments of the Form.select.optgroup ViewHelper
================================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.select.optgroup
    :source: /Global.json
    :display: arguments-only
