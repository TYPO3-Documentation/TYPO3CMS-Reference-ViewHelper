.. include:: /Includes.rst.txt

.. _typo3-fluid-widget-paginate:

===============
widget.paginate
===============


This ViewHelper renders a Pagination of objects.

Examples
========

Required arguments
------------------

::

   <f:widget.paginate objects="{blogs}" as="paginatedBlogs">
      use {paginatedBlogs} as you used {blogs} before, most certainly inside
      a <f:for> loop.
   </f:widget.paginate>

Full configuration
------------------

::

   <f:widget.paginate objects="{blogs}" as="paginatedBlogs" configuration="{itemsPerPage: 5, insertAbove: 1, insertBelow: 0, maximumNumberOfLinks: 10}">
      use {paginatedBlogs} as you used {blogs} before, most certainly inside
      a <f:for> loop.
   </f:widget.paginate>

Performance characteristics
===========================

In the above examples, it looks like {blogs} contains all Blog objects, thus
you might wonder if all objects were fetched from the database.
However, the blogs are NOT fetched from the database until you actually use them,
so the paginate ViewHelper will adjust the query sent to the database and receive
only the small subset of objects.
So, there is no negative performance overhead in using the Paginate Widget.

Arguments
=========


.. _widget.paginate_customwidgetid:
customWidgetId
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Extend the widget identifier with a custom widget id

.. _widget.paginate_objects:
objects
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Object

.. _widget.paginate_as:
as
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   As

.. _widget.paginate_configuration:
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
