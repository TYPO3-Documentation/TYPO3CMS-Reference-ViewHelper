:navigation-title: format.date

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-date:

========================================
Format.date ViewHelper `<f:format.date>`
========================================

..  typo3:viewhelper:: format.date
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-format-date-example:

Examples
========

Defaults
--------

::

   <f:format.date>{dateObject}</f:format.date>

``1980-12-13``
Depending on the current date.

Custom date format
------------------

::

   <f:format.date format="H:i">{dateObject}</f:format.date>

``01:23``
Depending on the current time.

Relative date with given time
-----------------------------

::

   <f:format.date format="Y" base="{dateObject}">-1 year</f:format.date>

``2016``
Assuming dateObject is in 2017.

strtotime string
----------------

::

   <f:format.date format="d.m.Y - H:i:s">+1 week 2 days 4 hours 2 seconds</f:format.date>

``13.12.1980 - 21:03:42``
Depending on the current time, see https://www.php.net/manual/function.strtotime.php.

Localized dates using strftime date format
------------------------------------------

::

   <f:format.date format="%d. %B %Y">{dateObject}</f:format.date>

``13. Dezember 1980``
Depending on the current date and defined locale. In the example you see the 1980-12-13 in a german locale.

Localized dates using ICU-based date and time formatting
--------------------------------------------------------

::

   <f:format.date pattern="dd. MMMM yyyy" locale="de-DE">{dateObject}</f:format.date>

``13. Dezember 1980``
Depending on the current date. In the example you see the 1980-12-13 in a german locale.

Localized dates using default formatting patterns
-------------------------------------------------

::

   <f:format.date pattern="FULL" locale="fr-FR">{dateObject}</f:format.date>

``jeudi 9 mars 2023 à 21:40:49 temps universel coordonné``
Depending on the current date and operating system setting. In the example you see the 2023-03-09 in a french locale.

Inline notation
---------------

::

   {f:format.date(date: dateObject)}

``1980-12-13``
Depending on the value of ``{dateObject}``.

Inline notation (2nd variant)
-----------------------------

::

   {dateObject -> f:format.date()}

``1980-12-13``
Depending on the value of ``{dateObject}``.
