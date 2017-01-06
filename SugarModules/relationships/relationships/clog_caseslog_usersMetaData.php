<?php
// created: 2017-01-06 18:53:23
$dictionary["clog_caseslog_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'clog_caseslog_users' => 
    array (
      'lhs_module' => 'CLOG_CasesLog',
      'lhs_table' => 'clog_caseslog',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clog_caseslog_users_c',
      'join_key_lhs' => 'clog_caseslog_usersclog_caseslog_ida',
      'join_key_rhs' => 'clog_caseslog_usersusers_idb',
    ),
  ),
  'table' => 'clog_caseslog_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'clog_caseslog_usersclog_caseslog_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'clog_caseslog_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clog_caseslog_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clog_caseslog_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clog_caseslog_usersclog_caseslog_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clog_caseslog_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clog_caseslog_usersusers_idb',
      ),
    ),
  ),
);