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
   die('Access Denied');
}

define('FANCYNL_FILE', true);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
global $prefix, $admin, $user, $nukeurl, $db, $sitename, $aid, $module_name, $admdata;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nla     = "0";           # 0 = No extra nl        : 1 = baribas nl        : 2 = La Newsletter
$news    = "1";           # Use x news items       : 0 = deactivate        : 1 = activate
$dowl    = "1";           # Use x Downloads        : 0 = deactivate        : 1 = activate
$webl    = "1";           # Use x Web Links        : 0 = deactivate        : 1 = activate
$foru    = "1";           # Use x Forum Topics     : 0 = deactivate        : 1 = activate
$groups  = "1";           # Use groups         : 0 = deactivate        : 1 = activate
$epetitions = "0";           # Use Nsn ePetition signers         : 0 = deactivate        : 1 = activate
$nsnml   = "0";           # Use Nsn Mailing list         : 0 = deactivate        : 1 = activate
$dl      = "";   # Must be filled only if downloads table is not detected in the user interface to force the value...what dl module you use set to downloads, grdl, or nsngd
$sign    = ""; #  set your default signature here can be changed when you make nl
$fulldl     = $prefix."_".$dl."_downloads"; # Must be change only when the download table is not under <prefix>_<$dl name>_downloads
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* 21/05/2005 : Louis Lecaroz, adding correct security rights management */

