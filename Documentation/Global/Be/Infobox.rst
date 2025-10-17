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

..  deprecated:: 14.0
    The public constants in :php-short:`\TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper`
    for defining the state/severity of an infobox have been deprecated. Use
    the enum :php:`\TYPO3\CMS\Core\Type\ContextualFeedbackSeverity` instead.

The Infobox provides different context-sensitive states that
can be used to provide an additional visual feedback to the
user to underline the meaning of the information.

The `state` property allows enums of type :php:`\TYPO3\CMS\Core\Type\ContextualFeedbackSeverity`
and integer values between `-2` and `+2` for backward compatibility.

..  tabs::

    ..  group-tab:: Screenshot

        ..  figure:: /Images/BeInfobox.png
            :alt: A screenshot demonstrating all possible infobox colors and states.

            A demonstration of all possible states

    ..  group-tab:: Enum values

        `ContextualFeedbackSeverity::NOTICE` (-2)
           Notices (Default)
        `ContextualFeedbackSeverity::INFO` (-1)
           Information
        `ContextualFeedbackSeverity::OK` (0)
           Positive feedback
        `ContextualFeedbackSeverity::WARNING` (1)
           Warnings
        `ContextualFeedbackSeverity::ERROR` (2)
           Error

    ..  group-tab:: Code example

        It is considered best practice to use the states from
        :php:`\TYPO3\CMS\Core\Type\ContextualFeedbackSeverity` enum together with the
        `Constant ViewHelper <f:constant> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-constant>`_:

        ..  literalinclude:: _Infobox/_States.html
            :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

..  _typo3-fluid-be-infobox-example:

Examples of be.infobox ViewHelper usage
=======================================

Info box of level notice with a static title and a static text:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

    <f:be.infobox title="Message title">your box content</f:be.infobox>

Warning box with disabled icon:

..  literalinclude:: _Infobox/_Warning.html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

Success box with custom icon:

..  literalinclude:: _Infobox/_CustomIcon.html
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

..  _typo3-fluid-be-infobox-example-html:

Infobox with HTML content, icon and links
-----------------------------------------

You can find this example in the TYPO3 backend module
:guilabel:`System > DB Check > Manage Reference Index` if
:composer:`typo3/cms-lowlevel` is installed.

..  literalinclude:: _Infobox/_ReferenceIndex.html
    :caption: EXT:lowlevel/Resources/Private/Templates/ReferenceIndex.html

..  _typo3-fluid-be-infobox-migration:

Migration from using InfoboxViewHelper state constants
------------------------------------------------------

If you want to support both TYPO3 v13 and v14 you can keep using the constants
until dropping TYPO3 13 support.

After dropping TYPO3 13 support migrate as follows:

..  literalinclude:: _Infobox/_Migration.diff
    :caption: EXT:my_extension/Resources/Private/Backend/Templates/MyModule.html

In PHP code replace the severity by using the enum or their value instead of the
constants:

..  literalinclude:: _Infobox/_Migration.php
    :caption: EXT:my_extension/Classes/Controller/MyController.php


..  _typo3-fluid-be-infobox-arguments:

Arguments
=========

..  typo3:viewhelper:: be.infobox
    :source: ../../Global.json
    :display: arguments-only
