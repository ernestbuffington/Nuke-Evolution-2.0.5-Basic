<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

//####################::GnaUnited.com Presents::####################\\
//  Project: My Uploads                                             \\
//  Public Version: 4.4 Unregistered                                \\
//  Technical Version: 4.4.0                                        \\
//  Package Name: Uploads4.4.UNREG.ZIP                           \\
//  License: Commercial                                             \\
//##################################################################\\

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       07/14/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

global $admin_file;

$module_name = basename(dirname(dirname(__FILE__)));
get_lang($module_name);

adminmenu($admin_file.'.php?op=uploads#start', MYU_MYUPLOADS, 'uploads.png');

?>