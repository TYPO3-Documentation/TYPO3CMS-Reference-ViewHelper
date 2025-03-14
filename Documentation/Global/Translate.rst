:navigation-title: translate

..  include:: /Includes.rst.txt
..  _typo3-fluid-translate:

====================================
Translate ViewHelper `<f:translate>`
====================================

..  typo3:viewhelper:: translate
    :source: ../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-translate-example:

Examples
========

Translate key
-------------

::

   <f:translate key="key1" />

Value of key ``key1`` in the current website language. Alternatively id can
be used instead of key::

   <f:translate id="key1" />

This will output the same as above. If both id and key are set, id will take precedence.

Keep HTML tags
--------------

::

   <f:format.raw><f:translate key="htmlKey" /></f:format.raw>

Value of key ``htmlKey`` in the current website language, no :php:`htmlspecialchars()` applied.

Translate key from custom locallang file
----------------------------------------

::

   <f:translate key="key1" extensionName="MyExt"/>

or

::

   <f:translate key="LLL:EXT:myext/Resources/Private/Language/locallang.xlf:key1" />

Value of key ``key1`` in the current website language.

Inline notation with arguments and default value
------------------------------------------------

::

   {f:translate(key: 'someKey', arguments: {0: 'dog', 1: 'fox'}, default: 'default value')}

Value of key ``someKey`` in the current website language
with the given arguments (``dog`` and ``fox``) assigned for the specified
``%s`` conversions, using `PHP sprintf() notation <https://www.php.net/sprintf>`__ in the
language file::

   <trans-unit id="someKey">
       <source>Some text about a %s and a %s.</source>
   </trans-unit>

The output will be :html:`Some text about a dog and a fox`.

If the key ``someKey`` is not found in the language file, the output is :html:`default value`.

As in PHP's :php:`sprintf()` you can order placeholders (:php:`Second %2$s, first %1$s`)
or use specific types like :php:`A padded number: %'.09d`, returning ``000000123`` for a number
passed as ``123``.
See the `sprintf`_ PHP Documentation for more information on possible formatting.

Inline notation with extension name
-----------------------------------

::

   {f:translate(key: 'someKey', extensionName: 'SomeExtensionName')}

Value of key ``someKey`` in the current website language.
The locallang file of extension "some_extension_name" will be used.

.. _sprintf: https://www.php.net/sprintf
