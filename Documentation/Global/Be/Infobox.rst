:navigation-title: be.infobox

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-infobox:

======================================
Be.infobox ViewHelper `<f:be.infobox>`
======================================

..  typo3:viewhelper:: be.infobox
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-infobox-states:

States
======

The Infobox provides different context-sensitive states that
can be used to provide an additional visual feedback to the

user to underline the meaning of the information.

Possible values are in range from ``-2`` to ``2``. Please choose a
meaningful value from the following list.

``-2``
   Notices (Default)
``-1``
   Information
``0``
   Positive feedback
``1``
   Warnings
``2``
   Error

..  _typo3-fluid-be-infobox-example:

Examples
========

Simple::

   <f:be.infobox title="Message title">your box content</f:be.infobox>

All options::

   <f:be.infobox title="Message title" message="your box content" state="{f:constant(name: 'TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::STATE_NOTICE')}" iconName="check" disableIcon="true" />

