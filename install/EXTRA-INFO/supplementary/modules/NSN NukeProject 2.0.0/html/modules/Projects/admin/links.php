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

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       10/25/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

global $admin_file;

adminmenu($admin_file.".php?op=PJMain", _PJ_TITLE, "nukeproject.png");

?>