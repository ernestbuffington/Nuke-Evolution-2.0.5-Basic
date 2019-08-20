<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Evolution Functions
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : modules.php
   Author        : The Nuke-Evolution Team
   Version       : 1.0.0
   Date          : 04.14.2005 (mm.dd.yyyy)

   Notes         : Modules admin
************************************************************************/

if(!defined('ADMIN_FILE')) {
   die ("Illegal File Access");
}

if(!is_mod_admin()) {
    die ("Access Denied");
}

function modadmin_title () {
    global $admin_file;

    OpenTable();
    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=modules\">" . _MODULES_ADMIN_HEADER . "</a></div>\n";
    echo "<br /><br />";
    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _MODULES_RETURNMAIN . "</a> ]</div>\n";
    CloseTable();
    echo "<br />";
}

function modadmin_get_modules ($mid='') {
    global $prefix, $db;

    $mid = (!empty($mid)) ? 'WHERE mid='.$mid : '';

    if(!$result = $db->sql_query("SELECT `mid`, `title`, `custom_title`, `active`, `view`, `inmenu`, `blocks`, `groups` FROM `".$prefix."_modules` $mid ORDER BY `mid` ASC")) {
        DisplayError(_MOD_NF_VALUES);
    }
    if (!$out = $db->sql_fetchrowset($result)) {
        DisplayError(_MOD_NF_VALUES);
    }
    $db->sql_freeresult($result);
    return $out;
}

function modadmin_activate ($module) {
    global $prefix, $db, $cache, $debugger;

    $result = $db->sql_query('SELECT active FROM '.$prefix."_modules WHERE mid=$module");
    if($db->sql_numrows($result) > 0) {
        list($active) = $db->sql_fetchrow($result);
        if(is_numeric($active)) {
            $active = intval(!$active);
            $db->sql_query('UPDATE '.$prefix."_modules SET active='$active' WHERE mid=$module");
        }
    }
    $cache->delete('active_modules');
    $cache->resync();
}

function modadmin_activate_all ($type) {
    global $prefix, $db, $cache;

    $active = ($type == 'all') ? '1;' : "0 WHERE `title` <> 'Your_Account' AND `title` <> 'Profile';";
    $sql = "UPDATE `".$prefix."_modules` SET `active`=".$active;
    $db->sql_query($sql);
    $cache->delete('active_modules');
    $cache->resync();
}

function modadmin_home ($mid) {
    global $prefix, $db, $cache;

    list($title) = $db->sql_ufetchrow("SELECT title FROM ".$prefix."_modules WHERE mid='$mid'",SQL_NUM);
    if ($title == '' || $title == 'Evo_UserBlock') {
    	return false;
    }
    $db->sql_query("UPDATE ".$prefix."_main SET main_module='$title'");
    $db->sql_query("UPDATE ".$prefix."_modules SET active=1, view=0 WHERE mid='$mid'");
    $cache->delete('main_module');
    $cache->delete('active_modules');
    $cache->resync();
}

