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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_MEMBERS.": "._PJ_MEMBERLIST;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
pjadmin_menu(_PJ_MEMBERS.": "._PJ_MEMBERLIST);
echo "<br />\n";
$memberresult = $db->sql_query("SELECT `member_id`, `member_name` FROM `".$prefix."_nsnpj_members` ORDER BY `member_name`");
$member_total = $db->sql_numrows($memberresult);
OpenTable();
echo "<table width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr><td colspan='3' width='100%' bgcolor='$bgcolor2'><nobr><strong>"._PJ_MEMBEROPTIONS."</strong></nobr></td></tr>\n";
$pjimage = pjimage("options.png", $module_name);
echo "<tr><td><img src='$pjimage'></td><td colspan=2 width='100%'><nobr><a href='".$admin_file.".php?op=PJMemberAdd'>"._PJ_MEMBERADD."</a></nobr></td></tr>\n";
$pjimage = pjimage("stats.png", $module_name);
echo "<tr><td><img src='$pjimage'></td><td colspan=2 width='100%'><nobr>"._PJ_MEMBERS.": <strong>$member_total</strong></nobr></td></tr>\n";
echo "</table>\n";
//CloseTable();
echo "<br />\n";
//OpenTable();
echo "<table width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr><td colspan='2' bgcolor='$bgcolor2' width='100%'><strong>"._PJ_MEMBERS."</strong></a></td><td align='center' bgcolor='$bgcolor2'><strong>"._PJ_FUNCTIONS."</strong></td></tr>\n";
if($member_total != 0){
  while(list($member_id, $member_name) = $db->sql_fetchrow($memberresult)) {
    $pjimage = pjimage("member.png", $module_name);
    echo "<tr><td><img src='$pjimage'></td><td width='100%'>$member_name</td>\n";
    echo "<td align='center'><nobr>[ <a href='".$admin_file.".php?op=PJMemberEdit&amp;member_id=$member_id'>"._PJ_EDIT."</a>";
    echo " | <a href='".$admin_file.".php?op=PJMemberRemove&amp;member_id=$member_id'>"._PJ_DELETE."</a> ]</nobr></td></tr>\n";
  }
} else {
  echo "<tr><td width='100%' colspan='3' align='center'>"._PJ_NOMEMBERS."</td></tr>\n";
}
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>