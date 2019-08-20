<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/***************************************************************************
 *                               constants.php
 *                            -------------------
 *   begin                : Saturday', Feb 13', 2001
 *   copyright            : ('C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   Id: constants.php,v 1.47.2.5 2004/11/18 17:49:42 acydburn Exp
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

/*****[CHANGES]**********************************************************
-=[Mod]=-
      Recent Topics                            v1.2.4       06/11/2005
      Global Announcements                     v1.2.8       06/13/2005
      Quick Search                             v3.0.1       08/23/2005
      Staff Site                               v2.0.3       06/24/2005
      Forum ACP Administration Links           v1.0.0       06/26/2005
      Advanced Time Management                 v2.1.2       07/26/2005
      XData                                    v1.0.3       02/08/2007
      At a Glance Options                      v1.0.0       08/17/2005
      Initial Usergroup                        v1.0.1       08/25/2005
      Report Posts                             v1.2.3       08/30/2005
 ************************************************************************/

if (!defined('IN_PHPBB') && !defined('NUKE_EVO'))
{
    die('Hacking attempt');
}

// Debug Level
//define('DEBUG', 1); // Debugging on
define('DEBUG', 1); // Debugging off
// User Levels <- Do not change the values of USER or ADMIN
define('DELETED', -1);
define('ANONYMOUS', 1);
define('USER', 1);
define('ADMIN', 2);
define('MOD', 3);
// User related
define('USER_ACTIVATION_NONE', 0);
define('USER_ACTIVATION_SELF', 1);
define('USER_ACTIVATION_ADMIN', 2);
define('USER_AVATAR_NONE', 0);
define('USER_AVATAR_UPLOAD', 1);
define('USER_AVATAR_REMOTE', 2);
define('USER_AVATAR_GALLERY', 3);
// Group settings
define('GROUP_OPEN', 0);
define('GROUP_CLOSED', 1);
define('GROUP_HIDDEN', 2);
/*****[BEGIN]******************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/
define('GROUP_INITIAL_NO', 0);
define('GROUP_INITIAL_YES', 1);
/*****[END]********************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/
// Forum state
define('FORUM_UNLOCKED', 0);
define('FORUM_LOCKED', 1);
// Topic status
define('TOPIC_UNLOCKED', 0);
define('TOPIC_LOCKED', 1);
define('TOPIC_MOVED', 2);
define('TOPIC_WATCH_NOTIFIED', 1);
define('TOPIC_WATCH_UN_NOTIFIED', 0);
// Topic types
define('POST_NORMAL', 0);
define('POST_STICKY', 1);
define('POST_ANNOUNCE', 2);
define('POST_GLOBAL_ANNOUNCE', 3);
/*****[BEGIN]******************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
define('POST_ADD_TYPE', 20);
/*****[END]********************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
// Error codes
define('GENERAL_MESSAGE', 200);
define('GENERAL_ERROR', 202);
define('CRITICAL_MESSAGE', 203);
define('CRITICAL_ERROR', 204);
// Private messaging
define('PRIVMSGS_READ_MAIL', 0);
define('PRIVMSGS_NEW_MAIL', 1);
define('PRIVMSGS_SENT_MAIL', 2);
define('PRIVMSGS_SAVED_IN_MAIL', 3);
define('PRIVMSGS_SAVED_OUT_MAIL', 4);
define('PRIVMSGS_UNREAD_MAIL', 5);
// URL PARAMETERS
define('POST_TOPIC_URL', 't');
define('POST_CAT_URL', 'c');
define('POST_FORUM_URL', 'f');
define('POST_USERS_URL', 'u');
define('POST_POST_URL', 'p');
define('POST_GROUPS_URL', 'g');
// Session parameters
define('SESSION_METHOD_COOKIE', 100);
define('SESSION_METHOD_GET', 101);
// Page numbers for session handling
define('PAGE_INDEX', 0);
define('PAGE_LOGIN', -1);
define('PAGE_SEARCH', -2);
define('PAGE_REGISTER', -3);
define('PAGE_PROFILE', -4);
define('PAGE_VIEWONLINE', -6);
define('PAGE_VIEWMEMBERS', -7);
define('PAGE_FAQ', -8);
define('PAGE_POSTING', -9);
define('PAGE_PRIVMSGS', -10);
define('PAGE_GROUPCP', -11);
/*****[BEGIN]******************************************
 [ Mod:     Users Reputations Systems          v1.0.0 ]
 ******************************************************/
define('PAGE_REPUTATION', -1280);
/*****[END]********************************************
 [ Mod:     Users Reputations System           v1.0.0 ]
 ******************************************************/

