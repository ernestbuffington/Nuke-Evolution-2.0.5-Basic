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

global $prefix, $db;
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
$sql = "SELECT topic_id, topic_title FROM ".$prefix."_bbtopics WHERE news_id!=0 $topicpost ORDER BY topic_views DESC LIMIT 0,1";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$fsid = $row['topic_id'];
$ftitle = $row['topic_title'];
$content = "<span class=\"content\">";
if ((!$fsid) AND (!$ftitle)) {
    $content .= "There is no news posted yet</span>";
} else {
    $content .= "Most read News ever is:<br /><br />";
    $content .= "<a href=\"modules.php?name=ForumNews&amp;id=$fsid\">$ftitle</a></span>";
}

?>