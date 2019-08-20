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

$adm_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_authors` WHERE `aid`='$aname'"));
if($adm_info['radminsuper']==1) {
  $pagename = "NSN Mailing List";
  switch($op) {
    default:include_once(NUKE_BASE_DIR."nsnml_installer/default.php");break;
    case "install":include_once(NUKE_BASE_DIR."nsnml_installer/install.php");break;
    case "100-101":include_once(NUKE_BASE_DIR."nsnml_installer/100-101.php");break;
    case "101-102":include_once(NUKE_BASE_DIR."nsnml_installer/101-102.php");break;
    case "102-103":include_once(NUKE_BASE_DIR."nsnml_installer/102-103.php");break;
    case "103-110":include_once(NUKE_BASE_DIR."nsnml_installer/103-110.php");break;
    case "destall":include_once(NUKE_BASE_DIR."nsnml_installer/destall.php");break;
  }
} else {
    include_once(NUKE_BASE_DIR."nsnml_installer/error.php");
}

?>