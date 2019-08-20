<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* Written by Louis Lecaroz -- http://www.le-resistant.com              */
/* Project stored on http://www.sourceforge.net/projects/nsngrept       */
/*        and http://www.le-resistant.com                               */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

global $module_name;

$module_name = basename(dirname(__FILE__));
if(!isset($module_file)) $module_file = 'modules';

global $prefix, $db, $module_file, $user;
get_lang($module_name);

function FancyNLGetConfigs(){
    global $prefix, $db;
    $configresult = $db->sql_query("SELECT config_name, config_value FROM ".$prefix."_fancynl_config");
    while (list($config_name, $config_value) = $db->sql_fetchrow($configresult)) {
        $config[$config_name] = $config_value;
    }
    return $config;
}

function FancyNLShowPaging($url, $suffix, $request, $paging=0, $min=0)
{
    global $db, $prefix;
    $text_to_return="";

    if($paging==0) return null;

    $totaldata=0;
    $result = $db->sql_query($request);
    if($result) list($totaldata) = $db->sql_fetchrow($result);
    $totaldata=intval($totaldata);
    if($totaldata==0) return null;

    if (!isset($max)) { $max = $min + $paging; }

    $articlepagesint = ($totaldata / $paging);
    $articlepageremain = ($totaldata % $paging);

    if ($articlepageremain != 0)
    {
        $articlepages = ceil($articlepagesint);
        if ($totaldata < $paging) { $articlepageremain = 0; }
    }
    else
    {
        $articlepages = $articlepagesint;
    }
    if ($articlepages<=1) return null;

    $text_to_return.= "<br />\n";

    $counter = 1;
    $currentpage = ($max / $paging);

    $text_to_return.= "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
    $text_to_return.= "<tr>\n<td><strong>"._PAGING_SELECT." </strong><select name='min' onChange='top.location.href=this.options[this.selectedIndex].value'>\n";

    while ($counter <= $articlepages )
    {
        $cpage = $counter;
        $mintemp = ($paging * $counter) - $paging;

        if ($counter == $currentpage)
        {
            $text_to_return.= "<option value='$url&min=$mintemp$suffix' selected>$counter</option>\n";
        }
        else
        {
            $text_to_return.= "<option value='$url&min=$mintemp$suffix'>$counter</option>\n";
        }
        $counter++;
    }

    $text_to_return.= "</select><strong> "._PAGING_OF." $articlepages "._PAGING_PAGES.".</strong></td>\n</tr>\n";
    $text_to_return.= "</table>\n";
    return $text_to_return;
}
function FancyNLShowArchives($modifyingAction, $filter, $paging=0, $min=0)
{
    global $db, $prefix, $module_file, $module_name, $bgcolor1, $bgcolor2,$textcolor1,$textcolor2;
    $request="SELECT nid,mode,extended,aid,title,time,sent FROM ".$prefix."_fancynl_archives WHERE (nid>0";

    if($filter==null || empty($filter)) $request=$request.")";
    else $request=$request." ".$filter.")";

    if($min==null) $min=0;
    if($paging!=0) $request=$request." ORDER BY time DESC LIMIT $min,$paging";
    else $request=$request." ORDER BY time DESC";

    $result = $db->sql_query($request);

    if($result)
    {
        echo "<table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">";
            echo "<tr>\n";
                echo "<td align=\"left\" bgcolor=\"$bgcolor2\" ><font color=\"$textcolor2\"><strong>"._FNL_DATE."</strong></font></td>\n";
                echo "<td align=\"center\" bgcolor=\"$bgcolor2\" ><font color=\"$textcolor2\"><strong>"._FNL_SENT."</strong></font></td>\n";
                echo "<td align=\"center\" bgcolor=\"$bgcolor2\" ><font color=\"$textcolor2\"><strong>"._FNL_AUTHOR."</strong></font></td>\n";
                echo "<td align=\"right\" bgcolor=\"$bgcolor2\" ><font color=\"$textcolor2\"><strong>"._FNL_TABLETITLE."</strong></font></td>\n";
                echo "<td align=\"center\" bgcolor=\"$bgcolor2\"><font color=\"$textcolor2\"><strong>"._FNL_ACTIONS."</strong></font></td>\n";
            echo "</tr>";
            while(list($nid, $mode, $extended, $aid, $title, $time, $sent) = $db->sql_fetchrow($result)) {
                if($aid==null || empty($aid)) $aid="&nbsp;";
                if($title==null || empty($title)) $title="&nbsp;";
                echo "<tr>";
                echo "<td align=\"left\"  bgcolor=\"$bgcolor1\" nowrap width=\"5%\" ><font color=\"$textcolor1\">$time</font></td>\n";
                echo "<td align=\"center\"  bgcolor=\"$bgcolor1\" nowrap width=\"5%\" ><font color=\"$textcolor1\">".($sent=="0000-00-00 00:00:00"?"&nbsp;":$sent)."</font></td>\n";
                echo "<td align=\"center\"  bgcolor=\"$bgcolor1\" ><font color=\"$textcolor1\">$aid</font></td>\n";
                echo "<td align=\"right\"  bgcolor=\"$bgcolor1\" ><font color=\"$textcolor1\">$title</font></td>\n";
                echo "<td align=\"center\"  bgcolor=\"$bgcolor1\" nowrap  width=\"5%\"  >";
                    echo "<a href=\"".$module_file.".php?name=".$module_name."&amp;op=view&amp;nid=$nid\" target=\"_blank\"><img src=\"images/".$module_name."/view.gif\" height=\"16\" width=\"16\" border=\"0\" alt=\""._FNL_VIEW."\" title=\""._FNL_VIEW."\"></a>";
                    if($modifyingAction!=null && !empty($modifyingAction))
                    {
                        echo "&nbsp;<a href=\"".$modifyingAction."&amp;action=edit&amp;nid=$nid\"><img src=\"images/".$module_name."/edit.png\" height=\"16\" width=\"16\" border=\"0\" alt=\""._FNL_EDIT."\" title=\""._FNL_EDIT."\"></a>";
                        echo "&nbsp;<a href=\"".$module_file.".php?name=".$module_name."&amp;op=delete&amp;nid=$nid\"><img src=\"images/".$module_name."/delete.png\" height=\"16\" width=\"16\" border=\"0\" alt=\""._FNL_DELETE."\" title=\""._FNL_DELETE."\"></a>";
                    }
                echo "</td>\n";
                echo "</tr>";
            }
        echo "</table>";
    }
}

