.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout:

============
moduleLayout
============


A ViewHelper for having properly styled backend modules.
It is recommended to use it in Fluid Layouts.
It will render the required HTML for the doc header.
All module specific output and further configuration of the doc header
must be rendered as children of this ViewHelper.

Examples
========

Default::

   <be:moduleLayout>
      <f:render section="content" />
   </be:moduleLayout>

Output::

   <!-- HTML of the backend module -->

Arguments
=========


.. _modulelayout_name:
name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of the module, defaults to the current plugin name, if available

.. _modulelayout_title:
title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title of the module.
