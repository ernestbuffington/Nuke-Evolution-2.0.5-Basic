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

$module_name = basename(dirname(dirname(__FILE__)));

switch($op) {
    case 'MLAddBanner':
    case 'MLAddDownload':
    case 'MLAddIssue':
    case 'MLAddList':
    case 'MLAddStory':
    case 'MLAdmin':
    case 'MLConfig':
    case 'MLConfigSave':
    case 'MLCreate':
    case 'MLDeleteList':
    case 'MLDeleteListSave':
    case 'MLEditList':
    case 'MLEditListSave':
    case 'MLSend':
    case 'MLViewIssue':
    case 'MLViewIssues':
    case 'MLViewListIssues':
    case 'MLViewLists':
    case 'MLViewListSubscribers':
    case 'MLViewSent':
    case 'MLViewSubscribers':
        include(NUKE_MODULES_DIR.$module_name.'/admin/index.php');
    break;
}

?>