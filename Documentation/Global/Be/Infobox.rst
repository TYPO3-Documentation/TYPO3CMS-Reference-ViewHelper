:navigation-title: be.infobox

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-infobox:

======================================
Be.infobox ViewHelper `<f:be.infobox>`
======================================

..  figure:: /Images/BeInfoboxWithHTML.png
    :alt: A screenshot demonstrating a complex infobox with HTML content

    See example `Infobox with HTML content, icon and links <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-be-infobox-example-html>`_

..  typo3:viewhelper:: be.infobox
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-be-infobox-states:

Severity states of the Be.infobox ViewHelper
============================================

The Infobox provides different context-sensitive states that
can be used to provide an additional visual feedback to the

user to underline the meaning of the information.

Possible values are in range from ``-2`` to ``2``. Please choose a
meaningful value from the following list.

..  tabs::

    ..  group-tab:: Screenshot

        ..  figure:: /Images/BeInfobox.png
            :alt: A screenshot demonstrating all possible infobox colors and states.

            A demonstration of all possible states

    ..  group-tab:: Numeral values

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

    ..  group-tab:: Code example

        It is considered best practice to use the states from
        :php:`\TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper` together with the
        `Constant ViewHelper <f:constant> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-constant>`_:

        ..  literalinclude:: _Infobox/_States.html
            :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

..  _typo3-fluid-be-infobox-example:

Examples
========

Info box of level notice with a static title and a static text:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    <f:be.infobox title="Message title">your box content</f:be.infobox>

Warning box with disabled icon:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    <f:be.infobox
        title="Message title"
        message="your box content"
        state="{f:constant(name: 'TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::STATE_WARNING')}"
        disableIcon="true"
    />

Success box with custom icon:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    <f:be.infobox
        title="Message title"
        message="your box content"
        state="{f:constant(name: 'TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::STATE_OK')}"
        iconName="check"
    />


..  _typo3-fluid-be-infobox-example-html:

Infobox with HTML content, icon and links
-----------------------------------------

You can find this example in the TYPO3 backend module
:guilabel:`System > DB Check > Manage Reference Index` if
:composer:`typo3/cms-lowlevel` is installed.

..  literalinclude:: _Infobox/_ReferenceIndex.html
    :caption: EXT:lowlevel/Resources/Private/Templates/ReferenceIndex.html

..  _typo3-fluid-be-infobox-arguments:

Arguments
=========

..  typo3:viewhelper:: be.infobox
    :source: ../../Global.json
    :display: arguments-only
