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
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

if (!defined('FANCYNL_FILE')) {
   die("Illegal File Access");
}

    function FancyNLArchive($fancynl_config, $archive, $for, $in, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid)
    {
        global $module_name;

        if(intval($archive)==0) return; // Archive disabled

        if(intval($archive)==1 || intval($archive)==3) // only in file or in db & file, STORE NOW IN FILE
        {
            $fichi = fopen("modules/".$module_name."/archives/".date(Ymd).".html", "a");
            fwrite($fichi,$msg_mail_arch."<br />");
            fclose($fichi);
        }
        if(intval($archive)==2 || intval($archive)==3) // only in db or in db & file, STORE NOW IN DB
        {
            global $db, $prefix;
            $msg_mail_arch=Fix_Quotes($msg_mail_arch);
            $thema=Fix_Quotes($thema);
            $inhalt=Fix_Quotes($inhalt);
            if ($fancynl_config['fancynl_bannersystem']==null || $fancynl_config['fancynl_bannersystem']=="") $bid=0;
            $result = $db->sql_query("INSERT INTO ".$prefix."_fancynl_archives (`aid`,`mode`,`extended`,`template`,`title`,`time`,`inhalt`,`hometext`,`bid`,`sent`) VALUES ('$sender', '$for', '$in', '".$template."','$thema', now(), '".$inhalt."', '".$msg_mail_arch."', '".$bid."', ".(($fancynl_config['fancynl_queued']!=null && intval($fancynl_config['fancynl_queued'])>0)?"'0000-00-00 00:00:00'":"now()").")");
        }
    }

    echo "<br /><vr>"._SENDINGMAILS."<br />";

    include ("modules/".$module_name."/templates/".$template.".php");
    global $adminmail,$sitename;

    $email_from_mail = "$adminmail";
    $email_from_name = "$sitename";
    $email_betreff = ""._NEWSLETTERFROM."";
    $xheaders  = "From:$email_from_name<$email_from_mail>\n";
    $xheaders .= "Reply-To: $email_from_mail\n";
    $xheaders .= "X-Mailer: PHP\n";
    $xheaders .= "X-Sender-IP: $REMOTE_ADDR\n";
    $xheaders .= "X-Priority: 6\n";
    $xheaders .= "Content-Type: text/html; charset=iso-8859-1\n";

    if ($nltr==1){ // Suscribed members
        global $user_prefix, $nukeurl;
        $result = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE newsletter='1'");
        $num = $db->sql_numrows($result);
        if ($num > 500) {
            echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br /><center><i>"._SENDOVER500MAILS."</i></center>";
        } else {echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br />";}
        while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($user_email) = $db->sql_fetchrow($result)) {
            evo_mail($user_email,"$email_betreff","$emailbody",$xheaders);
            echo ""._SENDTOUSER." $user_email<br />";
        }
        echo "<br /><br />"._MAILSENTLOOKPREVIEW."<br />";
        echo "<br /><strong>"._SENDBY." </strong>$sender <br />
        <strong>"._FROM." </strong>$email_betreff<br />";
        echo $emailbody;
        $msg_mail_arch = $emailbody;
        FancyNLArchive($fancynl_config, $archive, $nltr, 0, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
    }
    else {
        echo "<br /><hr><font color=red>"._WILLNOTBESENTTOSUSCRIBEDUSERS."</font><br />";
    }
    if ($nla==1) {
        if ($nltr==2){ // Send to "Pariba" suscribers
            global $user_prefix, $nukeurl;
            $result = $db->sql_query("SELECT email FROM ".$prefix."_newsletter WHERE status='2'");
            $num = $db->sql_numrows($result);
            if ($num > 500) {
                echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br /><center><i>"._SENDOVER500MAILS."</i></center>";
            } else {echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br />";}
            while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($email) = $db->sql_fetchrow($result)) {
                evo_mail($email,"$email_betreff","$emailbody",$xheaders);
                echo ""._SENDTOUSER." $email<br />";
            }
            echo "<br /><br />"._BARIBASSENTLOOKPREVIEW."<br />";
            echo "<br /><strong>"._SENDBY." </strong>$sender <br />
            <strong>"._FROM." </strong>$email_betreff<br />";
            echo $emailbody;
            $msg_mail_arch = $emailbody;
            FancyNLArchive($fancynl_config, $archive, $nltr, $nla, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
        } else {
            echo "<br /><hr><font color=red>"._NOTSENDTOSUSCRIBEDUSERS."</font><br />";
        }
    }
    if ($nla==2) {
        if ($nltr==2) { // Send to "La NewsLetter" suscribers
            global $user_prefix, $nukeurl;

            $num = $db->sql_numrows($result);
            if ($num > 500) {
                echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br /><center><i>"._SENDOVER500MAILS."</i></center>";
            } else {echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br />";}
            while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($mail_user) = $db->sql_fetchrow($result)) {
                evo_mail($mail_user,"$email_betreff","$emailbody",$xheaders);
                echo ""._SENTTO." $mail_user<br />";
            }
            echo "<br /><br />"._NEWSLETTERCORRECTLYSENT."<br />";
            echo "<br /><strong>"._SENDBY." </strong>$sender <br />
            <strong>"._FROM." </strong>$email_betreff<br />";
            echo $emailbody;
            $msg_mail_arch = $emailbody;
            FancyNLArchive($fancynl_config, $archive, $nltr, $nla, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
        } else {
            echo "<br /><hr><font color=red>"._NONEWSLETTERSENT."</font><br />";
        }
    }

    if ($nltr==3){ // Send to all users
        global $user_prefix, $nukeurl;
        $result = $db->sql_query("SELECT user_email FROM ".$user_prefix."_users WHERE user_email <> ''");
        $num = $db->sql_numrows($result);
        if ($num > 500) {
            echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br /><center><i>"._SENDOVER500MAILS."</i></center>";
        } else {echo "<br /><hr>"._TOTALMAILSENT." $num<br /><br />";}
        while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($user_email) = $db->sql_fetchrow($result)) {
            evo_mail($user_email,"$email_betreff","$emailbody",$xheaders);
            echo ""._SENTTO." $user_email<br />";
        }
        echo "<br /><br />"._NEWSLETTERCORRECTLYSENT."<br />";
        echo "<br /><strong>"._SENDBY." </strong>$sender <br /><strong>"._FROM." </strong>$email_betreff<br />";
        echo $emailbody;
        $msg_mail_arch = $emailbody;
        FancyNLArchive($fancynl_config, $archive, $nltr, 0, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
    } else {
        echo "<br /><hr><font color=red>"._NONEWSLETTERSENT."</font><br />";
    }

    if ($nltr==4){ // Send to the admin itself !
        global $user_prefix, $nukeurl, $adminmail;
        evo_mail($adminmail,"$email_betreff","$emailbody",$xheaders);
        echo ""._SENTTO." $user_email<br />";
        echo "<br /><br />"._NEWSLETTETESTDONE."<br />";
        echo "<br /><strong>"._SENDBY." </strong>$sender <br />
        <strong>"._FROM." </strong>$email_betreff<br />";
        echo $emailbody;
    } else {
        echo "<br /><hr><font color=red>"._NONEWSLETTERTESTSENT."</font><br />";
    }

    if ($nltr==5){ // Send to Groups members
        echo "<hr/>";
        global $user_prefix, $prefix, $db, $nukeurl;

        if ($gid != 0)
        {
            $result = $db->sql_query("SELECT user_id FROM ".$prefix."_bbuser_group WHERE group_id='$gid'");
        } else {
            $result_g = $db->sql_query("SELECT group_id FROM ".$prefix."_bbgroups WHERE group_description <> 'Personal User' ORDER BY group_name");
            while (list($gid) = $db->sql_fetchrow($result_g)) {
                $group .= "group_id='$gid' OR ";
            }
            $group = substr($group,0,strlen($group)-3);
            $sql = "SELECT user_id FROM ".$prefix."_bbuser_group WHERE ". $group;
            $result = $db->sql_query($sql);
        }

        if($result)
        {
            $alluserResult = $db->sql_query("SELECT user_id,user_email FROM ".$user_prefix."_users ORDER BY user_id");
            while (($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($user_id, $user_email) = $db->sql_fetchrow($alluserResult))
                $usertable[$user_id] = $user_email;

            while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($uid) = $db->sql_fetchrow($result)) {
                $user_email=$usertable[$uid];
                if($user_email)
                {
                    evo_mail($user_email,"$email_betreff","$emailbody",$xheaders);
                    echo ""._SENDTOUSER." ".$user_email."<br />";
                    $usertable[$uid]=null; // don't send many times to a user located in many groups
                }
            }
            if ($gid != 0) echo "<br /><br />"._NSNGRSENTLOOKPREVIEW1." $gname. "._NSNGRSENTLOOKPREVIEW1A."<br />";
            else echo "<br /><br />"._NSNGRSENTLOOKPREVIEW2."<br />";

            echo "<br /><strong>"._SENDBY." </strong>$sender <br /><strong>"._FROM." </strong>$email_betreff<br />";
            echo $emailbody;

            $msg_mail_arch = $emailbody;
            FancyNLArchive($fancynl_config, $archive, $nltr, $gid, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
            $db->sql_freeresult($result);
        }
        else echo "<br /><hr><font color=red>"._NSNGRNONEWSLETTERSENT."</font><br />";
    } else echo "<br /><hr><font color=red>"._NSNGRNONEWSLETTERSENT."</font><br />";

    if ($nltr==6){ // Send to NSN Groups ePetitions signers
        echo "<hr/>";
        global $user_prefix, $prefix, $db, $nukeurl;

        if ($ePetitionId != 0)
        {
            list($gname) = $db->sql_fetchrow($db->sql_query("SELECT name FROM ".$prefix."_nsngrept_petitions WHERE ePetitionId='$ePetitionId'"));
            $result = $db->sql_query("SELECT eMailAddress,userName FROM ".$prefix."_nsngrept_signers WHERE ePetitionId='$ePetitionId'");
        }
        else $result = $db->sql_query("SELECT eMailAddress,userName FROM ".$prefix."_nsngrept_signers");

        if($result)
        {
            $usertable=null;
            while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($email,$userName) = $db->sql_fetchrow($result))
            {
                if($usertable[$email] != 1) // 24/04/2005 : do not send twice to a signer of many petitions
                {
                    evo_mail($email,"$email_betreff","$emailbody",$xheaders);
                    echo ""._SENDTOUSER." $email<br />";
                    $usertable[$email] = 1; // flag this email as already done
                }
            }

            if ($ePetitionId != 0) echo "<br /><br />"._EPETITIONSENTLOOKPREVIEW1." $gname. "._EPETITIONSENTLOOKPREVIEW1A."<br />";
            else echo "<br /><br />"._EPETITIONSENTLOOKPREVIEW2."<br />";

            echo "<br /><strong>"._SENDBY." </strong>$sender <br /><strong>"._FROM." </strong>$email_betreff<br />";
            echo $emailbody;

            $msg_mail_arch = $emailbody;
            FancyNLArchive($fancynl_config, $archive, $nltr, $ePetitionId, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
        } else echo "<br /><hr><font color=red>"._EPETITIONNONEWSLETTERSENT."</font><br />";

    } else echo "<br /><hr><font color=red>"._EPETITIONNONEWSLETTERSENT."</font><br />";

    if ($nltr==7){ // Send to NSN Mailing List suscribers
        echo "<hr/>";
        global $user_prefix, $prefix, $db, $nukeurl;

        if ($lid != 0)
        {
            list($title) = $db->sql_fetchrow($db->sql_query("SELECT title FROM ".$prefix."_nsnml_lists WHERE lid='$lid'"));
            $result = $db->sql_query("SELECT email FROM ".$prefix."_nsnml_users WHERE active='1' AND lid='$lid'");
        }
        else $result = $db->sql_query("SELECT email FROM ".$prefix."_nsnml_users WHERE active='1'");

        if($result)
        {
            $usertable=null;
            while(($fancynl_config['fancynl_queued']==null || intval($fancynl_config['fancynl_queued'])==0) && list($email) = $db->sql_fetchrow($result))
            {
                if($usertable[$email] != 1) // 24/04/2005 : do not send twice to a signer of many petitions
                {
                    evo_mail($email,"$email_betreff","$emailbody",$xheaders);
                    echo ""._SENDTOUSER." $email<br />";
                    $usertable[$email] = 1; // flag this email as already done
                }
            }

            if ($lid != 0) echo "<br /><br />"._NSNMLSENTLOOKPREVIEW1." $title. "._NSNMLSENTLOOKPREVIEW1A."<br />";
            else echo "<br /><br />"._NSNMLSENTLOOKPREVIEW2."<br />";

            echo "<br /><strong>"._SENDBY." </strong>$sender <br /><strong>"._FROM." </strong>$email_betreff<br />";
            echo $emailbody;

            $msg_mail_arch = $emailbody;
            FancyNLArchive($fancynl_config, $archive, $nltr, $lid, $sender, $template, $thema, $inhalt, $msg_mail_arch, $bid);
        } else echo "<br /><hr><font color=red>"._NSNMLNONEWSLETTERSENT."</font><br />";

    } else echo "<br /><hr><font color=red>"._NSNMLNONEWSLETTERSENT."</font><br />";

?>