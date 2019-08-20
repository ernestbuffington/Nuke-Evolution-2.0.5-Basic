<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

    /********************************************************/
    /* Fancy NewsLetter Installation                        */
    /* By: Louis Lecaroz (louis.lecaroz@le-resistant.com)   */
    /* http://www.le-resistant.com                          */
    /* Under GNU/GPL License                                */
    /********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
-=[Mod]=-
      Optout                                   v1.0.0       08/05/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

if (!defined('FANCYNL_FILE')) {
   die("Illegal File Access");
}
    global $prefix, $db, $user_prefix;

    /* Total Members */
    $totmemb = $db->sql_numrows($db->sql_query("SELECT user_id FROM ".$user_prefix."_users"));

    /* Total Hits */
    $result = $db->sql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
    $row = $db->sql_fetchrow($result);
    $count_holder = sprintf ("%06d", $row['count']);
    $db->sql_freeresult ($result);
    $tothits = $count_holder;

    // Total News Topics
    if ($news=="1") {
        $result  = $db->sql_query("SELECT * FROM ".$prefix."_stories");
        $totnews = $db->sql_numrows($result);
    }

    // Total Downloads Files
    if ($dowl=="1") {
        $result = $db->sql_query("SELECT * FROM ".$fulldl);
        $totfiles = $db->sql_numrows($result);
        // Total Downloads Categories
        $result = $db->sql_query("SELECT * FROM ".$fulldl);
        $totdlcat = $db->sql_numrows($result);
    }

    // Total Web Links
    if ($webl=="1") {
        $result = $db->sql_query("SELECT * FROM ".$prefix."_links_links");
        $totwl = $db->sql_numrows($result);
    }

    /* Total Amount of Forum Topics */
    if ($foru=="1") {
        $result = $db->sql_query( "SELECT * FROM ".$prefix."_bbtopics" );
        $tottopic = $db->sql_numrows( $result );
        /* Total Amount of forum Posts */
        $result = $db->sql_query( "SELECT * FROM ".$prefix."_bbposts" );
        $totposts = $db->sql_numrows( $result );
    }

    if ($stats=="off") {
        $totstats .= "<hr noshade size=1><br /><table width=\"95%\" align=\"center\"><tr height=\"20\"><td colspan=\"2\" width=\"100%\" bgcolor=\"#808080\"><IMG src='$nukeurl/modules/".$module_name."/images/poll.gif' border=0 valign='middle' alt=''>&nbsp;<strong><font size='2' color='#FFFFFF'>"._SOMESTATS.".</font></td></tr>";
        $totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALVIEWPAGES."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$tothits</font>&nbsp;</td></tr>";
        $totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALMEMBERS."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$totmemb</font>&nbsp;</td></tr>";
        if ($news==1) {$totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALARTICLES."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$totnews</font>&nbsp;</td></tr>";}
        if ($dowl==1) {$totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALDOWNLOADS."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$totfiles</font>&nbsp;</td></tr>";}
        if ($webl==1) {$totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALWEBLINKS."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$totwl</font>&nbsp;</td></tr>";}
        if ($foru==1) {$totstats .= "<tr bgcolor=#F3F3F3><td width=\"90%\">&nbsp;<IMG src='$nukeurl/modules/".$module_name."/images/stats.gif' border=0 valign='middle' alt=''>&nbsp;<font size='2' color='#000000'>"._TOTALPOSTS."</font></td><td width=\"10%\" align=right><font size='2' color='#000000'>$totposts</font>&nbsp;</td></tr>";}
        $totstats .= "</table><br />";
    } else{$totstats .= "";}

    if($action!="edit")
    {
        $inhalt    = stripslashes($inhalt);
        $inhalt    = ereg_replace('\"','"', $inhalt);
        $thema     = stripslashes($thema);
        $thema     = ereg_replace('\"','"', $thema);
    }
    $newsbody  = stripslashes($newsbody);
    $wlbody    = stripslashes($wlbody);
    $downbody  = stripslashes($downbody);
    $forumbody = stripslashes($forumbody);
    $totstats  = stripslashes($totstats);

    /******************************************************************************
    This adds a Banner Link
    *******************************************************************************/
    require_once('modules/'.$module_name.'/admin/includes/Modules/Banners.php');

    global $admin, $module_name, $prefix, $adminmail, $nukeurl, $user_prefix;
    $banr = "";
    if ($bid!=null && $fancynl_config['fancynl_bannersystem']!=null && $fancynl_config['fancynl_bannersystem']!="" && !is_dir('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']) && file_exists('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']))
    {
        require_once('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']);
        $cname = substr($fancynl_config['fancynl_bannersystem'],0,-4);
        $cname2 = 'fnl'.$cname;
        ${$cname} = new $cname2();
        if (${$cname}->useme())
        {
            $results=${$cname}->doquery($bid);
            $result=${$cname}->getresult($results);
            if($result)
            {
                $banr = "<br />"._VISITSPONSORS."<br />";
                $href = ${$cname}->formatclickurl($result);
                if($href!=null)    $banr.="<a href=\"".$href."\" target=\"_blank\">";

                if(null==($result=${$cname}->formatresult($result))) $banr = $null;
                else $banr .= $result;

                if($href!=null && $banr!=null) $banr.="</a>";

                if($banr!=null) $banr.="<br />";
            }
        }
    }
    if($fancynl_config['fancynl_ads'] != 0) {
        $banr = ads($fancynl_config['fancynl_ads']);
    }
    //End banner

    /*********************
    This adds x news items
    *********************/
    if ($news == 1){
        if ($T1 > 0) {
            global $format_mail, $nukeurl;

            $text=sprintf(_LASTARTICLES,$T1);
            $newsbody .= "<hr noshade size=1><br /><table width=\"95%\" align=\"center\"><tr><td colspan=\"6\" width=\"100%\" height=\"20\" bgcolor=\"#808080\"><IMG src='$nukeurl/modules/".$module_name."/images/news.gif' border=0 valign='middle' alt=''>&nbsp;<a href=\"".$nukeurl."/modules.php?name=News\" title=\""._LASTARTICLESTITLE."\"><strong><font size='3' color='#FFFFFF'>$text</font></strong></a></td></tr></table>\n";
            $querytxt = "SELECT sid, catid, aid, title, topic, hometext FROM ".$prefix."_stories ORDER BY time DESC LIMIT 0, $T1";
            $result2 = $db->sql_query($querytxt);
            $numnews = $db->sql_numrows($result2);
            for($i = 0; $i < $numnews; $i++) {
                list($nsid, $catid, $naid, $ntitle, $ntopic, $nhometext) = $db->sql_fetchrow($result2);
                $result3 = $db->sql_query("SELECT topictext FROM ".$prefix."_topics WHERE topicid='$ntopic'");
                list($ntopictext) = $db->sql_fetchrow($result3);
                $c=$i+1;
                $newsbody .= "<table width=\"95%\" align=\"center\"><tr><td colspan=\"6\" width=\"100%\" bgcolor='#F3F3F3'>&nbsp;<font size='3' color='#000000'>$c - </font><a href=\"" . $nukeurl . "/modules.php?name=News&amp;file=article&amp;sid=" . $nsid . "&amp;mode=&amp;order=0&amp;thold=0\" style=\"text-decoration: none; color: black; font-size: 10px\">" . $ntitle . "</a></td></tr></table>\n";
            }
            $newsbody .= "<br />";
        }
    }
    //End news items

    /**************************
    This adds x downloads items
    **************************/
    if ($dowl == 1){
        if ($T2 > 0) {
            global $format_mail, $nukeurl;

            $text=sprintf(_LASTDOWWNLOADS,$T2);
            $downbody .= "<hr noshade size=1><br /><table width=\"95%\" align=\"center\"><tr><td colspan=\"6\" width=\"100%\" height=\"20\" bgcolor=\"#808080\"><IMG src='$nukeurl/modules/".$module_name."/images/downloads.gif' border=0 valign='middle' alt=''>&nbsp;<a href=\"".$nukeurl."/modules.php?name=Downloads\" title=\""._LASTDOWWNLOADSTITLE."\"><strong><font size='3' color='#FFFFFF'>$text</font></strong></a></td></tr></table>\n";
            $downbody .= "<table width=\"95%\" align=\"center\"><tr bgcolor=\"#ABABAB\"><td colspan=\"5\" width=\"100%\">&nbsp;<font size='2' color='#ffffff'><strong>"._TITLE."</strong></font></td><td width=\"30\" align='right' nowrap><font size='2' color='#FFFFFF'><strong>"._HITS."</strong></font></td></tr></table>\n";
            $querydown = "SELECT lid, cid, sid, title, description, date, hits FROM ".$fulldl." ORDER BY lid DESC LIMIT 0, $T2";
            $result3 = $db->sql_query($querydown);
            $numdown = $db->sql_numrows($result3);
            for($i = 0; $i < $numdown; $i++){
                list($lid, $cid, $sid, $title, $description, $time, $hits)=$db->sql_fetchrow($result3);
                $d=$i+1;
                $downbody .= "<table width=\"95%\" align=\"center\"><tr bgcolor='#F3F3F3'><td colspan=\"5\" width=\"100%\">&nbsp;<font size='3' color='#000000'>$d - </font><a href=\"".$nukeurl."/modules.php?name=Downloads&amp;d_op=getit&amp;lid=".$lid."\" style=\"text-decoration: none; color: black; font-size: 10px\">".$title."</a></td><td width=\"30\" align='right' nowrap><font size='3' color='#000000'>".$hits."</font></tr></table>\n";
            }
            $downbody .= "<br />";
        }
    }
    // End downloads items

    /**************************
    This adds x Web Links
    **************************/
    if ($webl == 1){
        if ($T3 > 0) {
            global $format_mail, $nukeurl;

            $text=sprintf(_LASTWEBLINKS,$T3);
            $wlbody .= "<hr noshade size=1><br /><table width=\"95%\" align=\"center\"><tr><td colspan=\"6\" width=\"100%\" height=\"20\" bgcolor=\"#808080\"><IMG src='$nukeurl/modules/".$module_name."/images/wl.gif' border=0 valign='middle' alt=''>&nbsp;<a href=\"".$nukeurl."/modules.php?name=Web_Links\" title=\""._LASTWEBLINKSTITLE."\"><strong><font size='3' color='#FFFFFF'>$text</font></strong></a></td></tr></table>\n";
            $wlbody .= "<table width=\"95%\" align=\"center\"><tr bgcolor=\"#ABABAB\"><td colspan=\"5\" width=\"100%\">&nbsp;<font size='2' color='#ffffff'><strong>"._TITLE."</strong></font></td><td width=\"30\" align='right' nowrap><font size='2' color='#FFFFFF'><strong>"._HITS."</strong></font></td></tr></table>\n";
            $querywl = "SELECT lid, cid, sid, title, description, date, hits FROM ".$prefix."_links_links ORDER BY lid DESC LIMIT 0, $T3";
            $result4 = $db->sql_query($querywl);
            $numwl = $db->sql_numrows($result4);
            for($i = 0; $i < $numwl; $i++){
                list($lid, $cid, $sid, $title, $description, $time, $hits)=$db->sql_fetchrow($result4);
                $e=$i+1;
                $wlbody .= "<table width=\"95%\" align=\"center\"><tr bgcolor='#F3F3F3'><td colspan=\"5\" width=\"100%\">&nbsp;<font size='3' color='#000000'>$e - </font><a title=\"$description\" href=\"".$nukeurl."/modules.php?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=".$lid."&amp;ttitle=".$title."\" style=\"text-decoration: none; color: black; font-size: 10px\">".$title."</a></td><td width=\"30\" align='right' nowrap><font size='3' color='#000000'>".$hits."</font></tr></table>\n";
            }
            $wlbody .= "<br />";
        }
    }
    // End Web Links

    /***************************
    This adds x Forum entries  *
    ***************************/
    if ($foru == 1){
        if ($T4 > 0) {
            global $prefix, $sitename, $user_prefix, $db, $admin;
            $HideViewReadOnly = 1;
            $result = $db->sql_query( "SELECT * FROM ".$prefix."_bbtopics" );
            $Amount_Of_Topics = $db->sql_numrows( $result );
            $result = $db->sql_query( "SELECT * FROM ".$prefix."_bbposts" );
            $Amount_Of_Posts = $db->sql_numrows( $result );
            $Amount_Of_Topic_Views = 0;

            $result = $db->sql_query( "SELECT topic_views FROM ".$prefix."_bbtopics" );
            while( list( $topic_views ) = $db->sql_fetchrow( $result ) )
            {
                $Amount_Of_Topic_Views = $Amount_Of_Topic_Views + $topic_views;
            }

            $Amount_Of_Topic_Replies = 0;
            $result = $db->sql_query( "SELECT topic_replies FROM ".$prefix."_bbtopics" );
            while( list( $topic_replies ) = $db->sql_fetchrow( $result ) )
            {
                $Amount_Of_Topic_Replies = $Amount_Of_Topic_Replies + $topic_replies;
            }

            $Count_Topics = 0;
            $Topic_Buffer = "";
            $result = $db->sql_query( "SELECT topic_id, forum_id, topic_last_post_id, topic_title, topic_poster, topic_views, topic_replies, topic_moved_id FROM ".$prefix."_bbtopics ORDER BY topic_last_post_id DESC" );
            while( list( $topic_id, $forum_id, $topic_last_post_id, $topic_title, $topic_poster, $topic_views, $topic_replies, $topic_moved_id ) = $db->sql_fetchrow( $result ) )
            {
                $skip_display = 0;

                if( $HideViewReadOnly == 1 )
                {
                    $result1 = $db->sql_query( "SELECT auth_view, auth_read FROM ".$prefix."_bbforums WHERE forum_id = '$forum_id'" );
                    list( $auth_view, $auth_read ) = $db->sql_fetchrow( $result1 );
                    if( ( $auth_view != 0 ) or ( $auth_read != 0 ) ) { $skip_display = 1; }
                }
                if( $topic_moved_id != 0 )
                {
                    $skip_display = 1;
                }
                if( $skip_display == 0 )
                {
                    $Count_Topics += 1;
                    $result2 = $db->sql_query("SELECT username, user_id FROM ".$user_prefix."_users WHERE user_id='$topic_poster'");
                    list($username, $user_id)=$db->sql_fetchrow($result2);
                    $avtor=$username;
                    $sifra=$user_id;
                    $result3 = $db->sql_query("SELECT poster_id, FROM_UNIXTIME(post_time,'%d/%m/%Y %H:%i') as post_time FROM ".$prefix."_bbposts WHERE post_id='$topic_last_post_id'");
                    list($poster_id, $post_time)=$db->sql_fetchrow($result3);
                    $result4 = $db->sql_query("SELECT username, user_id FROM ".$user_prefix."_users WHERE user_id='$poster_id'");
                    list($username, $user_id)=$db->sql_fetchrow($result4);
                    global $ThemeSel;
                    $viewlast .="<tr>
                    <td height=\"10\" nowrap bgcolor=\"#DDDDDD\"><IMG src='$nukeurl/modules/".$module_name."/images/forum.gif' border=0 valign='middle' alt=''></td>
                    <td width=\"100%\" bgcolor=\"#F3F3F3\"><a href=\"".$nukeurl."/modules.php?name=Forums&amp;file=viewtopic&amp;t=$topic_id#$topic_last_post_id\"><font size=1 color=#000000>$topic_title</font></a></td>
                    <td height=\"10\" align=\"center\" bgcolor=\"#DDDDDD\"><font size=1 color=#000000>$topic_replies</font></td>
                    <td align=\"center\" bgcolor=\"#F3F3F3\"><a href=\"".$nukeurl."/modules.php?name=Forums&amp;file=profile&amp;mode=viewprofile&amp;u=$sifra\"><font size=1 color=#000000>$avtor</font></a></td>
                    <td height=\"10\" align=\"center\" bgcolor=\"#DDDDDD\"><font size=1 color=#000000>$topic_views</font></td>
                    <td align=\"right\" nowrap bgcolor=\"#F3F3F3\"><font size=1 color=#000000><i>&nbsp;&nbsp;$post_time&nbsp;</i></font><br />
                    <a href=\"".$nukeurl."/modules.php?name=Forums&amp;file=profile&amp;mode=viewprofile&amp;u=$user_id\"><font size=1 color=#000000>$username</font></a>&nbsp;<a href=\"".$nukeurl."/modules.php?name=Forums&amp;file=viewtopic&amp;p=$topic_last_post_id#$topic_last_post_id\"><img src=\"$nukeurl/modules/".$module_name."/images/filr.gif\" border=\"0\" alt=''></a>&nbsp;</td>
                    </tr>";
                }
                if( $T4 == $Count_Topics ) { break 1; }
            }
            $text=sprintf(_LASTFORUMPOSTS,$T4);
            $forumbody .= "<hr noshade size=1><br /><table width=\"95%\" border=\"0\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\"><tr><td colspan=\"6\" width=\"100%\" height=\"20\" bgcolor=\"#808080\"><IMG src='$nukeurl/modules/".$module_name."/images/forums.gif' border=0 valign='middle' alt=''>&nbsp;<a href=\"".$nukeurl."/modules.php?op=modload&amp;name=Forums\" title=\""._LASTFORUMPOSTSTITLE."\"><strong><font size='3' color='#FFFFFF'>".$text."</font></strong></a></td></tr>";
            $forumbody .= "<tr bgcolor=\"#ABABAB\">
            <td width=\"10\"></td>
            <td width=\"100%\"><font size='2' color='#ffffff'><strong>"._SUBJECT."</strong></font></td>
            <td width=\"10\" align='center' nowrap><font size='2' color='#FFFFFF'><strong>"._ANSWERS."</strong></font></td>
            <td align='center' nowrap><font size='2' color='#FFFFFF'><strong>"._AUTHOR."</strong></font></td>
            <td width=\"10\" align='center' nowrap><font size='2' color='#FFFFFF'><strong>"._SEEN."</strong></font></td>
            <td align='center' nowrap><font size='2' color='#FFFFFF'><strong>"._LASTPOST."</strong></font></td>
            </tr>";
            $forumbody .= "$viewlast";
            $forumbody .= "</table><br />";
        }
    }
    // End x Forum entries
    /**************************
    * set unsubsribe message  *
    **************************/
