.. include:: /Includes.rst.txt

.. _typo3-fluid-format-date:

===========
format.date
===========


Formats an object implementing :php:`\DateTimeInterface`.

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

Arguments
=========


.. _format.date_date:
date
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Either an object implementing DateTimeInterface or a string that is accepted by DateTime constructor

.. _format.date_format:
format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Format String which is taken to format the Date/Time

.. _format.date_base:
base
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   A base time (an object implementing DateTimeInterface or a string) used if $date is a relative date specification. Defaults to current time.
