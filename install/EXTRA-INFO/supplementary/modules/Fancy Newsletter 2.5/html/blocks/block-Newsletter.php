<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : block-Newsletter.php
   Author        : Technocrat
   Version       : 1.0.0
   Date          : 08/05/2005 (dd-mm-yyyy)

   Notes         : Allows users to signup for the newsletter quickly.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/05/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

global $prefix, $db, $user, $user_prefix, $currentlang;

if (file_exists('language/blocks/lang-'.$currentlang.'.php')) {
    include_once('language/blocks/lang-'.$currentlang.'.php');
} else {
    include_once('language/blocks/lang-english.php');
}

if (!is_user()) {
    $content = _NEWSLOGGED;
} else {
    $n_user = cookiedecode();
    $n_sql = "SELECT newsletter FROM ".$user_prefix."_users WHERE username='".$n_user[1]."'";
    $n_result = $db->sql_query($n_sql);
    $n_row = $db->sql_fetchrow($n_result);
    if(!empty($n_row)) {
        $n_newsletter = intval($n_row['newsletter']);
    } else {
        $content = _NEWSERROR;
        exit;
    }
    if($n_newsletter == 0) {
        $content = "<center>"._NEWSCLICK."</strong><a href='modules.php?name=Fancy_NewsLetter&amp;file=optin'>&nbsp;<strong>"._NEWSHERE."</strong></a> "._NEWSRECIEVE."</center>";
    } else {
        $content = "<center>" ._NEWSCLICK."<a href='modules.php?name=Fancy_NewsLetter&amp;file=optout'>&nbsp;<strong>"._NEWSHERE."</strong></a> "._NEWSSTOP."</center>";
    }
}

?>