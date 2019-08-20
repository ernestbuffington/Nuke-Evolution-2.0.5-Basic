<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

@set_time_limit( 600 );
$perpage = 100;
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_users` WHERE `active`='1' AND `lid`='$lid'"));
if(!isset($min)) {
  $min=0;
  $pagesint = ($totalselected / $perpage);
  $pages = ceil($pagesint);
  $pagetitle = "- "._ML_ADMIN." ".$ml_config['version_number'];
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  title(_ML_ADMIN." ".$ml_config['version_number']);
  ML_Admin();
  echo "<br />\n";
  OpenTable();
  if(!get_magic_quotes_runtime()) {
    $sub1 = addslashes($sub);
    $text1 = addslashes($text);
    $htmltext1 = addslashes($htmltext);
  } else {
    $sub1 = $sub;
    $text1 = $text;
    $htmltext1 = $htmltext;
  }
  $query = "INSERT `".$prefix."_nsnml_issues` VALUES (NULL, '$lid', '$sub1', '$text1', '$htmltext1', '".time()."')";
  if(!$db->sql_query($query)) {
    $result = $db->sql_error($query);
    echo "<center><strong>".$result['code'].": ".$result['message']."</strong></center>\n";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
    return;
  }
  $nid = $db->sql_nextid();
  echo _ML_SENDISSUE01."<br />\n";
  echo _ML_SENDISSUE02."<br />\n";
  echo _ML_SENDISSUE03."<br />\n";
  echo _ML_SENDISSUE05."$pages"._ML_SENDISSUE06."<br />\n";
  echo "<br />\n";
  echo "<form method='post' action='".$admin_file.".php'>\n";
  echo "<input type='hidden' name='op' value='MLSend'>\n";
  echo "<input type='hidden' name='min' value='$min'>\n";
  echo "<input type='hidden' name='nid' value='$nid'>\n";
  echo "<input type='hidden' name='lid' value='$lid'>\n";
  echo "<input type='submit' value=\""._ML_LETSGETSTART."\">\n";
  echo "</form>\n";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
} else if($min < $totalselected) {
  $max=$min+$perpage;
  $pagesint = ($totalselected / $perpage);
  $pages = ceil($pagesint);
  $currentpage = ($max / $perpage);
  $pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  title(_ML_ADMIN." ".$ml_config['version_number']);
  ML_Admin();
  echo "<br />\n";
  OpenTable();
  $issue_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnml_issues` WHERE `nid`='$nid'"));
  $list_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists` WHERE `lid`='$lid'"));
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_users` WHERE `active`='1' AND `lid`='$lid' LIMIT $min, $perpage");
  while($user_info = $db->sql_fetchrow($result)) {
    if($user_info['html'] == '0') {
      evo_mail($user_info['email'], "[".stripslashes($list_info['title'])."] ".stripslashes($issue_info['subject']), stripslashes(strip_tags(str_replace("<br />", "\n",$issue_info['text_plain']))), "From: $adminmail");
    } else {
      if(strlen($issue_info['text_html']) > 1) {
        evo_mail($user_info['email'], "[".stripslashes($list_info['title'])."] ".stripslashes($issue_info['subject']), stripslashes($issue_info['text_html']), "From: $adminmail\r\nContent-Type: text/html; charset=iso-8859-1");
      } else {
        evo_mail($user_info['email'], "[".stripslashes($list_info['title'])."] ".stripslashes($issue_info['subject']), stripslashes(strip_tags(str_replace("<br />", "\n",$issue_info['text_plain']))), "From: $adminmail");
      }
    }
    $count++;
    $query = "INSERT `".$prefix."_nsnml_tracked` SET `mid`='".$user_info['mid']."', `nid`='$nid', `lid`='$lid', `sent`='".time()."'";
    if(!$db->sql_query($query)) {
       $result = $db->sql_error($query);
       echo "<center><strong>".$result['code'].": ".$result['message']."</strong></center>\n";
       CloseTable();
       include_once(NUKE_BASE_DIR.'footer.php');
       return;
    }
  }
  echo "<meta http-equiv=\"refresh\" content=\"1;URL=".$admin_file.".php?op=MLSend&amp;min=$max&amp;nid=$nid&amp;lid=$lid\">";
  echo "<strong>"._ML_SECTION." $currentpage "._ML_OF." $pages "._ML_COMPLETED."</strong><br />\n";
  if($currentpage==$pages) {
  } else {
    echo "<strong>"._ML_SECTION." ".($currentpage+1)." "._ML_WILLSTART."</strong><br />\n";
  }
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
} else {
  $pagetitle = "- "._ML_ADMIN." ".$ml_config['version_number'];
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  title(_ML_ADMIN." ".$ml_config['version_number']);
  ML_Admin();
  echo "<br />\n";
  OpenTable();
  echo "<center><strong>"._ML_SENT."</strong><br />\n";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
}

?>