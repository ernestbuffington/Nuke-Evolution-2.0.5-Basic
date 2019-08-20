<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/***************************************************************************
 *                            lang_news.php [English]
 *                              -------------------
 *     begin                : Thr Mar 20 2003
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*                                                                       */
/*************************************************************************/

//
// The format of this file is ---> $lang['message'] = 'text';
//

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

// Main Stuff.
$lang['Regular_Post'] = 'Regular Post (Not displayed as news)';
$lang['Current_Selection'] = 'Current Selection';
$lang['Select_News_Category'] = 'Select news category';
$lang['News'] = 'News';
$lang['View_Comments'] = 'View Comments';
$lang['Read_More'] = 'Read More';
$lang['News_Categories'] = 'News Categories';
$lang['Views'] = 'Views';
$lang['Sig_News_Explain'] = 'Allow users signature to be displayed on the news';
$lang['Sig_News'] = 'Signature on News';

// Admin Stuff
//
// News Config
//
$lang['Add_news_categories'] = 'Add News Categories';
$lang['News_Configuration'] = 'News Configuration';
$lang['News_Add_Description'] = 'From this control panel you can add new news categories';
$lang['Icon'] = 'News Icon';
$lang['Add_new_category'] = 'Add new news category';

$lang['Click_return_newsadmin'] = 'Click %sHere%s to return to News Administration';
$lang['Category_Deleted'] = 'News category succesfully deleted';
$lang['Category_Updated'] = 'News category succesfully updated';
$lang['Category_Added'] = 'News category succesfully added';

$lang['News_Editing_Utility'] = 'News Category Editing';
$lang['News_Config'] = 'News Category Configuration';
$lang['News_Explain'] = 'From this page you can add, remove and edit the news categories.';

$lang['Enable_News'] = 'Enable news posting';
$lang['News_Path'] = 'News icons path';
$lang['News_Path_Explain'] = 'Path under your phpBB root dir, e.g. images/news';

$lang['News'] = 'News';

$lang['News_explain'] = 'From this page you can configure the Slashdot News Mod by CMX.';
$lang['News_settings'] = 'News Settings';

$lang['News_trim'] = 'News Trim Length';
$lang['News_trim_explain'] = 'Sets the max length for news posts before they are trimmed. (0 = no trim).';

$lang['News_topic_trim'] = 'News Trim Topic Length';
$lang['News_topic_trim_explain'] = 'Sets the max length for news topics before they are trimmed. (0 = no trim).';

$lang['News_item_num'] = 'News Items To Display';
$lang['News_item_num_explain'] = 'The defualt number of news posts displayed in news_viewnews.php.';

$lang['RSS_Configuration'] = 'RSS News Feed Configuration';
$lang['Enable_RSS'] = 'Enable RSS Sydication';
$lang['Enable_RSS_explain'] = 'RSS Sydications allows other websites to access your news and display it on thier sites';

$lang['Feed_Description'] = 'Feed Description';
$lang['Feed_Description_Explain'] = 'Phrase or sentence describing the feed.';

$lang['Feed_Language'] = 'Feed Language';
$lang['Feed_Language_Explain'] = 'The language the channel is written in. You may use values defined by the W3C.';

$lang['Feed_TTL'] = 'Feed TTL (Time To Live)';
$lang['Feed_TTL_Explain'] = 'TTL is the number of minutes that indicates how long a channel can be cached before refreshing from the source.';

$lang['Feed_Category'] = 'Feed Category';

$lang['Feed_Image'] = 'Feed Image';
$lang['Feed_Image_Explain'] = 'A image to be associated with your news feed. (Can only be a small button size image)';

$lang['Feed_Image_Desc'] = 'Feed Image Description';

// PortedMods.com Approve Mod Begin
//
// Begin Approve_Posts_Mod Block : 22
// 

//stuff user sees
$lang['approve_topic_has_awaiting'] = 'Topic has posts awaiting approval';
$lang['approve_topic_is_awaiting'] = 'Topic is awaiting approval';
$lang['approve_post_is_awaiting'] = 'Post is awaiting approval';

$lang['approve_posts_error_obtain'] = 'Could not obtain forum approval information';
$lang['approve_posts_error_delete'] = 'Could not delete forum approval information';
$lang['approve_posts_error_insert'] = 'Could not insert forum approval information';

