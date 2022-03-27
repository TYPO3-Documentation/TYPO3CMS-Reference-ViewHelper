.. include:: /Includes.rst.txt

.. _typo3-fluid-render:

======
render
======


Class RenderViewHelper

Arguments
=========


.. _render_section:

section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Section to render - combine with partial to render section in partial

.. _render_partial:

partial
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Partial to render, with or without section

.. _render_delegate:

delegate
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Optional PHP class name of a permanent, included-in-app ParsedTemplateInterface implementation to override partial/section

.. _render_renderable:

renderable
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Instance of a RenderableInterface implementation to be rendered

.. _render_arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Array of variables to be transferred. Use {_all} for all variables

.. _render_optional:

optional
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, considers the *section* optional. Partial never is.

.. _render_default:

default
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value (usually string) to be displayed if the section or partial does not exist

.. _render_contentas:

contentAs
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If used, renders the child content and adds it as a template variable with this name for use in the partial/section

.. _render_debug:

debug
-----

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If true, the admin panel shows debug information if activated,