function modadmin_dispaly_modules ($modadmin_modules) {
    global $prefix, $db, $admin_file, $bgcolor, $bgcolor2,$bgcolor3, $bgcolor4;

    if(!is_array($modadmin_modules)) DisplayError(_MOD_NF_VALUES);

    $main_module = main_module();

    OpenTable();

    OpenTable();
    echo "<div align=\"center\">"._MODULEHOMENOTE."<br /><br />"._NOTINMENU."</div>\n";
    echo "<br /><br />";
    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php?op=modules&amp;area=block\"><strong>" . _MODULES_BLOCK . "</strong></a> ]</div>\n";
    CloseTable();

    echo "<br /><br /><a href=\"".$admin_file.".php?op=modules&amp;a=all\">"._ACTIVATE." "._ALL."</a>&nbsp;|&nbsp;";
    echo "<a href=\"".$admin_file.".php?op=modules&amp;a=none\">"._DEACTIVATE." "._ALL."</a><br /><br />\n";

    echo "<form action=\"".$admin_file.".php?op=modules\" method=\"post\">\n";
    echo "<table border=\"0\" cellspacing=\"0\" width=\"100%\"><tr bgcolor=\"".$bgcolor2."\">\n";
    echo "<td align=\"center\"><strong>"._ACTIVE."</strong></td>\n";
    echo "<td align=\"center\"><strong>Home</strong></td>\n";
    echo "<td align=\"center\"><strong>"._TITLE."</strong></td>\n";
    echo "<td align=\"center\"><strong>"._CUSTOMTITLE."</strong></td>\n";
    echo "<td align=\"center\" width=\"22%\"><strong>"._VIEW."</strong></td>\n";
    echo "<td align=\"center\" width=\"9%\"><strong>"._BLOCKSSHOW."</strong></td>\n";
    echo "<td align=\"center\" width=\"12%\"><strong>"._FUNCTIONS."</strong></td></tr>\n";

    foreach ($modadmin_modules as $module) {
        if(substr($module['title'],0,3) == '~l~') {
            continue;
        }
        $bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
        $mid = $module['mid'];
        $who_view = '';
        if($module['view'] == 0 || $module['view'] == 1) {
            $who_view = _MVALL;
        } elseif($module['view'] == 2) {
            $who_view = _MVANON;
        } elseif($module['view'] == 3) {
            $who_view = _MVUSERS;
        } elseif($module['view'] == 4) {
            $who_view = _MVADMIN;
        } elseif($module['view'] == 6) {
            $groups = explode('-', $module['groups']);
            foreach ($groups as $group) {
                if (!empty($group)) {
                     $row = $db->sql_ufetchrow("SELECT group_name FROM ".$prefix.'_bbgroups WHERE group_id='.$group, SQL_NUM);
                     if (!empty($row['group_name'])) {
                         $who_view .= $row['group_name'].', ';
                     }
                }
            }
            if (!empty($who_view)) {
                $who_view = substr($who_view, 0, strlen($who_view)-2);
            }
        }

        if($module['title'] == $main_module) {
            $home = '<img src="images/home.png" alt="'._INHOME.'" title="'._INHOME.'" />';
            $active = '<img src="images/checked.gif" alt="'._ACTIVE.'" title="'._DEACTIVATE.'" border="0" />';
            $title = "<strong>".$module['title']."</strong>";
            $who_view = "<strong>".$who_view."</strong>";
            $bgcolor = ' bgcolor="'.$bgcolor4.'"';
        } else {
            $home = '<a href="'.$admin_file.'.php?op=modules&amp;h='.$mid.'"><img src="images/unchecked.gif" alt="'._INACTIVE.'" title="'._ACTIVATE.'" border="0" /></a>';
            $active = (intval($module['active'])) ? '<a href="'.$admin_file.'.php?op=modules&amp;a='.$mid.'"><img src="images/checked.gif" alt="'._ACTIVE.'" title="'._DEACTIVATE.'" border="0" /></a>' : '<a href="'.$admin_file.'.php?op=modules&amp;a='.$mid.'"><img src="images/unchecked.gif" alt="'._INACTIVE.'" title="'._ACTIVATE.'" border="0" /></a>';
            $title =  (!intval($module['inmenu'])) ? "[&nbsp;<big><strong>&middot;</strong></big>&nbsp;]&nbsp;".$module['title'] : $module['title'];
        }

        if(isset($module['blocks'])) {
            switch($module['blocks']) {
                case 0:
                    $module['blocks'] = _NONE;
                break;
                case 1:
                    $module['blocks'] = _LEFT;
                break;
                case 2:
                    $module['blocks'] = _RIGHT;
                break;
                case 3:
                    $module['blocks'] = _BOTH;
                break;
                default:
                    $module['blocks'] = '';
                break;
            }
        } else {
            $module['blocks'] = '';
        }

        echo "<tr ".$bgcolor.">\n";
        echo "<td align=\"center\">".$active."</td>\n";
        echo "<td align=\"center\">".$home."</td>\n";
        echo "<td align=\"center\"><a href=\"modules.php?name=".$module['title']."\" title=\""._SHOW."\">".$title."</a></td>\n";
        echo "<td align=\"center\">".$module['custom_title']."</td>\n";
        echo "<td align=\"center\">".$who_view."</td>\n";
        echo "<td align=\"center\">".$module['blocks']."</td>\n";
        echo "<td align=\"center\"><a href=\"".$admin_file.".php?op=modules&amp;edit=".$mid."\">"._EDIT."</a></td>";
        echo "</tr>\n";
    }
    echo "</table>\n</form>\n";
    CloseTable();
}

