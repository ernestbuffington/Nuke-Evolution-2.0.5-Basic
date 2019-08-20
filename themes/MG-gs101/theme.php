<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/*=======================================================================
Original template " gs-template101 " released by Stafis of http://www.psd-resources.de
Conversion to nuke-evolution version 2.0.5 by mangeewolf as theme MG-gs101
========================================================================*/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}
$theme_name = basename(dirname(__FILE__));
include(NUKE_THEMES_DIR.$theme_name.'/theme_info.php');
/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/
$bgcolor1 = $ThemeInfo['bgcolor1'];
$bgcolor2 = $ThemeInfo['bgcolor2'];
$bgcolor3 = $ThemeInfo['bgcolor3'];
$bgcolor4 = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];
/************************************************************/
/* OpenTable Functions                                      */
/************************************************************/
function OpenTable() {
global $theme_name;
echo " <br /><br />\n";
echo " <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
echo "  <tr>\n";
echo "   <td><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
echo "    <tr>\n";
echo "     <td><img src=\"themes/$theme_name/images/ttl.gif\" width=\"60\" height=\"42\" alt=\"\"></td>\n";
echo "     <td background=\"themes/$theme_name/images/tt.gif\" width=\"100%\" height=\"42\"></td>\n";
echo "     <td><img src=\"themes/$theme_name/images/ttr.gif\" width=\"60\" height=\"42\" alt=\"\"></td>\n";
echo "    </tr>\n";
echo "   </table>\n";
echo "   <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
echo "    <tr>\n";
echo "     <td background=\"themes/$theme_name/images/tl.gif\" width=\"5\" height=\"100%\"></td>\n";
echo "     <td bgcolor=\"#2d3a42\">\n";
}

function CloseTable() {
global $theme_name;
echo "     </td>\n";
echo "     <td background=\"themes/$theme_name/images/tr.gif\" width=\"5\" height=\"100%\"></td>\n";
echo "    </tr>\n";
echo "   </table>\n";
echo "   <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
echo "    <tr>\n";
echo "     <td><img src=\"themes/$theme_name/images/tbl.gif\" width=\"40\" height=\"39\" alt=\"\"></td>\n";
echo "     <td background=\"themes/$theme_name/images/tb.gif\" width=\"100%\" height=\"39\"></td>\n";
echo "     <td><img src=\"themes/$theme_name/images/tbr.gif\" width=\"40\" height=\"39\" alt=\"\"></td>\n";
echo "    </tr>\n";
echo "   </table>\n";
echo " </td></tr></table>\n";
}
function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=infort>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n";
}
function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}
/************************************************************/
/* FormatStory                                              */
/************************************************************/

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if (!empty($notes)) {
        $notes = "<br /><br /><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ($aid == $informant) {
        echo "<span class=\"content\" color=\"#FFFFFF\">$thetext$notes</span>\n";
    } else {
        if(defined('WRITES')) {
            if(!empty($informant)) {
                if(is_array($informant)) {
                    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
                } else {
                    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
                }
            } else {
                $boxstuff = "$anonymous ";
            }
            $boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        } else {
            $boxstuff .= "$thetext$notes\n";
        }

        echo "<span class=\"content\" color=\"#505050\">$boxstuff</span>\n";
    }
}
/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $db, $anonymous, $theme_name, $ThemeInfo, $ip, $theuser, $flash;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $theuser = "<font class=\"content\">Welcome Guest</font>";
    } else {
	$theuser = "&nbsp;&nbsp;Welcome $username!";
    }
$ip = $_SERVER["REMOTE_ADDR"] ;

$choice = $ThemeInfo['flash'];
if ($choice == "yes"){$flash = "1"; }
if ($choice == "no"){$flash = "0"; }

$link1 =$ThemeInfo['link1'];
$link2 =$ThemeInfo['link2'];
$link3 =$ThemeInfo['link3'];
$link4 =$ThemeInfo['link4'];
$link5 =$ThemeInfo['link5'];
 echo "<body>";
if ($flash == "1") {
    include_once(NUKE_THEMES_DIR.$theme_name."/header.php");    
	} else {
    include_once(NUKE_THEMES_DIR.$theme_name."/noflash.php");
	}
 
    echo "\n<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n";
    echo "<tr valign=\"top\">\n";
    echo "<td width=\"15\" valign=\"top\" background=\"themes/".$theme_name."/images/spacer.gif\"><img src=\"themes/".$theme_name."/images/spacer.gif\" width=\"15\" height=\"1\" border=\"0\"></td>\n";
        echo "<td width=\"165\" valign=\"top\">\n";
		global $swapleftright;
		$swapleftright = "1";
  if(blocks_visible('left')) {
        blocks('left');
        echo "    </td>\n";
        echo " <td style=\"width: 5px;\" valign =\"top\"><img src=\"themes/".$theme_name."/images/spacer.gif\" alt=\"\" width=\"5\" height=\"1\" border=\"0\" /></td>\n";
        echo " <td width=\"100%\">\n";
    } else {
        echo "    </td>\n";
        echo " <td style=\"width: 1px;\" valign =\"top\"><img src=\"themes/".$theme_name."/images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" border=\"0\" /></td>\n";
        echo " <td width=\"100%\">\n";
    }
		$swapleftright = "0";


}

/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
    global $index, $user, $cookie, $banners, $prefix, $db, $admin, $adminmail, $nukeurl, $total_time, $start_time, $ip, $theme_name;

