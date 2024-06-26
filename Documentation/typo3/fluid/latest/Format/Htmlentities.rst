..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesViewHelper.php
:navigation-title: format.htmlentities

.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentities:

========================================================
Format.htmlentities ViewHelper `<f:format.htmlentities>`
========================================================



Applies :php:`htmlentities()` escaping to a value.
See https://www.php.net/manual/function.htmlentities.php.

Examples
========

Default notation
----------------

::

   <f:format.htmlentities>{text}</f:format.htmlentities>

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

Inline notation
---------------

::

   {text -> f:format.htmlentities(encoding: 'ISO-8859-1')}

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

But encoded as ISO-8859-1.

.. _typo3-fluid-format-htmlentities_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlentitiesViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesViewHelper.php>`__.

.. _typo3-fluid-format-htmlentities_arguments:

Arguments
=========

The following arguments are available for `<f:format.htmlentities>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-format-htmlentities-value_argument:

..  confval:: value
    :name: typo3-fluid-format-htmlentities-value
    :type: string
    :required: false

    String to format

.. _typo3-fluid-format-htmlentities-keepquotes_argument:

..  confval:: keepQuotes
    :name: typo3-fluid-format-htmlentities-keepquotes
    :type: boolean
    :required: false

    If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _typo3-fluid-format-htmlentities-encoding_argument:

..  confval:: encoding
    :name: typo3-fluid-format-htmlentities-encoding
    :type: string
    :required: false

    Define the encoding used when converting characters (Default: UTF-8

.. _typo3-fluid-format-htmlentities-doubleencode_argument:

..  confval:: doubleEncode
    :name: typo3-fluid-format-htmlentities-doubleencode
    :type: boolean
    :default: `true`
    :required: false

    If FALSE existing html entities won't be encoded, the default is to convert everything.
