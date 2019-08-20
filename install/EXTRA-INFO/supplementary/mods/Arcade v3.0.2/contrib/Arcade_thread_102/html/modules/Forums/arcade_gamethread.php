<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**
 * 
 *    FILE: arcade_game_thread.php
 *  Author: Rica http://www.thehorde.be
 *  
 **/

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

define('IN_PHPBB', true);
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_POSTING, $nukeuser);
init_userprefs($userdata);
//
// End session management
//

//
// Start auth check
//
$header_location = ( @preg_match("/Microsoft|WebSTAR|Xitami/", getenv("SERVER_SOFTWARE")) ) ? "Refresh: 0; URL=" : "Location: ";

if ( !$userdata['session_logged_in'] ) {
        header($header_location . "modules.php?name=Your_Account");
        exit;
}
//
// End of auth check
//

$game_id = intval($HTTP_POST_VARS['gid']);
if (!$game_id) $game_id=intval($HTTP_GET_VARS['gid']);
if ($HTTP_GET_VARS['mode']=='insert') {

    $user_id = intval($HTTP_POST_VARS['uid']);
    $message=$HTTP_POST_VARS['message'];
    $message=preg_replace(array('#&(?!(\#[0-9]+;))#', '#<#', '#>#'), array('&amp;', '&lt;', '&gt;'),$message);
    $user_idlogged = $userdata['user_id'];

    if ($user_idlogged<>$user_id || !$game_id || !$user_id) {
            echo "There is a problem here....<br />";
            die("Hack Attempt");
    }
    global $prefix;
    $sql = "INSERT INTO ".$prefix."_bbarcade_message (message_id,game_id,user_id,message_date,message) "
          ."VALUES(null,$game_id,$user_id,".time().",'$message')";

    if (!($result = $db->sql_query($sql))) {
            message_die(GENERAL_ERROR, "Error inserting game's message", '', __LINE__, __FILE__, $sql);
    }
}elseif ($HTTP_GET_VARS['mode']=='delete') {
    if ($userdata['user_level']==ADMIN) {
        $mid=intval($HTTP_GET_VARS['mid']);
        $sql="DELETE FROM ".$prefix."_bbarcade_message WHERE message_id='$mid'";
        if (!$mid or !($result = $db->sql_query($sql))) {
            message_die(GENERAL_ERROR, "Error deleting game's message", '', __LINE__, __FILE__, $sql);
        }
    }
}

header($header_location . "modules.php?name=Forums&file=games&gid=$game_id");
exit;

?>