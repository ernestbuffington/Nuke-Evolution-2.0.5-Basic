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

if(!defined('NUKE_EVO')) exit;

class myublock {
        function myublock($module_name, $db, $prefix) {
                $this->module_name = $module_name;
                $this->db = $db;
                $this->prefix = $prefix;
                $sql = "SELECT * FROM ".$this->prefix."_uploads";
                $res = $this->db->sql_query($sql, TRUE);
                while($row = $this->db->sql_fetchrow($res)) {
                        if($row['type'] == "limit") $this->maxlimit = $row['info'];
                         if($row['type'] == "directory") $this->direct = $row['info'];
                         if($row['type'] == "howtoban") $this->howtoban = $row['info'];
                         if($row['type'] == "url") $this->url = $row['info'];
                         if($row['type'] == "version") $this->version = $row['info'];
                         if($row['type'] == "user_type") $this->allow_all = $row['info'];
                }
                if(!eregi("/$", $this->direct) && !eregi("\\\\$", $this->direct)) $this->direct = $this->direct ."/";
                if(!eregi("/$", $this->url)) $this->url .= "/";
        }
        function doblock() {
                $content = "<strong>".MYU_RECENTLYUPLOADED.":</strong><br />"
                    ."<marquee behavior=\"right\" align=\"center\" direction=\"up\" scrollamount=\"2\" onmouseover=\"this.stop()\" onmouseout=\"this.start()\">\n";
                $open = @opendir($this->direct);
                $is_files = 0;
                $start = 0;
                while($dir = @readdir($open)) {
                        if(@is_dir($this->direct.$dir) && $dir != "." && $dir != "..") {
                                $open_sub = @opendir($this->direct.$dir);
                                while($files = @readdir($open_sub)) {
                                        if(@is_file($this->direct.$dir."/".$files)) {
                                                $time = @filemtime($this->direct.$dir."/".$files);
                                                $size = @filesize($this->direct.$dir."/".$files);
                                                $start++;
                                                $array1[$start]['user'] = $dir;
                                                $array1[$start]['file'] = $files;
                                                $array1[$start]['size'] = $size;
                                                $array2[$start] = $time;
                                        }
                                }
                        }
                }
                $sortstart = 0;
                if(@is_array($array2)) {
                        @arsort($array2, SORT_NUMERIC);
                        while(list($key, $value) = each($array2)) {
                                $sortstart++;
                                if($sortstart <= 10) {
                                        $content .= "<big><strong>&middot;</strong></big> <a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=".$array1[$key]['user']."\" target=\"_blank\">".$array1[$key]['user']."</a><br />\n"
                                            ."<big><strong>&middot;</strong></big> <a href=\"".$this->url.$array1[$key]['user']."/".$array1[$key]['file']."\" target=\"_blank\">".$array1[$key]['file']."</a><br />\n"
                                            ."<big><strong>&middot;</strong></big> ".$this->getbettersize($array1[$key]['size'])."<br /><br />\n";
                                }
                        }
                }
                $content .= "</marquee>";
                return $content;
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
}
$module_name = "Uploads";
get_lang($module_name);
global $db, $prefix;
$myublock = new myublock($module_name, $db, $prefix);
$content = $myublock->doblock();

?>