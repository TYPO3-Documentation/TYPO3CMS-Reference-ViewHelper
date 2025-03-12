:navigation-title: link.file

..  include:: /Includes.rst.txt
..  _typo3-fluid-link-file:

====================================
Link.file ViewHelper `<f:link.file>`
====================================

..  typo3:viewhelper:: link.file
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-link-file-example:

Examples
========

Link to a file
--------------

::

   <f:link.file file="{file}" target="_blank">See file</f:link.file>

Output of a public file::

   <a href="https://example.com/fileadmin/path/to/file.jpg" target="_blank">See file</a>

Output of a non-public file::

   <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&token=79bce812" target="_blank">See file</a>

Link to download a file
-----------------------

::

   <f:link.file file="{file}" download="true" filename="alternative-name.jpg">Download file</f:link.file>

Output of a public file::

   <a href="https://example.com/fileadmin/path/to/file.jpg" download="alternative-name.jpg">Download file</a>

Output of a non-public file::

   <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&dl=1&fn=alternative-name.jpg&token=79bce812">Download file</a>
