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
      Custom Text Area                         v1.0.0       11/23/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

if (!defined('FANCYNL_FILE')) {
   die("Illegal File Access");
}

    function FancyNLGetUsername()
    {
        global $user,$cookie,$anonymous;
        if (is_user()) {
            $cookie = cookiedecode();
            $name = $cookie[1];
        } else {
            $name = "$anonymous";
        }
        return $name;
    }

    Function FancyNLTextForForm($texte)
    {
        //////////////////////////////­//////////////////////////////­///////////////
        $texte=stripslashes($texte);
        $texte=ereg_replace(CHR(38),"&#38;",$texte); // Must be in first position
        $texte=ereg_replace(CHR(34),"&#34;",$texte);
        $texte=ereg_replace(CHR(39),"&#39;",$texte);
        $texte=ereg_replace(CHR(60),"&#60;",$texte);
        $texte=ereg_replace(CHR(62),"&#62;",$texte);
        return $texte;
    }

    global $admin_file;
    $current_admin_file=$admin_file;
    if($current_admin_file==null || $current_admin_file=="") $current_admin_file="admin";
    
    $email_to = "$name <$email>";
    $email_from_mail = "$admin_email";
    $email_from_name = "$sitename";
    $email_betreff = ""._NEWSLETTERFROM."";
    if($fancynl_config['fancynl_ads'] != 0) {
        $banr = ads($fancynl_config['fancynl_ads']);
    }
    if (empty($template)){} else {include ("modules/".$module_name."/templates/".$template.".php");}
    echo $emailbody;
    $aktuellesdatum = date("d M Y");

    if($sender=="") $sender=FancyNLGetUsername();
    if($thema!="") $thema=FancyNLTextForForm($thema);

    echo"<form action=\"".$current_admin_file.".php?op=fancy-nl\" method=\"post\" name=\"fancynl\">
    <strong>"._NEWSLETTERTEXT."</strong><br />";
    define('FORCE_FCK',true);
