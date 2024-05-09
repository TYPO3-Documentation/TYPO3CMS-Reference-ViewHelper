..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/Form/TypoScriptConstantsViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/Form/TypoScriptConstantsViewHelper.php
:navigation-title: form.typoScriptConstants
.. include:: /Includes.rst.txt

.. _typo3-core-form-typoscriptconstants:

=====================================================================
Form.typoScriptConstants ViewHelper `<core:form.typoScriptConstants>`
=====================================================================

ViewHelper for rendering
- extension configuration forms in install tool (Settings -> Extension Configuration
- site settings in Sites Module (site settings per site configuration)

.. _typo3-core-form-typoscriptconstants_source:

Source code
===========

Go to the source code of this ViewHelper: `TypoScriptConstantsViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/Form/TypoScriptConstantsViewHelper.php>`__.

.. _typo3-core-form-typoscriptconstants_arguments:

Arguments
=========

The following arguments are available for `<core:form.typoScriptConstants>`:

..  contents::
    :local:


.. _typo3-core-form-typoscriptconstants-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-core-form-typoscriptconstants-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-core-form-typoscriptconstants-data_argument:

data
----

..  confval:: data
    :name: typo3-core-form-typoscriptconstants-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-core-form-typoscriptconstants-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-core-form-typoscriptconstants-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-core-form-typoscriptconstants-name_argument:

name
----

..  confval:: name
    :name: typo3-core-form-typoscriptconstants-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-core-form-typoscriptconstants-value_argument:

value
-----

..  confval:: value
    :name: typo3-core-form-typoscriptconstants-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-core-form-typoscriptconstants-configuration_argument:

configuration
-------------

..  confval:: configuration
    :name: typo3-core-form-typoscriptconstants-configuration
    :type: mixed
    :required: true

    The TypoScript constant configuration, e.g. labels, category, type and value.

.. _typo3-core-form-typoscriptconstants-class_argument:

class
-----

..  confval:: class
    :name: typo3-core-form-typoscriptconstants-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-core-form-typoscriptconstants-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-core-form-typoscriptconstants-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-core-form-typoscriptconstants-id_argument:

id
--

..  confval:: id
    :name: typo3-core-form-typoscriptconstants-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-core-form-typoscriptconstants-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-core-form-typoscriptconstants-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-core-form-typoscriptconstants-style_argument:

style
-----

..  confval:: style
    :name: typo3-core-form-typoscriptconstants-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-core-form-typoscriptconstants-title_argument:

title
-----

..  confval:: title
    :name: typo3-core-form-typoscriptconstants-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-core-form-typoscriptconstants-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-core-form-typoscriptconstants-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-core-form-typoscriptconstants-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-core-form-typoscriptconstants-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-core-form-typoscriptconstants-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-core-form-typoscriptconstants-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
