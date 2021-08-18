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

If you want to include a header or footer asset within a plugin, you can use the special sections "HeaderAssets" and "FooterAssets".
These sections are rendered by the ActionController (\TYPO3\CMS\Extbase\Mvc\Controller\ActionController) and provide the ability to include various resources and metadata.
When rendering, `{request}` is available as a template variable in both sections, as is `{arguments}`. This allows you to make decisions based on various request/controller arguments. Note that `{settings}` is also available.

All content you write into these sections will be output in the respective location as is, meaning you must write the entire `<script>` or whichever tag you are writing, including all attributes. You can of course use various Fluid ViewHelpers to resolve extension asset paths.

The feature only applies to ActionController (thus excluding CommandController) and will only attempt to render the section if the view is an instance of `TYPO3Fluid\\Fluid\\View\\TemplateView` (thus including any View in TYPO3 which extends either TemplateView or AbstractTemplateView from TYPO3’s Fluid adapter).

::

    <f:section name="HeaderAssets">
       <link rel="stylesheet" href="typo3conf/ext/my_extension/Resources/Public/Css/myCssFile.css" />
    </f:section>
    <f:section name="FooterAssets">
        <p>© My example copyright note in the footer</p>
        <script src="typo3conf/myExtension/my_extension/Resources/Public/Js/myJsFile.js"></script>
    </f:section>

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
