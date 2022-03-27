.. include:: /Includes.rst.txt

.. _typo3-fluid-format-html:

===========
format.html
===========


Renders a string by passing it to a TYPO3 `parseFunc`_.
You can either specify a path to the TypoScript setting or set the `parseFunc`_ options directly.
By default :ts:`lib.parseFunc_RTE` is used to parse the string.

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

.. _parseFunc: https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/Functions/Parsefunc.html

Arguments
=========


.. _format.html_parsefunctspath:
parseFuncTSPath
---------------

:aspect:`DataType`
   string

:aspect:`Default`
   'lib.parseFunc_RTE'

:aspect:`Required`
   false
:aspect:`Description`
   Path to TypoScript parseFunc setup.