function modadmin_edit_module ($module) {
    global $prefix, $db, $admin_file, $cache;

    $main_module = main_module();
    $ingroups = array();

    $o1 = $o2 = $o3 = $o4 = $o6 = '';
    switch ($module['view']) {
        case 1:
            $o1 = 'SELECTED';
        break;
        case 2:
            $o2 = 'SELECTED';
        break;
        case 3:
            $o3 = 'SELECTED';
        break;
        case 4:
            $o4 = 'SELECTED';
        break;
        case 6:
            $o6 = 'SELECTED';
            $ingroups = explode('-', $module['groups']);
        break;
    }

    OpenTable();
    if(substr($module['title'],0,3) != '~l~') {
        $a = ($module['title'] == $main_module) ? ' - ('._INHOME.')' : '';

        echo "<fieldset><legend>".$module['title'].$a."</legend>";
        echo "<form method=\"post\" action=\"".$admin_file.".php?op=modules\">\n";
        echo "<label for=\"custom_title\">"._CUSTOMTITLE."</label>\n";
        echo "<input type=\"text\" name=\"custom_title\" id=\"custom_title\" value=\"".$module['custom_title']."\" size=\"30\" maxlength=\"255\" />\n<br />";

        if($module['title'] == $main_module || $module['title'] == 'Your_Account' || $module['title'] == 'Profile') {
            echo "<input type=\"hidden\" name=\"view\" value=\"0\" />\n";
        } else {
            echo "<br /><strong>" . _VIEWPRIV . "</strong> <select name=\"view\">"
             ."<option value=\"1\" $o1>" . _MVALL . "</option>"
             ."<option value=\"2\" $o2>" . _MVANON . "</option>"
             ."<option value=\"3\" $o3>" . _MVUSERS . "</option>"
             ."<option value=\"4\" $o4>" . _MVADMIN . "</option>"
            ."<option value=\"6\" $o6>"._MVGROUPS."</option>"
             ."</select><br />";
            echo "<span class='tiny'>"._WHATGRDESC."</span><br /><strong>"._WHATGROUPS."</strong> <select name='add_groups[]' multiple size='5'>\n";
            $groupsResult = $db->sql_query("select group_id, group_name from ".$prefix."_bbgroups where group_description <> 'Personal User'");
            while(list($gid, $gname) = $db->sql_fetchrow($groupsResult)) {
                if(in_array($gid,$ingroups) AND $module['view'] == 5) { $sel = "selected"; } else { $sel = ""; }
                echo "<OPTION VALUE='$gid'$sel>$gname</option>\n";
            }
            echo "</select><br /><br />\n";
        }
        echo "<label for=\"blocks\">"._BLOCKSSHOW."</label>&nbsp;".select_box('blocks', $module['blocks'], array("0"=>_NONE, "1"=>_LEFT, "2"=>_RIGHT, "3"=>_BOTH))."\n<br />";
        echo '<label for="inmenu">'._SHOWINMENU.'</label>'.yesno_option('inmenu',  $module['inmenu']).'<br />';

        echo "<input type=\"hidden\" name=\"save\" value=\"".$module['mid']."\" />\n";
        echo "<input type=\"submit\" value=\""._SAVECHANGES."\" />\n</form>\n</fieldset>\n";
    } else {
        $title = substr($module['title'],3);
        echo "<fieldset><legend>".$title."</legend>";
        echo "<form method=\"post\" action=\"".$admin_file.".php?op=modules\">\n";
        echo _MOD_CAT_LINK_TITLE.":&nbsp;<input type=\"text\" name=\"title\" id=\"linktitle\" value=\"".$title."\" size=\"30\" maxlength=\"30\" />\n<br />";
        echo _URL.":&nbsp;<input type=\"text\" name=\"custom_title\" id=\"link\" value=\"".$module['custom_title']."\" size=\"30\" maxlength=\"100\" />\n<br />";
        echo "<br /><strong>" . _VIEWPRIV . "</strong> <select name=\"view\">"
         ."<option value=\"1\" $o1>" . _MVALL . "</option>"
         ."<option value=\"2\" $o2>" . _MVANON . "</option>"
         ."<option value=\"3\" $o3>" . _MVUSERS . "</option>"
         ."<option value=\"4\" $o4>" . _MVADMIN . "</option>"
         ."<option value=\"6\" $o6>"._MVGROUPS."</option>"
         ."</select><br />";
        echo "<span class='tiny'>"._WHATGRDESC."</span><br /><strong>"._WHATGROUPS."</strong> <select name='add_groups[]' multiple size='5'>\n";
        $groupsResult = $db->sql_query("select group_id, group_name from ".$prefix."_bbgroups where group_description <> 'Personal User'");
        while(list($gid, $gname) = $db->sql_fetchrow($groupsResult)) {
            if(in_array($gid,$ingroups) AND $module['view'] == 6) { $sel = "selected"; } else { $sel = ""; }
            echo "<OPTION VALUE='$gid'$sel>$gname</option>\n";
        }
        echo "</select><br /><br />\n";
        $groupsResult = $db->sql_query("select group_id, group_name from ".$prefix."_bbgroups where group_description <> 'Personal User'");
        while(list($gid, $gname) = $db->sql_fetchrow($groupsResult)) { echo "<OPTION VALUE='$gid'>$gname</option>\n"; }
        echo "</select><br />\n";
        echo "<input type=\"hidden\" name=\"link\" value=\"1\" />\n";
        echo "<input type=\"hidden\" name=\"save\" value=\"".$module['mid']."\" />\n";
        echo "<input type=\"submit\" value=\""._SAVECHANGES."\" />\n</form>\n</fieldset>\n";
    }

    CloseTable();
}

