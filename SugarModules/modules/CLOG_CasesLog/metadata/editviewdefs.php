<?php
$module_name = 'CLOG_CasesLog';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
          ),
          1 => 
          array (
            'name' => 'clog_caseslog_cases_name',
          ),
        ),
      ),
    ),
  ),
);
?>
