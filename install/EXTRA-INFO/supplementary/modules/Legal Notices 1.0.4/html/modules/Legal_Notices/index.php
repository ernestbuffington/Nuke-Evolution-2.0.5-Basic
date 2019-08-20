<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/************************************************************************/
/* Cms Revolution: Advanced Website Portal System                       */
/************************************************************************/
/* Copyright (c) 2006 by paragon-entity (www.paragon-entity.com)        */
/* http://cmsrevolution.com                                             */
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

    if (!defined('MODULE_FILE')) {
        die ("You can't access this file directly...");
   }
    require_once("mainfile.php");
    $module_name = basename(dirname(__FILE__));
    get_lang($module_name);

function themenu() {
    global $prefix, $db, $config, $module_name;
    echo "<br />";
    OpenTable();
    echo "<center><strong>"._LEGALMENU."</strong><br /><br />[ <a href=\"modules.php?name=$module_name&op=legal\">"._MAIN."</a> | <a href=\"modules.php?name=$module_name&op=privacy\">"._PRIVACYMENU."</a> | <a href=\"modules.php?name=$module_name&op=terms\">"._TERMSMENU."</a> ]</center>";
    CloseTable();
}

function legal() {
    global $prefix, $db, $config, $module_name;
    $today = getdate();
    $month = $today['mon'];
    if ($month == 1) {$month = _JANUARY;} elseif ($month == 2) {$month = _FEBRUARY;} elseif ($month == 3) {$month = _MARCH;} elseif ($month == 4) {$month = _APRIL;} elseif ($month == 5) {$month = _MAY;} elseif ($month == 6) {$month = _JUNE;} elseif ($month == 7) {$month = _JULY;} elseif ($month == 8) {$month = _AUGUST;} elseif ($month == 9) {$month = _SEPTEMBER;} elseif ($month == 10) {$month = _OCTOBER;} elseif ($month == 11) {$month = _NOVEMBER;} elseif ($month == 12) {$month = _DECEMBER;}
    $year = $today['year'];	
    include(NUKE_BASE_DIR."header.php");
    title($config['global']['sitename']." "._MAIN);
    OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">";
	list($legal) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='legal'"));
	list($country) = $db->sql_fetchrow($db->sql_query("SELECT cfg_country FROM ".$prefix."_legal WHERE cfg_name='legal'"));
    $legal = eregi_replace("\[sitename\]", $config['global']['sitename'], $legal);
    $legal = eregi_replace("\[country\]", $country, $legal);
	$legal = decode_bb_all($legal, 1, true);	
    echo"<td><center>".$legal."<br /><br />"
    ."<p align='right'>".$country.", $month $year</p>";	
    echo "</center></table></td>";	
    CloseTable();
    themenu();
    include("footer.php");
}

function privacy() {
    global $prefix, $db, $config, $module_name;
    $today = getdate();
    $month = $today['mon'];
    if ($month == 1) {$month = _JANUARY;} elseif ($month == 2) {$month = _FEBRUARY;} elseif ($month == 3) {$month = _MARCH;} elseif ($month == 4) {$month = _APRIL;} elseif ($month == 5) {$month = _MAY;} elseif ($month == 6) {$month = _JUNE;} elseif ($month == 7) {$month = _JULY;} elseif ($month == 8) {$month = _AUGUST;} elseif ($month == 9) {$month = _SEPTEMBER;} elseif ($month == 10) {$month = _OCTOBER;} elseif ($month == 11) {$month = _NOVEMBER;} elseif ($month == 12) {$month = _DECEMBER;}
    $year = $today['year'];	
    include(NUKE_BASE_DIR."header.php");
    title($config['global']['sitename']." "._PRIVACYMENU);
    OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">";	
    list($privacy) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='privacy'"));
	list($country) = $db->sql_fetchrow($db->sql_query("SELECT cfg_country FROM ".$prefix."_legal WHERE cfg_name='privacy'"));
    $privacy = eregi_replace("\[sitename\]", $config['global']['sitename'], $privacy);
    $privacy = eregi_replace("\[country\]", $country, $privacy);
	$privacy = decode_bb_all($privacy, 1, true);	
    echo"<td><center>".$privacy."<br /><br />"
    ."<p align='right'>".$country.", $month $year</p>";	
    echo "</center></table></td>";	
    CloseTable();
    themenu();
    include("footer.php");
}

function terms() {
    global $prefix, $db, $config, $module_name;
    $today = getdate();
    $month = $today['mon'];
    if ($month == 1) {$month = _JANUARY;} elseif ($month == 2) {$month = _FEBRUARY;} elseif ($month == 3) {$month = _MARCH;} elseif ($month == 4) {$month = _APRIL;} elseif ($month == 5) {$month = _MAY;} elseif ($month == 6) {$month = _JUNE;} elseif ($month == 7) {$month = _JULY;} elseif ($month == 8) {$month = _AUGUST;} elseif ($month == 9) {$month = _SEPTEMBER;} elseif ($month == 10) {$month = _OCTOBER;} elseif ($month == 11) {$month = _NOVEMBER;} elseif ($month == 12) {$month = _DECEMBER;}
    $year = $today['year'];	
    include(NUKE_BASE_DIR."header.php");
    title($config['global']['sitename']." "._TERMSMENU);
    OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">";	
    list($terms) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='terms'"));
	list($country) = $db->sql_fetchrow($db->sql_query("SELECT cfg_country FROM ".$prefix."_legal WHERE cfg_name='terms'"));
    $terms = eregi_replace("\[sitename\]", $config['global']['sitename'], $terms);
    $terms = eregi_replace("\[country\]", $country, $terms);
	$terms = decode_bb_all($terms, 1, true);		
    echo"<td><center>".$terms."<br /><br />"
    ."<p align='right'>".$country.", $month $year</p>";	
    echo "</center></table></td>";	
    CloseTable();
    themenu();
    include("footer.php");
}

switch($op) {

    default:
    legal();
    break;

    case "privacy":
    privacy();
    break;

    case "terms":
    terms();
    break;

}

?>