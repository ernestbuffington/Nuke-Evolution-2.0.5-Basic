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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_MEMBERS.": "._PJ_DELETEMEMBER;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$member = pjmember_info($member_id);
pjadmin_menu(_PJ_MEMBERS.": "._PJ_DELETEMEMBER);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJMemberDelete'>\n";
echo "<input type='hidden' name='member_id' value='$member_id'>\n";
echo "<tr><td align='center'><strong>"._PJ_SWAPMEMBER."</strong></td></tr>\n";
echo "<tr><td align='center'>".$member['member_name']." -> <select name='swap_member_id'>\n";
echo "<option value='0'>---------</option>\n";
$memberlist = $db->sql_query("SELECT `member_id`, `member_name` FROM `".$prefix."_nsnpj_members` WHERE `member_id` != '$member_id' ORDER BY `member_name`");
while(list($s_member_id, $s_member_name) = $db->sql_fetchrow($memberlist)){
    echo "<option value='$s_member_id'>$s_member_name</option>\n";
}
echo "</select></td></tr>\n";
echo "<tr><td align='center'><input type='submit' value='"._PJ_DELETEMEMBER."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>