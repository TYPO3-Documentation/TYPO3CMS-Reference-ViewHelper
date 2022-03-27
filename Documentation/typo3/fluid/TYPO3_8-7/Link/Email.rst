.. include:: /Includes.rst.txt

.. _typo3-fluid-link-email:

==========
link.email
==========


Email link view helper.
Generates an email link incorporating TYPO3s spamProtectEmailAddresses-settings.

Arguments
=========


.. _link.email_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.email_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

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
   true
:aspect:`Description`
   CSS class(es) for this element

.. _link.email_dir:
dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.email_id:
id
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.email_lang:
lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.email_style:
style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Individual CSS styles for this element

.. _link.email_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Tooltip text of element

.. _link.email_accesskey:
accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.email_tabindex:
tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the tab order of this element

.. _link.email_onclick:
onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.email_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the name of an anchor

.. _link.email_rel:
rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the relationship between the current document and the linked document

.. _link.email_rev:
rev
---

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies the relationship between the linked document and the current document

.. _link.email_target:
target
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Specifies where to open the linked document
