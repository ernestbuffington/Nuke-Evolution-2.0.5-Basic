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

$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_CREATENEWLIST);
ML_Admin();
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0'>\n";
echo "<form action='".$admin_file.".php?op=MLCreate' method='POST'>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_LISTNAME."</strong></td><td><input type='text' name='title' size='35' maxlength='30'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._ML_LISTDESCRIPTION."</strong></td><td><textarea name='description' $textrowcol></textarea></td></tr>\n";
echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_CREATE."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>