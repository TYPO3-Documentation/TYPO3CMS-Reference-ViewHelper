..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Page/FooterDataViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Page/FooterDataViewHelper.php
:navigation-title: page.footerData

..  include:: /Includes.rst.txt

..  _typo3-fluid-page-footerdata:

================================================
Page.footerData ViewHelper `<f:page.footerData>`
================================================

..  versionadded:: 14.0

The `<f:page.footerData>` ViewHelper allows injecting arbitrary content right
before the closing :php:`</body>` tag of a rendered page.

The ViewHelper internally uses the `PageRenderer API <https://docs.typo3.org/permalink/t3coreapi:assets-page-renderer>`_
and is useful when ViewHelpers like
`<f:asset.css> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-css>`_ or
`<f:asset.script> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-script>`_
do not support all required attributes or use cases
(for example tracking code or inline JavaScript).

..  warning::

    The ViewHelper outputs given content as is. Possible user supplied input for
    the ViewHelpers **must manually be escaped** in order to prevent a
    `Cross-site scripting (XSS) <https://docs.typo3.org/permalink/t3coreapi:security-xss>`_
    vulnerability.

..  typo3:viewhelper:: page.footerData
    :source: ../../Global.json
    :display: tags,gitHubLink

..  rubric:: Example usage

..  literalinclude:: _codesnippets/_FooterData.html
