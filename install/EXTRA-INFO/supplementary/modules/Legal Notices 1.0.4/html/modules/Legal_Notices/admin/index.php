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

    if (!defined('ADMIN_FILE')) {
	    die ("Access Denied");
   }

    global $prefix, $db, $admin_file;
    $aid = substr($aid, 0,25);
    $row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));
    if ($row['radminsuper'] == 1) {

function legalmenu() {
    global $module_name, $admin_file;
    echo "<br />";
    OpenTable();
    echo "<center><strong>"._ADMINLEGALMENU."</strong><br /><br />[ <a href=\"".$admin_file.".php?op=legal\">"._ADMINLEGALTITLE."</a> | <a href=\"".$admin_file.".php?op=legalprivacy\">"._ADMINLEGALPRIVACYM."</a> | <a href=\"".$admin_file.".php?op=legalterms\">"._ADMINLEGALTERMM."</a> ]</center>";
    CloseTable();
}
	
function legal($save=0, $legal=0, $country=0) {
    global $prefix, $db, $config, $admin_file;
    if ($save != 0) {
	$db->sql_query('UPDATE '.$prefix."_legal SET cfg_value='$legal', cfg_country='$country' WHERE cfg_name='legal'");
    include(NUKE_BASE_DIR."header.php");
	GraphicAdmin();
    title($config['global']['sitename']." "._ADMINLEGALTITLE);
	legalmenu(); 
    OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">"
    ."<tr>"
    ."<td><center>"
    ."<h4>"._LEGALSAVE."</h4><br /><a href=\"javascript:history.go(-1)\">"._LEGALGOBACK."</a><br /><br />"
    ."</center>"
    ."</td>"
    ."</tr>"
    ."</table>";
    CloseTable();
    include("footer.php");
   }
    include (NUKE_BASE_DIR."header.php");
	GraphicAdmin();
    title($config['global']['sitename']." "._ADMINLEGALTITLE);
    legalmenu(); 
	OpenTable();
    list($legal) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='legal'"));	
	$legal = Fix_Quotes($legal);
    echo "<center><font class=\"title\"><strong>"._EDITLEGAL."</strong></font><br /><br /><i>"._LEGAL_EMBED."</i><br /><br />"
    ."<form method=\"POST\" name=\"legalpost\" action=\"".$admin_file.".php?op=legal\">"
    .""._LEGALBODY.":<br /><br />";
	Make_TextArea('legal', $legal, 'legalpost');
	echo"<br /><br />"._COUNTRYNAME.":<br /><br /><select name=\"country\">";
        $result = $db->sql_query("SELECT name FROM ".$prefix."_country");
        while ($row2 = $db->sql_fetchrow($result)) {
            if ($row['country'] == $row2['name']) {
                $sel = "selected";
            } else {
                $sel = "";
            }
            echo "<option value=\"".$row2['name']."\" $sel>".$row2['name']."</option>";
        }
	echo "</select><br /><br />"
    ."<input type=\"hidden\" name=\"save\" value=\"1\"><input type=\"hidden\" name=\"op\" value=\"legal\"><br /><br /><input type=\"submit\" value=\""._ADMINSAVE."\">"
    ."</form></center><br /><table border=\"0\" width=\"80%\" align=\"center\"><tr><td align=\"center\"><i>"._LEGAL."</i></td></tr></table>";
	CloseTable();
    include ("footer.php");
}

function legalprivacy($save=0, $privacy=0, $country=0) {
    global $prefix, $db, $config, $admin_file;
    if ($save != 0) {
    $db->sql_query('UPDATE '.$prefix."_legal SET cfg_value='$privacy', cfg_country='$country' WHERE cfg_name='privacy'");
    include(NUKE_BASE_DIR."header.php");
	GraphicAdmin(); 
    title($config['global']['sitename']." "._ADMINLEGALPRIVACY);
    legalmenu(); 
	OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">"
    ."<tr>"
    ."<td><center>"
    ."<h4>"._LEGALPRIVACYSAVE."</h4><br /><a href=\"javascript:history.go(-1)\">"._LEGALGOBACK."</a><br /><br />"
    ."</center>"
    ."</td>"
    ."</tr>"
    ."</table>";
    CloseTable();
    include("footer.php");
   }
    include (NUKE_BASE_DIR."header.php");
	GraphicAdmin();
    title($config['global']['sitename']." "._ADMINLEGALPRIVACY);
    legalmenu();
	OpenTable();
    list($privacy) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='privacy'"));
    $privacy = Fix_Quotes($privacy);
    echo "<center><font class=\"title\"><strong>"._EDITPRIVACY."</strong></font><br /><br /><i>"._LEGAL_EMBED."</i><br /><br />"
    ."<form method=\"POST\" name=\"privacypost\" action=\"".$admin_file.".php?op=legalprivacy\">"
    .""._PRIVACYBODY.":<br /><br />";
	Make_TextArea('privacy', $privacy, 'privacypost');
	echo"<br /><br />"._COUNTRYNAME.":<br /><br /><select name=\"country\">";
        $result = $db->sql_query("SELECT name FROM ".$prefix."_country");
        while ($row2 = $db->sql_fetchrow($result)) {
            if ($row['country'] == $row2['name']) {
                $sel = "selected";
            } else {
                $sel = "";
            }
            echo "<option value=\"".$row2['name']."\" $sel>".$row2['name']."</option>";
        }
    echo "</select><br /><br />"
    ."<input type=\"hidden\" name=\"save\" value=\"1\"><input type=\"hidden\" name=\"op\" value=\"legalprivacy\"><br /><br /><input type=\"submit\" value=\""._ADMINSAVE."\">"
    ."</form></center><br /><table border=\"0\" width=\"80%\" align=\"center\"><tr><td align=\"center\"><i>"._LEGALPRIVACY."</i></td></tr></table>";
    CloseTable();
    include ("footer.php");
   }

function legalterms($save=0, $terms=0, $country=0) {
    global $prefix, $db, $config, $admin_file;
    if ($save != 0) {
	$db->sql_query('UPDATE '.$prefix."_legal SET cfg_value='$terms', cfg_country='$country' WHERE cfg_name='terms'");
    include(NUKE_BASE_DIR."header.php");
	GraphicAdmin(); 
    title($config['global']['sitename']." "._ADMINLEGALTERMM);
    legalmenu();
	OpenTable();
    echo "<table border=\"0\" width=\"100%\" cellpadding=\"4\">"
    ."<tr>"
    ."<td><center>"
    ."<h4>"._LEGALTERMSAVE."</h4><br /><a href=\"javascript:history.go(-1)\">"._LEGALGOBACK."</a><br /><br />"
    ."</center>"
    ."</td>"
    ."</tr>"
    ."</table>";
    CloseTable();
    include("footer.php");
   }
    include (NUKE_BASE_DIR."header.php");
	GraphicAdmin();
    title($config['global']['sitename']." "._ADMINLEGALTERMM);
    legalmenu();
	OpenTable();
	list($terms) = $db->sql_fetchrow($db->sql_query("SELECT cfg_value FROM ".$prefix."_legal WHERE cfg_name='terms'"));
    $terms = Fix_Quotes($terms);
    echo "<center><font class=\"title\"><strong>"._EDITLEGALTERMS."</strong></font><br /><br /><i>"._LEGAL_EMBED."</i><br /><br />"
    ."<form method=\"POST\" name=\"termspost\" action=\"".$admin_file.".php?op=legalterms\">"
    .""._TERMSLEGALBODY.":<br /><br />";
    Make_TextArea('terms', $terms, 'termspost');
	echo""._COUNTRYNAME.":<br /><br /><select name=\"country\">";
        $result = $db->sql_query("SELECT name FROM ".$prefix."_country");
        while ($row2 = $db->sql_fetchrow($result)) {
            if ($row['country'] == $row2['name']) {
                $sel = "selected";
            } else {
                $sel = "";
            }
            echo "<option value=\"".$row2['name']."\" $sel>".$row2['name']."</option>";
        }
    echo "</select><br /><br />"
    ."<input type=\"hidden\" name=\"save\" value=\"1\"><input type=\"hidden\" name=\"op\" value=\"legalterms\"><br /><br /><input type=\"submit\" value=\""._ADMINSAVE."\">"
    ."</form></center><br /><table border=\"0\" width=\"80%\" align=\"center\"><tr><td align=\"center\"><i>"._LEGALTERMS."</i></td></tr></table>";
    CloseTable();
    include ("footer.php");
}

if (!isset($save)) { $save = ''; }
if (!isset($terms)) { $terms = ''; }
if (!isset($privacy)) { $privacy = ''; }
if (!isset($legal)) { $legal = ''; }
if (!isset($country)) { $country = ''; }
	
switch($op) {

    case "legalmenu":
    legalmenu();
    break;	
		
    case "legal":
    legal($save, $legal, $country);
    break;

    case "legalprivacy":
    legalprivacy($save, $privacy, $country);
    break;

    case "legalterms":
    legalterms($save, $terms, $country);
    break;

}

   } else {
    echo "Access Denied";
}

?>