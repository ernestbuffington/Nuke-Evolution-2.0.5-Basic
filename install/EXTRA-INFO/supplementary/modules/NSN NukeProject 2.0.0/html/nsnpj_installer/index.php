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

$pagetitle = $pagename;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
$label = "<tr><td align='center' class='title'>$pagetitle</td></tr>";
$warning  = "<tr><td>This script will install, remove, or upgrade the tables for the $pagename.</td></tr>\n";
$warning .= "<tr><td><strong>NOTE:</strong> If going from $oldname to $pagename, run first time install<br />then copy $oldname to $pagename.</td></tr>\n";
$warning .= "<tr><td><strong>Backup data tables before going on!</strong></td></tr>\n";
$warning .= "<tr><td><strong>Once you have finished with this script, delete it from your server!</strong></td></tr>\n";
include_once(NUKE_BASE_DIR."nsnpj_installer/default.php");
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>