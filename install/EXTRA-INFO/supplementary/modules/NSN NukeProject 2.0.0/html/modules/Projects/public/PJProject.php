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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_VIEWPROJECT;
include_once(NUKE_BASE_DIR.'header.php');
$project_id = intval($project_id);
$project = pjprojectpercent_info($project_id);
$projectstatus = pjprojectstatus_info($project['status_id']);
$memberresult = $db->sql_query("SELECT `member_id` FROM `".$prefix."_nsnpj_projects_members` WHERE `project_id`='$project_id' ORDER BY `member_id`");
$member_total = $db->sql_numrows($memberresult);
$project_reports = $db->sql_numrows($db->sql_query("SELECT `report_id` FROM `".$prefix."_nsnpj_reports` WHERE `project_id`='$project_id'"));
$project_requests = $db->sql_numrows($db->sql_query("SELECT `request_id` FROM `".$prefix."_nsnpj_requests` WHERE `project_id`='$project_id'"));
$project_tasks = $db->sql_numrows($db->sql_query("SELECT `task_id` FROM `".$prefix."_nsnpj_tasks` WHERE `project_id`='$project_id'"));
$projectpriority = pjprojectpriority_info($project['priority_id']);
title(_PJ_TITLE." ".$pj_config['version_number'].": "._PJ_VIEWPROJECT);
OpenTable();
echo "<table align='center' width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr><td bgcolor='$bgcolor2' width='100%' colspan='2'><nobr><strong>"._PJ_PROJECTNAME."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_STATUS."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_PRIORITY."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_PROGRESSBAR."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_MEMBERS."</strong></nobr></td></tr>\n";
if($project['featured'] > 0) { $project['project_name'] = "<strong>".$project['project_name']."</strong>"; }
$pjimage = pjimage("project.png", $module_name);
echo "<tr><td align='center'><img src='$pjimage'></td>\n";
echo "<td width='100%'><nobr>".$project['project_name']."</nobr></td>\n";
if(empty($projectstatus['status_name'])){ $projectstatus['status_name'] = _PJ_NA; }
echo "<td align='center'><nobr>".$projectstatus['status_name']."</nobr></td>\n";
if(empty($projectpriority['priority_name'])){ $projectpriority['priority_name'] = _PJ_NA; }
echo "<td align='center'><nobr>".$projectpriority['priority_name']."</nobr></td>\n";
$wbprogress = pjprogress($project['project_percent']);
echo "<td align='center'><nobr>$wbprogress</nobr></td>\n";
echo "<td align='center'><nobr>$member_total</nobr></td></tr>\n";
if($project['project_site'] != ""){
  $pjimage = pjimage("demo.png", $module_name);
  echo "<tr><td align='center' valign='top'><img src='$pjimage'></td>";
  echo "<td width='100%' colspan='5'><a href='".$project['project_site']."' target='_blank'>".$project['project_site']."</a></td></tr>";
}
if($project['project_description'] != ""){
  $pjimage = pjimage("description.png", $module_name);
  echo "<tr><td align='center' valign='top'><img src='$pjimage'></td>";
  echo "<td width='100%' colspan='5'>".nl2br($project['project_description'])."</td></tr>";
}
$pjimage = pjimage("stats.png", $module_name);
echo "<tr><td align='center'><img src='$pjimage'></td><td width='100%' colspan='5'><nobr>"._PJ_TASKS.": <strong>$project_tasks</strong>&nbsp;&nbsp;/&nbsp;&nbsp;"._PJ_REPORTS.": <strong>$project_reports</strong>&nbsp;&nbsp;/&nbsp;&nbsp;"._PJ_REQUESTS.": <strong>$project_requests</strong></nobr></td></tr>";
if($project['date_started'] > 0){
  $start_date = date($pj_config['project_date_format'], $project['date_started']);
} else {
  $start_date = _PJ_NA;
}
$pjimage = pjimage("date.png", $module_name);
echo "<tr><td align='center'><img src='$pjimage'></td>\n";
echo "<td width='100%' colspan='5'><nobr>"._PJ_STARTDATE.": <strong>$start_date</strong></nobr></td></tr>\n";
if($project['date_finished'] > 0){
  $finish_date = date($pj_config['project_date_format'], $project['date_finished']);
} else {
  $finish_date = _PJ_NA;
}
$pjimage = pjimage("date.png", $module_name);
echo "<tr><td align='center'><img src='$pjimage'></td>\n";
echo "<td width='100%' colspan='5'><nobr>"._PJ_FINISHDATE.": <strong>$finish_date</strong></nobr></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' colspan='4'><nobr><strong>"._PJ_PROJECTMEMBERS."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2' colspan='2'><nobr><strong>"._PJ_POSITION."</strong></nobr></td></tr>\n";
$memberresult = $db->sql_query("SELECT `member_id`, `position_id` FROM `".$prefix."_nsnpj_projects_members` WHERE `project_id`='$project_id' ORDER BY `member_id`");
$member_total = $db->sql_numrows($memberresult);
if($member_total != 0){
  while(list($member_id, $position_id) = $db->sql_fetchrow($memberresult)) {
    $member = pjmember_info($member_id);
    $position = pjmemberposition_info($position_id);
    $pjimage = pjimage("member.png", $module_name);
    echo "<tr><td><img src='$pjimage'></td><td width='100%' colspan='3'><a href='mailto:".pjencode_email($member['member_email'])."'>".$member['member_name']."</a></td>\n";
    if(empty($position['position_name'])){ $position['position_name'] = "----------"; }
    echo "<td align='center' colspan='2'><nobr>".$position['position_name']."</nobr></td></tr>\n";
  }
} else {
  echo "<tr><td colspan='3'><center><nobr>"._PJ_NOPROJECTMEMBERS."</nobr></center></td></tr>\n";
}
if(is_admin()) {
  echo "<tr><td bgcolor='$bgcolor2' colspan='6' width='100%'><nobr><strong>"._PJ_ADMINFUNCTIONS."</strong></nobr></td></tr>\n";
  $pjimage = pjimage("options.png", $module_name);
  echo "<tr><td align='center'><img src='$pjimage'></td>\n";
  echo "<td colspan='5' width='100%'><nobr><a href='".$admin_file.".php?op=PJProjectEdit&amp;project_id=$project_id'>"._PJ_EDITPROJECT."</a>";
  echo ", <a href='".$admin_file.".php?op=PJProjectRemove&amp;project_id=$project_id'>"._PJ_DELETEPROJECT."</a></nobr></td></tr>\n";
}
echo "</table>\n";
echo "<br />\n";
if(!$column1) $column1 = "task_name";
if(!$direction1) $direction1 = "asc";
echo "<table width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr>\n";
echo "<td colspan='2' bgcolor='$bgcolor2' width='100%'><nobr><strong>"._PJ_TASKS."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_STATUS."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_PRIORITY."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_PROGRESSBAR."</strong></nobr></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_MEMBERS."</strong></nobr></td>\n";
echo "</tr>\n";
$taskresult = $db->sql_query("SELECT `task_id`, `task_name`, `task_percent`, `priority_id`, `status_id` FROM `".$prefix."_nsnpj_tasks` WHERE `project_id`='$project_id' ORDER BY `$column1` $direction1");
$task_total = $db->sql_numrows($taskresult);
if($task_total != 0){
  while(list($task_id, $task_name, $task_percent, $priority_id, $status_id) = $db->sql_fetchrow($taskresult)) {
    $taskstatus = pjtaskstatus_info($status_id);
    $memberresult = $db->sql_query("SELECT member_id FROM ".$prefix."_nsnpj_tasks_members WHERE task_id='$task_id' ORDER BY member_id");
    $member_total = $db->sql_numrows($memberresult);
    $taskpriority = pjtaskpriority_info($priority_id);
    echo "<tr>\n";
    $pjimage = pjimage("task.png", $module_name);
    echo "<td><img src='$pjimage'></td>\n";
    echo "<td width='100%'><a href='modules.php?name=$module_name&amp;op=PJTask&amp;task_id=$task_id'>$task_name</a></td>\n";
    if(empty($taskstatus['status_name'])){ $taskstatus['status_name'] = _PJ_NA; }
    echo "<td align='center'><nobr>".$taskstatus['status_name']."</nobr></td>\n";
    if(empty($taskpriority['priority_name'])){ $taskpriority['priority_name'] = _PJ_NA; }
    echo "<td align='center'><nobr>".$taskpriority['priority_name']."</nobr></td>\n";
    $wbprogress = pjprogress($task_percent);
    echo "<td align='center'><nobr>$wbprogress</nobr></td>\n";
    echo "<td align='center'><nobr>$member_total</nobr></td>\n";
    echo "</tr>\n";
  }
  echo "<tr>\n";
  echo "<form method='post' action='modules.php'>\n";
  echo "<input type='hidden' name='name' value='$module_name'>\n";
  echo "<input type='hidden' name='op' value='PJProject'>\n";
  echo "<input type='hidden' name='project_id' value='$project_id'>\n";
  echo "<td align='right' bgcolor='$bgcolor2' width='100%' colspan='6'><strong>"._PJ_SORT.":</strong> ";
  echo "<select name='column1'>\n";
  if($column1 == "task_name") $selcolumn11 = "selected";
  echo "<option value='task_name' $selcolumn11>"._PJ_TASKNAME."</option>\n";
  if($column1 == "status_id") $selcolumn12 = "selected";
  echo "<option value='status_id' $selcolumn12>"._PJ_STATUS."</option>\n";
  if($column1 == "priority_id") $selcolumn13 = "selected";
  echo "<option value='priority_id' $selcolumn13>"._PJ_PRIORITY."</option>\n";
  echo "</select> ";
  echo "<select name='direction1'>\n";
  if($direction1 == "asc") $seldirection11 = "selected";
  echo "<option value='asc' $seldirection11>"._PJ_ASC."</option>\n";
  if($direction1 == "desc") $seldirection12 = "selected";
  echo "<option value='desc' $seldirection12>"._PJ_DESC."</option>\n";
  echo "</select> ";
  echo "<input type='submit' value='"._PJ_SORT."'>\n";
  echo "</td></form></tr>\n";
  echo "<tr>\n";
} else {
  echo "<tr><td width='100%' colspan='6' align='center'><nobr>"._PJ_NOPROJECTTASKS."</nobr></td></tr>\n";
}
echo "</table>\n";
if($project['allowreports'] > 0) {
  echo "<br />\n";
  if(!$column2) $column2 = "report_name";
  if(!$direction2) $direction2 = "asc";
  echo "<table border='1' cellpadding='2' cellspacing='0' width='100%'>\n";
  echo "<tr><td colspan='6'><nobr><a href='modules.php?name=$module_name&amp;op=PJReportSubmit&amp;project_id=$project_id'>"._PJ_SUBMITAREPORT."</a></nobr></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' colspan='2' width='100%'><nobr><strong>"._PJ_REPORTS."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_TYPE."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_STATUS."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_SUBMITTED."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_COMMENTS."</strong></nobr></td></tr>\n";
  $reportresult = $db->sql_query("SELECT `report_id` FROM `".$prefix."_nsnpj_reports` WHERE `project_id`='$project_id' ORDER BY `$column2` $direction2");
  $report_total = $db->sql_numrows($reportresult);
  if($report_total != 0){
    while(list($report_id) = $db->sql_fetchrow($reportresult)) {
      $report = pjreport_info($report_id);
      $reporttype = pjreporttype_info($report['type_id']);
      $reportstatus = pjreportstatus_info($report['status_id']);
      if(empty($report['report_name'])) { $report['report_name'] = "----------"; }
      if(empty($reporttype['type_name'])) { $reporttype['type_name'] = _PJ_NA; }
      if(empty($reportstatus['status_name'])) { $reportstatus['status_name'] = _PJ_NA; }
      $last_date = date($pj_config['report_date_format'], $report['date_submitted']);    
      $comments = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnpj_reports_comments` WHERE `report_id`='$report_id'"));
      $pjimage = pjimage("report.png", $module_name);
      echo "<tr><td><img src='$pjimage'></td>\n";
      echo "<td width='100%'><a href='modules.php?name=$module_name&amp;op=PJReport&amp;report_id=$report_id'>".$report['report_name']."</a></td>\n";
      echo "<td align='center'><nobr>".$reporttype['type_name']."</nobr></td>\n";
      echo "<td align='center'><nobr>".$reportstatus['status_name']."</nobr></td>\n";
      echo "<td align='center'><nobr>$last_date</nobr></td>\n";
      echo "<td align='center'><nobr>$comments</nobr></td></tr>\n";
    }
    echo "<form method='post' action='modules.php'>\n";
    echo "<input type='hidden' name='name' value='$module_name'>\n";
    echo "<input type='hidden' name='op' value='PJProject'>\n";
    echo "<input type='hidden' name='project_id' value='$project_id'>\n";
    echo "<td align='right' bgcolor='$bgcolor2' width='100%' colspan='6'><strong>"._PJ_SORT.":</strong> ";
    echo "<select name='column2'>\n";
    if($column2 == "report_name") $selcolumn21 = "selected";
    echo "<option value='report_name' $selcolumn21>"._PJ_REPORTNAME."</option>\n";
    if($column2 == "status_id") $selcolumn22 = "selected";
    echo "<option value='status_id' $selcolumn22>"._PJ_STATUS."</option>\n";
    if($column2 == "type_id") $selcolumn23 = "selected";
    echo "<option value='type_id' $selcolumn23>"._PJ_TYPE."</option>\n";
    if($column2 == "date_submitted") $selcolumn24 = "selected";
    echo "<option value='date_submitted' $selcolumn24>"._PJ_SUBMITTED."</option>\n";
    echo "</select> ";
    echo "<select name='direction2'>\n";
    if($direction2 == "asc") $seldirection21 = "selected";
    echo "<option value='asc' $seldirection21>"._PJ_ASC."</option>\n";
    if($direction2 == "desc") $seldirection22 = "selected";
    echo "<option value='desc' $seldirection22>"._PJ_DESC."</option>\n";
    echo "</select> ";
    echo "<input type='submit' value='"._PJ_SORT."'>\n";
    echo "</td></form></tr>\n";
    echo "<tr>\n";
  } else {
    echo "<tr><td align='center' colspan='6' width='100%'><nobr>"._PJ_NOPROJECTREPORTS."</nobr></td></tr>\n";
  }
  echo "</table>\n";
}
if($project['allowrequests'] > 0) {
  echo "<br />\n";
  if(!$column3) $column3 = "request_name";
  if(!$direction3) $direction3 = "asc";
  echo "<table border='1' cellpadding='2' cellspacing='0' width='100%'>\n";
  echo "<tr><td colspan='6'><nobr><a href='modules.php?name=$module_name&amp;op=PJRequestSubmit&amp;project_id=$project_id'>"._PJ_SUBMITAREQUEST."</a></nobr></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' colspan='2' width='100%'><nobr><strong>"._PJ_REQUESTS."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_TYPE."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_STATUS."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_SUBMITTED."</strong></nobr></td>\n";
  echo "<td align='center' bgcolor='$bgcolor2'><nobr><strong>"._PJ_COMMENTS."</strong></nobr></td></tr>\n";
  $requestresult = $db->sql_query("SELECT `request_id` FROM `".$prefix."_nsnpj_requests` WHERE `project_id`='$project_id' ORDER BY `$column3` $direction3");
  $request_total = $db->sql_numrows($requestresult);
  if($request_total != 0){
    while(list($request_id) = $db->sql_fetchrow($requestresult)) {
      $request = pjrequest_info($request_id);
      $requesttype = pjrequesttype_info($request['type_id']);
      $requeststatus = pjrequeststatus_info($request['status_id']);
      if(empty($request['request_name'])) { $request['request_name'] = "----------"; }
      if(empty($requesttype['type_name'])) { $requesttype['type_name'] = _PJ_NA; }
      if(empty($requeststatus['status_name'])) { $requeststatus['status_name'] = _PJ_NA; }
      $last_date = date($pj_config['request_date_format'], $request['date_submitted']);
      $comments = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnpj_requests_comments` WHERE `request_id`='$request_id'"));
      $pjimage = pjimage("request.png", $module_name);
      echo "<tr><td><img src='$pjimage'></td>\n";
      echo "<td width='100%'><a href='modules.php?name=$module_name&amp;op=PJRequest&amp;request_id=$request_id'>".$request['request_name']."</a></td>\n";
      echo "<td align='center'><nobr>".$requesttype['type_name']."</nobr></td>\n";
      echo "<td align='center'><nobr>".$requeststatus['status_name']."</nobr></td>\n";
      echo "<td align='center'><nobr>$last_date</nobr></td>\n";
      echo "<td align='center'><nobr>$comments</nobr></td></tr>\n";
    }
    echo "<form method='post' action='modules.php'>\n";
    echo "<input type='hidden' name='name' value='$module_name'>\n";
    echo "<input type='hidden' name='op' value='PJProject'>\n";
    echo "<input type='hidden' name='project_id' value='$project_id'>\n";
    echo "<td align='right' bgcolor='$bgcolor2' width='100%' colspan='6'><strong>"._PJ_SORT.":</strong> ";
    echo "<select name='column3'>\n";
    if($column3 == "request_name") $selcolumn31 = "selected";
    echo "<option value='request_name' $selcolumn31>"._PJ_REQUESTNAME."</option>\n";
    if($column3 == "status_id") $selcolumn32 = "selected";
    echo "<option value='status_id' $selcolumn32>"._PJ_STATUS."</option>\n";
    if($column3 == "type_id") $selcolumn33 = "selected";
    echo "<option value='type_id' $selcolumn33>"._PJ_TYPE."</option>\n";
    if($column3 == "date_submitted") $selcolumn34 = "selected";
    echo "<option value='date_submitted' $selcolumn34>"._PJ_SUBMITTED."</option>\n";
    echo "</select> ";
    echo "<select name='direction3'>\n";
    if($direction3 == "asc") $seldirection31 = "selected";
    echo "<option value='asc' $seldirection31>"._PJ_ASC."</option>\n";
    if($direction3 == "desc") $seldirection32 = "selected";
    echo "<option value='desc' $seldirection32>"._PJ_DESC."</option>\n";
    echo "</select> ";
    echo "<input type='submit' value='"._PJ_SORT."'>\n";
    echo "</td></form></tr>\n";
    echo "<tr>\n";
  } else {
    echo "<tr><td align='center' colspan='6' width='100%'><nobr>"._PJ_NOPROJECTREQUESTS."</nobr></td></tr>\n";
  }
  echo "</table>";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>