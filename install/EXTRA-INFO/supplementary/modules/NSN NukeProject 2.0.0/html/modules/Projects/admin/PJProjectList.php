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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_PROJECTS.": "._PJ_PROJECTLIST;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
pjadmin_menu(_PJ_PROJECTS.": "._PJ_PROJECTLIST);
echo "<br />\n";
$projectresult = $db->sql_query("SELECT `project_id`, `project_name`, `weight`, `featured`, `status_id`, `priority_id` FROM `".$prefix."_nsnpj_projects` ORDER BY `weight`");
$project_total = $db->sql_numrows($projectresult);
OpenTable();
echo "<table width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr><td colspan='3' width='100%' bgcolor='$bgcolor2'><nobr><strong>"._PJ_PROJECTOPTIONS."</strong></nobr></td></tr>\n";
$pjimage = pjimage("options.png", $module_name);
echo "<tr><td><img src='$pjimage'></td><td colspan='2' width='100%'><nobr><a href='".$admin_file.".php?op=PJProjectAdd'>"._PJ_PROJECTADD."</a></nobr></td></tr>\n";
$pjimage = pjimage("stats.png", $module_name);
echo "<tr><td><img src='$pjimage'></td><td colspan='3' width='100%'><nobr>"._PJ_TOTALPROJECTS.": <strong>$project_total</strong></nobr></td></tr>\n";
echo "</table>\n";
//CloseTable();
echo "<br />\n";
//OpenTable();
echo "<table width='100%' border='1' cellspacing='0' cellpadding='2'>\n";
echo "<tr><td colspan='2' bgcolor='$bgcolor2' width='100%'><strong>"._PJ_PROJECTS."</strong></a></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_WEIGHT."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_STATUS."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_PRIORITY."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_TASKS."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_REPORTS."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_REQUESTS."</strong></td>\n";
echo "<td align='center' bgcolor='$bgcolor2'><strong>"._PJ_FUNCTIONS."</strong></td></tr>\n";
if($project_total != 0){
  while(list($project_id, $project_name, $weight, $featured, $status_id, $priority_id) = $db->sql_fetchrow($projectresult)) {
    $tasksresult = $db->sql_query("SELECT * FROM `".$prefix."_nsnpj_tasks` WHERE `project_id`='$project_id'");
    $tasks = $db->sql_numrows($tasksresult);
    $reportsresult = $db->sql_query("SELECT * FROM `".$prefix."_nsnpj_reports` WHERE `project_id`='$project_id'");
    $reports = $db->sql_numrows($reportsresult);
    $requestsresult = $db->sql_query("SELECT * FROM `".$prefix."_nsnpj_requests` WHERE `project_id`='$project_id'");
    $requests = $db->sql_numrows($requestsresult);
    $projectstatus = pjprojectstatus_info($status_id);
    $projectpriority = pjprojectpriority_info($priority_id);
    if($featured > 0) {
      $pjimage = pjimage("project_featured.png", $module_name);
    } else {
      $pjimage = pjimage("project.png", $module_name);
    }
    echo "<tr><td><img src='$pjimage'></td><td width='100%'>$project_name</td>\n";
    $weight1 = $weight - 1;
    $weight3 = $weight + 1;
    $res = $db->sql_query("SELECT `project_id` FROM `".$prefix."_nsnpj_projects` WHERE `weight`='$weight1'");
    list($pid1) = $db->sql_fetchrow($res);
    $con1 = "$pid1";
    $res2 = $db->sql_query("SELECT `project_id` FROM `".$prefix."_nsnpj_projects` WHERE `weight`='$weight3'");
    list($pid2) = $db->sql_fetchrow($res2);
    $con2 = "$pid2";
    echo "<td align='center'><nobr>";
    if($con1) {
      echo"<a href='".$admin_file.".php?op=PJProjectOrder&amp;weight=$weight&amp;pid=$project_id&amp;weightrep=$weight1&amp;pidrep=$con1'><img src='modules/$module_name/images/weight_up.png' border='0' hspace='3' alt='"._PJUP."' title='"._PJ_UP."'></a>";
    } else {
      echo "<img src='modules/$module_name/images/weight_up_no.png' border='0' hspace='3' alt='' title=''>";
    }
    if($con2) {
      echo "<a href='".$admin_file.".php?op=PJProjectOrder&amp;weight=$weight&amp;pid=$project_id&amp;weightrep=$weight3&amp;pidrep=$con2'><img src='modules/$module_name/images/weight_dn.png' border='0' hspace='3' alt='"._PJDOWN."' title='"._PJ_DOWN."'></a>";
    } else {
      echo "<img src='modules/$module_name/images/weight_dn_no.png' border='0' hspace='3' alt='' title=''>";
    }
    echo"</nobr></td>\n";
    if(empty($projectstatus['status_name'])) { $projectstatus['status_name'] = _PJ_NA; }
    echo "<td align='center'><a href='".$admin_file.".php?op=PJProjectStatusList'>".$projectstatus['status_name']."</a></td>\n";
    if(empty($projectpriority['priority_name'])) { $projectpriority['priority_name'] = _PJ_NA; }
    echo "<td align='center'><a href='".$admin_file.".php?op=PJProjectPriorityList'>".$projectpriority['priority_name']."</a></td>\n";
    echo "<td align='center'><a href='".$admin_file.".php?op=PJProjectTasks&amp;project_id=$project_id'>$tasks</a></td>\n";
    echo "<td align='center'><a href='".$admin_file.".php?op=PJProjectReports&amp;project_id=$project_id'>$reports</a></td>\n";
    echo "<td align='center'><a href='".$admin_file.".php?op=PJProjectRequests&amp;project_id=$project_id'>$requests</a></td>\n";
    echo "<td align='center'><nobr>[ <a href='".$admin_file.".php?op=PJProjectEdit&amp;project_id=$project_id'>"._PJ_EDIT."</a>";
    echo " | <a href='".$admin_file.".php?op=PJProjectRemove&amp;project_id=$project_id'>"._PJ_DELETE."</a> ]</nobr></td></tr>\n";
  }
  echo "<tr><td align='center' colspan='9'><a href='".$admin_file.".php?op=PJProjectFix'>"._PJ_FIXWEIGHT."</a></td></tr>\n";
} else {
  echo "<tr><td width='100%' colspan='9' align='center'>"._PJ_NOPROJECTS."</td></tr>\n";
}
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>