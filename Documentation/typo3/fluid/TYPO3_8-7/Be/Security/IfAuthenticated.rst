.. include:: /Includes.rst.txt

.. _typo3-fluid-be-security-ifauthenticated:

===========================
be.security.ifAuthenticated
===========================


This view helper implements an ifAuthenticated/else condition for BE users/groups.

Examples
========

Basic usage::

   <f:be.security.ifAuthenticated>
      This is being shown whenever a BE user is logged in
   </f:be.security.ifAuthenticated>

Output::

   Everything inside the <f:be.ifAuthenticated> tag is being displayed if you are authenticated with any BE user account.

IfAuthenticated / then / else::

   <f:be.security.ifAuthenticated>
      <f:then>
         This is being shown in case you have access.
      </f:then>
      <f:else>
         This is being displayed in case you do not have access.
      </f:else>
   </f:be.security.ifAuthenticated>

Output::

   Everything inside the "then" tag is displayed if you have access.
   Otherwise, everything inside the "else"-tag is displayed.

Arguments
=========


.. _be.security.ifauthenticated_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if met.

.. _be.security.ifauthenticated_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _be.security.ifauthenticated_condition:
condition
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules
