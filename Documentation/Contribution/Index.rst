.. include:: /Includes.rst.txt

..  _contribution:

============
Contribution
============

Contributions to this manual are made by editing the ViewHelper's page in
the `TYPO3CMS-Reference-ViewHelper repository
<https://github.com/TYPO3-Documentation/TYPO3CMS-Reference-ViewHelper>`__ —
the usual *Edit on GitHub* workflow works as it does in every other official
TYPO3 manual. Use the :guilabel:`Edit on GitHub` button on the page you want
to change.

..  _contribution-how-pages-work:

Which parts of a page are generated
===================================

Every ViewHelper page mixes two kinds of content:

Generated
    The description, flags such as *deprecated* or *internal*, and the table
    of arguments all come from the ViewHelper's PHP class. The
    :rst:`typo3:viewhelper` directive reads them from
    :file:`Documentation/Global.json` and the other JSON files each time the
    manual is rendered. The `Fluid ViewHelper Documentation Generator
    <https://github.com/TYPO3-Documentation/fluid-documentation-generator>`__
    keeps those files current, running once a day. A change to a doc-comment
    or to an argument therefore appears on the page without anyone editing
    it.

Written by hand
    Everything else: the explanations, the examples and the structure of the
    page. This is what you contribute.

Pages are only ever added, never rewritten:

*   A ViewHelper that has no page yet gets one from the generator — once.
*   An existing page is never overwritten, so hand-written text is safe.
*   When a ViewHelper is removed from the TYPO3 Core, its page is left
    behind and has to be deleted by hand.

..  _contribution-hand-written:

Hand-written documentation is preferred
=======================================

**Extended examples belong on the page in this manual, not in the PHP
doc-comment.** A doc-comment should stay a short description of what the
ViewHelper does. Longer explanations, several usage examples and their
rendered output are easier to read and to maintain in the manual, where they
can use the full reST markup, tabs and literal includes.

..  _contribution-page-structure:

Recommended page structure
==========================

See :file:`Documentation/Global/Form/Checkbox.rst` for a page that follows
this structure:

#.  A :rst:`:navigation-title:` and an anchor, followed by the page title.
#.  The :rst:`typo3:viewhelper` directive showing the description and flags:

    ..  code-block:: rst

        ..  typo3:viewhelper:: form.checkbox
            :source: ../../Global.json
            :display: tags,description,gitHubLink
            :noindex:

#.  A :rst:`..  contents::` menu, when the page is long enough to need one.
#.  The hand-written sections — what the ViewHelper is for, the common
    cases, and examples. Give every headline its own anchor.
#.  An "Arguments" section at the end, listing the arguments from the same
    source:

    ..  code-block:: rst

        ..  typo3:viewhelper:: form.checkbox
            :source: ../../Global.json
            :display: arguments-only

..  _contribution-viewhelper-source:

Editing the ViewHelper source
=============================

Editing the PHP doc-comment is the right fix when the short description
itself is wrong or missing, since that text is shown on the page and in
IDEs. The ViewHelper classes live at

1. https://github.com/TYPO3/typo3/tree/main/typo3/sysext/core/Classes/ViewHelpers
2. https://github.com/TYPO3/typo3/tree/main/typo3/sysext/backend/Classes/ViewHelpers
3. https://github.com/TYPO3/typo3/tree/main/typo3/sysext/fluid/Classes/ViewHelpers
4. https://github.com/TYPO3/Fluid/tree/main/src/ViewHelpers

Such a change reaches this manual with the next run of the generator, which
happens once a day. See
:ref:`Fluid ViewHelper reference generation <h2document:fluid-viewhelper-reference-generation>`
for how the whole process fits together.

You can use the common :ref:`directives <h2document:rest-reference>` of the
reST markup language supported by the TYPO3 documentation rendering
toolchain.
