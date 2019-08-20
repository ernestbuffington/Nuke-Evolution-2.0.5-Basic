<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(is_god($_COOKIE['admin'])) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_DBMAINTENCE;
  include(NUKE_BASE_DIR."header.php");
  OpenTable();
  OpenMenu(_AB_DBMAINTENCE);
  ipbanmenu();
  CarryMenu();
  ipdbmenu();
  CloseMenu();
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else {
  Header("Location: ".$admin_file.".php?op=ABMain");
}

?>