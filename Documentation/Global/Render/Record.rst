:navigation-title: render.record

..  include:: /Includes.rst.txt

..  _typo3-fluid-render-record:

============================================
Render.record ViewHelper `<f:render.record>`
============================================

..  versionadded:: 14.2
    Instead of using the :html:`<f:cObject>` ViewHelper to render database records,
    use the new :html:`<f:render.record>` ViewHelper.

This ViewHelper renders a record object via its TypoScript definition. The
most common use case is rendering a content element that is available as a
record object in a Fluid template.

By default, the ViewHelper renders the record as-is. However, event listeners
can listen to the :php:`\TYPO3\CMS\Fluid\Event\ModifyRenderedRecordEvent`
to modify the output.

..  typo3:viewhelper:: render.record
    :source: /Global.json
    :display: tags,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-render-record-example:

Rendering content elements using the `record-transformation` data processor
===========================================================================

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: packages/my_sitepackage/Resources/Private/Templates/Content/MyContent.html

            <f:render.record record="{record}"/>

        Or using inline syntax:

        ..  code-block:: html
            :caption: packages/my_sitepackage/Resources/Private/Templates/Content/Default.html

            {record -> f:render.record()}

    ..  group-tab:: TypoScript

        ..  code-block:: typoscript
            :caption: packages/my_sitepackage/Configuration/Sets/main/setup.typoscript

            dataProcessing {
                10 = record-transformation
            }

..  _typo3-fluid-render-record-example-any:

Rendering arbitrary database records
====================================

You can render any database record that has valid
`TCA <https://docs.typo3.org/permalink/t3tca:start>`_, including categories and
records provided by third-party extensions.

..  _typo3-fluid-render-record-example-category:

Rendering system categories
---------------------------

You can render not only `tt_content` records but any database record by defining
a top-level TypoScript object with the name of the record table.

For example, to render system categories, use `sys_category = FLUIDTEMPLATE`
(`FLUIDTEMPLATE <https://docs.typo3.org/permalink/t3tsref:cobj-template>`_)
to configure the rendering.

..  tabs::

    ..  group-tab:: TypoScript rendering definition

        ..  code-block:: typoscript
            :caption: packages/my_sitepackage/Configuration/Sets/main/setup.typoscript

            sys_category = FLUIDTEMPLATE
            sys_category {
              file = EXT:my_sitepackage/Resources/Private/Templates/Category/Default.html
              layoutRootPaths.10 = EXT:my_sitepackage/Resources/Private/Layouts/Category/
              partialRootPaths.10 = EXT:my_extension/Resources/Private/Partials/Category/
              dataProcessing.1774685451 = record-transformation
            }

    ..  group-tab:: Fluid

        ..  code-block:: html
            :caption: EXT:my_sitepackage/Resources/Private/Templates/Partials/Categories.html

            <f:for each="{categories}" as="category">
                {category -> f:render.record()}
            </f:for>

    ..  group-tab:: TypoScript page definition

        ..  code-block:: typoscript
            :caption: packages/my_sitepackage/Configuration/Sets/main/setup.typoscript

            page = PAGE
            page {
              10 = PAGEVIEW
              10 {
                paths.10 = EXT:my_sitepackage/Resources/Private/Templates/
                dataProcessing {
                  10 = database-query
                  10 {
                    as = categories
                    table = sys_category
                    where = parent=0
                    dataProcessing.1774685450 = record-transformation
                  }
                }
              }
            }


..  _typo3-fluid-render-record-example-type:

Rendering records with types
============================

If you want to render a database record that has different
`types <https://docs.typo3.org/permalink/t3tca:types-introduction>`_, you can
use a TypoScript `Content object array (COA) <https://docs.typo3.org/permalink/t3tsref:cobj-coa-int>`_
to configure rendering for special types:

..  code-block:: typoscript
    :caption: packages/my_sitepackage/Configuration/Sets/main/setup.typoscript

    tx_myextension_domain_model_product = COA
    tx_myextension_domain_model_product {
        key {
            field = my_type
        }
        default = FLUIDTEMPLATE
        default {
          templateName >
          templateName.ifEmpty.cObject = TEXT
          templateName.ifEmpty.cObject {
            field = record_type
            required = 1
            case = uppercamelcase
          }
          # for record_type = 'mainProduct' the template file my_extension/Resources/Private/Templates/Product/MainProduct.html will be used
          templateRootPaths.10 = EXT:my_extension/Resources/Private/Templates/Product/
          layoutRootPaths.10 = EXT:my_extension/Resources/Private/Layouts/
          partialRootPaths.10 = EXT:my_extension/Resources/Private/Partials/
          dataProcessing.1421884800 = record-transformation
        }
        mySpecialType.templateRootPaths.20 = EXT:my_extension/Resources/Private/Templates/ProductSpecial/
    }

..  _typo3-fluid-render-record-event:

Intercepting the rendering of records via events
================================================

With the :php:`\TYPO3\CMS\Fluid\Event\ModifyRenderedRecordEvent`, developers can
intercept the rendering of individual records in Fluid templates to modify the
output.

..  _typo3-fluid-render-record-arguments:

Arguments of the `<f:render.record>` ViewHelper
===============================================

..  typo3:viewhelper:: render.record
    :source: /Global.json
    :display: arguments-only
