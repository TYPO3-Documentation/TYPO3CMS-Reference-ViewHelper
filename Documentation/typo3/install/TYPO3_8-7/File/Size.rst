.. include:: /Includes.rst.txt

.. _typo3-install-file-size:

=========
file.size
=========


Get file size from file

Examples
========

Defaults::

   <f:file.size>/var/www/typo3/instance/typo3temp/foo.jpg</f:file.size>

Output::

   1,2k

Arguments
=========


.. _file.size_format:
format
------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   true
:aspect:`Description`
   If true, file size will be formatted
