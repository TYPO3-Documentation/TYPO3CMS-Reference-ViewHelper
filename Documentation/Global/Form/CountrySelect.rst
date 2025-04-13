:navigation-title: form.countrySelect

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-countryselect:

======================================================
Form.countrySelect ViewHelper `<f:form.countrySelect>`
======================================================

..  typo3:viewhelper:: form.countrySelect
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  _typo3-fluid-form-countryselect-example:

Examples
========

Basic usage
-----------

::

   <f:form.countrySelect name="country" value="{defaultCountry}" />

Output::

   <select name="country">
     <option value="BE">Belgium</option>
     <option value="FR">France</option>
     ....
   </select>

Prioritize countries
--------------------

Define a list of countries which should be listed as first options in the
form element::

   <f:form.countrySelect
     name="country"
     value="AT"
     prioritizedCountries="{0: 'DE', 1: 'AT', 2: 'CH'}"
   />

 Additionally, Austria is pre-selected.

Display another language
------------------------

A combination of optionLabelField and alternativeLanguage is possible. For
instance, if you want to show the localized official names but not in your
default language but in French. You can achieve this by using the following
combination::

   <f:form.countrySelect
     name="country"
     optionLabelField="localizedOfficialName"
     alternativeLanguage="fr"
     sortByOptionLabel="true"
   />

Bind an object
--------------

You can also use the "property" attribute if you have bound an object to the form.
See :ref:`<f:form> <typo3-fluid-form>` for more documentation.


..  _typo3-fluid-form-countryselect-arguments:

Arguments of f:form.countrySelect
=================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.countrySelect
    :source: ../../Global.json
    :display: arguments-only
