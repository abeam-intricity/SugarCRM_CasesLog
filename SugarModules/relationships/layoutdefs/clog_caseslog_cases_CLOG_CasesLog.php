<?php
 // created: 2017-01-06 17:40:07
$layout_defs["CLOG_CasesLog"]["subpanel_setup"]['clog_caseslog_cases'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
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
