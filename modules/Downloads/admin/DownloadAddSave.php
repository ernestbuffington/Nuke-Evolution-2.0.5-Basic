<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Downloads Module
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : DownloadAddSave.php
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

$pagetitle = _DOWNLOADSADMIN;
$numrows = $db->sql_numrows($db->sql_query("SELECT url FROM ".$prefix."_downloads_downloads WHERE url='$url'"));
if ($numrows>0) {
  include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
  title($pagetitle);
  //include_once(NUKE_ADMIN_MODULE_DIR.'index.php');
  //adminmain();
  echo "<br />\n";
  OpenTable();
  echo "<center><span class='content'><strong>"._ERRORURLEXIST."</strong></center><br />";
  echo "<center>"._GOBACK."</center>";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
  die();
} else {
  if ($title=="" || $url=="" || $description=="") {
    include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
    title($pagetitle);
    include_once(NUKE_ADMIN_MODULE_DIR.'index.php');
    adminmain();
    echo "<br />\n";
    OpenTable();
    if($title=="") { echo "<center><span class='content'><strong>"._ERRORNOTITLE."</strong></center><br />"; }
    if($url=="") { echo "<center><span class='content'><strong>"._ERRORNOURL."</strong></center><br/ >"; }
    if($description=="") { echo "<center><span class='content'><strong>"._ERRORNODESCRIPTION."</strong></center><br />"; }
    echo "<center>"._GOBACK."</center>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
  }
  $title = Fix_Quotes($title);
  $url = Fix_Quotes($url);
  $description = Fix_Quotes($description);
  $sname = Fix_Quotes($sname);
  $email = Fix_Quotes($email);
  $sub_ip = $_SERVER['REMOTE_ADDR'];
  $filesize = str_replace(',', '', $filesize);
  $filesize = str_replace('.', '', $filesize);
  $filesize = intval($filesize);
  if (empty($submitter)) { $submitter = $aname; }
  $db->sql_query("INSERT INTO ".$prefix."_downloads_downloads VALUES (NULL, '$cat', '$perm', '$title', '$url', '$description', now(), '$sname', '$email', '$hits', '$submitter', '$sub_ip', '$filesize', '$version', '$homepage', '1')");
  echo "<br /><center><span class='option'>"._NEWDOWNLOADADDED."<br /><br />";
  echo "[ <a href='".$admin_file.".php?op=Downloads'>"._DOWNLOADSADMIN."</a> ]</center><br /><br />";
  if ($new==1) {
    $result = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_downloads_accesses WHERE username='$sname'"));
    if ($result < 1) {
      $db->sql_query("INSERT INTO ".$prefix."_downloads_accesses VALUES ('$sname', 0, 1)");
    } else {
      $db->sql_query("UPDATE ".$prefix."_downloads_accesses SET uploads=uploads+1 WHERE username='$submitter'");
    }
    $db->sql_query("DELETE FROM ".$prefix."_downloads_new WHERE lid='$lid'");
    if ($email!="") {
      $subject = ""._YOURDOWNLOADAT." $sitename";
      $message = ""._HELLO." $sname:\n\n"._DL_APPROVEDMSG."\n\n"._TITLE.": $title\n"._URL.": $url\n"._DESCRIPTION.": $description\n\n\n"._YOUCANBROWSEUS." $nukeurl/modules.php?name=$module_name\n\n"._THANKS4YOURSUBMISSION."\n\n$sitename "._TEAM."";
      $from = "$sitename";
      @evo_mail($email, $subject, $message, "From: $from\nX-Mailer: PHP/" . PHPVERS);
      $cache->delete('numwaitd', 'submissions');
    }
  }
  if($xop == "DownloadNew") { $zop = $xop; } else { $zop = "Downloads"; }
  redirect($admin_file.".php?op=".$zop);
}

?>