function modadmin_edit_save ($mid) {
    global $prefix, $db, $admin_file, $cache;
    $ingroups = array();
    if($_POST['view'] == 6) {
        if (!isset($_POST['add_groups']) || empty($_POST['add_groups'])) {
            DisplayError(_MOD_ERROR_GROUPS);
        }
        $ingroups = implode("-", $_POST['add_groups']);
    }
    if(isset($_POST['link'])) {
        Validate($_POST['custom_title'], 'url', 'modules');
        $view = intval($_POST['view']);
        $title = '~l~'.Fix_Quotes($_POST['title']);
        $custom_title = Fix_Quotes($_POST['custom_title']);
        $db->sql_query("UPDATE `".$prefix."_modules` SET `custom_title`='$custom_title', `title`='$title', `view`=$view, `groups`='$ingroups' WHERE `mid`=$mid");
    } else {
        $view = intval($_POST['view']);
        $inmenu = intval($_POST['inmenu']);
        $blocks = intval($_POST['blocks']);
        $custom_title = Fix_Quotes($_POST['custom_title']);
        $db->sql_query("UPDATE `".$prefix."_modules` SET `custom_title`='$custom_title', `view`=$view, `inmenu`=$inmenu, `blocks`=$blocks, `groups`='$ingroups' $title WHERE `mid`=$mid");
    }
}

function modadmin_get_inactive () {
    global $prefix, $db, $cache;

    if(!$result = $db->sql_query("SELECT `mid`, `title`, `custom_title`, `active`, `view`, `inmenu`, `blocks` FROM `".$prefix."_modules` WHERE `cat_id`=0 AND `inmenu`<>0 ORDER BY `pos` ASC")) {
        DisplayError(_MOD_NF_VALUES);
    }
    $out = $db->sql_fetchrowset($result);
    $db->sql_freeresult($result);
    return $out;
}

function modadmin_ajax_header () {
    global $element_ids, $modadmin_module_cats;
    foreach ($modadmin_module_cats as $cat) {
        if ($cat['cid'] == 1) {
            continue;
        }
        $element_ids[] = 'ul'.$cat['cid'];
    }
    $element_ids[] = 'left_col';
    include_once(NUKE_BASE_DIR.'header.php');
}

