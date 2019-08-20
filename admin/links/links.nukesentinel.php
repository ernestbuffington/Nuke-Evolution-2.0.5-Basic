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
      Nuke Patched                             v3.1.0       08/11/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ('Illegal File Access');
}

if(!isset($admin_file)) { $admin_file = 'admin'; }

global $admin_file;

if ($radminsuper==1 AND defined('NUKESENTINEL_IS_LOADED')) {
    adminmenu($admin_file.'.php?op=ABMain', _AB_NUKESENTINEL, 'nukesentinel.png');
}

?>