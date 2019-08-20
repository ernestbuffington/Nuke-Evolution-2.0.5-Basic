<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: No Queries Modules Block
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : block-Modules.php
   Author        : Quake (www.nuke-evolution.com)
   Version       : 1.0.0
   Date          : 11/05/2005 (mm-dd-yyyy)

   Notes         : When caching enabled, this block shows all of your
                   active modules without using any queries. 
                   Saves speed ;)
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       10/21/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

$content .= "<br />\n";
$content .= "&nbsp;<big><strong>&middot;</strong></big>&nbsp;<a href=\"index.php\">"._HOME."</a><br />\n";

$main_module = main_module();
$modules = @opendir(NUKE_MODULES_DIR);
while (false !== ($module_name = @readdir($modules))) {
    if (is_active($module_name) && $module_name != $main_module) {
        $modname = str_replace('_', ' ', $module_name);
        $content .= "&nbsp;<big><strong>&middot;</strong></big>&nbsp;<a href=\"modules.php?name=$module_name\">$modname</a><br />\n";
    }
}
@closedir($modules);

?>