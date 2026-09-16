:navigation-title: link.email

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-email:

======================================
Link.email ViewHelper `<f:link.email>`
======================================

..  typo3:viewhelper:: link.email
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-email-example:

Examples
========

..  _typo3-fluid-link-email-basic-email-link:

Basic email link
----------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.email email="foo@bar.tld" />

..  code-block:: html
    :caption: Output

    <a href="#" data-mailto-token="ocknvq,hqqBdct0vnf" data-mailto-vector="1">foo(at)bar.tld</a>

Depending on :ref:`spamProtectEmailAddresses <t3tsref:confval-config-spamprotectemailaddresses>` setting.

..  _typo3-fluid-link-email-email-link-with-custom-linktext:

Email link with custom linktext
-------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.email email="foo@bar.tld">some custom content</f:link.email>

..  _typo3-fluid-link-email-email-link-with-custom-subject-and-prefilled-cc:

Email link with custom subject and prefilled cc
-----------------------------------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.email email="foo@bar.tld" subject="Check out this website" cc="foo@example.com">some custom content</f:link.email>

..  code-block:: html
    :caption: Output

    <a href="mailto:foo@bar.tld?subject=Check%20out%20this%20website&amp;cc=foo%40example.com">some custom content</a>

Depending on :ref:`spamProtectEmailAddresses <t3tsref:confval-config-spamprotectemailaddresses>` setting.

..  _typo3-fluid-link-email-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.email
    :source: ../../Global.json
    :display: arguments-only
