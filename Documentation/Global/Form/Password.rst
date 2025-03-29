:navigation-title: form.password

..  include:: /Includes.rst.txt
..  _typo3-fluid-form-password:

=============================================
Form.password ViewHelper `<f:form.password>`
=============================================

..  typo3:viewhelper:: form.password
    :source: /Global.json
    :display: tags,description,gitHubLink
    :noindex:

..  warning::
    Password fields should never be prefilled with sensitive data.
    **Always** use secure handling on the server side to hash and verify passwords.
    **Never** persist or display passwords as plain text. See also
    `Excursion: Validation and hashing of password fields <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-password-example-validation>`_.

..  contents:: Table of contents

..  _typo3-fluid-form-password-example-basic:

A basic password field
======================

The simplest usage sets a name and renders a password input:

..  tabs::

    ..  group-tab:: Fluid

        ..  literalinclude:: _codesnippets/_PasswordFormBasic.html
            :caption: Resources/Private/Templates/User/LoginForm.html

    ..  group-tab:: Output

        ..  code-block:: html

            <input type="password" name="myPassword" value="" />

..  _typo3-fluid-form-password-example-model:

Binding to a model property
===========================

You can bind the password field to a property in an Extbase model.
This requires the form to define the `object` and `objectName` as well.

..  literalinclude:: _codesnippets/_PasswordFormBound.html
    :caption: Resources/Private/Templates/User/RegisterForm.html

..  _typo3-fluid-form-password-example-validation:

Excursion: Validation and hashing of password fields
====================================================

A password should be validated against the
`Password policy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
and **must** always be hashed before saving. **Never** save a plain text
password to the database.

..  tabs::

    ..  group-tab:: Model

        ..  literalinclude:: _codesnippets/_UserModel.php
            :caption: Classes/Domain/Model/User.php

    ..  group-tab:: Controller

        ..  literalinclude:: _codesnippets/_UserController.php
            :caption: Classes/Controller/UserController.php

..  seealso::

    *   `Password policies <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    *   `Password hashing <https://docs.typo3.org/permalink/t3coreapi:password-hashing>`_

..  _typo3-fluid-form-password-example-attributes:

ARIA and data attributes
========================

You can pass `aria-*` and `data-*` attributes as arrays to the `aria` and `data`
arguments for accessibility and JavaScript validation support.

..  code-block:: html

    <f:form.password property="password"
                     aria="{required: 'true'}"
                     data="{toggle: 'password'}" />

..  _typo3-fluid-form-password-arguments:

Arguments
=========

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: form.password
    :source: /Global.json
    :display: arguments-only