/*****[BEGIN]******************************************
 [ Mod:     Optout                             v1.0.0 ]
 ******************************************************/
    $unsub = "<hr><small>"._OPTOUT_EMAIL."<a target=\"_blank\" href=\"$nukeurl/modules.php?name=Fancy_NewsLetter&amp;file=optout\">"._OPTOUT_EMAIL2."</a></small>";
/*****[END]********************************************
 [ Mod:     Optout                             v1.0.0 ]
 ******************************************************/
    /*if ($nltr==1) {$unsub = "<hr><small>"._UNSUSCRIBE1."<a target=\"_blank\" href=\"$nukeurl/modules.php?name=Your_Account&amp;op=edituser\">
        "._UNSUSCRIBE2."</a>, "._UNSUSCRIBE3.".</small>";
        $SEL1 = "checked";
    } else if ($nltr==2) {$unsub = "<hr><small>"._UNSUSCRIBE4."<a target=\"_blank\" href=\"$nukeurl/modules.php?op=modload&amp;name=Newsletter\">
        "._UNSUSCRIBE5."</a>, "._UNSUSCRIBE3.".</small>";
        $SEL2 = "checked";
    } else if ($nltr==3) {$unsub = "<hr><small>"._UNSUSCRIBE6." <a href=\"mailto:$adminmail?subject=Newsletter\">"._UNSUSCRIBE5."</a></small>.";
        $SEL3 = "checked";
    } else if ($nltr==4) {$unsub = "Test nl";
        $SEL4 = "checked";
    } else if ($nltr==5) {$unsub = "<hr><small>"._UNSUSCRIBE7." <a href=\"mailto:$adminmail?subject=Newsletter\">"._UNSUSCRIBE5."</a></small>.";
        $SEL5 = "checked";
    } else if ($nltr==6) {$unsub = "<hr><small>"._UNSUSCRIBE8." <a href=\"mailto:$adminmail?subject=Newsletter\">"._UNSUSCRIBE5."</a></small>.";
        $SEL6 = "checked";
    } else if ($nltr==7) {$unsub = "<hr><small>"._UNSUSCRIBE9."<a target=\"_blank\" href=\"$nukeurl/modules.php?name=Mailing_List\">
        "._UNSUSCRIBE5."</a>, "._UNSUSCRIBE3.".</small>";
        $SEL7 = "checked";
    } else {$unsub = "<hr><small>"._UNSUSCRIBE7." <a href=\"mailto:$adminmail?subject=Newsletter\">"._UNSUSCRIBE5."</a></small>.";}*/
    $unsub     = stripslashes($unsub);
    // end unsubsribe message

?>