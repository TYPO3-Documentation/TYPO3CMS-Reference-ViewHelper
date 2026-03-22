
:navigation-title: render.text

..  include:: /Includes.rst.txt

..  _typo3-fluid-render-text:

========================================
Render.text ViewHelper `<f:render.text>`
========================================

..  versionadded:: 14.2
    This ViewHelper should be used whenever text fields from records are
    displayed in HTML output. It can replace :fluid:`{record.my_inputfield}` for
    input fields, as well as :fluid:`<f:format.nl2br>{record.my_textarea}</f:format.nl2br>`
    and :fluid:`<f:format.html>{record.my_richtext}</f:format.html>`

..  typo3:viewhelper:: render.text
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

The :fluid:`<f:render.text>` ViewHelper renders text-based fields from a record
according to their TCA configuration, automatically applying the correct formatting
(for example plain text, line breaks, or rich text).

It provides a unified way to render text fields and avoids manual formatting
logic in templates.

Use this ViewHelper when rendering fields defined in TCA.

Do not use it for:

-   Non-TCA properties
-   Computed or virtual model properties

The ViewHelper is record-aware: it receives the full record and the field name,
and renders the field based on its TCA configuration.

The `record` argument accepts:

-   :php-short:`\TYPO3\CMS\Core\Domain\RecordInterface`
-   :php-short:`\TYPO3\CMS\Frontend\Page\PageInformation`
-   :php-short:`\TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface`

This includes records, ContentBlockData objects, page information objects,
and Extbase models.

..  contents:: Table of contents

..  _typo3-fluid-render-text-usage-record-transformation:

Rendering texts with the `record-transformation` data processor
===============================================================

You can use the :fluid:`<f:render.text>` ViewHelper to render a TCA field, for
example of type `Input <https://docs.typo3.org/permalink/t3tca:columns-input-rendertype-default>`_.

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: my_theme/Resources/Private/Templates/Content/MyContentElement.fluid.html

            <f:render.text record="{record} field="my_title" />
            or
            {f:render.text(record: record, field: 'my_title')}
            or
            {record -> f:render.text(field: 'my_title')}


    ..  group-tab:: TypoScript

        ..  code-block:: typoscript
            :caption: my_theme/Configuration/Sets/my_set/setup.typoscript

            tt_content.my_content_element {
                # ...
                dataProcessing {
                    10 = record-transformation
                }
            }

    ..  group-tab:: TCA

        ..  literalinclude:: _codesnippets/_tt_content_input.php
            :caption: my_theme/Configuration/TCA/Overrides/tt_content.php

..  _typo3-fluid-render-text-textarea:

Rendering multi-line texts, including rich text
===============================================

The :fluid:`<f:render.text>` ViewHelper can also be used instead of the
`Format.html ViewHelper <f:format.html> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-format-html>`_
or `Format.nl2br ViewHelper <f:format.nl2br> <https://docs.typo3.org/permalink/t3viewhelper:typo3fluid-fluid-format-nl2br>`_
to render text textarea fields (See `TCA: Text areas <https://docs.typo3.org/permalink/t3tca:columns-text>`_)

It automatically determines the correct rendering method based on the field's
TCA configuration.

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: my_theme/Resources/Private/Templates/Content/MyContentElement.fluid.html

            <f:render.text record="{record}" field="tx_mytheme_my_richtext" />

            <f:render.text record="{record}" field="tx_mytheme_my_textarea" />


    ..  group-tab:: TypoScript

        ..  code-block:: typoscript
            :caption: my_theme/Configuration/Sets/my_set/setup.typoscript

            tt_content.my_content_element {
                # ...
                dataProcessing {
                    10 = record-transformation
                }
            }

    ..  group-tab:: TCA

        ..  literalinclude:: _codesnippets/_tt_content_textarea.php
            :caption: my_theme/Configuration/TCA/Overrides/tt_content.php

..  _typo3-fluid-render-text-extbase:

Rendering texts from Extbase models
===================================

The ViewHelper can also be used to display an
`Extbase model <https://docs.typo3.org/permalink/t3coreapi:extbase-model>`_.

The Extbase model is internally converted to a
:php-short:`\TYPO3\CMS\Core\Domain\RecordInterface` where the rendering method is
determined by the TCA definition of the field.

Usage with an Extbase model (property name differs from database field name):

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: my_theme/Resources/Private/Templates/MyController/MyAction.fluid.html

            <!-- Use the field name from the TCA not from the model: -->
            <f:render.text record="{myModel}" field="my_link_text" />

    ..  group-tab:: Extbase model

        ..  literalinclude:: _codesnippets/_MyModel.php
            :caption: my_theme/Classes/Domain/Model/MyModel.php

    ..  group-tab:: TCA

        ..  literalinclude:: _codesnippets/_tx_myextension_domain_model_mymodel.php
            :caption: my_extension/Configuration/TCA/Overrides/tx_myextension_domain_model_mymodel.php

The :fluid:`field` argument always refers to the database/TCA column name of the
underlying record, even if your Extbase model maps that column to a differently
named property.

Note that Extbase models need to contain all columns that should be rendered
and the record type column (if configured in TCA) for this to work correctly.
For example, an Extbase model that represents `tt_content` must map both `bodytext`
and `ctype` to be able to use :fluid:`<f:render.text record="{contentModel}" field="bodytext" />`.

For model properties that are not directly mapped to database / TCA fields,
use ViewHelpers like :fluid:`<f:format.html>{myModel.mySpecialRichText}</f:format.html>`
if formatting is required, or output them directly:
:fluid:`{record.mySpecialText}` if no formatting is needed.

..  _typo3-fluid-render-text-arguments:

Arguments of the `<f:render.text>` ViewHelper
=============================================

..  typo3:viewhelper:: render.text
    :source: /Global.json
    :display: arguments-only
