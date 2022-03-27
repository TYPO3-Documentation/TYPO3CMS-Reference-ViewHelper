.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-cache-disable:

=============
cache.disable
=============


ViewHelper to disable template compiling

Inserting this ViewHelper at any point in the template,
including inside conditions which do not get rendered,
will forcibly disable the caching/compiling of the full
template file to a PHP class.

Use this if for whatever reason your platform is unable
to create or load PHP classes (for example on read-only
file systems or when using an incompatible default cache
backend).

Passes through anything you place inside the ViewHelper,
so can safely be used as container tag, as self-closing
or with inline syntax - all with the same result.

= Examples =

<code title="Self-closing">
<f:cache.disable />
</code>

<code title="Inline mode">
{f:cache.disable()}
</code>

<code title="Container tag">
<f:cache.disable>
   Some output or Fluid code
</f:cache.disble>
Additional output is also not compilable because of the ViewHelper
</code>

Arguments
=========


This ViewHelper has no arguments.
