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

require_once(dirname(__FILE__).'/mainfile.php');
global $admin;
if(is_admin()) {
  if(!is_array($admin)) {
    $adm = base64_decode($admin);
    $adm = explode(":", $adm);
    $aname = "$adm[0]";
  } else {
    $aname = "$admin[0]";
  }
}

define('INDEX_FILE', true);

$adm_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM ".$prefix."_authors WHERE aid='$aname'"));
if($adm_info['radminsuper']==1) {
  $pagename = "NukeProject(tm)";
  if(!isset($op)) { $op = "index"; }
  switch($op) {
    case "index":include_once(NUKE_BASE_DIR."nsnpj_installer/index.php");break;
    case "install":include_once(NUKE_BASE_DIR."nsnpj_installer/install.php");break;
    case "remove":include_once(NUKE_BASE_DIR."nsnpj_installer/remove.php");break;
    case "remove_wb":include_once(NUKE_BASE_DIR."nsnpj_installer/remove_wb.php");break;
    case "remove_wp":include_once(NUKE_BASE_DIR."nsnpj_installer/remove_wp.php");break;
    case "remove_wr":include_once(NUKE_BASE_DIR."nsnpj_installer/remove_wr.php");break;
  }
} else {
    include_once(NUKE_BASE_DIR."nsnpj_installer/error.php");
}

?>