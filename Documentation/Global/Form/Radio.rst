:navigation-title: form.radio

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-radio:

======================================
Form.radio ViewHelper `<f:form.radio>`
======================================

..  typo3:viewhelper:: form.radio
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-form-radio-example:

Examples
========

Simple
------

::

   <f:form.radio name="myRadioButton" value="someValue" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" />

Preselect
---------

::

   <f:form.radio name="myRadioButton" value="someValue" checked="{object.value} == 5" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" checked="checked" />

Depending on bound ``object`` to surrounding :ref:`f:form <typo3-fluid-form>`.

Bind to object property
-----------------------

::

   <f:form.radio property="newsletter" value="1" /> yes
   <f:form.radio property="newsletter" value="0" /> no

Output::

   <input type="radio" name="user[newsletter]" value="1" checked="checked" /> yes
   <input type="radio" name="user[newsletter]" value="0" /> no

Depending on property ``newsletter``.
