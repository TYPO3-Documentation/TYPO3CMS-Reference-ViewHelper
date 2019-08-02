.. include:: ../../../Includes.txt

====
else
====


Else-Branch of a condition. Only has an effect inside of `<f:if>`. See the If-ViewHelper for documentation.

Examples
========

::
  <f:if condition="{someCondition}">
    <f:else>
      Condition is FALSE
    </f:else>
  </f:if>


Everything inside the `f:else` tag is displayed if the condition evaluates to FALSE.
Otherwise nothing is outputted in this example.

If you specify an `if` argument, you can define one or multiple "else-if" cases.

::
  <f:if condition="{value} == 1">
    <f:then>Value is ONE.</f:then>
    <f:else if="{value} == 2">Value is TWO.</f:else>
    <f:else>Value is neither ONE or TWO.</f:else>
  </f:if>


Arguments
=========


if (boolean)
------------


Condition expression conforming to Fluid boolean rules
