:navigation-title: flashMessages

..  include:: /Includes.rst.txt
..  _typo3-fluid-flashmessages:

============================================
FlashMessages ViewHelper `<f:flashMessages>`
============================================

This ViewHelper renders the `Flash messages <https://docs.typo3.org/permalink/t3coreapi:flash-messages-api>`_
(if there are any) as an unsorted list.

..  figure:: /Images/FlashMessageExamples.png
    :alt: Screenshot of two flash message one with success and one with warning severity

    Example for the output of flash messages in an Extbase plugin

..  typo3:viewhelper:: flashMessages
    :display: tags,gitHubLink
    :source: ../Global.json
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-flashmessages-example-simple:

Simple flash message output (Extbase only)
==========================================

You can use the following tag within any Extbase template:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Something/DoSomething.html

    <f:flashMessages />

It displays the flash messages with a standard bootstrap compatible layout.

..  _typo3-fluid-flashmessages-extbase:

Using and displaying flash messages in Extbase
==============================================

Within an Extbase `controller <https://docs.typo3.org/permalink/t3coreapi:extbase-action-controller>`_
(extending :php-short:`\TYPO3\CMS\Extbase\Mvc\Controller\ActionController`) you
can call method `addFlashMessage()` to add flash messages to the message queue:

..  literalinclude:: _FlashMessages/_MyController.php
    :caption: packages/my_extension/Classes/Controller/MyController.php

They will be displayed when a `<f:flashMessages>` is displayed within any action
of the same controller:

..  literalinclude:: _FlashMessages/_DemonstrateFlashMessages.html
    :caption: packages/my_extension/Resources/Private/Templates/My/DemonstrateFlashMessages.html

If you want to display the flash messages in any place outside of the controller
you can use the identifier `extbase.flashmessages.<pluginNamespace>`, for example:

..  literalinclude:: _FlashMessages/_SomeForm.html
    :caption: packages/my_extension/Resources/Private/Templates/Other/SomeForm.html

..  _typo3-fluid-flashmessages-queueIdentifier:

Using a specific queue
======================

When you use the FlashMessages ViewHelper outside of the Extbase context,
supplying the :ref:`queueIdentifier <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-flashmessagesviewhelper-queueidentifier>`
is mandatory.

When you add a message manually to the queue, you can specify an arbitrary
identifier:

..  code-block:: php

    // private \TYPO3\CMS\Core\Messaging\FlashMessageService flashMessageService;

    $messageQueue = $this->flashMessageService->getMessageQueueByIdentifier('myQueue');

You can then display messages of only this one queue using the identifier:

..  code-block:: html

    <f:flashMessages queueIdentifier="myQueue" />

..  tip::
    In Extbase controllers the `queueIdentifier` is
    `extbase.flashmessages.<pluginNamespace>` by default, see also
    `Using and displaying flash messages in Extbase <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-flashmessages-extbase>`_.

..  _typo3-fluid-flashmessages-example:
..  _typo3-fluid-flashmessages-example-custom:

Output flash messages with a custom layout
==========================================

Using the argument :ref:`as <t3viewhelper:viewhelper-argument-typo3-cms-fluid-viewhelpers-flashmessagesviewhelper-as>`
you can receive all flash messages in a variable and then handle the rendering
yourself within the `<f:flashMessages>` tag:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Something/DoSomething.html

    <f:flashMessages as="flashMessages">
      <dl class="messages">
        <f:for each="{flashMessages}" as="flashMessage">
          <dt>{flashMessage.code}</dt>
          <dd>{flashMessage.message}</dd>
        </f:for>
      </dl>
    </f:flashMessages>

..  _typo3-fluid-flashmessages-arguments:

Argument of the FlashMessages ViewHelper
========================================

..  typo3:viewhelper:: flashMessages
    :display: arguments-only
    :source: ../Global.json
