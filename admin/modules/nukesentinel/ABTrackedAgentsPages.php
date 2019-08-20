<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_AGENTTRACKING;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_AGENTTRACKING);
ipbanmenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$perpage = $ab_config['track_perpage'];
if($perpage == 0) { $perpage = 25; }
if(!isset($showmodule)) $showmodule="All_Modules";
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!$column or $column=="") $column = "date";
if(!$direction or $direction=="") $direction = "desc";
$tid=intval($tid);
list($uname) = $db->sql_fetchrow($db->sql_query("SELECT `user_agent` FROM `".$prefix."_nsnst_tracked_ips` WHERE `tid`='$tid'"));
# default values if none set
echo "<center><strong>$uname</strong></center><br />";
echo "<table align='center' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' border='0' width='100%'>\n";
echo "<tr>";
// Page Sorting
echo "<td align='left' bgcolor='$bgcolor2' colspan='3'>";
echo "<form method='post' action='".$admin_file.".php?op=ABTrackedAgentsPages'>\n";
echo "<input type='hidden' name='min' value='$min' />\n";
echo "<input type='hidden' name='user_id' value='$user_id' />\n";
echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
echo "<strong>"._AB_SORT.":</strong> <select name='column'>\n";
if($column == "page") $selcolumn1 = "selected";
echo "<option value='page' $selcolumn1>"._AB_PAGEVIEWED."</option>\n";
if($column == "date") $selcolumn2 = "selected";
echo "<option value='date' $selcolumn2>"._AB_HITDATE."</option>\n";
echo "</select> ";
echo "<select name='direction'>\n";
if($direction == "asc") $seldirection1 = "selected";
echo "<option value='asc' $seldirection1>"._AB_ASC."</option>\n";
if($direction == "desc") $seldirection2 = "selected";
echo "<option value='desc' $seldirection2>"._AB_DESC."</option>\n";
echo "</select> ";
echo "<input type='submit' value='"._AB_SORT."' />\n";
echo "</form></td>";
echo "</tr>";
// Page Sorting
echo "<tr bgcolor='$bgcolor1'><td colspan='3'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
echo "<tr>";
echo "<td bgcolor='$bgcolor2' nowrap width='80%'><strong>"._AB_PAGEVIEWED."</strong></td>";
echo "<td bgcolor='$bgcolor2' nowrap width='20%'><strong>"._AB_HITDATE."</strong></td>";
$result = $db->sql_query("SELECT `ip_addr`, `page`, `date` FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_agent`='$uname' ORDER BY $column $direction LIMIT $min, $perpage");
while(list($lipaddr, $page, $date_time) = $db->sql_fetchrow($result)){
  echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
  echo "<td><a href='$page' target='_blank'>$page</a></td>\n";
  echo "<td>".date("Y-m-d \@ H:i:s",$date_time)."</td>\n";
  echo "</tr>\n";
}
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_agent`='$uname'"));
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
    echo "<tr bgcolor='$bgcolor1'><td colspan='3'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
    echo "<tr>\n<td colspan='3'>\n<table border='0' cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";

    echo "<td width='33%'>";
    echo "<form action='".$admin_file.".php?op=ABTrackedAgentsPages' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min - $perpage)."' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='tid' value='$tid' />\n";
    echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
    if($currentpage <= 1) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_PREVPAGE."' />";
    }
    echo "</form>\n";
    echo "</td>\n";

    echo "<td align='center' width='34%'>";
    echo "<form action='".$admin_file.".php?op=ABTrackedAgentsPages' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='tid' value='$tid' />\n";
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
    echo "</select> <strong>"._AB_OF." $pages</strong> <input type='submit' value='"._AB_GO."' />\n";
    echo "</form></td>\n";

    echo "<td align='right' width='33%'>";
    echo "<form action='".$admin_file.".php?op=ABTrackedAgentsPages' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min + $perpage)."' />\n";
    echo "<input type='hidden' name='showmodule' value='$showmodule' />\n";
    echo "<input type='hidden' name='tid' value='$tid' />\n";
    echo "<input type='hidden' name='ip_addr' value='$ip_addr' />\n";
    if($currentpage >= $pages) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_NEXTPAGE."' />";
    }
    echo "</form>\n";
    echo "</td>\n";

    echo "</tr>\n</table>\n</td>\n</tr>\n";
  }
  // Page Numbering
echo "</table>";
// End Page Stats
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>