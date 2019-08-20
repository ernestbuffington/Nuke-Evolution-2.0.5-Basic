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
/*                                                                      */
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
-=[Mod]=-
      Advanced Username Color                  v1.0.5       06/11/2005
      News BBCodes                             v1.0.0       08/19/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

$pagetitle = "- "._USERSJOURNAL."";
include_once(NUKE_BASE_DIR.'header.php');
include(NUKE_MODULES_DIR.$module_name.'/functions.php');
    if (is_user()) {
        $cookie = cookiedecode();
        $username = $cookie[1];
        $user = check_html($user, "nohtml");
        $username = check_html($username, "nohtml");
        $sitename = check_html($sitename, "nohtml");
        if (isset($title)) {
            $title = check_html($title, "nohtml");
            $title = addslashes($title);
        } else { $title = ""; }
        if (isset($jbodytext)) {
/*****[BEGIN]******************************************
 [ Mod:     News BBCodes                       v1.0.0 ]
 ******************************************************/
            $jbodytext =  decode_bbcode(set_smilies(stripslashes($jbodytext)), 1, true);
            $jbodytext = evo_img_tag_to_resize($jbodytext);
/*****[END]********************************************
 [ Mod:     News BBCodes                       v1.0.0 ]
 ******************************************************/
            $jbodytext = addslashes($jbodytext);
        } else { $jbodytext = ""; }
        if (isset($mood)) { $mood = check_html($mood, "nohtml"); }
        else { $mood = ""; }
        if (isset($status)) { $status = check_html($status, "nohtml"); }
        else { $status = ""; }
        if (isset($jid)) { $jid = intval($jid); }
        else { $jid = ""; }
        if (isset($edit) AND ($edit == intval(1))) {
            $htime = date("h");
            $mtime = date("i");
            $ntime = date("a");
            $mtime = "$htime:$mtime $ntime";
            $mdate = date("m");
            $ddate = date("d");
            $ydate = date("Y");
            $ndate = "$mdate-$ddate-$ydate";
            $pdate = $ndate;
            $ptime = $mtime;
            $micro = microtime();
            $sql = "SELECT * FROM ".$prefix."_journal WHERE jid = '$jid'";
            $result = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($result)) {
        if (!is_admin()) {
            if ($username != $row['aid']) {
                echo ("<br />");
                OpenTable();
                echo ("<div align=center>".NOTYOURS."</div>");
                CloseTable();
                journalfoot();
                exit;
            }
        }
    }
            echo ("<div align=center><strong>"._UPDATEOK."</strong></div><br />");
            $sql = "UPDATE ".$prefix."_journal SET title='$title', bodytext='$jbodytext', mood='$mood', status='$status', mdate='$ndate', mtime='$mtime' WHERE jid='$jid'";
            $db->sql_query($sql);
            $edited = "<br /><br /><center><strong>"._UPDATED."</strong></center>";
        } else {
            $edited = "";
        }
        if ($debug == "true") :
        echo ("UserName:$username<br />SiteName: $sitename");
        endif;
        startjournal($sitename, $user);
        echo "<br />";
        OpenTable();
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
        echo ("<div align=center class=title>"._JOURNALFOR." " . UsernameColor($username) . "</div><br />");
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
        echo ("<div align=center> [ <a href=\"modules.php?name=$module_name&amp;file=add\">"._ADDENTRY."</a> | <a href=\"modules.php?name=$module_name&amp;file=edit&amp;disp=last\">"._YOURLAST20."</a> | <a href=\"modules.php?name=$module_name&amp;file=edit&amp;disp=all\">"._LISTALLENTRIES."</a> ]</div>");
        echo "$edited";
        CloseTable();
        echo "<br />";
        function list20($username, $bgcolor1, $bgcolor2, $bgcolor3) {
        global $prefix, $user_prefix, $db, $module_name, $userinfo;
            OpenTable();
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo ("<div align=\"center\" class=title>"._LAST20FOR." " . UsernameColor($username) . "</div><br />");
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo ("<table align=center border=1 width=\"90%\">");
            echo ("<tr>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._DATE."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._TIME."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1><strong>"._TITLE."</strong> "._CLICKTOVIEW."</td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._PUBLIC."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._EDIT."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._DELETE."</strong></div></td>");
            echo ("</tr>");
    $sql = "SELECT jid, aid, title, pdate, ptime, mdate, mtime, status, mood FROM ".$prefix."_journal WHERE aid='$username' order by 'jid' DESC";
            $result = $db->sql_query($sql);
            $dcount = 1;
            while ($row = $db->sql_fetchrow($result)) {
                if ($dcount >= 21) :
                    echo ("</tr></table>");
                    CloseTable();
                    echo ("<br />");
                    journalfoot();
                    exit;
                else :
                $dcount = $dcount + 1;
                print ("<tr>");
                $jid = intval($row['jid']);
                $title = check_html($row['title'], "nohtml");
                $jaid = check_html($row['aid'], "nohtml");
                $pdate = check_html($row['pdate'], "nohtml");
                $ptime = check_html($row['ptime'], "nohtml");
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $pdate);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $ptime);
                printf ("<td align=left bgcolor=$bgcolor2>&nbsp;<a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=%s\">%s</a>", $jid, $title);
                $sqlscnd = "SELECT cid from ".$prefix."_journal_comments where rid='$jaid'";
                $rstscnd = $db->sql_query($sqlscnd);
                $scndcount = 0;
                while ($rowscnd = $db->sql_fetchrow($rstscnd)) {
                    $scndcount = $scndcount + 1;
                }
                if ($scndcount == 1) {
                    printf (" &#151;&#151; $scndcount "._COMMENT."</td>");
                } else {
                    printf (" &#151;&#151; $scndcount "._COMMENTS."</td>");
                }
                if ($row['status'] == "yes") {
                    $row['status'] = _YES;
                } else {
                    $row['status'] = _NO;
                }
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['status']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=modify&amp;jid=%s\"><img src='modules/$module_name/images/edit.gif' border='0' alt=\""._EDIT."\" title=\""._EDIT."\" /></a></div></td>", $jid, $title);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=delete&amp;jid=%s\"><img src='modules/$module_name/images/trash.gif' border='0' alt=\""._DELETE."\" title=\""._DELETE."\" /></a></div></td>", $jid, $title);
                print ("</tr>");
                endif;
            }
            echo ("</table>");
            CloseTable();
        }
        function listall($username, $bgcolor1, $bgcolor2, $bgcolor3, $sitename) {
            global $prefix, $user_prefix, $db, $module_name, $userinfo;
            OpenTable();
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo ("<div align=\"center\" class=title>"._COMPLETELIST." " . UsernameColor($username) . "</div><br />");
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo ("<table align=center border=1 width=\"90%\">");
            echo ("<tr>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._DATE."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._TIME."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1><strong>"._TITLE."</strong></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._PUBLIC."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._EDIT."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._DELETE."</strong></div></td>");
            echo ("</tr>");
            $sql = "SELECT jid, aid, title, pdate, ptime, mdate, mtime, status, mood FROM ".$prefix."_journal WHERE aid='$username' order by 'jid' DESC";
            $result = $db->sql_query($sql);
            $dcount = 0;
            $pubcount = 0;
            $prvcount = 0;
            while ($row = $db->sql_fetchrow($result)) {
                $jid = intval($row['jid']);
                $title = check_html($row['title'], "nohtml");
                $jaid = check_html($row['aid'], "nohtml");
                $pdate = check_html($row['pdate'], "nohtml");
                $ptime = check_html($row['ptime'], "nohtml");
                $dcount = $dcount + 1;
                if ($row['status'] == "yes"):
                    $pubcount = $pubcount +1;
                $row['status'] = _YES;
                else:
                    $prvcount = $prvcount + 1;
                $row['status'] = _NO;
                endif;
                print ("<tr>");
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['pdate']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['ptime']);
                printf ("<td align=left bgcolor=$bgcolor2><a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=%s\">%s</a>", $jid, $title);
        $sqlscnd = "SELECT cid from ".$prefix."_journal_comments where rid='".intval($row['jid'])."'";
                $rstscnd = $db->sql_query($sqlscnd);
                $scndcount = 0;
                while ($rowscnd = $db->sql_fetchrow($rstscnd)) {
                    $scndcount = $scndcount + 1;
                }
                if ($scndcount == 1) {
                    printf (" &#151;&#151; $scndcount "._COMMENT."</td>");
                } else {
                    printf (" &#151;&#151; $scndcount "._COMMENTS."</td>");
                }
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['status']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=modify&amp;jid=%s\"><img src='modules/$module_name/images/edit.gif' border='0' alt='"._EDIT."' /></a></div></td>", $row['jid']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=delete&amp;jid=%s\"><img src='modules/$module_name/images/trash.gif' border='0' alt='"._DELETE."' /></a></div></td>", $row['jid']);
                print ("</tr>");
            }
            echo ("</table>");
            if (empty($prvcount)) {
                $prvcount = 0;
            }
            if (empty($pubcount)) {
                $pubcount = 0;
            }
            if (empty($dcount)) {
                $dcount = 0;
            }
            echo "<br /><div align=center>$pubcount "._PUBLICENTRIES." - " ."$prvcount "._PRIVATEENTRIES." - " ."$dcount "._TOTALENTRIES."</div>";
            CloseTable();
        }
        if (!isset($disp)) { $disp = ""; }
        switch($disp) {
            case "last":
            list20($username, $bgcolor1, $bgcolor2, $bgcolor3);
            break;
            case "all":
            listall($username, $bgcolor1, $bgcolor2, $bgcolor3, $sitename);
            break;
            default:
            list20($username, $bgcolor1, $bgcolor2, $bgcolor3);
            break;
        }
        journalfoot();
    }
    if (is_admin()) {
        $username = check_html($username, "nohtml");
        $sitename = check_html($sitename, "nohtml");
        $jbodytext = check_html(ADVT_stripslashes($jbodytext), $AllowableHTML);
        $jbodytext = addslashes($jbodytext);
        $jid = intval($jid);
        if ($edit == intval(1)) {
            $htime = date(h);
            $mtime = date(i);
            $ntime = date(a);
            $mtime = "$htime:$mtime $ntime";
            $mdate = date(m);
            $ddate = date(d);
            $ydate = date(Y);
            $ndate = "$mdate-$ddate-$ydate";
            $pdate = $ndate;
            $ptime = $mtime;
            $micro = microtime();
            $sql = "SELECT * FROM ".$prefix."_journal WHERE jid = '$jid'";
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result)) {
            }
            echo ("<div align=center><strong>"._UPDATEOK."</strong></div><br />");
            $sql = "UPDATE ".$user_prefix."_journal SET title='$title', bodytext='$jbodytext', mood='$mood', status='$status', mdate='$ndate', mtime='$mtime' WHERE jid='$jid'";
            $db->sql_query($sql);
            $edited = "<br /><br /><center><strong>"._UPDATED."</strong></center>";
        } else {
            $edited = "";
        }
        if ($debug == "true") :
        echo ("UserName:$username<br />SiteName: $sitename");
        endif;
        startjournal($sitename, $user);
        echo "<br />";
        OpenTable();
        echo ("<div align=center class=title>"._JOURNALFOR." $username</div><br />");
        echo ("<div align=center> [ <a href=\"modules.php?name=$module_name&amp;file=add\">"._ADDENTRY."</a> | <a href=\"modules.php?name=$module_name&amp;file=edit&amp;disp=last\">"._YOURLAST20."</a> | <a href=\"modules.php?name=$module_name&amp;file=edit&amp;disp=all\">"._LISTALLENTRIES."</a> ]</div>");
        echo "$edited";
        CloseTable();
        echo "<br />";
        function list20($username, $bgcolor1, $bgcolor2, $bgcolor3) {
            global $prefix, $user_prefix, $db, $module_name;
            OpenTable();
            echo ("<div align=\"center\" class=title>"._LAST20FOR." $username</div><br />");
            echo ("<table align=center border=1 width=\"90%\">");
            echo ("<tr>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._DATE."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._TIME."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1><strong>"._TITLE."</strong> "._CLICKTOVIEW."</td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._PUBLIC."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._EDIT."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._DELETE."</strong></div></td>");
            echo ("</tr>");
            $sql = "SELECT jid, aid, title, pdate, ptime, mdate, mtime, status, mood FROM ".$prefix."_journal WHERE aid='$username' order by 'jid' DESC";
            $result = $db->sql_query($sql);
            $dcount = 1;
            while ($row = $db->sql_fetchrow($result)) {
                if ($dcount >= 21) :
                echo ("</tr></table>");
                CloseTable();
                echo ("<br />");
                journalfoot();
                exit;
                else :
                $dcount = $dcount + 1;
                print ("<tr>");
                $jid = intval($row['jid']);
                $title = check_html($row['title'], "nohtml");
                $jaid = check_html($row['aid'], "nohtml");
                $pdate = check_html($row['pdate'], "nohtml");
                $ptime = check_html($row['ptime'], "nohtml");
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $pdate);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $ptime);
                printf ("<td align=left bgcolor=$bgcolor2>&nbsp;<a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=%s\">%s</a>", $jid, $title);
                $sqlscnd = "SELECT cid from ".$prefix."_journal_comments where rid='$jaid'";
                $rstscnd = $db->sql_query($sqlscnd);
                $scndcount = 0;
                while ($rowscnd = $db->sql_fetchrow($rstscnd)) {
                    $scndcount = $scndcount + 1;
                }
                if ($scndcount == 1) {
                    printf (" &#151;&#151; $scndcount "._COMMENT."</td>");
                } else {
                    printf (" &#151;&#151; $scndcount "._COMMENTS."</td>");
                }
                if ($row['status'] == "yes") {
                    $row['status'] = _YES;
                } else {
                    $row['status'] = _NO;
                }
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['status']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=modify&amp;jid=%s\"><img src='modules/$module_name/images/edit.gif' border='0' alt=\""._EDIT."\" title=\""._EDIT."\" /></a></div></td>", $jid, $title);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=delete&amp;jid=%s\"><img src='modules/$module_name/images/trash.gif' border='0' alt=\""._DELETE."\" title=\""._DELETE."\" /></a></div></td>", $jid, $title);
                print ("</tr>");
                endif;
            }
            echo ("</table>");
            CloseTable();
        }
        function listall($username, $bgcolor1, $bgcolor2, $bgcolor3, $sitename) {
            global $prefix, $user_prefix, $db, $module_name;
            OpenTable();
            echo ("<div align=\"center\" class=title>"._COMPLETELIST." $username</div><br />");
            echo ("<table align=center border=1 width=\"90%\">");
            echo ("<tr>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._DATE."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=70><div align=\"center\"><strong>"._TIME."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1><strong>"._TITLE."</strong></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._PUBLIC."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._EDIT."</strong></div></td>");
            echo ("<td align=center bgcolor=$bgcolor1 width=\"5%\"><div align=\"center\"><strong>"._DELETE."</strong></div></td>");
            echo ("</tr>");
            $sql = "SELECT jid, aid, title, pdate, ptime, mdate, mtime, status, mood FROM ".$prefix."_journal WHERE aid='$username' order by 'jid' DESC";
            $result = $db->sql_query($sql);
            $dcount = 0;
            $pubcount = 0;
            $prvcount = 0;
            while ($row = $db->sql_fetchrow($result)) {
                $jid = intval($row['jid']);
                $title = check_html($row['title'], "nohtml");
                $jaid = check_html($row['aid'], "nohtml");
                $pdate = check_html($row['pdate'], "nohtml");
                $ptime = check_html($row['ptime'], "nohtml");
                $dcount = $dcount + 1;
                if ($row['status'] == "yes"):
                    $pubcount = $pubcount +1;
                $row['status'] = _YES;
                else:
                    $prvcount = $prvcount + 1;
                $row['status'] = _NO;
                endif;
                print ("<tr>");
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['pdate']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['ptime']);
                printf ("<td align=left bgcolor=$bgcolor2><a href=\"modules.php?name=$module_name&amp;file=display&amp;jid=%s\">%s</a>", $jid, $title);
                $sqlscnd = "SELECT cid from ".$user_prefix."_journal_comments where rid=".intval($row['jid']);
                $rstscnd = $db->sql_query($sqlscnd);
                $scndcount = 0;
                while ($rowscnd = $db->sql_fetchrow($rstscnd)) {
                    $scndcount = $scndcount + 1;
                }
                if ($scndcount == 1) {
                    printf (" &#151;&#151; $scndcount "._COMMENT."</td>");
                } else {
                    printf (" &#151;&#151; $scndcount "._COMMENTS."</td>");
                }
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\">%s</div></td>", $row['status']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=modify&amp;jid=%s\"><img src='modules/$module_name/images/edit.gif' border='0' alt='"._EDIT."' /></a></div></td>", $row['jid']);
                printf ("<td align=center bgcolor=$bgcolor2><div align=\"center\"><a href=\"modules.php?name=$module_name&amp;file=delete&amp;jid=%s\"><img src='modules/$module_name/images/trash.gif' border='0' alt='"._DELETE."' /></a></div></td>", $row['jid']);
                print ("</tr>");
            }
            echo ("</table>");
            if (empty($prvcount)) {
                $prvcount = 0;
            }
            if (empty($pubcount)) {
                $pubcount = 0;
            }
            if (empty($dcount)) {
                $dcount = 0;
            }
            echo "<br /><div align=center>$pubcount "._PUBLICENTRIES." - " ."$prvcount "._PRIVATEENTRIES." - " ."$dcount "._TOTALENTRIES."</div>";
            CloseTable();
        }
        if (!isset($disp)) { $disp = ""; }
        switch($disp) {
            case "last":
            list20($username, $bgcolor1, $bgcolor2, $bgcolor3);
            break;
            case "all":
            listall($username, $bgcolor1, $bgcolor2, $bgcolor3, $sitename);
            break;
            default:
            list20($username, $bgcolor1, $bgcolor2, $bgcolor3);
            break;
        }
        journalfoot();
    } else {
        $pagetitle = "- "._YOUMUSTBEMEMBER."";
        $pagetitle = check_html($pagetitle, "nohtml");
        OpenTable();
        echo "<center><strong>"._YOUMUSTBEMEMBER."</strong></center>";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
        exit;
    }

?>