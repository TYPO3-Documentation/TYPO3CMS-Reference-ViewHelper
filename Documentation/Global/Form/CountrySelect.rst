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

A basic country selector bound to an action argument
====================================================

For example a very simplified search form could look like this:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CountryForm.html
            :caption: packages/my_extension/Resources/Private/Templates/User/SelectCountry.html

    ..  group-tab:: Controller

        The `Extbase controller <https://docs.typo3.org/permalink/t3coreapi:extbase-controller>`_
        action could for example look like this:

        ..  literalinclude:: _codesnippets/_CountryController.php
            :caption: packages/my_extension/Classes/Controller/UserController.php

..  _typo3-fluid-form-countryselect-example-prioritizedCountries:

Prioritize countries
====================

Define a list of countries which should be listed as first options in the
form element by setting
:ref:`prioritizedCountries <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-countryselectviewhelper-prioritizedcountries>`:

..  literalinclude:: _codesnippets/_CountryFormPrioritized.html
    :caption: packages/my_extension/Resources/Private/Templates/User/SelectCountry.html

Additionally, Austria is pre-selected.

..  _typo3-fluid-form-countryselect-example-optionLabelField:

Display another language
========================

A combination of :ref:`optionLabelField <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-countryselectviewhelper-optionlabelfield>`
and :ref:`alternativeLanguage <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-countryselectviewhelper-alternativelanguage>`
is possible. For
instance, if you want to show the localized official names but not in your
default language but in French. You can achieve this by using the following
combination:

..  literalinclude:: _codesnippets/_CountryFormLanguage.html
    :caption: packages/my_extension/Resources/Private/Templates/User/SelectCountry.html

..  _typo3-fluid-form-countryselect-example-property:

Bind the country selector to an Extbase model
=============================================

You can also use the :ref:`property <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-form-countryselectviewhelper-property>`
attribute if you have bound an object to the form.

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_CountryPropertyForm.html
            :caption: packages/my_extension/Resources/Private/Templates/User/SelectCountry.html

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_CountryUser.php
            :caption: packages/my_extension/Classes/Domain/Model/User.php


..  _typo3-fluid-form-countryselect-arguments:

Arguments of f:form.countrySelect
=================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.countrySelect
    :source: ../../Global.json
    :display: arguments-only
