.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifhasrole:

==================
security.ifHasRole
==================


This view helper implements an ifHasRole/else condition for FE users/groups.

Examples
========

Basic usage::

   <f:security.ifHasRole role="Administrator">
      This is being shown in case the current FE user belongs to a FE usergroup (aka role) titled "Administrator" (case sensitive)
   </f:security.ifHasRole>

Output::

   Everything inside the <f:ifHasRole> tag is being displayed if the logged in FE user belongs to the specified role.

Using the usergroup uid as role identifier::

   <f:security.ifHasRole role="1">
      This is being shown in case the current FE user belongs to a FE usergroup (aka role) with the uid "1"
   </f:security.ifHasRole>

Output::

   Everything inside the <f:ifHasRole> tag is being displayed if the logged in FE user belongs to the specified role.

IfRole / then / else::

   <f:security.ifHasRole role="Administrator">
      <f:then>
         This is being shown in case you have the role.
      </f:then>
      <f:else>
         This is being displayed in case you do not have the role.
      </f:else>
   </f:security.ifHasRole>

Output::

   Everything inside the "then" tag is displayed if the logged in FE user belongs to the specified role.

Otherwise, everything inside the "else"-tag is displayed.

Arguments
=========


.. _security.ifhasrole_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if met.

.. _security.ifhasrole_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _security.ifhasrole_condition:
condition
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules

.. _security.ifhasrole_role:
role
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The usergroup (either the usergroup uid or its title).
