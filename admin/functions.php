<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/*                                                                      */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
      NukeSentinel                             v2.5.00      07/11/2006
      Caching System                           v1.0.0       10/31/2005
      Module Simplifications                   v1.0.0       11/17/2005
      Evolution Functions                      v1.5.0       12/14/2005
-=[Other]=-
      Admin Field Size                         v1.0.0       06/02/2005
      Need To Delete                           v1.0.0       06/03/2005
      Date Fix                                 v1.0.0       06/20/2005
-=[Mod]=-
      Admin Icon/Link Pos                      v1.0.0       06/02/2005
      Admin Tracker                            v1.0.1       06/08/2005
      Advanced Username Color                  v1.0.6       06/13/2005
      Advanced Security Code Control           v1.0.0       12/17/2005
      Password Strength Meter                  v1.0.0       07/12/2005
      Auto Admin Protector                     v2.0.0       08/18/2005
      Evolution Version Checker                v1.1.0       08/21/2005
      Auto Admin Login                         v2.0.1       08/27/2005
      Auto First User Login                    v1.0.0       08/27/2005
      Persistent Admin Login                   v2.0.0       12/10/2005
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

/*****[BEGIN]******************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/
function need_delete($file, $dir=false) {
  // will be uncommented for release
  if (!$dir) {
    if(!is_file($file)) {
        return;
    }
    DisplayError("<span style='color: red; font-size: 24pt'>"._NEED_DELETE." ".$file."</span>");
  } else {
    if(!is_dir($file)) {
        return;
    }
    DisplayError("<span style='color: red; font-size: 24pt'>"._NEED_DELETE." the folder \"".$file."\"</span>");
  }
}
/*****[END]********************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/
function create_first($name, $url, $email, $pwd, $user_new, $cpwd) {
    global $prefix, $db, $user_prefix, $admin_file, $language, $cache, $Default_Theme;
    if($cpwd != $pwd) {
        DisplayError("<center><p style='color:red'>"._ERROR."</p>"._PASS_NOT_MATCH."</center>");
    }
/*****[END]********************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/
    Validate($email, 'email', 'Admin Setup', 0, 1, 0, 0, '', '<br /><center>'. _GOBACK .'</center>');
    Validate($name, 'username', 'Admin Setup', 0, 1, 0, 2, 'Nickname:', '<br /><center>'. _GOBACK .'</center>');
    Validate($url, 'url', 'Admin Setup', 0, 0, 0, 0, '', '<br /><center>'. _GOBACK .'</center>');
/*****[BEGIN]******************************************
 [ Mod:    Admin Tracker                       v1.0.1 ]
 ******************************************************/
    log_write('admin', 'God Admin (' . $name . ') was created', 'General Information');
