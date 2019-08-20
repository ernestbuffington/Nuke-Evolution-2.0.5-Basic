<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*                                                                       */
/*************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/26/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

$module_name = basename(dirname(dirname(__FILE__)));

switch($op) {

    case "forumnews":
    case "forumsettings":
    case "forumsettingssave":
    case "forumtopics":
    case "forumtopicedit":
    case "forumtopicmake":
    case "forumtopicdelete":
    case "forumtopicchange":
        include(NUKE_MODULES_DIR.$module_name.'/admin/index.php');
    break;

}

?>