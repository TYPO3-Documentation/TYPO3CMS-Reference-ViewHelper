.. include:: /Includes.rst.txt

.. _typo3-fluid-be-security-ifhasrole:

=====================
be.security.ifHasRole
=====================


This view helper implements an ifHasRole/else condition for BE users/groups.

Examples
========

Basic usage::

   <f:be.security.ifHasRole role="Administrator">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) titled "Administrator" (case sensitive)
   </f:be.security.ifHasRole>

Output::

   Everything inside the <f:ifHasRole> tag is being displayed if the logged in BE user belongs to the specified role.

Using the usergroup uid as role identifier::

   <f:be.security.ifHasRole role="1">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) with the uid "1"
   </f:be.security.ifHasRole>

Output::

   Everything inside the <f:ifHasRole> tag is being displayed if the logged in BE user belongs to the specified role.

IfRole / then / else::

   <f:be.security.ifHasRole role="Administrator">
      <f:then>
         This is being shown in case you have the role.
      </f:then>
      <f:else>
         This is being displayed in case you do not have the role.
      </f:else>
   </f:be.security.ifHasRole>

Output::

   Everything inside the "then" tag is displayed if the logged in BE user belongs to the specified role.
   Otherwise, everything inside the "else"-tag is displayed.

Arguments
=========


.. _be.security.ifhasrole_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if met.

.. _be.security.ifhasrole_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _be.security.ifhasrole_condition:
condition
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules

.. _be.security.ifhasrole_role:
role
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The usergroup (either the usergroup uid or its title).