/*****[END]********************************************
 [ Mod:    Admin Tracker                       v1.0.1 ]
 ******************************************************/
    list($first) = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) FROM `".$prefix."_authors`"));
    if ($first == 0) {
        $pwd = md5($pwd);
        $the_adm = 'God';
        $email = validate_mail($email);
        $db->sql_query("INSERT INTO `".$prefix."_authors` VALUES ('$name', '$the_adm', '$url', '$email', '$pwd', '0', '1', '')");
/*****[BEGIN]******************************************
 [ Mod:    Auto Admin Protection               v2.0.0 ]
 ******************************************************/
        $db->sql_query("INSERT INTO `".$prefix."_nsnst_admins` (`aid`, `login`, `protected`) VALUES ('$name', '$name', '1')");
/*****[END]********************************************
 [ Mod:    Auto Admin Protection               v2.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Auto Admin Login                    v2.0.0 ]
 ******************************************************/
        $cookiedata = base64_encode("$name:$pwd:english:1");
        if(defined('SSL_MODE')) {
            setcookie('admin',$cookiedata,time()+2592000, "", "", 1);
        } else {
            setcookie('admin',$cookiedata,time()+2592000);
        }
/******************************************************
 [ Mod:    Auto Admin Login                    v2.0.0 ]
 ******************************************************/
        if ($user_new == 1) {
/*****[BEGIN]******************************************
 [ Mod:    Auto First User Login               v1.0.0 ]
 ******************************************************/
                $uid = 2;
                $cookiedata = base64_encode("$uid:$name:$pwd");
                setcookie('user',$cookiedata,time()+2592000);
/*****[END]********************************************
 [ Mod:    Auto First User Login               v1.0.0 ]
 ******************************************************/
                $user_regdate = date('M d, Y');
                $user_avatar = 'blank.gif';
                $commentlimit = 4096;
                if ($url == 'http://') { $url = ''; }
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.6 ]
 ******************************************************/
                $boardconfig = load_board_config();
                $defaultlang = (!($boardconfig['default_lang'])) ? 'english' : $boardconfig['default_lang'];
                $defaultdateformat = (!($boardconfig['default_dateformat'])) ? 'D M d, Y g:i a' : $boardconfig['default_dateformat'];
                $db->sql_query("INSERT INTO `".$user_prefix."_users` (`user_id`, `username`, `user_email`, `user_website`, `user_avatar`, `user_regdate`, `user_password`, `theme`, `commentmax`, `user_level`, `user_lang`, `user_dateformat`, `user_color_gc`, `user_color_gi`, `user_posts`) VALUES ('','".$name."','".$email."','".$url."','".$user_avatar."','".$user_regdate."','".$pwd."','".$Default_Theme."','".$commentlimit."', '2', '".$defaultlang."','".$defaultdateformat."','FFA34F','--1--', '1')");
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.6 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
                $cache->delete('UserColors', 'config');
/*****[END]********************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
        }
/*****[BEGIN]******************************************
 [ Mod:    Auto Admin Login                    v2.0.0 ]
 ******************************************************/
        redirect($admin_file.".php");
/*****[END]********************************************
 [ Mod:    Auto Admin Login                    v2.0.0 ]
 ******************************************************/
    }
}

