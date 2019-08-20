<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

// ==========================================
// PHP-NUKE: Shout Box Conversion Tool
// ==========================
//
// Copyright (c) 2005 by Aric Bolf (SuperCat)
// http://www.OurScripts.net
//
// This program is free software. You can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation
// ===========================================

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/10/2005
 ************************************************************************/

require_once(dirname(__FILE__).'/mainfile.php');
global $admin, $admin_file, $prefix, $db, $Most_Current_Version;
if (!is_array($admin)) {
    $admin2 = base64_decode($admin);
    $admin2 = explode(":", $admin2);
    $aid = "$admin2[0]";
} else {
    $aid = "$admin[0]";
}

define('INDEX_FILE', false);

$sql = "SELECT radminsuper FROM ".$prefix."_authors WHERE aid='$aid'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
if ($row['radminsuper'] == 1) {

function ShoutBoxPreConvert() {
    global $prefix, $db;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<p class=\"title\" align=\"center\">Shout Box Conversion Tool</p>";
    CloseTable();
    echo "<br />";
    OpenTable();
    if (eregi("MSIE(.*)", $_SERVER['HTTP_USER_AGENT'])) {
        echo "<p class=\"content\"><strong>NOTE:</strong> Because you are using Internet Explorer, you may experience issues with its cache showing you old page content on this conversion tool when the contents actually have changed. I recommend you use <a target=\"_blank\" href=\"http://www.opera.com/\">Opera</a>, <a target=\"_blank\" href=\"http://www.mozilla.org/products/firefox/\">FireFox</a>, or <a target=\"_blank\" href=\"http://www.mozilla.org/products/mozilla1.x/\">Mozilla</a>.</p>\n";
    }
    echo "<p class=\"content\">This conversion tool converts shouts from the old format to the more flexible and database space saving format. There are several advantages to this format. The date and time are not locked into a preset format. The date, time, and timezone will follow a registered user's preferences. You will be able to prune shouts older than a certain time. A database backup is recommended before starting this process.</p>";
    echo "<p class=\"content\">You have 3 choices to convert the shouts to the new format. Automatic, Manual, and Delete all unconverted. Use automatic or manual if you want to save your shouts. Use the delete method if the shouts aren't important to save.";
    echo "<p class=\"content\"><strong>Automatic</strong> will make its best effort to convert your shouts. It is the fastest method but can have incorrect date conversions if the date and time format set in the shout box admin area has changed. Shouts giving dates newer than today and older than January 1st 2003 will not be converted. You can then convert these remaining shouts manually.</p>";
    echo "<p class=\"content\"><strong>Manual</strong> will individually read each shout. It will show you the current date saved and the date it thinks is the correct conversion. If you agree, you can click accept. If you disagree, you can enter the correct date and time and click save. You then move on to the next shout. You also have the option of deleting the current shout. This method is the slowest but has a very low chance of incorrect conversions.</p>";
    echo "<p class=\"content\"><strong>Delete all</strong> will delete all shouts from the database that do not have the unix timestamp format. Any shouts using the new format will not be deleted. This is the fastest method and can't have any incorrect conversions. <strong>This method is not recommended</strong> because it reduces your shout history and content you have on your site. Use this <strong>only</strong> if some shouts will not convert correctly.</p>";
    $sql = "SELECT id FROM ".$prefix."_shoutbox";
    $result = $db->sql_query($sql);
    $sql = "SELECT id FROM ".$prefix."_shoutbox_shouts";
    $result2 = $db->sql_query($sql);
    if ($result == NULL AND $result2 != NULL) {
        $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE timestamp=''";
        $result = $db->sql_query($sql);
        $shouts = $db->sql_numrows($result);
        if ($shouts > 0) {
            $shouts = number_format($shouts);
            echo "<p class=\"content\">You have <strong>$shouts</strong> shouts needing conversion.</p>";
            echo "<p class=\"title\">Start conversion? &#91; <a href=\"Conversion_Tool.php?Convert=auto\">Automatic</a> &#93; &#91; <a href=\"Conversion_Tool.php?Convert=manual\">Manual</a> &#93; &#91; <a href=\"Conversion_Tool.php?Convert=delete\">Delete all</a> &#93;</p>";
        } else {
            echo "<p class=\"title\">You do not have any shouts that need conversion.</p>";
        }

    } else {
        echo "<p class=\"title\">Run SB_SQL_installer.php before running this conversion tool.</p>";
    }
    echo "<p class=\"content\">Restart this conversion tool? &#91; <a href=\"Conversion_Tool.php\">Restart</a> &#93;</p>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function ShoutBoxConvertAuto() {
    global $prefix, $db;
    $sql = "SELECT * FROM ".$prefix."_shoutbox_date WHERE id='1'";
    $result = $db->sql_query($sql);
    $format = $db->sql_fetchrow($result);
    // $format['date']
    // $format['time']

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE timestamp=''";
    $result = $db->sql_query($sql);
    $shoutsBefore = $db->sql_numrows($result);

    $now = time();

    while ($shout = $db->sql_fetchrow($result)) {
        $shout['name'] = trim($shout['name']);
        $shout['comment'] = trim($shout['comment']);

// mktime() hour minute second month day year
        if ($format['date'] == 'd-m-y' OR $format['date'] == 'd-m-Y') {
            list($shoutDay, $shoutMonth, $shoutYear) = split("-", $shout['date'], 3);
        }
        if ($format['date'] == 'm-d-y' OR $format['date'] == 'm-d-Y') {
            list($shoutMonth, $shoutDay, $shoutYear) = split("-", $shout['date'], 3);
        }
        if ($format['date'] == 'Y-m-d') {
            list($shoutYear, $shoutMonth, $shoutDay) = split("-", $shout['date'], 3);
        }

        if ($format['time'] == 'g:ia') { // 3:15am
            if (substr($shout['time'], -2, 2) == 'am') {
                $shout['time'] = str_replace("am", "", $shout['time']);
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
            } else {
                $shout['time'] = str_replace("pm", "", $shout['time']);
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
                $shoutHour = (12+$shoutHour);
            }
        }
        if ($format['time'] == 'g:i:a') { // 3:15:am
            if (substr($shout['time'], -2, 2) == 'am') {
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
            } else {
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
                $shoutHour = (12+$shoutHour);
            }
        }
        if ($format['time'] == 'H:i') { // 03:15
            list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
        }
        if ($format['time'] == 'Hi') { // 0315
            $shoutHour = substr($shout['time'], 0, 2);
            $shoutMinute = substr($shout['time'], 2, 2);
        }
        $shoutHour = round($shoutHour); // incase the shout hour begins with a zero

        $shout['timestamp'] = mktime($shoutHour, $shoutMinute, 0, $shoutMonth, $shoutDay, $shoutYear);
        if ($shout['timestamp'] > $now OR $shout['timestamp'] < 1041408000) {
            $shout['timestamp'] = '';
        }  // incase the date derived is newer than now or older than Jan 1st 2003, it will not save a timestamp format.

        $sql = "UPDATE ".$prefix."_shoutbox_shouts set name='$shout[name]', comment='$shout[comment]', date='', time='', timestamp='$shout[timestamp]' WHERE id='$shout[id]'";
        $db->sql_query($sql);
    }

    $sql = "SELECT id FROM ".$prefix."_shoutbox_shouts WHERE timestamp=''";
    $result = $db->sql_query($sql);
    $shoutsAfter = $db->sql_numrows($result);
    $converted = ($shoutsBefore-$shoutsAfter);
    header("Location: Conversion_Tool.php?Convert=ShoutBoxPostConvert&converted=$converted");
    exit;
}

function ShoutBoxConvertManual() {
    global $prefix, $db, $bgcolor2;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<p class=\"title\" align=\"center\">Shout Box Conversion Tool</p>";
    CloseTable();
    echo "<br />";
    OpenTable();

    $sql = "SELECT * FROM ".$prefix."_shoutbox_date WHERE id='1'";
    $result = $db->sql_query($sql);
    $format = $db->sql_fetchrow($result);
    // $format['date']
    // $format['time']

// ID OLD_DATE NEW_DATE ACCEPT SKIP DELETE

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE timestamp='' ORDER BY id DESC LIMIT 1";
    $result = $db->sql_query($sql);
    //$shoutsBefore = $db->sql_numrows($result);

    $now = time();

    while ($shout = $db->sql_fetchrow($result)) {
        $shout['name'] = trim($shout['name']);
        $shout['comment'] = trim($shout['comment']);
        $oldDate = $shout['date'];
        $oldTime = $shout['time'];

// mktime() hour minute second month day year
        if ($format['date'] == 'd-m-y' OR $format['date'] == 'd-m-Y') {
            list($shoutDay, $shoutMonth, $shoutYear) = split("-", $shout['date'], 3);
        }
        if ($format['date'] == 'm-d-y' OR $format['date'] == 'm-d-Y') {
            list($shoutMonth, $shoutDay, $shoutYear) = split("-", $shout['date'], 3);
        }
        if ($format['date'] == 'Y-m-d') {
            list($shoutYear, $shoutMonth, $shoutDay) = split("-", $shout['date'], 3);
        }

        if ($format['time'] == 'g:ia') { // 3:15am
            if (substr($shout['time'], -2, 2) == 'am') {
                $shout['time'] = str_replace("am", "", $shout['time']);
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
            } else {
                $shout['time'] = str_replace("pm", "", $shout['time']);
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
                $shoutHour = (12+$shoutHour);
            }
        }
        if ($format['time'] == 'g:i:a') { // 3:15:am
            if (substr($shout['time'], -2, 2) == 'am') {
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
            } else {
                list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
                $shoutHour = (12+$shoutHour);
            }
        }
        if ($format['time'] == 'H:i') { // 03:15
            list($shoutHour, $shoutMinute) = split(":", $shout['time'], 2);
        }
        if ($format['time'] == 'Hi') { // 0315
            $shoutHour = substr($shout['time'], 0, 2);
            $shoutMinute = substr($shout['time'], 2, 2);
        }
        $shoutHour = round($shoutHour); // incase the shout hour begins with a zero

        $newTimestamp = mktime($shoutHour, $shoutMinute, 0, $shoutMonth, $shoutDay, $shoutYear);
        if ($newTimestamp > $now OR $newTimestamp < 1041408000) {
            $unixTime = "Unable to convert"; // incase the date derived is newer than now or older than Jan 1st 2003, it will not save a timestamp format.
        } else {
            $unixTime = date("M j, Y g:ia", $newTimestamp);
        }

        echo "<p class=\"content\"><strong>Manual Conversion Instructions:</strong> Compare the old date &amp; time and the new date &amp; time. If the two dates are the same, then click the \"Save\" button (It is ok if the date and time formatting is different). If the two dates &amp; times are not the same or you see an \"unable to convert\" message, you will have to choose the correct date &amp; time from the drop downs and click the \"Save corrected\" button. If you do not want to keep the shout, then click the \"Delete\" link.</p>";

        echo "<form name=\"shoutManualConvert\" method=\"post\" action=\"Conversion_Tool.php\" style=\"margin-bottom: 0px;\">";

        echo "<table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" border=\"1\" align=\"center\">\n";
        echo "<tr align=\"center\" bgcolor=\"$bgcolor2\"><td><strong>ID</strong></td><td><strong>Name</strong></td><td width=\"80%\"><strong>Comment</strong></td></tr>";

        echo "<tr><td align=\"center\">$shout[id]</td><td nowrap=\"nowrap\" align=\"center\">$shout[name]</td><td>$shout[comment]</td></tr></table>";

        echo "<br /><br /><table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" border=\"1\" align=\"center\">\n";
        echo "<tr align=\"center\" bgcolor=\"$bgcolor2\"><td nowrap=\"nowrap\"><strong>Old date &amp; time</strong></td><td nowrap=\"nowrap\"><strong>New date &amp; time</strong></td><td><strong>Save</strong></td><td><strong>Delete</strong></td></tr>\n";

        echo "<tr align=\"center\"><td nowrap=\"nowrap\">$oldDate $oldTime</td><td nowrap=\"nowrap\">$unixTime</td><td><input type=\"hidden\" name=\"convertID\" value=\"$shout[id]\" /><input type=\"hidden\" name=\"newTimestamp\" value=\"$newTimestamp\" /><input type=\"hidden\" name=\"Convert\" value=\"ShoutBoxConvertManualSave\" /><input type=\"submit\" name=\"button\" value=\"Save\" /></td><td><a href=\"Conversion_Tool.php?Convert=ShoutBoxConvertManualDelete&amp;convertID=$shout[id]\">Delete</a></td></tr>";

        echo "</table></form>";

        echo "<br /><br /><form name=\"shoutManualOverrideConvert\" method=\"post\" action=\"Conversion_Tool.php\" style=\"margin-bottom: 0px;\">";
        echo "<table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" border=\"1\" align=\"center\">\n";
        echo "<tr align=\"center\" bgcolor=\"$bgcolor2\"><td width=\"14%\"><strong>Month</strong></td><td width=\"14%\"><strong>Day</strong></td><td width=\"14%\"><strong>Year</strong></td><td width=\"14%\"><strong>Hour</strong></td><td width=\"14%\"><strong>Minute</strong></td><td width=\"14%\"><strong>am/pm</strong></td><td width=\"16%\"><strong>Save corrected</strong></td></tr>";

        echo "<tr align=\"center\"><td><select name=\"cMonth\">";
        $cNum = date("n", $newTimestamp);
        $count = 1;
        while ($count <= 12) {
            if ($count == "$cNum") {
                echo "<option value=\"$count\" selected=\"selected\">$count</option>";
            } else {
                echo "<option value=\"$count\">$count</option>";
            }
            $count++;
        }

        echo "</select></td><td><select name=\"cDay\">";
        $cNum = date("j", $newTimestamp);
        $count = 1;
        while ($count <= 31) {
            if ($count == "$cNum") {
                echo "<option value=\"$count\" selected=\"selected\">$count</option>";
            } else {
                echo "<option value=\"$count\">$count</option>";
            }
            $count++;
        }

        echo "</select></td><td><select name=\"cYear\">";
        $cNum = date("Y", $newTimestamp);
        $count = 2001;
        while ($count <= 2005) {
            if ($count == "$cNum") {
                echo "<option value=\"$count\" selected=\"selected\">$count</option>";
            } else {
                echo "<option value=\"$count\">$count</option>";
            }
            $count++;
        }

        echo "</select></td><td><select name=\"cHour\">";
        $cNum = date("g", $newTimestamp);
        $count = 1;
        while ($count <= 12) {
            if ($count == "$cNum") {
                echo "<option value=\"$count\" selected=\"selected\">$count</option>";
            } else {
                echo "<option value=\"$count\">$count</option>";
            }
            $count++;
        }

        echo "</select></td><td><select name=\"cMinute\">";
        $cNum = date("i", $newTimestamp);
        $count = 0;
        while ($count <= 59) {
            if ($count < 10) {
                if ("0$count" == "$cNum") {
                    echo "<option value=\"$count\" selected=\"selected\">0$count</option>";
                } else {
                    echo "<option value=\"$count\">0$count</option>";
                }
            } else {
                if ($count == "$cNum") {
                    echo "<option value=\"$count\" selected=\"selected\">$count</option>";
                } else {
                    echo "<option value=\"$count\">$count</option>";
                }
            }
            $count++;
        }

        echo "</select></td><td><select name=\"cAmPm\">";
        $cNum = date("a", $newTimestamp);
        if ("$cNum" == "am") {
            echo "<option value=\"1\" selected=\"selected\">am</option>";
            echo "<option value=\"2\">pm</option>";
        } else {
            echo "<option value=\"1\">am</option>";
            echo "<option value=\"2\" selected=\"selected\">pm</option>";
        }

        echo "</select></td><td><input type=\"hidden\" name=\"convertID\" value=\"$shout[id]\" /><input type=\"hidden\" name=\"Convert\" value=\"ShoutBoxConvertManualOverrideSave\" /><input type=\"submit\" name=\"button\" value=\"Save corrected\" /></td></tr>";

        echo "</table></form><br /><br />";
    }

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE timestamp=''";
    $result = $db->sql_query($sql);
    $shouts = $db->sql_numrows($result);

    if ($shouts > 0) {
        $shouts = number_format($shouts);
        echo "<p class=\"content\">You have <strong>$shouts</strong> shouts remaining that need conversion.</p>";
    } else {
        echo "<p class=\"title\">All of your shouts have been converted.</p>";
    }

    echo "<p class=\"content\">Restart this conversion tool? &#91; <a href=\"Conversion_Tool.php\">Restart</a> &#93;</p>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function ShoutBoxConvertManualSave($convertID, $newTimestamp) {
    global $prefix, $db;

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE id='$convertID'";
    $result = $db->sql_query($sql);
    $shout = $db->sql_fetchrow($result);

    $shout['name'] = trim($shout['name']);
    $shout['comment'] = trim($shout['comment']);

    $sql = "UPDATE ".$prefix."_shoutbox_shouts set name='$shout[name]', comment='$shout[comment]', timestamp='$newTimestamp' WHERE id='$convertID'";
    $db->sql_query($sql);

    header("Location: Conversion_Tool.php?Convert=manual");
    exit;
}

function ShoutBoxConvertManualOverrideSave($convertID, $cMonth, $cDay, $cYear, $cHour, $cMinute, $cAmPm) {
    global $prefix, $db;

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE id='$convertID'";
    $result = $db->sql_query($sql);
    $shout = $db->sql_fetchrow($result);

    $shout['name'] = trim($shout['name']);
    $shout['comment'] = trim($shout['comment']);

    if ($cAmPm == 2) {
        $cHour = ($cHour+12);
    }
    $newTimestamp = mktime($cHour, $cMinute, 0, $cMonth, $cDay, $cYear);

    $sql = "UPDATE ".$prefix."_shoutbox_shouts set name='$shout[name]', comment='$shout[comment]', timestamp='$newTimestamp' WHERE id='$convertID'";
    $db->sql_query($sql);

    header("Location: Conversion_Tool.php?Convert=manual");
    exit;
}

function ShoutBoxConvertManualDelete($convertID) {
    global $prefix, $db;

    $sql = "DELETE FROM ".$prefix."_shoutbox_shouts WHERE id='$convertID'";
    $result = $db->sql_query($sql);

    header("Location: Conversion_Tool.php?Convert=manual");
    exit;
}

function ShoutBoxConvertDelete() {
    global $prefix, $db;

    $sql = "SELECT id FROM ".$prefix."_shoutbox_shouts";
    $result = $db->sql_query($sql);
    $shoutsBefore = $db->sql_numrows($result);

    $sql = "DELETE FROM ".$prefix."_shoutbox_date WHERE timestamp=''";
    $result = $db->sql_query($sql);

    $sql = "SELECT id FROM ".$prefix."_shoutbox_shouts";
    $result = $db->sql_query($sql);
    $shoutsAfter = $db->sql_numrows($result);

    $pruned = ($shoutsBefore-$shoutsAfter);
    header("Location: Conversion_Tool.php?Convert=ShoutBoxPostConvert&pruned=$pruned");
    exit;
}

function ShoutBoxPostConvert($pruned, $converted) {
    global $prefix, $db;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<p class=\"title\" align=\"center\">Shout Box Conversion Tool</p>";
    CloseTable();
    echo "<br />";
    OpenTable();
    if ($pruned > 0) {
        echo "<p class=\"content\">$pruned shouts have been deleted.</p>";
    }
    if ($converted >= 0) {
        echo "<p class=\"content\">$converted shouts have been converted.</p>";
    }

    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts WHERE timestamp=''";
    $result = $db->sql_query($sql);
    $shouts = $db->sql_numrows($result);

    if ($shouts > 0) {
        $shouts = number_format($shouts);
        echo "<p class=\"content\">You have <strong>$shouts</strong> shouts remaining that need conversion.</p>";
        echo "<p class=\"title\">Start conversion? &#91; <a href=\"Conversion_Tool.php?Convert=auto\">Automatic</a> &#93; &#91; <a href=\"Conversion_Tool.php?Convert=manual\">Manual</a> &#93; &#91; <a href=\"Conversion_Tool.php?Convert=delete\">Delete all</a> &#93;</p>";
    } else {
        echo "<p class=\"title\">All of your shouts have been converted.</p>";
    }

    echo "<p class=\"content\">Restart this conversion tool? &#91; <a href=\"Conversion_Tool.php\">Restart</a> &#93;</p>";
    echo "<p class=\"content\"><strong>NOTE:</strong> As a security measure, delete this conversion tool from your server when you are done using it.</p>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

switch($Convert) {

    case "auto":
    ShoutBoxConvertAuto();
    break;

    case "manual":
    ShoutBoxConvertManual();
    break;

    case "ShoutBoxConvertManualSave":
    ShoutBoxConvertManualSave($convertID, $newTimestamp);
    break;

    case "ShoutBoxConvertManualOverrideSave":
    ShoutBoxConvertManualOverrideSave($convertID, $cMonth, $cDay, $cYear, $cHour, $cMinute, $cAmPm);
    break;

    case "ShoutBoxConvertManualDelete":
    ShoutBoxConvertManualDelete($convertID);
    break;

    case "delete":
    ShoutBoxConvertDelete();
    break;

    case "ShoutBoxPostConvert":
    if (empty($pruned)) { $pruned = ''; }
    if (empty($converted)) { $converted = ''; }
    ShoutBoxPostConvert($pruned, $converted);
    break;

    default:
    ShoutBoxPreConvert();
    break;
}

} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<p class=\"title\" align=\"center\">Shout Box Conversion Tool</p>\n";

    echo "<p class=\"content\"><strong>Security note:</strong> This shout box is distributed for free from <strong><a href=\"http://www.ourscripts.net\" target=\"_blank\">OurScripts.net</a></strong> and licensed under the GPL. If you didn't download it from there, it is a good idea that you do so. We wouldn't want you installing a hacked version. Please encourage any webmasters that are distributing this script from their site to change their download link to <strong><a href=\"http://www.ourscripts.net/modules.php?name=Downloads&d_op=viewdownloaddetails&lid=95&title=Shout%20Box\" target=\"_blank\">here</a></strong>. Thank you!</p>\n";

    echo "<p class=\"title\" align=\"center\">Access Denied to non-Super Administrators!</p>";
    echo "<p class=\"content\" align=\"center\"><a href=\"".$admin_file.".php\">Login as Super Administrator</a></p>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>