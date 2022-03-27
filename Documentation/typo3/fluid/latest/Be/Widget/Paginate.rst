.. include:: /Includes.rst.txt

.. _typo3-fluid-be-widget-paginate:

==================
be.widget.paginate
==================


This ViewHelper renders a Pagination of objects for the TYPO3 Backend.

Examples
========

Minimum call with required arguments only::

   <f:be.widget.paginate objects="{blogs}" as="paginatedBlogs">
      use {paginatedBlogs} as you used {blogs} before, most certainly inside
      a <f:for> loop.
   </f:be.widget.paginate>

Full example with all configuration options::

   <f:be.widget.paginate objects="{blogs}" as="paginatedBlogs" configuration="{itemsPerPage: 5, insertAbove: 1, insertBelow: 0, recordsLabel: 'MyRecords'}">
      use {paginatedBlogs} as you used {blogs} before, most certainly inside
      a <f:for> loop.
   </f:be.widget.paginate>

The ``recordsLabel`` option can be used to replace the text in "Records 1 - 99" with a custom label.

Performance characteristics
===========================

In the above examples, it looks like ``{blogs}`` contains all Blog objects, thus
you might wonder if all objects were fetched from the database.
However, the blogs are NOT fetched from the database until you actually use them,
so the paginate ViewHelper will adjust the query sent to the database and receive
only the small subset of objects.
So, there is no negative performance overhead in using the Be Paginate Widget.

Arguments
=========


.. _be.widget.paginate_customwidgetid:

customWidgetId
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Extend the widget identifier with a custom widget id

.. _be.widget.paginate_storesession:

storeSession
------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   Store the widgets session (utilizing a cookie).

.. _be.widget.paginate_objects:

objects
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The QueryResult containing all objects.

.. _be.widget.paginate_as:

as
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   As

.. _be.widget.paginate_configuration:

configuration
-------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array (  'itemsPerPage' => 10,  'insertAbove' => false,  'insertBelow' => true,  'maximumNumberOfLinks' => 99,)

:aspect:`Required`
   false
:aspect:`Description`
   Configuration
