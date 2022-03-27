.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-spaceless:

=========
spaceless
=========


Space Removal ViewHelper

Removes redundant spaces between HTML tags while
preserving the whitespace that may be inside HTML
tags. Trims the final result before output.

Heavily inspired by Twig's corresponding node type.

Usage of f:spaceless::

   <f:spaceless>
   <div>
      <div>
         <div>text

   text</div>
      </div>
   </div>
Output::

   <div><div><div>text

   text</div></div></div>

Arguments
=========


This ViewHelper has no arguments.
