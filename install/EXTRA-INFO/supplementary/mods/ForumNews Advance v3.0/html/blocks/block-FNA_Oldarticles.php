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

global $oldnum, $storyhome, $cookie, $prefix, $db, $user_news;
if (isset($cookie[3]) AND $user_news == 1) {
    $num = $cookie[3];
    } else {
    $num = $storyhome;
}
$boxstuff = "<table border=\"0\" width=\"100%\">";
$boxTitle = _PASTARTICLES;
        $post = $db->sql_query("SELECT post_id FROM ".$prefix."_bbapprove_posts");
    $post2 = $db->sql_numrows($post);
    if($post2 == "0") {
        $topicpost = "";
    }
    elseif($post2 > "0") {
        $topicpost = "";

        while(list($post_id) = $db->sql_fetchrow($post)){
            $topicpost .= " AND topic_first_post_id<>$post_id";
        }
 }
$sql = "SELECT topic_id, topic_title, topic_time, topic_replies FROM ".$prefix."_bbtopics WHERE news_id != 0 $topicpost ORDER BY topic_time DESC LIMIT $num, $oldnum";
$result = $db->sql_query($sql);
$vari = 0;
while ($row = $db->sql_fetchrow($result)) {
    $sid = $row['topic_id'];
    $title = $row['topic_title'];
    $time = $row['topic_time'];
    $comments = $row['topic_replies'];
    $see = 1;

$boxstuff .= "<tr><td valign=\"top\"><strong><big>&middot;</big></strong></td><td> <a href=\"modules.php?name=ForumNews&amp;id=$sid\">$title</a> ($comments)</td></tr>\n";

    $vari++;
    if ($vari==$oldnum) {
    if (isset($cookie[3]) AND $user_news == 1) {
        $storynum = $cookie[3];
    } else {
        $storynum = $storyhome;
    }
    $min = $oldnum + $storynum;
    $dummy = 1;
    }
}
    $boxstuff .= "</table>";
if ($see == 1) {
    $content = $boxstuff;
}

?>