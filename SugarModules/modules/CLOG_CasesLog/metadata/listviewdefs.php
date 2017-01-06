<?php
$module_name = 'CLOG_CasesLog';
$listViewDefs [$module_name] = 
array (
  'LOG_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_LOG_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CLOG_CASESLOG_USERS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
    'id' => 'CLOG_CASESLOG_USERSUSERS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CLOG_CASESLOG_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
    'id' => 'CLOG_CASESLOG_CASESCASES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
