.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-debug:

=====
debug
=====


inline notation and custom title::

   {object -> f:debug(title: 'Custom title')}

Output::

   all properties of {object} nicely highlighted (with custom title)

only output the type::

   {object -> f:debug(typeOnly: true)}

Output::

   the type or class name of {object}

Note: This view helper is only meant to be used during development

Arguments
=========


.. _debug_typeonly:
typeOnly
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   If TRUE, debugs only the type of variables

.. _debug_levels:
levels
------

:aspect:`DataType`
   integer

:aspect:`Default`
   5

:aspect:`Required`
   true
:aspect:`Description`
   Levels to render when rendering nested objects/arrays

.. _debug_html:
html
----

:aspect:`DataType`
   boolean

:aspect:`Required`
   true
:aspect:`Description`
   Render HTML. If FALSE, output is indented plaintext
