:navigation-title: transform.html

..  include:: /Includes.rst.txt
..  _typo3-fluid-transform-html:

==============================================
Transform.html ViewHelper `<f:transform.html>`
==============================================

..  typo3:viewhelper:: transform.html
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-transform-html-example:

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