$lang['approve_notify_subject'] = 'Approve Post';
$lang['approve_notify_link'] = 'There is a new post awaiting moderator approval. To view this post click here: ';
$lang['approve_notify_approve_link'] = 'To approve this post click here: ';
$lang['approve_notify_message'] = 'The message has been included below.';
$lang['approve_notify_message_exceeded'] = '...post continued';
$lang['approve_notify_poster'] = '*** This post will be moderated upon posting and unviewable until approved. ***';
$lang['approve_notify_user_link'] = 'Your post has been approved. To view this post, click here:';
$lang['approve_notify_user_topic'] = 'All posts of yours in this topic have been approved.';
$lang['approve_notify_auto_app'] = 'Auto-Approval Notification.';
$lang['approve_notify_auto_app_msg'] = 'You are now being automatically approved while posting in moderated forums.';
$lang['approve_notify_auto_app_rem'] = 'Auto-Approval Removal Notification.';
$lang['approve_notify_auto_app_rem_msg'] = 'You are no longer being automatically approved while posting in moderated forums.';
$lang['approve_notify_moderation'] = 'Moderation Notification.';
$lang['approve_notify_moderation_msg'] = 'You are now being moderated while posting in moderated forums.';
$lang['approve_notify_moderation_rem'] = 'Moderation Removal Notification.';
$lang['approve_notify_moderation_rem_msg'] = 'You are no longer being moderated while posting in moderated forums.';
$lang['approve_notify_post_approved'] = 'Your post has been approved!.';

$lang['approve_topic_all_current'] = 'Approve all current posts in this topic';
$lang['approve_topic_all_future'] = 'Auto-Approve all future posts in this topic';
$lang['approve_topic_all_future_rem'] = 'Remove Auto-Approve of all future posts in this topic';
$lang['approve_topic_moderate'] = 'Moderate this topic and all future replies';
$lang['approve_topic_moderate_rem'] = 'Remove topic moderation';
$lang['approve_post_approve'] = 'Approve this post';
$lang['approve_topic_approve'] = 'Approve this topic';
$lang['approve_user_auto_approve'] = 'Auto-Approve this user';
$lang['approve_user_auto_approve_rem'] = 'Remove Auto-Approve';
$lang['approve_user_moderate'] = 'Moderate this user';
$lang['approve_user_moderate_rem'] = 'Remove Moderation';

//stuff admin sees
$lang['approve_admin_enable'] = 'Enable Approval System:';
$lang['approve_admin_posts'] = 'Approve Posts';
$lang['approve_admin_users_enable'] = 'Moderate:';
$lang['approve_admin_users_all'] = 'All Users & Topics';
$lang['approve_admin_users_mod'] = 'Selected Users & Topics only';
$lang['approve_admin_posts_topics'] = 'Moderate on:';
$lang['approve_admin_posts_enable'] = 'New Posts';
$lang['approve_admin_poste_enable'] = 'Post edits';
$lang['approve_admin_topics_enable'] = 'New Topics';
$lang['approve_admin_topice_enable'] = 'Topic edits';
$lang['approve_admin_hide_topics_enable'] = 'Hide Unapproved Topics:';
$lang['approve_admin_hide_posts_enable'] = 'Hide Unapproved Posts:';
$lang['approve_admin_button_find'] = 'Find Users';
$lang['approve_admin_button_add'] = 'Add User';
$lang['approve_admin_button_rem'] = 'Remove User';
$lang['approve_admin_moderators'] = 'Moderator(s):';
$lang['approve_admin_forums'] = 'Forums';
$lang['approve_admin_users'] = 'Users';
$lang['approve_admin_author'] = 'Author';
$lang['approve_admin_subject'] = 'Subject';
$lang['approve_admin_empty'] = '--empty--';
$lang['approve_admin_remove'] = 'remove';
$lang['approve_admin_approve'] = 'approve';
$lang['approve_admin_add_approved_submit'] = 'Auto-Approve';
$lang['approve_admin_add_moderated_submit'] = 'Moderate';
$lang['approve_admin_page'] = 'Page: ';
$lang['approve_admin_remove_moderation'] = 'Remove Moderation';
$lang['approve_admin_remove_approval'] = 'Remove Approval';

$lang['approve_admin_approval'] = 'Approval';
$lang['approve_admin_approve_index'] = 'Approve Index';
$lang['approve_admin_user_moderation'] = 'Users';
$lang['approve_admin_topic_moderation'] = 'Topics';
$lang['approve_admin_post_moderation'] = 'Posts';
$lang['approve_admin_forum_moderation'] = 'Forums';