//DOWNLOADS
$maxshow = 10;        // Number of downloads to display in the block.
$a = 1;
$sql = "SELECT lid, title, hits FROM ".$prefix."_downloads_downloads ORDER BY hits DESC LIMIT 0,$maxshow";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result)) {
$title2 = ereg_replace("_", " ", $row[title]);
$show2 .= "&nbsp;$a: <a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\"></a>&nbsp;&nbsp;<a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\">$title2</a><br>&nbsp;<b><font class=\"content\">$row[hits]</b><font class=\"copyright\"> times<br>";
$showdls = " <A name= \"scrollingCodedownloads\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" height=\"150\" scrollamount= \"2\" scrolldelay= \"20\" onmouseover='this.stop()' onmouseout='this.start()'>$show2";
$a++;
}

//WEBLINKS
$maxshow = 10;	// Number of links to display in the block.
$a = 1;
$sql = "select lid, title, hits from ".$prefix."_links_links order by date DESC limit 0,$maxshow";
$result = $db->sql_query("select lid, title, hits from ".$prefix."_links_links order by date DESC limit 0,$maxshow");
while(list($lid, $title, $hits) = $db->sql_fetchrow($result)) {
$title2 = ereg_replace("_", " ", "$title");
$show .= "&nbsp;$a: <a href=\"modules.php?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$title\">$title2</a><b><br>&nbsp;<font class=\"content\">$hits</b><font class=\"copyright\"> times<br>";
$showlinks = " <A name= \"scrollingCode\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" height=\"150\" scrollamount= \"2\" scrolldelay= \"20\" onmouseover='this.stop()' onmouseout='this.start()'>$show";
$a++;
}

    if (blocks_visible('right') && !defined('ADMIN_FILE')) {
    echo "</td>\n";
    echo "        <td style=\"width: 5px;\" valign=\"top\"><img src=\"themes/".$theme_name."/images/spacer.gif\" alt=\"\" width=\"5\" height=\"1\" /></td>\n";
    echo "       <td style=\"width: 165px;\" valign=\"top\">\n";
        blocks('right');
    }
    echo"</td>\n";
    echo "       <td width=\"15\" valign=\"top\" background=\"themes/".$theme_name."/images/spacer.gif\"><img src=\"themes/".$theme_name."/images/spacer.gif\" width=\"15\" height=\"0\" border=\"0\"></td>\n";
    echo "  </tr>\n";
    echo "</table>\n\n\n";
 include_once(NUKE_THEMES_DIR.$theme_name."/footer.php");

}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/
function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath, $theme_name, $sid;

    $ThemeSel = get_theme();
    if(!empty($topicimage)) {
        if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
            $t_image = "themes/$ThemeSel/images/topics/$topicimage";
        } else {
            $t_image = "$tipath$topicimage";
        }
        $topic_img = "<td width=\"25%\" align=\"center\" class=\"extra\"><a href=\"modules.php?name=News&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\" /></a></td>";
    } else {
        $topic_img = "";
    }
    if (!empty($notes)) {
        $notes = "<br /><br /><b>"._NOTE."</b> $notes\n";
    } else {
        $notes = "";
    }
    $content = '';
    if ($aid == $informant) {
        $content = "$thetext$notes\n";
    } else {
        if(defined('WRITES')) {
            if(!empty($informant)) {
                if(is_array($informant)) {
                    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
                } else {
                    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
                }
            } else {
                $content = "$anonymous ";
            }
            $content .= _WRITES." \"$thetext\"$notes\n";
        } else {
            $content .= "$thetext$notes\n";
        }
    }
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time  ";
    $datetime = substr($morelink, 0, strpos($morelink, "|") - strlen($morelink));
    $morelink = substr($morelink, strlen($datetime) + 2);
    $tmpl_file = "themes/$theme_name/story_home.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themearticle()                                  */
/************************************************************/
function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath, $theme_name;

    $ThemeSel = get_theme();
    if(!empty($topicimage)) {
        if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
            $t_image = "themes/$ThemeSel/images/topics/$topicimage";
        } else {
            $t_image = "$tipath$topicimage";
        }
        $topic_img = "<td width=\"25%\" align=\"center\" class=\"extra\"><a href=\"modules.php?name=News&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\" /></a></td>";
    } else {
        $topic_img = "";
    }
    $posted = ""._POSTEDON." $datetime "._BY." ";
    $posted .= get_author($aid);
    if (!empty($notes)) {
        $notes = "<br /><br /><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    $content = '';
    if ($aid == $informant) {
        $content = "$thetext$notes\n";
    } else {
        if(defined('WRITES')) {
            if(!empty($informant)) {
                if(is_array($informant)) {
                    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
                } else {
                    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
                }
            } else {
                $content = "$anonymous ";
            }
            $content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        } else {
            $content .= "$thetext$notes\n";
        }
    }
    $tmpl_file = NUKE_THEMES_DIR.$theme_name."/story_page.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}
function themecenterbox($title, $content) {
    OpenTable();
    echo '<center><span class="option"><strong>'.$title.'</strong></span></center><br />'.$content;
    CloseTable();
    echo '<br />';
}

function themepreview($title, $hometext, $bodytext='', $notes='') {
    echo '<strong>'.$title.'</strong><br /><br />'.$hometext;
    if (!empty($bodytext)) {
        echo '<br /><br />'.$bodytext;
    }
    if (!empty($notes)) {
        echo '<br /><br /><strong>'._NOTE.'</strong> <i>'.$notes.'</i>';
    }
}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {
	global $swapleftright, $bgcolor1, $bgcolor2, $theme_name;

	if ($swapleftright=="0") {
		$tmpl_file = NUKE_THEMES_DIR.$theme_name."/blocksR.html";
	} else {
		$tmpl_file = NUKE_THEMES_DIR.$theme_name."/blocksL.html";
	}
	$thefile = implode("", file($tmpl_file));
	$thefile = addslashes($thefile);
	$thefile = "\$r_file=\"".$thefile."\";";
	eval($thefile);
	print $r_file;
}

?>
