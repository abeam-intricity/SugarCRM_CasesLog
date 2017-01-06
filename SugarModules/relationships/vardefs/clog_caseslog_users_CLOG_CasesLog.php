<?php
// created: 2017-01-06 18:53:24
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_users"] = array (
  'name' => 'clog_caseslog_users',
  'type' => 'link',
  'relationship' => 'clog_caseslog_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
  'id_name' => 'clog_caseslog_usersusers_ida',
);
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_users_name"] = array (
  'name' => 'clog_caseslog_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'clog_caseslog_usersusers_ida',
  'link' => 'clog_caseslog_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_usersusers_ida"] = array (
  'name' => 'clog_caseslog_usersusers_ida',
  'type' => 'link',
  'relationship' => 'clog_caseslog_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CLOG_CASESLOG_USERS_FROM_CLOG_CASESLOG_TITLE',
);
