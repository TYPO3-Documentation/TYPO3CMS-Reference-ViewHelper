..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlViewHelper.php
:navigation-title: format.html
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-html:

========================================
Format.html ViewHelper `<f:format.html>`
========================================

Renders a string by passing it to a TYPO3 `parseFunc`_.
You can either specify a path to the TypoScript setting or set the `parseFunc`_ options directly.
By default :typoscript:`lib.parseFunc_RTE` is used to parse the string.

The view helper must not be used in backend context, as it triggers frontend logic.
Instead, use :html:`<f:sanitize.html />` to secure a given HTML string or :html:`<f:transform.html />`
to parse links in HTML.

Examples
========

Default parameters
------------------

::

   <f:format.html>foo <b>bar</b>. Some <LINK 1>link</LINK>.</f:format.html>

Output::

   <p class="bodytext">foo <b>bar</b>. Some <a href="index.php?id=1" >link</a>.</p>

Depending on TYPO3 setup.

Custom parseFunc
----------------

::

   <f:format.html parseFuncTSPath="lib.parseFunc">foo <b>bar</b>. Some <LINK 1>link</LINK>.</f:format.html>

Output::

   foo <b>bar</b>. Some <a href="index.php?id=1" >link</a>.

Inline notation
---------------

::

   {someText -> f:format.html(parseFuncTSPath: 'lib.parseFunc')}

Output::

   foo <b>bar</b>. Some <a href="index.php?id=1" >link</a>.

.. _parseFunc: https://docs.typo3.org/m/typo3/reference-typoscript/main/en-us/Functions/Parsefunc.html

.. _typo3-fluid-format-html_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlViewHelper.php>`__.

.. _typo3-fluid-format-html_arguments:

Arguments
=========

The following arguments are available for `<f:format.html>`:

..  contents::
    :local:


.. _typo3-fluid-format-html-parsefunctspath_argument:

parseFuncTSPath
---------------

..  confval:: parseFuncTSPath
    :name: typo3-fluid-format-html-parsefunctspath
    :type: string
    :Default: 'lib.parseFunc_RTE'
    :required: false

    Path to TypoScript parseFunc setup.
