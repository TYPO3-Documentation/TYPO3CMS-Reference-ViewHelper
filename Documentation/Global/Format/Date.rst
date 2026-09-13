:navigation-title: format.date

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-date:

========================================
Format.date ViewHelper `<f:format.date>`
========================================

..  typo3:viewhelper:: format.date
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-format-date-example:

Examples
========

..  _typo3-fluid-format-date-defaults:

Defaults
--------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date>{dateObject}</f:format.date>

..  code-block:: text
    :caption: Output

    1980-12-13

Depending on the current date.

..  _typo3-fluid-format-date-custom-date-format:

Custom date format
------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date format="H:i">{dateObject}</f:format.date>

..  code-block:: text
    :caption: Output

    01:23

Depending on the current time.

..  _typo3-fluid-format-date-relative-date-with-given-time:

Relative date with given time
-----------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date format="Y" base="{dateObject}">-1 year</f:format.date>

..  code-block:: text
    :caption: Output

    2016

Assuming dateObject is in 2017.

..  _typo3-fluid-format-date-strtotime-string:

strtotime string
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date format="d.m.Y - H:i:s">+1 week 2 days 4 hours 2 seconds</f:format.date>

..  code-block:: text
    :caption: Output

    13.12.1980 - 21:03:42

Depending on the current time, see https://www.php.net/manual/function.strtotime.php.

..  _typo3-fluid-format-date-localized-dates-using-strftime-date-format:

Localized dates using strftime date format
------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date format="%d. %B %Y">{dateObject}</f:format.date>

..  code-block:: text
    :caption: Output

    13. Dezember 1980

Depending on the current date and defined locale. In the example you see the 1980-12-13 in a german locale.

..  _typo3-fluid-format-date-localized-dates-using-icu-based-date-and-time-formatting:

Localized dates using ICU-based date and time formatting
--------------------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date pattern="dd. MMMM yyyy" locale="de-DE">{dateObject}</f:format.date>

..  code-block:: text
    :caption: Output

    13. Dezember 1980

Depending on the current date. In the example you see the 1980-12-13 in a german locale.

..  _typo3-fluid-format-date-localized-dates-using-default-formatting-patterns:

Localized dates using default formatting patterns
-------------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    <f:format.date pattern="FULL" locale="fr-FR">{dateObject}</f:format.date>

..  code-block:: text
    :caption: Output

    jeudi 9 mars 2023 à 21:40:49 temps universel coordonné

Depending on the current date and operating system setting. In the example you see the 2023-03-09 in a french locale.

..  _typo3-fluid-format-date-inline-notation:

Inline notation
---------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {f:format.date(date: dateObject)}

..  code-block:: text
    :caption: Output

    1980-12-13

Depending on the value of `{dateObject}`.

..  _typo3-fluid-format-date-inline-notation-2nd-variant:

Inline notation (2nd variant)
-----------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Content/Text.fluid.html

    {dateObject -> f:format.date()}

..  code-block:: text
    :caption: Output

    1980-12-13

Depending on the value of `{dateObject}`.

..  _typo3-fluid-format-date-arguments:

Arguments
=========

..  typo3:viewhelper:: format.date
    :source: ../../Global.json
    :display: arguments-only
