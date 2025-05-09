:navigation-title: form.validationResults

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-validationresults:

==============================================================
Form.validationResults ViewHelper `<f:form.validationResults>`
==============================================================

..  typo3:viewhelper:: form.validationResults
    :source: ../../Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  _typo3-fluid-form-validationresults-example:

Examples
========

Output error messages as a list::

   <f:form.validationResults>
      <f:if condition="{validationResults.flattenedErrors}">
         <ul class="errors">
            <f:for each="{validationResults.flattenedErrors}" as="errors" key="propertyPath">
               <li>{propertyPath}
                  <ul>
                     <f:for each="{errors}" as="error">
                        <li>{error.code}: {error}</li>
                     </f:for>
                  </ul>
               </li>
            </f:for>
         </ul>
      </f:if>
   </f:form.validationResults>

Output::

   <ul class="errors">
      <li>1234567890: Validation errors for argument "newBlog"</li>
   </ul>

Output error messages for a single property::

   <f:form.validationResults for="someProperty">
      <f:if condition="{validationResults.flattenedErrors}">
         <ul class="errors">
            <f:for each="{validationResults.errors}" as="error">
               <li>{error.code}: {error}</li>
            </f:for>
         </ul>
      </f:if>
   </f:form.validationResults>

Output::

   <ul class="errors">
     <li>1234567890: Some error message</li>
   </ul>


..  _typo3-fluid-form-validationresults-arguments:

Arguments of f:form.validationResults
=====================================

..  typo3:viewhelper:: form.validationResults
    :source: ../../Global.json
    :display: arguments-only
