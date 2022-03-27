.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-switch:

======
switch
======


Switch view helper which can be used to render content depending on a value or expression.
Implements what a basic switch()-PHP-method does.

An optional default case can be specified which is rendered if none of the "f:case" conditions matches.

= Examples =

<code title="Simple Switch statement">
<f:switch expression="{person.gender}">
  <f:case value="male">Mr.</f:case>
  <f:case value="female">Mrs.</f:case>
  <f:defaultCase>Mr. / Mrs.</f:defaultCase>
</f:switch>
</code>
<output>
"Mr.", "Mrs." or "Mr. / Mrs." (depending on the value of {person.gender})
</output>

Note: Using this view helper can be a sign of weak architecture. If you end up using it extensively
you might want to consider restructuring your controllers/actions and/or use partials and sections.
E.g. the above example could be achieved with <f:render partial="title.{person.gender}" /> and the partials
"title.male.html", "title.female.html", ...
Depending on the scenario this can be easier to extend and possibly contains less duplication.

Arguments
=========


.. _switch_expression:
expression
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Expression to switch
