..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/CObjectViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/CObjectViewHelper.php
:navigation-title: cObject

..  include:: /Includes.rst.txt

..  _typo3-fluid-cobject:

================================
CObject ViewHelper `<f:cObject>`
================================

..  typo3:viewhelper:: cObject
    :source: ../Global.json


..  _typo3-fluid-cobject-content:

Displaying content elements provided by the page-content data processor
=======================================================================

When using the `page-content data processor <https://docs.typo3.org/permalink/t3tsref:pagecontentfetchingprocessor>`_
to display the content elements of a
`PAGEVIEW <https://docs.typo3.org/permalink/t3tsref:cobj-pageview>`_,
the CObject ViewHelper can be used to display the actual content elements:

..  code-block:: html
    :caption: packages/my_sitepackage/Resources/Private/Templates/Pages/Default.html

    <f:for each="{myContent.left.records}" as="contentElement">
        <f:cObject
            typoscriptObjectPath="{contentElement.mainType}"
            table="{contentElement.mainType}"
            data="{contentElement}"
        />
    </f:for>

Variable `{contentElement.mainType}` already contains the correct TypoScript path
to the TypoScript top-level object `tt_content <https://docs.typo3.org/permalink/t3tsref:tlo-tt-content>`_.

The table storing the content elements is also called `tt_content` so we can use
the same variable here. Variable `contentElement` already contains the
`Record object <https://docs.typo3.org/permalink/t3coreapi:record-objects>`_
containing the data needed to render the content element with the
CObject ViewHelper.