global $admin_file;

$pagetitle = ""._FNL_TITLE."";

$uid=0;
if($user)
{
    global $userinfo;
    $usrinfo = $userinfo;
    if($usrinfo) $uid = $usrinfo['user_id'];
}

$fancynl_config=FancyNLGetConfigs();

switch($op)
{
    case "delete_conf":
        Header("Location: ".$module_file.".php?name=".$module_name);
       	$db->sql_query('DELETE FROM `'.$prefix.'_fancynl_archives` WHERE `nid`="'.$nid.'"');        
        break;

    case "delete":
        $pagetitle .= ": "._FNL_NEWSLETTERDELETE;
        include_once(NUKE_BASE_DIR.'header.php');
        title($pagetitle);
        echo "<br />\n";
        OpenTable();
            if(is_mod_admin($module_name))
            {
                list($gname) = $db->sql_fetchrow($db->sql_query("SELECT title FROM ".$prefix."_fancynl_archives WHERE nid='".intval($nid)."'"));
                echo "<center><table><tr>\n";
                echo "<form action=\"".$module_file.".php?name=".$module_name."\" method=\"post\">\n";
                echo "<input type=\"hidden\" name=\"op\" value=\"".$op."_conf\">\n";
                echo "<input type=\"hidden\" name=\"nid\" value=\"$nid\">\n";
                echo "<td align=\"center\">";
                echo _FNL_NEWSLETTERDELETE." : ";
                echo " #".$nid." (".$gname.")?</td>\n";
                echo "</tr><tr><td align=\"center\"><input type=\"submit\" value=\"";
                echo _FNL_DELETE;
                echo "\"></td></form>\n";
                echo "</tr></table></center>\n";
                echo "<center>"._GOBACK."</center>\n";
            }
            else
            {
                echo "<center><table><tr>\n";
                echo "<td align=\"center\">";
                    echo _FNL_NOTAUTHORIZED;
                echo "</td></tr></table></center>\n";
                echo "<center>"._GOBACK."</center>\n";
            }
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
        break;
    case "view":
        if(list($hometext) = $db->sql_fetchrow($db->sql_query("SELECT hometext FROM ".$prefix."_fancynl_archives WHERE nid=".intval($nid))))
        {
            echo $hometext;
        }
        break;
    case "list":
    default:
        if(!isset($min)) {
            $min = 0;
        }
        include_once(NUKE_BASE_DIR.'header.php');
            title($pagetitle);
            OpenTable();
                FancyNLShowArchives((is_mod_admin($module_name))?("".$admin_file.".php?op=fancy-nl"):"","", intval($fancynl_config['fancynl_archive_paging']), $min);
            CloseTable();
            $paging_text=FancyNLShowPaging("".$module_file.".php?name=".$module_name."&amp;op=list", $suffix, "SELECT count(*) FROM ".$prefix."_fancynl_archives", intval($fancynl_config['fancynl_archive_paging']), $min);
            if($paging_text!=null && !empty($paging_text))
            {
                OpenTable();
                    echo $paging_text;
                CloseTable();
            }
        include_once(NUKE_BASE_DIR.'footer.php');
        break;
}

?>