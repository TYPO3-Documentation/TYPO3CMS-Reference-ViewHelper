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


This ViewHelper has no arguments.
