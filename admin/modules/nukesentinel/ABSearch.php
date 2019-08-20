<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_SEARCH;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_SEARCH);
ipbanmenu();
CarryMenu();
searchmenu();
CloseMenu();
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>