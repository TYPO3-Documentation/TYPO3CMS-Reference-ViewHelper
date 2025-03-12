:navigation-title: form.submit

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-submit:

========================================
Form.submit ViewHelper `<f:form.submit>`
========================================

..  typo3:viewhelper:: form.submit
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-submit-example:

Examples
========

Defaults
--------

::

   <f:form.submit value="Send Mail" />

Output::

   <input type="submit" />

Dummy content for template preview
----------------------------------

::

   <f:form.submit name="mySubmit" value="Send Mail"><button>dummy button</button></f:form.submit>

Output::

   <input type="submit" name="mySubmit" value="Send Mail" />
