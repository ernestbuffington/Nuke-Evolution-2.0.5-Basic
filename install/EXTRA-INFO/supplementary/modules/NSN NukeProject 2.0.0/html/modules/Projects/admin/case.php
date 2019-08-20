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

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       10/25/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

$module_name = basename(dirname(dirname(__FILE__)));
$aid = substr($aid, 0,25);
$query = $db->sql_query("SELECT `title`, `admins` FROM `".$prefix."_modules` WHERE `title`='$module_name'");
list($mod_title, $admins) = $db->sql_fetchrow($query);
$db->sql_freeresult($query);
$query2 = $db->sql_query("SELECT `name`, `radminsuper` FROM `".$prefix."_authors` WHERE `aid`='$aid'");
list($rname, $radminsuper) = $db->sql_fetchrow($query2);
$db->sql_freeresult($query2);
$admins = explode(",", $admins);
$auth_user = 0;
for($i=0; $i < sizeof($admins); $i++) { if($rname == $admins[$i] AND !empty($admins)) { $auth_user = 1; } }
if($radminsuper == 1 || $auth_user == 1) {
  switch ($op) {
    case "PJConfig":
    case "PJConfigUpdate":
    case "PJLoadError":
    case "PJMain":
    case "PJMemberAdd":
    case "PJMemberDelete":
    case "PJMemberEdit":
    case "PJMemberInsert":
    case "PJMemberList":
    case "PJMemberPositionAdd":
    case "PJMemberPositionDelete":
    case "PJMemberPositionEdit":
    case "PJMemberPositionFix":
    case "PJMemberPositionInsert":
    case "PJMemberPositionList":
    case "PJMemberPositionOrder":
    case "PJMemberPositionRemove":
    case "PJMemberPositionUpdate":
    case "PJMemberRemove":
    case "PJMemberUpdate":
    case "PJProjectAdd":
    case "PJProjectConfig":
    case "PJProjectConfigUpdate":
    case "PJProjectDelete":
    case "PJProjectEdit":
    case "PJProjectFix":
    case "PJProjectInsert":
    case "PJProjectList":
    case "PJProjectMembers":
    case "PJProjectOrder":
    case "PJProjectPriorityAdd":
    case "PJProjectPriorityDelete":
    case "PJProjectPriorityEdit":
    case "PJProjectPriorityFix":
    case "PJProjectPriorityInsert":
    case "PJProjectPriorityList":
    case "PJProjectPriorityOrder":
    case "PJProjectPriorityRemove":
    case "PJProjectPriorityUpdate":
    case "PJProjectRemove":
    case "PJProjectReports":
    case "PJProjectRequests":
    case "PJProjectStatusAdd":
    case "PJProjectStatusDelete":
    case "PJProjectStatusEdit":
    case "PJProjectStatusFix":
    case "PJProjectStatusInsert":
    case "PJProjectStatusList":
    case "PJProjectStatusOrder":
    case "PJProjectStatusRemove":
    case "PJProjectStatusUpdate":
    case "PJProjectTasks":
    case "PJProjectUpdate":
    case "PJReportCommentDelete":
    case "PJReportCommentEdit":
    case "PJReportCommentRemove":
    case "PJReportCommentUpdate":
    case "PJReportConfig":
    case "PJReportConfigUpdate":
    case "PJReportDelete":
    case "PJReportEdit":
    case "PJReportImport":
    case "PJReportImportInsert":
    case "PJReportList":
    case "PJReportMembers":
    case "PJReportPrint":
    case "PJReportRemove":
    case "PJReportStatusAdd":
    case "PJReportStatusDelete":
    case "PJReportStatusEdit":
    case "PJReportStatusFix":
    case "PJReportStatusInsert":
    case "PJReportStatusList":
    case "PJReportStatusOrder":
    case "PJReportStatusRemove":
    case "PJReportStatusUpdate":
    case "PJReportTypeAdd":
    case "PJReportTypeDelete":
    case "PJReportTypeEdit":
    case "PJReportTypeFix":
    case "PJReportTypeInsert":
    case "PJReportTypeList":
    case "PJReportTypeOrder":
    case "PJReportTypeRemove":
    case "PJReportTypeUpdate":
    case "PJReportUpdate":
    case "PJRequestCommentDelete":
    case "PJRequestCommentEdit":
    case "PJRequestCommentRemove":
    case "PJRequestCommentUpdate":
    case "PJRequestConfig":
    case "PJRequestConfigUpdate":
    case "PJRequestDelete":
    case "PJRequestEdit":
    case "PJRequestImport":
    case "PJRequestImportInsert":
    case "PJRequestList":
    case "PJRequestMembers":
    case "PJRequestPrint":
    case "PJRequestRemove":
    case "PJRequestStatusAdd":
    case "PJRequestStatusDelete":
    case "PJRequestStatusEdit":
    case "PJRequestStatusFix":
    case "PJRequestStatusInsert":
    case "PJRequestStatusList":
    case "PJRequestStatusOrder":
    case "PJRequestStatusRemove":
    case "PJRequestStatusUpdate":
    case "PJRequestTypeAdd":
    case "PJRequestTypeDelete":
    case "PJRequestTypeEdit":
    case "PJRequestTypeFix":
    case "PJRequestTypeInsert":
    case "PJRequestTypeList":
    case "PJRequestTypeOrder":
    case "PJRequestTypeRemove":
    case "PJRequestTypeUpdate":
    case "PJRequestUpdate":
    case "PJTaskAdd":
    case "PJTaskConfig":
    case "PJTaskConfigUpdate":
    case "PJTaskDelete":
    case "PJTaskEdit":
    case "PJTaskInsert":
    case "PJTaskList":
    case "PJTaskMembers":
    case "PJTaskPriorityAdd":
    case "PJTaskPriorityDelete":
    case "PJTaskPriorityEdit":
    case "PJTaskPriorityFix":
    case "PJTaskPriorityInsert":
    case "PJTaskPriorityList":
    case "PJTaskPriorityOrder":
    case "PJTaskPriorityRemove":
    case "PJTaskPriorityUpdate":
    case "PJTaskRemove":
    case "PJTaskStatusAdd":
    case "PJTaskStatusDelete":
    case "PJTaskStatusEdit":
    case "PJTaskStatusFix":
    case "PJTaskStatusInsert":
    case "PJTaskStatusList":
    case "PJTaskStatusOrder":
    case "PJTaskStatusRemove":
    case "PJTaskStatusUpdate":
    case "PJTaskUpdate":
    	$title = $mod_title;
        include(NUKE_MODULES_DIR.$module_name.'/admin/index.php');
    break;
  }
}

?>