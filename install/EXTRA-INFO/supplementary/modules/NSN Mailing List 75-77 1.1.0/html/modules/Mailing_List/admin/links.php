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

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

global $admin_file;

$module_name = basename(dirname(dirname(__FILE__)));
get_lang($module_name);
adminmenu($admin_file.".php?op=MLAdmin", _ML_MAIN, "mailinglist.png");

?>