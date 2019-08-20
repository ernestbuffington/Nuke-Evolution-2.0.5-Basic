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

$lid = intval($lid);
$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'].": "._ML_DELETELIST;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$list_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists` WHERE `lid`='$lid'"));
title(_ML_DELETELIST);
ML_Admin();
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0'>\n";
echo "<form action='".$admin_file.".php' method='POST'>\n";
echo "<input type='hidden' name='op' value='MLDeleteListSave'>\n";
echo "<input type='hidden' name='lid' value='$lid'>\n";
echo "<tr><td align='center'><strong>"._ML_DELETELISTCONF."</strong></td></tr>\n";
echo "<tr><td align='center'><input type='submit' value='"._ML_DELETELIST."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>