.. include:: /Includes.rst.txt

.. _typo3-beuser-issuecommand:

============
issueCommand
============


Render a link to DataHandler command

Arguments
=========


.. _issuecommand_parameters:
parameters
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Is a set of GET params to send to route tce_db (SimpleDataHandlerController). Example: "&cmd[tt_content][123][move]=456" or "&data[tt_content][123][hidden]=1&data[tt_content][123][title]=Hello%20World

.. _issuecommand_redirecturl:
redirectUrl
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Redirect URL if any other that \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('REQUEST_URI') is preferred
