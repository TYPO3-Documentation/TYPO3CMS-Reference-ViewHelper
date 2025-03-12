:navigation-title: form.checkbox

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-checkbox:

============================================
Form.checkbox ViewHelper `<f:form.checkbox>`
============================================

..  typo3:viewhelper:: form.checkbox
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-checkbox-example:

Examples
========

Simple one
----------

::

   <f:form.checkbox name="myCheckBox" value="someValue" />

Output::

   <input type="checkbox" name="myCheckBox" value="someValue" />

Preselect
---------

::

   <f:form.checkbox name="myCheckBox" value="someValue" checked="{object.value} == 5" />

Output::

   <input type="checkbox" name="myCheckBox" value="someValue" checked="checked" />

Depending on bound ``object`` to surrounding :ref:`f:form <typo3-fluid-form>`.

Bind to object property
-----------------------

::

   <f:form.checkbox property="interests" value="TYPO3" multiple="1" />

Output::

   <input type="checkbox" name="user[interests][]" value="TYPO3" checked="checked" />

Depending on property ``interests``.
