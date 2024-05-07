:navigation-title: link.email
.. include:: /Includes.rst.txt

.. _typo3-fluid-link-email:

======================================
link.email ViewHelper `<f:link.email>`
======================================


Email link ViewHelper.
Generates an email link incorporating TYPO3s `spamProtectEmailAddresses`_ TypoScript setting.

.. _spamProtectEmailAddresses: https://docs.typo3.org/m/typo3/reference-typoscript/main/en-us/Setup/Config/Index.html#spamprotectemailaddresses

Examples
========

Basic email link
----------------

::

   <f:link.email email="foo@bar.tld" />

Output::

   <a href="#" data-mailto-token="ocknvq,hqqBdct0vnf" data-mailto-vector="1">foo(at)bar.tld</a>

Depending on `spamProtectEmailAddresses`_ setting.

Email link with custom linktext
-------------------------------

::

   <f:link.email email="foo@bar.tld">some custom content</f:link.email>

Output::

   <a href="javascript:linkTo_UnCryptMailto('ocknvq,hqqBdct0vnf');">some custom content</a>

Depending on `spamProtectEmailAddresses`_ setting.


.. _typo3-fluid-link-email_arguments:

Arguments
=========


.. _link.email_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.email_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _link.email_aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _link.email_email:

email
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The email address to be turned into a link

.. _link.email_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _link.email_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.email_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.email_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.email_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _link.email_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _link.email_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.email_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _link.email_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.email_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the name of an anchor

.. _link.email_rel:

rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _link.email_rev:

rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _link.email_target:

target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies where to open the linked document
