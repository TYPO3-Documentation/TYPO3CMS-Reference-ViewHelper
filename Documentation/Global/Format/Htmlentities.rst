:navigation-title: format.htmlentities

..  include:: /Includes.rst.txt
..  _typo3-fluid-format-htmlentities:

========================================================
Format.htmlentities ViewHelper `<f:format.htmlentities>`
========================================================

..  typo3:viewhelper:: format.htmlentities
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments


..  _typo3-fluid-format-htmlentities-examples:

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
