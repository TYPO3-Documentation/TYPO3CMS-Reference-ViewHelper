:navigation-title: security.nonce

..  include:: /Includes.rst.txt
..  _typo3-fluid-security-nonce:

==============================================
Security.nonce ViewHelper `<f:security.nonce>`
==============================================

..  versionchanged:: 14.1, 13.4.23
    CSP nonce sources set via the `{f:security.nonce()}` ViewHelper are no
    longer incorrectly considered negligible. The newly introduced `directive`
    and `scope` arguments allow TYPO3 to correctly assign that nonce to the
    appropriate CSP directive, whereas previously the nonce could be silently
    discarded due to missing context.

The `{f:security.nonce()}` ViewHelper generates a CSP
(`Content Security Policy <https://docs.typo3.org/permalink/t3coreapi:content-security-policy>`_)
nonce and registers it for inclusion in the CSP header.

..  hint::
    The `{f:security.nonce()}` view-helper is meant as a compatibility
    fallback. It is suggested to use more specific ViewHelpers like
    `Asset.css ViewHelper <f:asset.css> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-css>`_
    or `Asset.script ViewHelper <f:asset.script> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-asset-script>`_.

..  typo3:viewhelper:: security.nonce
    :source: /Global.json
    :display: tags,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-security-nonce-example:

Examples of security.nonce ViewHelper usage
===========================================

..  code-block:: html
    :caption: Basic usage

    <script nonce="{f:security.nonce()}">const inline = 'script';</script>

The optional arguments `directive` and `scope` can be used to explicitly
declare how the generated nonce should be applied to the Content Security
Policy. This avoids ambiguity and allows TYPO3 to assign the nonce to the
correct CSP directive.

..  _typo3-fluid-security-nonce-example-inline-script:

Inline script (default scope)
-----------------------------

Inline scripts require the nonce to be registered for the
`script-src` CSP directive. The `inline` scope is the default and may be
omitted.

..  code-block:: html
    :caption: Inline script with explicit directive

    <script nonce="{f:security.nonce(directive: 'script-src')}">
        const test = true;
    </script>

..  _typo3-fluid-security-nonce-example-external-script:

External script (static scope)
------------------------------

When a nonce is applied to an external script, the `static` scope should
be used. This allows TYPO3 to correctly associate the nonce with a static
script element.

..  code-block:: html
    :caption: External script with nonce

    <script
        src="{scriptUri}"
        nonce="{f:security.nonce(directive: 'script-src', scope: 'static')}"></script>

..  _typo3-fluid-security-nonce-example-inline-style:

Inline styles with nonce attribute
----------------------------------

The ViewHelper can also be used for inline styles by specifying the
corresponding style directive.

..  code-block:: html
    :caption: Inline style block

    <style nonce="{f:security.nonce(directive: 'style-src')}">
        body {
            background-color: #f5f5f5;
        }
    </style>


..  _typo3-fluid-security-nonce-arguments:

Arguments of the `<f:security.nonce>` ViewHelper
================================================

..  versionadded:: 14.1, 13.4.23
    The arguments `directive` and `scope` were introduced.

Parameter `directive` can be one of `default-src`, `script-src`,
`script-src-elem`, `style-src`, or `style-src-elem` (referring to a CSP directive).

..  typo3:viewhelper:: security.nonce
    :source: /Global.json
    :display: arguments-only
