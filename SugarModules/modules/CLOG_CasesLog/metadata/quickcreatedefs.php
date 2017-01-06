<?php
$module_name = 'CLOG_CasesLog';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'log_date',
            'label' => 'LBL_LOG_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'clog_caseslog_users_name',
            'label' => 'LBL_CLOG_CASESLOG_USERS_FROM_USERS_TITLE',
          ),
          1 => 
          array (
            'name' => 'clog_caseslog_cases_name',
            'label' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
