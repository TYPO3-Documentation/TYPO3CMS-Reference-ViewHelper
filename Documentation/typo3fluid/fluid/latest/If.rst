.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-if:

==
if
==


This view helper implements an if/else condition.

**Conditions:**

As a condition is a boolean value, you can just use a boolean argument.
Alternatively, you can write a boolean expression there.
Boolean expressions have the following form:
XX Comparator YY
Comparator is one of: ==, !=, <, <=, >, >= and %
The % operator converts the result of the % operation to boolean.

XX and YY can be one of:
- number
- Object Accessor
- Array
- a ViewHelper
- string

::

  <f:if condition="{rank} > 100">
    Will be shown if rank is > 100
  </f:if>
  <f:if condition="{rank} % 2">
    Will be shown if rank % 2 != 0.
  </f:if>
  <f:if condition="{rank} == {k:bar()}">
    Checks if rank is equal to the result of the ViewHelper "k:bar"
  </f:if>
  <f:if condition="{foo.bar} == 'stringToCompare'">
    Will result in true if {foo.bar}'s represented value equals 'stringToCompare'.
  </f:if>

= Examples =

<code title="Basic usage">
<f:if condition="somecondition">
  This is being shown in case the condition matches
</f:if>
</code>
<output>
Everything inside the <f:if> tag is being displayed if the condition evaluates to TRUE.
</output>

<code title="If / then / else">
<f:if condition="somecondition">
  <f:then>
    This is being shown in case the condition matches.
  </f:then>
  <f:else>
    This is being displayed in case the condition evaluates to FALSE.
  </f:else>
</f:if>
</code>
<output>
Everything inside the "then" tag is displayed if the condition evaluates to TRUE.
Otherwise, everything inside the "else"-tag is displayed.
</output>

<code title="inline notation">
{f:if(condition: someCondition, then: 'condition is met', else: 'condition is not met')}
</code>
<output>
The value of the "then" attribute is displayed if the condition evaluates to TRUE.
Otherwise, everything the value of the "else"-attribute is displayed.
</output>

Arguments
=========


.. _if_then:
then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if met.

.. _if_else:
else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _if_condition:
condition
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules
