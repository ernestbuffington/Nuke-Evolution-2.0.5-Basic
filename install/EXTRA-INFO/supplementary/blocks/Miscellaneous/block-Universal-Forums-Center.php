<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team - Nuke-Evolution.com

   Filename      : block-Universal-Forums-Center.php
   Author        : mikem http://www.nukecops.com
   Version       : 2.4.0
   Date          : 05/24/2005 (mm-dd-yyyy)

   Description   : Universal Forums Center Block will show your recent
                   topics with links to the specific forum, first post in
                   topic, latest post in topic and the author. It also
                   shows how many views and replies the specific topic got.
                   This block will match with all your themes you provide
                   on your Nuke-Evolution driven web site.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

global $prefix, $db, $sitename, $admin, $ThemeSel, $currentlang, $board_config, $user_prefix;

get_lang('blocks');
$HideViewReadOnly = 1;

$Last_New_Topics  = 5;
$show = "  <tr>
             <td height=\"28\" colspan=\"6\" align=\"right\" class=\"catbottom\">[ <a href=\"modules.php?name=Forums&amp;file=recent\">"._UNIRECENT."</a> ]&nbsp;</td>
           </tr>
         </table></td>
         </tr>
       </table></td>
       </tr>
     </table>";

$Count_Topics = 0;
$Topic_Buffer = "";
$result = $db->sql_query( "SELECT t.topic_id, f.forum_name, f.forum_id, t.topic_last_post_id, t.topic_first_post_id, t.topic_title, t.topic_poster, t.topic_views, t.topic_replies, t.topic_moved_id FROM ".$prefix."_bbtopics t, ".$prefix."_bbforums f WHERE t.forum_id=f.forum_id ORDER BY topic_last_post_id DESC");
while ( list( $topic_id, $forum_name, $forum_id, $topic_last_post_id, $topic_first_post_id, $topic_title, $topic_poster, $topic_views, $topic_replies, $topic_moved_id ) = $db->sql_fetchrow( $result) )

{
   $skip_display = 0;
   if ( $HideViewReadOnly == 1 )
   {
      $result1 = $db->sql_query( "SELECT auth_view, auth_read FROM ".$prefix."_bbforums WHERE forum_id = '$forum_id'");
      list( $auth_view, $auth_read ) = $db->sql_fetchrow($result1);
      if ( ( $auth_view != 0 ) or ( $auth_read != 0 ) ) {
          $skip_display = 1;
      }
   }

   if ( $topic_moved_id != 0 )
   {
      // Shadow Topic !!
      $skip_display = 1;
   }

   if ( $skip_display == 0 ) {
      $Count_Topics += 1;

      $result2 = $db->sql_query("SELECT username, user_id FROM ".$user_prefix."_users WHERE user_id='$topic_poster'");
      list($username, $user_id) = $db->sql_fetchrow($result2);
      $username = UsernameColor($username);
      $avtor = $username;
      $sifra = $user_id;

      $result3 = $db->sql_query("SELECT poster_id, post_time FROM ".$prefix."_bbposts WHERE post_id='$topic_last_post_id'");
      list($poster_id, $post_time) = $db->sql_fetchrow($result3);
      $post_time = EvoDate( $board_config['default_dateformat'] , $post_time , $board_config['board_timezone'] );

      $result4 = $db->sql_query("SELECT username, user_id FROM ".$user_prefix."_users WHERE user_id='$poster_id'");
      list($username, $user_id) = $db->sql_fetchrow($result4);
      $username = UsernameColor($username);

      $viewlast .="<tr>
                     <td height=\"34\" nowrap class=\"row1\"><img src=\"themes/$ThemeSel/forums/images/folder_new.gif\" alt=\"New Topic\" border=\"0\" /></td>
                     <td width=\"100%\" class=\"row1\">&nbsp;<a href=\"modules.php?name=Forums&amp;file=viewforum&amp;f=$forum_id\"><strong>$forum_name</strong></a><br />&nbsp;&nbsp;<a href=\"modules.php?name=Forums&file=viewtopic&p=$topic_first_post_id#$topic_first_post_id\">$topic_title</a></td>
                     <td align=\"center\" class=\"row2\">$topic_replies</td>
                     <td align=\"center\" class=\"row3\"><a href=\"modules.php?name=Forums&amp;file=profile&amp;mode=viewprofile&amp;u=$sifra\">$avtor</a></td>
                     <td align=\"center\" class=\"row2\">$topic_views</td>
                     <td align=\"center\" nowrap class=\"row3\"><font size=\"-2\"><i>&nbsp;&nbsp;$post_time&nbsp;</i></font><br />
                     <a href=\"modules.php?name=Forums&amp;file=profile&amp;mode=viewprofile&amp;u=$user_id\">$username</a>&nbsp;<a href=\"modules.php?name=Forums&amp;file=viewtopic&amp;p=$topic_last_post_id#$topic_last_post_id\"><img src=\"themes/$ThemeSel/forums/images/icon_newest_reply.gif\" alt=\"New Post\" border=\"0\"></a></td>
                   </tr>";
      }

      if ( $Last_New_Topics == $Count_Topics ) {
          break 1;
      }

   }

$content .= "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\">
               <tr>
                 <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                   <tr>
                     <td><table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">
                       <tr>
                         <th height=\"25\" colspan=\"2\" align=\"center\" nowrap class=\"thcornerl\"><span class=\"block-title\"><strong>"._UNIFORUM."</strong></span></th>
                         <th width=\"50\" align=\"center\" nowrap class=\"thtop\"><span class=\"block-title\"><strong>&nbsp;"._UNIREPLIES."&nbsp;</strong></span></th>
                         <th width=\"100\" align=\"center\" nowrap class=\"thtop\"><span class=\"block-title\"><strong>&nbsp;"._UNIAUTHOR."&nbsp;</strong></span></th>
                         <th width=\"50\" align=\"center\" nowrap class=\"thtop\"><span class=\"block-title\"><strong>&nbsp;"._UNIVIEWS."&nbsp;</strong></span></th>
                         <th align=\"center\" nowrap class=\"thcornerr\"><span class=\"block-title\"><strong>&nbsp;"._UNILASTPOST."&nbsp;</strong></span></th>
                       </tr>";
$content .= "$viewlast";

$content .= "$show";

?>