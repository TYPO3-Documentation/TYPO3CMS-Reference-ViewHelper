..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/LinkButtonViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/LinkButtonViewHelper.php
:navigation-title: moduleLayout.button.linkButton

.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-linkbutton:

===============================================================================
ModuleLayout.button.linkButton ViewHelper `<be:moduleLayout.button.linkButton>`
===============================================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


A ViewHelper for adding a link button to the doc header area.
It must be a child of :ref:`<be:moduleLayout> <typo3-backend-modulelayout>`.

Examples
--------

Default::

   <be:moduleLayout>
       <be:moduleLayout.button.linkButton
           icon="actions-add"
           title="Add record')}"
           link="{be:uri.newRecord(table: 'tx_my_table')}"
       />
   </be:moduleLayout>

.. _typo3-backend-modulelayout-button-linkbutton_source:

Source code
===========

Go to the source code of this ViewHelper: `LinkButtonViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLayout/Button/LinkButtonViewHelper.php>`__.

.. _typo3-backend-modulelayout-button-linkbutton_arguments:

Arguments
=========

The following arguments are available for `<be:moduleLayout.button.linkButton>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-modulelayout-button-linkbutton-icon_argument:

..  confval:: icon
    :name: typo3-backend-modulelayout-button-linkbutton-icon
    :type: string
    :required: false

    Icon identifier for the button

.. _typo3-backend-modulelayout-button-linkbutton-title_argument:

..  confval:: title
    :name: typo3-backend-modulelayout-button-linkbutton-title
    :type: string
    :required: false

    Title of the button

.. _typo3-backend-modulelayout-button-linkbutton-disabled_argument:

..  confval:: disabled
    :name: typo3-backend-modulelayout-button-linkbutton-disabled
    :type: boolean
    :required: false

    Whether the button is disabled

.. _typo3-backend-modulelayout-button-linkbutton-showlabel_argument:

..  confval:: showLabel
    :name: typo3-backend-modulelayout-button-linkbutton-showlabel
    :type: boolean
    :required: false

    Defines whether to show the title as a label within the button

.. _typo3-backend-modulelayout-button-linkbutton-position_argument:

..  confval:: position
    :name: typo3-backend-modulelayout-button-linkbutton-position
    :type: string
    :required: false

    Position of the button (left or right)

.. _typo3-backend-modulelayout-button-linkbutton-group_argument:

..  confval:: group
    :name: typo3-backend-modulelayout-button-linkbutton-group
    :type: integer
    :required: false

    Button group of the button

.. _typo3-backend-modulelayout-button-linkbutton-link_argument:

..  confval:: link
    :name: typo3-backend-modulelayout-button-linkbutton-link
    :type: string
    :required: true

    Link for the button
