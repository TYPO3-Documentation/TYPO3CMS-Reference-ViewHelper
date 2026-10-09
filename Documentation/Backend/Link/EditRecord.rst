:navigation-title: link.editRecord

..  include:: /Includes.rst.txt

..  _typo3-backend-link-editrecord:

=================================================
Link.editRecord ViewHelper `<be:link.editRecord>`
=================================================

..  versionadded:: 14.0
    Argument :ref:`module <t3viewhelper:viewhelper-argument-typo3-cms-backend-viewhelpers-link-editrecordviewhelper-module>`
    has been added to explicitly define the backend module context used when
    opening the FormEngine to edit or create a record.

..  include:: /Backend/_Includes/_Namespace.rst.txt

..  typo3:viewhelper:: link.editRecord
    :source: ../../Backend.json
    :display: tags,description,gitHubLink
    :noindex:

..  _typo3-backend-link-editrecord-contextual:

Edit a record in the contextual editing sheet
=============================================

..  versionadded:: 14.3
    :changelog: important-110307-1753690555

    The `contextual` argument has been added.

With `contextual="true"`, the ViewHelper opens the record in the same
contextual editing sheet that the :guilabel:`Layout` module uses, instead
of loading the full editing form in the content frame:

..  code-block:: html
    :caption: packages/my_extension/Resources/Private/Templates/Backend/List.fluid.html

    <be:link.editRecord
        uid="{record.uid}"
        table="pages"
        fields="title,subtitle"
        contextual="true"
        class="btn btn-default"
    >
        Edit page properties
    </be:link.editRecord>

The ViewHelper then renders a
`<typo3-backend-contextual-record-edit-trigger>` element instead of a link,
and loads the JavaScript module of this element. A backend user can switch
off the option :guilabel:`Use quick editing for records in the Layout module`
in their user settings. The element then opens the full editing form in the
content frame, like the link without `contextual`.

..  _typo3-backend-link-editrecord-arguments:

Arguments of the `<be:link.editRecord>` ViewHelper
==================================================

..  include:: /_Includes/_ArbitraryArguments.rst.txt

..  typo3:viewhelper:: link.editRecord
    :source: ../../Backend.json
    :display: arguments-only
