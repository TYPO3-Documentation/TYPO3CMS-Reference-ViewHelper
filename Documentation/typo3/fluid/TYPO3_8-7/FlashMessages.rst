.. include:: /Includes.rst.txt

.. _typo3-fluid-flashmessages:

=============
flashMessages
=============


View helper which renders the flash messages (if there are any) as an unsorted list.

In case you need custom Flash Message HTML output, please write your own ViewHelper for the moment.


Examples
========

Simple::

   <f:flashMessages />

Output::

   A list of flash messages.

TYPO3 core style::

   <f:flashMessages />

Output::

   <div class="typo3-messages">
      <div class="alert alert-info">
         <div class="media">
               <div class="media-left">
                  <span class="fa-stack fa-lg">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-info fa-stack-1x"></i>
                  </span>
               </div>
               <div class="media-body">
                  <h4 class="alert-title">Info - Title for Info message</h4>
                  <p class="alert-message">Message text here.</p>
               </div>
         </div>
      </div>
   </div>

Output flash messages as a description list::

   <f:flashMessages as="flashMessages">
      <dl class="messages">
      <f:for each="{flashMessages}" as="flashMessage">
         <dt>{flashMessage.code}</dt>
         <dd>{flashMessage.message}</dd>
      </f:for>
      </dl>
   </f:flashMessages>

Output::

   <dl class="messages">
      <dt>1013</dt>
      <dd>Some Warning Message.</dd>
   </dl>

Using a specific queue::

   <f:flashMessages queueIdentifier="myQueue" />

Arguments
=========


.. _flashmessages_queueidentifier:
queueIdentifier
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Flash-message queue to use

.. _flashmessages_as:
as
--

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The name of the current flashMessage variable for rendering inside
