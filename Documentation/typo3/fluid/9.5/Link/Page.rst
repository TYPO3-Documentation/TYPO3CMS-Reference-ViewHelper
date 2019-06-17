.. include:: ../../../../Includes.txt

=========
link.page
=========


A view helper for creating links to TYPO3 pages.

= Examples =

<code title="link to the current page">
<f:link.page>page link</f:link.page>
</code>
<output>
<a href="index.php?id=123">page link</f:link.action>
(depending on the current page and your TS configuration)
</output>

<code title="query parameters">
<f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>
</code>
<output>
<a href="index.php?id=1&foo=bar">page link</a>
(depending on your TS configuration)
</output>

<code title="query parameters for extensions">
<f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>
</code>
<output>
<a href="index.php?id=1&extension_key[foo]=bar">page link</a>
(depending on your TS configuration)
</output>

Arguments
=========


additionalAttributes (anySimpleType)
------------------------------------


Additional tag attributes. They will be added directly to the resulting HTML tag.

data (anySimpleType)
--------------------


Additional data-* attributes. They will each be added with a &quot;data-&quot; prefix.

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

target (string)
---------------


Target of link

rel (string)
------------


Specifies the relationship between the current document and the linked document

pageUid (anySimpleType)
-----------------------


Target page. See TypoLink destination

pageType (anySimpleType)
------------------------


Type of the target page. See typolink.parameter

noCache (anySimpleType)
-----------------------


Set this to disable caching for the target page. You should not need this.

noCacheHash (anySimpleType)
---------------------------


Set this to suppress the cHash query parameter created by TypoLink. You should not need this.

section (string)
----------------


The anchor to be added to the URI

linkAccessRestrictedPages (anySimpleType)
-----------------------------------------


If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

additionalParams (anySimpleType)
--------------------------------


Additional query parameters that won&#039;t be prefixed like $arguments (overrule $arguments)

absolute (anySimpleType)
------------------------


If set, the URI of the rendered link is absolute

addQueryString (anySimpleType)
------------------------------


If set, the current query parameters will be kept in the URI

argumentsToBeExcludedFromQueryString (anySimpleType)
----------------------------------------------------


Arguments to be removed from the URI. Only active if $addQueryString = TRUE

addQueryStringMethod (string)
-----------------------------


Set which parameters will be kept. Only active if $addQueryString = TRUE
