.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-email:

=========
uri.email
=========


Email URI ViewHelper.
Generates an email URI incorporating TYPO3s `spamProtectEmailAddresses`_ TypoScript setting.

.. _spamProtectEmailAddresses: https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/Setup/Config/Index.html#spamprotectemailaddresses

Example
=======

Basic email URI::


Output::

   javascript:linkTo_UnCryptMailto('ocknvq,hqqBdct0vnf');

Depending on `spamProtectEmailAddresses`_ setting.

Arguments
=========


.. _uri.email_email:
email
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The email address to be turned into a URI
