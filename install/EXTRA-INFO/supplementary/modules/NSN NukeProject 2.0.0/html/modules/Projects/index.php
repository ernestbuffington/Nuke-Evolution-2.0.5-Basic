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

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

$module_name = basename(dirname(__FILE__));
define('NSNPJ_PUBLIC', true);
define('INDEX_FILE', true);
if(!defined('NSNPJ_FUNC')) { $op = "PJLoadError"; }
if(!isset($op)) { $op = "PJIndex"; }
switch($op) {
  case "PJIndex":include_once(NUKE_MODULES_DIR.$module_name."/public/PJIndex.php");break;
  case "PJLoadError":include_once(NUKE_MODULES_DIR.$module_name."/public/PJLoadError.php");break;
  case "PJProject":include_once(NUKE_MODULES_DIR.$module_name."/public/PJProject.php");break;
  case "PJReport":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReport.php");break;
  case "PJReportCommentInsert":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReportCommentInsert.php");break;
  case "PJReportCommentSubmit":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReportCommentSubmit.php");break;
  case "PJReportInsert":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReportInsert.php");break;
  case "PJReportMap":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReportMap.php");break;
  case "PJReportSubmit":include_once(NUKE_MODULES_DIR.$module_name."/public/PJReportSubmit.php");break;
  case "PJRequest":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequest.php");break;
  case "PJRequestCommentInsert":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequestCommentInsert.php");break;
  case "PJRequestCommentSubmit":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequestCommentSubmit.php");break;
  case "PJRequestInsert":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequestInsert.php");break;
  case "PJRequestMap":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequestMap.php");break;
  case "PJRequestSubmit":include_once(NUKE_MODULES_DIR.$module_name."/public/PJRequestSubmit.php");break;
  case "PJTask":include_once(NUKE_MODULES_DIR.$module_name."/public/PJTask.php");break;
  case "PJTaskMap":include_once(NUKE_MODULES_DIR.$module_name."/public/PJTaskMap.php");break;
}

?>