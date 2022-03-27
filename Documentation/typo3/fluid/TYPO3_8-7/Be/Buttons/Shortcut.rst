.. include:: /Includes.rst.txt

.. _typo3-fluid-be-buttons-shortcut:

===================
be.buttons.shortcut
===================


View helper which returns shortcut button with icon
Note: This view helper is experimental!

Examples
========

Default::

   <f:be.buttons.shortcut />

Output::

   Shortcut button as known from the TYPO3 backend.
   By default the current page id, module name and all module arguments will be stored

Explicitly set parameters to be stored in the shortcut::

   <f:be.buttons.shortcut getVars="{0: 'M', 1: 'myOwnPrefix'}" setVars="{0: 'function'}" />

Output::

   Shortcut button as known from the TYPO3 backend.
   This time only the specified GET parameters and SET[]-settings will be stored.

Note:
Normally you won't need to set getVars & setVars parameters in Extbase modules

Arguments
=========


.. _be.buttons.shortcut_getvars:
getVars
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   List of GET variables to store. By default the current id, module and all module arguments will be stored

.. _be.buttons.shortcut_setvars:
setVars
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   List of SET[] variables to store. See DocumentTemplate::makeShortcutIcon(). Normally won't be used by Extbase modules