/*****[BEGIN]******************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
    Make_TextArea('inhalt', $inhalt, 'fancynl');
    //<textarea rows=\"20\" cols=\"75\" name=\"inhalt\">$inhalt</textarea>
/*****[END]********************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
    echo "<br /><i>"._NEWSLETTERHTMLTAGS."</i><br /><br />
         <strong>"._NEWSLETTERSUBJECT."</strong> <br /><input value=\"$thema\" type=\"text\" name=\"thema\"><br /><br />
    <strong>"._NEWSLETTERSENDER."</strong> <br /><input value=\"$sender\" type=\"text\" name=\"sender\"><br /><br /><br />";

    if($stats=="off") $DEF="checked";
    echo "<input type=\"checkbox\" name=\"stats\" value=\"off\" $DEF>&nbsp;<strong>"._INCLUDESTATS."</strong><br /><br />";
    if ($news == 1){
        if (empty($T1)) {$T1 = 0;}
        echo "<input type=\"text\" name=\"T1\" size=\"1\" maxlength=\"2\" value='$T1'>&nbsp;<strong>"._NEWARTICLES."</strong><br />";
    }
    if ($dowl == 1){
        if (empty($T2)) {$T2 = 0;}
        echo "<input type=\"text\" name=\"T2\" size=\"1\" maxlength=\"2\" value='$T2'>&nbsp;<strong>"._XLASTDOWNLOADS."</strong><br />";
    }
    if ($webl == 1){
        if (empty($T3)) {$T3 = 0;}
        echo "<input type=\"text\" name=\"T3\" size=\"1\" maxlength=\"2\" value='$T3'>&nbsp;<strong>"._XLASTWEBLINKS."</strong><br />";
    }
    if ($foru == 1){
        if (empty($T4)) {$T4 = 0;}
        echo "<input type=\"text\" name=\"T4\" size=\"1\" maxlength=\"2\" value='$T4'>&nbsp;<strong>"._XLASTFORUMPOSTS."</strong><br />";
    }
    echo "<br />";

    //Add Banner
    // This javascript code will be used by the html browser to change the banner picture when selecting another banner
    echo "
        <script language=\"JavaScript\" type=\"text/javascript\">
            function banner_choose(){
                if (document.fancynl.bid.value!=\"\")
                {
                    if(document.getElementById(\"bannerpic\")!=null) document.getElementById(\"bannerpic\").src=document.fancynl.bid.options[document.fancynl.bid.selectedIndex].text;
                    if(document.getElementById(\"bannerpiclink\")!=null) document.getElementById(\"bannerpiclink\").href=document.fancynl.bid.options[document.fancynl.bid.selectedIndex].text;
                }
            }
        </script>";
    $defbanner_url=null;
    if ($fancynl_config['fancynl_bannersystem']!=null && $fancynl_config['fancynl_bannersystem']!="" && !is_dir('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']) && file_exists('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']))
    {
        $content="<select name=\"bid\" onchange=\"javascript:banner_choose()\" >\n";
        require_once('modules/'.$module_name.'/admin/includes/Modules/Banners.php');
        require_once('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']);
        $cname = substr($fancynl_config['fancynl_bannersystem'],0,-4);
        $cname2 = 'fnl'.$cname;
        ${$cname} = new $cname2();
        if (${$cname}->useme())
        {
            $results=${$cname}->doquery();
            while($result=${$cname}->getresult($results))
            {
                $DEF="";
                if($bid=="" || $bid==null || $bid==0) $bid=$result[${$cname}->sql_col_id];
                if($bid==$result[${$cname}->sql_col_id]) { $DEF="selected"; $defbanner_url=$result[${$cname}->sql_col_imageurl]; }
                $content.="<option value=\"".$result[${$cname}->sql_col_id]."\" $DEF>".$result[${$cname}->sql_col_imageurl]."</option>\n";
            }
        }
        $content.="</select><br />";
    }
    if($defbanner_url)
    {
        echo "<hr><strong>"._ADDBANNER."</strong><br />";
        echo "<img alt='' src='".$defbanner_url."' id='bannerpic' width='200' height='30' border='1' valign='middle'>&nbsp;";
        echo $content;
    }

    // 24/04/2005 : ALLOW NEW TEMPLATES
    // This javascript code will be used by the html browser to change the template picture when selecting another template
    echo "
        <script language=\"JavaScript\" type=\"text/javascript\">
            function template_choose(){
                if (document.fancynl.template.value!=\"\")
                {
                    if(document.getElementById(\"templatepic\")!=null) document.getElementById(\"templatepic\").src=\"$nukeurl/modules/".$module_name."/images/\"+document.fancynl.template.value+\".gif\";
                    if(document.getElementById(\"templatepiclink\")!=null) document.getElementById(\"templatepiclink\").href=\"$nukeurl/modules/".$module_name."/images/\"+document.fancynl.template.value+\".gif\";
                }
            }
        </script>";

    // Do not put yet the select box, because, the template picture will be put before
    // generating select box code before putting image to find the default template on disk
    $content="<select name=\"template\" onchange=\"javascript:template_choose()\" >\n";
        $handle=opendir("modules/".$module_name."/templates");

        while ($file = readdir($handle))
        {

            $ext=null;
            ereg("(^[^\.]*)\.([^\.]*$)", $file, $ext); // Separate filename base from extension
            if($ext[2] == "php") // only put if a php file has been found
            {
                if (file_exists("modules/".$module_name."/templates/".$file))
                {
                    $DEF="";
                    if($template=="") $template=$ext[1];
                    if($template==$ext[1]) $DEF="selected";
                    $content.="<option value=\"".$ext[1]."\" $DEF>".$ext[1]."</option>\n";
                }
            }
        }
        closedir($handle);
    $content.="</select><br />";
    if($template)
    {
        echo "<hr><strong>"._SELECTTEMPLATE."</strong><br />";
        echo "<img alt='' src='modules/".$module_name."/images/$template.gif' id='templatepic' width='25' border='0' valign='middle'>&nbsp;";
        echo $content;
    }
    // 24/04/2005 : END ALLOW NEW TEMPLATES

    echo "<hr><strong>"._SENDTO."</strong><br /><input type=\"radio\" name=\"nltr\" value=\"1\" $SEL1> "._SENDTONEWSLETTER."<br />";
    if ($nla==1) {echo "<input type=\"radio\" name=\"nltr\" value=\"2\" $SEL2> "._SENDTOBARIBA."<br />";}
    if ($nla==2) {echo "<input type=\"radio\" name=\"nltr\" value=\"2\" $SEL2> "._SENDTOSUSCRIBERS."<br />";}
    echo "<input type=\"radio\" name=\"nltr\" value=\"3\" $SEL3> "._SENDTORECORDEDMEMBERS." <font color=\"red\">("._SENDBEPRUDENT.")</font><br />";
    echo "<input type=\"radio\" name=\"nltr\" value=\"4\" $SEL4> "._SENDTOYOURSELF."<br />";

    if ($groups == 1){
        echo "<input type=\"radio\" name=\"nltr\" value=\"5\" $SEL5> "._SENDTONSNGROUPS." </font><br />";
        echo "&nbsp;<strong>"._GR_TO.":</strong> <select name=\"gid\">\n";
/*****[BEGIN]******************************************
 [ Mod:    phpBB User Groups Integration       v1.0.0 ]
 ******************************************************/
        echo "<option value=\"0\">"._GR_ALLGR."</option>\n";
        $result = $db->sql_query("SELECT group_id, group_name FROM ".$prefix."_bbgroups WHERE group_description <> 'Personal User' ORDER BY group_name");
        while (list($newGid, $gname) = $db->sql_fetchrow($result)) {
            $DEF="";
            if($nltr==5 && $gid==$newGid) $DEF="selected";
            echo "<option value=\"$newGid\" $DEF>$gname</option>\n";
        }
        echo "</select><br />";
