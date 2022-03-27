.. include:: /Includes.rst.txt

.. _typo3-backend-mfa-ifhasstate:

==============
mfa.ifHasState
==============


Check if the given provider for the current user has the requested state set

Arguments
=========


.. _mfa.ifhasstate_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if met.

.. _mfa.ifhasstate_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _mfa.ifhasstate_state:
state
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The state to check for (e.g. active or locked)

.. _mfa.ifhasstate_provider:
provider
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The provider in question
