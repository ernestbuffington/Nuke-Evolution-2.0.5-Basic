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

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

class uploads {
         function uploads($HTTP_POST_VARS, $user, $admin, $prefix, $db, $module_name) {
                global $directory_mode, $admin_file, $userinfo;
                $this->HTTP_POST_VARS = $HTTP_POST_VARS;
                $this->user = $user;
                $this->userinfo = $userinfo;
                $this->admin = $admin;
                $this->prefix = $prefix;
                $this->db = $db;
                $this->module_name = $module_name;
                $this->pagetitle = " - ".MYU_MYUPLOADS;
                $allow_uploads = ini_get("file_uploads");
                if (empty($allow_uploads)) $allow_uploads = 0;
                if(!eregi("1", $allow_uploads) && !eregi("on", $allow_uploads) && !eregi("True", $allow_uploads) && !eregi("yes", $allow_uploads)) {
                        $pagetitle = $this->pagetitle;
                        include_once(NUKE_BASE_DIR.'header.php');
                        title(MYU_MYUPLOADS);
                        OpenTable();
                        echo "<strong>".MYU_THISMODULESREQ."</strong>\n";
                        CloseTable();
            echo "<p>";
                        if(is_admin($this->admin)) {
                                OpenTable();
                                echo "<strong><center>[ <a href=\"" . $admin_file . ".php?op=uploads#start\" target=\"_blank\">".MYU_MYUPLOADSADMIN."</a> ]</center></strong>\n";
                                CloseTable();
                        }
                        include_once(NUKE_BASE_DIR.'footer.php');
                        exit;
                }
                $sql = "SELECT * FROM ".$this->prefix."_uploads";
                if(!$this->db->sql_query($sql, FALSE)) {
                        header("location: " . $admin_file . ".php?op=uploads_install");
                        exit;
                }
                $res = $this->db->sql_query($sql, FALSE);
                if($this->db->sql_numrows($res) == 0) {
                        header("location: " . $admin_file . ".php?op=uploads_install");
                        exit;
                }
                while($row = $this->db->sql_fetchrow($res)) {
                        if($row['type'] == "limit") $this->maxlimit = $row['info'];
                         if($row['type'] == "directory") $this->direct = $row['info'];
                         if($row['type'] == "howtoban") $this->howtoban = $row['info'];
                         if($row['type'] == "url") $this->url = $row['info'];
                         if($row['type'] == "version") $this->version = $row['info'];
                         if($row['type'] == "user_type") $this->allow_all = $row['info'];
                }
                if(!is_dir($this->direct)) {
                        header("location: " . $admin_file . ".php?op=uploads_change_direct");
                        exit;
                }
                if($this->allow_all == 0) {
                        $sql = "SELECT * FROM ".$this->prefix."_uploads_users WHERE user_id = '".$this->userinfo['user_id']."'";
                        $res = $this->db->sql_query($sql, FALSE);
                        if($this->db->sql_numrows($res) == 0) {
                            $pagetitle = $this->pagetitle;
                                include_once(NUKE_BASE_DIR.'header.php');
                                title(MYU_MYUPLOADS);
                                OpenTable();
                                echo "<strong>".MYU_THISMODULEISFOR."</strong>\n";
                                CloseTable();
                echo "<p>";
                                if(is_admin($this->admin)) {
                                        OpenTable();
                                        echo "<strong><center>[ <a href=\"" . $admin_file . ".php?op=uploads#start\" target=\"_blank\">".MYU_MYUPLOADSADMIN."</a> ]</center></strong>\n";
                                        CloseTable();
                                }
                        include_once(NUKE_BASE_DIR.'footer.php');
                                exit;
                        } else {
                                $row = $this->db->sql_fetchrow($res);
                        $this->maxlimit = $row['size'];
                        $row = "";
                    }
                }
                if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct ."/";
                $orig = $this->direct;
                $this->direct = $this->direct.$this->userinfo['username']."/";
                if(!eregi("/$", $this->url)) $this->url .= "/";
                if(!is_dir($this->direct)) {
                        $decperms = @fileperms($orig);
                        $octalperms = sprintf("%o", $decperms);
                        $perms = (substr($octalperms, 2));
                    $old_umask = umask(0);
                        if(!mkdir($this->direct, $directory_mode)) die(sprintf(MYU_MYUPLOADSCOULD, $this->direct, $perms));
                        umask($old_umask);
                }
        }

        function check_file_name($filename) {
                if(eregi("\\\\", $filename) || eregi("/", $filename) || eregi(":", $filename) || eregi("\*", $filename) ||
                        eregi("\?", $filename) || eregi("\"", $filename) || eregi("<", $filename) || eregi(">", $filename) ||
                    eregi("\|", $filename)) return 1;
                else return 0;
        }

