<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(is_god($_COOKIE['admin'])) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_DBREPAIR;
  include(NUKE_BASE_DIR."header.php");
  OpenTable();
  OpenMenu(_AB_DBREPAIR);
  ipbanmenu();
  CarryMenu();
  ipdbmenu();
  CloseMenu();
  CloseTable();
  echo "<br />\n";
  OpenTable();
  echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center' bgcolor='$bgcolor2'>\n";
  echo "<tr>\n";
  echo "<td width='40%'><strong>"._AB_TABLE."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_TYPE."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_STATUS."</strong></td>\n";
  echo "<td align='right' width='15%'><strong>"._AB_RECORDS."</strong></td>\n";
  echo "<td align='right' width='15%'><strong>"._AB_SIZE."</strong></td>\n";
  echo "</tr>\n";
  $tot_data = $tot_idx = $tot_all = $tot_records = 0;
  $result = $db->sql_query("SHOW TABLE STATUS FROM ".$dbname." LIKE '%_nsnst_%'");
  $tables = $db ->sql_numrows($result);
  if($tables > 0) {
      $total_total = $total_gain = 0;
    while($row = $db->sql_fetchrow($result)) {
      $checkrow = $db->sql_fetchrow($db->sql_query("CHECK TABLE $row[0]"));
      if($checkrow['Msg_text'] != "OK") {
        $repairrow = $db->sql_fetchrow($db->sql_query("REPAIR TABLE $row[Table] EXTENDED"));
        $status = $repairrow['Msg_text'];
      } else {
        $status = $checkrow['Msg_text'];
      }
      $records = $row['Rows'];
      $tot_records += $records;
      $total = $tot_data + $tot_idx;
      $total = $total / 1024 ;
      $total_total += $total;
      if(!$row['Engine']) { $etype = $row['Type']; } else { $etype = $row['Engine']; }
      echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
      echo "<td>".$row['Name']."</td>\n";
      echo "<td align='center'>$etype</td>\n";
      echo "<td align='center'>$status</td>\n";
      echo "<td align='right'>".number_format($records)."</td>\n";
      echo "<td align='right'>".number_format($total, 2, '.', ',')." Kb</td>\n";
      echo "</tr>\n";
    }
    $total_total = $total_total / 1024 ;
    echo "<tr>\n";
    echo "<td><strong>$tables "._AB_TABLES."</strong></td>\n";
    echo "<td align='center'><strong>&nbsp;</strong></td>\n";
    echo "<td align='right'><strong>&nbsp;</strong></td>\n";
    echo "<td align='right'><strong>".number_format($tot_records)."</strong></td>\n";
    echo "<td align='right'><strong>".number_format($total_total, 2, '.', ',')." Mb</strong></td>\n";
    echo "</tr>\n";
  }
  echo "</table>";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else {
  Header("Location: ".$admin_file.".php?op=ABMain");
}

?>