.. include:: /Includes.rst.txt

.. _typo3-install-uri-action:

==========
uri.action
==========


A view helper for creating URIs to install tool actions.

Examples
========

URI to the show-action of the current controller::

   <f:uri.action action="importantActions" />

Output::

   install.php?install[action]=importantActions&amp;install[context]=

Arguments
=========


.. _uri.action_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target action

.. _uri.action_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Default`
   'tool'

:aspect:`Required`
   true
:aspect:`Description`
   Target controller.

.. _uri.action_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Arguments

.. _uri.action_section:
section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The anchor to be added to the URI

.. _uri.action_additionalparams:
additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Additional query parameters that won't be prefixed like $arguments (overrule $arguments)
