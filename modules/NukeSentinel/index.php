<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

$module_name = basename(dirname(__FILE__));
require_once("mainfile.php");
define('INDEX_FILE', true);
$ab_config = abget_configs();
$checkrow = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country`"));
if($checkrow > 0) { $tableexist = 1; } else { $tableexist = 0; }
if($op == "STIP2C" AND $tableexist != 1) { $op = "STIndex"; }
if(!$op) { $op = "STIndex"; }
include_once("modules/$module_name/public/functions.php");
switch($op) {

  case "STIndex":include("modules/$module_name/public/STIndex.php");break;
  case "STIPS":include("modules/$module_name/public/STIPS.php");break;
  case "STRanges":include("modules/$module_name/public/STRanges.php");break;
  case "STReferers":include("modules/$module_name/public/STReferers.php");break;
  case "STIP2C":include("modules/$module_name/public/STIP2C.php");break;

}

?>