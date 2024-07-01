..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/EmailViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/EmailViewHelper.php
:navigation-title: uri.email

.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-email:

====================================
Uri.email ViewHelper `<f:uri.email>`
====================================

.. deprecated:: TYPO3 v11.5

   In favor of allowing more content security policy scenarios, :js:`URI`
   is not used anymore per default. As a result, :html:`<f:uri.email>`
   ViewHelper became obsolete. The ViewHelper will be removed with TYPO3 v12.0.

   See :ref:`typo3-fluid-uri-email-migration` for details.


Email URI ViewHelper.
Generates an email URI incorporating TYPO3s `spamProtectEmailAddresses`_ TypoScript setting.

.. _spamProtectEmailAddresses: https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/Setup/Config/Index.html#spamprotectemailaddresses

.. _typo3-fluid-uri-email-migration:

Migration
=========

In case :typoscript:`config.spamProtectEmailAddresses` is used, make use of
:html:`<f.link.email email="{email}">` ViewHelper which returns the
complete :html:`<a>` tag like this:

.. code-block:: html

    <a href="#" data-mailto-token="ocknvq,hqqBdct0vnf"
        data-mailto-vector="1">user(at)my.example(dot)com</a>

In case spam-protected is not used or not useful (for example in backend user
interface), view-helper invocation can be omitted completely.


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

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-uri-email-email_argument:

..  confval:: email
    :name: typo3-fluid-uri-email-email
    :type: string
    :required: true

    The email address to be turned into a URI
