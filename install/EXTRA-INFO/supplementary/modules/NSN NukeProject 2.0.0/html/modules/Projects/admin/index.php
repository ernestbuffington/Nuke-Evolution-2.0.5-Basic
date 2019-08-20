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
define('NSNPJ_ADMIN', true);
define('INDEX_FILE', true);
$aid = substr($aid, 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT `title`, `admins` FROM `".$prefix."_modules` WHERE `title`='$module_name'"));
$row2 = $db->sql_fetchrow($db->sql_query("SELECT `name`, `radminsuper` FROM `".$prefix."_authors` WHERE `aid`='$aid'"));
$admins = explode(",", $row['admins']);
$auth_user = 0;
for ($i=0; $i < sizeof($admins); $i++) {
    if ($row2['name'] == "$admins[$i]" AND !empty($row['admins'])) {
        $auth_user = 1;
    }
}

if ($row2['radminsuper'] == 1 || $auth_user == 1) {
  if(!defined('NSNPJ_FUNC')) { $op = "PJLoadError"; }
  switch ($op) {
    case "PJConfig":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJConfig.php");break;
    case "PJConfigUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJConfigUpdate.php");break;
    case "PJLoadError":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJLoadError.php");break;
    case "PJMain":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMain.php");break;
    case "PJMemberAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberAdd.php");break;
    case "PJMemberDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberDelete.php");break;
    case "PJMemberEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberEdit.php");break;
    case "PJMemberInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberInsert.php");break;
    case "PJMemberList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberList.php");break;
    case "PJMemberPositionAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionAdd.php");break;
    case "PJMemberPositionDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionDelete.php");break;
    case "PJMemberPositionEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionEdit.php");break;
    case "PJMemberPositionFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionFix.php");break;
    case "PJMemberPositionInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionInsert.php");break;
    case "PJMemberPositionList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionList.php");break;
    case "PJMemberPositionOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionOrder.php");break;
    case "PJMemberPositionRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionRemove.php");break;
    case "PJMemberPositionUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberPositionUpdate.php");break;
    case "PJMemberRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberRemove.php");break;
    case "PJMemberUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJMemberUpdate.php");break;
    case "PJProjectAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectAdd.php");break;
    case "PJProjectConfig":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectConfig.php");break;
    case "PJProjectConfigUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectConfigUpdate.php");break;
    case "PJProjectDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectDelete.php");break;
    case "PJProjectEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectEdit.php");break;
    case "PJProjectFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectFix.php");break;
    case "PJProjectInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectInsert.php");break;
    case "PJProjectList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectList.php");break;
    case "PJProjectMembers":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectMembers.php");break;
    case "PJProjectOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectOrder.php");break;
    case "PJProjectPriorityAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityAdd.php");break;
    case "PJProjectPriorityDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityDelete.php");break;
    case "PJProjectPriorityEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityEdit.php");break;
    case "PJProjectPriorityFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityFix.php");break;
    case "PJProjectPriorityInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityInsert.php");break;
    case "PJProjectPriorityList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityList.php");break;
    case "PJProjectPriorityOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityOrder.php");break;
    case "PJProjectPriorityRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityRemove.php");break;
    case "PJProjectPriorityUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectPriorityUpdate.php");break;
    case "PJProjectRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectRemove.php");break;
    case "PJProjectReports":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectReports.php");break;
    case "PJProjectRequests":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectRequests.php");break;
    case "PJProjectStatusAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusAdd.php");break;
    case "PJProjectStatusDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusDelete.php");break;
    case "PJProjectStatusEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusEdit.php");break;
    case "PJProjectStatusFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusFix.php");break;
    case "PJProjectStatusInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusInsert.php");break;
    case "PJProjectStatusList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusList.php");break;
    case "PJProjectStatusOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusOrder.php");break;
    case "PJProjectStatusRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusRemove.php");break;
    case "PJProjectStatusUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectStatusUpdate.php");break;
    case "PJProjectTasks":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectTasks.php");break;
    case "PJProjectUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJProjectUpdate.php");break;
    case "PJReportCommentDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportCommentDelete.php");break;
    case "PJReportCommentEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportCommentEdit.php");break;
    case "PJReportCommentRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportCommentRemove.php");break;
    case "PJReportCommentUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportCommentUpdate.php");break;
    case "PJReportConfig":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportConfig.php");break;
    case "PJReportConfigUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportConfigUpdate.php");break;
    case "PJReportDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportDelete.php");break;
    case "PJReportEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportEdit.php");break;
    case "PJReportImport":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportImport.php");break;
    case "PJReportImportInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportImportInsert.php");break;
    case "PJReportList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportList.php");break;
    case "PJReportMembers":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportMembers.php");break;
    case "PJReportPrint":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportPrint.php");break;
    case "PJReportRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportRemove.php");break;
    case "PJReportStatusAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusAdd.php");break;
    case "PJReportStatusDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusDelete.php");break;
    case "PJReportStatusEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusEdit.php");break;
    case "PJReportStatusFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusFix.php");break;
    case "PJReportStatusInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusInsert.php");break;
    case "PJReportStatusList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusList.php");break;
    case "PJReportStatusOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusOrder.php");break;
    case "PJReportStatusRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusRemove.php");break;
    case "PJReportStatusUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportStatusUpdate.php");break;
    case "PJReportTypeAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeAdd.php");break;
    case "PJReportTypeDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeDelete.php");break;
    case "PJReportTypeEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeEdit.php");break;
    case "PJReportTypeFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeFix.php");break;
    case "PJReportTypeInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeInsert.php");break;
    case "PJReportTypeList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeList.php");break;
    case "PJReportTypeOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeOrder.php");break;
    case "PJReportTypeRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeRemove.php");break;
    case "PJReportTypeUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportTypeUpdate.php");break;
    case "PJReportUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJReportUpdate.php");break;
    case "PJRequestCommentDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestCommentDelete.php");break;
    case "PJRequestCommentEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestCommentEdit.php");break;
    case "PJRequestCommentRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestCommentRemove.php");break;
    case "PJRequestCommentUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestCommentUpdate.php");break;
    case "PJRequestConfig":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestConfig.php");break;
    case "PJRequestConfigUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestConfigUpdate.php");break;
    case "PJRequestDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestDelete.php");break;
    case "PJRequestEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestEdit.php");break;
    case "PJRequestImport":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestImport.php");break;
    case "PJRequestImportInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestImportInsert.php");break;
    case "PJRequestList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestList.php");break;
    case "PJRequestMembers":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestMembers.php");break;
    case "PJRequestPrint":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestPrint.php");break;
    case "PJRequestRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestRemove.php");break;
    case "PJRequestStatusAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusAdd.php");break;
    case "PJRequestStatusDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusDelete.php");break;
    case "PJRequestStatusEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusEdit.php");break;
    case "PJRequestStatusFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusFix.php");break;
    case "PJRequestStatusInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusInsert.php");break;
    case "PJRequestStatusList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusList.php");break;
    case "PJRequestStatusOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusOrder.php");break;
    case "PJRequestStatusRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusRemove.php");break;
    case "PJRequestStatusUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestStatusUpdate.php");break;
    case "PJRequestTypeAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeAdd.php");break;
    case "PJRequestTypeDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeDelete.php");break;
    case "PJRequestTypeEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeEdit.php");break;
    case "PJRequestTypeFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeFix.php");break;
    case "PJRequestTypeInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeInsert.php");break;
    case "PJRequestTypeList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeList.php");break;
    case "PJRequestTypeOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeOrder.php");break;
    case "PJRequestTypeRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeRemove.php");break;
    case "PJRequestTypeUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestTypeUpdate.php");break;
    case "PJRequestUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJRequestUpdate.php");break;
    case "PJTaskAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskAdd.php");break;
    case "PJTaskConfig":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskConfig.php");break;
    case "PJTaskConfigUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskConfigUpdate.php");break;
    case "PJTaskDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskDelete.php");break;
    case "PJTaskEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskEdit.php");break;
    case "PJTaskInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskInsert.php");break;
    case "PJTaskList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskList.php");break;
    case "PJTaskMembers":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskMembers.php");break;
    case "PJTaskPriorityAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityAdd.php");break;
    case "PJTaskPriorityDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityDelete.php");break;
    case "PJTaskPriorityEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityEdit.php");break;
    case "PJTaskPriorityFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityFix.php");break;
    case "PJTaskPriorityInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityInsert.php");break;
    case "PJTaskPriorityList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityList.php");break;
    case "PJTaskPriorityOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityOrder.php");break;
    case "PJTaskPriorityRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityRemove.php");break;
    case "PJTaskPriorityUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskPriorityUpdate.php");break;
    case "PJTaskRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskRemove.php");break;
    case "PJTaskStatusAdd":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusAdd.php");break;
    case "PJTaskStatusDelete":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusDelete.php");break;
    case "PJTaskStatusEdit":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusEdit.php");break;
    case "PJTaskStatusFix":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusFix.php");break;
    case "PJTaskStatusInsert":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusInsert.php");break;
    case "PJTaskStatusList":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusList.php");break;
    case "PJTaskStatusOrder":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusOrder.php");break;
    case "PJTaskStatusRemove":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusRemove.php");break;
    case "PJTaskStatusUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskStatusUpdate.php");break;
    case "PJTaskUpdate":include_once(NUKE_MODULES_DIR.$module_name."/admin/PJTaskUpdate.php");break;
  }
} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center><strong>"._ERROR."</strong><br /><br />You do not have administration permission for module \"$module_name\"</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>