/*--ARCADE MOD #1--*/

/*****[BEGIN]******************************************
 [ Mod:     Staff Site                         v2.0.3 ]
 ******************************************************/
define('PAGE_STAFF', -12);
/*****[END]********************************************
 [ Mod:     Staff Site                         v2.0.3 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Recent Topics                      v1.2.4 ]
 ******************************************************/
define('PAGE_RECENT', -33);
/*****[END]********************************************
 [ Base:    Recent Topics                      v1.2.4 ]
 ******************************************************/

define('PAGE_TOPIC_OFFSET', 5000);
// Auth settings
define('AUTH_LIST_ALL', 0);
define('AUTH_ALL', 0);
define('AUTH_REG', 1);
define('AUTH_ACL', 2);
define('AUTH_MOD', 3);
define('AUTH_ADMIN', 5);
define('AUTH_VIEW', 1);
define('AUTH_READ', 2);
define('AUTH_POST', 3);
define('AUTH_REPLY', 4);
define('AUTH_EDIT', 5);
define('AUTH_DELETE', 6);
define('AUTH_ANNOUNCE', 7);
define('AUTH_STICKY', 8);
define('AUTH_POLLCREATE', 9);
define('AUTH_VOTE', 10);
define('AUTH_ATTACH', 11);
/*****[BEGIN]******************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/
define('AUTH_GLOBALANNOUNCE', 12);
define('HIDDEN_CAT', 0); // NOTE: change this value to the forum id, of the forum, witch you would like to be hidden
/*****[END]********************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/
// Table names
//define('CONFIRM_TABLE', $prefix.'_bbconfirm');
define('AUC_TABLE', $prefix.'_bbadvanced_username_color');
define('AUTH_ACCESS_TABLE', $prefix.'_bbauth_access');
define('BANLIST_TABLE', $prefix.'_bbbanlist');
define('CATEGORIES_TABLE', $prefix.'_bbcategories');
define('CONFIG_TABLE', $prefix.'_bbconfig');
define('DISALLOW_TABLE', $prefix.'_bbdisallow');
define('FORUMS_TABLE', $prefix.'_bbforums');
define('GROUPS_TABLE', $prefix.'_bbgroups');
/*****[BEGIN]******************************************
 [ Mod:    Junior Admin                        v2.0.5 ]
 ******************************************************/
define('JR_ADMIN_TABLE', $prefix.'_bbjr_admin_users');
/*****[END]********************************************
 [ Mod:    Junior Admin                        v2.0.5 ]
 ******************************************************/
define('POSTS_TABLE', $prefix.'_bbposts');
/*--FNA--*/
define('POSTS_TEXT_TABLE', $prefix.'_bbposts_text');
define('PRIVMSGS_TABLE', $prefix.'_bbprivmsgs');
define('PRIVMSGS_TEXT_TABLE', $prefix.'_bbprivmsgs_text');
define('PRIVMSGS_IGNORE_TABLE', $prefix.'_bbprivmsgs_ignore');
define('PRUNE_TABLE', $prefix.'_bbforum_prune');
define('RANKS_TABLE', $prefix.'_bbranks');
define('SEARCH_TABLE', $prefix.'_bbsearch_results');
define('SEARCH_WORD_TABLE', $prefix.'_bbsearch_wordlist');
define('SEARCH_MATCH_TABLE', $prefix.'_bbsearch_wordmatch');
define('SESSIONS_TABLE', $prefix.'_bbsessions');
define('SESSIONS_KEYS_TABLE', $prefix.'_bbsessions_keys');
define('SMILIES_TABLE', $prefix.'_bbsmilies');
define('THEMES_TABLE', $prefix.'_bbthemes');
define('THEMES_NAME_TABLE', $prefix.'_bbthemes_name');
/*****[BEGIN]******************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
define('TOPIC_ADD_TYPE_TABLE', $prefix.'_bbtopic_add_type');
/*****[END]********************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
define('TOPICS_TABLE', $prefix.'_bbtopics');
define('TOPICS_WATCH_TABLE', $prefix.'_bbtopics_watch');
define('USER_GROUP_TABLE', $prefix.'_bbuser_group');
define('USERS_TABLE', $user_prefix.'_users');
define('WORDS_TABLE', $prefix.'_bbwords');
define('VOTE_DESC_TABLE', $prefix.'_bbvote_desc');
define('VOTE_RESULTS_TABLE', $prefix.'_bbvote_results');
define('VOTE_USERS_TABLE', $prefix.'_bbvote_voters');
// FLAGHACK-start
define('FLAG_TABLE', $prefix.'_bbflags');
// FLAGHACK-end
/*****[BEGIN]******************************************
 [ Mod:     Users Reputations Systems          v1.0.0 ]
 ******************************************************/
