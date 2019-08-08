.. include:: ../../../../Includes.txt

==========
link.email
==========


Email link view helper.
Generates an email link incorporating TYPO3s spamProtectEmailAddresses-settings.

= Examples

<code title="basic email link">
</code>
<output>
<a href="javascript:linkTo_UnCryptMailto('ocknvq,hqqBdct0vnf');">foo(at)bar.tld</a>
(depending on your spamProtectEmailAddresses-settings)
</output>

<code title="Email link with custom linktext">
</code>
<output>
<a href="javascript:linkTo_UnCryptMailto('ocknvq,hqqBdct0vnf');">some custom content</a>
</output>

-------
Adding a subject and/or body
-------

If you want to add a subject and body, you can simply add `?subject=<f:format.urlencode><f:translate key="somefield" /></f:format.urlencode>&body=<f:format.urlencode><f:translate key="somebody" /></f:format.urlencode>` to your email address, but ensure that `config.spamProtectEmailAddresses` is set to 10.

Arguments
=========


additionalAttributes (anySimpleType)
------------------------------------


Additional tag attributes. They will be added directly to the resulting HTML tag.

data (anySimpleType)
--------------------


Additional data-* attributes. They will each be added with a &quot;data-&quot; prefix.

email (string)
--------------


The email address to be turned into a link

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

name (string)
-------------


Specifies the name of an anchor

rel (string)
------------


Specifies the relationship between the current document and the linked document

rev (string)
------------


Specifies the relationship between the linked document and the current document

target (string)
---------------


Specifies where to open the linked document