function modadmin_block () {
    global $lang_evo_userblock, $admin_file, $module_collapse, $Default_Theme, $module_name, $board_config, $userinfo, $modadmin_module_cats, $bgcolor2;

    $inactive = modadmin_get_inactive();

    $total = count($modadmin_module_cats);

    OpenTable();
    //Notes
    OpenTable();
    echo "<div align=\"center\">\n";
    echo "<span style=\"background-color : #ff6c6c;\">"._MOD_TITLE."</span>&nbsp;-&nbsp;"._MOD_INACTIVE."<br />\n";
    echo "<span style=\"color: blue;\">"._MOD_TITLE."</span>&nbsp;-&nbsp;"._MOD_LINK."<br />\n";
    echo "<img src=\"images/admin/modules/delete.gif\" border=\"0\" alt=\"\">&nbsp;-&nbsp;"._MOD_LINK_DELETE."<br />\n";
    echo "<img src=\"images/admin/modules/deletecat.gif\" border=\"0\" alt=\""._MOD_CAT_DELETE."\">&nbsp;-&nbsp;"._MOD_CAT_DELETE."<br />";
    echo "<img src=\"images/admin/modules/edit.gif\" border=\"0\" alt=\"\">&nbsp;-&nbsp;"._MODULEEDIT."<br />\n";
    echo "<img src=\"images/admin/modules/up.gif\" border=\"0\" alt=\"\"><img src=\"images/admin/modules/down.gif\" border=\"0\" alt=\"\">&nbsp;-&nbsp;"._MOD_CAT_ORDER."<br /><br />\n";
    echo _MOD_EXPLAIN;
    echo "<br /><br />";
    echo "<input type=\"submit\" value=\"Refresh Screen\" onclick=\"window.location.reload()\" />";
    echo "<br /><br />";
    echo _MOD_EXPLAIN2;
    echo "</div>\n";
    CloseTable();
    echo "<br />";

    //Config
    OpenTable();
    echo "<div align=\"center\">\n";
    echo "<form action=\"".$admin_file.".php?op=modules&amp;area=block\" method=\"post\">\n";
    echo "<table border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">\n";
    echo "<tr><td align=\"right\">\n";
    echo _MOD_COLLAPSE;
    echo "</td><td align=\"left\">\n";
    echo yesno_option('collapse',$module_collapse);
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<br />";
    echo "<input type=\"submit\" value=\""._SUBMIT."\" />";
    echo "</form>\n";
    echo "</div>\n";
    CloseTable();

    echo "<br />";
    echo "<div align=\"center\">\n";
    echo "<table width=\"80%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n";
    //Inactive
    echo "<tr><td width=\"33%\" align=\"center\" rowspan=\"1\">\n";
    echo "<div align=\"center\"><span style=\"font-weight: bold;\">N/A</span></div>";
    echo "<ul id=\"left_col\" class=\"sortable boxy\">\n";
    if(is_array($inactive)) {
        foreach ($inactive as $element) {
            $custom_title = (substr($element['title'],0,3) == '~l~') ? "<span style=\"color: blue;\">".substr($element['title'],3)."</span>&nbsp;&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;delete=".$element['mid']."\"><img src=\"images/admin/modules/delete.gif\" border=\"0\" alt=\"\"></a>" : $element['custom_title'];
            $custom_title .= "&nbsp;&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;edit=".$element['mid']."\"><img src=\"images/admin/modules/edit.gif\" border=\"0\" alt=\""._MODULEEDIT."\"></a>";

            echo "<li class=\"" . (($element['active'] == 1) ? "active" : "inactive")."\" id=\"mod".$element['mid']."\" ondblclick=\"change_status('".$element['mid']."')\">".$custom_title."</li>\n";
        }
    }
    echo "</ul>\n";
    echo "</td>\n";
    echo "<td align=\"center\">\n";
    //Active
    if(is_array($modadmin_module_cats)) {
        global $db, $prefix;
        $i = 0;
        foreach ($modadmin_module_cats as $cat) {
            if ($cat['cid'] == 1) {
                continue;
            }
            $i++;
            if($i == count($modadmin_module_cats)) {
                $updown = "<a href=\"".$admin_file.".php?op=modules&amp;upcat=".$cat['pos']."\"><img src=\"images/admin/modules/up.gif\" border=\"0\" alt=\"\"></a>";
            } else if($i != 1) {
                $updown = "<a href=\"".$admin_file.".php?op=modules&amp;downcat=".$cat['pos']."\"><img src=\"images/admin/modules/down.gif\" border=\"0\" alt=\"\"></a><a href=\"".$admin_file.".php?op=modules&amp;upcat=".$cat['pos']."\"><img src=\"images/admin/modules/up.gif\" border=\"0\" alt=\"\"></a>";
            } else if($i == 1) {
                $updown = "<a href=\"".$admin_file.".php?op=modules&amp;downcat=".$cat['pos']."\"><img src=\"images/admin/modules/down.gif\" border=\"0\" alt=\"\"></a>";
            }
            echo "<span style=\"font-weight: bold; text-align: 'center';\">".$cat['name']."&nbsp;&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;editcat=".$cat['cid']."\"><img src=\"images/admin/modules/edit.gif\" border=\"0\" alt=\""._MOD_CAT_EDIT."\">&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;deletecat=".$cat['cid']."\"><img src=\"images/admin/modules/deletecat.gif\" border=\"0\" alt=\""._MOD_CAT_DELETE."\"></a>&nbsp;".$updown."</span>";
            echo "<ul id=\"ul".$cat['cid']."\" class=\"sortable boxy\">\n";
            $sql = 'SELECT * FROM `'.$prefix.'_modules` WHERE cat_id='.$cat['cid'].' AND `inmenu`<>0 ORDER BY `pos` ASC';
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result)) {
                $custom_title = (substr($row['title'],0,3) == '~l~') ? "<span style=\"color: blue;\">".substr($row['title'],3)."</span>&nbsp;&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;delete=".$row['mid']."\"><img src=\"images/admin/modules/delete.gif\" border=\"0\" alt=\"\"></a>" : $row['custom_title'];
                $custom_title .= "&nbsp;&nbsp;<a href=\"".$admin_file.".php?op=modules&amp;edit=".$row['mid']."\"><img src=\"images/admin/modules/edit.gif\" border=\"0\" alt=\""._MODULEEDIT."\"></a>";

                echo "<li class=\"" . (($row['active'] == 1) ? "active" : "inactive") . "\" id=\"mod".$row['mid']."\" ondblclick=\"change_status('".$row['mid']."')\">".$custom_title."</li>\n";
            }
            $db->sql_freeresult($result);
            echo "</ul>\n";
        }
    }
    echo "</td></tr>\n";
    echo "<tr>\n";
    echo "<td colspan=\"3\" align=\"center\">";
    echo "<form action=\"\" method=\"post\">
              <br />
              <input type=\"hidden\" name=\"order\" id=\"order\" value=\"\" />
              <input type=\"submit\" onclick=\"getSort()\" value=\""._SUBMIT."\" />
          </form>";
    echo "</td></tr>\n";
    echo "</table><br /><br />\n";

    echo "<table width=\"50%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n";
    echo "<tr><td align=\"center\" bgcolor=\"".$bgcolor2."\">\n<br />";
    echo _MOD_CAT_IMG_NOTE."\n<br /><br />";
    echo "<form action=\"".$admin_file.".php?op=modules&amp;area=block\" method=\"post\">\n";
    echo _MOD_CAT_TITLE.":&nbsp;<input type=\"text\" name=\"cat\" id=\"cat\" value=\"\" size=\"30\" maxlength=\"30\" />\n<br />";
    echo _MOD_CAT_IMG.":&nbsp;<input type=\"text\" name=\"catimage\" id=\"catimage\" value=\"\" size=\"30\" maxlength=\"50\" />\n<br />";
    echo "<input type=\"submit\" value=\""._SUBMIT."\" />";
    echo "</form>\n";
    echo "</td></tr>";

    echo "<tr><td align=\"center\" bgcolor=\"".$bgcolor2."\">\n";
    echo "<form action=\"".$admin_file.".php?op=modules&amp;area=block\" method=\"post\">\n";
    echo _MOD_CAT_LINK_TITLE.":&nbsp;<input type=\"text\" name=\"linktitle\" id=\"linktitle\" value=\"\" size=\"30\" maxlength=\"30\" />\n<br />";
    echo _URL.":&nbsp;<input type=\"text\" name=\"link\" id=\"link\" value=\"\" size=\"30\" maxlength=\"100\" />\n<br />";
    echo "<input type=\"submit\" value=\""._SUBMIT."\" />";
    echo "</form>\n";
    echo "</td></tr>";
    echo "</table>\n";

    echo "</div>";
    CloseTable();
}