function login() {
    global $admin_file, $db, $prefix;
    include(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo '<fieldset><legend><strong>'._ADMINLOGIN.'</strong></legend><form method="post" action="'.$admin_file.'.php">'
        ."<br /><table border=\"0\">"
        ."<tr><td>"._ADMINID."</td>"
        ."<td><input type=\"text\" name=\"aid\" size=\"20\" maxlength=\"25\"></td></tr>"
        ."<tr><td>"._PASSWORD."</td>"
        ."<td><input type=\"password\" name=\"pwd\" size=\"20\" maxlength=\"40\"></td></tr>";
/*****[BEGIN]******************************************
 [ Mod:     Advanced Security Code Control     v1.0.0 ]
 ******************************************************/
    $gfxchk = array(1,5,6,7);
    echo security_code($gfxchk, 'large');
/*****[END]********************************************
 [ Mod:     Advanced Security Code Control     v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Persistent Admin Login              v2.0.0 ]
 ******************************************************/
    echo "<tr><td colspan=\"2\">"._PERSISTENT.":"
        ."<input type=\"checkbox\" name=\"persistent\" value=\"1\" checked=\"checked\">"
        ."</td></tr>";
/*****[END]********************************************
 [ Mod:    Persistent Admin Login              v2.0.0 ]
 ******************************************************/
    echo "<tr><td><br />"
        ."<input type=\"hidden\" name=\"op\" value=\"login\">"
        ."<input type=\"submit\" value=\""._LOGIN."\">"
        ."</td></tr></table>"
        ."</form></fieldset>";
    CloseTable();
    include(NUKE_BASE_DIR.'footer.php');
}
function deleteNotice($id) {
    global $prefix, $db, $admin_file, $cache;
    $id = intval($id);
    $db->sql_query("DELETE FROM `".$prefix."_reviews_add` WHERE `id` = '$id'");
/*****[BEGIN]******************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
    $cache->delete('numwaitreviews', 'submissions');
/*****[END]********************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
    redirect($admin_file.".php?op=reviews");
}

function adminmenu($url, $title, $image) {
    global $counter, $admingraphic, $Default_Theme;
    $ThemeSel = get_theme();
    $image = (file_exists(NUKE_THEMES_DIR.$ThemeSel.'/images/admin/'.$image)) ? NUKE_THEMES_DIR.$ThemeSel.'/images/admin/'.$image : 'images/admin/'.$image;
    $img = ($admingraphic) ? "<img src=\"$image\" border=\"0\" alt=\"$title\" title=\"$title\" /></a><br />" : '';
    $close = ($admingraphic) ? '' : '</a>';
    echo "<td align=\"center\" valign=\"top\" width=\"10%\"><span class=\"content\"><a href=\"$url\">$img<strong>$title</strong>$close<br /><br /></span></td>";
    if ($counter == 6) echo '</tr><tr>';
    $counter = ($counter == 6) ? 0 : $counter + 1;
}

/*****[BEGIN]******************************************
 [ Mod:    Admin Icon/Link Pos                 v1.0.0 ]
 ******************************************************/
function GraphicAdmin($pos=1) {
    global $aid, $admingraphic, $language, $admin, $prefix, $db, $counter, $admin_file, $admin_pos, $admdata, $radminsuper;
    if($pos != $admin_pos) {
        return;
    }
/*****[END]********************************************
 [ Mod:    Admin Icon/Link Pos                 v1.0.0 ]
 ******************************************************/
    $radminsuper = is_mod_admin();
    if (is_mod_admin('super')) {
        OpenTable();
        echo "<center><a href=\"".$admin_file.".php\"><font size='3' class='title'><strong>"._ADMINMENU."</strong></font></a>";
        echo "<br /><br /><br />";
        echo"<table border=\"0\" width=\"100%\" cellspacing=\"1\"><tr>";
        $linksdir = opendir(NUKE_ADMIN_DIR.'links');
        $menulist = "";
        while(false !== ($func = readdir($linksdir))) {
            if(substr($func, 0, 6) == 'links.') {
                $menulist .= $func.' ';
            }
        }
        closedir($linksdir);
        $menulist = explode(' ', $menulist);
        sort($menulist);
        for ($i=0, $maxi = count($menulist); $i < $maxi; $i++) {
            if(!empty($menulist[$i])) {
                include(NUKE_ADMIN_DIR.'links/'.$menulist[$i]);
            }
        }
        adminmenu($admin_file.'.php?op=logout', _ADMINLOGOUT, 'logout.png');
        echo"</tr></table></center>";
        $counter = "";
        CloseTable();
        echo "<br />";
    }
    OpenTable();
    echo "<center><a href=\"".$admin_file.".php\"><font size='3' class='title'><strong>"._MODULESADMIN."</strong></font></a>";
    echo "<br /><br /><br />";
    echo"<table border=\"0\" width=\"100%\" cellspacing=\"1\"><tr>";
/*****[BEGIN]******************************************
 [ Base:    Module Simplifications             v1.0.0 ]
 ******************************************************/
    update_modules();
/*****[END]********************************************
 [ Base:    Module Simplifications             v1.0.0 ]
 ******************************************************/
    $result = $db->sql_query("SELECT title FROM ".$prefix."_modules ORDER BY title ASC");
    while($row = $db->sql_fetchrow($result)) {
        if (is_mod_admin($row['title'])) {
            if (file_exists(NUKE_MODULES_DIR.$row['title']."/admin/index.php") AND file_exists(NUKE_MODULES_DIR.$row['title']."/admin/links.php") AND file_exists(NUKE_MODULES_DIR.$row['title']."/admin/case.php")) {
                include(NUKE_MODULES_DIR.$row['title']."/admin/links.php");
            }
        }
    }
    echo"</tr></table></center>";
    CloseTable();
    echo '<br />';
}

function evo_site_down() {
    //Set the address
    $url = 'http://www.nuke-evolution.com/version_'.CUR_EVO.'.txt';
    $address = parse_url($url);
    $host = $address['host'];
    if (!($ip = @gethostbyname($host))) return false;
    if (@fsockopen($host, 80, $errno, $errdesc, 10) === false) return false;
    return true;
}

?>