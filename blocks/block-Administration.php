<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : block-Administration.php
   Author        : Nuke-Evolution Team
   Version       : 1.5.0
   Date          : 06/10/2005 (dd-mm-yyyy)

   Notes         : Quick Admin Navigation Block which lets you quickly
                   run / view the specific option available.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
      Caching System                           v1.0.0       10/31/2005
-=[Block]=-
      Administration                           v1.5.0       06/10/2005
-=[Mod]=-
      Advanced Security Code Control           v1.0.0       12/17/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

if (is_admin()) {
    global $prefix, $db, $admin_file, $currentlang;

    if (file_exists('language/custom/lang-'.$currentlang.'.php')) {
        include_once('language/custom/lang-'.$currentlang.'.php');
    } else {
        include_once('language/custom/lang-english.php');
    }

    $content = "<center><strong><u><span class=\"content\">"._ADMIN_BLOCK_TITLE."</span>:</u></strong></center><br />";

    $links = array(
        #Admin [Nuke-Evo]
        _ADMIN_BLOCK_NUKE => $admin_file.".php",
        #Admin [Forums]
        _ADMIN_BLOCK_FORUMS => $admin_file.".php?op=forums",
        #Settings
        _ADMIN_BLOCK_SETTINGS => $admin_file.".php?op=Configure",
        #Themes
        _THEMES => $admin_file.".php?op=themes",
        #Cache
        _CACHE_ADMIN => $admin_file.".php?op=cache",
        #Evolution UserInfo Block
        _ADMIN_BLOCK_EVO_USER => $admin_file.".php?op=evo-userinfo",
        #Downloads
        _ADMIN_BLOCK_DOWNLOADS => $admin_file.".php?op=DLMain",
        #Nuke Sentinel
        _AB_NUKESENTINEL => $admin_file.".php?op=ABMain",
        #News
        _ADMIN_BLOCK_NEWS => $admin_file.".php?op=adminStory",
        #Blocks
        _ADMIN_BLOCK_BLOCKS => $admin_file.".php?op=blocks",
        #Modules
        _ADMIN_BLOCK_MODULES => $admin_file.".php?op=modules",
        #CNBYA
        _ADMIN_BLOCK_CNBYA => "modules.php?name=Your_Account&amp;file=admin",
        #Messages
        _ADMIN_BLOCK_MSGS => $admin_file.".php?op=messages",
        #Who Is Online
        _ADMIN_BLOCK_WHO_ONLINE => $admin_file.".php?op=who",
        #Database Manager
        _ADMIN_BLOCK_OPTIMIZE_DB => $admin_file.".php?op=database",
        #Clear Cache
        _CACHE_CLEAR => $admin_file.".php?op=cache_clear",
        #Logout
        _ADMIN_BLOCK_LOGOUT => $admin_file.".php?op=logout",
    );
    
    if (is_array($links)) {
        foreach($links as $text => $link) {
            $content .= "&nbsp;<img src=\"images/arrow.gif\" border=\"0\" alt=\"\" />&nbsp;<a href='" . $link . "'>".$text."</a><br />";
        }
    }

} else {
    global $admin_file;
    $content ="<center><strong>"._ADMIN_BLOCK_LOGIN."</strong></center><br /><br />";
    $content .= "<form action=\"".$admin_file.".php\" method=\"post\">"
               ."<table border=\"0\">"
               ."<tr><td>"._ADMIN_ID."</td>"
               ."<td><input type=\"text\" name=\"aid\" size=\"8\" maxlength=\"25\" /></td></tr>"
               ."<tr><td>"._ADMIN_PASS."</td>"
               ."<td><input type=\"password\" name=\"pwd\" size=\"8\" maxlength=\"40\" /></td></tr>";
/*****[BEGIN]******************************************
 [ Mod:     Advanced Security Code Control     v1.0.0 ]
 ******************************************************/
    $gfxchk = array(1,5,6,7);
    $content .= security_code($gfxchk);
/*****[END]********************************************
 [ Mod:     Advanced Security Code Control     v1.0.0 ]
 ******************************************************/
    $content .= "<tr><td>"
               ."<input type=\"hidden\" name=\"op\" value=\"login\" />"
               ."<input type=\"submit\" value=\""._LOGIN."\" />"
               ."</td></tr></table>"
               ."</form>";
}

?>