<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

//####################::GnaUnited.com Presents::####################\\
//  Project: My Uploads                                             \\
//  Public Version: 4.4 Unregistered                                \\
//  Technical Version: 4.4.0                                        \\
//  Package Name: Uploads4.4.UNREG.ZIP                              \\
//  License: Commercial                                             \\
//##################################################################\\

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       07/14/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

global $admin_file;

$module_name = basename(dirname(dirname(__FILE__)));

switch($op) {
    case "uploads":
    case "uploads_change_size":
    case "uploads_delete_ext":
    case "uploads_add_ext":
    case "uploads_change_direct":
    case "uploads_change_ban_type":
    case "uploads_upgrade":
    case "uploads_install":
    case "uploads_change_url":
    case "uploads_view_folder":
    case "uploads_change_con_type":
    case "uploads_add_user":
    case "uploads_users_change":
        include("modules/".$module_name."/admin/index.php");
    break;
}

?>