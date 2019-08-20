<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Optout to the Newsletter
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : optout.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 1.0.0
   Date          : 08.06.2005 (mm.dd.yyyy)

   Notes         : Allows newsletter recipients to opt out of the news letters
                   with a single link
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

global $module_name, $prefix, $db, $module_file, $prefix, $user, $user_prefix;

$module_name = basename(dirname(__FILE__));

require_once("mainfile.php");
get_lang($module_name);

include(NUKE_BASE_DIR."header.php");

if (!is_user()) {
    OpenTable();
    echo "<center>"._FNL_OPTOUT_LOGIN."</center>";
    CloseTable();
    exit;
} else {
    $nukeuser = cookiedecode();
    if(!empty($nukeuser)) {
        if($db->sql_query("UPDATE ".$user_prefix."_users SET newsletter=0 WHERE username='".$nukeuser[1]."'")) {
            OpenTable();
            echo "<center>"._FNL_OPTOUT."</center>";
            CloseTable();
        }
    }
}

?>