function modadmin_get_module_cats () {
    global $modadmin_module_cats, $prefix, $db, $cache;
    static $cats;
    if (isset($cats) && is_array($cats)) $modadmin_module_cats = $cats;

    if((($cats = $cache->load('module_cats', 'config')) === false) || !isset($cats)) {
        if(!$result = $db->sql_query("SELECT `cid`, `name`, `image`, `pos`, `link_type`, `link` FROM `".$prefix."_modules_cat` WHERE `name`<>'Home' ORDER BY `pos` ASC")) {
            DisplayError(_MOD_NF_VALUES);
        }
        if (!$cats = $db->sql_fetchrowset($result)) {
            DisplayError(_MOD_NF_VALUES);
        }
        $db->sql_freeresult($result);
        $cache->save('module_cats', 'config', $cats);
    }
    $modadmin_module_cats = $cats;
}

function modadmin_parse_data($data) {
  $containers = explode(":", $data);

  foreach($containers AS $container)
  {
      $container = str_replace(")", "", $container);
      $i = 0;
      $lastly = explode("(", $container);
      $values = explode(",", $lastly[1]);
      foreach($values AS $value)
      {
        if($value == '')
        {
            continue;
        }
        $key = str_replace('ul', '', $lastly[0]);
        $value = str_replace('mod','',$value);
        $final[$key][] = $value;
        $i ++;
      }
  }
  return $final;
}

function modadmin_write_cats ($data) {
    global $db, $prefix, $cache;

    if(is_array($data)) {
        foreach ($data as $key => $modules) {
            $i = 0;
            foreach ($modules as $id) {
                $key = ($key == 'left_col') ? '0' : $key;
                $sql = 'UPDATE `'.$prefix.'_modules` SET `cat_id`='.$key.', `pos`='.$i.' WHERE `mid`="'.$id.'"';
                $db->sql_query($sql);
                $i++;
            }
        }
    }
    $cache->delete('module_cats');
    $cache->resync();
}

