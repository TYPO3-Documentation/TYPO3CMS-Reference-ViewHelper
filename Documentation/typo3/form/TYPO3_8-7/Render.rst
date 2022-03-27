.. include:: /Includes.rst.txt

.. _typo3-form-render:

======
render
======


Main Entry Point to render a Form into a Fluid Template

Usage
=====

::

   {namespace formvh=TYPO3\CMS\Form\ViewHelpers}
   <formvh:render factoryClass="NameOfYourCustomFactoryClass" />


Scope: frontend

Arguments
=========


.. _render_persistenceidentifier:
persistenceIdentifier
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The persistence identifier for the form.

.. _render_factoryclass:
factoryClass
------------

:aspect:`DataType`
   string

:aspect:`Default`
   'TYPO3\\CMS\\Form\\Domain\\Factory\\ArrayFormFactory'

:aspect:`Required`
   true
:aspect:`Description`
   The fully qualified class name of the factory

.. _render_prototypename:
prototypeName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of the prototype to use

.. _render_overrideconfiguration:
overrideConfiguration
---------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   true
:aspect:`Description`
   Factory specific configuration
