<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

//####################::GnaUnited.com Presents::####################\\
//  Project: My Uploads                                             \\
//  Public Version: 4.4 Unregistered                                \\
//  Technical Version: 4.4.0                                        \\
//  Package Name: Uploads4.4.UNREG.ZIP                              \\
//  License: Commercial                                             \\
//##################################################################\\

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       07/14/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

global $prefix, $db;

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

        class uploads_admin {
                var $prefix;
                var $db;
                var $user_prefix;
                var $version;

                function uploads_admin($prefix, $db, $user_prefix, $version, $module_name, $op) {
                        $this->prefix = $prefix;
                        $this->db = $db;
                        $this->user_prefix = $user_prefix;
                        $this->version = $version;
                        $this->module_name = $module_name;
                        $sql = "SELECT * FROM ".$this->prefix."_uploads";
                        if(!$res = $this->db->sql_query($sql, FALSE)) {
                                $this->uploads_install();
                                exit;
                        }
                        if($this->db->sql_numrows($res) == 0) {
                                $this->uploads_install();
                                exit;
                        }
                        while($row = $this->db->sql_fetchrow($res)) {
                                if($row['type'] == "limit") $this->maxlimit = $row['info'];
                                if($row['type'] == "directory") $this->direct = $row['info'];
                                if($row['type'] == "howtoban") $this->howtoban = $row['info'];
                                if($row['type'] == "url") $this->url = $row['info'];
                                if($row['type'] == "version") $this->installed_version = $row['info'];
                                if($row['type'] == "user_type") $this->allow_all = $row['info'];
                        }
                }

                function uploads($myutimeframe) {
                        global $admin_file;
                        $sql = "SELECT * FROM ".$this->prefix."_uploads";
                        if(!is_dir($this->direct)) {
                                header("location: " . $admin_file . ".php?op=uploads_change_direct");
                                exit;
                        }
                        include_once(NUKE_BASE_DIR.'header.php');
                        OpenTable();
	                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                        echo "<br /><br />";
	                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                    CloseTable();
	                    echo "<br />";
                        echo "<a name=\"start\">";
                        title(MYU_MYUPLOADSADMIN);
            echo "<p>";
                        OpenTable();
                        echo "<strong>".MYU_MAXSPACEPERUSER."</strong> ".$this->uploads_getbettersize($this->maxlimit)
                        ." <strong>[ <a href=\"" . $admin_file . ".php?op=uploads_change_size\">".MYU_CHANGE."</a> ]</strong>"
                        ."<br /><br /><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">"
                        ."<tr><td><form action=\"" . $admin_file . ".php?op=uploads_change_direct&amp;ok=1\" method=\"post\">\n"
                        ."<strong>".MYU_ABUSERDIR."</strong><br /><input type=\"text\" name=\"directory\" style=\"width: 80%\" value=\"".$this->direct."\">\n"
                        ."<input type=\"submit\" value=\"".MYU_CHANGE."\"></form></td></tr><tr><td colspan=\"3\">&nbsp;</td></tr>"
                        ."<tr><td><form action=\"" . $admin_file . ".php?op=uploads_change_url&amp;ok=1\" method=\"post\">\n"
                        ."<strong>".MYU_FULLURL."</strong><br /><input name=\"url\" type=\"text\" style=\"width: 80%\" value=\"".$this->url."\">\n"
                        ."<input type=\"submit\" value=\"".MYU_CHANGE."\"></form></td></tr></table><br />";
                        if($this->allow_all == 0) $allowall = "<strong>".MYU_CERTAINCANUPLOAD;
                        elseif($this->allow_all == 1) $allowall = "<strong>".MYU_ALLCANUPLOAD;
                        echo $allowall." [ <a href=\"" . $admin_file . ".php?op=uploads_change_con_type\">".MYU_CHANGE."</a> ]<br /><br />";
                        if($this->howtoban == 1) $this->howtoban = "<strong>".MYU_ONLYUPLOAD;
                        elseif($this->howtoban == 0) $this->howtoban = "<strong>".MYU_CANNOTUPLOAD;
                        echo $this->howtoban." [ <a href=\"" . $admin_file . ".php?op=uploads_change_ban_type\">".MYU_CHANGE."</a> ]<br />";
                        $sql = "SELECT * FROM ".$this->prefix."_uploads WHERE type = 'banned' ORDER BY info";
                        $res = $this->db->sql_query($sql, FALSE);
                        $count = $this->db->sql_numrows($res);
                        echo "<br />\n<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">";
                        if($count == "0") echo "<tr><td><i><strong>".MYU_NONE."</strong></i></td></tr>";
                        else {
                                while($row = $this->db->sql_fetchrow($res)) {
                                        $extension = $row['info'];
                                        $delete = "[ <a href=\"" . $admin_file . ".php?op=uploads_delete_ext&amp;ext=".urlencode($extension)."\">".MYU_DELETE."</a> ]";
                                        echo "<tr><td>$delete <strong><big><strong>&middot;</big></strong>$extension</strong></td></tr>\n";
                                }
                        }
                        $total_used = $this->uploads_total_dir_size();
                        $total_used = $this->uploads_getbettersize($total_used);
                        echo "<tr><td align=\"center\"><form action=\"" . $admin_file . ".php?op=uploads_add_ext\" method=\"post\" name=\"addext\">\n"
                        ."<input type=\"text\" size=\"15\" name=\"ext\"><input type=\"submit\" value=\"".MYU_ADDFILETYPE."\">\n"
                        ."</td></tr></table><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
                        ."<tr><td colspan=\"2\"><strong>(".MYU_TYPETHATTHING.")</strong></form></center><br /></td></tr></table>\n"
                        ."<strong>$total_used ".MYU_HAVEBEENUSED.".</strong>";
                        CloseTable();
                        echo "<a name=\"rec_added\">\n";
            echo "<p>";
                        OpenTable();
                        if(empty($myutimeframe)) $myutimeframe = 1;
                        if($myutimeframe == 1) {
                                $say = "[ ".MYU_MYUONEDAY." |";
                                $say1 = MYU_MYUONEDAY;
                                $ctime = 86400;
                        } else $say = "[ <a href=\"" . $admin_file . ".php?op=uploads&amp;myutimeframe=1#rec_added\">".MYU_MYUONEDAY."</a> |";
                        if($myutimeframe == 2) {
                                $say .= " ".MYU_ONEWEEK." |";
                                $say1 = MYU_ONEWEEK;
                                $ctime = 604800;
                        } else $say .= " <a href=\"" . $admin_file . ".php?op=uploads&amp;myutimeframe=2#rec_added\">".MYU_ONEWEEK."</a> |";
                        if($myutimeframe == 3) {
                                $say .= " ".MYU_TWOWEEKS." |";
                                $say1 = MYU_TWOWEEKS;
                                $ctime = 1209600;
                        } else $say .= " <a href=\"" . $admin_file . ".php?op=uploads&amp;myutimeframe=3#rec_added\">".MYU_TWOWEEKS."</a> |";
                        if($myutimeframe == 4) {
                                $say .= " ".MYU_ONEMONTH." |";
                                $say1 = MYU_ONEMONTH;
                                $ctime = 2700000;
                        } else $say .= " <a href=\"" . $admin_file . ".php?op=uploads&amp;myutimeframe=4#rec_added\">".MYU_ONEMONTH."</a> |";
                        if($myutimeframe == 5) {
                                $say .= " ".MYU_SIXMONTHS." ]";
                                $say1 = MYU_SIXMONTHS;
                                $ctime = 16200000;
                        } else $say .= " <a href=\"" . $admin_file . ".php?op=uploads&amp;myutimeframe=5#rec_added\">".MYU_SIXMONTHS."</a> ]";
                        echo "<strong>".MYU_RECENTLYUPLOADED.": $say</strong><br /><table>\n";
                        if(!eregi("/$", $this->url)) $this->url .= "/";
                        if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct."/";
                        $open = opendir($this->direct);
                        $is_files = 0;
                        while($dir = readdir($open)) {
                                if(is_dir($this->direct.$dir) && $dir != "." && $dir != "..") {
                                        $open_sub = opendir($this->direct.$dir);
                                        while($files = readdir($open_sub)) {
                                                if(is_file($this->direct.$dir."/".$files)) {
                                                        $time = filemtime($this->direct.$dir."/".$files);
                                                        $cur_time = time();
                                                        $checktime = $cur_time - $ctime;
                                                        if($time >= $checktime) {
                                                                $is_files++;
                                                                $size = filesize($this->direct.$dir."/".$files);
                                                                $size = $this->uploads_getbettersize($size);
                                                                $url1 = "<a href=\"" . $admin_file . ".php?op=uploads_view_folder&amp;user_folder=$dir#start\">$dir</a>";
                                                                $url2 = "<a href=\"".$this->url.$dir."/".stripslashes($files)."\" target=\"_blank\">".stripslashes($files)."</a>\n";
                                                                echo "<tr><td align=\"right\">$url1:</td><td>$url2</td><td>$size</td></tr>\n";
                                                        }
                                                }
                                        }
                                }
                        }
                        if($is_files == 0) echo "<tr><td align=\"right\">".MYU_NOFILESHAVEBEENU." ($say1)</td></tr>";
                        echo "</table>\n";
                        CloseTable();
            echo "<p>";
                        OpenTable();
                        echo "<strong>".MYU_FOLDERTOCONTINUE."<br /><form action=\"" . $admin_file . ".php?op=uploads_view_folder#start\" method=\"post\"><select name=\"user_folder\">";
                        if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct."/";
                        $sql = "SELECT * FROM ".$this->user_prefix."_users WHERE user_id != '1' ORDER BY username";
                        $res = $this->db->sql_query($sql, FALSE);
                        while($row = $this->db->sql_fetchrow($res)) {
                                if(is_dir($this->direct.$row['username'])) {
                                        $direct_a = $this->direct.$row['username'];
                                        $open = opendir($direct_a);
                                        $count = 0;
                                        while($files = readdir($open)) if(is_file($direct_a."/".$files)) $count++;
                                        closedir($open);
                                        if($count != 1) $say = MYU_MYUFILES;
                                        else $say = MYU_MYUFILES;
                                        $size = $this->uploads_dirsize_wu($row['username']);
                                        $size = $this->uploads_getbettersize($size);
                                        echo "<option value=\"".$row['username']."\">".$row['username']." ($count $say, $size)</option>\n";
                                } else {
                                        $count = "0 ".MYU_MYUFILES;
                                        $size = $this->uploads_getbettersize("0");
                                        echo "<option value=\"".$row['username']."\">".$row['username']." ($count, $size)</option>\n";
                                }
                        }
                        echo "</select> <input type=\"submit\" value=\"".MYU_SUBMIT."\"></form>";
                        CloseTable();
                        if($this->allow_all == 0) {
                                echo "<a name=\"user_options\">";
                                OpenTable();
                                echo "<strong>".MYU_MYUUSERSOPTIONS."</strong><form action=\"" . $admin_file . ".php?op=uploads_users_change\" method=\"post\"><select name=\"user_id\">\n";
                                $sql = "SELECT * FROM ".$this->prefix."_uploads_users";
                                $res = $this->db->sql_query($sql, FALSE);
                                while($row = $this->db->sql_fetchrow($res)) {
                                        $userinfo = $this->uploads_getusrinfo_by_id($row['user_id']);
                                        echo "<option value=\"".$row['user_id']."\">".$userinfo['username']."</option>\n";
                                }
                                echo "</select><input type=\"submit\" name=\"delete\" value=\"".MYU_REMOVEUSER."\">\n"
                                ."<input type=\"submit\" name=\"edit\" value=\"".MYU_EDITUSER."\"></form>\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_add_user\" method=\"post\"><select name=\"user_id\">\n";
                                $sql = "SELECT * FROM ".$this->user_prefix."_users WHERE user_id != '1' ORDER BY username";
                                $res = $this->db->sql_query($sql, FALSE);
                                while($row = $this->db->sql_fetchrow($res)) {
                                        $s = "SELECT * FROM ".$this->prefix."_uploads_users WHERE user_id = '$row[user_id]'";
                                        $r = $this->db->sql_query($s);
                                        if($this->db->sql_numrows($r) == 0) {
                                                $userinfo = $this->uploads_getusrinfo_by_id($row['user_id']);
                                                echo "<option value=\"$row[user_id]\">".$userinfo['username']."</option>\n";
                                        }
                                }
                                echo "</select><input type=\"submit\" value=\"".MYU_MYUADDUSER."\"></form>\n";
                                CloseTable();
                        }
                        include_once(NUKE_BASE_DIR.'footer.php');
                }

                function uploads_add_user($user_id) {
                        global $admin_file;
                        $sql = "INSERT INTO ".$this->prefix."_uploads_users (`user_id`, `size`) VALUES ('$user_id', '".$this->maxlimit."')";
                        $this->db->sql_query($sql, FALSE);
                        header("location: " . $admin_file . ".php?op=uploads#user_options");
                }

                function uploads_delete_user($ok, $cancel, $user_id) {
                        global $admin_file;
                        if($cancel) header("location: " . $admin_file . ".php?op=uploads#user_options");
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                echo "<center><strong>".MYU_AREYOUSUREYOU."</strong></center><br /><br />\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_users_change&amp;ok=1&amp;delete=1&amp;user_id=$user_id\" method=\"post\">\n"
                                ."<center><input type=\"submit\" value=\"".MYU_REMOVEUSER."\">\n"
                                ."<input type=\"submit\" name=\"cancel\" value=\"".MYU_GOBACK."\"></form></center>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                $sql = "DELETE FROM ".$this->prefix."_uploads_users WHERE user_id = '$user_id'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#user_options");
                        }
                }

                function uploads_edit_user($ok, $size, $user_id) {
                        global $admin_file;
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                $sql = "SELECT * FROM ".$this->prefix."_uploads_users WHERE user_id = '".$user_id."'";
                                $res = $this->db->sql_query($sql, FALSE);
                                $row = $this->db->sql_fetchrow($res);
                                $user_id = $row['user_id'];
                                $size = $row['size'];
                                echo "<center><strong>".MYU_USETHEFORBELOW."</strong><br /><br />\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_users_change&amp;ok=1&amp;edit=1&amp;user_id=$user_id\" method=\"post\">\n"
                                ."<strong>".MYU_SPACEFORUSER." <input type=\"text\" name=\"size\" value=\"".$size."\"> ".MYU_MYUINBYTES."<br />\n"
                                ."[ 0 = ".MYU_UNLIMITED." ]<br /><br />\n"
                                ."<input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                OpenTable();
                                echo "<script language=\"javascript\">\n"
                                ."<!--\n"
                                ."function calculate() {\n"
                                ."    var mb = document.calculator.megabytes.value;\n"
                                ."    var kb = document.calculator.kilobytes.value;\n"
                                ."    var b = document.calculator.bytes.value;\n"
                                ."    mb = parseInt(((mb*1024)*1024));\n"
                                ."    kb = parseInt((kb*1024));\n"
                                ."    b = parseInt(b);\n"
                                ."    b = kb+mb+b;\n"
                                ."    document.calculator.total.value = b;\n"
                                ."}\n"
                                ."//-->\n"
                                ."</script>\n"
                                ."<form name=\"calculator\" action=\"javascript: calculate()\">\n"
                                ."<center><table>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_MB.":</strong></td><td><input type=\"text\" name=\"megabytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_KB.":</strong></td><td><input type=\"text\" name=\"kilobytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_BYTES.":</strong></td><td><input type=\"text\" name=\"bytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_TOTAL."</strong></td><td><input type=\"text\" name=\"total\" value=\"?\"></td></tr>\n"
                                ."<tr><td align=\"center\" colspan=\"2\"><input type=\"submit\" value=\"".MYU_SUBMIT."\"></td></tr>\n"
                                ."</table></center>\n"
                                ."</form>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                if(!is_numeric($size)) $size = $this->maxlimit;
                                $sql = "UPDATE ".$this->prefix."_uploads_users SET size = '$size' WHERE user_id = '$user_id'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#user_options");
                        }
                }

                function uploads_getusrinfo_by_id($user_id) {
                        $sql = "SELECT * FROM ".$this->user_prefix."_users WHERE user_id = '$user_id'";
                        $res = $this->db->sql_query($sql, FALSE);
                        $userinfo = $this->db->sql_fetchrow($res);
                        return $userinfo;
                }

                function uploads_change_size($total, $ok) {
                        global $admin_file;
                        if($ok != 1 || !is_numeric($total)) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                echo "<center><strong>".MYU_TYPENEWLIMITBELOW."</strong>\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_change_size&amp;ok=1\" method=\"post\" name=\"col\">\n"
                                ."<strong>".MYU_TOTAL."</strong> <input type=\"text\" name=\"total\" value=\"".$this->maxlimit."\"> ".MYU_MYUINBYTES."<br />\n"
                                ."[ 0 = ".MYU_UNLIMITED." ]<br /><br />\n"
                                ."<input type=\"submit\" value=\"".MYU_SUBMIT."\"> <input type=\"reset\" value=\"".MYU_RESET."\"><br /><br /></form>\n"
                                ."[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                OpenTable();
                                echo "<script language=\"javascript\">\n"
                                ."<!--\n"
                                ."function calculate() {\n"
                                ."    var mb = document.calculator.megabytes.value;\n"
                                ."    var kb = document.calculator.kilobytes.value;\n"
                                ."    var b = document.calculator.bytes.value;\n"
                                ."    mb = parseInt(((mb*1024)*1024));\n"
                                ."    kb = parseInt((kb*1024));\n"
                                ."    b = parseInt(b);\n"
                                ."    b = kb+mb+b;\n"
                                ."    document.calculator.total.value = b;\n"
                                ."}\n"
                                ."//-->\n"
                                ."</script>\n"
                                ."<form name=\"calculator\" action=\"javascript: calculate()\">\n"
                                ."<center><table>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_MB.":</strong></td><td><input type=\"text\" name=\"megabytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_KB.":</strong></td><td><input type=\"text\" name=\"kilobytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_BYTES.":</strong></td><td><input type=\"text\" name=\"bytes\" value=\"0\"></td></tr>\n"
                                ."<tr><td align=\"right\"><strong>".MYU_TOTAL."</strong></td><td><input type=\"text\" name=\"total\" value=\"?\"></td></tr>\n"
                                ."<tr><td align=\"center\" colspan=\"2\"><input type=\"submit\" value=\"".MYU_SUBMIT."\"></td></tr>\n"
                                ."</table></center>\n"
                                ."</form>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                $sql = "UPDATE ".$this->prefix."_uploads SET info = '$total' WHERE type = 'limit'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#start");
                        }
                }

                function uploads_delete_ext($ext) {
                        global $admin_file;
                        $sql = "DELETE FROM ".$this->prefix."_uploads WHERE type = 'banned' AND info = '$ext'";
                        $this->db->sql_query($sql, FALSE);
                        header("location: " . $admin_file . ".php?op=uploads#start");
                }

                function uploads_dirsize_wu($folder) {
                        $changedir = $this->direct;
                        if(!eregi($folder."/$", $changedir)) $changedir .= $folder."/";
                        if(!eregi("/$", $changedir) && !eregi("\\\\$", $changedir)) $changedir = $changedir."/";
                        $open = opendir($changedir);
                        $tsize = 0;
                        while($files = readdir($open)) {
                                $filename = $changedir.$files;
                                if(is_file($filename)) $tsize += filesize($changedir.$files);
                        }
                        return $tsize;
                }

                function uploads_total_dir_size() {
                        if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct."/";
                        $open = opendir($this->direct);
                        $tsize = 0;
                        while($dirs = readdir($open)) {
                                if(is_dir($this->direct.$dirs) && ($dirs != "." && $dirs != "..")) {
                                        $rr = opendir($this->direct.$dirs);
                                        while($files = readdir($rr)) {
                                                $filename = $this->direct.$dirs."/".$files;
                                                if(is_file($filename)) $tsize += filesize($filename);
                                        }
                                        closedir($rr);
                                }
                        }
                        closedir($open);
                        return $tsize;
                }

                function uploads_add_ext($ext) {
                        global $admin_file;
                        if(!eregi("\"", $ext)) {
                                $sql = "SELECT * FROM ".$this->prefix."_uploads WHERE type = 'banned' AND info = '$ext'";
                                $res = $this->db->sql_query($sql, FALSE);
                                if($this->db->sql_numrows($res) == 0) {
                                        $sql = "INSERT INTO ".$this->prefix."_uploads (`info`, `type`) VALUES ('$ext', 'banned')";
                                        $this->db->sql_query($sql, FALSE);
                                }
                        }
                        header("location: " . $admin_file . ".php?op=uploads#start");
                }

                function uploads_change_direct($ok, $directory) {
                        global $admin_file;
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                echo "<center><strong>".MYU_NEWDIRBELOW."</strong><br />\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_change_direct&amp;ok=1\" method=\"post\">\n"
                                ."<strong>".MYU_DIREC."</strong> <input type=\"text\" name=\"directory\" value=\"".$this->direct."\" size=\"60\"><br /><center>\n"
                                ."<input type=\"submit\" value=\"".MYU_SUBMIT."\"> <input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                if(is_dir($directory)) {
                                        if(get_magic_quotes_gpc() == 1) $directory = stripslashes($directory);
                                        $decperms = @fileperms($directory);
                                        $octalperms = sprintf("%o", $decperms);
                                        $perms = (substr($octalperms, 2));
                                        if($perms == 777) {
                                                if(get_magic_quotes_gpc() == 0) $directory = addslashes($directory);
                                                $sql = "UPDATE ".$this->prefix."_uploads SET info = '$directory' WHERE type = 'directory'";
                                                $this->db->sql_query($sql, FALSE);
                                                header("location: " . $admin_file . ".php?op=uploads#start");
                                        } else {
                                                if(get_magic_quotes_gpc() == 1) $directory = stripslashes($directory);
                                                include_once(NUKE_BASE_DIR.'header.php');
												OpenTable();
	                                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                                echo "<br /><br />";
	                                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                                            CloseTable();
	                                            echo "<br />";
                                                title(MYU_MYUPLOADSADMIN);
                                                OpenTable();
                                                echo "<center><strong>".MYU_DIRNOTCHMOD777."</strong><br />\n"
                                                ."<form action=\"" . $admin_file . ".php?op=uploads_change_direct&amp;ok=1\" method=\"post\">\n"
                                                ."<strong>".MYU_DIREC."</strong> <input type=\"text\" name=\"directory\" value=\"$directory\" size=\"60\">\n"
                                                ."<br /><center><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                                ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                                CloseTable();
                                                include_once(NUKE_BASE_DIR.'footer.php');
                                        }
                                } else {
                                        $directory = stripslashes($directory);
                                        include_once(NUKE_BASE_DIR.'header.php');
										OpenTable();
	                                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                        echo "<br /><br />";
	                                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                                    CloseTable();
	                                    echo "<br />";
                                        title(MYU_MYUPLOADSADMIN);
                                        OpenTable();
                                        echo "<center><strong>".MYU_DIRNOTEXIST."</strong></center><br />\n"
                                        ."<form action=\"" . $admin_file . ".php?op=uploads_change_direct&amp;ok=1\" method=\"post\">\n"
                                        ."<strong>".MYU_DIREC."</strong> <input type=\"text\" name=\"directory\" value=\"$directory\" size=\"60\">\n"
                                        ."<br /><center><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                        ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                        CloseTable();
                                        include_once(NUKE_BASE_DIR.'footer.php');
                                }
                        }
                }

                function uploads_change_url($ok, $url) {
                        global $admin_file;
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                echo "<center><strong>".MYU_NEWABBELOW."\n</strong><br />\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_change_url&amp;ok=1\" method=\"post\">\n"
                                ."<strong>".MYU_FULLURL."</strong> <input type=\"text\" name=\"url\" value=\"".$this->url."\" size=\"60\">\n"
                                ."<br /><center><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                $sql = "UPDATE ".$this->prefix."_uploads SET info = '$url' WHERE type = 'url'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#start");
                        }
                }

                function uploads_change_con_type($ok, $user_con) {
                        global $admin_file;
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                $sql = "SELECT * FROM ".$this->prefix."_uploads WHERE type = 'user_type'";
                                $res = $this->db->sql_query($sql, FALSE);
                                $row = $this->db->sql_fetchrow($res);
                                $user_con = $row['info'];
                                if($user_con == 1) $all_upload = " CHECKED";
                                else $certain_upload = " CHECKED";
                                $user_con = "<input type=\"radio\" name=\"user_con\" value=\"1\"$all_upload><strong>".MYU_ALLCANUPLOAD."<br />";
                                $user_con .= "<input type=\"radio\" name=\"user_con\" value=\"0\"$certain_upload>".MYU_CERTAINCANUPLOAD."</strong>";
                                echo "<center><strong>".MYU_USERUPLOADCON."</strong><form action=\"" . $admin_file . ".php?op=uploads_change_con_type&amp;ok=1\" method=\"post\">\n"
                                ."<table><tr><td>".$user_con."<br /><br /><center><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\"></center>\n"
                                ."</form></td></tr></table>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                $sql = "UPDATE ".$this->prefix."_uploads SET info = '$user_con' WHERE type = 'user_type'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#start");
                        }
                }

                function uploads_change_ban_type($ok, $howtoban) {
                        global $admin_file;
                        if($ok != 1) {
                                include_once(NUKE_BASE_DIR.'header.php');
								OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
                                title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                if($this->howtoban == 1) $htb1 = " CHECKED";
                                else $htb2 = " CHECKED";
                                echo "<center><strong>".MYU_UPLOADCONDITION."</strong><br /><br />\n"
                                ."<form action=\"" . $admin_file . ".php?op=uploads_change_ban_type&amp;ok=1\" method=\"post\">\n"
                                ."<input type=\"radio\" name=\"howtoban\" value=\"1\"$htb1>".MYU_UPLOADCERTAIN."<br />\n"
                                ."<input type=\"radio\" name=\"howtoban\" value=\"0\"$htb2>".MYU_CANNOTUPLOADTYPES."\n"
                                ."<br /><br /><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"reset\" value=\"".MYU_RESET."\">\n"
                                ."</form>[ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        } else {
                                $sql = "UPDATE ".$this->prefix."_uploads SET info = '$howtoban' WHERE type = 'howtoban'";
                                $this->db->sql_query($sql, FALSE);
                                header("location: " . $admin_file . ".php?op=uploads#start");
                        }
                }

                function uploads_getbettersize($number) {
                        if(($number >= 1024 && $number <= 1048575) || ($number <= -1024 && $number > -1048575)) {
                                $number = $number / 1024;
                                $number = round($number, 1);
                                $number = $number." ".MYU_KB;
                        } elseif($number >= 1048576 || $number <= -1048576) {
                                $number = ($number / 1024) / 1024;
                                $number = round($number, 2);
                                $number = $number." ".MYU_MB;
                        } else $number = $number." ".MYU_BYTES;
                        return $number;
                }

                function uploads_install() {
                        global $admin_file;
                        $absdir = dirname(dirname(dirname(dirname(__FILE__))))."/files/";
                        $thispath = dirname($_SERVER['REQUEST_URI']);
                        if($thispath != "/") $thispath .= "/";
                        $absurl = "http://".$_SERVER['HTTP_HOST'].$thispath."files/";
                        include_once(NUKE_BASE_DIR.'header.php');
						OpenTable();
	                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                        echo "<br /><br />";
	                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                    CloseTable();
	                    echo "<br />";
                        title(MYU_MYUPLOADSADMIN);
                        OpenTable();
                        echo "<strong>".MYU_INSRESULT."</strong><br /><br /><pre>\n";
                        $sql = "DROP TABLE IF EXISTS ".$this->prefix."_uploads";
                        if($this->db->sql_query($sql, FALSE)) echo "DROP TABLE... ".MYU_COMPLETE."\n";
                        else echo "DROP TABLE... ".MYU_FAILED."\n";
                        $sql = "CREATE TABLE `".$this->prefix."_uploads` (\n"
                        ."`info` VARCHAR( 255 ) NOT NULL ,\n"
                        ."`type` VARCHAR( 255 ) NOT NULL ,\n"
                        ."INDEX ( `type` )"
                        .");";
                        if($this->db->sql_query($sql, FALSE)) echo "CREATE TABLE... ".MYU_COMPLETE."\n";
                        else echo "CREATE TABLE... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '5242880', 'limit' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '0', 'howtoban' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'php', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'php3', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'php4', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'phtml', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'cgi', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'pl', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'asp', 'banned' );";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '$absdir', 'directory');";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '$absurl', 'url');";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '".$this->version."', 'version');";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '1', 'user_type');";
                        if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                        else echo "INSERT INTO... ".MYU_FAILED."\n";
                        $sql = "DROP TABLE IF EXISTS ".$this->prefix."_uploads_users";
                        if($this->db->sql_query($sql, FALSE)) echo "DROP TABLE... ".MYU_COMPLETE."\n";
                        else echo "DROP TABLE... ".MYU_FAILED."\n";
                        $sql = "CREATE TABLE `".$this->prefix."_uploads_users` (\n"
                        ."`user_id` INT( 11 ) NOT NULL ,\n"
                        ."`size` INT( 11 ) NOT NULL ,\n"
                        ."INDEX ( `user_id` )\n"
                        .")\n";
                        if($this->db->sql_query($sql, FALSE)) echo "CREATE TABLE... ".MYU_COMPLETE."\n";
                        else echo "CREATE TABLE... ".MYU_FAILED."\n";
                        echo "</pre><strong>".MYU_SUCCINS."<br /><center> [ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]</center></strong>";
                        CloseTable();
                        include_once(NUKE_BASE_DIR.'footer.php');
                }

                function uploads_get_upload_error_message($error) {
                        if($error == 1) $return = MYU_FILEEXCEEDS;
                        if($error == 3) $return = MYU_PARTIALLYUPLOADED;
                        if($error == 4) $return = MYU_NOFILEUPLOADED;
                        return $return;
                }

                function uploads_view_folder($user_folder, $upfile, $upfile_size, $upfile_name, $overwrite, $rename, $newname, $delete, $cancel) {
                        global $directory_mode, $file_mode, $admin_file;
                        if($cancel) header("location: " . $admin_file . ".php?op=uploads#start");
                        $sql = "SELECT user_id FROM ".$this->user_prefix."_users WHERE username = '$user_folder'";
                        $res = $this->db->sql_query($sql, FALSE);
                        $row = $this->db->sql_fetchrow($res);
                        $userinfo = $this->uploads_getusrinfo_by_id($row['user_id']);
                        if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct ."/";
                        $orig = $this->direct;
                        $this->direct = $this->direct.$userinfo['username']."/";
                        if(!eregi("/$", $this->url)) $this->url .= "/";
                        if(!is_dir($this->direct)) {
                                $old_umask = umask(0);
                                if(!mkdir($this->direct, $directory_mode)) {
                                        $decperms = @fileperms($orig);
                                        $octalperms = sprintf("%o", $decperms);
                                        $perms = (substr($octalperms, 2));
                                        die(sprintf(MYU_MYUPLOADSCOULD, $this->direct, $perms)." ".MYU_PLEASEMAKESURE);
                                }
                                umask($old_umask);
                        }
                        include_once(NUKE_BASE_DIR.'header.php');
						OpenTable();
	                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                        echo "<br /><br />";
	                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                    CloseTable();
	                    echo "<br />";
                        echo "<a name=\"start\">";
                        title(MYU_MYUPLOADS);
                        $phpversion = phpversion();
                        $phpversion = explode(".", $phpversion);
                        $phpversion = implode("", $phpversion);
                        if($phpversion >= "410") {
                                $upfile_name = $_FILES['upfile']['name'];
                                $upfile_size = $_FILES['upfile']['size'];
                                $upfile_temp = $_FILES['upfile']['tmp_name'];
                                $upfile_eror = $_FILES['upfile']['error'];
                        } elseif ($phpversion >= "400") {
                                $upfile_name = $this->HTTP_POST_VARS['upfile']['name'];
                                $upfile_size = $this->HTTP_POST_VARS['upfile']['size'];
                                $upfile_temp = $this->HTTP_POST_VARS['upfile']['tmp_name'];
                                $upfile_eror = 0;
                        } else {
                                $upfile_temp = $upfile;
                                $upfile_eror = 0;
                        }
                        if(isset($upfile_name) && !empty($upfile_name)) {
                                OpenTable();
                                echo "<strong>".MYU_UPLOADSRESULTS."</strong><br /><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">"
                                ."<tr><td width=\"25\">&nbsp;</td><td><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">\n";
                                if(is_file($upfile_temp)) {
                                        $go_ahead = 1;
                                        $upfile_size = $this->uploads_getbettersize($upfile_size);
                                        echo "<tr><td>".sprintf(MYU_UPLOADEDFILENAME, $upfile_name)."</td></tr>\n"
                                        ."<tr><td>".sprintf(MYU_UPLOADEDFILESIZE, $upfile_size)."</td></tr>\n";
                                        if($overwrite == 0) {
                                                if(is_file($this->direct.$upfile_name)) {
                                                        echo "<tr><td>".sprintf(MYU_CHOSENOTTO, $upfile_name)."</td></tr>\n";
                                                        $go_ahead = 0;
                                                }
                                        }
                                        if($go_ahead == 1) {
                                                if(eregi("\\\\", $newfilename) || eregi("/", $newfilename) ||
                                                eregi(":", $newfilename) || eregi("\*", $newfilename) ||
                                                eregi("\?", $newfilename) || eregi("\"", $newfilename) ||
                                                eregi("<", $newfilename) || eregi(">", $newfilename) ||
                                                eregi("\|", $newfilename)) echo "<tr><td>".MYU_AFILENADADADA."</td></tr>";
                                                else {
                                                        if(@copy($upfile_temp, $this->direct.$upfile_name)) {
                                                                echo "<tr><td>".sprintf(MYU_THEFILEWAS, $upfile_name)."</td></tr>\n";
                                                                @chmod($this->direct.$upfile_name, $file_mode);
                                                        } else echo "<tr><td>".sprintf(MYU_THEFILEWASNOT, $upfile_name)."</td></tr>\n";
                                                        @unlink($upfile_temp);
                                                }
                                        }
                                } else {
                                        if($phpversion >= "420" && $upfile_eror != 0) {
                                                $error = $this->get_upload_error_message($upfile_eror);
                                        }
                                        echo "<tr><td><strong><i>".MYU_THEFILEWASNOTABLE."\n<br />$error</strong></i></td></tr>\n";
                                }
                                echo "<tr><td>&nbsp;</td></tr></table>\n";
                                CloseTable();
                        }
                        if($rename) {
                                OpenTable();
                                echo "<strong>".MYU_RENAMERESULTS."</strong><br /><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">";
                                for($n=0;$n<count($rename);$n++) {
                                        $oldfilename = $rename[$n];
                                        if(empty($newname[$oldfilename])) $newname[$oldfilename] = $oldfilename;
                                        $newfilename = stripslashes($newname[$oldfilename]);
                                        $newfilename = trim($newfilename);
                                        $oldfilename = stripslashes($oldfilename);
                                        $old = $this->direct.$oldfilename;
                                        $new = $this->direct.$newname[$oldfilename];
                                        if(eregi("\\\\", $newfilename) || eregi("/", $newfilename) ||
                                        eregi(":", $newfilename) || eregi("\*", $newfilename) ||
                                        eregi("\?", $newfilename) || eregi("\"", $newfilename) ||
                                        eregi("<", $newfilename) || eregi(">", $newfilename) ||
                                        eregi("\|", $newfilename)) echo "<tr><td>".MYU_AFILENADADADA."</td></tr>";
                                        else {
                                                if(@rename($old, $new)) echo "<tr><td>".sprintf(MYU_HASBEENRENAMED, $oldfilename, $newfilename)."</td></tr>\n";
                                                else echo "<tr><td>".sprintf(MYU_COULDNOTBERENAMED, $oldfilename, $newfilename)."</td></tr>\n";
                                        }
                                }
                                echo "<tr><td>&nbsp;</td></tr></table>\n";
                                CloseTable();
                        }
                        if($delete) {
                                OpenTable();
                                echo "<strong>".MYU_DELETERESULTS."</strong><br /><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">";
                                for($i=0;$i<count($delete);$i++) {
                                        if(@unlink($this->direct.$delete[$i])) echo "<tr><td>".sprintf(MYU_WASSUCCESFULL, $delete[$i])."</td></tr>\n";
                                        else echo "<tr><td>".sprintf(MYU_COULDNOTBEDELETED, $delete[$i])."</td></tr>\n";
                                }
                                echo "<tr><td>&nbsp;</td></tr></table>\n";
                                CloseTable();
                        }
                        OpenTable();
                        echo "<table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">"
                        ."<form action=\"" . $admin_file . ".php?op=uploads_view_folder&amp;user_folder=$user_folder#start\" method=post enctype=\"multipart/form-data\">\n"
                        ."<tr><td><strong>".MYU_FILENAME."</strong></td><td><strong>".MYU_FILESIZE."</strong></td><td><strong>".MYU_DELETE."</strong></td><td><strong>".MYU_RENAME."</strong></td></tr>\n";
                        $open = opendir($this->direct);
                        $i = 0;
                        while($files = readdir($open)) {
                                $filename = $this->direct.$files;
                                if(is_file($filename)) {
                                        $i++;
                                        $size = filesize($this->direct.$files);
                                        $size = $this->uploads_getbettersize($size);
                                        $smaller_name = substr($files, 0, 25);
                                        if($smaller_name != $files) $smaller_name .= "...";
                                        echo "<tr><td><a href=\"".$this->url.$userinfo['username']."/".stripslashes($files)."\" target=\"_blank\" title=\"".stripslashes($files)."\">$smaller_name</a></td>\n"
                                        ."<td>$size</td><td><input type=checkbox name=\"delete[]\" value=\"".stripslashes($files)."\"></td>\n"
                                        ."<td><input type=\"text\" name=\"newname['.stripslashes($files).']\" value=\"".stripslashes($files)."\"> <strong>".MYU_CONFIRM."</a>\n"
                                        ."<INPUT TYPE=checkbox NAME=\"rename[]\" VALUE=\"".stripslashes($files)."\"></td></tr>\n";
                                }
                        }
                        if($i == 0) echo "<tr><td><i>".MYU_THEUSERHASNO."</i></td></tr>\n";
                        echo "</table>";
                        closedir($open);
                        CloseTable();
                        OpenTable();
                        echo "<strong>".MYU_ACCOUNTSUMMARY."</strong><br />";
                        $used = $this->uploads_dirsize_wu($user_folder);
                        $used = $this->uploads_getbettersize($used);
                        $disurl = "&lt;<a href=\"".$this->url.$userinfo['username']."/\" TARGET=\"_blank\">".$this->url.$userinfo['username']."/</a>&gt;";
                        echo "<br />".sprintf(MYU_USERHASUSED, $used)."<br /><br />".sprintf(MYU_THEUSERSURLIS, $disurl)."\n";
                        CloseTable();
                        OpenTable();
                        $upload_max_filesize = ini_get("upload_max_filesize");
                        if (empty($upload_max_filesize)) $upload_max_filesize = "0M";
                        echo "<table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">"
                        ."<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<strong>".MYU_UPLOADAFILE."</strong><center><br /><input type=\"file\" name=\"upfile\" size=\"40\">\n"
                        ."<strong>".MYU_OVERWRITE."</strong> <input type=\"checkbox\" name=\"overwrite\" value=\"1\"></center></td></tr>\n"
                        ."<tr><td align=\"center\">".sprintf(MYU_THEMAXIMUMFILE, $upload_max_filesize)."</td></tr></table>\n";
                        CloseTable();
                        OpenTable();
                        echo "<center><input type=\"submit\" value=\"".MYU_SUBMIT."\"><input type=\"submit\" name=\"cancel\" value=\"".MYU_GOBACK."\"></center>\n";
                        CloseTable();
                        echo "</FORM>";
                        include_once(NUKE_BASE_DIR.'footer.php');
                }

                function uploads_upgrade($upgrade, $ok, $cancel) {
                        global $admin_file;
                        if($cancel) header("location: " . $admin_file . ".php?op=uploads");
                        if(empty($this->installed_version)) $this->installed_version = "0";
                        if($this->installed_version < $this->version) {
                                if($ok != 1) {
                                        include_once(NUKE_BASE_DIR.'header.php');
										OpenTable();
	                                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                        echo "<br /><br />";
	                                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                                    CloseTable();
	                                    echo "<br />";
                                        title(MYU_MYUPLOADSADMIN);
                                        OpenTable();
                                        echo "<strong>".MYU_THISSECTIONWILL."</strong><table><tr><td>\n"
                                        ."<form action=\"" . $admin_file . ".php?op=uploads_upgrade&ok=1\" method=\"post\">\n"
                                        ."<input type=\"radio\" name=\"upgrade\" value=\"(1.0-1.5)-4.4\">1.0-4.4<br />\n"
                                        ."<input type=\"radio\" name=\"upgrade\" value=\"(1.0-1.5)-4.4\">1.5-4.4<br />\n"
                                        ."<input type=\"radio\" name=\"upgrade\" value=\"2.0-4.4\">2.0-4.4<br />\n"
                                        ."<input type=\"radio\" name=\"upgrade\" value=\"3.0-4.4\">3.0-4.4<br />\n"
                                        ."<input type=\"radio\" name=\"upgrade\" value=\"(4.0-4.3)-4.4\">(4.0-4.3)-4.4<br />\n"
                                        ."<input type=\"submit\" value=\"".MYU_CONTINUE."\">\n"
                                        ."<input type=\"submit\" value=\"".MYU_GOBACK."\" name=\"cancel\"></form></td></tr></table>\n";
                                        CloseTable();
                                        include_once(NUKE_BASE_DIR.'footer.php');
                                } else {
                                        include_once(NUKE_BASE_DIR.'header.php');
										OpenTable();
	                                    echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                        echo "<br /><br />";
	                                    echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                                    CloseTable();
	                                    echo "<br />";
                                        title(MYU_MYUPLOADSADMIN);
                                        OpenTable();
                                        echo "<pre>\n";
                                        if($upgrade == "(1.0-1.5)-4.4") {
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '0', 'howtoban' );";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'http://www.yoursite.com/files/', 'url');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '4.4', 'version');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '0', 'user_type');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "DROP TABLE IF EXISTS ".$this->prefix."_uploads_users";
                                                if($this->db->sql_query($sql, FALSE)) echo "DROP TABLE... ".MYU_COMPLETE."\n";
                                                else echo "DROP TABLE... ".MYU_FAILED."\n";
                                                $sql = "CREATE TABLE `".$this->prefix."_uploads_users` (\n"
                                                ."`user_id` INT( 11 ) NOT NULL ,\n"
                                                ."`size` INT( 11 ) NOT NULL ,\n"
                                                ."INDEX ( `user_id` )\n"
                                                .")\n";
                                                if($this->db->sql_query($sql, FALSE)) echo "CREATE TABLE... ".MYU_COMPLETE."\n";
                                                else echo "CREATE TABLE... ".MYU_FAILED."\n";
                                        } elseif($upgrade == "2.0-4.4") {
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( 'http://www.yoursite.com/files/', 'url');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '4.4', 'version');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '0', 'user_type');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "DROP TABLE IF EXISTS ".$this->prefix."_uploads_users";
                                                if($this->db->sql_query($sql, FALSE)) echo "DROP TABLE... ".MYU_COMPLETE."\n";
                                                else echo "DROP TABLE... ".MYU_FAILED."\n";
                                                $sql = "CREATE TABLE `".$this->prefix."_uploads_users` (\n"
                                                ."`user_id` INT( 11 ) NOT NULL ,\n"
                                                ."`size` INT( 11 ) NOT NULL ,\n"
                                                ."INDEX ( `user_id` )\n"
                                                .")\n";
                                                if($this->db->sql_query($sql, FALSE)) echo "CREATE TABLE... ".MYU_COMPLETE."\n";
                                                else echo "CREATE TABLE... ".MYU_FAILED."\n";
                                        } elseif($upgrade == "3.0-4.4") {
                                                $sql = "INSERT INTO `".$this->prefix."_uploads` ( `info` , `type` ) VALUES ( '0', 'user_type');";
                                                if($this->db->sql_query($sql, FALSE)) echo "INSERT INTO... ".MYU_COMPLETE."\n";
                                                else echo "INSERT INTO... ".MYU_FAILED."\n";
                                                $sql = "DROP TABLE IF EXISTS ".$this->prefix."_uploads_users";
                                                if($this->db->sql_query($sql, FALSE)) echo "DROP TABLE... ".MYU_COMPLETE."\n";
                                                else echo "DROP TABLE... ".MYU_FAILED."\n";
                                                $sql = "CREATE TABLE `".$this->prefix."_uploads_users` (\n"
                                                ."`user_id` INT( 11 ) NOT NULL ,\n"
                                                ."`size` INT( 11 ) NOT NULL ,\n"
                                                ."INDEX ( `user_id` )\n"
                                                .")\n";
                                                if($this->db->sql_query($sql, FALSE)) echo "CREATE TABLE... ".MYU_COMPLETE."\n";
                                                else echo "CREATE TABLE... ".MYU_FAILED."\n";
                                                $sql = "UPDATE ".$prefix."_uploads SET version = '4.4'";
                                                if($this->db->sql_query($sql, FALSE)) echo "UPDATE TABLE... ".MYU_COMPLETE."\n";
                                                else echo "UPDATE TABLE... ".MYU_FAILED."\n";
                                        } elseif($upgrade == "(4.0-4.3)-4.4") {
                                                $sql = "UPDATE ".$prefix."_uploads SET version = '4.4'";
                                                if($this->db->sql_query($sql, FALSE)) echo "UPDATE TABLE... ".MYU_COMPLETE."\n";
                                                else echo "UPDATE TABLE... ".MYU_FAILED."\n";
                                        }
                                        echo "</pre><strong>".MYU_YOUHAVEBEENUP."</strong> [ <a href=\"" . $admin_file . ".php?op=uploads#start\">".MYU_GOBACK."</a> ]\n";
                                        CloseTable();
                                        include_once(NUKE_BASE_DIR.'footer.php');
                                }
                        } else {
                                include_once(NUKE_BASE_DIR.'header.php');
                                OpenTable();
	                            echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
                                echo "<br /><br />";
	                            echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
	                            CloseTable();
	                            echo "<br />";
								title(MYU_MYUPLOADSADMIN);
                                OpenTable();
                                echo "<strong>".MYU_THEREISNONEEDTO."</strong>\n";
                                CloseTable();
                                include_once(NUKE_BASE_DIR.'footer.php');
                        }
                }
        }
        $module_name = basename(dirname(dirname(__FILE__)));
        $version = "4.4";
        get_lang($module_name);
        $uploads = new uploads_admin($prefix, $db, $user_prefix, $version, $module_name, $op);
        $pagetitle .= " - ".MYU_MYUPLOADSADMIN;
        $sql = "SELECT * FROM ".$prefix."_uploads";
        if(!$db->sql_query($sql, FALSE)) header("location: " . $admin_file . ".php?op=uploads_install");
        switch($op) {
                case "uploads":
                $uploads->uploads($myutimeframe);
                break;
                case "uploads_change_size":
                $uploads->uploads_change_size($total, $ok);
                break;
                case "uploads_delete_ext":
                $uploads->uploads_delete_ext($ext);
                break;
                case "uploads_add_ext":
                $uploads->uploads_add_ext($ext);
                break;
                case "uploads_change_direct":
                $uploads->uploads_change_direct($ok, $directory);
                break;
                case "uploads_change_ban_type":
                $uploads->uploads_change_ban_type($ok, $howtoban);
                break;
                case "uploads_change_url":
                $uploads->uploads_change_url($ok, $url);
                break;
                case "uploads_upgrade":
                $uploads->uploads_upgrade($upgrade, $ok, $cancel);
                break;
                case "uploads_install":
                $uploads->uploads_install();
                break;
                case "uploads_view_folder":
                $uploads->uploads_view_folder($user_folder, $upfile, $upfile_size, $upfile_name, $overwrite, $rename, $newname, $delete, $cancel);
                break;
                case "uploads_change_con_type":
                $uploads->uploads_change_con_type($ok, $user_con);
                break;
                case "uploads_add_user":
                $uploads->uploads_add_user($user_id);
                break;
                case "uploads_users_change":
                if($delete) $uploads->uploads_delete_user($ok, $cancel, $user_id);
                elseif($edit) $uploads->uploads_edit_user($ok, $size, $user_id);
                else header("location: " . $admin_file . ".php?op=uploads#user_options");
                break;
        }

} else {
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=uploads#start\">" . MYU_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . MYU_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  OpenTable();
  echo "<center><strong>"._ERROR."</strong><br /><br />You do not have administration permission for module My Uploads</center>";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
}

?>