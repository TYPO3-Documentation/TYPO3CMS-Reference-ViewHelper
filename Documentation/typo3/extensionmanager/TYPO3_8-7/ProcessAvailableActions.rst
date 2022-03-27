.. include:: /Includes.rst.txt

.. _typo3-extensionmanager-processavailableactions:

=======================
processAvailableActions
=======================


View helper to let 3rd-party extensions process the list of available
actions for a given extension.

Arguments
=========


.. _processavailableactions_additionalattributes:
additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _processavailableactions_data:
data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _processavailableactions_extension:
extension
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