$module_name = basename(dirname(dirname(__FILE__)));
$aid = substr($aid, 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT title, admins FROM ".$prefix."_modules WHERE title='$module_name'"));
$radminsuper = $admdata['radminsuper'];
$admins = explode(",", $row['admins']);
$auth_user = 0;
for ($i=0; $i < count($admins); $i++) {
    if ($admdata['name'] == $admins[$i] AND !empty($row['admins'])) {
        $auth_user = 1;
    }
}
/* 21/05/2005 : END / Louis Lecaroz, adding correct security rights management */
function FancyNewsLetterGetConfigs(){
    global $prefix, $db;
    $configresult = $db->sql_query("SELECT config_name, config_value FROM ".$prefix."_fancynl_config");
    while (list($config_name, $config_value) = $db->sql_fetchrow($configresult)) {
        $config[$config_name] = $config_value;
    }
    return $config;
}

function FancyNewsLetterAdmin() {
    global $admin_file;
    OpenTable();
    echo "<center>\n<table cellpadding=\"3\">\n<tr>\n";
    echo "<td align=\"center\" valign=\"top\" width=\"150\">";
    echo "<a href=\"".$admin_file.".php?op=fancy-nl\">"._FANCYNL_SENDNEWSLETTER."</a><br />";
    echo "</td>\n";
    echo "<td align=\"center\" valign=\"top\" width=\"150\">";
    echo "<a href=\"".$admin_file.".php?op=fancy-nl&amp;action=options\">"._FANCYNL_OPTIONS."</a><br />";
    echo "</td>\n";
    echo "<td align=\"center\" valign=\"top\" width=\"150\">";
    echo "<a href=\"".$admin_file.".php?op=fancy-nl&amp;action=archive\">"._FANCYNL_ARCHIVES."</a><br />";
    echo "</td>\n";
    echo "</tr>\n";
    //echo "<tr>\n<td colspan=\"3\" align=\"center\"><a href=\"".$admin_file.".php\">"._FANCYNL_MAINADMINMENU."</a></td>\n</tr>\n";
    echo "<tr><td colspan=\"3\" align=\"center\"><a href=\"".$admin_file.".php?op=fancy-nl&amp;action=view_all\">"._FANCYNL_MAIL_TO."</a></td></tr>";
    echo "</table>\n</center>\n";
    CloseTable();
}

function view_all() {
    global $prefix, $db, $user_prefix;
    $result = $db->sql_query("SELECT username FROM ".$user_prefix."_users WHERE newsletter=1");
    while ($row = $db->sql_fetchrow($result)) {
        $subscribed[] = $row[0];
    }
    if(is_array($subscribed) && !empty($subscribed)){
        $i = 0;
        OpenTable();
        echo '<center>';
        foreach ($subscribed as $user){
            echo UsernameColor($user) . '<br />';
            $i++;
        }
        echo '<br/ ><br /><strong>'.$i.'</strong> Users';
        echo '</center>';
        CloseTable();
    } else {
        OpenTable();
        echo '<center>'._FANCYNL_MAIL_NO.'</center>';
        CloseTable();
    }
}

function FormatDate2($strDate)
{
    $Adob = explode ("-",$strDate);
    $newdob = $Adob[2];
    if ($Adob[1] == 1)$month = _JANUARY;
    if ($Adob[1] == 2)$month = _FEBRUARY;
    if ($Adob[1] == 3)$month = _MARCH;
    if ($Adob[1] == 4)$month = _APRIL;
    if ($Adob[1] == 5)$month = _MAY;
    if ($Adob[1] == 6)$month = _JUNE;
    if ($Adob[1] == 7)$month = _JULY;
    if ($Adob[1] == 8)$month = _AUGUST;
    if ($Adob[1] == 9)$month = _SEPTEMBER;
    if ($Adob[1] == 10)$month = _OCTOBER;
    if ($Adob[1] == 11)$month = _NOVEMBER;
    if ($Adob[1] == 12)$month = _DECEMBER;
    $newdob = "".$newdob." ".$month." ".$Adob[0];
    return $newdob;
}
if ($radminsuper == 1 || $auth_user == 1) {
    $fancynl_config=FancyNewsLetterGetConfigs();
    $news    = $fancynl_config['fancynl_calc_news'];
    $dowl   = $fancynl_config['fancynl_calc_dowl'];
    $webl   = $fancynl_config['fancynl_calc_webl'];
    $foru   = $fancynl_config['fancynl_calc_foru'];
    if($action!="newsletter_preview" && $action!="send") // If in newsletter preview, variables already set by the form validated by the user
    {
        $T1        = intval($fancynl_config['fancynl_num_news']);
        $T2        = intval($fancynl_config['fancynl_num_dowl']);
        $T3        = intval($fancynl_config['fancynl_num_webl']);
        $T4        = intval($fancynl_config['fancynl_num_foru']);
        $archive= intval($fancynl_config['fancynl_archive']);
        if(intval($fancynl_config['fancynl_show_stat'])==1) $stats="off";
        if(intval($fancynl_config['fancynl_randombanner'])==1 && $fancynl_config['fancynl_bannersystem']!="")
        {
            require_once('modules/'.$module_name.'/admin/includes/Modules/Banners.php');
            require_once('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$fancynl_config['fancynl_bannersystem']);
            $cname = substr($fancynl_config['fancynl_bannersystem'],0,-4);
            $cname2 = 'fnl'.$cname;
            ${$cname} = new $cname2();
            if (${$cname}->useme())    $bid=${$cname}->getrandombanner();
        }
    }
    if($dl==null || $dl=="")  { $dl = $fancynl_config['fancynl_downloadstable']; $fulldl = $prefix."_".$dl."_downloads"; }
    if($sign==null || $sign=="") { $sign = $fancynl_config['fancynl_sign']; }

    // If the download table does not exist... disable download stats
    if($db->sql_fetchrow($db->sql_query("show tables like '".$fulldl."'"))) {} else { $dl=null; $dowl="0"; }

    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=fancy-nl\">" . _FANCNL_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FANCNL_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();

    OpenTable();
    echo"<br /><center><h3><a target=\"_blank\" href=\"http://www.le-resistant.com/\">
    <img alt='"._ALTAUTHOR."' src='modules/".$module_name."/images/leres-logo.gif' border='0'></a><br />"._FANCNLPRODUCTTITLE."</h3></center>";
    CloseTable();

    switch($action)
    {
        case "send":
            $pagetitle = _FANCYNL_SENTMAIL;
            break;
        case "archive":
            $pagetitle = _FANCYNL_ARCHIVES;
            break;
        case "edit":
        case "newsletter_preview":
            $pagetitle = _PREVIEW;
            break;
        case "options":
            $pagetitle = _FANCYNL_OPTIONS;
            break;
        case "view_all":
            $pagetitle = _FANCYNL_MAIL_TO;
            break;
        case "":
            $pagetitle = _FANCYNL_SENDNEWSLETTER;
            $action = "newsletter_preview";
            break;
        default:
            break;
    }

    title($pagetitle);
    FancyNewsLetterAdmin();
    echo "<br />\n";

    switch($action)
    {
        case "save": include("includes/FANCYNLSave.php"); break;
        case "archive": include("includes/FANCYNLArchive.php"); break;
        case "options": include("includes/FANCYNLOptions.php"); break;
        case "view_all": view_all(); break;
        case "send":
            include("includes/FANCYNLPrepare.php");
            include("includes/FANCYNLSend.php");
            break;
        case "edit":
            if(list($nltr, $extended, $template, $sender, $thema, $inhalt, $bid) = $db->sql_fetchrow($db->sql_query("SELECT mode,extended,template,aid,title,inhalt,bid FROM ".$prefix."_fancynl_archives WHERE nid=".$nid)))
            {
                if ($fancynl_config['fancynl_bannersystem']==null || $fancynl_config['fancynl_bannersystem']=="") $bid=0;
                switch(intval($nltr))
                {
                    case 5:    global $gid; $gid=$extended; break;
                    case 6:    global $ePetitionId; $ePetitionId=$extended; break;
                    case 7:    global $lid; $lid=$extended; break;
                    default:break;
                }
            }
            else $action="";
        case "newsletter_preview":
        default:
            // If template not already set, this is not a preview, don't need to prepare the content...
            if ($template!=null && !empty($template)) include("includes/FANCYNLPrepare.php");
            include("includes/FANCYNLPreview.php");
            break;
    }

    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');

} else {
    include(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=fancy-nl\">" . _FANCNL_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FANCNL_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><strong>"._ERROR."</strong><br /><br />You do not have administration permission for module \"$module_name\"</center>";
    CloseTable();
    include(NUKE_BASE_DIR.'footer.php');
}

?>