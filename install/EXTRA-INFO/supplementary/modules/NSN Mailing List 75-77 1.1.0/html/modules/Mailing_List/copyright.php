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
include(CP_INCLUDE_DIR.'/includes/showcp.php');

$author_name = "<a href=\"$author_homepage\" target=\"new\">NukeScripts Network</a>";
$author_email = "";
$author_homepage = "http://www.nukescripts.net";
$license = "Copyright &copy; 2000-2005 NukeScripts Network";
$download_location = "http://www.nukescripts.net/modules.php?name=Downloads";
$module_version = "1.1.0";
$module_description = "Advanced Mailing List System.";

show_copyright($author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description);

?>