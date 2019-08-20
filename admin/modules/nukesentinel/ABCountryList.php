<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_COUNTRYLISTING;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_COUNTRYLISTING);
ipbanmenu();
CarryMenu();
ip2cmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$perpage = 50;
if($perpage == 0) { $perpage = 25; }
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!isset($column) or !$column or $column=="") $column = "country";
if(!isset($direction) or !$direction or $direction=="") $direction = "asc";
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries`"));
if($totalselected > 0) {
	$selcolumn1=$selcolumn2='';
	$seldirection1=$seldirection2='';
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  // Page Sorting
  echo "<tr><td colspan='5'><table width='100%' cellpadding='0' cellspacing='0' border='0'>\n";
  echo "<tr>\n";
  echo "<td bgcolor='$bgcolor2' width='100%' align='right'><form method='post' action='".$admin_file.".php?op=ABCountryList'>";
  echo "<input type='hidden' name='min' value='$min' />\n";
  echo "<strong>"._AB_SORT.":</strong> <select name='column'>\n";
  if($column == "c2c") $selcolumn1 = "selected";
  echo "<option value='c2c' $selcolumn1>"._AB_C2CODE."</option>\n";
  if($column == "country") $selcolumn2 = "selected";
  echo "<option value='country' $selcolumn2>"._AB_COUNTRY."</option>\n";
  echo "</select> ";
  echo "<select name='direction'>\n";
  if($direction == "asc") $seldirection1 = "selected";
  echo "<option value='asc' $seldirection1>"._AB_ASC."</option>\n";
  if($direction == "desc") $seldirection2 = "selected";
  echo "<option value='desc' $seldirection2>"._AB_DESC."</option>\n";
  echo "</select> ";
  echo "<input type='submit' value='"._AB_SORT."' />\n";
  echo "</form></td>";
  // Page Sorting
  echo "</tr>\n";
  echo "</table>\n";
  echo "<tr bgcolor='$bgcolor1'><td colspan='5'><img src='images/pix.gif' height='2' width='2' alt='' /></td></tr>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_C2CODE."</strong></td>\n";
  echo "<td width='80%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "</tr>\n";
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` ORDER BY $column $direction LIMIT $min,$perpage");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['flag'] = flag_img($getIPs['c2c']);
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td align='center'>".$getIPs['flag']."</td>\n";
    echo "<td align='center'>".strtoupper($getIPs['c2c'])."</td>\n";
    echo "<td>".$getIPs['country']."</td>\n";
    echo "</tr>\n";
  }
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
    echo "<tr bgcolor='$bgcolor1'><td colspan='6'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
    echo "<tr>\n<td colspan='6'>\n<table border='0' cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";

    echo "<td width='33%'>";
    echo "<form action='".$admin_file.".php?op=ABCountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min - $perpage)."' />\n";
    if($currentpage <= 1) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_PREVPAGE."' />";
    }
    echo "</form></td>\n";

    echo "<td align='center' width='34%'>";
    echo "<form action='".$admin_file.".php?op=ABCountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<strong>"._AB_PAGE."</strong> <select name='min'>\n";
    while($counter <= $pages ) {
      $cpage = $counter;
      $mintemp = ($perpage * $counter) - $perpage;
      if($counter == $currentpage) {
        echo "<option selected='selected'>$counter</option>";
      } else {
        echo "<option value='$mintemp'>$counter</option>";
      }
      $counter++;
    }
    echo "</select> <strong>"._AB_OF." $pages</strong> <input type='submit' value='"._AB_GO."' />\n";
    echo "</form></td>\n";

    echo "<td align='right' width='33%'>";
    echo "<form action='".$admin_file.".php?op=ABCountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min + $perpage)."' />\n";
    if($currentpage >= $pages) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_NEXTPAGE."' />";
    }
    echo "</form></td>\n";

    echo "</tr>\n</table>\n</td>\n</tr>\n";
  }
  // Page Numbering
  echo "</table>\n";
} else {
  echo "<center><strong>"._AB_NOCOUNTRIES."</strong></center>\n";
}
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>