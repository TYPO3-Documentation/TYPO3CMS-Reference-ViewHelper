.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-section:

=======
section
=======


A ViewHelper to declare sections in templates for later use with e.g. the RenderViewHelper.

= Examples =

<code title="Rendering sections">
<f:section name="someSection">This is a section. {foo}</f:section>
<f:render section="someSection" arguments="{foo: someVariable}" />
</code>
<output>
the content of the section "someSection". The content of the variable {someVariable} will be available in the partial as {foo}
</output>

<code title="Rendering recursive sections">
<f:section name="mySection">
 <ul>
   <f:for each="{myMenu}" as="menuItem">
     <li>
       {menuItem.text}
       <f:if condition="{menuItem.subItems}">
         <f:render section="mySection" arguments="{myMenu: menuItem.subItems}" />
       </f:if>
     </li>
   </f:for>
 </ul>
</f:section>
<f:render section="mySection" arguments="{myMenu: menu}" />
</code>
<output>
<ul>
  <li>menu1
    <ul>
      <li>menu1a</li>
      <li>menu1b</li>
    </ul>
  </li>
[...]
(depending on the value of {menu})
</output>

Arguments
=========


.. _section_name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of the section
