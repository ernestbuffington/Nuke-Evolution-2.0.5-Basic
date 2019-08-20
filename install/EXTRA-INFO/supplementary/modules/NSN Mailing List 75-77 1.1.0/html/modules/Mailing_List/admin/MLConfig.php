<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = _ML_CONFIG." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_CONFIG." ".$ml_config['version_number']);
ML_Admin();
echo "<br />\n";
OpenTable();
echo "<center><table border='0' align='center'>";
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_DATEFORMAT.":</strong></td><td><input type='text' name='xdate_format' value='".$ml_config['date_format']."'><br />("._ML_DATEFORMATNOTE.")</td></tr>\n";
/*echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_BANNERTABLE.":</strong></td><td><select name='xbanner_table'>\n";
$sel0 = $sel1 = $sel2 = "";
$num1 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnba_banners`"));
$num2 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnbc_banners`"));
if($ml_config['banner_table'] == 1) { $sel1 = " selected"; } elseif($ml_config['banner_table'] == 2) { $sel2 = " selected"; } else { $sel0 = " selected"; }
echo "<option value='0'$sel0>"._ML_STANDARD."</option>\n";
if($num1 > 0) { echo "<option value='1'$sel1>"._ML_NSNBA."</option>\n"; }
if($num2 > 0) { echo "<option value='2'$sel2>"._ML_NSNBC."</option>\n"; }
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_DOWNLOADTABLE.":</strong></td><td><select name='xdownload_table'>\n";
$sel0 = $sel1 = $sel2 = "";
$num3 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsngd_downloads`"));
$num4 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnde_files`"));
if($ml_config['download_table'] == 1) { $sel1 = " selected"; } elseif($ml_config['download_table'] == 2) { $sel2 = " selected"; } else { $sel0 = " selected"; }
echo "<option value='0'$sel0>"._ML_STANDARD."</option>\n";
if($num3 > 0) { echo "<option value='1'$sel1>"._ML_NSNGD."</option>\n"; }
if($num4 > 0) { echo "<option value='2'$sel2>"._ML_NSNDE."</option>\n"; }
echo "</select></td></tr>\n";*/
echo "<input type='hidden' name='op' value='MLConfigSave'>\n";
echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_SAVECHANGES."'></td></tr>\n";
echo "</form></table></center>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>