/*****[END]********************************************
 [ Mod:    phpBB User Groups Integration       v1.0.0 ]
 ******************************************************/
    }

    // epetitions variable is used to force epetitions options appearing
    if (file_exists("includes/ePetitions.php") || $epetitions == 1)
    {
        echo "<input type=\"radio\" name=\"nltr\" value=\"6\" $SEL6> "._SENDTOPETITIONSIGNERS." </font><br />";
        echo "&nbsp;<strong>"._GR_TO.":</strong> <select name=\"ePetitionId\">\n";
        echo "<option value=\"0\">"._ALLEPETITIONS."</option>\n";
        $result = $db->sql_query("SELECT ePetitionId, name FROM ".$prefix."_nsngrept_petitions ORDER BY name");
        while (list($newEPetitionID, $gname) = $db->sql_fetchrow($result)) {
            $DEF="";
            if($nltr==6 && $newEPetitionID==$ePetitionId) $DEF="selected";
            echo "<option value=\"$newEPetitionID\" $DEF>$gname</option>\n";
        }
        echo "</select><br />";
    }

    // nsnml variable is used to force epetitions options appearing
    if (file_exists("includes/nsnml_func.php") || $nsnml == 1)
    {
        echo "<input type=\"radio\" name=\"nltr\" value=\"7\" $SEL7> "._SENDTOMLMEMBERS." </font><br />";
        echo "&nbsp;<strong>"._GR_TO.":</strong> <select name=\"lid\">\n";
        echo "<option value=\"0\">"._ALLMAILINGLISTS."</option>\n";
        $result = $db->sql_query("SELECT lid, title FROM ".$prefix."_nsnml_lists ORDER BY title");
        while (list($newLid, $title) = $db->sql_fetchrow($result)) {
            $DEF="";
            if($nltr==7 && $newLid==$lid) $DEF="selected";
            echo "<option value=\"$newLid\" $DEF>$title</option>\n";
        }
        echo "</select><br />";
    }

    echo "<br /><br />";

    if(intval($archive)>0) $DEF="checked";
    echo "<input type=\"checkbox\" name=\"archive\" value=\"".$archive."\" $DEF>&nbsp;<strong>"._FANCYNL_ARCHIVENEWSLETTER."</strong><br />";

    echo "<input type=\"hidden\" name=\"datum\" value=\"".FormatDate2($aktuellesdatum)."\">
    <select name=\"action\" id=\"action\">
    <option value=\"newsletter_preview\">"._PREVIEW."</option>
    <option value=\"send\">"._SENDBYMAIL."</option>
    </select>
    <input type=\"submit\" value=\""._VALIDATE."\" name=\"submit\">
    </form>";

?>