:navigation-title: format.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-html:

========================================
Format.html ViewHelper `<f:format.html>`
========================================

..  typo3:viewhelper:: format.html
    :source: ../../Global.json

..  _typo3-fluid-format-html-example:

Examples
========

Default parameters
------------------

::

   <f:format.html>{$myConstant.project} is a cool <b>CMS</b> (<a href="https://www.typo3.org">TYPO3</a>).</f:format.html>

Output::

   <p class="bodytext">TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).</p>

Depending on TYPO3 constants.

Custom parseFunc
----------------

::

   <f:format.html parseFuncTSPath="lib.parseFunc">TYPO3 is a cool <b>CMS</b> (<a href="https://www.typo3.org">TYPO3</a>).</f:format.html>

Output::

   TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).

Data argument
--------------

If you work with TypoScript :typoscript:`field` property, you should add the current record as `data`
to the ViewHelper to allow processing the `field` and `dataWrap` properties correctly.

::

   <f:format.html data="{newsRecord}" parseFuncTSPath="lib.news">News title: </f:format.html>

After "dataWrap = |<strong>{FIELD:title}</strong>" you may have this Output::

   News title: <strong>TYPO3, greatest CMS ever</strong>

Current argument
-----------------

Use the `current` argument to set the current value of the content object.

::

   <f:format.html current="{strContent}" parseFuncTSPath="lib.info">I'm gone</f:format.html>

After `setContentToCurrent = 1` you may have this output::

   Thanks Kasper for this great CMS

CurrentValueKey argument
-------------------------

Use the `currentValueKey` argument to define a value of data object as the current value.

::

   <f:format.html data="{contentRecord}" currentValueKey="header" parseFuncTSPath="lib.content">Content: </f:format.html>

After `dataWrap = |{CURRENT:1}` you may have this Output::

   Content: How to install TYPO3 in under 2 minutes ;-)

Inline notation
---------------

::

   {someText -> f:format.html(parseFuncTSPath: 'lib.parseFunc')}

Output::

   TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).
