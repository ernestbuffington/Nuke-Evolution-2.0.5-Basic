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

if(!defined('NUKE_EVO')) exit;

global $prefix, $db, $tipath, $ThemeSel;
$numrows = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_bbnews"));
if ($numrows > 1) {
    $sql = "SELECT news_id FROM ".$prefix."_bbnews";
    $result = $db->sql_query($sql);
    while ($row = $db->sql_fetchrow($result)) {
    $topicid = $row['news_id'];
    $topic_array .= "$topicid-";
    }
    $r_topic = explode("-",$topic_array);
    mt_srand((double)microtime()*1000000);
    $numrows = $numrows-1;
    $topic = mt_rand(0, $numrows);
    $topic = $r_topic[$topic];
} else {
    $topic = 1;
}
$sql = "SELECT news_image, news_category FROM ".$prefix."_bbnews WHERE news_id='$topic'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$topicimage = $row['news_image'];
$topictext = $row['news_category'];
    if (@file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
        $t_image = "themes/$ThemeSel/images/topics/$topicimage";
    } else {
        $t_image = "$tipath$topicimage";
    }
$content = "<br /><center><a href=\"modules.php?name=ForumNews&amp;news_id=".$topic."\"><img src=\"$t_image\" border=\"0\" alt=\"$topictext\" title=\"$topictext\"></a><br />[ <a href=\"modules.php?name=ForumNews&amp;news_id=$topic\">$topictext</a> ]</center><br />";
$content .= "<table border=\"0\" width=\"100%\">";
        $post = $db->sql_query("SELECT post_id FROM ".$prefix."_bbapprove_posts");
    $post2 = $db->sql_numrows($post);
    if($post2 == "0"){
        $topicpost = "";
    }
    elseif($post2 > "0"){
        $topicpost = "";

        while(list($post_id) = $db->sql_fetchrow($post)){
            $topicpost .= " AND topic_first_post_id<>$post_id";
        }
 }
$sql = "SELECT topic_title, topic_id FROM ".$prefix."_bbtopics WHERE news_id='$topic' $topicpost ORDER BY topic_time DESC LIMIT 0,9";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result)) {
    $content .= "<tr><td valign=\"top\"><strong><big>&middot;</big></strong></td><td><a href=\"modules.php?name=ForumNews&amp;id=".$row['topic_id']."\">".$row['topic_title']."</a></td></tr>";
}
$content .= "</table>";

?>