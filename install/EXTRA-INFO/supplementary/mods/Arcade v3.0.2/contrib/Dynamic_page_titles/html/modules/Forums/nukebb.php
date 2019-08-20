<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/***************************************************************************
 * phpbb2 forums port version 2.1 (c) 2003 - Nuke Cops (http://nukecops.com)
 *
 * Ported by Paul Laudanski (Zhen-Xjell) to phpbb2 standalone 2.0.4.  Test
 * and debugging completed by the Elite Nukers at Nuke Cops: ArtificialIntel,
 * Chatserv, MikeM, sixonetonoffun, Zhen-Xjell.  Thanks to some heavy debug
 * work by AI in Nuke 6.5.
 *
 * You run this package at your sole risk.  Nuke Cops and affiliates cannot
 * be held liable if anything goes wrong.  You are advised to test this
 * package on a development system.  Backup everything before implementing
 * in a production environment.  If something goes wrong, you can always
 * backout and restore your backups.
 *
 * Installing and running this also means you agree to the terms of the AUP
 * found at Nuke Cops.
 *
 * This is version 2.1 of the phpbb2 forum port for PHP-Nuke.  Work is based
 * on Tom Nitzschner's forum port version 2.0.6.  Tom's 2.0.6 port was based
 * on the phpbb2 standalone version 2.0.3.  Our version 2.1 from Nuke Cops is
 * now reflecting phpbb2 standalone 2.0.4 that fixes some major SQL
 * injection exploits.
 ***************************************************************************/

/***************************************************************************
 *   This file is part of the phpBB2 port to Nuke 6.0 (c) copyright 2002
 *   by Tom Nitzschner (tom@toms-home.com)
 *   http://bbtonuke.sourceforge.net (or http://www.toms-home.com)
 *
 *   As always, make a backup before messing with anything. All code
 *   release by me is considered sample code only. It may be fully
 *   functual, but you use it at your own risk, if you break it,
 *   you get to fix it too. No waranty is given or implied.
 *
 *   Please post all questions/request about this port on http://bbtonuke.sourceforge.net first,
 *   then on my site. All original header code and copyright messages will be maintained
 *   to give credit where credit is due. If you modify this, the only requirement is
 *   that you also maintain all original copyright messages. All my work is released
 *   under the GNU GENERAL PUBLIC LICENSE. Please see the README for more information.
 *
 ***************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/20/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

global $db, $prefix, $phpbb_root_path, $nuke_root_path, $nuke_file_path, $phpbb_root_dir, $module_name, $name, $file, $user_prefix;

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
$module_name = basename(dirname(__FILE__));
$nuke_root_path = "modules.php?name=".$module_name;
$nuke_file_path = "modules.php?name=".$module_name."&amp;file=";
$phpbb_root_path = NUKE_FORUMS_DIR;
$phpbb_root_dir = "./../";
get_lang($module_name);

if($name=="Private_Messages") $pagetitle = "&raquo; Messages";
elseif($name=="Forums") $pagetitle = "&raquo; Forums";
elseif($name=="Members_List") $pagetitle = "&raquo; Members";
if($t) {
  $sql = "SELECT topic_title, forum_id FROM ".$prefix."_bbtopics WHERE topic_id='$t'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $title = $row['topic_title'];
  $forum = $row['forum_id'];

  $sql = "SELECT forum_name FROM ".$prefix."_bbforums WHERE forum_id='$forum'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['forum_name'];
  $pagetitle = "&raquo; Forums &raquo; $forum &raquo; $title";
}
elseif($p && $name!="Private_Messages") {
  $sql = "SELECT topic_id, forum_id FROM ".$prefix."_bbposts WHERE post_id='$p'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $topic_id = $row['topic_id'];
  $forum = $row['forum_id'];

  $sql = "SELECT topic_title, forum_id FROM ".$prefix."_bbtopics WHERE topic_id='$topic_id'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $title = $row['topic_title'];
  $forum = $row['forum_id'];

  $sql = "SELECT forum_name FROM ".$prefix."_bbforums WHERE forum_id='$forum'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['forum_name'];
  $pagetitle = "&raquo; Forums &raquo; $forum &raquo; $title";
}
elseif($p && $name=="Private_Messages") {
  $sql = "SELECT privmsgs_subject FROM ".$prefix."_bbprivmsgs WHERE privmsgs_id='$p'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['privmsgs_subject'];
  $pagetitle = "&raquo; Messages &raquo; $forum ";
}
elseif($f) {
  $sql = "SELECT forum_name FROM ".$prefix."_bbforums WHERE forum_id='$f'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['forum_name'];
  $pagetitle = "&raquo; Forums &raquo; $forum";
}
elseif($cid) {
  $sql = "SELECT arcade_cattitle FROM ".$prefix."_bbarcade_categories WHERE arcade_catid='$cid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $cattitle = $row['arcade_cattitle'];
  $pagetitle = "&raquo; Forums &raquo; Arcade &raquo; $cattitle ";
}
elseif($file == 'search') {
$pagetitle = "&raquo; Forums &raquo; Search";
}
elseif($file == 'arcade') {
$pagetitle = "&raquo; Forums &raquo; Arcade";
}
elseif($file == 'arcade_search') {
if($x==1)
{$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Search &raquo; Games I Didn't Play";}
elseif($x==2)
{$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Search &raquo; Newest Games";}
else
{$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Search";}
}
elseif($file == 'comments') {
$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Comments";
}
elseif($file == 'comments_list') {
$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Comments";
}
elseif($file == 'comments_new') {
$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; New Champion";
}
elseif($file == 'toparcade') {
$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Top 5 Players";
}
elseif($uid && $file == 'statarcade') {
$sql = "SELECT username FROM ".$user_prefix."_users WHERE user_id='$uid'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$forum = $row['username'];
$pagetitle = "&raquo; Forums &raquo; Arcade &raquo; User Stats for $forum";
}
elseif($gid && $file == 'scoreboard') {
  $sql = "SELECT game_name FROM ".$prefix."_bbgames WHERE game_id='$gid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['game_name'];
  $pagetitle = "&raquo; Forums &raquo; Arcade &raquo; Scores for $forum";
}
elseif($gid) {
  $sql = "SELECT arcade_value FROM ".$prefix."_bbarcade WHERE arcade_name='use_category_mod'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['arcade_value'];

  if($forum != 1)
  {
  $sql = "SELECT game_name FROM ".$prefix."_bbgames WHERE game_id='$gid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['game_name'];
  $pagetitle = "&raquo; Forums &raquo; Arcade &raquo; $forum";
  }
  else
  {
  $sql = "SELECT arcade_catid FROM ".$prefix."_bbgames WHERE game_id='$gid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $catid = $row['arcade_catid'];

  $sql = "SELECT arcade_cattitle FROM ".$prefix."_bbarcade_categories WHERE arcade_catid='$catid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $cattitle = $row['arcade_cattitle'];

  $sql = "SELECT game_name FROM ".$prefix."_bbgames WHERE game_id='$gid'";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $forum = $row['game_name'];

  $pagetitle = "&raquo; Forums &raquo; Arcade &raquo; $cattitle &raquo; $forum";
  }
}
elseif($u) {
$sql = "SELECT username FROM ".$user_prefix."_users WHERE user_id='$u'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$forum = $row['username'];
$pagetitle = "&raquo; Profile &raquo; $forum";
}

include_once(NUKE_BASE_DIR.'header.php');

?>