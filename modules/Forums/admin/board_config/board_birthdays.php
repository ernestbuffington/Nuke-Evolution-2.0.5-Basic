<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: DHTML Forum Config Admin
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : board_birthdays.php
   Author        : JeFFb68CAM (www.Evo-Mods.com)
   Version       : 1.0.0
   Date          : 09/10/2005 (mm-dd-yyyy)

   Description   : Enhanced General Admin Configuration with DHTML menu.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Mod]=-
      Force Word Wrapping - Configurator       v1.0.16      06/15/2005
 ************************************************************************/

if (!defined('BOARD_CONFIG')) {
    die('Access Denied');
}

$template->set_filenames(array(
    "birthdays" => "admin/board_config/board_birthdays.tpl")
);

/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
$bday_show_yes = ( $new['bday_show'] ) ? "checked=\"checked\"" : "";
$bday_show_no = ( !$new['bday_show'] ) ? "checked=\"checked\"" : "";
$bday_require_yes = ( $new['bday_require'] ) ? "checked=\"checked\"" : "";
$bday_require_no = ( !$new['bday_require'] ) ? "checked=\"checked\"" : "";
$bday_year_yes = ( $new['bday_year'] ) ? "checked=\"checked\"" : "";
$bday_year_no = ( !$new['bday_year'] ) ? "checked=\"checked\"" : "";
$bday_lock_yes = ( $new['bday_lock'] ) ? "checked=\"checked\"" : "";
$bday_lock_no = ( !$new['bday_lock'] ) ? "checked=\"checked\"" : "";
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/

//General Template variables
$template->assign_vars(array(
    "DHTML_ID" => "c" . $dhtml_id)
);
    
//Language Template variables
$template->assign_vars(array(
/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
	"L_BIRTHDAYS" => $lang['Birthdays'],
	"L_BDAY_SHOW" => $lang['bday_show'],
	"L_UNCONDITIONAL" => $lang['Unconditional'],
	"L_CONDITIONAL" => $lang['Conditional'],
	"L_BDAY_SHOW_EXPLAIN" => $lang['bday_show_explain'],
	"L_BDAY_REQUIRE" => $lang['bday_require'],
	"L_BDAY_REQUIRE_EXPLAIN" => $lang['bday_require_explain'],
	"L_BDAY_YEAR" => $lang['bday_year'],
	"L_BDAY_YEAR_EXPLAIN" => $lang['bday_year_explain'],
	"L_BDAY_LOCK" => $lang['bday_lock'],
	"L_BDAY_LOCK_EXPLAIN" => $lang['bday_lock_explain'],
	"L_BDAY_LOOKAHEAD" => $lang['bday_lookahead'],
	"L_BDAY_LOOKAHEAD_EXPLAIN" => $lang['bday_lookahead_explain'],
	"L_BDAY_AGE_RANGE" => $lang['bday_age_range'],
	"L_TO" => $lang['To'],
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
));

//Data Template Variables
$template->assign_vars(array(
/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
	"BDAY_SHOW_YES" => $bday_show_yes,
	"BDAY_SHOW_NO" => $bday_show_no,
	"BDAY_REQUIRE_YES" => $bday_require_yes,
	"BDAY_REQUIRE_NO" => $bday_require_no,
	"BDAY_YEAR_YES" => $bday_year_yes,
	"BDAY_YEAR_NO" => $bday_year_no,
	"BDAY_LOCK_YES" => $bday_lock_yes,
	"BDAY_LOCK_NO" => $bday_lock_no,
	"BDAY_LOOKAHEAD" => $new['bday_lookahead'],
	"BDAY_MIN" => $new['bday_min'],
	"BDAY_MAX" => $new['bday_max'],
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
));
$template->pparse("birthdays");

?>