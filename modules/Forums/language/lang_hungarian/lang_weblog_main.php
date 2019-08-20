<?php
/***************************************************************************
 *                       lang_weblog_main.php [English]
 *                    ------------------------------------
 *   begin                : Monday, September 5, 2004
 *   copyright            : (C) 2005 Hyperion
 *   email                : vinng86@hotmail.com
 *
 *   $Id: lang_weblog_main.php,v 1.0.0 2004/09/05, 13:17:43 Hyperion Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Configuration - Change the name of weblogs by editing these entries here.
// Remember that this is a PHP file, so you must use \' instead of '
//
$lang['Weblog'] = 'Blog';
$lang['Weblogs'] = 'Blogs';
$lang['Weblog\'s'] = 'Blog\'s';
$lang['Webloggers'] = 'Bloggers';
//
// End Weblog Configuration
//

//
// General Language Entries
//
$lang['Weblog_Index'] = $lang['Weblog'] . ' Index';
$lang['Weblog_MyWeblog'] = 'My ' . $lang['Weblog'];
$lang['Weblog_CP'] = $lang['Weblog'] . ' CP';
$lang['Create_a_weblog'] = 'Create a ' . $lang['Weblog'];
$lang['Weblog_Owner'] = $lang['Weblog'] . ' Owner';
$lang['Weblog_powered_by'] = 'Powered by the Blog Mod version %s by <a href="http://vince.dynalias.com/blog/" class="copyright">Hyperion</a>';
$lang['Entries'] = 'Entries';
$lang['Replies'] = 'Replies';
$lang['Keep'] = 'Keep';
$lang['Weblog_switch_template'] = 'Reload/Switch Template';
$lang['Custom'] = '(custom)';
$lang['(None)'] = '(none)';
$lang['View_weblog'] = 'View ' . $lang['Weblog'];
$lang['Most_recent_weblogs'] = 'Most recently updated ' . $lang['Weblogs'] . ': %s';
$lang['Most_recent_weblogs_user'] = 'Most recently updated ' . $lang['Weblogs'] . ' by user: %s';
$lang['Permalink'] = 'Permalink';

//
// Weblog Index Page
//
$lang['Weblog_index'] = $lang['Weblog'] . ' Index';
$lang['Sort_newest_entries'] = 'Newest Entry';
$lang['Sort_weblog_name'] = $lang['Weblog'] . ' Name';
$lang['Sort_num_entries'] = 'Number of Entries';
$lang['Sort_weblog_start_date'] = 'Start Date';
$lang['Sort_weblog_views'] = 'Number of Views';

$lang['Weblogs_perpage'] = $lang['Weblogs'] . ' Per Page';
$lang['Weblog_description'] = $lang['Weblog'] . ' Description';
$lang['Last_entry'] = 'Last Entry';
$lang['Last_reply'] = 'Last Reply';
$lang['Latest_mood'] = 'Latest Mood';
$lang['Last_seen'] = 'Last Seen';
$lang['View_newest_reply'] = 'View newest reply';
$lang['No_Replies'] = 'No replies';
$lang['View_newest_entry'] = 'View newest entry';
$lang['No_entries'] = 'No entries';

$lang['No_weblog_create'] = 'Don\'t have a ' . $lang['Weblog'] . '? Click %sHere%s to create one!';
$lang['Weblog_noaccess'] = 'You are not allowed to access this ' . $lang['Weblog'] . '.';

$lang['Your_weblog'] = 'Your ' . $lang['Weblog'];
//
// Error Messages
//
$lang['No_weblogs'] = 'No ' . $lang['Weblogs'] . ' have been created. Please wait for one to be created or create one yourself.';
$lang['No_second_weblog'] = 'You already have a ' . $lang['Weblog'] . '. You are not allow to create a second ' . $lang['Weblog'] . '.';
$lang['No_weblog_name'] = 'The ' . $lang['Weblog'] . ' name is missing. Please go back and fill it in.';
$lang['No_weblog_desc'] = 'The ' . $lang['Weblog'] . ' description is missing. Please go back and fill it in.';
$lang['No_replies_label'] = 'The replies label is missing. Please go back and fill it in.';
$lang['No_post_reply_label'] = 'The "post reply" label is missing. Please go back and fill it in.';
$lang['Bad_num_entries'] = 'Invalid number of weblog entries. Please go back and put in a positive whole number.';
$lang['Errors_occured'] = 'The following errors occured:';
$lang['Weblog_banned'] = 'You have been banned from creating a ' . $lang['Weblog'] . '.';
$lang['Weblog_no_templates'] = 'No ' . $lang['Weblog'] . ' templates are available. Please wait for your Board Administrator to install a ' . $lang['Weblog'] . ' template.';
$lang['Weblog_no_header'] = 'The template\'s header file (%s) could not be found. Please contact your Board Administrator';
$lang['Weblog_no_body'] = 'The template\'s body file (%s) could not be found. Please contact your Board Administrator';
$lang['Weblog_no_footer'] = 'The template\'s footer file (%s) could not be found. Please contact your Board Administrator';
$lang['Weblog_no_faceplate'] = 'The template\'s faceplate file (%s) could not be found. Please contact your Board Administrator';
$lang['No_weblog_guests'] = 'Guests are not allowed to create a ' . $lang['Weblog'] . '.';
$lang['No_weblog_file'] = 'The weblog file (%s) is missing, and cannot be found. Perhaps it was never created? Please contact your Board Administrator';
$lang['No_faceplate_file'] = 'The weblog face plate file (%s) is missing, and cannot be found. Perhaps it was never created? Please contact your Board Administrator';
$lang['Weblog_require_auth'] = 'You must belong in a usergroup that is allowed to create a ' . $lang['Weblog'] . '.';
$lang['Weblog_template_not_exist'] = 'The ' . $lang['Weblog'] . ' Template that you selected does not exist.';
$lang['No_friend_guests'] = 'You cannot add guests as friends.';
$lang['No_block_guests'] = 'If you want to block guests from viewing your ' . $lang['Weblog'] . ', just set the viewing requires to "Registered Users" or higher.';

//
// Weblog CP
//
$lang['Weblog_name'] = $lang['Weblog'] . ' Name';
$lang['Weblog_desc'] = $lang['Weblog'] . ' Description';
$lang['Weblog_auth'] = $lang['Weblog'] . ' Accessibility';
$lang['Weblog_auth_explain'] = 'This will control the minimum requirements to view your ' . $lang['Weblog'] . '.';
$lang['Reply_auth'] = 'Reply Privileges';
$lang['Reply_auth_explain'] = 'This will control the minimum requirements to make replies to your entries.<br />Only you will ever be allowed to post entries in your ' . $lang['Weblog'] . '.';
$lang['Number_of_entries'] = 'Number of Entries on Main Page';
$lang['Replies_label'] = 'Replies Label';
$lang['Replies_label_explain'] = '%s is replaced by the number of replies to a particular entry.';
$lang['Post_reply_label'] = 'Post a Reply Label';
$lang['Weblog_template'] = $lang['Weblog'] . ' Template';
$lang['Weblog_template_explain'] = 'Your ' . $lang['Weblog'] . ' will use this template as a base';
$lang['Weblog_template_easy_explain'] = 'You can personalize it by switching some of the options below.';
$lang['Weblog_template_advanced_explain'] = 'You can then edit it however you want, or even completely replace it with your own design.';

$lang['Show_profile_info'] = 'Show the Profile Info Block';
$lang['Show_calendar'] = 'Show the Calendar Block';
$lang['Show_contact_info'] = 'Show the Contact Info Block';
$lang['Show_blog_info'] = 'Show the ' . $lang['Weblog'] . ' Info';
$lang['Reply_in_popup'] = 'Open Popup to Reply (on Main Page)';
$lang['Weblog_faceplate'] = $lang['Weblog'] . ' Face Plate';
$lang['Weblog_faceplate_explain'] = 'Feel free to code whatever you want, and how you want it. This is what will be shown on the main ' . $lang['Weblog_name'] . ' index page. <br/>Tip: This is the most crucial customizable part as it will show people what kind of person you are.';
$lang['Weblog_body'] = $lang['Weblog'] . ' Body';
$lang['Weblog_body_explain'] = 'Feel free to code whatever you want, and how you want it.<br/>Tip: Try copying all the stuff in this box to another html editor, then copy it back into this box when you are done.';
$lang['Weblog_create'] = 'Create ' . $lang['Weblog'];
$lang['Weblog_edit'] = 'Update ' . $lang['Weblog'];
$lang['Weblog_delete'] = 'Mark for Deletion';
$lang['Weblog_undelete'] = 'Undelete Weblog';

$lang['Weblog_created'] = 'Your ' . $lang['Weblog'] . ' has been created. <br /><br />Click %sHere%s to view your newly created ' . $lang['Weblog'] . '.<br /><br />Click %sHere%s to return to the ' . $lang['Weblog'] . ' CP';
$lang['Weblog_edited'] = 'Your ' . $lang['Weblog'] . ' has successfully been updated. <br /><br />Click %sHere%s to view your updated ' . $lang['Weblog'] . '.<br /><br />Click %sHere%s to return to the ' . $lang['Weblog'] . ' CP';
$lang['Weblog_deleted'] = 'Your ' . $lang['Weblog'] . ' has been marked for deletion. It won\'t be fully deleted until a Board Administrator clears all ' . $lang['Weblogs'] . ' marked for deletion.<br /><br />Click %sHere%s to return to the ' . $lang['Weblog'] . ' Index.';
$lang['Weblog_undeleted'] = 'Your ' . $lang['Weblog'] . ' has been undeleted. You and others may now access your ' . $lang['Weblog'] . '. <br /><br />Click %sHere%s to view your newly restored ' . $lang['Weblog'] . '.<br /><br />Click %sHere%s to return to the ' . $lang['Weblog'] . ' CP';

$lang['Weblog_auth_all'] = 'Guests';
$lang['Weblog_auth_reg'] = 'Registered Users';
$lang['Weblog_auth_friends'] = 'Friends Only';
$lang['Weblog_auth_owner'] = 'Weblog Owner (you)';

$lang['Switch_easy'] = 'Switch to easy mode';
$lang['Switch_advanced'] = 'Switch to advanced mode';

$lang['Do_nothing'] = 'Do Nothing';
$lang['Load_template'] = 'Load Template';
$lang['Switch_template'] = 'Switch Template';

$lang['Weblog_no_adv_weblog'] = 'You have not been approved for creating an advanced ' . $lang['Weblog'] . ' yet.';
$lang['Advanced_mode_approved'] = 'You have been <strong>approved</strong> by an Administrator to be able to create an <u>Advanced ' . $lang['Weblog'] . '</u>!';

$lang['Marked_for_deletion'] = 'Your ' . $lang['Weblog'] . ' has been <strong><em>marked for deletion</em></strong>. To undelete it, press the button at the bottom of the page.';
$lang['Shoutbox_desc'] = 'Order of Shouts in Shoutbox';

$lang['Preview_image'] = 'Preview Image';
$lang['Private'] = '(private)';
$lang['Unknown'] = '(unknown)';
$lang['Mood_set'] = 'Mood Set';
$lang['Show_enable_shoutbox'] = 'Show and Enable Shoutbox';

// Look and Feel Section
$lang['Look_and_feel'] = 'Look and Feel';

$lang['General_page_settings'] = 'General Page Settings';
$lang['Background_color'] = 'Background Color';
$lang['See_hex_colors'] = 'See Hexadecimal Colors';
$lang['Entry_bg_color'] = 'Entry Background Color';
$lang['Border_color'] = 'Border Color';
$lang['Background_image'] = 'Background Image';
$lang['URL'] = 'URL';
$lang['Fixed_bg'] = 'Fixed (stays in place even after scrolling)';
$lang['Tile_bg'] = 'Tile Background';
$lang['Tile'] = 'Tile';
$lang['Tile_horizontally'] = 'Tile Horizontally';
$lang['Tile_vertically'] = 'Tile Vertically';
$lang['No_tile_bg'] = 'Don\'t tile';
$lang['Vertical_position'] = 'Vertical Position';
$lang['Top'] = 'Top';
$lang['Center'] = 'Center';
$lang['Bottom'] = 'Bottom';
$lang['Horizontal_position'] = 'Horizontal Position';
$lang['Left'] = 'Left';
$lang['Right'] = 'Right';
$lang['SB_Settings'] = 'Scrollbar Settings (Visible on IE 5.5+ Only)';
$lang['SB_Face_color'] = 'Scrollbar Face Color';
$lang['SB_Highlight_color'] = 'Scrollbar Highlight Color';
$lang['SB_Shadow_color'] = 'Scrollbar Shadow Color';
$lang['SB_3DLight_color'] = 'Scrollbar 3D Light Color';
$lang['SB_Arrow_color'] = 'Scrollbar Arrow Color';
$lang['SB_Track_color'] = 'Scrollbar Track Color';
$lang['SB_Darkshadow_color'] = 'Scrollbar Dark Shadow Color';
$lang['Font_settings'] = 'Font Settings';
$lang['Font'] = 'Font';
$lang['Arial'] = 'Arial';
$lang['Comic_sans'] = 'Comic Sans MS';
$lang['Courier_new'] = 'Courier New';
$lang['Georgia'] = 'Georgia';
$lang['Verdana'] = 'Verdana';
$lang['Times_new_roman'] = 'Times New Roman';
$lang['Trebuchet'] = 'Trebuchet';
$lang['Font_color'] = 'Font Color';
$lang['Font_size'] = 'Font Size';
$lang['Normal_link'] = 'Normal Link';
$lang['Underline'] = 'Underline';
$lang['Active_link'] = 'Active Link';
$lang['Hover_link'] = 'Hover Link';
$lang['Visited_link'] = 'Visited Link';
$lang['Weblog_title'] = $lang['Weblog'] . ' Title';
$lang['Entry_title'] = 'Entry Title';
$lang['Color'] = 'Color';
$lang['Date_and_time'] = 'Date and Time';
$lang['Block_title'] = 'Block Title';
$lang['Block_settings'] = 'Block Settings';
$lang['Block_bg_color'] = 'Block Background Color';
$lang['Block_border_color'] = 'Block Border Color';
$lang['Custom_block'] = 'Custom Block';
$lang['Custom_block_explain'] = 'Here you may add anything extra about yourself that you would like to add.';
$lang['Title'] = 'Title';

//
// Weblog Page
//
$lang['Weblog_not_exist'] = 'Sorry, the ' . $lang['Weblog'] . ' you selected does not exist.';
$lang['Mood'] = 'Mood';
$lang['Currently'] = 'Currently';
$lang['Mood:'] = '%s <strong>Mood:</strong> %s';
$lang['Currently:'] = '%s <strong>Currently:</strong> %s';
$lang['Calendar'] = 'Calendar';
$lang['Profile_info'] = 'Profile Info';
$lang['Contact_owner'] = 'Contact %s';
$lang['Start_date'] = $lang['Weblog'] . ' Started';
$lang['Weblog_age'] = $lang['Weblog'] . ' Age';
$lang['Total_entries'] = 'Total entries';
$lang['View_all_entries'] = 'View All Entries';
$lang['Back'] = 'Back';
$lang['Forward'] = 'Forward';
$lang['Friends_list'] = 'Friends';
$lang['Blocked_list'] = 'Blocked Users';
$lang['About_owner'] = 'About %s';
$lang['Weblog_age_days'] = '%s days';
$lang['Total_replies'] = 'Total replies';
$lang['Visits'] = 'Visits';
$lang['Post_new_entry'] = 'Post a new entry';
$lang['RSS'] = 'RSS Feed';
$lang['Edit'] = 'Edit';
$lang['Weblog_deactivated'] = ' "%s" has been marked for deletion and will be deleted once a Board Administrator purges all similar weblogs that are marked for deletion.';
$lang['Shoutbox'] = 'Shoutbox';
$lang['Shout'] = 'Shout';
$lang['View_smilies'] = 'View and Insert Smilies';
$lang['No_shouts'] = 'There are no shouts for this ' . $lang['Weblog'] . ' yet.';
$lang['Shoutbox_flooded'] = 'Sorry, there are too many shouts at the moment. Please wait <strong>%s</strong> second(s) and then try again.';
$lang['Posted_by'] = 'Posted By: %s';

//
// Weblog Posting Page
//
$lang['Reply_not_exist'] = 'The reply you selected does not exist.';
$lang['Entry_not_exist'] = 'The entry you selected does not exist.';
$lang['Reply_not_authed'] = 'You cannot reply to this entry.';
$lang['Entry_edit_not_authed'] = 'You are not allowed to edit this entry.';
$lang['Entry_add_not_authed'] = 'You are not allowed to post a new entry in this ' . $lang['Weblog'] . '.';
$lang['No_mode_specified'] = 'No mode was specified. (Please do not access this page directly)';
$lang['Delete_not_specified'] = 'Nothing was specified for deletion.';
$lang['Subject_empty'] = 'The entry subject is missing. Please fill in a subject for your entry.';
$lang['Entry_empty'] = 'There is nothing in your entry!';
$lang['Try_again'] = 'Please go back and try again.';
$lang['New_entry'] = 'New Entry';
$lang['Edit_entry'] = 'Edit Entry';
$lang['Edit_reply'] = 'Edit Reply';
$lang['Memorable_entry'] = 'Memorable Entry';
$lang['No_edit_entries'] = 'You are not allowed to edit this ' . $lang['Weblog\'s'] . ' entries.';
$lang['No_edit_replies'] = 'You are not allowed to edit this ' . $lang['Weblog\'s'] . ' replies.';
$lang['No_add_entries'] = 'You are not allowed to add entries into this ' . $lang['Weblog'] . '.';
$lang['Entry_submitted'] = 'Your entry has been submitted successfully.';
$lang['Entry_updated'] = 'Your entry has been updated successfully.';
$lang['Reply_updated'] = 'The reply has been updated successfully.';
$lang['Disable_replies'] = 'Disable Replies';
$lang['Entry_weblog_not_exist'] = 'Sorry, the weblog that holds the entry you selected does not exist. No replies are allowed for this entry.';
$lang['Reply_no_auth'] = 'You cannot reply to this entry.';
$lang['Entry_replies_disabled'] = 'Sorry, replies have been disabled from this entry.'.
$lang['Click_return_weblog'] = 'Click %sHere%s to return to "%s".';
$lang['Click_return_entry'] = 'Click %sHere%s to return to the entry.';
$lang['Post_reply'] = 'Post a Reply';
$lang['Delete_not_authed'] = 'You are not allowed to delete entries and/or replies.';
$lang['Entry_deleted'] = 'The entry was deleted successfully.';
$lang['Reply_deleted'] = 'The reply was deleted successfully.';
$lang['Trackback_deleted'] = 'The trackback was deleted successfully.';
$lang['Entry_memorable'] = 'Mark this entry as a memorable entry';
$lang['Disable_replies'] = 'Disable replies for this entry';
$lang['Reply_submitted'] = 'The reply was submitted successfully.';
$lang['Entry_auth'] = 'Entry Access:';
$lang['Entry_add_image'] = 'Add Image(s) to Entry';
$lang['Entry_add_image_explain'] = 'Here you can upload an image to attach to your entry. Add the BBCode that is generated to the entry wherever you want the image to appear.';
$lang['Image'] = 'Image';
$lang['Upload_image'] = 'Upload Image';
$lang['Maximum_pic_size'] = 'Maximum Picture Size';
$lang['Maximum_pic_height'] = 'Maximum Picture Height';
$lang['Maximum_pic_width'] = 'Maximum Picture Width';
$lang['Bytes'] = 'Bytes';
$lang['Pixels'] = 'Pixels';
$lang['Wrong_file_type'] = 'You uploaded a file type that is not allowed. Only PNG, JPEG, JPG, or GIF files can be uploaded.';
$lang['Picture_too_big'] = 'The picture you uploaded exceeds the limits placed by the board administrator. Please reduce the size of the image and then try again.';
$lang['BBCode'] = 'BBCode';
$lang['Filename'] = 'Filename';
$lang['Owner_contributor_upload_only'] = 'Only the ' . $lang['Weblog'] . ' owner and contributors can upload pictures.';
$lang['Picture_upload_entry_only'] = 'Pictures may only be uploaded while writing entries.';
$lang['No_upload_pictures'] = 'Picture Uploading is disabled.';

//
// All Entries Page
//
$lang['Display_entries'] = 'Display entries from';
$lang['Entry_locked'] = 'This entry is locked: you cannot make replies.';
$lang['No_replies_yet'] = '(No replies yet)';
$lang['All_entries'] = 'All entries';
$lang['Entry_Memorable'] = '<strong>Memorable: </strong>';
$lang['View_memorable_entries'] = 'View Memorable Entries';
$lang['View_private_entries'] = 'View Private Entries';
$lang['Sorry_no_entries'] = 'Sorry, there are no entries.';
//
// Entries Page
//
$lang['Entry_post_not_exist'] = 'The entry/reply you selected does not exist';
$lang['Entry_no_replies'] = 'There are no replies for this entry.';
$lang['Replies_disabled'] = 'Replies have been disabled for this entry.';
//
// Friends Page
//
$lang['Friends'] = '%s\'s Friends';
$lang['Friend_of'] = 'Friend of';
$lang['Add_friend'] = 'Add Friend';
$lang['User_no_weblog'] = 'The user you selected either does not exist, or does not have a ' . $lang['Weblog'] . '.';
$lang['Click_return_friends'] = 'Click %sHere%s to return to the friends page.';
$lang['Friend_added'] = 'The user was added as a friend successfully.';
$lang['Friend_already_added'] = 'That user has already been added as a friend.';
$lang['No_friend_owner'] = 'You cannot add yourself as a friend!';
$lang['Friend_no_weblog'] = 'The user you selected does not have a ' . $lang['Weblog'] . '. They must have one before they can be added as a friend and have their latest entry shown here.';
$lang['Friend_removed'] = 'The user you specified is no longer a friend.';
$lang['User_not_friend'] = 'The user you selected is not a friend of yours';
$lang['User_no_remove_selffriend'] = 'You cannot remove yourself from your own friends list';
//
// Blocked Page
//
$lang['Weblog_noaccess_blocked'] = 'Only the owner may access his/her blocked list.';
$lang['Click_return_blocked'] = 'Click %sHere%s to return to the blocked users page.';
$lang['Blocked_user_added'] = 'That user can no longer view any part of your ' . $lang['Weblog'] . '.';
$lang['Blocked_already_added'] = 'That user has already been barred from viewing your ' . $lang['Weblog'] . '.';
$lang['No_block_owner'] = 'You cannot block yourself from viewing your own ' . $lang['Weblog'] . '!';
$lang['Blocked_users'] = 'Blocked users';
$lang['Block_user'] = 'Block this user';
$lang['Remove_user'] = 'Remove user';
$lang['User_no_remove_selffriend'] = 'You cannot remove yourself from your own blocked user list';
$lang['User_not_blocked'] = 'The user you specified was not blocked.';
$lang['Blocked_user_removed'] = 'The user you specified is no longer blocked from viewing your ' . $lang['Weblog'] . '.';

//
// Contributors Page
//
$lang['Contributors'] = 'Contributors';
$lang['Add_contributor'] = 'Add Contributor';
$lang['Remove_contributor'] = 'Remove Contributor';
$lang['Click_return_contributors'] = 'Click %sHere%s to return to the contributors page.';
$lang['Contributor_already_added'] = 'The user you specified is already a contributor.';
$lang['No_contributor_owner'] = 'You are already the main contributor in the ' . $lang['Weblog'] . '!';
$lang['No_guest_contributors'] = 'Guests may not be contributors';
$lang['Contributor_added'] = 'That user was added as a contributor. He/she may now view, post, and edit entries in your ' . $lang['Weblog'] . '.';
$lang['User_no_remove_selfcontributor'] = 'You cannot remove yourself! If you wish to transfer the ' . $lang['Weblog'] . ' to another user then please contact your Board Administrator.';
$lang['User_not_contributor'] = 'The user that you selected is not a contributor.';
$lang['Contributor_removed'] = 'That user is no longer a contributor.';
$lang['Edit_contributors'] = 'Edit Contributors';
$lang['Current_contributors'] = 'Current Contributors';

//
// Trackback
//
$lang['Could_not_log_tb'] = 'Could not log Trackback. Please contact the site\'s owner';
$lang['Trackbacks'] = 'Trackbacks (%s)';
$lang['Trackback'] = 'Trackback';
$lang['Trackback_url'] = 'The Trackback URL for this entry is:';
$lang['Trackback_form_explain'] = 'Use these forms to send trackback pings to other entries on other ' . $lang['Weblog'] . ' sytems.';
$lang['URLs'] = 'URLs (seperate each URL with a new line)';
$lang['Excerpt'] = 'Excerpt (max 255 characters)';
$lang['Trackback_no_connect'] = 'Could not connect to %s for sending a trackback.';
$lang['Trackback_successful'] = 'Trackback to %s was successful!';
$lang['Trackback_not_exist'] = 'The trackback you selected does not exist.';

$lang['Not_implemented_yet'] = 'Sorry, this section hasn\'t been implemented yet';
$lang['No_read_file'] = 'Sorry, an error has occured. The file %s is missing or cannot be accessed. Please inform your Board Administrator.';
$lang['Owner_is_banned'] = 'This ' . $lang['Weblog'] . ' cannot be displayed because the owner is banned from having a ' . $lang['Weblog'] . '.';
$lang['Owner_banned'] = 'You have been banned from the ' . $lang['Weblog'] . ' system.';

?>