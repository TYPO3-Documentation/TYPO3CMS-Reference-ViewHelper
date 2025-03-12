:navigation-title: be.tableList

..  include:: /Includes.rst.txt
..  _typo3-fluid-be-tablelist:

==========================================
Be.tableList ViewHelper `<f:be.tableList>`
==========================================

..  typo3:viewhelper:: be.tableList
    :source: ../../Global.json
    :display: tags,description,gitHubLink,arguments

..  _typo3-fluid-be-tablelist-example:

Examples
========

Minimal::

   <f:be.tableList tableName="fe_users" />

List of all "Website user" records stored in the configured storage PID.
Records will be editable, if the current backend user has got edit rights for the table ``fe_users``.

Only the title column (username) will be shown.

Context menu is active.

Full::

   <f:be.tableList tableName="fe_users" fieldList="{0: 'name', 1: 'email'}"
       storagePid="1"
       levels="2"
       filter="foo"
       recordsPerPage="10"
       sortField="name"
       sortDescending="true"
       readOnly="true"
       enableClickMenu="false"
       enableControlPanels="true"
       clickTitleMode="info"
       />

List of "Website user" records with a text property of ``foo`` stored on PID ``1`` and two levels down.
Clicking on a username will open the TYPO3 info popup for the respective record
