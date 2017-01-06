<?php
// created: 2017-01-06 18:53:24
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_cases"] = array (
  'name' => 'clog_caseslog_cases',
  'type' => 'link',
  'relationship' => 'clog_caseslog_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
  'id_name' => 'clog_caseslog_casescases_ida',
);
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_cases_name"] = array (
  'name' => 'clog_caseslog_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLOG_CASESLOG_CASES_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'clog_caseslog_casescases_ida',
  'link' => 'clog_caseslog_cases',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["CLOG_CasesLog"]["fields"]["clog_caseslog_casescases_ida"] = array (
  'name' => 'clog_caseslog_casescases_ida',
  'type' => 'link',
  'relationship' => 'clog_caseslog_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CLOG_CASESLOG_CASES_FROM_CLOG_CASESLOG_TITLE',
);
