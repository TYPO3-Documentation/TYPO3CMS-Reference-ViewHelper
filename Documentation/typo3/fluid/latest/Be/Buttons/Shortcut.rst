.. include:: /Includes.rst.txt

.. _typo3-fluid-be-buttons-shortcut:

===================
be.buttons.shortcut
===================


ViewHelper which returns shortcut button with icon.

.. note::
   This ViewHelper is experimental!

Examples
========

Default::

   <f:be.buttons.shortcut />

Shortcut button as known from the TYPO3 backend.
By default the current page id, module name and all module arguments will be stored.

Explicitly set parameters to be stored in the shortcut::

   <f:be.buttons.shortcut getVars="{0: 'route', 1: 'myOwnPrefix'}" setVars="{0: 'function'}" />

Shortcut button as known from the TYPO3 backend.
This time only the specified GET parameters and SET[]-settings will be stored.

.. note:

   Normally you won't need to set getVars & setVars parameters in Extbase modules.

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
   false
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
   false
:aspect:`Description`
   List of SET[] variables to store. See DocumentTemplate::makeShortcutIcon(). Normally won't be used by Extbase modules
