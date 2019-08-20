<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeScripts Network (webmaster@nukescripts.net)      */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

define('CP_INCLUDE_DIR', dirname(dirname(dirname(__FILE__))));
require_once(CP_INCLUDE_DIR.'/includes/showcp.php');

$module_name = basename(dirname(__FILE__));
$mod_name = "NukeSentinel&trade;";
$author_email = "";
$author_homepage = "http://www.nukescripts.net";
$author_name = "<a href=\"$author_homepage\" target=\"new\">NukeScripts Network</a>";
$license = "Copyright &copy; 2000-2005 NukeSentinel&trade; Team";
$download_location = "";
$module_version = "";
$release_date = "";
$module_description = "Advanced site security proudly produced by: NukeScripts Network, Raven PHPScripts, & NukeResources.";
$mod_cost = "";
if (empty($mod_name)) { $mod_name = eregi_replace("_", " ", $module_name); }

show_copyright($author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description);

?>