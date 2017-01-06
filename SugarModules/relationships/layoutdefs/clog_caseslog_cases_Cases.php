<?php
 // created: 2017-01-06 18:53:23
$layout_defs["Cases"]["subpanel_setup"]['clog_caseslog_cases'] = array (
  'order' => 100,
  'module' => 'CLOG_CasesLog',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLOG_CASESLOG_CASES_FROM_CLOG_CASESLOG_TITLE',
  'get_subpanel_data' => 'clog_caseslog_cases',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
