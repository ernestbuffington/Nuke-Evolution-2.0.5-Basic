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

if (!defined('ADMIN_FILE')) {
    die ('Access Denied');
}

global $prefix, $db, $admin_file, $currentlang;
$module_name = basename(dirname(dirname(__FILE__)));
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT title, admins FROM ".$prefix."_modules WHERE title='$module_name'"));
$row2 = $db->sql_fetchrow($db->sql_query("SELECT name, radminsuper FROM ".$prefix."_authors WHERE aid='$aid'"));
$admins = explode(",", $row['admins']);
$auth_user = 0;
for ($i=0; $i < sizeof($admins); $i++) {
    if ($row2['name'] == "$admins[$i]" AND !empty($row['admins'])) {
        $auth_user = 1;
    }
}

if ($row2['radminsuper'] == 1 || $auth_user == 1) {
include_once(NUKE_MODULES_DIR.$module_name.'/admin/language/lang-'.$currentlang.'.php');
function IndexAdmin() {
    global $prefix, $db, $bgcolor1, $bgcolor2, $nuke_config, $admin_file;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><span class=\"title\"><strong>"._FNA_ADMIN."</strong></span></center>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center>";
    echo "[ <a href='".$admin_file.".php?op=forumsettings'>"._FNA_SETTINGS."</a> | ";
    echo "<a href='".$admin_file.".php?op=forumtopics'>"._FNA_TOPICS."</a> ]</center>\n";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
}

function forumtopicsmanager() {
    global $prefix, $db, $admin_file;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><span class=\"title\"><strong>"._FNA_TOPICS."</strong></span></center>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center>";
    echo "[ <a href='".$admin_file.".php?op=forumsettings'>"._FNA_SETTINGS."</a> | ";
    echo "<a href='".$admin_file.".php?op=forumtopics'>"._FNA_TOPICS."</a> ]</center>\n";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center><span class=\"option\"><strong>"._FNA_CURRENTTOPICS."</strong></span><br />"._FNA_CLICK2EDIT."</span></center><br />"
    ."<table border=\"0\" width=\"100%\" align=\"center\" cellpadding=\"2\">";
    $count = 0;
    $result = $db->sql_query("select news_id, news_category, news_image from ".$prefix."_bbnews order by news_category");
    while(list($news_id, $news_category, $news_image) = $db->sql_fetchrow($result)) {
    echo "<td align=\"center\">"
        ."<a href=\"".$admin_file.".php?op=forumtopicedit&amp;news_id=$news_id\"><img src=\"images/topics/$news_image\" border=\"0\" alt=\"\"></a><br />"
        ."<span class=\"content\"><strong>$news_category</strong></td>";
    $count++;
    if ($count == 5) {
        echo "</tr><tr>";
        $count = 0;
    }
    }
    echo "</table>";
    CloseTable();
    echo "<br /><a name=\"Add\">";
    OpenTable();
    echo "<center><span class=\"option\"><strong>"._FNA_ADDTOPIC."</strong></span></center><br />"
        ."<form action=\"".$admin_file.".php\" method=\"post\">"
    ."<strong>"._FNA_NAME.":</strong>"
    ."<br />"
    ."<input type=\"text\" name=\"news_category\" size=\"20\" maxlength=\"20\" value=\"$news_category\"><br /><br />"
    ."<strong>"._FNA_IMAGE.":</strong><br />"
    ."<select name=\"news_image\">";
    $path1 = explode ("/", "images/topics/");
    $path = "$path1[0]/$path1[1]/$path1[2]";
    $handle=opendir($path);
    while ($file = readdir($handle)) {
    if ( (ereg("^([_0-9a-zA-Z]+)([.]{1})([_0-9a-zA-Z]{3})$",$file)) AND $file != "AllTopics.gif") {
        $tlist .= "$file ";
    }
    }
    closedir($handle);
    $tlist = explode(" ", $tlist);
    sort($tlist);
    for ($i=0; $i < sizeof($tlist); $i++) {
    if($tlist[$i]!="") {
        echo "<option name=\"news_image\" value=\"$tlist[$i]\">$tlist[$i]</option>\n";
    }
    }
    echo "</select><br /><br />"
    ."<input type=\"hidden\" name=\"op\" value=\"forumtopicmake\">"
    ."<input type=\"submit\" value=\""._FNA_SAVE."\">"
    ."</form>";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
}

function forumtopicedit($news_id) {
    global $prefix, $db, $admin_file;
    $news_id = intval($news_id);
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><span class=\"title\"><strong>"._FNA_TOPICS.": "._FNA_EDITTOPIC."</strong></span></center>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center>";
    echo "[ <a href='".$admin_file.".php?op=forumsettings'>"._FNA_SETTINGS."</a> | ";
    echo "<a href='".$admin_file.".php?op=forumtopics'>"._FNA_TOPICS."</a> ]</center>\n";
    CloseTable();
    echo "<br />";
    OpenTable();
    $result = $db->sql_query("select news_id, news_category, news_image from ".$prefix."_bbnews where news_id=$news_id");
    list($news_id, $news_category, $news_image) = $db->sql_fetchrow($result);
    echo "<img src=\"images/topics/$news_image\" border=\"0\" align=\"right\" alt=\"$news_category\">"
    ."<span class=\"option\"><strong>"._FNA_EDITTOPIC.": $news_category</strong></span>"
    ."<br /><br />"
    ."<form action=\"".$admin_file.".php\" method=\"post\"><br />"
    ."<strong>"._FNA_NAME.":</strong><br />"
    ."<input type=\"text\" name=\"news_category\" size=\"20\" maxlength=\"20\" value=\"$news_category\"><br /><br />"
    ."<strong>"._FNA_IMAGE.":</strong><br />"
    ."<select name=\"news_image\">";
    $path1 = explode ("/", "images/topics/");
    $path = "$path1[0]/$path1[1]/$path1[2]";
    $handle=opendir($path);
    while ($file = readdir($handle)) {
    if ( (ereg("^([_0-9a-zA-Z]+)([.]{1})([_0-9a-zA-Z]{3})$",$file)) AND $file != "AllTopics.gif") {
        $tlist .= "$file ";
    }
    }
    closedir($handle);
    $tlist = explode(" ", $tlist);
    sort($tlist);
    for ($i=0; $i < sizeof($tlist); $i++) {
    if($tlist[$i]!="") {
        if ($news_image == $tlist[$i]) {
        $sel = "selected";
        } else {
        $sel = "";
        }
        echo "<option name=\"news_image\" value=\"$tlist[$i]\" $sel>$tlist[$i]\n";
    }
    }
    echo "</select><br /><br />"
    ."<input type=\"hidden\" name=\"news_id\" value=\"$news_id\">"
    ."<input type=\"hidden\" name=\"op\" value=\"forumtopicchange\">"
        ."<INPUT type=\"submit\" value=\""._FNA_SAVE."\"> <span class=\"content\">[ <a href=\"".$admin_file.".php?op=forumtopicdelete&amp;news_id=$news_id\">"._FNA_DELETE."</a> ]</span>"
    ."</form>";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
}

function forumtopicmake($news_category, $news_image) {
    global $prefix, $db, $admin_file;
    $news_category = stripslashes(FixQuotes($news_category));
    $news_image = stripslashes(FixQuotes($news_image));
    $db->sql_query("INSERT INTO ".$prefix."_bbnews VALUES ('','$news_category','$news_image')");
    Header("Location: ".$admin_file.".php?op=forumtopics");
}

function forumtopicchange($news_id, $news_category, $news_image) {
    global $prefix, $db, $admin_file;
    $news_id = intval($news_id);
    $news_category = stripslashes(FixQuotes($news_category));
    $news_image = stripslashes(FixQuotes($news_image));
    $db->sql_query("update ".$prefix."_bbnews set news_category='$news_category', news_image='$news_image' where news_id='$news_id'");
    if (!$name)
    Header("Location: ".$admin_file.".php?op=forumtopics");
}

function forumtopicdelete($news_id, $ok=0) {
    global $prefix, $db, $admin_file;
    $news_id = intval($news_id);
    if ($ok==1) {
    $result= $db->sql_query("select topic_id from ".$prefix."_bbposts where news_id='$news_id'");
    list($sid) = $db->sql_fetchrow($result);
    $db->sql_query("delete from ".$prefix."_bbtopics where news_id='$news_id'");
    $db->sql_query("delete from ".$prefix."_bbnews where news_id='$news_id'");
    $db->sql_query("delete from ".$prefix."_bbposts where topic_id='$topic_id'");
    Header("Location: ".$admin_file.".php?op=forumtopics");
    } else {
    global $news_image, $db;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
        OpenTable();
    echo "<center><span class=\"title\"><strong>"._FNA_TOPICS.": "._FNA_DELTOPIC."</strong></span></center>";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center>";
    echo "[ <a href='".$admin_file.".php?op=forumsettings'>"._FNA_SETTINGS."</a> | ";
    echo "<a href='".$admin_file.".php?op=forumtopics'>"._FNA_TOPICS."</a> ]</center>\n";
    CloseTable();
    echo "<br />";
    $result2= $db->sql_query("select news_image, news_category from ".$prefix."_bbnews where news_id='$news_id'");
    list($news_image, $news_category) = $db->sql_fetchrow($result2);
    OpenTable();
    echo "<center><img src=\"images/topics/$news_image\" border=\"0\" alt=\"$news_category\"><br /><br />"
        ."<strong>"._FNA_DELTOPIC." $news_category</strong><br /><br />"
        .""._FNA_DELSURE." <i>$news_category</i>?<br />"
        .""._FNA_DELSURE1."<br /><br />"
        ."[ <a href=\"".$admin_file.".php?op=forumtopics\">"._FNA_NO."</a> | <a href=\"".$admin_file.".php?op=forumtopicdelete&amp;news_id=$news_id&amp;ok=1\">"._FNA_YES."</a> ]</center><br /><br />";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
    }
}
function forumsettings() {
    global $prefix, $db, $nuke_config, $bgcolor2, $admin_file;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    $result= $db->sql_query("select newsnumber, allownews, news_trim, rss, timezone from ".$prefix."_fna_config");
    list($newsnumber, $allownews, $news_trim, $rss, $tz) = $db->sql_fetchrow($result);
    echo "<center><span class=\"title\"><strong>"._FNA_SETTINGS."</strong></span></center>";
    CloseTable();
     echo "<br />";
    OpenTable();
    echo "<center>";
    echo "[ <a href='".$admin_file.".php?op=forumsettings'>"._FNA_SETTINGS."</a> | ";
    echo "<a href='".$admin_file.".php?op=forumtopics'>"._FNA_TOPICS."</a> ]</center>\n";
    CloseTable();
    echo "<br />";
    OpenTable();
    echo "<center>\n";
    echo "<table border='0'>\n";
    echo "<form action='".$admin_file.".php' method='post'>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._FNA_STORIES."</td><td><input type='text' name='xstoryhome' value='".$newsnumber."' size='40' maxlength='2'></td></tr>\n";
    if ($allownews==1) {$sel1 = "checked"; $sel2 = ""; } else { $sel1 = ""; $sel2 = "checked"; }
    echo "<tr><td bgcolor='$bgcolor2'>"._FNA_ALLOWNEWS." </td><td><input type='radio' name='xallow_news' value='1' $sel1>"._FNA_YES." &nbsp; <input type='radio' name='xallow_news' value='0' $sel2>"._FNA_NO."</td></tr>\n";
    if ($rss==1) {$sel1 = "checked"; $sel2 = ""; } else { $sel1 = ""; $sel2 = "checked"; }
    echo "<tr><td bgcolor='$bgcolor2'>"._FNA_ALLOWRSS." </td><td><input type='radio' name='xrss' value='1' $sel1>"._FNA_YES." &nbsp; <input type='radio' name='xrss' value='0' $sel2>"._FNA_NO."</td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._FNA_TRIM."</td><td><input type='text' name='xitem_trim' value='".$news_trim."' size='40' maxlength='100'></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._FNA_TZ."</td><td>";
    $tz_select = tz_select($tz);
    echo $tz_select;
    echo "</td></tr>\n";
    echo "<tr><td colspan='2' align='center'><br /><input type='submit' value='"._SAVECHANGES."'><input type='hidden' name='op' value='forumsettingssave'></td></tr>";
    echo "</form>\n";
    echo "</table></center>\n";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
}
function tz_select($default)
{
        global $fnalang;
        $tz_select = '<select name="xtimezone">';
        while( list($offset, $zone) = each($fnalang['tz']) )
        {
                $selected = ( $offset == $default ) ? ' selected="selected"' : '';
                $tz_select .= '<option value="' . $offset . '"' . $selected . '>' . $zone . '</option>';
        }
        $tz_select .= '</select>';
        return $tz_select;
}
switch($op) {
    default:
    case "index":
    IndexAdmin();
    break;

    case "forumsettings":
    forumsettings();
    break;

    case "forumsettingssave":
        $xstoryhome = intval($xstoryhome);
        $xallow_news = intval($xallow_news);
        $xitem_trim = intval($xitem_trim);
        $xrss = intval($xrss);
        $xtimezone = intval($xtimezone);
        if ($xstoryhome<=0){
        $xstoryhome = 5;
        }
        $sql = "UPDATE ".$prefix."_bbconfig SET
        config_value = '" . $xallow_news . "'
        WHERE config_name = 'allow_news'";
    $db->sql_query($sql);
        $db->sql_query("UPDATE ".$prefix."_fna_config SET newsnumber='$xstoryhome', allownews='$xallow_news', news_trim='$xitem_trim', rss='$xrss', timezone='$xtimezone'");
        Header("Location: ".$admin_file.".php?op=forumsettings");
    break;

    case "forumtopics":
    forumtopicsmanager();
    break;

    case "forumtopicedit":
    forumtopicedit($news_id);
    break;

    case "forumtopicmake":
    forumtopicmake($news_category, $news_image);
    break;

    case "forumtopicdelete":
    forumtopicdelete($news_id, $ok);
    break;

    case "forumtopicchange":
    forumtopicchange($news_id, $news_category, $news_image);
    break;

}

} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
	echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=forumnews\">" . _FNA_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
	echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _FNA_RETURNMAIN . "</a> ]</div>\n";
	CloseTable();
	echo "<br />";
    OpenTable();
    echo "<center><strong>"._ERROR."</strong><br /><br />You do not have administration permission for module \"$module_name\"</center>";
    CloseTable();
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "function openpopup1(){\n";
echo "    window.open (\"modules/ForumNews/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=auto,resizable=no,copyhistory=no,width=400,height=230\");\n";
echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n\n";
echo "<div align=\"right\">&copy; <a href=\"javascript:openpopup1()\">ForumNews Advance</a></div><br />";
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>