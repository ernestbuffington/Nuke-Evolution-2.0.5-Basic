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
/*                                                                       */
/* News Display module for PHP-Nuke and the phpBB forum news port        */
/* Written by ArtificialIntel & Mighty_Y                                 */
/* Copyright (c) 2003 by ArtificialIntel                                 */
/* All Rights Reserved                                                   */
/*                                                                       */
/*************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/26/2005
-=[Mod]=-
      Advanced Username Color                  v1.0.5       10/01/2005
      RSS Improvements                         v2.0.0       10/02/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die('You can\'t access this file directly...');
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
define('INDEX_FILE', true);
$module_name = basename(dirname(__FILE__));
$pagetitle = " - ".$module_name;
include_once(NUKE_BASE_DIR.'header.php');
global $db, $prefix, $user, $user_prefix, $userinfo;
include_once(NUKE_MODULES_DIR.$module_name.'/bbstuff.php');
get_lang($module_name);
include_once(NUKE_MODULES_DIR.$module_name.'/fnafunctions.php');
$news_id = isset($HTTP_GET_VARS['news_id']) ? intval($HTTP_GET_VARS['news_id']) : 0;
$id = isset($HTTP_GET_VARS['id']) ? intval($HTTP_GET_VARS['id']) : 0;
$page = isset($HTTP_GET_VARS['page']) ? intval($HTTP_GET_VARS['page']) : 0;
    if (empty($page)) { $page = 1 ; }
$sql = $db->sql_query("SELECT SQL_CACHE news_id FROM ".$prefix."_bbtopics WHERE news_id > 0");
$numrows = $db->sql_fetchrow($sql);
if($numrows > 0){
$numbersql = $db->sql_query("SELECT SQL_CACHE newsnumber, news_trim, rss, timezone FROM ".$prefix."_fna_config");
list($num, $trim, $rss_on, $sqltz) = $db->sql_fetchrow($numbersql);
if (is_user()) {
$tz = $userinfo['user_timezone'];
$fnalang['FORMAT'] = $userinfo['user_dateformat'];
} else {
$tz = $sqltz;
}
    $offset = ($page-1) * $num ;
    $result = $db->sql_query("SELECT SQL_CACHE post_id FROM ".$prefix."_bbapprove_posts");
        $numrows2 = $db->sql_numrows($result);
        if($numrows2 == "0"){
                $topicpost = "";
        }
        elseif($numrows2 > "0"){
                $topicpost = "";

                while(list($post_id) = $db->sql_fetchrow($result)){
                        $topicpost .= " AND t.topic_first_post_id <> $post_id";
                }
        }
                if ($news_id != 0) {
                $sql_count = "SELECT SQL_CACHE * FROM ".$prefix."_bbtopics t WHERE t.news_id = $news_id $topicpost";
                }else{
                $sql_count = "SELECT SQL_CACHE * FROM ".$prefix."_bbtopics t WHERE t.news_id > 0 $topicpost";
                }
                $result_count = $db->sql_query($sql_count);
                $news_count = $db->sql_numrows($result_count);
                $total_pages = ceil($news_count / $num);
                if($id != 0){
                $sql = "UPDATE ".$prefix."_bbtopics SET topic_views = topic_views + 1 WHERE topic_id =" . $id;
                $db->sql_query($sql);
                }
$sql = "SELECT SQL_CACHE p.*, pt.*, n.*, t.*, vd.vote_id, u.username FROM ".$prefix."_bbtopics t "
    ."LEFT JOIN ".$user_prefix."_users u ON (u.user_id=t.topic_poster) "
    ."LEFT JOIN ".$prefix."_bbnews n ON (n.news_id=t.news_id) "
    ."LEFT JOIN ".$prefix."_bbposts p ON (p.post_id=t.topic_first_post_id) "
    ."LEFT JOIN ".$prefix."_bbvote_desc vd ON (vd.topic_id=t.topic_id) "
    ."LEFT JOIN ".$prefix."_bbposts_text pt ON (pt.post_id=t.topic_first_post_id) "
    ."WHERE ";

if($news_id == 0 & $id == 0 & $page == 1){
    $sql .= "t.news_id > 0 $topicpost ORDER BY `topic_time` DESC LIMIT $num";
} elseif($news_id == 0 & $id == 0 & $page != 1){
    $sql .= "t.news_id > 0 $topicpost ORDER BY `topic_time` DESC limit $offset, $num";
} elseif ($news_id == 0 & $id != 0){
    $sql .= "t.topic_id = ".$id." and t.news_id > 0 $topicpost ";
} elseif($news_id != 0 & $page != 1){
    $sql .= "t.news_id = ".$news_id." $topicpost ORDER BY `topic_time` DESC limit $offset, $num";
} else{
    $sql .= "t.news_id = ".$news_id." $topicpost ORDER BY `topic_time` DESC LIMIT $num";
}
        $result = $db->sql_query($sql);
        while($row = $db->sql_fetchrow($result)){
                $story_link = "<a href=\"modules.php?name=Forums&amp;file=viewtopic&amp;t=$row[topic_id]\">";
                $print= "<a href=\"modules.php?name=".$module_name."&amp;file=print&amp;id=$row[topic_id]\">"._FNA_PRINT."</a>";
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
                $aid = UsernameColor($row['username']);
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
                $trim_append_body = "...";
                $hometext = $row['post_text'];
                $bbcode_uid = $row['bbcode_uid'];
                $enable_smilies = $row['enable_smilies'];
                $title = '';
                if ($row['vote_id']!=''){
                $title .= ""._FNA_POLL.":&nbsp;";
                }
                $title .= stripslashes (smilies_pass ($row['topic_title']));
                $notes = "";
                $time = create_fnadate($fnalang['FORMAT'], $row['topic_time'], $tz);
                if($trim > 0 AND strlen(preg_replace('#(<)([\/]?.*?)(>)#is', "", preg_replace('#(\[)([\/]?.*?)(\])#is', "",$hometext))) > $trim & $id == 0){
                                $hometext = trimText($row['post_text'], $trim, $trimmed);
                                $hometext = parseMessage( $hometext, $bbcode_uid );
                        }elseif ( $id == 0 AND strpos( $hometext, htmlspecialchars( '<!--break-->' ) ) != false ){
                                $hometext = trimText2($row['post_text']);
                                $hometext = parseMessage( $hometext, $bbcode_uid );
                        }else{
                                $hometext = parseMessage( $row['post_text'], $bbcode_uid );
                        }
                       $readmore = "<a href=\"modules.php?name=".$module_name."&amp;id=".$row['topic_id']."\">"._FNA_READMORE."</a>";
                       $text2 = substr($hometext, -3);
                if($rss_on=='1'){
/*****[BEGIN]******************************************
 [ Mod:    RSS Improvements                    v2.0.0 ]
 ******************************************************/
                $rss = "| <a href=\"rss.php?feed=rssfna&amp;id=".$row['topic_id']."\"><img src=\"modules/".$module_name."/images/xml.gif\" border=\"0\" alt=\""._FNA_RSS."\" title=\""._FNA_RSS."\"></a>";
/*****[END]********************************************
 [ Mod:    RSS Improvements                    v2.0.0 ]
 ******************************************************/
                }else{
                $rss = "";
                }
                if($text2 == "..."){
                        $morelink = "( $story_link"._FNA_VIEWCOMMENTS."</a> | ".$row['topic_replies']." ) | ( $readmore ) | ( $print ) $rss";
                }
                else
                {
                        $morelink = "( $story_link"._FNA_VIEWCOMMENTS."</a> | ".$row['topic_replies']." ) | ( $print ) $rss";
                }
                $topiclink = "<a href=\"modules.php?name=".$module_name."&amp;news_id=".$row['news_id']."\">";
                themeindex($row['username'], $aid, $time, $title, $row['topic_views'], $title, $hometext, $notes, $morelink, $topic, $row['news_image'], $row['news_category'], $topiclink);
}
        pagination($total_pages, $news_id, $id, $page, $num, $tz);
}
include_once(NUKE_BASE_DIR.'footer.php');

?>