..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Transform/HtmlViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Transform/HtmlViewHelper.php
:navigation-title: transform.html

.. include:: /Includes.rst.txt

.. _typo3-fluid-transform-html:

==============================================
Transform.html ViewHelper `<f:transform.html>`
==============================================



Transforms HTML and substitutes internal link scheme aspects.

Examples
========

Default parameters
------------------

::

   <f:transform.html selector="a.href" onFailure="removeEnclosure">
     <a href="t3://page?uid=1" class="home">Home</a>
   </f:transform.html>

Output::

    <a href="https://example.com/home" class="home">Home</a>

Inline notation
---------------

::

   {content -> f:transform.html(selector:'a.href', onFailure:'removeEnclosure')}

.. _typo3-fluid-transform-html_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Transform/HtmlViewHelper.php>`__.

.. _typo3-fluid-transform-html_arguments:

Arguments
=========

The following arguments are available for `<f:transform.html>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-transform-html-selector_argument:

..  confval:: selector
    :name: typo3-fluid-transform-html-selector
    :type: string
    :default: `'a.href'`
    :required: false

    Comma separated list of node attributes to be considered

.. _typo3-fluid-transform-html-onfailure_argument:

..  confval:: onFailure
    :name: typo3-fluid-transform-html-onfailure
    :type: string
    :default: `'removeEnclosure'`
    :required: false

    Behavior on failure, either `removeTag`, `removeAttr`, `removeEnclosure` or `null`
