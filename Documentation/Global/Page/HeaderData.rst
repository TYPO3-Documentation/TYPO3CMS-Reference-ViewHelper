:navigation-title: page.headerData

..  include:: /Includes.rst.txt

..  _typo3-fluid-page-headerdata:

================================================
Page.headerData ViewHelper `<f:page.headerData>`
================================================

..  versionadded:: 14.0

The `<f:page.headerData>` ViewHelper allows injecting arbitrary content into
the HTML :php:`<head>` of a rendered page.

The ViewHelper internally uses the `PageRenderer API <https://docs.typo3.org/permalink/t3coreapi:assets-page-renderer>`_
and is useful when ViewHelpers like
`<f:asset.css> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-css>`_ or
`<f:asset.script> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-script>`_
do not support all required attributes or use cases
(for example `dns-prefetch`, `preconnect`, tracking scripts, or inline
JavaScript).

..  warning::

    The ViewHelper outputs given content as is. Possible user supplied input for
    the ViewHelpers **must manually be escaped** in order to prevent a
    `Cross-site scripting (XSS) <https://docs.typo3.org/permalink/t3coreapi:security-xss>`_
    vulnerability.

..  typo3:viewhelper:: page.headerData
    :source: ../../Global.json
    :display: tags,gitHubLink

..  rubric:: Example usage

..  literalinclude:: _codesnippets/_HeaderData.html
