:navigation-title: flashMessages

..  include:: /Includes.rst.txt
..  _typo3-fluid-flashmessages:

============================================
FlashMessages ViewHelper `<f:flashMessages>`
============================================

..  typo3:viewhelper:: flashMessages
    :display: tags,description,gitHubLink,arguments
    :source: ../Global.json

..  _typo3-fluid-flashmessages-example:

Examples
========

Simple
------

::

   <f:flashMessages />

A list of flash messages.

TYPO3 core style
----------------

::

   <f:flashMessages />

Output::

   <div class="typo3-messages">
      <div class="alert alert-info">
         <div class="alert-inner">
            <div class="alert-icon">
               <span class="icon-emphasized">
                  <span class="t3js-icon icon icon-size-small icon-state-default icon-actions-info" data-identifier="actions-info">
                     <span class="icon-markup">
                        <svg class="icon-color"><use xlink:href="/typo3/sysext/core/Resources/Public/Icons/T3Icons/sprites/actions.svg#actions-info"></use></svg>
                     </span>
                  </span>
               </span>
            </div>
            <div class="alert-content">
               <div class="alert-title">Info - Title for Info message</div>
               <p class="alert-message">Message text here.</p>
            </div>
         </div>
      </div>
   </div>

Output flash messages as a description list
-------------------------------------------

::

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

Using a specific queue
----------------------

::

   <f:flashMessages queueIdentifier="myQueue" />
