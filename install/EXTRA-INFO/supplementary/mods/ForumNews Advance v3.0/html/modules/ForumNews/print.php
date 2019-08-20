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
-=[Mod]=-
      Advanced Username Color                  v1.0.5       10/01/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die ("You can't access this file directly...");
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
include_once(NUKE_MODULES_DIR.$module_name.'/bbstuff.php');
include_once(NUKE_MODULES_DIR.$module_name.'/fnafunctions.php');
if(!isset($id)) {
    exit();
}

function PrintPage($id) {
    global $site_logo, $nukeurl, $sitename, $prefix, $db, $module_name, $user_prefix, $user, $fnalang, $userinfo;
    $numbersql = $db->sql_query("SELECT SQL_CACHE newsnumber, news_trim, rss, timezone FROM ".$prefix."_fna_config");
    list($num, $trim, $rss_on, $sqltz) = $db->sql_fetchrow($numbersql);
    if (is_user()) {
        $tz = $userinfo['user_timezone'];
        $fnalang['FORMAT'] = $userinfo['user_dateformat'];
    } else {
        $tz = $sqltz;
    }
    $id = intval($id);
    $sql = "SELECT pt.*, n.*, t.*, u.username FROM ".$prefix."_bbtopics t "
        ."LEFT JOIN ".$user_prefix."_users u ON (u.user_id=t.topic_poster) "
        ."LEFT JOIN ".$prefix."_bbnews n ON (n.news_id=t.news_id) "
        ."LEFT JOIN ".$prefix."_bbposts_text pt ON (pt.post_id=t.topic_first_post_id) "
        ."WHERE t.topic_id=$id";

    $result = $db->sql_query($sql);
    $row = $db->sql_fetchrow($result);
    $topic_title = $row['topic_title'];
    $topic_first_post_id = $row['topic_first_post_id'];
    $news_id = $row['news_id'];
    $topic_poster = $row['topic_poster'];
    $time = $row['topic_time'];
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
    $username = UsernameColor($row['username']);
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
    $news_category = $row['news_category'];
    $bbcode_uid= $row['bbcode_uid'];
    $hometext = $row['post_text'];

    $trim_append_body = "...";
    $hometext = parseMessage( $hometext, $bbcode_uid );
    $time = create_fnadate($fnalang['FORMAT'], $time, $tz);
    if ($news_id > 0 ){
    echo "
    <html>
    <head><title>$sitename - $topic_title</title></head>
    <body bgcolor=\"#ffffff\" text=\"#000000\">
    <table border=\"0\" align=\"center\"><tr><td>

    <table border=\"0\" width=\"640\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#000000\"><tr><td>
    <table border=\"0\" width=\"640\" cellpadding=\"20\" cellspacing=\"1\" bgcolor=\"#ffffff\"><tr><td>
    <center>
    <img src=\"images/$site_logo\" border=\"0\" alt=\"\"><br /><br />
    <span class=\"content\">
    <strong>$topic_title</strong></span><br />
    <span class=tiny><strong>"._FNA_TOPIC."</strong> $news_category</span><br /><br />
    </center>
    <span class=\"content\">
    "._FNA_POSTED." ".$username." "._FNA_ON." ".$time."<br /><br />
    $hometext<br /><br />
    </span>
    </td></tr></table></td></tr></table>
    <br /><br /><center>
    <span class=\"content\">
    "._FNA_FROM." $sitename<br />
    <a href=\"$nukeurl\">$nukeurl</a><br /><br />
    "._FNA_DIRECT.": <a href=\"$nukeurl/modules.php?name=$module_name&amp;id=$id\">$nukeurl/modules.php?name=$module_name&amp;id=$id</a>
    </span>
    </td></tr></table>
    </body>
    </html>
    ";
}
else
{
echo "
    <html>
    <head><title>$sitename</title></head>
    <body bgcolor=\"#ffffff\" text=\"#000000\">
    <table border=\"0\" align=\"center\"><tr><td>

    <table border=\"0\" width=\"640\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#000000\"><tr><td>
    <table border=\"0\" width=\"640\" cellpadding=\"20\" cellspacing=\"1\" bgcolor=\"#ffffff\"><tr><td>
    <center>
    <img src=\"images/$site_logo\" border=\"0\" alt=\"\"><br /><br />
    <span class=\"content\">
    <strong>"._FNA_SORRY."</strong></span><br />
    </center>
    <span class=\"content\">
    <center>
    <strong>"._FNA_ONLYNEWS."<br /><br />
    </center>
    </span>
    </td></tr></table></td></tr></table>
    <br /><br /><center>
    <span class=\"content\">
    "._FNA_FROM." $sitename<br />
    <a href=\"$nukeurl\">$nukeurl</a><br />
    </span>
    </td></tr></table>
    </body>
    </html>
    ";
}
}
PrintPage($id);

?>