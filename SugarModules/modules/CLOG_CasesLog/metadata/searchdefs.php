<?php
$module_name = 'CLOG_CasesLog';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'log_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_LOG_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'log_date',
      ),
      'clog_caseslog_users_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
        'id' => 'CLOG_CASESLOG_USERSUSERS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'clog_caseslog_users_name',
      ),
      'clog_caseslog_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
        'id' => 'CLOG_CASESLOG_CASESCASES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'clog_caseslog_cases_name',
      ),
    ),
    'advanced_search' => 
    array (
      'log_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_LOG_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'log_date',
      ),
      'clog_caseslog_users_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CLOG_CASESLOG_USERSUSERS_IDA',
        'name' => 'clog_caseslog_users_name',
      ),
      'clog_caseslog_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CLOG_CASESLOG_CASESCASES_IDA',
        'name' => 'clog_caseslog_cases_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
