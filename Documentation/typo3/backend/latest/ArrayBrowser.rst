..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ArrayBrowserViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ArrayBrowserViewHelper.php
:navigation-title: arrayBrowser
.. include:: /Includes.rst.txt

.. _typo3-backend-arraybrowser:

===========================================
ArrayBrowser ViewHelper `<be:arrayBrowser>`
===========================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Renders a given array as tree

.. _typo3-backend-arraybrowser_source:

Source code
===========

Go to the source code of this ViewHelper: `ArrayBrowserViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ArrayBrowserViewHelper.php>`__.

.. _typo3-backend-arraybrowser_arguments:

Arguments
=========

The following arguments are available for `<be:arrayBrowser>`:

..  contents::
    :local:


.. _typo3-backend-arraybrowser-data_argument:

data
----

..  confval:: data
    :name: typo3-backend-arraybrowser-data
    :type: mixed
    :required: false

    Array which should be rendered
