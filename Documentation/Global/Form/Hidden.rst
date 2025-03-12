:navigation-title: form.hidden

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-hidden:

========================================
Form.hidden ViewHelper `<f:form.hidden>`
========================================

..  typo3:viewhelper:: form.hidden
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-hidden-example:

Examples
========

Example::

   <f:form.hidden name="myHiddenValue" value="42" />

Output::

   <input type="hidden" name="myHiddenValue" value="42" />

You can also use the "property" attribute if you have bound an object to the form.
See :ref:`<f:form> <typo3-fluid-form>` for more documentation.
