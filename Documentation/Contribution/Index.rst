.. include:: /Includes.rst.txt

============
Contribution
============

Unlike most official TYPO3 documentation, this manual does not support the
popular *Edit on GitHub* workflow for manual contributions, as these
documentation files are automatically generated from the ViewHelper
source files - and overwritten on each generation run.

Therefore, contribute to this documentation by editing the appropriate source
files at

1. https://github.com/TYPO3/typo3/tree/11.5/typo3/sysext/core/Classes/ViewHelpers
2. https://github.com/TYPO3/typo3/tree/11.5/typo3/sysext/backend/Classes/ViewHelpers
3. https://github.com/TYPO3/typo3/tree/11.5/typo3/sysext/fluid/Classes/ViewHelpers
4. https://github.com/TYPO3/Fluid/tree/main/src/ViewHelpers

For example, adding a new code sample to the *format.number* page at

*  https://docs.typo3.org/other/typo3/view-helper-reference/11.5/en-us/typo3/fluid/latest/Format/Number.html

is done by editing the class comment in

*  https://github.com/TYPO3/typo3/blob/11.5/typo3/sysext/fluid/Classes/ViewHelpers/Format/NumberViewHelper.php

To enrich the comment text you can use the common :ref:`directives <h2document:rest-reference>`
of the reST markup language supported by the TYPO3 documentation rendering
toolchain.
