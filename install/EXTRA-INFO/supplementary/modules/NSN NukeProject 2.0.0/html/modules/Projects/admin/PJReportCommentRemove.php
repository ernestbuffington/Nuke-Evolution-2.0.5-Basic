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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REPORTS.": "._PJ_DELETECOMMENT;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$reportcomment = pjreportcomment_info($comment_id);
pjadmin_menu(_PJ_REPORTS.": "._PJ_DELETECOMMENT);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJReportCommentDelete'>\n";
echo "<input type='hidden' name='comment_id' value='$comment_id'>\n";
echo "<input type='hidden' name='report_id' value='".$reportcomment['report_id']."'>\n";
echo "<tr><td align='center' colspan='2'><strong>"._PJ_CONFIRMCOMMENTDELETE."</strong></td></tr>\n";
echo "<tr><td align='center' valign='top'><strong>"._PJ_COMMENT." #$comment_id</strong></td><td>".$reportcomment['comment_description']."</td></tr>\n";
echo "<tr><td align='center' colspan='2'><input type='submit' value='"._PJ_DELETECOMMENT."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>