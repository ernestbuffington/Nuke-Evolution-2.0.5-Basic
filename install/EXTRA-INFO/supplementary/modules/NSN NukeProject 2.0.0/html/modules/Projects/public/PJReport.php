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

if(!defined('NSNPJ_PUBLIC')) { die("Illegal Access Detected!!!"); }
$report_id = intval($report_id);
$report = pjreport_info($report_id);
$project = pjproject_info($report['project_id']);
if($project['allowreports'] > 0) {
  $pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REPORTVIEW;
  include_once(NUKE_BASE_DIR.'header.php');
  title(_PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REPORTVIEW);
  $project = pjproject_info($report['project_id']);
  $reportstatus = pjreportstatus_info($report['status_id']);
  $reporttype = pjreporttype_info($report['type_id']);
  if(empty($reportstatus['status_name'])){ $reportstatus['status_name'] = _PJ_NA; }
  if(empty($reporttype['type_name'])){ $reporttype['type_name'] = _PJ_NA; }
  OpenTable();
  echo "<center><table border='1' cellpadding='2' cellspacing='0' width='100%'>\n";
  echo "<tr><td bgcolor='$bgcolor2' colspan='4' width='100%'><nobr><strong>"._PJ_PROJECTNAME."</strong></nobr></td></tr>\n";
  $pjimage = pjimage("project.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td>\n";
  echo "<td colspan='3' width='100%'><nobr><a href='modules.php?name=$module_name&amp;op=PJProject&amp;project_id=".$project['project_id']."'>".$project['project_name']."</a></nobr></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' colspan='2' width='100%'><nobr><strong>"._PJ_REPORTINFO."</strong></nobr></td>\n";
  echo "<td bgcolor='$bgcolor2' align='center'><strong>"._PJ_STATUS."</strong></td>\n";
  echo "<td bgcolor='$bgcolor2' align='center'><strong>"._PJ_TYPE."</strong></td></tr>\n";
  $pjimage = pjimage("report.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td><td width='100%'><nobr>".$report['report_name']."</nobr></td>\n";
  echo "<td align='center'><nobr>".$reportstatus['status_name']."</nobr></td>\n";
  echo "<td align='center'><nobr>".$reporttype['type_name']."</nobr></td></tr>\n";
  if($report['report_description'] != ""){
    $pjimage = pjimage("description.png", $module_name);
    echo "<tr><td align='center' valign='top'><img src='$pjimage'></td>\n";
    echo "<td colspan='3' width='100%'>".nl2br($report['report_description'])."</td></tr>\n";
  }
  $pjimage = pjimage("reporter.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td>\n";
  echo "<td colspan='3' width='100%'><nobr>"._PJ_REPORTEDBY.": <strong><a href='mailto:".pjencode_email($report['submitter_email'])."'>".$report['submitter_name']."</a></strong></nobr></td></tr>\n";
  if($report['date_submitted'] != '0'){
    $submit_date = date($pj_config['report_date_format'], $report['date_submitted']);
  } else {
    $submit_date = _PJ_NA;
  }
  $pjimage = pjimage("date.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td>\n";
  echo "<td colspan='3' width='100%'><nobr>"._PJ_SUBMITTED.": <strong>$submit_date</strong></nobr></td></tr>\n";
  if($report['date_modified'] != '0'){
    $modify_date = date($pj_config['report_date_format'], $report['date_modified']);
  } else {
    $modify_date = _PJ_NA;    
  }
  $pjimage = pjimage("date.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td>\n";
  echo "<td colspan='3' width='100%'><nobr>"._PJ_MODIFIED.": <strong>$modify_date</strong></nobr></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' colspan='3' width='100%'><nobr><strong>"._PJ_REPORTMEMBERS."</strong></nobr></td>";
  echo "<td bgcolor='$bgcolor2' align='center'><strong>"._PJ_POSITION."</strong></td></tr>\n";
  $memberresult = $db->sql_query("SELECT `member_id`, `position_id` FROM `".$prefix."_nsnpj_reports_members` WHERE `report_id`='$report_id' ORDER BY `member_id`");
  $member_total = $db->sql_numrows($memberresult);
  if($member_total != 0) {
    while(list($member_id, $position_id) = $db->sql_fetchrow($memberresult)) {
      $pjimage = pjimage("member.png", $module_name);
      $member = pjmember_info($member_id);
      $position = pjmemberposition_info($position_id);
      echo "<tr><td><img src='$pjimage'></td><td colspan='2' width='100%'><a href='mailto:".pjencode_email($member['member_email'])."'>".$member['member_name']."</a></td>\n";
      if(empty($position['position_name'])){ $position['position_name'] = "----------"; }
      echo "<td align='center'><nobr>".$position['position_name']."</nobr></td></tr>\n";
    }
  } else {
    echo "<tr><td align='center' colspan='4' width='100%'><nobr>"._PJ_NOREPORTMEMBERS."</nobr></td></tr>\n";
  }
  if(is_admin()) {
    echo "<tr><td bgcolor='$bgcolor2' colspan='4' width='100%'><nobr><strong>"._PJ_ADMINFUNCTIONS."</strong></nobr></td></tr>\n";
    $pjimage = pjimage("options.png", $module_name);
    echo "<tr><td align='center'><img src='$pjimage'></td>\n";
    echo "<td colspan='3' width='100%'><nobr><a href='".$admin_file.".php?op=PJReportEdit&amp;report_id=$report_id'>"._PJ_REPORTEDIT."</a>";
    echo ", <a href='".$admin_file.".php?op=PJReportRemove&amp;report_id=$report_id'>"._PJ_DELETEREPORT."</a>";
    echo ", <a href='".$admin_file.".php?op=PJReportImport&amp;report_id=$report_id'>"._PJ_IMPORTTOTASK."</a>";
    echo ", <a href='".$admin_file.".php?op=PJReportPrint&amp;report_id=$report_id'>"._PJ_REPORTPRINT."</a></nobr></td></tr>\n";
  }
  echo "</table>\n";
  CloseTable();
  echo "<br />\n";
  $commentresult = $db->sql_query("SELECT `comment_id` FROM `".$prefix."_nsnpj_reports_comments` WHERE `report_id`='$report_id' ORDER BY `date_commented` asc");
  $comment_total = $db->sql_numrows($commentresult);
  OpenTable();
  echo "<table border='1' cellpadding='2' cellspacing='0' width='100%'>\n";
  echo "<tr><td bgcolor='$bgcolor2' width='100%'><nobr><strong>"._PJ_COMMENTS."</strong> <strong>(</strong> <a href='modules.php?name=$module_name&amp;op=PJReportCommentSubmit&amp;report_id=$report_id'>"._PJ_COMMENTADD."</a> <strong>)</strong></nobr></td><tr>\n";
  if($comment_total > 0){
    while(list($comment_id) = $db->sql_fetchrow($commentresult)) {
      $comment = pjreportcomment_info($comment_id);
      $comment_date = date($pj_config['report_date_format'], $comment['date_commented']);
      echo "<tr><td bgcolor='$bgcolor2'><nobr><strong><a href='mailto:".pjencode_email($comment['commenter_email'])."'>".$comment['commenter_name']."</a> @ $comment_date</strong>";
      if(is_admin()) {
        echo " - (<a href='".$admin_file.".php?op=PJReportCommentEdit&amp;comment_id=".$comment['comment_id']."'>"._PJ_EDIT."</a>, <a href='".$admin_file.".php?op=PJReportCommentRemove&amp;comment_id=".$comment['comment_id']."'>"._PJ_DELETE."</a>)";
      }
      echo "</nobr></td></tr>\n";
      echo "<tr><td>".nl2br($comment['comment_description'])."</td></tr>\n";
    }
  } else {
    echo "<tr><td align='center'><nobr>"._PJ_NOREPORTCOMMENTS."</nobr></td></tr>\n";
  }
  echo "</table>\n";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
} else {
  header("Location: modules.php?name=$module_name");
}

?>