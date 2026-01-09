:navigation-title: translate

..  include:: /Includes.rst.txt
..  _typo3-fluid-translate:

====================================
Translate ViewHelper `<f:translate>`
====================================

..  typo3:viewhelper:: translate
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  seealso::
    *   `Working with XLIFF files <https://docs.typo3.org/permalink/t3coreapi:xliff-api>`_
    *   `Multi-language Fluid templates <https://docs.typo3.org/permalink/t3coreapi:extension-localization-fluid>`_
    *   `Label references / Translation domains <https://docs.typo3.org/permalink/t3coreapi:label-reference>`_
    *   `Feature: #107759 - TranslateViewHelper supports Translation Domain syntax <https://docs.typo3.org/permalink/changelog:feature-107759-1729433323>`_

..  contents:: Table of contents

..  note::
    ..  versionadded:: 14.0
        The translate ViewHelper supports `translation domains <https://docs.typo3.org/permalink/t3coreapi:label-reference>`_,
        a short and convenient way to reference language labels without
        requiring `LLL:` paths or extension names.

        Translation domain syntax is the **recommended** and **future-proof** way
        to reference translations.

        The older `LLL:` and `extension` arguments are still valid for
        **backward compatibility**.

        All existing syntax remains fully supported, ensuring backward
        compatibility. The new syntax can be adopted incrementally within a
        project, and both old and new forms can coexist in the same template.

..  _typo3-fluid-translate-example:
..  _typo3-fluid-translate-example-domain:

Using translation domains
=========================

The translation domain syntax is the **recommended** way to
reference labels. It allows concise and clear label identifiers, without using
`LLL:` paths and extension names.

There are two equivalent ways to use domains:

1.  **Provide the domain as a separate argument** and only reference the identifier
    (recommended):

    ..  code-block:: html

        <f:translate domain="backend.toolbar" key="save" />
        <f:translate domain="my_extension.messages" id="greeting.hello" />

2.  **Use the combined domain + identifier syntax** in the `key`/`id` arguments:

    ..  code-block:: html

        <f:translate key="backend.toolbar:save" />
        <f:translate id="my_extension.messages:greeting.hello" />

*   The **domain** syntax is the preferred syntax for all new templates.
*   If both `domain` and `extension` are set, **the domain property takes precedence**.
*   The older `key="LLL:EXT:..."` and `extension` arguments are still supported for
    backward compatibility.

..  tip::
    Run the console command to list all translation domains and their language
    file mapping:

    ..  code-block:: bash

        vendor/bin/typo3 language:domain:list

    This will help you find your domains when migrating from `LLL:` paths
    to the new translation domain syntax.

..  _typo3-fluid-translate-example-backward:

Backward compatible syntax
==========================

The following forms are still supported for older templates and extensions.
New code should use domains instead.

..  _typo3-fluid-translate-example-key-only:

Short key - Usage in Extbase
----------------------------

The :ref:`key <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-translateviewhelper-key>`
argument on its own works in the Extbase context.

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html

            <f:translate key="domain_model.title" />

    ..  group-tab:: Language file example

        ..  literalinclude:: _Translate/_locallang.xlf
            :language: xml
            :caption: packages/my_extension/Resources/Private/Language/locallang.xlf

Alternatively, you can use `id` instead of `key` to produce the same output.
If both `id` and `key` are set, `id` takes precedence.

If the translate ViewHelper is used with only the language key, the template
**must** be rendered in an Extbase request, usually from an Extbase
controller action. The default language file must be located in the same
extension as the Extbase controller and must be saved in
:file:`Resources/Private/Language/locallang.xlf`.

..  _typo3-fluid-translate-example-key-extension:

Short key and extension name
----------------------------

If the ViewHelper is called from outside Extbase, the extension name or the
full `LLL:` key reference must be passed as arguments.

..  code-block:: html

    <f:translate key="domain_model.title" extensionName="my_extension" />

The default language file must be located in
:file:`Resources/Private/Language/locallang.xlf` of the extension.

..  versionchanged:: 14.0
    The translation domain syntax is now the recommended way
    to reference labels. The `extension` argument still works for
    backward compatibility.

..  _typo3-fluid-translate-example-key-full:

Full `LLL:` reference key
-------------------------

Using the `LLL:` language reference syntax, a language key from any `.xlf`
file can be used.