function modadmin_new_cat ($name, $image) {
    global $db, $prefix, $cache;

    $result = $db->sql_query('SELECT COUNT(*) FROM `'.$prefix.'_modules_cat`');
    $num = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);
    $name = Fix_Quotes($name);
    $image = Fix_Quotes($image);
    $sql = 'INSERT INTO `'.$prefix.'_modules_cat` VALUES ("","'.$name.'","'.$image.'",'.($num[0]+1).', 0, "")';
    $result = $db->sql_query($sql);
    $cache->delete('module_cats');
    $cache->resync();
}

function modadmin_delete_cat ($cid) {
    global $db, $prefix, $cache;

    $sql = 'DELETE FROM `'.$prefix.'_modules_cat` WHERE `cid`='.$cid;
    $db->sql_query($sql);
    $sql = 'UPDATE `'.$prefix.'_modules` SET `cat_id`=0 WHERE `cat_id`='.$cid;
    $db->sql_query($sql);
    $cache->delete('module_cats');
    $cache->resync();
}

function modadmin_move_cat ($pos, $up) {
    global $db, $prefix, $cache;

    $where = ($up) ? ($pos - 1) : ($pos + 1);
    $sql = "UPDATE `".$prefix."_modules_cat` SET `pos`=127 WHERE `pos`=".$where;
    $db->sql_query($sql);
    $sql = "UPDATE `".$prefix."_modules_cat` SET `pos`=".$where." WHERE `pos`=".$pos;
    $db->sql_query($sql);
    $sql = "UPDATE `".$prefix."_modules_cat` SET `pos`=".$pos." WHERE `pos`=127";
    $db->sql_query($sql);
    $cache->delete('module_cats');
    $cache->resync();
}

function modadmin_edit_cat($cat) {
    global $prefix, $db, $admin_file, $cache;

    $cat = Fix_Quotes($cat);
    if(!is_numeric($cat)) {
        DisplayError(_MOD_ERROR_CAT_NF);
    }
    $result = $db->sql_query('SELECT name, image FROM `'.$prefix.'_modules_cat` WHERE `cid` = '.$cat);
    $row = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);

    if(!isset($row[0]) || empty($row[0])) {
        DisplayError(_MOD_ERROR_CAT_NF);
    }

    $name = $row[0];
    $image = $row[1];

    include_once(NUKE_BASE_DIR.'header.php');
    modadmin_title();
    OpenTable();
    echo "<fieldset><legend>"._MOD_CAT_EDIT."</legend>";
    echo "<form method=\"post\" action=\"".$admin_file.".php?op=modules\">\n";
    echo _MOD_CAT_TITLE.":&nbsp;<input type=\"text\" name=\"cattitle\" id=\"title\" value=\"".$name."\" size=\"30\" maxlength=\"30\" />\n<br />";
    echo _MOD_CAT_IMG.":&nbsp;<input type=\"text\" name=\"catimage\" id=\"image\" value=\"".$image."\" size=\"30\" />\n<br />";
    echo "<input type=\"hidden\" name=\"catsave\" value=\"".$cat."\" />\n";
    echo "<input type=\"submit\" value=\""._SAVECHANGES."\" />\n</form>\n</fieldset>\n";
    CloseTable();
}

function modadmin_edit_cat_save($cat, $name, $image) {
    global $prefix, $db, $admin_file, $cache;

    $name = Fix_Quotes($name);
    $image = Fix_Quotes($image);
    $cat = Fix_Quotes($cat);
    if(!is_numeric($cat)) {
        DisplayError(_MOD_ERROR_CAT_NF);
    }

    $sql = "UPDATE `".$prefix."_modules_cat` SET `name`=\"".$name."\", `image`=\"".$image."\" WHERE `cid`=".$cat;
    $db->sql_query($sql);
    $cache->delete('module_cats');
}

function modadmin_new_link ($title, $link) {
    global $db, $prefix, $cache;

    if(empty($title) || empty($link)) DisplayError(_MOD_ERROR_TITLE);

    $title = Fix_Quotes($title);
    $link = Fix_Quotes($link);
    Validate($link, 'url', 'modules');
    $sql = 'INSERT INTO `'.$prefix.'_modules` VALUES ("","~l~'.$title.'","'.$link.'",0,0,1,0,0,1,"","")';
    $db->sql_query($sql);
    $cache->delete('module_links');
    $cache->resync();
}

function modadmin_delete_link ($mid) {
    global $db, $prefix, $cache;

    $sql = 'DELETE FROM `'.$prefix.'_modules` WHERE `mid`='.$mid.' AND `title` LIKE "~l~%"';
    $db->sql_query($sql);
    $cache->delete('module_links');
    $cache->resync();
}

