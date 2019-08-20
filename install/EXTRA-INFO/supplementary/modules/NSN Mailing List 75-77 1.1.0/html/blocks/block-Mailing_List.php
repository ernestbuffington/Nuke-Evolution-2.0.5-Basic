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

if(!defined('NUKE_EVO')) exit;

$modname = "Mailing_List";
get_lang($modname);
$content = "";
global $nukeurl, $prefix, $db, $bgcolor2, $sitekey;
$user2 = base64_decode($user);
$cookie = explode(":", $user2);
if($cookie[0] > 0) {
  list($usermail) = $db->sql_fetchrow($db->sql_query("SELECT `user_email`, `user_id` FROM `".$user_prefix."_users` WHERE `user_id` = '$cookie[0]'"));
}
$content .= _ML_WELCOMEMESSAGE."<br />\n";
$content .= "<table align='center' border='0'>\n";
$content .= "<form action='modules.php?name=$modname&amp;op=MLAction' method='POST'>\n";
$content .= "<tr><td bgcolor='$bgcolor2'><strong>"._ML_EMAILADDRESS."</strong></td><td><input type='text' name='email' value='".$usermail."' size='20' maxlength='100'></td></tr>\n";
$content .= "<tr><td bgcolor='$bgcolor2'><strong>"._ML_MAIN."</strong></td><td><select name ='lid'>\n";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists`");
while($list_info = $db->sql_fetchrow($result)) { $content .= "<option value='".$list_info['lid']."'>".$list_info['title']."</option>\n"; }
$content .= "</select></td></tr>\n";
$content .= "<tr><td bgcolor='$bgcolor2'><strong>"._ML_CHOOSEPLEASE."</strong></td><td><select name ='sub'>\n";
$content .= "<option value='sub'>"._ML_SUBSCRIBE."</option>\n";
$content .= "<option value='unsub'>"._ML_UNSUBSCRIBE."</option>\n";
$content .= "</select></td></tr>\n";
$content .= "<tr><td bgcolor='$bgcolor2'><strong>"._ML_CHOOSETYPE."</strong></td><td><select name ='type'>\n";
$content .= "<option value='0'>"._ML_TYPETEXT."</option>\n";
$content .= "<option value='1'>"._ML_TYPEHTML."</option>\n";
$content .= "</select></td></tr>\n";
$content .= "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_SEND."'></td></tr>\n";
$content .= "</form>\n";
$content .= "</table>\n";

?>