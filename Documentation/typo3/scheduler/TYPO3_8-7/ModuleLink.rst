.. include:: /Includes.rst.txt

.. _typo3-scheduler-modulelink:

==========
moduleLink
==========


Create internal link within backend app

Arguments
=========


.. _modulelink_controller:
controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The "controller" of scheduler. Possible values are "scheduler", "check", "info"

.. _modulelink_action:
action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The action to be called within each controller

.. _modulelink_arguments:
arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
