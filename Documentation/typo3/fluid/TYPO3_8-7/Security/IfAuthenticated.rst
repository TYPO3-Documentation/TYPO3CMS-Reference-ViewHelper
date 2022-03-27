.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifauthenticated:

========================
security.ifAuthenticated
========================


This view helper implements an ifAuthenticated/else condition for FE users/groups.

Examples
========

Basic usage::

   <f:security.ifAuthenticated>
   This is being shown whenever a FE user is logged in
   </f:security.ifAuthenticated>

Output::

   Everything inside the <f:ifAuthenticated> tag is being displayed if you are authenticated with any FE user account.

IfAuthenticated / then / else::

   <f:security.ifAuthenticated>
      <f:then>
         This is being shown in case you have access.
      </f:then>
      <f:else>
         This is being displayed in case you do not have access.
      </f:else>
   </f:security.ifAuthenticated>

Output::

   Everything inside the "then" tag is displayed if you have access.

Otherwise, everything inside the "else"-tag is displayed.

Arguments
=========


.. _security.ifauthenticated_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if met.

.. _security.ifauthenticated_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _security.ifauthenticated_condition:
condition
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules
