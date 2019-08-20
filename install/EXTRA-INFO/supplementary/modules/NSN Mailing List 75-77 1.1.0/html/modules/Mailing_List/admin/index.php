<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/05/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

$textrowcol = "rows='20' cols='50'";
$aid = substr("$aid", 0,25);
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
  get_lang($module_name);
  include_once(NUKE_INCLUDE_DIR.'nsnml_func.php');
  $ml_config = mlget_configs();
  switch($op) {
    case 'MLAddBanner':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAddBanner.php");break;
    case 'MLAddDownload':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAddDownload.php");break;
    case 'MLAddIssue':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAddIssue.php");break;
    case 'MLAddList':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAddList.php");break;
    case 'MLAddStory':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAddStory.php");break;
    case 'MLAdmin':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLAdmin.php");break;
    case 'MLConfig':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLConfig.php");break;
    case 'MLConfigSave':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLConfigSave.php");break;
    case 'MLCreate':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLCreate.php");break;
    case 'MLDeleteList':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLDeleteList.php");break;
    case 'MLDeleteListSave':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLDeleteListSave.php");break;
    case 'MLEditList':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLEditList.php");break;
    case 'MLEditListSave':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLEditListSave.php");break;
    case 'MLSend':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLSend.php");break;
    case 'MLViewIssue':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewIssue.php");break;
    case 'MLViewIssues':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewIssues.php");break;
    case 'MLViewListIssues':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewListIssues.php");break;
    case 'MLViewLists':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewLists.php");break;
    case 'MLViewListSubscribers':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewListSubscribers.php");break;
    case 'MLViewSent':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewSent.php");break;
    case 'MLViewSubscribers':include_once(NUKE_MODULES_DIR.$module_name."/admin/MLViewSubscribers.php");break;
  }
} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><strong>"._ERROR."</strong><br /><br />You do not have administration permission for module \"$module_name\"</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>