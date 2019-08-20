<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* Journal &#167 ZX                                                     */
/* ================                                                     */
/*                                                                      */
/* Original work done by Joseph Howard known as Member's Journal, which */
/* was based on Trevor Scott's vision of Atomic Journal.                */
/*                                                                      */
/* Modified on 25 May 2002 by Paul Laudanski (paul@computercops.biz)    */
/* Copyright (c) 2002 Modifications by Computer Cops.                   */
/* http://computercops.biz                                              */
/*                                                                      */
/* Required: PHPNuke 5.5 ( http://www.phpnuke.org/ ) and phpbb2         */
/* ( http://bbtonuke.sourceforge.net/ ) forums port.                    */
/*                                                                      */
/* Member's Journal did not work on a PHPNuke 5.5 portal which had      */
/* phpbb2 port integrated.  Thus was Journal &#167 ZX created with the  */
/* Member's Journal author's blessings.                                 */
/*                                                                      */
/* To install, backup everything first and then FTP the Journal package */
/* files into your site's module directory.  Also run the tables.sql    */
/* script so the proper tables and fields can be created and used.  The */
/* default table prefix is "nuke" which is hard-coded throughout the    */
/* entire system as a left-over from Member's Journal.  If a demand     */
/* exists, that can be changed for a future release.                    */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/* Additional security checking code 2003 by chatserv                   */
/* http://www.nukefixes.com -- http://www.nukeresources.com             */
/************************************************************************/
/* Journal 2.0 Enhanced and Debugged 2004                               */
/* by sixonetonoffun -- http://www.netflake.com --                      */
/* Images Created by GanjaUK -- http://www.GanjaUK.com                  */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/04/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

$pagetitle = '- '._USERSJOURNAL;

include_once(NUKE_BASE_DIR.'header.php');
include(NUKE_MODULES_DIR.$module_name.'/functions.php');
if (is_admin()) {
    $cookie = cookiedecode();
    $username = $cookie[1];
    $username = check_html($username, "nohtml");
    $sitename = check_html($sitename, "nohtml");
    $debug = check_html($debug, "nohtml");
    if ($debug == 'true') {
        echo ("UserName:$username<br />SiteName: $sitename");
    }

    startjournal($sitename,$user);
    $onwhat = intval($onwhat);
    $sql = "DELETE FROM ".$prefix."_journal_comments WHERE cid = '$onwhat'";
    $db->sql_query($sql);
    echo "<br />";
    OpenTable();
    echo ("<div align=center>"._COMMENTDELETED."<br /><br />");
    echo ("[ <a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=$ref\">"._RETURNJOURNAL."</a> ]</div>");
    CloseTable();
    journalfoot();
} else {
        if (is_user()) {
            $cookie = cookiedecode();
            $username = $cookie[1];
            if ($debug == "true") {
                echo ("UserName:$username<br />SiteName: $sitename");
            }
            startjournal($sitename, $user);
            $onwhat = intval($onwhat);
            $sql = "DELETE FROM ".$prefix."_journal_comments WHERE cid = '$onwhat' AND aid = '$username'";
            $db->sql_query($sql);
            echo "<br />";
            OpenTable();
            echo ("<div align=center>"._COMMENTDELETED."<br /><br />");
            echo ("[ <a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=$ref\">"._RETURNJOURNAL."</a> ]</div>");
            CloseTable();
            journalfoot();
        }
}
if (!is_user() && !is_admin()) {
    $pagetitle = '- '._YOUMUSTBEMEMBER;
    $pagetitle = check_html($pagetitle, "nohtml");
    OpenTable();
    echo "<center><strong>"._YOUMUSTBEMEMBER."</strong></center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
    exit;
}

?>