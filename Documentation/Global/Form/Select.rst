:navigation-title: form.select

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-select:

========================================
Form.select ViewHelper `<f:form.select>`
========================================

..  typo3:viewhelper:: form.select
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-select-usage:

Basic usage
===========

The most straightforward way is to supply an associative array as the ``options`` parameter.
The array key is used as option key, and the value is used as human-readable name.

Basic usage::

   <f:form.select name="paymentOptions" options="{payPal: 'PayPal International Services', visa: 'VISA Card'}" />

Pre select a value
------------------

To pre select a value, set ``value`` to the option key which should be selected.
Default value::

   <f:form.select name="paymentOptions" options="{payPal: 'PayPal International Services', visa: 'VISA Card'}" value="visa" />

Generates a dropdown box like above, except that "VISA Card" is selected.

If the select box is a multi-select box :html:`multiple="1"`, then "value" can be an array as well.

Custom options and option group rendering
-----------------------------------------

Child nodes can be used to create a completely custom set of
:html:`<option>` and :html:`<optgroup>` tags in a way compatible with the
HMAC generation.
To do so, leave out the ``options`` argument and use child ViewHelpers:

Custom options and optgroup::

   <f:form.select name="myproperty">
      <f:form.select.option value="1">Option one</f:form.select.option>
      <f:form.select.option value="2">Option two</f:form.select.option>
      <f:form.select.optgroup>
         <f:form.select.option value="3">Grouped option one</f:form.select.option>
         <f:form.select.option value="4">Grouped option twi</f:form.select.option>
      </f:form.select.optgroup>
   </f:form.select>

.. note::
   Do not use vanilla :html:`<option>` or :html:`<optgroup>` tags!
   They will invalidate the HMAC generation!

Usage on domain objects
-----------------------

If you want to output domain objects, you can just pass them as array into the ``options`` parameter.
To define what domain object value should be used as option key, use the ``optionValueField`` variable. Same goes for ``optionLabelField``.
If neither is given, the Identifier (UID/uid) and the :php:`__toString()` method are tried as fallbacks.

If the ``optionValueField`` variable is set, the getter named after that value is used to retrieve the option key.
If the ``optionLabelField`` variable is set, the getter named after that value is used to retrieve the option value.

If the ``prependOptionLabel`` variable is set, an option item is added in first position, bearing an empty string or -
if provided, the value of the ``prependOptionValue`` variable as value.

Domain objects::

   <f:form.select name="users" options="{userArray}" optionValueField="id" optionLabelField="firstName" />

In the above example, the ``userArray`` is an array of "User" domain objects, with no array key specified.

So, in the above example, the method :php:`$user->getId()` is called to
retrieve the key, and :php:`$user->getFirstName()` to retrieve the displayed
value of each entry.

The ``value`` property now expects a domain object, and tests for object equivalence.