$lang['approve_admin_notify_user_enable'] = 'PM User on Approval:';
$lang['approve_admin_notify_admin_enable'] = 'Moderator Notification:';
$lang['approve_admin_notify_type'] = 'Notify Via: ';
$lang['approve_admin_notify_pm_enable'] = 'Private Message';
$lang['approve_admin_notify_email_enable'] = 'E-Mail';
$lang['approve_admin_notify_message_enable'] = 'Include Post in Notification: ';
$lang['approve_admin_notify_message_length'] = 'Max Length (0 = all)';
$lang['approve_admin_notify_posts_topics'] = 'Notify on:';
$lang['approve_admin_notify_posts_enable'] = 'New posts';
$lang['approve_admin_notify_poste_enable'] = 'Post edits';
$lang['approve_admin_notify_topics_enable'] = 'New Topics';
$lang['approve_admin_notify_topice_enable'] = 'Topic edits';
$lang['approve_admin_notify_user_invalid'] = 'Please go back and edit your entry.<br/>The following user user is invalid: ';
$lang['approve_admin_notify_user_empty'] = 'Please go back and edit your entry.<br/>You must choose at least one moderator to notify.';

$lang['approve_admin_username'] = 'Username';
$lang['approve_admin_users_moderated_users'] = 'Moderated Users';
$lang['approve_admin_users_auto_approved'] = 'Auto-Approved Users';
$lang['approve_admin_users_of'] = 'Users <strong>%d</strong>-<strong>%d</strong> of <strong>%d</strong>'; // Replaces with: Users 1-2 of 2 for example
$lang['approve_admin_users_id_remove_error'] = 'The chosen user id is invalid.';
$lang['approve_admin_users_moderation_removed'] = 'The user "%s" has been removed from moderation.';
$lang['approve_admin_users_approval_removed'] = 'The user "%s" has been removed from auto-approval.';
$lang['approve_admin_users_approval_added'] = 'The user "%s" has been added to auto-approval.';
$lang['approve_admin_users_moderated_added'] = 'The user "%s" has been added to moderation.';
$lang['approve_admin_add_approved_user'] = 'Add Auto-Approved User';
$lang['approve_admin_add_moderated_user'] = 'Add Moderated User';

$lang['approve_admin_topics_title'] = 'Topic Title';
$lang['approve_admin_approve_topic'] = 'Approve Topic';
$lang['approve_admin_topics_moderated_topics'] = 'Moderated Topics';
$lang['approve_admin_topics_awaiting'] = 'Topics Awaiting Approval';
$lang['approve_admin_topics_auto_approved'] = 'Auto-Approved Topics';
$lang['approve_admin_topics_of'] = 'Topics <strong>%d</strong>-<strong>%d</strong> of <strong>%d</strong>'; // Replaces with: Topics 1-2 of 2 for example
$lang['approve_admin_topics_id_remove_error'] = 'The chosen topic id is invalid.';
$lang['approve_admin_topics_moderation_removed'] = 'The topic "%s" has been removed from moderation.';
$lang['approve_admin_topics_approval_removed'] = 'The topic "%s" has been removed from auto-approval.';
$lang['approve_admin_topics_approval_added'] = 'The topic "%s" has been added to auto-approval.';
$lang['approve_admin_topics_moderated_added'] = 'The topic "%s" has been added to moderation.';
$lang['approve_admin_topics_approved'] = 'The topic "%s" has been approved.';

$lang['approve_admin_approve_post'] = 'Approve Post';
$lang['approve_admin_posts_awaiting'] = 'Posts Awaiting Approval';
$lang['approve_admin_posts_of'] = 'Posts <strong>%d</strong>-<strong>%d</strong> of <strong>%d</strong>'; // Replaces with: Posts 1-2 of 2 for example
$lang['approve_admin_posts_id_remove_error'] = 'The chosen post id is invalid.';
$lang['approve_admin_posts_approved'] = 'The post "%s" by "%s" has been approved.'; //Replaces with: The post "blah" by "mr.man" has been approved.

$lang['approve_admin_forums_moderated'] = 'Forums Under Moderation';
$lang['approve_admin_Stored_replacement'] = $lang['Stored'] . '<br/><br/> It will become viewable as soon as a moderator approves of it. <br/> Please do not submit your message more than once.';
//
// End Approve_Posts_Mod Block : 22
// 
// PortedMods.com Approve Mod End
//
// That's all, Folks!
// -------------------------------------------------

?>