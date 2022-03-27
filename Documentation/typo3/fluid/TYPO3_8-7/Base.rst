.. include:: /Includes.rst.txt

.. _typo3-fluid-base:

====
base
====


View helper which creates a <base href="..."></base> tag. The Base URI is taken from the
current request.
In TYPO3 Flow, you should always include this ViewHelper to make the links work.

Examples
========

Example::

   <f:base />

Output::

   <base href="https://example.org/" />

(depending on your domain)

Arguments
=========


This ViewHelper has no arguments.
