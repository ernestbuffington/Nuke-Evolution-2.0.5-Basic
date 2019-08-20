<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_BLOCKEDRANGES;
include(NUKE_BASE_DIR."header.php");
title($pagetitle);
stmain_menu();
echo "<br />\n";
OpenTable();
$perpage = $ab_config['block_perpage'];
if ($perpage == 0) { $perpage = 25; }
if (!isset($min)) $min=0;
if (!isset($max)) $max=$min+$perpage;
if(!$column or empty($column)) $column = "ip_lo";
if(!$direction or empty($direction)) $direction = "asc";
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ranges`"));
if ($totalselected > 0) {
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  // Page Sorting
  echo "<tr><form method='post' action='modules.php?name=$module_name'>\n";
  echo "<input type='hidden' name='op' value='STRanges'>\n";
  echo "<input type='hidden' name='min' value='$min'>\n";
  echo "<td align='right' bgcolor='$bgcolor2' colspan='3'><strong>"._AB_SORT.":</strong> ";
  echo "<select name='column'>\n";
  if($column == "ip_lo") $selcolumn1 = "selected";
  echo "<option value='ip_lo' $selcolumn1>"._AB_IP2CRANGE."</option>\n";
  if($column == "date,ip_lo") $selcolumn3 = "selected";
  echo "<option value='date,ip_lo' $selcolumn3>"._AB_DATE."</option>\n";
  echo "</select> ";
  echo "<select name='direction'>\n";
  if($direction == "asc") $seldirection1 = "selected";
  echo "<option value='asc' $seldirection1>"._AB_ASC."</option>\n";
  if($direction == "desc") $seldirection2 = "selected";
  echo "<option value='desc' $seldirection2>"._AB_DESC."</option>\n";
  echo "</select> ";
  echo "<input type='submit' value='"._AB_SORT."'>\n";
  echo "</td></form></tr>";
  // Page Sorting
  echo "<tr bgcolor='$bgcolor1'><td colspan='3'><img src='images/pix.gif' height='2' width='2' alt='' title=''></td></tr>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td align='center' width='33%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td align='center' width='33%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='34%'><strong>"._AB_DATE."</strong></td>\n";
  echo "</tr>\n";
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ranges` ORDER BY $column $direction LIMIT $min,$perpage");
  while ($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td align='center'>".$getIPs['ip_lo_ip']."</td>\n";
    echo "<td align='center'>".$getIPs['ip_hi_ip']."</td>\n";
    echo "<td align='center'>".date("Y-m-d \@ H:i:s",$getIPs['date'])."</td>\n";
    echo "</tr>\n";
  }
  // Page Numbering
  $pagesint = ($totalselected / $perpage);
  $pageremainder = ($totalselected % $perpage);
  if ($pageremainder != 0) {
    $pages = ceil($pagesint);
    if ($totalselected < $perpage) { $pageremainder = 0; }
  } else {
    $pages = $pagesint;
  }
  if ($pages != 1 && $pages != 0) {
    echo "<tr bgcolor='$bgcolor1'><td colspan='3'><img src='images/pix.gif' height='2' width='2' alt='' title=''></td></tr>\n";
    echo "<tr><form action='modules.php?name=$modules_name' method='post'>\n";
    echo "<input type='hidden' name='op' value='STRanges'>\n";
    echo "<td align='right' bgcolor='$bgcolor2' colspan='3'><strong>"._AB_PAGE."</strong> ";
    $counter = 1;
    $currentpage = ($max / $perpage);
    echo "<input type='hidden' name='column' value='$column'>\n";
    echo "<input type='hidden' name='direction' value='$direction'>\n";
    echo "<select name='min'>\n";
    while ($counter <= $pages ) {
      $cpage = $counter;
      $mintemp = ($perpage * $counter) - $perpage;
      if ($counter == $currentpage) {
        echo "<option selected>$counter</option>";
      } else {
        echo "<option value='$mintemp'>$counter</option>";
      }
      $counter++;
    }
    echo "</select> <strong>"._AB_OF." $pages</strong> <input type='submit' value='"._AB_GO."'></td>\n</form></tr>\n";
  }
  // Page Numbering
  echo "</table>\n";
} else {
  echo "<center><strong>"._AB_NORANGES."</strong></center>\n";
}
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>