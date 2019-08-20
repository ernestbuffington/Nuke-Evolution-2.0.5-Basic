<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeProject(tm)                                      */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

if(!defined('NSNPJ_ADMIN')) { die("Illegal Access Detected!!!"); }
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REQUESTS.": "._PJ_DELETEREQUEST;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$request = pjrequest_info($request_id);
pjadmin_menu(_PJ_REQUESTS.": "._PJ_DELETEREQUEST);
echo "<br />";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>";
echo "<form method='post' action='".$admin_file.".php'>";
echo "<input type='hidden' name='op' value='PJRequestDelete'>";
echo "<input type='hidden' name='request_id' value='$request_id'>";
echo "<input type='hidden' name='project_id' value='".$request['project_id']."'>";
echo "<tr><td align='center'><strong>"._PJ_REQUESTCONFIRMDELETE."</strong></td></tr>";
echo "<tr><td align='center'><strong><i>".$request['request_name'].":</i></strong></td></tr>";
echo "<tr><td align='center'><i>".$request['request_description']."</i></td></tr>";
echo "<tr><td align='center'><input type='submit' value='"._PJ_DELETEREQUEST."'></td></tr>";
echo "</form>";
echo "</table>";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>