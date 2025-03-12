:navigation-title: link.email

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-email:

======================================
Link.email ViewHelper `<f:link.email>`
======================================

..  typo3:viewhelper:: link.email
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-link-email-example:

Examples
========

Basic email link
----------------

::

   <f:link.email email="foo@bar.tld" />

Output::

   <a href="#" data-mailto-token="ocknvq,hqqBdct0vnf" data-mailto-vector="1">foo(at)bar.tld</a>

Depending on :ref:`spamProtectEmailAddresses <t3tsref:confval-config-spamprotectemailaddresses>` setting.

Email link with custom linktext
-------------------------------

::

   <f:link.email email="foo@bar.tld">some custom content</f:link.email>


Email link with custom subject and prefilled cc
-----------------------------------------------

::

   <f:link.email email="foo@bar.tld" subject="Check out this website" cc="foo@example.com"">some custom content</f:link.email>

Output::

   <a href="mailto:foo@bar.tld?subject=Check%20out%20this%20website&amp;cc=foo%40example.com">some custom content</a>

Depending on :ref:`spamProtectEmailAddresses <t3tsref:confval-config-spamprotectemailaddresses>` setting.