function modadmin_add_scripts() {
    global $Sajax;
    $script .= "function module_activate(mid) {
                    x_modadmin_activate(mid, confirm);
                    window.location.reload();
                }\n";
    $script .= "function change_status(bid) {
            var elem = document.getElementById(\"mod\"+bid);
            elem.className = ((elem.className == \"active\") ? \"inactive\" : \"active\");
            x_modadmin_activate(bid, confirm);
            }\n";
    $script .= "    function onDrop() {
                var data = DragDrop.serData('g2');
                x_sajax_update(data, confirm);
            }\n";
    $script .= "function getSort()
                {
                  order = document.getElementById(\"order\");
                  order.value = DragDrop.serData('g1', null);
                }\n";
    $script .= "function showValue()
                {
                  order = document.getElementById(\"order\");
                  alert(order.value);
                }\n";
    $Sajax->sajax_add_script($script);
}

/*~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-*/

if(isset($_GET['a'])) {
   (intval($_GET['a'])) ? modadmin_activate(intval($_GET['a'])) :  modadmin_activate_all($_GET['a']);
}

if(isset($_GET['h'])) {
   (intval($_GET['h'])) ? modadmin_home(intval($_GET['h'])) :  '';
}

if(isset($_POST['save'])) {
    modadmin_edit_save(intval($_POST['save']));
}

if(isset($_POST['cat'])) {
    if(!empty($_POST['cat'])) {
        modadmin_new_cat($_POST['cat'], $_POST['catimage']);
    }
}

if(isset($_POST['linktitle']) && isset($_POST['link'])) {
    if(!empty($_POST['linktitle']) && !empty($_POST['link'])) {
        modadmin_new_link($_POST['linktitle'], $_POST['link']);
    }
}

if (isset($_POST['order']))
{
    $data = modadmin_parse_data($_POST['order']);
    modadmin_write_cats($data);
    // redirect so refresh doesnt reset order to last save
    redirect($admin_file.".php?op=modules&area=block");
}

if(isset($_GET['delete'])) {
    modadmin_delete_link($_GET['delete']);
    redirect($admin_file.".php?op=modules&area=block");
}

if(isset($_GET['deletecat'])) {
    modadmin_delete_cat($_GET['deletecat']);
    redirect($admin_file.".php?op=modules&area=block");
}

if(isset($_GET['upcat']) || isset($_GET['downcat'])) {
    $up = (isset($_GET['upcat'])) ? 1 : 0;
    modadmin_move_cat((isset($_GET['upcat'])) ? $_GET['upcat'] : $_GET['downcat'], $up);
    redirect($admin_file.".php?op=modules&area=block");
}

if(isset($_POST['collapse']) && is_int(intval($_POST['collapse']))) {
    global $db, $prefix, $module_collapse, $cache;
    $db->sql_query('UPDATE `'.$prefix.'_evolution` SET `evo_value`="'.intval($_POST['collapse']).'" WHERE `evo_field`= "module_collapse"');
    $module_collapse = intval($_POST['collapse']);
    $cache->delete('evoconfig');
    $cache->resync();
}

if(isset($_GET['editcat'])) {
    modadmin_edit_cat($_GET['editcat']);
    include_once(NUKE_BASE_DIR.'footer.php');
    die();
}

if(isset($_POST['catsave'])) {
    modadmin_edit_cat_save($_POST['catsave'], $_POST['cattitle'], $_POST['catimage']);
    redirect($admin_file.".php?op=modules&area=block");
}

switch ($area) {
    case 'block':
        define('USE_DRAG_DROP', true);
        require_once(NUKE_INCLUDE_DIR.'ajax/Sajax.php');
        global $Sajax;
        $Sajax = new Sajax();
        $Sajax->sajax_export("sajax_update", "modadmin_activate");
        $Sajax->sajax_handle_client_request();
        modadmin_add_scripts();
        global $modadmin_module_cats;
        modadmin_get_module_cats();
        modadmin_ajax_header();
        modadmin_title();
        modadmin_block();
    break;

    default:
        include_once(NUKE_BASE_DIR.'header.php');
        modadmin_title();
        $modadmin_modules = modadmin_get_modules(intval($_GET['edit']));
        (!isset($_GET['edit'])) ? modadmin_dispaly_modules($modadmin_modules) : modadmin_edit_module($modadmin_modules[0]);
    break;
}

include_once(NUKE_BASE_DIR.'footer.php');

?>