..  code-block:: html

    <f:translate
        key="LLL:EXT:my_extension/Resources/Private/Language/my_locallang.xlf:domain_model.title"
    />

..  note::
    This legacy form remains fully supported for backward compatibility.
    Domain syntax should be used for all new templates.
..  _typo3-fluid-translate-example-html:

Keeping HTML tags within translations
=====================================

HTML in language labels can be used when you surround the translate ViewHelper
with a ViewHelper that allows HTML output, such as the
`Sanitize.html ViewHelper <f:sanitize.html> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-sanitize-html>`_
in the backend or the `Format.html ViewHelper <f:format.html> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-format-html>`_
in the frontend.

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html

            <f:format.html>
                <f:translate
                    domain="my_extension.messages"
                    key="content.withHtml"
                />
            </f:format.html>

    ..  group-tab:: Language file example

        ..  literalinclude:: _Translate/_locallang_html.xlf
            :language: xml
            :caption: packages/my_extension/Resources/Private/Language/locallang.xlf

The entry in the `.xlf` language file must be surrounded by `<![CDATA[...]]>`.

..  warning::
    When allowing HTML tags in translations, ensure all translators are
    educated about `Cross-site scripting (XSS) <https://docs.typo3.org/permalink/t3coreapi:security-xss>`_.

..  _typo3-fluid-translate-example-placeholder:

Displaying translated labels with placeholders
==============================================

..  tabs::

    ..  group-tab:: Fluid

        ..  code-block:: html

            <f:translate
                domain="my_extension.domainmodel"
                key="title"
                arguments="{0: '{myVariable}'}"
            />

            Or with several numbered placeholders:

            <f:translate
                domain="my_extension.domainmodel"
                key="title"
                arguments="{1: '{myVariable}', 2: 'Some String'}"
            />

    ..  group-tab:: Language file example

        ..  literalinclude:: _Translate/_locallang_arguments.xlf
            :language: xml

The placeholder `%s` is used to insert dynamic values, passed as the parameter
:ref:`arguments <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-translateviewhelper-arguments>`
to the translate ViewHelper. If `%s` appears multiple times, it references
subsequent array entries in order.

To avoid dependency on order, use indexed placeholders like `%1$s`. This
explicitly refers to the first value and ensures that it is treated as a string
(`$s`). This method is based on PHP’s
`vsprintf function <https://www.php.net/manual/en/function.vsprintf.php>`_,
which allows for more flexible and readable formatting.

..  _typo3-fluid-translate-example-inline:

Inline notation with arguments and default value
================================================

Like all the other ViewHelpers, the translate ViewHelper can be used with
`Inline syntax <https://docs.typo3.org/permalink/fluid:viewhelper-inline-notation>`_.

..  code-block:: html

    {f:translate(domain: 'my_extension.messages', key: 'animal.sentence', arguments: {0: 'dog', 1: 'fox'}, default: 'default value')}

This is especially useful if you want to pass the translated label to another
ViewHelper, for example, as the `alt` parameter of an image:

..  code-block:: html

    <f:image src="EXT:my_extension/Resources/Public/icons/Edit.svg"
        alt="{f:translate(domain: 'my_extension.icons', key: 'edit', default: 'Edit')}"
    />

..  _typo3-fluid-translate-example-console:

The translation ViewHelper in console/CLI context
=================================================

The translation ViewHelper determines the target language based on the current
frontend or backend request.

If you are rendering your template from a console/CLI context, for example,
when you `Send emails with FluidEmail <https://docs.typo3.org/permalink/t3coreapi:mail-fluid-email>`_,
use the argument :ref:`languageKey <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-translateviewhelper-languagekey>`
to specify the desired language for the ViewHelper:

..  code-block:: html

    Salutation in Danish:
    <f:translate
        domain="my_extension.messages"
        key="salutation"
        languageKey="da"
    />

    Salutation in English:
    <f:translate
        domain="my_extension.messages"
        key="salutation"
        languageKey="default"
    />


..  _typo3-fluid-translate-arguments:

Arguments of the f:translate ViewHelper
=======================================

..  versionadded:: 14.0
    The `domain` argument was added. It selects a **translation domain**
    and should be preferred over `extension` or `extensionName`.
    When both are given, `domain` takes precedence.

..  typo3:viewhelper:: translate
    :source: /Global.json
    :display: arguments-only
