:navigation-title: uri.email
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-email:

====================================
uri.email ViewHelper `<f:uri.email>`
====================================


Email URI ViewHelper.
Generates an email URI incorporating TYPO3s `spamProtectEmailAddresses`_ TypoScript setting.

.. _spamProtectEmailAddresses: https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/Setup/Config/Index.html#spamprotectemailaddresses

Example
=======

Basic email URI::

   <f:uri.email email="foo@bar.tld" />

Output::

   javascript:linkTo_UnCryptMailto('ocknvq,hqqBdct0vnf');

Depending on `spamProtectEmailAddresses`_ setting.


.. _typo3-fluid-uri-email_arguments:

Arguments
=========


.. _uri.email_email:

email
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The email address to be turned into a URI
