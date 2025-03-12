:navigation-title: sanitize.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-sanitize-html:

============================================
Sanitize.html ViewHelper `<f:sanitize.html>`
============================================

..  _typo3-fluid-sanitize-html-example:

..  typo3:viewhelper:: sanitize.html
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

Examples
========

Default parameters
------------------

::

   <f:sanitize.html>
     <img src="/img.png" class="image" onmouseover="alert(document.location)">
   </f:sanitize.html>

Output::

   <img src="/img.png" class="image">

Inline notation
---------------

::

   {richTextFieldContent -> f:sanitize.html(build: 'default')}
