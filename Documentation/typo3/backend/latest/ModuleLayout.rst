..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayoutViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayoutViewHelper.php
:navigation-title: moduleLayout
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout:

===========================================
ModuleLayout ViewHelper `<be:moduleLayout>`
===========================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


A ViewHelper for having properly styled backend modules.
It is recommended to use it in Fluid Layouts.
It will render the required HTML for the doc header.
All module specific output and further configuration of the doc header
must be rendered as children of this ViewHelper.

Examples
========

Default::

   <be:moduleLayout>
      <f:render section="content" />
   </be:moduleLayout>

Output::

   <!-- HTML of the backend module -->

.. _typo3-backend-modulelayout_source:

Source code
===========

Go to the source code of this ViewHelper: `ModuleLayoutViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayoutViewHelper.php>`__.

.. _typo3-backend-modulelayout_arguments:

Arguments
=========

The following arguments are available for `<be:moduleLayout>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-backend-modulelayout-name_argument:

..  confval:: name
    :name: typo3-backend-modulelayout-name
    :type: string
    :required: false

    Name of the module, defaults to the current plugin name, if available

.. _typo3-backend-modulelayout-title_argument:

..  confval:: title
    :name: typo3-backend-modulelayout-title
    :type: string
    :required: false

    Title of the module.
