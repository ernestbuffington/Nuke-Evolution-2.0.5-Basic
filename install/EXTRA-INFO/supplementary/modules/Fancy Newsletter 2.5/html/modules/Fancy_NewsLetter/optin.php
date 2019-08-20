<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Optin to the Newsletter
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : optin.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 1.0.0
   Date          : 08.06.2005 (mm.dd.yyyy)

   Notes         : Allows newsletter recipients to opt in of the news letters
                   with a single link
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

global $module_name, $prefix, $db, $prefix, $user, $user_prefix;

$module_name = basename(dirname(__FILE__));
get_lang($module_name);

include_once(NUKE_BASE_DIR.'header.php');

if (!is_user()) {
    OpenTable();
    echo "<center>"._FNL_OPTIN_LOGIN."</center>";
    CloseTable();
    exit;
} else {
    $nukeuser = cookiedecode();
    if(!empty($nukeuser)) {
        if($db->sql_query("UPDATE ".$user_prefix."_users SET newsletter=1 WHERE username='".$nukeuser[1]."'")) {
            OpenTable();
            echo "<center>"._FNL_OPTIN."</center>";
            CloseTable();
        }
    }
}

include_once(NUKE_BASE_DIR.'footer.php');

?>