        function getbettersize($number) {
                if(($number >= 1024 && $number <= 1048575) || ($number <= -1024 && $number > -1048575)) {
                    $number = $number / 1024;
                    $number = round($number, 1);
                           $number = $number." ".MYU_KB;
                }
                elseif($number >= 1048576 || $number <= -1048576) {
                    $number = ($number / 1024) / 1024;
                    $number = round($number, 2);
                    $number = $number." ".MYU_MB;
                } else $number = $number." ".MYU_BYTES;
                return $number;
        }

        function dirsize() {
            $open = opendir($this->direct);
            $tsize = 0;
                   while($files = readdir($open)) {
                $filename = $this->direct.$files;
                if(is_file($filename)) $tsize += filesize($this->direct.$files);
            }
            return $tsize;
        }

        function get_upload_error_message($error) {
                if($error == 1) $return = MYU_FILEEXCEEDS;
                if($error == 3) $return = MYU_PARTIALLYUPLOADED;
                if($error == 4) $return = MYU_NOFILEUPLOADED;
                return $return;
        }

        function index($delete, $newname, $rename, $upfile, $overwrite, $upfile_name, $upfile_size) {
                global $file_mode, $admin_file;
                $pagetitle = $this->pagetitle;
                include_once(NUKE_BASE_DIR.'header.php');
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
            echo "<p>";
                    OpenTable();
                    echo "<strong>".MYU_UPLOADSRESULTS."</strong><br /><table border=\"0\" width=\"100%\"><tr>"
                        ."<td width=\"25\">&nbsp;</td><td><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">\n";
                    if(is_file($upfile_temp)) {
                            $upfile_size_say = $this->getbettersize($upfile_size);
                            echo "<tr><td>".sprintf(MYU_UPLOADEDFILENAME, $upfile_name)."</td></tr>\n"
                                ."<tr><td>".sprintf(MYU_UPLOADEDFILESIZE, $upfile_size_say)."</td></tr>\n";
                                if($overwrite == 0) {
                                $check = $this->direct.$upfile_name;
                                if(is_file($check)) {
                                                echo "<tr><td>".sprintf(MYU_CHOSENOTTO, $upfile_name)."</td></tr>\n";
                                                $go_ahead = 0;
                                        } else $go_ahead = 1;
                            }
                            if($overwrite == 1 || $go_ahead == 1) {
                                        $tsize = $this->dirsize();
                                    $o = 0;
                                    if(!empty($this->maxlimit)) {
                                        if(($upfile_size + $tsize) > $this->maxlimit) {
                                            echo "<tr><td>".MYU_SORRYNOTENOUGH."</td></tr>";
                                            $o = 1;
                                        }
                                    }
                                    $sql = "SELECT * FROM ".$this->prefix."_uploads WHERE type = 'banned'";
                                    $res = $this->db->sql_query($sql, FALSE);
                                    if($this->db->sql_numrows($res) != 0) {
                                            $p = 1;
                                            while($row = $this->db->sql_fetchrow($res)) {
                                                        $ext = $row['info'];
                                                        if($this->howtoban == 0) {
                                                                if($ext != "[NOEXT]") {
                                                            if(eregi($ext."$", $upfile_name)) {
                                                                $o = 1;
                                                                echo "<tr><td>".MYU_SORRYCANNOTUP."</td></tr>";
                                                        }
                                                    } else {
                                            if(!eregi("\..+$", $upfile_name)) {
                                                                $o = 1;
                                                                echo "<tr><td>".MYU_SORRYCANNOTUP."</td></tr>";
                                                        }
                                                    }
                                                        } elseif($this->howtoban == 1) {
                                                                if($p != 0) {
                                                                        if($ext != "[NOEXT]") {
                                                                                if(eregi($ext."$", $upfile_name)) {
                                                                                        $o = 0;
                                                                                        $p = 0;
                                                                                        $e = 0;
                                                                                } else {
                                                                    $o = 1;
                                                                    $e = 1;
                                                            }
                                                        } else {
                                                if(!eregi("\..+$", $upfile_name)) {
                                                                                        $o = 0;
                                                                                        $p = 0;
                                                                                        $e = 0;
                                                                                } else {
                                                                    $o = 1;
                                                                    $e = 1;
                                                            }
                                                        }
                                                                }
                                                        }
                                        }
                                if($this->check_file_name($upfile_name)) {
                                                        echo "<tr><td>".MYU_AFILENADADADA."</td></tr>";
                                                        $o = 1;
                                                }
                                                if($e == 1)        echo "<tr><td>".MYU_SORRYCANNOTUP."</td></tr>";
                                }
                                    if($o == 0) {
                                        if(@copy($upfile_temp, $this->direct.$upfile_name)) {
                                                        echo "<tr><td>".sprintf(MYU_THEFILEWAS, $upfile_name)."</td></tr>\n";
                                                        @chmod($this->direct.$upfile_name, $file_mode);
                                                } else echo "<tr><td>".sprintf(MYU_THEFILEWASNOT, $upfile_name)."</td></tr>\n";
                                                @unlink($upfile_temp);
                                }
                            }
                            @unlink($upfile);
                    } else {
                                if($phpversion >= "420" && $upfile_eror != 0) $error = $this->get_upload_error_message($upfile_eror);
                                echo "<tr><td><strong><i>".MYU_THEFILEWASNOTABLE."\n<br />$error</strong></i></td></tr>\n";
                        }
                        echo "</table></td></tr></table>\n";
                           CloseTable();
                }
                if($rename) {
            echo "<p>";
                    OpenTable();
                    echo "<strong>".MYU_RENAMERESULTS."</strong><br /><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">";
                    for($n=0;$n<count($rename);$n++) {
                                $oldfilename = $rename[$n];
                                 if(empty($newname[$oldfilename])) $newname[$oldfilename] = $oldfilename;
                                 $newfilename = stripslashes($newname[$oldfilename]);
                                 $oldfilename = stripslashes($oldfilename);
                                 $old = $this->direct.$oldfilename;
                                $new = $this->direct.$newname[$oldfilename];
                                $sql = "SELECT * FROM ".$this->prefix."_uploads WHERE type = 'banned'";
                               $res = $this->db->sql_query($sql, FALSE);
                               $o = 1;
                               $p = 1;
                               $e = 0;
                               while($row = $this->db->sql_fetchrow($res)) {
                                        $ext = $row['info'];
                                        if($this->howtoban == 0) {
                                                if($ext != "[NOEXT]") {
                                        if(eregi($ext."$", $newfilename)) {
                                            $o = 0;
                                            $e = 1;
                                    }
                                } else {
                                    if(!eregi("\..+$", $newfilename)) {
                                            $o = 0;
                                            $e = 1;
                                    }
                                }
                                        } elseif($this->howtoban == 1) {
                                                if($p != 0) {
                                                        if($ext != "[NOEXT]") {
                                                                if(eregi($ext."$", $newfilename)) {
                                                                        $o = 1;
                                                                        $p = 0;
                                                                        $e = 0;
                                                                } else {
                                                    $o = 0;
                                                    $e = 1;
                                            }
                                        }
                                                }
                                        }
                        }
                                if($this->check_file_name($newfilename)) {
                                        echo "<tr><td>".MYU_AFILENADADADA."</td></tr>";
                                        $o = 1;
                                }
                                if($e == 1) echo "<tr><td>".MYU_CANNOTRENAME." \"$oldfilename\" ".MYU_TOTHATTYPEOFFILE."</td></tr>";
                                if($o == 1) {
                                     if(@rename($old, $new)) echo "<tr><td>".sprintf(MYU_HASBEENRENAMED, $oldfilename, $newfilename)."</td></tr>\n";
                            else echo "<tr><td>".sprintf(MYU_COULDNOTBERENAMED, $oldfilename, $newfilename)."</td></tr>\n";
                        }
                    }
                           echo "<tr><td>&nbsp;</td></tr></table>\n";
                        CloseTable();
                }
                if($delete) {
            echo "<p>";
                    OpenTable();
                    echo "<strong>".MYU_DELETERESULTS."</strong><br /><table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">";
                    for($i=0;$i<count($delete);$i++) {
                        if(@unlink($this->direct.$delete[$i])) echo "<tr><td>".sprintf(MYU_WASSUCCESFULL, $delete[$i])."</td></tr>\n";
                        else echo "<tr><td>".sprintf(MYU_COULDNOTBEDELETED, $delete[$i])."</td></tr>\n";
                    }
                           echo "<tr><td>&nbsp;</td></tr></table>\n";
                           CloseTable();
                }
        echo "<p>";
                OpenTable();
                echo "<table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">"
                    ."<form action=\"modules.php?name=".$this->module_name."\" method=\"post\" enctype=\"multipart/form-data\">\n"
                    ."<tr><td><strong>".MYU_FILENAME."</strong></td><td><strong>".MYU_FILESIZE."</strong></td><td><strong>".MYU_DELETE."</strong></td><td><strong>".MYU_RENAME."</strong></td></tr>\n";
                $open = opendir($this->direct);
                $i = 0;
                while($files = readdir($open)) {
                         $filename = $this->direct.$files;
                         if(is_file($filename)) {
                            $i++;
                                 $size = filesize($this->direct.$files);
                                 $size = $this->getbettersize($size);
                                $smaller_name = substr($files, 0, 25);
                                 if($smaller_name != $files) $smaller_name .= "...";
                        echo "<tr><td><a href=\"".$this->url.$this->userinfo['username']."/".stripslashes($files)."\" target=\"_blank\" \n"
                                        ."title=\"".stripslashes($files)."\">$smaller_name</a></td>\n"
                                        ."<td>$size</td><td><input type=\"checkbox\" name=\"delete[]\" value=\"".stripslashes($files)."\"></td>"
                            ."<td><input type=\"text\" name=\"newname[".stripslashes($files)."]\" value=\"".stripslashes($files)."\"> <strong>".MYU_CONFIRM."</strong>\n"
                                        ."<input type=\"checkbox\" name=\"rename[]\" value=\"".stripslashes($files)."\"></td></tr>\n";
                    }
                }
                if($i == 0) echo "<tr><td colspan=\"4\"><i>".MYU_NOUPLOADEDFILES."</i></td></tr>\n";
                echo "</table>";
                closedir($open);
                CloseTable();
        echo "<p>";
                OpenTable();
                echo "<strong>".MYU_ACCOUNTSUMMARY."</strong><br />";
                $used = $this->dirsize();
                if(!empty($this->maxlimit)) {
                    $left = $this->maxlimit - $used;
                    $this->maxlimit = $this->getbettersize($this->maxlimit);
                    $left = $this->getbettersize($left);
                }
                $used = $this->getbettersize($used);
                if(!empty($this->maxlimit)) echo "<br />".MYU_YOUHAVEUSEDATOTAL." ".$this->maxlimit;
                echo "<br />".MYU_YOURHAVEUSED." $used<br />";
                if(!empty($this->maxlimit)) echo MYU_YOUHAVE." $left ".MYU_LEFT;
                $disurl = "&lt;<a href=\"".$this->url.$this->userinfo['username']."/\" target=\"_blank\">".$this->url.$this->userinfo['username']."/</a>&gt;\n";
                echo "<br />".sprintf(MYU_YOURURLIS, $disurl);
                CloseTable();
        echo "<p>";
                OpenTable();
                $upload_max_filesize = ini_get("upload_max_filesize");
                if(empty($upload_max_filesize)) $upload_max_filesize = "0M";
                echo "<table border=\"0\" width=\"100%\" cellspacing=\"2\" cellpadding=\"2\">"
                        ."<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<strong>".MYU_UPLOADAFILE."</strong><center><br /><input type=\"file\" name=\"upfile\" size=\"40\">\n"
                        ."<strong>".MYU_OVERWRITE."</strong> <input type=\"checkbox\" name=\"overwrite\" value=\"1\"></center></td></tr>\n"
                        ."<tr><td align=\"center\">".sprintf(MYU_THEMAXIMUMFILE, $upload_max_filesize)."</td></tr></table>\n";
                CloseTable();
        echo "<p>";
                OpenTable();
                echo "<center><input type=\"submit\" value=\"".MYU_SUBMIT."\"></center>\n";
                CloseTable();
        echo "<p>";
                OpenTable();
                echo "<center><strong>[ <a href=\"modules.php?name=".$this->module_name."&amp;file=browse\">".MYU_BROWSEUSERFOLDERS."</a>\n";
                if(is_admin($this->admin)) echo ":: <a href=\"" . $admin_file . ".php?op=uploads#start\" target=\"_blank\">".MYU_MYUPLOADSADMIN."</a>\n";
                echo "]</strong></center>\n";
                CloseTable();
                include_once(NUKE_BASE_DIR.'footer.php');
        }

        function notuser() {
                global $admin_file;
                include_once(NUKE_BASE_DIR.'header.php');
                title(MYU_MYUPLOADS);
                OpenTable();
                echo MYU_USERSONLY1.MYU_USERSONLY2.MYU_USERSONLY3;
                CloseTable();
        echo "<p>";
                OpenTable();
                echo "<center><strong>[ <a href=\"modules.php?name=".$this->module_name."&amp;file=browse\">".MYU_BROWSEUSERFOLDERS."</a>\n";
                if(is_admin($this->admin)) echo ":: <a href=\"" . $admin_file . ".php?op=uploads#start\" target=\"_blank\">".MYU_MYUPLOADSADMIN."</a>\n";
                echo "]</strong></center>\n";
                CloseTable();
                include_once(NUKE_BASE_DIR.'footer.php');
        }
}

global $prefix, $db, $user, $admin, $HTTP_POST_VARS;
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
$uploads = new uploads($HTTP_POST_VARS, $user, $admin, $prefix, $db, $module_name);
if(!is_user()) $uploads->notuser();
else $uploads->index($delete, $newname, $rename, $upfile, $overwrite, $upfile_name, $upfile_size);
exit;

?>