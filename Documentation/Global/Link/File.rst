:navigation-title: link.file

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-file:

====================================
Link.file ViewHelper `<f:link.file>`
====================================

..  typo3:viewhelper:: link.file
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-link-file-example:

Examples
========

..  _typo3-fluid-link-file-link-to-a-file:

Link to a file
--------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.file file="{file}" target="_blank">See file</f:link.file>

..  code-block:: html
    :caption: Output of a public file

    <a href="https://example.com/fileadmin/path/to/file.jpg" target="_blank">See file</a>

..  code-block:: html
    :caption: Output of a non-public file

    <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&token=79bce812" target="_blank">See file</a>

..  _typo3-fluid-link-file-link-to-download-a-file:

Link to download a file
-----------------------

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Blog/Show.fluid.html

    <f:link.file file="{file}" download="true" filename="alternative-name.jpg">Download file</f:link.file>

..  code-block:: html
    :caption: Output of a public file

    <a href="https://example.com/fileadmin/path/to/file.jpg" download="alternative-name.jpg">Download file</a>

..  code-block:: html
    :caption: Output of a non-public file

    <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&dl=1&fn=alternative-name.jpg&token=79bce812">Download file</a>

..  _typo3-fluid-link-file-arguments:

Arguments of the `<f:link.file>` ViewHelper
===========================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.file
    :source: ../../Global.json
    :display: arguments-only
