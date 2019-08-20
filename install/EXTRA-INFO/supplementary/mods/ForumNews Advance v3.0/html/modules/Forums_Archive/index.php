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

if (!defined('MODULE_FILE')) {
    die('You can\'t access this file directly...');
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
$module_title = eregi_replace("_", " ", $module_name);
$pagetitle = " - ".$module_title;
function select_month() {
    global $prefix, $user_prefix, $db, $module_name;
    include_once(NUKE_BASE_DIR.'header.php');
    title(""._STORIESARCHIVE."");
    OpenTable();
    $date = date("Y-m-d H:i:s");
    echo "<center><span class=\"content\">"._SELECTMONTH2VIEW."</span><br /><br /></center><br /><br />";
    $result = $db->sql_query("SELECT topic_time FROM ".$prefix."_bbtopics WHERE news_id > 0 ORDER BY topic_time DESC");
    echo "<ul>";
    while(list($time) = $db->sql_fetchrow($result)) {
        $time = gmdate("Y-m-d H:i:s", $time);
    ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $time, $getdate);
    if ($getdate[2] == "01") { $month = _JANUARY; } elseif ($getdate[2] == "02") { $month = _FEBRUARY; } elseif ($getdate[2] == "03") { $month = _MARCH; } elseif ($getdate[2] == "04") { $month = _APRIL; } elseif ($getdate[2] == "05") { $month = _MAY; } elseif ($getdate[2] == "06") { $month = _JUNE; } elseif ($getdate[2] == "07") { $month = _JULY; } elseif ($getdate[2] == "08") { $month = _AUGUST; } elseif ($getdate[2] == "09") { $month = _SEPTEMBER; } elseif ($getdate[2] == "10") { $month = _OCTOBER; } elseif ($getdate[2] == "11") { $month = _NOVEMBER; } elseif ($getdate[2] == "12") { $month = _DECEMBER; }
    if ($month != $thismonth) {
        $year = $getdate[1];
        echo "<li><a href=\"modules.php?name=$module_name&amp;sa=show_month&amp;year=$year&amp;month=$getdate[2]&amp;month_l=$month\">$month, $year</a>";
        $thismonth = $month;
    }
    }
    echo "</ul>"
    ."<br /><br /><center>"
    ."[ <a href=\"modules.php?name=$module_name&amp;sa=show_all\">"._SHOWALLSTORIES."</a> ]</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function show_month($year, $month, $month_l) {
    global $prefix, $user_prefix, $db, $bgcolor1, $bgcolor2, $user, $cookie, $sitename, $multilingual, $language, $module_name;
    include_once(NUKE_BASE_DIR.'header.php');
    title(""._STORIESARCHIVE."");
    title("$sitename: $month_l $year");
    $r_options = "";
    if (isset($cookie[4])) { $r_options .= "&amp;mode=$cookie[4]"; }
    if (isset($cookie[5])) { $r_options .= "&amp;order=$cookie[5]"; }
    if (isset($cookie[6])) { $r_options .= "&amp;thold=$cookie[6]"; }
    OpenTable();
    echo "<table border=\"0\" width=\"100%\"><tr>"
    ."<td bgcolor=\"$bgcolor2\" align=\"left\"><strong>"._ARTICLES."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._COMMENTS."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._READS."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._DATE."</strong></td>"
    ."</tr>";
    $time2 = strtotime("$year-$month-01 00:00:00");
    $time3 = strtotime("$year-$month-31 23:59:59");
        $post = $db->sql_query("SELECT post_id FROM ".$prefix."_bbapprove_posts");
    $post2 = $db->sql_numrows($post);
    if($post2 == "0"){
        $topicpost = "";
    }
    elseif($post2 > "0"){
        $topicpost = "";

        while(list($post_id) = $db->sql_fetchrow($post)){
            $topicpost .= " AND topic_first_post_id <> $post_id";
        }
 }
    $result = $db->sql_query("SELECT topic_id, news_id, topic_title, topic_time, topic_replies, topic_views FROM ".$prefix."_bbtopics WHERE news_id > 0 AND topic_time > '$time2' AND topic_time < '$time3' $topic_post ORDER BY topic_time DESC");
    while (list($sid, $catid, $title, $time, $comments, $counter) = $db->sql_fetchrow($result)) {
    $time = explode(" ", $time);
    $time = gmdate("Y-m-d", $time[0]);
        $title = "<a href=\"modules.php?name=ForumNews&amp;id=$sid\">$title</a>";
    echo "<tr>"
        ."<td bgcolor=\"$bgcolor1\" align=\"left\">$title</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$comments</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$counter</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$time</td>"
            ."</tr>";
    }
    echo "</table>"
    ."<br /><br /><br /><hr size=\"1\" noshade>"
    ."<span class=\"content\">"._SELECTMONTH2VIEW."</span><br />";
    $date = date("Y-m-d H:i:s");
    $result = $db->sql_query("SELECT topic_time FROM ".$prefix."_bbtopics WHERE news_id > 0 ORDER BY topic_time DESC");
    echo "<ul>";
    while(list($time) = $db->sql_fetchrow($result)) {
        $time = gmdate("Y-m-d H:i:s", $time);
    ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $time, $getdate);
    if ($getdate[2] == "01") { $month = _JANUARY; } elseif ($getdate[2] == "02") { $month = _FEBRUARY; } elseif ($getdate[2] == "03") { $month = _MARCH; } elseif ($getdate[2] == "04") { $month = _APRIL; } elseif ($getdate[2] == "05") { $month = _MAY; } elseif ($getdate[2] == "06") { $month = _JUNE; } elseif ($getdate[2] == "07") { $month = _JULY; } elseif ($getdate[2] == "08") { $month = _AUGUST; } elseif ($getdate[2] == "09") { $month = _SEPTEMBER; } elseif ($getdate[2] == "10") { $month = _OCTOBER; } elseif ($getdate[2] == "11") { $month = _NOVEMBER; } elseif ($getdate[2] == "12") { $month = _DECEMBER; }
    if ($month != $thismonth) {
        $year = $getdate[1];
        echo "<li><a href=\"modules.php?name=$module_name&amp;sa=show_month&amp;year=$year&amp;month=$getdate[2]&amp;month_l=$month\">$month, $year</a>";
        $thismonth = $month;
    }
    }
    echo "</ul><br /><br /><center>"
    ."[ <a href=\"modules.php?name=$module_name\">"._ARCHIVESINDEX."</a> | <a href=\"modules.php?name=$module_name&amp;sa=show_all\">"._SHOWALLSTORIES."</a> ]</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function show_all($min) {
    global $prefix, $user_prefix, $db, $bgcolor1, $bgcolor2, $user, $cookie, $sitename, $multilingual, $language, $module_name;
    if (!isset($min)) {
    $min = "0";
    }
    $max = "250";
    include_once(NUKE_BASE_DIR.'header.php');
    title(""._STORIESARCHIVE."");
    title("$sitename: "._ALLSTORIESARCH."");
    OpenTable();
    echo "<table border=\"0\" width=\"100%\"><tr>"
    ."<td bgcolor=\"$bgcolor2\" align=\"left\"><strong>"._ARTICLES."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._COMMENTS."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._READS."</strong></td>"
    ."<td bgcolor=\"$bgcolor2\" align=\"center\"><strong>"._DATE."</strong></td>"
    ."</tr>";
        $post = $db->sql_query("SELECT post_id FROM ".$prefix."_bbapprove_posts");
    $post2 = $db->sql_numrows($post);
    if($post2 == "0"){
        $topicpost = "";
    }
    elseif($post2 > "0"){
        $topicpost = "";

        while(list($post_id) = $db->sql_fetchrow($post)){
            $topicpost .= " AND topic_first_post_id <> $post_id";
        }
 }
    $result = $db->sql_query("SELECT topic_id, news_id, topic_title, topic_time, topic_replies, topic_views FROM ".$prefix."_bbtopics WHERE news_id > 0 $topic_post ORDER BY topic_time DESC LIMIT $min,$max");
    while (list($sid, $catid, $title, $time, $comments, $counter) = $db->sql_fetchrow($result)) {
    $time = explode(" ", $time);
    $time = gmdate("Y-m-d", $time[0]);
        $title = "<a href=\"modules.php?name=ForumNews&amp;id=$sid\">$title</a>";
    echo "<tr>"
        ."<td bgcolor=\"$bgcolor1\" align=\"left\">$title</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$comments</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$counter</td>"
        ."<td bgcolor=\"$bgcolor1\" align=\"center\">$time</td>"
            ."</tr>";
    }
    echo "</table>"
    ."<br /><br /><br />";
    if (($numrows > 250) AND ($min == 0)) {
    $min = $min+250;
    $a++;
    echo "<center>[ <a href=\"modules.php?name=$module_name&amp;sa=show_all&amp;min=$min\">"._NEXTPAGE."</a> ]</center><br />";
    }
    if (($numrows > 250) AND ($min >= 250) AND ($a != 1)) {
    $pmin = $min-250;
    $min = $min+250;
    $a++;
    echo "<center>[ <a href=\"modules.php?name=$module_name&amp;sa=show_all&amp;min=$pmin\">"._PREVIOUSPAGE."</a> | <a href=\"modules.php?name=$module_name&amp;sa=show_all&amp;min=$min\">"._NEXTPAGE."</a> ]</center><br />";
    }
    if (($numrows <= 250) AND ($a != 1) AND ($min != 0)) {
    $pmin = $min-250;
    echo "<center>[ <a href=\"modules.php?name=$module_name&amp;sa=show_all&amp;min=$pmin\">"._PREVIOUSPAGE."</a> ]</center><br />";
    }
    echo "<hr size=\"1\" noshade>"
    ."<span class=\"content\">"._SELECTMONTH2VIEW."</span><br />";
    $date = date("Y-m-d H:i:s");
    if ($gettime[2] == "01") { $thismonth = _JANUARY; } elseif ($gettime[2] == "02") { $thismonth = _FEBRUARY; } elseif ($gettime[2] == "03") { $thismonth = _MARCH; } elseif ($gettime[2] == "04") { $thismonth = _APRIL; } elseif ($gettime[2] == "05") { $thismonth = _MAY; } elseif ($gettime[2] == "06") { $thismonth = _JUNE; } elseif ($gettime[2] == "07") { $thismonth = _JULY; } elseif ($gettime[2] == "08") { $thismonth = _AUGUST; } elseif ($gettime[2] == "09") { $thismonth = _SEPTEMBER; } elseif ($gettime[2] == "10") { $thismonth = _OCTOBER; } elseif ($gettime[2] == "11") { $thismonth = _NOVEMBER; } elseif ($gettime[2] == "12") { $thismonth = _DECEMBER; }
    $result = $db->sql_query("SELECT topic_time FROM ".$prefix."_bbtopics WHERE news_id > 0 ORDER BY topic_time DESC");
    echo "<ul>";
    while(list($time) = $db->sql_fetchrow($result)) {
        $time = gmdate("Y-m-d H:i:s", $time);
    ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})", $time, $getdate);
    if ($getdate[2] == "01") { $month = _JANUARY; } elseif ($getdate[2] == "02") { $month = _FEBRUARY; } elseif ($getdate[2] == "03") { $month = _MARCH; } elseif ($getdate[2] == "04") { $month = _APRIL; } elseif ($getdate[2] == "05") { $month = _MAY; } elseif ($getdate[2] == "06") { $month = _JUNE; } elseif ($getdate[2] == "07") { $month = _JULY; } elseif ($getdate[2] == "08") { $month = _AUGUST; } elseif ($getdate[2] == "09") { $month = _SEPTEMBER; } elseif ($getdate[2] == "10") { $month = _OCTOBER; } elseif ($getdate[2] == "11") { $month = _NOVEMBER; } elseif ($getdate[2] == "12") { $month = _DECEMBER; }
    if ($month != $thismonth) {
        $year = $getdate[1];
        echo "<li><a href=\"modules.php?name=$module_name&amp;sa=show_month&amp;year=$year&amp;month=$getdate[2]&amp;month_l=$month\">$month, $year</a>";
        $thismonth = $month;
    }
    }
    echo "</ul><br /><br /><center>"
    ."[ <a href=\"modules.php?name=$module_name\">"._ARCHIVESINDEX."</a> ]</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

switch($sa) {

    case "show_all":
    show_all($min);
    break;

    case "show_month":
    show_month($year, $month, $month_l);
    break;
    
    default:
    select_month();
    break;

}

?>