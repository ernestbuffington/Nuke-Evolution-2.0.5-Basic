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

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

$module_name = basename(dirname(__FILE__));
get_lang($module_name);
include_once(NUKE_INCLUDE_DIR.'nsnml_func.php');
$ml_config = mlget_configs();
switch($op) {
  default:include_once(NUKE_MODULES_DIR.$module_name."/public/MLIndex.php");break;
  case 'MLAction':include_once(NUKE_MODULES_DIR.$module_name."/public/MLAction.php");break;
  case 'MLActivate':include_once(NUKE_MODULES_DIR.$module_name."/public/MLActivate.php");break;
}

?>