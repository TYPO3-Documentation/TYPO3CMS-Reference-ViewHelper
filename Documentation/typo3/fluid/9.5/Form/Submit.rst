.. include:: ../../../../Includes.txt

===========
form.submit
===========


Creates a submit button.

= Examples =

<code title="Defaults">
<f:form.submit value="Send Mail" />
</code>
<output>
<input type="submit" />
</output>

<code title="Dummy content for template preview">
<f:form.submit name="mySubmit" value="Send Mail"><button>dummy button</button></f:submit>
</code>
<output>
<input type="submit" name="mySubmit" value="Send Mail" />
</output>

Arguments
=========


additionalAttributes (anySimpleType)
------------------------------------


Additional tag attributes. They will be added directly to the resulting HTML tag.

data (anySimpleType)
--------------------


Additional data-* attributes. They will each be added with a &quot;data-&quot; prefix.

name (string)
-------------


Name of input tag

value (anySimpleType)
---------------------


Value of input tag

property (string)
-----------------


Name of Object Property. If used in conjunction with &lt;f:form object=&quot;...&quot;&gt;, &quot;name&quot; and &quot;value&quot; properties will be ignored.

disabled (string)
-----------------


Specifies that the input element should be disabled when the page loads

class (string)
--------------


CSS class(es) for this element

dir (string)
------------


Text direction for this HTML element. Allowed strings: &quot;ltr&quot; (left to right), &quot;rtl&quot; (right to left)

id (string)
-----------


Unique (in this file) identifier for this HTML element.

lang (string)
-------------


Language for this element. Use short names specified in RFC 1766

style (string)
--------------


Individual CSS styles for this element

title (string)
--------------


Tooltip text of element

accesskey (string)
------------------


Keyboard shortcut to access this element

tabindex (integer)
------------------


Specifies the tab order of this element

onclick (string)
----------------


JavaScript evaluated for the onclick event
