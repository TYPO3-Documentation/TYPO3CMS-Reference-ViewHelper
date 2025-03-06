:navigation-title: constant

..  include:: /Includes.rst.txt

..  _typo3fluid-fluid-constant:

==================================
Constant ViewHelper `<f:constant>`
==================================

..  note::
    The constant ViewHelper can display **PHP constants** only. It cannot be
    used to display `TypoScript Constants <https://docs.typo3.org/permalink/t3tsref:typoscript-syntax-constants>`_
    or `Site settings <https://docs.typo3.org/permalink/t3coreapi:sitehandling-settings>`_.

..  typo3:viewhelper:: constant
    :source: ../Global.json
    :display: tags, description, gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3fluid-fluid-constant-global:

Displaying global PHP constants in Fluid
========================================

You can display `global PHP constants <https://www.php.net/manual/en/reserved.constants.php>`_
using this ViewHelper

..  code-block:: html

    Maximal possible number: {f:constant(name: 'PHP_INT_MAX')}

    <f:if condition="{f:constant(name: 'PHP_MAJOR_VERSION')} >= 8">
        Using PHP 8.0 or greater
    </f:if>

..  _typo3fluid-fluid-constant-class:

Get class constant
==================

You can display any **public** class constant from a class within TYPO3,
for example constants from :php:`\TYPO3\CMS\Core\Information\Typo3Information`:

..  code-block:: html

    Join the <f:link.external uri="{f:constant(name: '\TYPO3\CMS\Core\Information\Typo3Information::URL_COMMUNITY')}">
        TYPO3 Community
    </f:link.external>!

..  _typo3fluid-fluid-constant-enum:

Using enum cases in Fluid
=========================

Cases of enums are objects and not strings or integers. They cannot be directly
output in the template. You can however save them into a variable and
then use their value. For example you can use values of the enum cases in
:php:`\TYPO3\CMS\Core\Resource\FileType` to compare them with a value of your
object:

..  code-block:: html

    <f:variable name="imageType"><f:constant name="\TYPO3\CMS\Core\Resource\FileType::IMAGE"/></f:variable>
    The image case has the value {imageType.value} and name {imageType.name}:
    <f:if condition="{myFile.type} === {imageType.value}">
        This file is an image!
    </f:if>

..  _typo3fluid-fluid-constant-arguments:

Arguments
=========

..  typo3:viewhelper:: constant
    :source: ../Global.json
    :display: arguments-only
