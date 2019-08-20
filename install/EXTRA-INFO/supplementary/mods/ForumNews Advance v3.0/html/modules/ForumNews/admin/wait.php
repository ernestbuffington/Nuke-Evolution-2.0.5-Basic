<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Submissions Block
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : wait.php
   Author        : Quake
   Version       : 2.0.0
   Date          : 09/02/2006 (dd-mm-yyyy)

   Notes         : Overview about submissions and other useful information
                   about your website.
************************************************************************/

if(!defined('NUKE_EVO')) {
    exit;
}

global $admin_file, $db, $prefix;

$module_name = basename(dirname(dirname(__FILE__)));

if(is_active($module_name)) {
    $content = "<div align=\"left\"><strong><u><span class=\"content\">"._FNA."</span>:</u></strong></div>";
    list($fnatopnumwaits) = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) FROM ".$prefix."_bbapprove_posts WHERE is_topic='1'"), SQL_NUM);
    list($fnaposnumwaits) = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) FROM ".$prefix."_bbapprove_posts WHERE is_topic='0'"), SQL_NUM);
    list($fnausernum) = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) FROM ".$prefix."_bbapprove_users WHERE approve_moderate='-1'"), SQL_NUM);
    $content .= "<img src=\"images/arrow.gif\" border=\"0\" alt=\"\">&nbsp;<a href=modules/Forums/admin/admin_approve.php?mode=t>"._FNATOPICS."</a>:&nbsp;<strong>$fnatopnumwaits</strong><br />";
    $content .= "<img src=\"images/arrow.gif\" border=\"0\" alt=\"\">&nbsp;<a href=modules/Forums/admin/admin_approve.php?mode=p>"._FNAPOSTS."</a>:&nbsp;<strong>$fnaposnumwaits</strong><br />";
    $content .= "<img src=\"images/arrow.gif\" border=\"0\" alt=\"\">&nbsp;<a href=modules/Forums/admin/admin_approve.php?mode=u>"._FNAUSERS."</a>:&nbsp;<strong>$fnausernum</strong><br />";
}

?>