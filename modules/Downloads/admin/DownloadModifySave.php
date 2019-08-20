<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Downloads Module
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : DownloadModifySave.php
   Author        : Quake (www.Nuke-Evolution.com)
   Version       : 1.0.0
   Date          : 11.21.2005 (mm.dd.yyyy)

   Notes         : Advanced Downloads module with BBGroups Integration
                   based on NSN GR Downloads.
************************************************************************/

/********************************************************/
/* Based on NSN GR Downloads                            */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

if(!empty($uploaddir)) {
    if(substr($uploaddir,0,1) == '/') {
        $uploaddir = substr($uploaddir,1);
    }
    $folder = dirname(dirname(__FILE__)) . '/files' . $uploaddir;
    if(!is_dir($folder)) {
        if(mkdir($folder)) {
            include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
            $pagetitle = _CATEGORIESADMIN.": "._DL_ERROR;
            title($pagetitle);
            OpenTable();
            echo "<center><strong>".sprintf(_DL_ERROR_DIR,$folder)."</strong></center><br />\n";
            echo "<center>"._GOBACK."</center>\n";
            CloseTable();
            include_once(NUKE_BASE_DIR.'footer.php');
            die();
        }
        if(!copy(dirname(dirname(__FILE__)) . '/files/.htaccess', $folder.'/.htaccess')) {
            include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
            $pagetitle = _CATEGORIESADMIN.": "._DL_ERROR;
            title($pagetitle);
            OpenTable();
            echo "<center><strong>".sprintf(_DL_ERROR_HT,$folder)."</strong></center><br />\n";
            echo "<center>"._GOBACK."</center>\n";
            CloseTable();
            include_once(NUKE_BASE_DIR.'footer.php');
            die();
        }
        if(!copy(dirname(dirname(__FILE__)) . '/files/index.html', $folder.'/index.html')) {
            include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
            $pagetitle = _CATEGORIESADMIN.": "._DL_ERROR;
            title($pagetitle);
            OpenTable();
            echo "<center><strong>".sprintf(_DL_ERROR_INDEX,$folder)."</strong></center><br />\n";
            echo "<center>"._GOBACK."</center>\n";
            CloseTable();
            include_once(NUKE_BASE_DIR.'footer.php');
            die();
        }
    }
}

if (!isset($min)) { $min = 0; }
$title = Fix_Quotes($title);
$url = Fix_Quotes($url);
$description = Fix_Quotes($description);
$name = Fix_Quotes($name);
$email = Fix_Quotes($email);
$perm = Fix_Quotes($perm);
$filesize = str_replace(',', '', $filesize);
$filesize = str_replace('.', '', $filesize);
$filesize = intval($filesize);
$db->sql_query("UPDATE ".$prefix."_downloads_downloads SET cid='$cat', sid='$perm', title='$title', url='$url', description='$description', name='$rname', email='$email', hits='$hits', filesize='$filesize', version='$version', homepage='$homepage' WHERE lid='$lid'");
redirect($admin_file.".php?op=Downloads&min=$min");

?>