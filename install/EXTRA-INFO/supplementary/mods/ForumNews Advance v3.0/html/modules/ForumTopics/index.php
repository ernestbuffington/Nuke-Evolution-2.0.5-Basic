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
define('INDEX_FILE', true);
get_lang($module_name);
$pagetitle = "- "._ACTIVETOPICS."";
include_once(NUKE_BASE_DIR.'header.php');
$sql = "SELECT news_id, news_category, news_image FROM ".$prefix."_bbnews ORDER BY news_category";
$result = $db->sql_query($sql);
if ($db->sql_numrows($result) == 0) {
}
if ($db->sql_numrows($result) > 0) {
    $r_options = "";
    if (isset($cookie[4])) { $r_options .= "&amp;mode=$cookie[4]"; }
    if (isset($cookie[5])) { $r_options .= "&amp;order=$cookie[5]"; }
    if (isset($cookie[6])) { $r_options .= "&amp;thold=$cookie[6]"; }
    OpenTable();
    echo "<center><span class=\"title\"><strong>"._ACTIVETOPICS."</strong></span><br />\n"
    ."<span class=\"content\">"._CLICK2LIST."</span><br /><br />\n";
    while ($row = $db->sql_fetchrow($result)) {
    $news_id = $row[news_id];
    $news_category = $row[news_category];
    $news_image = $row[news_image];
    $ThemeSel = get_theme();
    if (@file_exists("themes/$ThemeSel/images/topics/$news_image")) {
        $t_image = "themes/$ThemeSel/images/topics/$news_image";
    } else {
        $t_image = "$tipath$news_image";
    }
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

    $sql = "SELECT topic_views FROM ".$prefix."_bbtopics WHERE news_id='$news_id' $topicpost";
          $res = $db->sql_query($sql);
    $numrows = $db->sql_numrows($res);
    $reads = 0;
    while ($counting = $db->sql_fetchrow($res)) {
        $reads = $reads+$counting[topic_views];
    }
    title($news_category);
    echo "<table border=\"1\" width=\"100%\" align=\"center\" cellpadding=\"2\">\n"
        ."<tr><td valign=\"top\" width='25%'>\n"
        ."<a href=\"modules.php?name=ForumNews&amp;news_id=$news_id\"><img src=\"$t_image\" border=\"0\" alt=\"$news_category\" title=\"$news_category\" hspace='5' vspace='5'></a><br /><br />\n"
        ."<span class=\"content\">\n"
        ."<big><strong>&middot;</strong></big>&nbsp;<strong>"._TOPIC.":</strong> $news_category<br />\n"
        ."<big><strong>&middot;</strong></big>&nbsp;<strong>"._TOTNEWS.":</strong> $numrows<br />\n"
        ."<big><strong>&middot;</strong></big>&nbsp;<strong>"._TOTREADS.":</strong> $reads</span>\n"
        ."</td>\n"
        ."<td valign='top'>";
	$sql = "SELECT t.topic_id, t.forum_id, t.topic_title, f.forum_name FROM ".$prefix."_bbtopics t, ".$prefix."_bbforums f  WHERE t.news_id='$news_id' $topicpost $access AND f.forum_id=t.forum_id ORDER BY t.topic_time DESC LIMIT 0,10";
	$result2 = $db->sql_query($sql);
	$num = $db->sql_numrows($result2);
	if ($num != 0) {
	    while ($row2 = $db->sql_fetchrow($result2)) {
   		if ($row2[topic_id] == 0) {
            $cat_link = "";
        } else {
            $cat_link = "<a href='modules.php?name=Forums&amp;file=viewforum&amp;f=$row2[forum_id]'><strong>$row2[forum_name]</strong></a>: ";
        }
        echo "<img src=\"images/arrow.gif\" border=\"0\" alt=\"\" title=\"\">&nbsp;&nbsp;$cat_link<a href=\"modules.php?name=ForumNews&amp;id=$row2[topic_id]\">$row2[topic_title]</a><br />";
        }
        if ($num == 10) {
        echo "<div align='right'><big><strong>&middot;</strong></big>&nbsp;<a href='modules.php?name=ForumNews&amp;news_id=$news_id'><strong>"._MORE." --></strong></a>&nbsp;&nbsp;</div>";
        }
    } else {
        echo "<i>"._NONEWSYET."</i>";
    }
    echo "</td></tr></table><br />";
    }
} 
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>