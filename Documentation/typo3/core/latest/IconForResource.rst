.. include:: /Includes.rst.txt

.. _typo3-core-iconforresource:

===============
iconForResource
===============


Displays icon for a FAL resource (file or folder means a :php:`TYPO3\CMS\Core\Resource\ResourceInterface`).

Examples
========

Default::

   <core:iconForResource resource="{file.resource}" />

Output::

    <span class="t3js-icon icon icon-size-small icon-state-default icon-mimetypes-text-html" data-identifier="mimetypes-text-html">
        <span class="icon-markup">
            <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-text-html.svg" width="16" height="16">
        </span>
    </span>

Arguments
=========


.. _iconforresource_resource:
resource
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Resource

.. _iconforresource_size:
size
----

:aspect:`DataType`
   string

:aspect:`Default`
   'small'

:aspect:`Required`
   false
:aspect:`Description`
   The icon size

.. _iconforresource_overlay:
overlay
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Overlay identifier

.. _iconforresource_options:
options
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   An associative array with additional options

.. _iconforresource_alternativemarkupidentifier:
alternativeMarkupIdentifier
---------------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Alternative markup identifier
