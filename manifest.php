<?php
$manifest = array (
  'name' => 'CasesLog',
  'description' => 'Logging which records were modified by a user and when.',
  'author' => 'abeam@intricity.com',
  'key' => 'CLOG',
  'version' => '1.0.0',
  'is_uninstallable' => true,
  'published_date' => '2017-01-06 00:00:00',
  'type' => 'module',
  'acceptable_sugar_versions' => array(
       'exact_matches' => array(),
       'regex_matches' => array(
      '[6-7]\\.[0-9]\\.[0-9][0-9]?$',
      '[6-7]\\.[0-9]\\.[0-9]\\.[0-9][0-9]?$',
    ),
  ),
  'acceptable_sugar_flavors' => array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
  'readme' => '',
  'icon' => '',
  'remove_tables' => 'prompt',
);

$installdefs = array (
  'id' => 'CasesLog',
  'beans' => array (
    0 => array (
      'module' => 'CLOG_CasesLog',
      'class' => 'CLOG_CasesLog',
      'path' => 'modules/CLOG_CasesLog/CLOG_CasesLog.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => array (
    0 => array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/clog_caseslog_cases_Cases.php',
      'to_module' => 'Cases',
    ),
    1 => array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/clog_caseslog_users_Users.php',
      'to_module' => 'Users',
    ),
  ),
  'relationships' => array (
    0 => array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/clog_caseslog_casesMetaData.php',
    ),
    1 => array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/clog_caseslog_usersMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => array (
    0 => array (
      'from' => '<basepath>/SugarModules/modules/CLOG_CasesLog',
      'to' => 'modules/CLOG_CasesLog',
    ),
    1 => array (
      'from' => '<basepath>/custom/modules/Cases/CasesLogHook.php',
      'to' => 'custom/modules/Cases/CasesLogHook.php',
    ),
  ),
  'logic_hooks' => array(
    array(
      'module' => 'Cases',
      'hook' => 'before_save',
      'order' => 99,
      'description' => 'Track which users have modified a case each day.',
      'file' => 'custom/modules/Cases/CasesLogHook.php',
      'class' => 'CasesLogHook',
      'function' => 'cases_log_hook',
    ),
  ),
  'language' => array (
    0 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'en_us',
    ),
    1 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'bg_BG',
    ),
    2 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'cs_CZ',
    ),
    3 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'da_DK',
    ),
    4 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'de_DE',
    ),
    5 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'es_ES',
    ),
    6 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'fr_FR',
    ),
    7 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'he_IL',
    ),
    8 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'hu_HU',
    ),
    9 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'it_it',
    ),
    10 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'lt_LT',
    ),
    11 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ja_JP',
    ),
    12 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'lv_LV',
    ),
    13 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'nb_NO',
    ),
    14 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'nl_NL',
    ),
    15 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pl_PL',
    ),
    16 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pt_PT',
    ),
    17 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ro_RO',
    ),
    18 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ru_RU',
    ),
    19 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'sv_SE',
    ),
    20 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'tr_TR',
    ),
    21 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'zh_CN',
    ),
    22 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pt_BR',
    ),
    23 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ca_ES',
    ),
    24 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'en_UK',
    ),
    25 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'sr_RS',
    ),
    26 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'en_us',
    ),
    27 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'bg_BG',
    ),
    28 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'cs_CZ',
    ),
    29 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'da_DK',
    ),
    30 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'de_DE',
    ),
    31 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'es_ES',
    ),
    32 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'fr_FR',
    ),
    33 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'he_IL',
    ),
    34 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'hu_HU',
    ),
    35 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'it_it',
    ),
    36 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'lt_LT',
    ),
    37 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'ja_JP',
    ),
    38 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'lv_LV',
    ),
    39 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'nb_NO',
    ),
    40 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'nl_NL',
    ),
    41 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'pl_PL',
    ),
    42 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'pt_PT',
    ),
    43 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'ro_RO',
    ),
    44 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'ru_RU',
    ),
    45 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'sv_SE',
    ),
    46 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'tr_TR',
    ),
    47 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'zh_CN',
    ),
    48 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'pt_BR',
    ),
    49 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'ca_ES',
    ),
    50 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'en_UK',
    ),
    51 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'sr_RS',
    ),
    52 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'en_us',
    ),
    53 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'bg_BG',
    ),
    54 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'cs_CZ',
    ),
    55 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'da_DK',
    ),
    56 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'de_DE',
    ),
    57 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'es_ES',
    ),
    58 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'fr_FR',
    ),
    59 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'he_IL',
    ),
    60 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'hu_HU',
    ),
    61 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'it_it',
    ),
    62 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'lt_LT',
    ),
    63 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ja_JP',
    ),
    64 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'lv_LV',
    ),
    65 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'nb_NO',
    ),
    66 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'nl_NL',
    ),
    67 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pl_PL',
    ),
    68 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pt_PT',
    ),
    69 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ro_RO',
    ),
    70 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ru_RU',
    ),
    71 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'sv_SE',
    ),
    72 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'tr_TR',
    ),
    73 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'zh_CN',
    ),
    74 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'pt_BR',
    ),
    75 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'ca_ES',
    ),
    76 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'en_UK',
    ),
    77 => array (
      'from' => '<basepath>/SugarModules/relationships/language/CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
      'language' => 'sr_RS',
    ),
    78 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    79 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'bg_BG',
    ),
    80 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'cs_CZ',
    ),
    81 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'da_DK',
    ),
    82 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'de_DE',
    ),
    83 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'es_ES',
    ),
    84 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'fr_FR',
    ),
    85 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'he_IL',
    ),
    86 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'hu_HU',
    ),
    87 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'it_it',
    ),
    88 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'lt_LT',
    ),
    89 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'ja_JP',
    ),
    90 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'lv_LV',
    ),
    91 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'nb_NO',
    ),
    92 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'nl_NL',
    ),
    93 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'pl_PL',
    ),
    94 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'pt_PT',
    ),
    95 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'ro_RO',
    ),
    96 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'ru_RU',
    ),
    97 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'sv_SE',
    ),
    98 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'tr_TR',
    ),
    99 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'zh_CN',
    ),
    100 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'pt_BR',
    ),
    101 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'ca_ES',
    ),
    102 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_UK',
    ),
    103 => array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'sr_RS',
    ),
    104 => array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => array (
    0 => array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/clog_caseslog_cases_CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
    ),
    1 => array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/clog_caseslog_cases_Cases.php',
      'to_module' => 'Cases',
    ),
    2 => array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/clog_caseslog_users_CLOG_CasesLog.php',
      'to_module' => 'CLOG_CasesLog',
    ),
    3 => array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/clog_caseslog_users_Users.php',
      'to_module' => 'Users',
    ),
  ),
  'layoutfields' => array (
    0 => array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'wireless_subpanels' => array (
    0 => array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/clog_caseslog_cases_Cases.php',
      'to_module' => 'Cases',
    ),
    1 => array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/clog_caseslog_users_Users.php',
      'to_module' => 'Users',
    ),
  ),
);