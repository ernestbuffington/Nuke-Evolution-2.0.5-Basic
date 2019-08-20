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

$pagetitle = $pagename.": ERROR";
include_once(NUKE_BASE_DIR.'header.php');
title("$pagetitle");
OpenTable();
echo "<center><strong>Sorry, ONLY super admins may run this script</strong><center>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>