.. include:: ../../../Includes.txt

.. _typo3fluid-fluid-section:

=======
section
=======


A ViewHelper to declare sections in templates for later use with e.g. the ``f:render`` ViewHelper.

Examples
========

Rendering sections
------------------

::

    <f:section name="someSection">This is a section. {foo}</f:section>
    <f:render section="someSection" arguments="{foo: someVariable}" />

Output::

    the content of the section "someSection". The content of the variable {someVariable} will be available in the partial as {foo}

Rendering recursive sections
----------------------------

::

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

Output::

    <ul>
        <li>menu1
            <ul>
                <li>menu1a</li>
                <li>menu1b</li>
            </ul>
        </li>
    [...]
    (depending on the value of {menu})
    
Special sections HeaderAssets/FooterAssets
------------------------------------------

In case you want to add header or footer assets within plugins, you can use the special sections "HeaderAssets" and "FooterAssets".
Those are rendered by the ActionController (\TYPO3\CMS\Extbase\Mvc\Controller\ActionController) and provide the possibilty to add resources, meta data etc. as you like by simply using those two sections as wanted.


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
