..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/EmailViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/EmailViewHelper.php
:navigation-title: uri.email
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-email:

====================================
Uri.email ViewHelper `<f:uri.email>`
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

.. _typo3-fluid-uri-email_source:

Source code
===========

Go to the source code of this ViewHelper: `EmailViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/EmailViewHelper.php>`__.

.. _typo3-fluid-uri-email_arguments:

Arguments
=========

The following arguments are available for `<f:uri.email>`:

..  contents::
    :local:


.. _typo3-fluid-uri-email-email_argument:

email
-----

..  confval:: email
    :name: typo3-fluid-uri-email-email
    :type: string
    :required: true

    The email address to be turned into a URI
