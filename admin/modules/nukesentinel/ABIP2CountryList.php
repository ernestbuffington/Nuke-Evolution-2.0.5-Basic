<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_IP2CLISTING;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_IP2CLISTING);
ipbanmenu();
CarryMenu();
ip2cmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$perpage = 50;
if($perpage == 0) { $perpage = 25; }
if(!isset($showcountry)) $showcountry="All_Countries";
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!isset($column) or !$column or $column=="") $column = "ip_lo";
if(!isset($direction) or !$direction or $direction=="") $direction = "asc";
if(ereg("All.*Countries", $showcountry) || !$showcountry) {
  $modfilter="";
} else {
  $modfilter="WHERE c2c = '$showcountry'";
}
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country` $modfilter"));
if($totalselected > 0) {
	$selcolumn1=$selcolumn2='';
	$seldirection1=$seldirection2='';
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  // Page Sorting
  echo "<tr><td colspan='7'><table width='100%' cellpadding='0' cellspacing='0' border='0'>\n";
  echo "<tr>\n";
  echo "<td bgcolor='$bgcolor2' width='40%'><form method='post' action='".$admin_file.".php?op=ABIP2CountryList'>\n";
  echo "<input type='hidden' name='min' value='$min' />\n";
  echo "<input type='hidden' name='showcountry' value='$showcountry' />\n";
  echo "<strong>"._AB_SORT.":</strong> <select name='column'>\n";
  if($column == "ip_lo") $selcolumn1 = "selected";
  echo "<option value='ip_lo' $selcolumn1>"._AB_IP2CRANGE."</option>\n";
  if($column == "c2c") $selcolumn2 = "selected";
  echo "<option value='c2c' $selcolumn2>"._AB_C2CODE."</option>\n";
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
  // START Modules
  echo "<td align='right' bgcolor='$bgcolor2' width='60%'><form action=\"".$admin_file.".php?op=ABIP2CountryList\" method=\"post\">\n";
  echo "<input type='hidden' name='column' value='$column' />\n";
  echo "<input type='hidden' name='direction' value='$direction' />\n";
  echo "<strong>"._AB_COUNTRY.":</strong> <select name=\"showcountry\">\n";
  echo "<option value=\"&nbsp;All&nbsp;Countries\" ";
  if($showcountry=="&nbsp;All&nbsp;Countries") { echo " selected"; }
  echo ">All Countries</option>\n";
  $countries=$db->sql_query("SELECT `c2c`, `country` FROM `".$prefix."_nsnst_countries` ORDER BY `c2c`");;
  while(list($xc2c, $xcountry) = $db->sql_fetchrow($countries)) {
    echo "<option value=\"$xc2c\" ";
    if($showcountry==$xc2c) { echo " selected"; }
    echo ">$xcountry</option>\n";
  }
  echo "</select> <input type='submit' value='"._AB_GO."' /></form></td>\n";
  // END Modules
  echo "</tr>\n";
  echo "</table>\n";
  echo "<tr bgcolor='$bgcolor1'><td colspan='7'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_C2CODE."</strong></td>\n";
  echo "<td align='center' width='25%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_DATE."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CIDRS."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
  echo "</tr>\n";
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country` $modfilter ORDER BY $column $direction LIMIT $min,$perpage");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    $getIPs1 = abget_countrytitle($getIPs['c2c']);
    $getIPs['country'] = $getIPs1['country'];
    $masscidr = ABGetCIDRs($getIPs['ip_lo'], $getIPs['ip_hi']);
    $masscidr = str_replace("||", ",<br />", $masscidr);
    if(stristr($masscidr, "<br />")) { $valign = " valign='top'"; } else { $valign = ""; }
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_lo_ip']."' target='_blank'>".$getIPs['ip_lo_ip']."</a></td>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_hi_ip']."' target='_blank'>".$getIPs['ip_hi_ip']."</a></td>\n";
    echo "<td align='center'$valign>".$getIPs['c2c']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['country']."</td>\n";
    echo "<td align='center'$valign>".date("Y-m-d",$getIPs['date'])."</td>\n";
    echo "<td align='center'$valign>$masscidr</td>\n";
    echo "<td align='center'$valign>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;xop=$op&amp;showcountry=$showcountry'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;xop=$op&amp;showcountry=$showcountry'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABBlockedRangeAdd&amp;ip_lo=".$getIPs['ip_lo_ip']."&amp;ip_hi=".$getIPs['ip_hi_ip']."&amp;tc2c=".strtolower($getIPs['c2c'])."' target='_blank'><img src='images/nukesentinel/block.png' border='0' alt='"._AB_BLOCK."' title='"._AB_BLOCK."' height='16' width='16' /></a>&nbsp;</td>\n";
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
    echo "<tr bgcolor='$bgcolor1'><td colspan='7'><img src='images/pix.gif' height='2' width='2' alt='' title='' /></td></tr>\n";
    echo "<tr>\n<td colspan='7'>\n<table border='0' cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
    echo "<td width='33%'>";
    echo "<form action='".$admin_file.".php?op=ABIP2CountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min - $perpage)."' />\n";
    echo "<input type='hidden' name='showcountry' value='$showcountry' />\n";
    if($currentpage <= 1) {
      echo "&nbsp;";
    } else {
      echo "<input type='submit' value='"._AB_PREVPAGE."' />";
    }
    echo "</form>\n";
    echo "</td>\n";

    echo "<td align='center' width='34%'>";
    echo "<form action='".$admin_file.".php?op=ABIP2CountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='showcountry' value='$showcountry' />\n";
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
    echo "<form action='".$admin_file.".php?op=ABIP2CountryList' method='post'>\n";
    echo "<input type='hidden' name='column' value='$column' />\n";
    echo "<input type='hidden' name='direction' value='$direction' />\n";
    echo "<input type='hidden' name='min' value='".($min + $perpage)."' />\n";
    echo "<input type='hidden' name='showcountry' value='$showcountry' />\n";
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
  echo "</table>\n";
} else {
  echo "<center><strong>"._AB_NOIPS."</strong></center>\n";
}
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>