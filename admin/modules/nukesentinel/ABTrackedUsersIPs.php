<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_USERIPTRACKING;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_USERIPTRACKING);
ipbanmenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$perpage = $ab_config['track_perpage'];
if($perpage == 0) { $perpage = 25; }
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
$user_id=intval($user_id);
list($uname) = $db->sql_fetchrow($db->sql_query("SELECT `username` FROM `".$user_prefix."_users` WHERE `user_id`='$user_id'"));
# default values if none set
echo "<center><strong>$uname ($user_id)</strong></center><br />";
echo "<table align='center' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' border='0' width='100%'>\n";
echo "<tr bgcolor='$bgcolor2'>";
echo "<td nowrap width='30%'><strong>"._AB_IPADDRESSES."</strong></td>";
echo "<td align='center' nowrap width='30%'><strong>"._AB_HITDATE."</strong></td>";
echo "<td align='center' nowrap width='30%'><strong>"._AB_COUNTRY."</strong></td>";
echo "<td align='center' nowrap width='10%'><strong>&nbsp;</strong></td></tr>";
$result = $db->sql_query("SELECT DISTINCT(`ip_addr`) FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_id`='$user_id' ORDER BY `ip_long` LIMIT $min, $perpage");
while(list($lipaddr) = $db->sql_fetchrow($result)){
  $newrow = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_id`='$user_id' AND `ip_addr`='$lipaddr' ORDER BY `date` DESC LIMIT 1"));
  echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
  echo "<td>$lipaddr</td>\n";
  echo "<td align='center'>".date("Y-m-d \@ H:i:s",$newrow['date'])."</td>\n";
  $countrytitle = abget_countrytitle($newrow['c2c']);
  echo "<td align='center'>".$countrytitle['country']."</td>\n";
  echo "<td align='center'><a href='".$admin_file.".php?op=ABTrackedDeleteUserIP&amp;user_id=$user_id&amp;ip_addr=$lipaddr&amp;min=$min&amp;xop=$op'><img src='images/nukesentinel/delete.png' height='16' width='16' border='0' alt='' title='' /></a></td>";
  echo "</tr>\n";
}
$totalselected = $db->sql_numrows($db->sql_query("SELECT DISTINCT(`ip_addr`) FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_id`='$user_id'"));
  // Page Numbering
  $pagesint = ($totalselected / $perpage);
  $pageremainder = ($totalselected % $perpage);
  if($pageremainder != 0) {
    $pages = ceil($pagesint);
    if($totalselected < $perpage) { $pageremainder = 0; }
  } else {
    $pages = $pagesint;
  }
  if($pages != 1 && $pages != 0) {
    $counter = 1;
    $currentpage = ($max / $perpage);
    echo "<tr bgcolor='$bgcolor1'><td colspan='4'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
    echo "<tr>\n<td colspan='4'>\n<table border='0' cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";

    echo "<form action='".$admin_file.".php?op=ABTrackedUsersIPs' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min - $perpage)."' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='user_id' value='$user_id' />\n";
    echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
    echo "<td width='33%'>";
    if($currentpage <= 1) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_PREVPAGE."' />";
    }
    echo "</td>\n";
    echo "</form>\n";

    echo "<form action='".$admin_file.".php?op=ABTrackedUsersIPs' method='post'>\n";
    echo "<td align='center' width='34%'>";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='user_id' value='$user_id' />\n";
    echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
    echo "<strong>"._AB_PAGE."</strong> <select name='min'>\n";
    while($counter <= $pages ) {
      $cpage = $counter;
      $mintemp = ($perpage * $counter) - $perpage;
      if($counter == $currentpage) {
        echo "<option selected>$counter</option>";
      } else {
        echo "<option value='$mintemp'>$counter</option>";
      }
      $counter++;
    }
    echo "</select> <strong>"._AB_OF." $pages</strong> <input type='submit' value='"._AB_GO."' /></td>\n";
    echo "</form>\n";

    echo "<form action='".$admin_file.".php?op=ABTrackedUsersIPs' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min + $perpage)."' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='user_id' value='$user_id' />\n";
    echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
    echo "<td align='right' width='33%'>";
    if($currentpage >= $pages) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_NEXTPAGE."' />";
    }
    echo "</td>\n";
    echo "</form>\n";

    echo "</tr>\n</table>\n</td>\n</tr>\n";
  }
  // Page Numbering
echo "</table>";
// End Page Stats
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>