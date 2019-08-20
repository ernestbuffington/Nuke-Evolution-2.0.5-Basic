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

$pagetitle = " - "._ML_TITLE." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
title(_ML_TITLE." ".$ml_config['version_number']);
OpenTable();
$query2 = "UPDATE `".$prefix."_nsnml_users` SET `active`='1', `act_key`='0', `joined`='".time()."' WHERE `email`='$email' AND `lid`='$lid'";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_users` WHERE `email`='$email' AND `act_key`='$check' AND `lid`='$lid'");
if($db->sql_numrows($result) != 1) {
  echo "<center><strong>"._ML_ERROR_SUBLINK."</strong></center>";
} elseif(!$db->sql_query($query2)) {
   $result = $db->sql_error($query);
   echo "<center><strong>".$result['code'].": ".$result['message']."</strong></center>\n";
} else {
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists` WHERE `lid`='$lid'");
  $list_info = $db->sql_fetchrow($result);
  echo "<center><strong>"._ML_MAIN."</strong>: ".$list_info['title']."<br />\n";
  echo "<strong>"._ML_SUBCOMPLETED."</strong></center>";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>