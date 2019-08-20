<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: ForumNews Article Feed 2.0
   ============================================
   Copyright (c) 2006 by The Nuke-Evolution Team

   Filename      : rssfna.php
   Author        : LombudXa (Rodmar) (www.evolved-Systems.net)
   Version       : 3.0.0
   Date          : 12/10/2006 (mm-dd-yyyy)

   Notes         : This will parse your ForumNews articles for RSS readers.
                   Some code has been used from RSS 2.0 backend.php
                   (http://www.truden.com)
************************************************************************/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*************************************************************************/

/*****[CHANGES]**********************************************************
-=[Mods]=-
      RSS Improvements                         v3.0.0       12/07/2006
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$sitename = entity_to_hex_value($sitename);
$nukeurl = htmlspecialchars($nukeurl);
$backend_title = entity_to_hex_value($backend_title);

$gmtdiff = date("O", time());
$gmtstr = substr($gmtdiff, 0, 3) . ":" . substr($gmtdiff, 3, 9);
// Format: 2004-08-02T12:15:23-06:00 (W3C Compliant)
$now = date("Y-m-d\TH:i:s", time());
$now = $now . $gmtstr;

$numbersql = $db->sql_query("SELECT SQL_CACHE rss FROM ".$prefix."_fna_config");
list($rss_on) = $db->sql_fetchrow($numbersql);
if($rss_on=='1') {
    $id = isset($HTTP_GET_VARS['id']) ? intval($HTTP_GET_VARS['id']) : 0;
    $post = $db->sql_query("SELECT post_id FROM ".$prefix."_bbapprove_posts");
    $post2 = $db->sql_numrows($post);
    if($post2 == "0") {
        $topicpost = "";
    } elseif($post2 > "0") {
        $topicpost = "";
        while(list($post_id) = $db->sql_fetchrow($post)) {
            $topicpost .= " AND topic_first_post_id <> $post_id";
        }
    }
    if($id != 0) {
    $result = $db->sql_query("SELECT topic_id, topic_title, topic_first_post_id FROM ".$prefix."_bbtopics WHERE topic_id = ".$id." AND news_id > 0 ".$topicpost);
    } else {
    $num = (isset($num) && is_integer(intval($num)) && intval($num) > 0) ? 'LIMIT '.$num : 'LIMIT 10';
    $result = $db->sql_query("SELECT topic_id, topic_title, topic_first_post_id FROM ".$prefix."_bbtopics WHERE news_id > 0 $topicpost ORDER BY topic_time DESC ".$num);
    }
    header("Content-Type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
    echo "<?xml-stylesheet title=\"XSL_formatting\" type=\"text/xsl\" href=\"includes/rss/rss_20.xsl\" ?>\n\n";
    echo "<rss version=\"2.0\" \n";
    echo " xmlns:dc=\"http://purl.org/dc/elements/1.1/\"\n";
    echo " xmlns:sy=\"http://purl.org/rss/1.0/modules/syndication/\"\n";
    echo " xmlns:admin=\"http://webns.net/mvcb/\"\n";
    echo " xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">\n\n";
    echo "<channel>\n";
    echo "<title>".$sitename."</title>\n";
    echo "<link>".$nukeurl."</link>\n";
    echo "<description>".$slogan."</description>\n";
    echo "<copyright>".$sitename."</copyright>\n";
    echo "<generator>".$sitename." Evo RSS Parser</generator>\n";
    echo "<ttl>60</ttl>\n\n";
    echo "<image>\n";
    echo "<title>".$sitename."</title>\n";
    echo "<url>".$nukeurl."/images/evo/minilogo.gif</url>\n";
    echo "<link>".$nukeurl."</link>\n";
    echo "<width>94</width>\n";
    echo "<height>15</height>\n";
    echo "<description>".$backend_title."</description>\n";
    echo "</image>\n";
    echo "<dc:language>".$backend_language."</dc:language>\n";
    echo "<dc:creator>".$adminmail."</dc:creator>\n";
    echo "<dc:date>".$now."</dc:date>\n\n";
    echo "<sy:updatePeriod>hourly</sy:updatePeriod>\n";
    echo "<sy:updateFrequency>1</sy:updateFrequency>\n";
    echo "<sy:updateBase>".$now."</sy:updateBase>\n\n";
    while(list($topic_id, $topic_title, $topic_first_post_id) = $db->sql_fetchrow($result)) {
        $topic_title = entity_to_hex_value($topic_title);
        $result2 = $db->sql_query("SELECT post_text FROM ".$prefix."_bbposts_text WHERE post_id='$topic_first_post_id'");
        list($desc) = $db->sql_fetchrow($result2);
        $desc = entity_to_hex_value($desc);
        //$desc = ereg_replace('\x99', '', $desc); // Needs improvement
        $desc = decode_bb_all($desc);
        $desc = decode_rss_rest($desc);
        $result3 = $db->sql_query("SELECT post_time AS post_time FROM ".$prefix."_bbposts WHERE post_id='$topic_first_post_id'");
        list($post_time) = $db->sql_fetchrow($result3);

        // Format: 2004-08-02T12:15:23-06:00 (W3C Compliant)
        //$date = date("Y-m-d\TH:i:s", strtotime($post_time));
        $date = date('Y-m-d\TH:i:s', $post_time);
        $date = $date . $gmtstr;

        echo "<item>\n";
        echo "<title>".$topic_title."</title>\n";
        echo "<link>".$nukeurl."/modules.php?name=ForumNews&amp;id=".$topic_id."</link>\n";
        echo "<description><![CDATA[".$desc."]]></description>\n";
        echo "<guid isPermaLink=\"false\">".$topic_first_post_id."@".$nukeurl."</guid>\n";
        echo "<dc:subject>".$title."</dc:subject>\n";
        echo "<dc:date>".$date."</dc:date>\n";
        //echo "<dc:creator>Posted by ".$submitter."</dc:creator>\n";
        echo "</item>\n\n";
    }
    echo "</channel>\n\n";
    echo "</rss>\n";
} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<br /><strong>The RSS Feed has been turned off by the webmaster!<br /><br />SORRY!</strong>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>