define('REPUTATION_TABLE', $prefix.'_bbreputation');
define('REPUTATION_CONFIG_TABLE', $prefix.'_bbreputation_config');
/*****[END]********************************************
 [ Mod:     Users Reputations System           v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Profile Views                       v1.1.0 ]
 ******************************************************/
define('PROFILE_VIEWS_TABLE', $prefix.'_profile_views');
/*****[END]********************************************
 [ Mod:    Profile Views                       v1.1.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     XData                              v1.0.3 ]
 ******************************************************/
define('XDATA_FIELDS_TABLE', $prefix.'_bbxdata_fields');
define('XDATA_DATA_TABLE', $prefix.'_bbxdata_data');
define('XDATA_AUTH_TABLE', $prefix.'_bbxdata_auth');

define('XD_AUTH_ALLOW', 1);
define('XD_AUTH_DENY', 0);
define('XD_AUTH_DEFAULT', 2);

define('XD_DISPLAY_NORMAL', 1);
define('XD_DISPLAY_ROOT', 2);
define('XD_DISPLAY_NONE', 0);

define('XD_REGEXP_MANDITORY', "/.+/");
define('XD_REGEXP_LETTERS', "/^[(A-Z)|(a-z)]{1,}$/");
define('XD_REGEXP_NUMBERS', "/^[0-9]{1,}$/");
/*****[END]********************************************
 [ Mod:     XData                              v1.0.3 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Report Posts                       v1.2.3 ]
 ******************************************************/
define('REPORT_POST_NEW', 1);
define('REPORT_POST_CLOSED', 2);

define('POST_REPORTS_TABLE', $prefix.'_bbpost_reports');
/*****[END]********************************************
 [ Mod:     Report Posts                       v1.2.3 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/
define('QUICKSEARCH_TABLE', $prefix.'_bbquicksearch');
/*****[END]********************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/
define('ADMIN_NUKE', "../../../".$admin_file.".php");
define('HOME_NUKE', "../../../index.php");
/*****[END]********************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Advanced Time Management            v2.1.2 ]
 ******************************************************/
define('MANUAL', 0);
define('MANUAL_DST', 1);
define('SERVER_SWITCH', 2);
define('FULL_SERVER', 3);
define('SERVER_PC', 4);
define('FULL_PC', 6);
/*****[END]********************************************
 [ Mod:    Advanced Time Management            v2.1.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/
define('LOGS_TABLE', $prefix.'_bblogs');
define('LOGS_CONFIG_TABLE', $prefix.'_bblogs_config');
define('LOG_ACTIONS_VERSION', '1.1.6');
/*****[END]********************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     At a Glance Options                v1.0.0 ]
 ******************************************************/
define('GLANCE_NONE', 0);
define('GLANCE_ALL', 1);
define('GLANCE_INDEX', 2);
define('GLANCE_FORUMS', 3);
define('GLANCE_TOPICS', 4);
define('GLANCE_INDEX_AND_TOPICS', 5);
define('GLANCE_INDEX_AND_FORUMS', 6);
define('GLANCE_FORUMS_AND_TOPICS', 7);
/*****[END]********************************************
 [ Mod:     At a Glance Options                v1.0.0 ]
 ******************************************************/
/*****[BEGIN]*****************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
define('ALL', 1);
define('ADS_TABLE', $prefix.'_bbinline_ads');
/*****[END]*******************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Cash Mod                            v2.2.6 ]
 ******************************************************/
define('CASH_TABLE', $prefix.'_bbcash');
define('CASH_LOG_TABLE', $prefix.'_bbcash_log');
define('CASH_EVENTS_TABLE', $prefix.'_bbcash_events');
define('CASH_EXCHANGE_TABLE', $prefix.'_bbcash_exchange');
define('CASH_GROUPS_TABLE', $prefix.'_bbcash_groups');
/*****[END]********************************************
 [ Mod:    Cash Mod                            v2.2.6 ]
 ******************************************************/
// Suggested Topic on Welcome Panel
define('DO_NOT_SUGGEST', 0);
define('SUGGEST_FAQ', 1);
define('SUGGEST_TOPIC_FROM', 2);
define('SUGGEST_SPECIFIC', 3);
 
/*--ARCADE MOD #2--*/

?>