<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*
  Arcade Rate Add-On For Arcade Mod V3.0.2
  
  Allow registered users to rate a specific game
  
  Check http://www.thehorde.be or http://www.nukearcade.com
  
  Author: Rica  http://www.thehorde.be
  Date: 29 November 2004
  
*/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/20/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die('You can\'t access this file directly...');
}

if ($popup != "1"){
    $module_name = basename(dirname(__FILE__));
    require("modules/".$module_name."/nukebb.php");
}
else
{
    $phpbb_root_path = NUKE_FORUMS_DIR;
}

$phpbbarcade = 1;

define('IN_PHPBB', true);
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
//include($phpbb_root_path .'includes/functions_arcade.' . $phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_GAME, $nukeuser);
init_userprefs($userdata);
//
// End session management
//

//
// Start auth check
//
if (!$userdata['session_logged_in']) {
        $header_location = (@preg_match("/Microsoft|WebSTAR|Xitami/", getenv("SERVER_SOFTWARE"))) ? "Refresh: 0; URL=" : "Location: ";
        header($header_location . "modules.php?name=Your_Account&redirect=arcade_rate");
        exit;
}
//
// End of auth check
//
include("includes/page_header.php");
if (!empty($HTTP_POST_VARS['gid']) || !empty($HTTP_GET_VARS['gid'])) {
        $gid = (!empty($HTTP_POST_VARS['gid'])) ? intval($HTTP_POST_VARS['gid']) : intval($HTTP_GET_VARS['gid']);
} else {
        message_die(GENERAL_ERROR, "Such game doesnt exist");
}
if (!empty($HTTP_POST_VARS['ratevalue']) || !empty($HTTP_GET_VARS['ratevalue'])) {
        $ratevalue = intval((!empty($HTTP_POST_VARS['ratevalue'])) ? intval($HTTP_POST_VARS['ratevalue']) : intval($HTTP_GET_VARS['ratevalue']));
        if ($ratevalue<0 or $ratevalue>10) {
            $ratevalue=5;
        }
} else {
        message_die(GENERAL_ERROR, "No rating value");
}

$sql="REPLACE INTO ".$prefix."_bbgames_rate (game_id,user_id,rate) VALUES($gid,".$userdata['user_id'].",$ratevalue) ";
$db->sql_query($sql) or message_die(GENERAL_ERROR, "Cannot insert new rating");
//echo $header_location . append_sid("games.$phpEx?gid=$gid", false);
$header_location = (@preg_match("/Microsoft|WebSTAR|Xitami/", getenv("SERVER_SOFTWARE"))) ? "Refresh: 0; URL=" : "Location: ";
header($header_location . "modules.php?name=Forums&file=games&gid=$gid");

?>