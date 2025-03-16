:navigation-title: form

..  include:: /Includes.rst.txt
..  _typo3-fluid-form:

==========================
Form ViewHelper `<f:form>`
==========================

..  typo3:viewhelper:: form
    :source: /Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-example:

Examples
========

A complex form with a specified encoding type
---------------------------------------------

Form with enctype set::

   <f:form action=".." controller="..." package="..." enctype="multipart/form-data">...</f:form>

A Form which should render a domain object
------------------------------------------

Binding a domain object to a form::

   <f:form action="..." name="customer" object="{customer}">
      <f:form.hidden property="id" />
      <f:form.textarea property="name" />
   </f:form>

This automatically inserts the value of ``{customer.name}`` inside the
textarea and adjusts the name of the textarea accordingly.


..  _typo3-fluid-form-viewhelpers:

ViewHelpers to be used within the form ViewHelper
=================================================

..  toctree::
    :titlesonly:
    :glob:

    */Index
    *
