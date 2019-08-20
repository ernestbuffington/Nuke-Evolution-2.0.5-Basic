<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2005/05/09 17:44:47 chatserv Exp $
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

/*****[CHANGES]**********************************************************
-=[Mod]=-
      Recent Topics                            v1.2.4       06/11/2005
      Global Announcements                     v1.2.8       06/13/2005
      Select Expand BBcodes                    v1.3.0       06/14/2005
      Force Word Wrapping - Configurator       v1.0.16      06/15/2005
      Topic Cement                             v1.0.3       06/15/2005
      Cache phpBB version in ACP               v1.0.0       06/15/2005
      Search Only Subject                      v0.9.1       06/15/2005
      Resize Posted Images                     v2.4.5       06/15/2005
      View/Disable Avatars/Signatures          v1.1.2       06/16/2005
      Signature Editor/Preview Deluxe          v1.0.0       06/22/2005
      Separate Announcements & Sticky          v2.0.0a      06/24/2005
      Staff Site                               v2.0.3       06/24/2005
      Better Session Handling                  v1.0.0       06/25/2005
      Forum Statistics                         v1.2.2       06/25/2005
      Users of the day                         v2.1.0       07/02/2005
      Disable Board Admin Override             v0.1.1       07/06/2005
      Memberlist Find User                     v1.0.0       07/06/2005
      PHP Syntax Highlighter BBCode            v3.0.7       07/10/2005
      Theme Simplifications                    v1.0.0       07/19/2005
      Limit smilies per post                   v1.0.2       07/24/2005
      YA Merge                                 v1.0.0       07/28/2005
      User Administration Link on Profile      v1.0.0       07/29/2005
      Move Message - Merge AddOn               v1.0.0       07/30/2005
      Must first vote to see results           v1.0.0       08/03/2005
      Log Moderator Actions                    v1.1.6       08/06/2005
      XData                                    v0.1.1       08/09/2005
      At a Glance Options                      v1.0.0       08/17/2005
      Extended Quote Tag                       v1.0.0       08/17/2005
      At a Glance Cement                       v1.0.0       08/17/2005
      Online/Offline/Hidden                    v2.2.6       08/21/2005
      Online Time                              v1.0.0       08/21/2005
      Quick Search                             v3.0.1       08/23/2005
      Hide Images and Links                    v1.0.0       08/30/2005
      Report Posts                             v1.2.3       08/30/2005
      Show Groups                              v1.0.1       09/02/2005
      Hide Images                              v1.0.0       09/02/2005
      Super Quick Reply                        v1.3.2       09/08/2005
      Log Actions Mod - Topic View             v2.0.0       09/18/2005
      Advanced BBCode Box                      v5.0.0a      11/16/2005
      Remote Avatar Resize                     v1.1.4       11/19/2005
 ************************************************************************/

//
// CONTRIBUTORS:
//     Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-2';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'bal';
$lang['RIGHT'] = 'jobb';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_SQL_FORMAT'] = '%M %e, %Y'; // This should be changed to the default date format for SQL for your language
$lang['DATE_INPUT_FORMAT'] = 'd/m/y'; // Requires 'd', 'm', and 'y' and a punctuation delimiter, order can change


// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'F�rum';
$lang['Category'] = 'T�mak�r';
$lang['Topic'] = 'T�ma';
$lang['Topics'] = 'T�m�k';
$lang['Replies'] = 'V�laszok';
$lang['Views'] = 'Megtekintve';
$lang['Post'] = 'Hozz�sz�l�s';
$lang['Posts'] = 'Hozz�sz�l�sok';
$lang['Posted'] = 'Elk�ldve';
$lang['Username'] = 'Felhaszn�l�n�v';
$lang['Password'] = 'Jelsz�';
$lang['Email'] = 'Email';
$lang['Poster'] = 'K�ld�';
$lang['Author'] = 'Szerz�';
$lang['Time'] = 'Id�';
$lang['Hours'] = '�ra';
$lang['Message'] = '�zenet';

$lang['1_Day'] = '1 nap';
$lang['7_Days'] = '7 nap';
$lang['2_Weeks'] = '2 h�t';
$lang['1_Month'] = '1 h�nap';
$lang['3_Months'] = '3 h�nap';
$lang['6_Months'] = '6 h�nap';
$lang['1_Year'] = '1 �v';

$lang['Go'] = 'Mehet';
$lang['Jump_to'] = 'Ugr�s';
$lang['Submit'] = 'Elk�ld';
$lang['Reset'] = 'T�r�l';
$lang['Cancel'] = 'M�gsem';
$lang['Preview'] = 'El�n�zet';
$lang['Confirm'] = 'Elfogad';
$lang['Spellcheck'] = 'Helyes�r�s';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Error'] = 'Hiba';

$lang['Next'] = 'K�vetkez�';
$lang['Previous'] = 'El�z�';
$lang['Goto_page'] = 'Ugr�s oldalra';
$lang['Joined'] = 'Csatlakozott';
$lang['IP_Address'] = 'IP-c�m';

$lang['Select_forum'] = 'F�rum kiv�laszt�sa';
$lang['View_latest_post'] = 'Legut�bbi hozz�sz�l�sok';
$lang['View_newest_post'] = 'Leg�jabb hozz�sz�l�sok';
$lang['Page_of'] = '<b>%d</b> / <b>%d</b> oldal'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ sz�m';
$lang['AIM'] = 'AIM c�m';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Tartalomjegyz�k';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '�j t�ma nyit�sa';
$lang['Reply_to_topic'] = 'Hozz�sz�l�s a t�m�hoz';
$lang['Reply_with_quote'] = 'Hozz�sz�l�s az el�zm�ny id�z�s�vel';

$lang['Click_return_topic'] = 'Kattints %sIde%s Visszat�r�s a t�m�ba'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kattints %sIde%s hogy m�gegyszer megpr�b�ld';
$lang['Click_return_forum'] = 'Kattints %sIde%s hogy visszat�rj a f�rumba';
$lang['Click_view_message'] = 'Kattints %sIde%s a hozz�sz�l�sod megtekint�s�hez';
$lang['Click_return_modcp'] = 'Kattints %sIde%s a Moder�tor vez�rl�pulthoz';
$lang['Click_return_group'] = 'Kattints %sIde%s a Csoporthoz';

$lang['Admin_panel'] = 'F�rum adminisztr�ci�';

$lang['Board_disable'] = 'A f�rum ideiglenesen sz�netel, pr�b�ld k�s�bb.';
//
// Global Header strings
//
 /*****[BEGIN]******************************************
 [ Mod:     User of the day                    v2.1.0 ]
 ******************************************************/
$lang['Day_users'] = '%d Regisztr�lt felhaszn�l� volt jelen az elmult %d �r�ban:';
$lang['Not_day_users'] = '%d Regisztr�lt felhaszn�l� <span style="color:red">NEM</span> volt jelen az elmult %d �r�ban:';
/*****[END]********************************************
 [ Mod:     User of the day                    v2.1.0 ]
 ******************************************************/
$lang['Registered_users'] = 'Regisztr�lt felhaszn�l�k:';
$lang['Browsing_forum'] = 'A F�rumot jelenleg olvas�k:';
$lang['Online_users_zero_total'] = 'Jelenleg �sszesen <b>0</b> felhaszn�l� van jelen :: ';
$lang['Online_users_total'] = 'Jelenleg �sszesen <b>%d</b> felhaszn�l� van jelen :: ';
$lang['Online_users_total'] = 'Jelenleg �sszesen <b>%d</b> felhaszn�l� van jelen :: ';
$lang['Online_user_total'] = 'Jelenleg �sszesen <b>%d</b> felhaszn�l� van jelen :: ';
$lang['Reg_users_zero_total'] = '0 Regisztr�lt, ';
$lang['Reg_users_total'] = '%d Regisztr�lt, ';
$lang['Reg_user_total'] = '%d Regisztr�lt, ';
$lang['Hidden_users_zero_total'] = '0 Rejtett �s ';
$lang['Hidden_user_total'] = '%d Rejtett �s ';
$lang['Hidden_users_total'] = '%d Rejtett �s ';
$lang['Guest_users_zero_total'] = '0 Vend�g';
$lang['Guest_users_total'] = '%d Vend�g';
$lang['Guest_user_total'] = '%d Vend�g';
$lang['Record_online_users'] = 'A legt�bb felhaszn�l� (<b>%s</b> db.) %s volt itt'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdminisztr�tor%s';
$lang['Mod_online_color'] = '%sModer�tor%s';

$lang['You_last_visit'] = 'Legutols� l�togat�sod d�tuma: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Pontos id�: %s'; // %s replaced by time

$lang['Search_new'] = 'Legutols� l�togat�sod �ta �rt hozz�sz�l�sok';
$lang['Search_your_posts'] = 'Hozz�sz�l�said megtekint�se';
$lang['Search_unanswered'] = 'Megv�laszolatlan hozz�sz�l�sok';

$lang['Register'] = 'Regisztr�ci�';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil szerkeszt�se';
$lang['Search'] = 'Keres�s';
$lang['Memberlist'] = 'Taglista';
$lang['FAQ'] = 'Gy.I.K.';
/*****[BEGIN]******************************************
 [ Mod:     Forum Statistics                   v1.2.2 ]
 ******************************************************/
$lang['Statistics'] = 'Statisztika';
/*****[END]********************************************
 [ Mod:     Forum Statistics                   v1.2.2 ]
 ******************************************************/
$lang['BBCode_guide'] = 'BBCode Kalauz';
$lang['Usergroups'] = 'Csoportok';
$lang['Last_Post'] = 'Legutols� �zenet';
/*****[BEGIN]******************************************
 [ Mod:     Resize Posted Images               v2.4.5 ]
 ******************************************************/
$lang['Resized_image_title'] = 'Kattints a teljes m�ret� megtekint�shez';
/*****[END]********************************************
 [ Mod:     Resize Posted Images               v2.4.5 ]
 ******************************************************/
$lang['Moderator'] = 'Moder�tor';
$lang['Moderators'] = 'Moder�torok';
//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Eddig �sszesen <b>0</b> hozz�sz�l�s �r�dott';
$lang['Posted_articles_total'] = 'Eddig �sszesen <b>%d</b> hozz�sz�l�s �r�dott';
$lang['Posted_article_total'] = 'Eddig �sszesen <b>%d</b> hozz�sz�l�s �r�dott';
$lang['Registered_users_zero_total'] = '�sszesen <b>0</b> regisztr�lt felhaszn�l�nk van';
$lang['Registered_users_total'] = '�sszesen <b>%d</b> regisztr�lt felhaszn�l�nk van';
$lang['Registered_user_total'] = '�sszesen <b>%d</b> regisztr�lt felhaszn�l�nk van';
$lang['Newest_user'] = 'Leg�jabb regisztr�lt tagunk <b>%s%s%s</b>';

$lang['No_new_posts_last_visit'] = 'Nincs �j hozz�sz�l�s a legutols� l�togat�sod �ta';
$lang['No_new_posts'] = 'Nincs �j hozz�sz�l�s';
$lang['New_posts'] = '�j hozz�sz�l�s';
$lang['New_post'] = '�j hozz�sz�l�s';
$lang['No_new_posts_hot'] = 'Nincs �j hozz�sz�l�s [ N�pszer� ]';
$lang['New_posts_hot'] = '�j hozz�sz�l�s [ N�pszer� ]';
$lang['No_new_posts_locked'] = 'Nincs �j hozz�sz�l�s [ Z�rt ]';
$lang['New_posts_locked'] = '�j hozz�sz�l�s [ Z�rt ]';
$lang['Forum_is_locked'] = 'Lez�rt f�rum';
//
// Login
//
$lang['Enter_password'] = 'A bel�p�shez add meg a felhaszn�l�nevedet �s a jelszavadat';
$lang['Login'] = 'Bel�p�s';
$lang['Logout'] = 'Kil�p�s';

$lang['Forgotten_password'] = 'Elfelejtettem a jelsz�t';

$lang['Log_me_in'] = 'Automatikus bejelentkez�s';

$lang['Error_login'] = 'Hib�s, vagy inakt�v nevet, esetleg hib�s jelsz�t adt�l meg';
//
// Index page
//
$lang['Index'] = 'Tartalom';
$lang['No_Posts'] = 'Nincs hozz�sz�l�s';
$lang['No_forums'] = 'Nincsenek f�rumok';

$lang['Private_Message'] = 'Priv�t �zenet';
$lang['Private_Messages'] = 'Priv�t �zenetek';
$lang['Who_is_Online'] = 'Ki van itt?';

$lang['Mark_all_forums'] = '�sszes f�rum megjel�l�se olvasottk�nt';
$lang['Forums_marked_read'] = '�sszes f�rum megjel�lve olvasottk�nt';

$lang['Welcome'] = "<b>K�sz�n�m, hogy regisztr�lt�l </b>";
$lang['Welcome2'] = "<b>�dv�z�llek az oldalon </b>";
$lang['Welcome_Register'] = "<b>Regisztr�lt�l?</b>";
//
// Viewforum
//
$lang['View_forum'] = 'F�rum megtekint�se';

$lang['Forum_not_exist'] = 'A kiv�lsztott f�rum nem l�tezik';
$lang['Reached_on_error'] = 'Hiba';

$lang['Display_topics'] = '�sszes t�ma mutat�sa';
$lang['All_Topics'] = '�sszes t�ma';

$lang['Topic_Announcement'] = '<b>K�zlem�ny:</b>';
$lang['Topic_Sticky'] = '<b>Kiemelt:</b>';
$lang['Topic_Moved'] = '<b>�thelyzett:</b>';
$lang['Topic_Poll'] = '<b>[ Szavaz�s ]</b>';

$lang['Mark_all_topics'] = '�sszes t�ma megjel�l�se olvasottk�nt';
$lang['Topics_marked_read'] = '�sszes t�ma megjel�lve olvasottk�nt';

$lang['Rules_post_can'] = '<b>K�sz�thetsz</b> �j t�m�kat ebben a f�rumban';
$lang['Rules_post_cannot'] = '<b>Nem</b> k�sz�thetsz �j t�m�kat ebben a f�rumban';
$lang['Rules_reply_can'] = '<b>V�laszolhatsz</b> egy t�m�ra ebben a f�rumban';
$lang['Rules_reply_cannot'] = '<b>Nem</b> v�laszolhatsz egy t�m�ra ebben a f�rumban';
$lang['Rules_edit_can'] = '<b>M�dos�thatod</b> a hozz�sz�l�sidat a f�rumban';
$lang['Rules_edit_cannot'] = '<b>Nem</b> m�dos�thatod a hozz�sz�l�sidat a f�rumban';
$lang['Rules_delete_can'] = '<b>T�r�lheted</b> a hozz�sz�l�saidat a f�rumban';
$lang['Rules_delete_cannot'] = '<b>Nem</b> t�r�lheted a hozz�sz�l�saidat a f�rumban';
$lang['Rules_vote_can'] = '<b>Szavazhatsz</b> ebben a f�rumban';
$lang['Rules_vote_cannot'] = '<b>Nem</b> szavazhatsz ebben f�rumban';
$lang['Rules_moderate'] = '<b>%sModer�lhatod%s</b> ezt a f�rumot';

$lang['No_topics_post_one'] = 'Nincsenek t�m�k a f�rumban<br />Kattints az <b>�j T�ma k�sz�t�s�re</b>';
//
// Viewtopic
//
$lang['View_topic'] = 'T�ma megtekint�se';

$lang['Guest'] = 'Vend�g';
$lang['Post_subject'] = 'T�ma';
$lang['View_next_topic'] = 'K�vetkez� t�ma megtekint�se';
$lang['View_previous_topic'] = 'El�z� t�ma megtekint�se';
$lang['Submit_vote'] = 'Szavaz�s k�ld�se';
$lang['View_results'] = 'Eredm�ny megtekint�se';

$lang['No_newer_topics'] = 'Nincsenek �jabb t�m�k a f�rumban';
$lang['No_older_topics'] = 'Nincsenek r�gbbi t�m�k a f�rumban';
$lang['Topic_post_not_exist'] = 'A t�ma vagy hozz�sz�l�s nem l�tezik';
$lang['No_posts_topic'] = 'Nincs hozz�sz�l�s a t�m�ban';

$lang['Display_posts'] = 'Hozz�sz�l�sok megtekint�se el�lr�l';
$lang['All_Posts'] = '�sszes hozz�sz�l�s';
$lang['Newest_First'] = '�jak el�re';
$lang['Oldest_First'] = 'R�gebbiek el�re';

$lang['Back_to_top'] = 'Vissza az elej�re';

$lang['Read_profile'] = 'Felhaszn�l� profilj�nak megtekint�se';
$lang['Send_email'] = 'Email k�ld�se a felhaszn�l�nak';
$lang['Visit_website'] = 'Felhaszn�l� weblapj�nak megtekint�se';
$lang['ICQ_status'] = 'ICQ St�tusz';
$lang['Edit_delete_post'] = 'Hozz�sz�l�s szerkeszt�se/t�rl�se';
$lang['View_IP'] = 'Felhaszn�l� IP-c�me';
$lang['Delete_post'] = 'Hozz�sz�l�s t�rl�se';

$lang['wrote'] = '�rta'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Id�zet'; // comes before bbcode quote output.
$lang['Code'] = 'K�d'; // comes before bbcode code output.
/*****[BEGIN]******************************************
 [ Mod:     PHP Syntax Highlighter BBCode      v3.0.7 ]
 ******************************************************/
$lang['PHPCode'] = 'PHP'; // PHP MOD
/*****[END]********************************************
 [ Mod:     PHP Syntax Highlighter BBCode      v3.0.7 ]
 ******************************************************/

$lang['Edited_time_total'] = 'Last edited by %s on %s; edited %d time in total'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Last edited by %s on %s; edited %d times in total'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'T�ma lez�r�sa';
$lang['Unlock_topic'] = 'T�ma megnyit�sa';
$lang['Move_topic'] = 'T�ma �thelyez�se';
$lang['Delete_topic'] = 'T�ma t�rl�se';
$lang['Split_topic'] = 'T�ma sz�tv�laszt�sa';

$lang['Stop_watching_topic'] = 'T�ma figyel�se megsz�ntetve';
$lang['Start_watching_topic'] = 'V�laszok figyel�se a t�m�ban';
$lang['No_longer_watching'] = 'T�ma figyel�se megsz�ntetve';
$lang['You_are_watching'] = 'Jelenleg figyeled a t�m�t';

$lang['Total_votes'] = '�sszes szavazat';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '�zenet';
$lang['Topic_review'] = 'T�ma el�n�zete';

$lang['No_post_mode'] = 'Nincs hozz�sz�l�s-t�pus kiv�lasztva';

$lang['Post_a_new_topic'] = '�j t�ma k�ld�se';
$lang['Post_a_reply'] = '�j v�lasz k�ld�se';
$lang['Post_topic_as'] = 'T�ma k�ld�se mint';
$lang['Edit_Post'] = 'Hozz�sz�l�s szerkeszt�se';
$lang['Options'] = 'Be�ll�t�sok';

$lang['Post_Announcement'] = 'K�zlem�ny';
$lang['Post_Sticky'] = 'Kiemelt';
$lang['Post_Normal'] = 'Sima';

$lang['Confirm_delete'] = 'Biztosan t�r�lni akarod a hozz�sz�l�st?';
$lang['Confirm_delete_poll'] = 'Biztosan t�r�lni akarod a szavaz�st?';

$lang['Flood_Error'] = 'Nem k�ldhetsz r�vid id�n bel�l t�bb hozz�sz�l�st, v�rj egy kicsit';
$lang['Empty_subject'] = '�j t�m�n�l meg kell hat�roznod a c�met';
$lang['Empty_message'] = 'Nem k�ldhetsz �res hozz�sz�l�st';
$lang['Forum_locked'] = 'Z�rt f�rum; nem k�ldhetsz hozz�sz�l�st, v�laszt, nem szerkesztheted a t�m�kat';
$lang['Topic_locked'] = 'Z�rt t�ma; nem szerkesztheted a hozz�sz�l�sokat, vagy nem k�sz�thetsz v�laszt';
$lang['No_post_id'] = 'A szerkeszt�shez v�lassz ki egy hozz�sz�l�st';
$lang['No_topic_id'] = 'Az �zenet k�ld�s�hez v�lassz ki egy topicot';
$lang['No_valid_mode'] = 'Csak k�ldhetsz, szerkeszthetsz, vagy id�zhetsz hozz�sz�l�st, v�laszt. L�pj vissza, �s pr�b�ld �jra';
$lang['No_such_post'] = 'Nincsen ilyen hozz�sz�l�s. L�pj vissza, �s pr�b�ld �jra';
$lang['Edit_own_posts'] = 'Csak szerkesztheted a hozz�sz�l�saidat';
$lang['Delete_own_posts'] = 'Csak t�r�lheted a hozz�sz�l�saidat';
$lang['Cannot_delete_replied'] = 'Nem t�r�lhetsz a hozz�sz�l�st, melyre m�r �rkezett v�lasz';
$lang['Cannot_delete_poll'] = 'Nem t�r�lhetsz akt�v szavaz�st';
$lang['Empty_poll_title'] = 'Adj c�met a szavaz�snak';
$lang['To_few_poll_options'] = 'Legal�bb k�t v�laszt�si lehet�s�get adj meg';
$lang['To_many_poll_options'] = 'T�l sok v�laszt�si lehet�s�get adt�l meg';
$lang['Post_has_no_poll'] = 'A hozz�sz�l�snak nincs szavaz�sa';
$lang['Already_voted'] = 'Egyszer m�r szavazt�l';
$lang['No_vote_option'] = 'V�lassz egy lehet�s�get a szavaz�sn�l';

$lang['Add_poll'] = 'Szavaz�s hozz�ad�sa';
$lang['Add_poll_explain'] = 'Ha nem akarsz szavaz�st adni a t�m�hoz, hagyd �resen a mez�ket';
$lang['Poll_question'] = 'A szavaz�s k�rd�se';
$lang['Poll_option'] = 'V�laszt�si lehet�s�g';
$lang['Add_option'] = 'Hozz�ad�s';
$lang['Update'] = 'Friss�t�s';
$lang['Delete'] = 'T�rl�s';
$lang['Poll_for'] = 'A szavaz�s �rv�nyes';
$lang['Days'] = 'napig';
$lang['Poll_for_explain'] = '[ Hagyd �resen, ha soha sem j�r le a szavaz�s ]';
$lang['Delete_poll'] = 'Szavaz�s t�rl�se';

$lang['Disable_HTML_post'] = 'HTML kikapcsol�sa a hozz�sz�l�sban';
$lang['Disable_BBCode_post'] = 'BBCode kikapcsol�sa a hozz�sz�l�sban';
$lang['Disable_Smilies_post'] = 'Emotikonok kikapcsol�sa a hozz�sz�l�sban';

$lang['HTML_is_ON'] = 'HTML <u>bekapcsolva</u>';
$lang['HTML_is_OFF'] = 'HTML <u>kikapcsolva</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>bekapcsolva</u>';
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>kikapcsolva</u>';
$lang['Smilies_are_ON'] = 'Emotikonok <u>bekapcsolva</u>';
$lang['Smilies_are_OFF'] = 'Emotikonok <u>kikapcsolva</u>';

$lang['Attach_signature'] = 'Al��r�s hozz�ad�sa (az al��r�s megv�ltoztathat� a Profilban)';
$lang['Notify'] = '�rtes�t�s, ha hozz�sz�l�s �rkezik';
$lang['Delete_post'] = 'Hozz�sz�l�s t�rl�se';

$lang['Stored'] = 'A hozz�sz�l�s sikeresen beker�lt';
$lang['Deleted'] = 'A hozz�sz�l�s t�rl�se siker�lt';
$lang['Poll_delete'] = 'A szavaz�s t�rl�se siker�lt';
$lang['Vote_cast'] = 'Szavaz�s elfogadva';

$lang['Topic_reply_notification'] = 'Topic Reply Notification';

$lang['bbcode_b_help'] = 'F�lk�v�r: [b]sz�veg[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'D�lt: [i]sz�veg[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Al�h�z�s: [u]sz�veg[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Id�zet: [quote]sz�veg[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'K�d: [code]k�d[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]sz�veg[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Rendezett lista: [list=]sz�veg[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'K�p beilleszt�se: [img]http://k�p_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL beilleszt�se: [url]http://url[/url]vagy[url=http://url]URL sz�veg[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Nyitott BBk�d tag-ek lez�r�sa';
$lang['bbcode_s_help'] = 'Bet�sz�n: [color=red]text[/color] \(a \"color=#FF0000 is haszn�lhat�\)';
$lang['bbcode_f_help'] = 'Bet�m�ret: [size=x-small]kis sz�veg[/size]';

$lang['Emoticons'] = 'Emotikonok';
$lang['More_emoticons'] = 'T�bbi emotikon megtekint�se';

$lang['Font_color'] = 'Bet�sz�n';
$lang['color_default'] = 'Alap';
$lang['color_dark_red'] = 'S�t�tpiros';
$lang['color_red'] = 'Piros';
$lang['color_orange'] = 'Narancs';
$lang['color_brown'] = 'Barna';
$lang['color_yellow'] = 'S�rga';
$lang['color_green'] = 'Z�ld';
$lang['color_olive'] = 'Ol�va';
$lang['color_cyan'] = 'Ci�n';
$lang['color_blue'] = 'K�k';
$lang['color_dark_blue'] = 'S�t�tk�k';
$lang['color_indigo'] = 'Indig�';
$lang['color_violet'] = 'Ibolya';
$lang['color_white'] = 'Feh�r';
$lang['color_black'] = 'Fekete';

$lang['Font_size'] = 'Bet�m�ret';
$lang['font_tiny'] = 'Apr�';
$lang['font_small'] = 'Kicsi';
$lang['font_normal'] = 'Norm�l';
$lang['font_large'] = 'Nagy';
$lang['font_huge'] = '�ri�s';

$lang['Close_Tags'] = 'Tag-ek lez�r�sa';
$lang['Styles_tip'] = 'Tipp: st�lusok gyors alkalmaz�sa az adott sz�vegen';
$lang['glance_news_heading'] = 'Legutols� H�r';
$lang['glance_recent_heading'] = 'Leg�jjabb H�r';

//
// Private Messaging
//
$lang['Private_Messaging'] = 'Priv�t �zenet';

$lang['Login_check_pm'] = '�zeneteid olvas�s�hoz jelentkezz be';
$lang['New_pms'] = '%d �j �zeneted van';
$lang['New_pm'] = '%d �j �zeneted van';
$lang['No_new_pm'] = 'Nincsen �j �zeneted';
$lang['Unread_pms'] = '%d olvasatlan �zeneted van';
$lang['Unread_pm'] = '%d olvasatlan �zeneted van';
$lang['No_unread_pm'] = 'Nincsen olvasatlan �zeneted';
$lang['You_new_pm'] = '�j priv�t �zenet �rkezett';
$lang['You_new_pms'] = '�j priv�t �zenet �rkezett';
$lang['You_no_new_pm'] = 'Nincs �j priv�t �zenet';

$lang['Unread_message'] = 'Olvasatlan �zenetek';
$lang['Read_message'] = 'Olvasott �zenetek';

$lang['Read_pm'] = '�zenet olvas�sa';
$lang['Post_new_pm'] = '�zenet k�ld�se';
$lang['Post_reply_pm'] = 'V�lasz az �zenetre';
$lang['Post_quote_pm'] = '�zenet id�z�se';
$lang['Edit_pm'] = '�zenet szerkeszt�se';

$lang['Inbox'] = '�rkezett fi�k';
$lang['Outbox'] = 'Kimen� fi�k';
$lang['Savebox'] = 'Ment�s fi�k';
$lang['Sentbox'] = 'Elk�ld�tt fi�k';
$lang['Flag'] = 'Jel�lt';
$lang['Subject'] = 'C�m';
$lang['From'] = 'Felad�';
$lang['To'] = 'C�mzett';
$lang['Date'] = 'D�tum';
$lang['Mark'] = 'Megjel�l�s';
$lang['Sent'] = 'Elk�ld�tt';
$lang['Saved'] = 'Elmentett';
$lang['Delete_marked'] = 'Kijel�lt t�rl�se';
$lang['Delete_all'] = '�sszes t�rl�se';
$lang['Save_marked'] = 'Kijel�lt ment�se';
$lang['Save_message'] = '�zenet ment�se';
$lang['Delete_message'] = '�zenet t�rl�se';

$lang['Display_messages'] = '�zenetek megjelen�t�se az el�z�';
$lang['All_Messages'] = '�sszes �zenet';

$lang['No_messages_folder'] = 'Nincs �zeneted ebben a fi�kban';

$lang['PM_disabled'] = 'Nincs lehet�s�g Priv�t �zenet k�ld�s�re';
$lang['Cannot_send_privmsg'] = 'Sajnos nem k�ldhetsz Priv�t �zeneteket. L�pj kapcsolatba az Adminisztr�torral';
$lang['No_to_user'] = 'Az �zenet k�ld�s�hez meg kell adnod a nevet';
$lang['No_such_user'] = 'Ilyen nev� felhaszn�l� nem l�tezik';

$lang['Disable_HTML_pm'] = 'HTML kikapcsol�sa az �zenetben';
$lang['Disable_BBCode_pm'] = 'BBk�d kikapcsol�sa az �zenetben';
$lang['Disable_Smilies_pm'] = 'Emotikonok kikapcsol�sa az �zenetben';

$lang['Message_sent'] = 'Az �zenetet elk�ldt�k';

$lang['Click_return_inbox'] = 'Kattints %side%s, hogy visszat�rj az �rkezett �zenetekhez';
$lang['Click_return_index'] = 'Kattints %side%s, hogy visszat�rj a Tartalomjegyz�khez';

$lang['Send_a_new_message'] = '�j Priv�t �zenet k�ld�se';
$lang['Send_a_reply'] = 'V�lasz a Priv�t �zenetre';
$lang['Edit_message'] = 'Priv�te �zenet szerkeszt�se';

$lang['Notification_subject'] = '�j Priv�t �zenet �rkezett';

$lang['Find_username'] = 'Felhaszn�l�n�v keres�se';
$lang['Find'] = 'Tal�lat';
$lang['No_match'] = 'Nincs tal�lat';

$lang['No_post_id'] = 'Nincs azonos�t� megadva';
$lang['No_such_folder'] = 'Nem l�tezik ilyen fi�k';
$lang['No_folder'] = 'Nincs fi�k meghat�rozva';

$lang['Mark_all'] = '�sszes kijel�l�se';
$lang['Unmark_all'] = '�sszes kijel�l�s�nek megsz�ntet�se';

$lang['Confirm_delete_pm'] = 'Biztosan t�r�lni akarod az �zenetet?';
$lang['Confirm_delete_pms'] = 'Biztosan t�r�lni akarod az �zeneteket?';

$lang['Inbox_size'] = 'Az �rkezett fi�kod %d%%-ig tel�tett';
$lang['Sentbox_size'] = 'Az Elk�ld�tt fi�kod %d%%-ig tel�tett';
$lang['Savebox_size'] = 'Az Ment�s fi�kod tele van %d%%-ig tel�tett';

$lang['Click_view_privmsg'] = 'Kattints %side%s az �rkezett fi�kod megtekint�s�hez';
//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil megtekint�se :: %s';
$lang['About_user'] = 'Inform�ci�: %s';
/*****[BEGIN]******************************************
 [ Mod:    User Administration Link on Profile v1.0.0 ]
 ******************************************************/
$lang['User_admin_for'] = 'Felhaszn�l� Adminisztr�l�sa';
/*****[END]********************************************
 [ Mod:    User Administration Link on Profile v1.0.0 ]
 ******************************************************/

$lang['Preferences'] = 'Be�ll�t�sok';
$lang['Items_required'] = 'A csillaggal megjel�lt mez�k kit�lt�se k�telez�';
$lang['Registration_info'] = 'Regisztr�ci� inform�ci�';
$lang['Profile_info'] = 'Profil inform�ci�';
$lang['Profile_info_warn'] = 'Ezeket az inform�ci�kat mindenki l�tni fogja';
$lang['Avatar_panel'] = 'Avatar be�ll�t�s';
$lang['Avatar_gallery'] = 'Avatar gal�ria';

$lang['Website'] = 'Weboldal';
$lang['Myspace'] = 'Myspace Adatok';
$lang['Location'] = 'Tart�zkod�si hely';
$lang['Contact'] = 'Kapcsolat';
$lang['Email_address'] = 'E-mail c�m';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Priv�t �zenet k�ld�se';
$lang['Hidden_email'] = '[ Rejtett ]';
$lang['Search_user_posts'] = 'Felhaszn�l� hozz�sz�l�sainak keres�se';
$lang['Interests'] = '�rdekl�d�si k�r';
$lang['Occupation'] = 'Foglalkoz�s';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = '�sszes hozz�sz�l�sa';
$lang['User_post_pct_stats'] = 'Az �sszes %.2f%%-ka';
$lang['User_post_day_stats'] = 'Naponta %.2f hozz�sz�l�s';
$lang['Search_user_posts'] = '%s hozz�sz�l�sainak keres�se';

$lang['No_user_id_specified'] = 'A felhaszn�l� nem l�tezik';
$lang['Wrong_Profile'] = 'M�s Profilj�t nem m�dos�thatod.';

$lang['Only_one_avatar'] = 'Csak egy Avatart v�lassz ki';
$lang['File_no_data'] = 'A megadott webc�m nem tartalmaz adatot';
$lang['No_connection_URL'] = 'A megadott webc�mhez nem lehet csatlakozni';
$lang['Incomplete_URL'] = 'A megadott webc�m hi�nyos';
$lang['Wrong_remote_avatar_format'] = 'A t�voli avatar webc�me nem �rv�nyes';
$lang['No_send_account_inactive'] = 'A jelsz� sajnos nem lek�rhet�, mivel a felhaszn�l�n�v jelenleg inakt�v. L�pj kapcsolatba az Adminisztr�torral';

$lang['Always_smile'] = 'Mindig enged�lyezze a Emotikonokat';
$lang['Always_html'] = 'Mindig enged�lyezze a HTML-t';
$lang['Always_bbcode'] = 'Mindig enged�lyezze a BBCode-ot';
$lang['Always_add_sig'] = 'Mindig csatolja az al��r�somat';
$lang['Always_notify'] = 'Mindig �rtes�tsen ha v�lasz �rkezik';
$lang['Always_notify_explain'] = 'K�ld egy email, ha hozz�sz�l�s �rkezik az adott t�m�ban. Ez b�rmikor megv�ltoztathat�, ha hozz�sz�l�st k�ldesz';

/*****[BEGIN]******************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/
$lang['Word_Wrap'] = 'K�perny� sz�less�g';
$lang['Word_Wrap_Explain'] = 'A hozz�sz�l�s maxim�lis hossz�s�ga.';
$lang['Word_Wrap_Extra'] = 'karakter (�rt�ke: 50 - 99 kar..)';
$lang['Word_Wrap_Error'] = 'A megadott hat�r�rt�ken k�v�l esik.';
/*****[END]********************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/

$lang['Board_style'] = 'T�ma';
$lang['Board_lang'] = 'Nyelv';
$lang['No_themes'] = 'Nincsenek t�m�k az adatb�zisban';
$lang['Timezone'] = 'Id�z�na';
$lang['Date_format'] = 'D�tum form�tum';
$lang['Date_format_explain'] = 'A PHP date() <a href=\'http://www.php.net/date\'target=\'_other\'>date()</a> szerint haszn�land�';
$lang['Signature'] = 'Al��r�s';
$lang['Signature_explain'] = 'A hozz�sz�l�sok v�g�re ker�l� sz�veg. Maximum %d karakter lehet';
$lang['Public_view_email'] = 'E-mail c�m megjelen�t�se';

$lang['Current_password'] = 'Jelenlegi jelsz�';
$lang['New_password'] = '�j jelsz�';
$lang['Confirm_password'] = 'Jelsz� megism�tl�se';
$lang['Confirm_password_explain'] = '�j jelsz�t kell megadnod, ha a r�git meg akarod v�ltoztatni, vagy ha az emailc�met akarosz cser�lni';
$lang['password_if_changed'] = 'Csak akkor kell megadnod a jelsz�t, ha meg akarod v�ltoztatni';
$lang['password_confirm_if_changed'] = 'A fenti jelsz� �rv�nyes�t�s�hez sz�ks�ges';

$lang['Avatar'] = 'Avatar';
/*****[BEGIN]******************************************
 [ Mod:     Remote Avatar Resize               v1.1.4 ]
 ******************************************************/
$lang['Avatar_explain'] = 'Egy kis k�p, mely a hozz�sz�l�sban a nevedn�l l�that�. Egyszerre csak egy k�p jelent�t�dik meg; nem lehet sz�lesebb, mint %d pixel, �s nem lehet magasabb, mint %d pixel. A m�rete nem haladhatja meg a %dkByte-ot.';
/*****[END]********************************************
 [ Mod:     Remote Avatar Resize               v1.1.4 ]
 ******************************************************/
$lang['Upload_Avatar_file'] = ' Avatar felt�lt�se a sz�m�t�g�pr�l';
$lang['Upload_Avatar_URL'] = 'Avatar felt�lt�se webc�mr�l';
$lang['Upload_Avatar_URL_explain'] = '�rd be az Avatar k�p�nek webc�m�t (�t lesz m�solva erre az oldalra).';
$lang['Pick_local_Avatar'] = 'Avatar kiv�laszt�sa a gal�ri�b�l';
$lang['Link_remote_Avatar'] = 'Avatar k�p linkel�se';
$lang['Link_remote_Avatar_explain'] = '�rd be az Avatar k�p�nek webc�m�t, amelyet be szeretn�l linkelni.';
$lang['Avatar_URL'] = 'Avatar k�p�nek webc�me';
$lang['Select_from_gallery'] = 'Avatar kiv�laszt�sa a gal�ri�b�l';
$lang['View_avatar_gallery'] = 'Gal�ria megmutat�sa';

$lang['Select_avatar'] = 'Avatar kiv�laszt�sa';
$lang['Return_profile'] = 'M�gsem';
$lang['Select_category'] = 'Kateg�ria v�laszt�sa';

$lang['Delete_Image'] = 'K�p t�rl�se';
$lang['Current_Image'] = 'Jelenlegi k�p';

$lang['Notify_on_privmsg'] = '�rtes�t�s �j Priv�t �zenet �rtes�t�sekor';
$lang['Popup_on_privmsg'] = 'Felugr� ablak �j Priv�t �zenet �rkez�sekor';
$lang['Popup_on_privmsg_explain'] = 'N�h�ny t�ma �j ablakot nyit, ha �j �zeneted �rkezik';
$lang['Hide_user'] = 'Jelenl�t elrejt�se';

$lang['Profile_updated'] = 'A Profil megv�ltozott';
$lang['Profile_updated_inactive'] = 'A Profil megv�ltozott, de mivel alapvet� inform�ci�kon v�ltoztatt�l, �gy a hozz�f�r�sed inakt�vra v�ltozott. Ellen�rizd az Emailedet, hogy hogyan tudod reaktiv�lni, vagy ha Adminisztr�tor sz�ks�ges ehhez, akkor v�rj, hogy az Adminisztr�tor reaktiv�lja a hozz�f�r�sedet';

$lang['Password_mismatch'] = 'A be�rt jelszavak nem egyeznek';
$lang['Current_password_mismatch'] = 'A jelenlegi jelsz� nem egyezik meg az adatb�zisban tal�lhat�val';
$lang['Password_long'] = 'A jelsz� nem lehet t�bb mint 32 karakter';
$lang['Username_taken'] = 'Ez a felhaszn�l�n�v m�r foglalt';
$lang['Username_invalid'] = 'A felhaszn�l�n�v �rv�nytelen karaktert tartalmaz (mint pld. \)';
$lang['Username_disallowed'] = 'Ez a felhaszn�l�n�v nem enged�lyezett';
$lang['Email_taken'] = 'Ezt az emailc�met m�r regisztr�lta egy m�sik felhaszn�l�';
$lang['Email_banned'] = 'Ez az emailc�m le van tiltva';
$lang['Email_invalid'] = '�rv�nytelen emailc�m';
$lang['Signature_too_long'] = 'T�l hossz� al��r�s';
$lang['Fields_empty'] = 'A csillaggal jel�lt mez�k kit�lt�se k�telez�';
$lang['Avatar_filetype'] = 'Az avatar k�p t�pusa .jpg, .gif vagy .png lehet';
$lang['Avatar_filesize'] = 'Az avatar k�p nem lehet nagyobb mint %d kByte';
$lang['Avatar_imagesize'] = 'Az avatar nem lehet nagyobb mint %d pixel sz�les �s %d pixel magas';

$lang['Welcome_subject'] = '�dv�zl�nk a(z) %s f�rum�ban';
$lang['New_account_subject'] = '�j felhaszn�l�';
$lang['Account_activated_subject'] = 'Felhaszn�l� aktiv�lva';

$lang['Account_added'] = 'K�sz�nj�k a regisztr�ci�dat, a regisztr�ci� sikeres volt. Most m�r bejelentkezhetsz a neveddel, �s a hozz� tartoz� jelsz�val';
$lang['Account_inactive'] = 'A regisztr�ci� sikeres volt, de biztons�gi okokb�l egy levelet k�ldt�nk az �ltalad megadott emailc�mre, mellyel ellen�rizz�k a regisztr�ci�t. Tov�bbi inform�ci�k az emailben';
$lang['Account_inactive_admin'] = 'A regisztr�ci� sikeres volt, de a f�rum haszn�lat�hoz az Adminisztr�tor j�v�hagy�sa sz�ks�ges. R�videsen �rtes�t az regisztr�ci�d befejez�s�r�l, a felhaszn�l�i neved aktiv�l�s�r�l';
$lang['Account_active'] = 'A felhaszn�l�neved aktiv�lva van. K�sz�nj�k a regisztr�ci�t';
$lang['Account_active_admin'] = 'A felhaszn�l� aktiv�lva van';
$lang['Reactivate'] = 'Felhaszn�l�n�v reaktiv�l�sa!';
$lang['Already_activated'] = 'M�r aktiv�ltad a felhaszn�l�nevedet';
$lang['COPPA'] = 'A felhaszn�l�n�v elk�sz�lt, de az ellen�rz�s �gy�ben ellen�rizd az emailc�medet.';

$lang['Registration'] = 'Felhaszn�l�i szab�lyzat';
$lang['Reg_agreement'] = 'Noha az Adminisztr�tor, �s a Moder�torok mindent megtesznek, hogy min�l hamarabb elt�vol�ts�k, vagy t�r�lj�k a F�rumb�l az �ltal�nosan kifog�solhat� anyagokat, lehetetlen, hogy minden egyes hozz�sz�l�st �tn�zzenek. Ebb�l ad�d�an elfogadom, hogy a F�rumon tal�lhat� �sszes hozz�sz�l�s a szerz� n�zeteit t�kr�zi, �s nem az Adminisztr�torok, Moder�torok, vagy a webmester �ll�spontj�t - nem v�llalnak felel�ss�get a hozz�sz�l�sok tartalm��rt.<br /><br/>Beleegyezek, hogy nem k�ld�k s�rteget�, obszc�n, vulg�ris, r�galmaz�, gy�l�letkelt�, t�mad�, vagy b�rmely m�s olyan anyagot, mely t�rv�nys�rt�. Sem olyan anyagot, mely ellent�tes az �ltal�nos k�z�zl�ssel. A fentiek megs�rt�se azonnali �s v�gleges t�rl�st von maga ut�n.<br/>Elfogadom, hogy a F�rum webmester�nek, az Adminisztr�tornak �s b�rmely Moder�tornak jog�ban �ll elt�vol�tani, szerkeszteni a hozz�sz�l�saimat, vagy lez�rni az �ltalam nyitott t�m�kat, amennyiben �gy �t�lik meg hogy ez sz�ks�ges. Mint felhaszn�l�, elfogadom, hogy n�h�ny, �ltalam megadott inform�ci� t�rol�sra ker�l a F�rum adatb�zis�ban. Ezek az adatok nem ker�lnek ki egy harmadik f�lnek, de sem az Adminisztr�tor sem a Moder�torok nem tudnak felel�ss�get v�llalni,hogy "hacker-t�mad�s" �ltal nem ker�l ki egy harmadik f�lnek.<br /><br />A F�rum "cookie"-kat(s�tiket) haszn�l, hogy adatokat t�roljon a felhaszn�l� sz�m�t�g�p�n, de egyik sem tartalmaz adatokat, melyet a regisztr�ci�n�l ker�l megad�sra; puszt�n technikai szempontb�l sz�ks�gesekezek. A megadott emailc�m csak a regisztr�ci� (�s �j jelsz�) �rv�nyes�t�s�n�l ker�lfelhaszn�l�sra.<br /><br />A lentebbi regisztr�ci�ra kattintva elfogadom a fenti felt�teleket.';

$lang['Agree_under_13'] = 'Elfogadom a felt�teleket, �s 13 �vesn�l <b>fiatalabb</b> vagyok';
$lang['Agree_over_13'] = 'Elfogadom a felt�teleket';
$lang['Agree_not'] = 'Nem fogadom el a felt�teleket';

$lang['Wrong_activation'] = 'Az aktiv�ci�s kulcs nem egyezik meg az adatb�zisban l�v�vel';
$lang['Send_password'] = '�j jelsz� k�ld�se';
$lang['Password_updated'] = 'Az �j jelsz� elk�sz�lt, ellen�rizd az emailc�medet a tov�bbi inform�ci�k�rt';
$lang['No_email_match'] = 'A megadott emailc�m nem egyezik meg a hozz� adott felhaszn�l�n�vhez';
$lang['New_password_activation'] = '�j jelsz� aktiv�ci�';
$lang['Password_activated'] = 'A hozz�f�r�sedeet reaktiv�ltuk. A bejelentkez�shez �rd be az emailben megadott jelsz�t';

$lang['Send_email_msg'] = 'Email �zenet k�ld�se';
$lang['No_user_specified'] = 'Nem adt�l meg felhaszn�l�nevet';
$lang['User_prevent_email'] = 'A felhaszn�l� nem akar e-maileket fogadni. Pr�b�lj Priv�t �zenetet k�ldeni';
$lang['User_not_exist'] = 'A felhaszn�l� nem l�tezik';
$lang['CC_email'] = 'M�solat k�ld�se magadnak';
$lang['Email_message_desc'] = 'Az �zenet sima sz�vegk�nt lesz elk�ldve, ez�rt ne haszn�lj HTML-t vagy BBCode tageket. A v�laszc�m a te emailc�med lesz.';
$lang['Flood_email_limit'] = 'Most nem k�ldhetsz t�bb emailt, pr�b�ld k�s�bb';
$lang['Recipient'] = 'C�mzett';
$lang['Email_sent'] = 'E-mail elk�ldve';
$lang['Send_email'] = 'E-mail k�ld�se';
$lang['Empty_subject_email'] = 'K�telez� a t�ma megad�sa';
$lang['Empty_message_email'] = '�res �zenet';
//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Helytelen meger�s�t� k�d';
$lang['Too_many_registers'] = 'T�l sokszor pr�b�lkozt�l egym�s ut�n a regisztr�ci�val. K�rj�k, pr�b�lkozz k�s�bb.';
$lang['Confirm_code_impaired'] = 'Ha gyeng�nl�t� vagy, esetleg m�s ok miatt nem tudod elolvasni a k�dot, l�pj kapcsolatba az %sAdminisztr�torral%s.';
$lang['Confirm_code'] = 'Meger�s�t� k�d';
$lang['Confirm_code_explain'] = 'Pontosan �rd be a k�dot, amit l�tsz. Sz�m�t a kis- �s nagybet� k�zti k�l�nbs�g, a nulla egy �tl�s vonallal van �th�zva.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Rendez�si m�d kiv�laszt�sa';
$lang['Sort'] = 'Rendez�s';
$lang['Sort_Top_Ten'] = 'Legt�bb hozz�sz�l�st k�ld� 10 felhaszn�l�';
$lang['Sort_Joined'] = 'Regisztr�ci� d�tuma';
$lang['Sort_Username'] = 'Felhaszn�l�n�v';
$lang['Sort_Location'] = 'Tart�zkod�si hely';
$lang['Sort_Posts'] = '�sszes hozz�sz�l�s';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Weboldal';
$lang['Sort_Ascending'] = 'N�vekv�';
$lang['Sort_Descending'] = 'Cs�kken�';
$lang['Order'] = 'Sorrend';
//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Csoport vez�rl�pult';
$lang['Group_member_details'] = 'Csoporttags�g R�szletek';
$lang['Group_member_join'] = 'Csatlakoz�s egy csoporthoz';

$lang['Group_Information'] = 'Csoport inform�ci�';
$lang['Group_name'] = 'Csoportn�v';
$lang['Group_description'] = 'Csoport le�r�s';
$lang['Group_membership'] = 'Csoporttags�g';
$lang['Group_Members'] = 'Csoporttagok';
$lang['Group_Moderator'] = 'Csoport Moder�tor';
$lang['Pending_members'] = 'K�relmezett tags�gok';

$lang['Group_type'] = 'Csoport�pus';
$lang['Group_open'] = 'Nyitott csoport';
$lang['Group_closed'] = 'Z�rt csoport';
$lang['Group_hidden'] = 'Rejtett csoport';

$lang['Current_memberships'] = 'Aktu�lis tags�gok';
$lang['Non_member_groups'] = 'Nem-tags�gos csoportok';
$lang['Memberships_pending'] = 'Tags�gi k�relmek';

$lang['No_groups_exist'] = 'Nem l�tez� csoport';
$lang['Group_not_exist'] = 'A megadott csoport nem l�tezik';

$lang['Join_group'] = 'Csatlakoz�s a csoporthoz';
$lang['No_group_members'] = 'A csoportnak nincsenek tagjai';
$lang['Group_hidden_members'] = 'A csoport rejtett, nem tudod megn�zni a tagjait';
$lang['No_pending_group_members'] = 'A csoportnak nincsenek f�gg� k�relmez�sben l�v� tagjai';
$lang['Group_joined'] = 'A jelentkez�sed sikeres ebbe a csoportba<br />a Csoport Moder�tor �rtes�t ha elfogadta a jelentkez�sedet';
$lang['Group_request'] = 'A csatlakoz�si k�relmed elk�sz�lt';
$lang['Group_approved'] = 'Csatlakoz�si k�relmed elfogadva';
$lang['Group_added'] = 'Hozz� lett�l adva ehez a csoporthoz';
$lang['Already_member_group'] = 'M�r tagja vagy ennek a csoportnak';
$lang['User_is_member_group'] = 'A felhaszn�l� m�r most is tagja ennek a csoportnak';
$lang['Group_type_updated'] = 'Sikeresen megv�ltozott a Csoport t�pusa';

$lang['Could_not_add_user'] = 'A kiv�lasztott felhaszn�l� nem l�tezik';
$lang['Could_not_anon_user'] = 'Nem k�sz�thetsz N�vtelen csoporttagot';

$lang['Confirm_unsub'] = 'Biztos le akarod mondani ezt a csoporttags�got?';
$lang['Confirm_unsub_pending'] = 'A jelentkez�sed m�g nincs j�v�hagyva ehhez a csoporthoz, biztosan le akarod mondani?';

$lang['Unsub_success'] = 'Sikeresen lemondtad a Csoporttags�got';

$lang['Approve_selected'] = 'Kiv�lasztottak elfogad�sa';
$lang['Deny_selected'] = 'Kiv�laszottak elutas�t�sa';
$lang['Not_logged_in'] = 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz';
$lang['Remove_selected'] = 'Kijel�lt elt�vol�t�sa';
$lang['Add_member'] = 'Tag hozz�ad�sa';
$lang['Not_group_moderator'] = 'Nem vagy a Csoport Moder�tora, �gy nem v�gezheted el ezeket a m�dos�t�sokat';
$lang['Login_to_join'] = 'Jelentkezz be hogy csatlakozhass egy csoporthoz, vagy hogy ir�ny�tsd a csoporttags�gokat';
$lang['This_open_group'] = 'Nyitott csoport, kattints a Tags�g k�relmez�s�shez';
$lang['This_closed_group'] = 'Z�rt csoport, t�bb felhaszn�l� nem enged�lyezett';
$lang['This_hidden_group'] = 'Enn�l a rejtett csoportn�l nem enged�lyezett az automatikus felhaszn�l�-hozz�ad�s';
$lang['Member_this_group'] = 'A csoport tagja vagy';
$lang['Pending_this_group'] = 'A csoporttags�god egyel�re f�gg�ben van';
$lang['Are_group_moderator'] = 'Csoport Moder�tor vagy';
$lang['None'] = 'senki';
$lang['Subscribe'] = 'Jelentkez�s';
$lang['Unsubscribe'] = 'Lemond�s';
$lang['View_Information'] = 'Inform�ci� megtekint�se';
//
// Search
//
$lang['Search_query'] = 'Keres�si felt�tel';
$lang['Search_options'] = 'Keres�si be�ll�t�sok';

$lang['Search_keywords'] = 'Keres�s kulcssz� �ltal';
$lang['Search_keywords_explain'] = 'Haszn�lhatod az <u>�S</u> sz�t, hogy a keres�sben megadott �sszes sz� benne legyen a tal�latban, a <u>VAGY</u> sz�t mellyel a \"benne lehet\" szavakat v�laszthatod el, �s a <u>NEM</u> sz�t, mellyel kiz�rhatsz szavakat. Haszn�lj *-ot a r�szleges szavakhoz.';
$lang['Search_author'] = 'Szerz� keres�se';
$lang['Search_author_explain'] = 'Haszn�lj *-ot a r�szleges szavakhoz';

$lang['Search_for_any'] = 'Keres�s b�rmely kifejez�sre';
$lang['Search_for_all'] = 'Keres�s az �sszes kifejez�sre';
$lang['Search_title_msg'] = 'Keres�s t�ma c�mre, �s sz�vegre';
$lang['Search_msg_only'] = 'Csak sz�vegben keresse';

$lang['Return_first'] = 'A tal�lt t�m�k els�';
$lang['characters_posts'] = 'karakter�nek megjelen�t�se';

$lang['Search_previous'] = 'R�gebbi keres�s';

$lang['Sort_by'] = 'Rendez�si felt�tel';
$lang['Sort_Time'] = 'K�ld�s';
$lang['Sort_Post_Subject'] = 'T�ma';
$lang['Sort_Topic_Title'] = 'T�ma c�m';
$lang['Sort_Author'] = 'Szerz�';
$lang['Sort_Forum'] = 'F�rum';

$lang['Display_results'] = 'Tal�latok megjelen�t�se';
$lang['All_available'] = '�sszes tal�lat megjelen�t�se';
$lang['No_searchable_forums'] = 'Nincs jogod keresni a f�rumban';

$lang['No_search_match'] = 'A keres�si felt�teleknek egy f�rum �s egy t�ma sem felelt meg.';
$lang['Found_search_match'] = '%d tal�lat';
$lang['Found_search_matches'] = ' %d tal�lat';

$lang['Close_window'] = 'Ablak bez�r�sa';
//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Csak %s k�ldhet K�zlem�nyt ebbe a f�rumba';
$lang['Sorry_auth_sticky'] = 'Csak %s k�ldhet Kiemelt �zenetet ebbe a f�rumba';
$lang['Sorry_auth_read'] = 'Csak %s olvashatja a f�rum t�m�it';
$lang['Sorry_auth_post'] = 'Csak %s k�ldhet hozz�sz�l�st ebbe a f�rumba';
$lang['Sorry_auth_reply'] = 'Csak %s v�laszolhat egy hozz�sz�l�sra ebben a f�rumban';
$lang['Sorry_auth_edit'] = 'Csak %s szerkesztheti a hozz�sz�l�sokat ebben a f�rumban';
$lang['Sorry_auth_delete'] = 'Csak %s t�r�lhet hozz�sz�l�sokat ebben a f�rumban';
$lang['Sorry_auth_vote'] = 'Csak %s szavazhat ebben a f�rumban';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>n�vtelen felhaszn�l�k</b>';
$lang['Auth_Registered_Users'] = '<b>regisztr�lt felhaszn�l�k</b>';
$lang['Auth_Users_granted_access'] = '<b>felhaszn�l�k k�l�nleges enged�llyel</b>';
$lang['Auth_Moderators'] = '<b>moder�torok</b>';
$lang['Auth_Administrators'] = '<b>adminisztr�torok</b>';

$lang['Not_Moderator'] = 'Nem vagy a f�rum moder�tora';
$lang['Not_Authorised'] = 'Erre nem vagy jogosult';

$lang['You_been_banned'] = 'Ki lett�l tiltva err�l a F�rumr�l<br />Tov�bbi inform�ci��rt vedd fel a kapcsolatot a webmesterrel, vagy az Adminisztr�torral';
//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 Regisztr�lt felhaszn�l� �s ';
$lang['Reg_users_online'] = '%d Regisztr�lt felhaszn�l� �s ';
$lang['Reg_user_online'] = '%d Regisztr�lt felhaszn�l� �s ';
$lang['Hidden_users_zero_online'] = '0 Rejtett felhaszn�l� van jelen';
$lang['Hidden_users_online'] = '%d Rejtett felhaszn�l� van jelen';
$lang['Hidden_user_online'] = '%d Rejtett felhaszn�l� van jelen';
$lang['Guest_users_online'] = '%d Vend�g van jelen';
$lang['Guest_users_zero_online'] = '0 Vend�g van jelen';
$lang['Guest_user_online'] = '%d Vend�g van jelen';
$lang['No_users_browsing'] = 'Jelenleg egy felhaszn�l� sem b�ng�szi a F�rumot';

/*****[BEGIN]******************************************
 [ Mod:    Online Time                         v1.0.0 ]
 ******************************************************/
$lang['Online_explain'] = 'Az adatok, az elm�lt ' . ( ($board_config['online_time']/60)%60 ) . ' perc alapj�n k�sz�ltek';
/*****[END]********************************************
 [ Mod:    Online Time                         v1.0.0 ]
 ******************************************************/

$lang['Forum_Location'] = 'F�rum helye';
$lang['Last_updated'] = 'Legut�bb friss�tett';

$lang['Forum_index'] = 'F�rum kezd� oldala';
$lang['Logging_on'] = 'Bejelentkez�s';
$lang['Posting_message'] = '�zenet k�ld�se';
$lang['Searching_forums'] = 'F�rumok keres�se';
$lang['Viewing_profile'] = 'Profil megtekint�se';
$lang['Viewing_online'] = 'Jelenl�v� felhaszn�l�k megtekint�se';
$lang['Viewing_member_list'] = 'Taglista megtekint�se';
$lang['Viewing_priv_msgs'] = 'Priv�t �zenetek megtekint�se';
$lang['Viewing_FAQ'] = 'Gy.I.K. megtekint�se';
//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moder�tor vez�rl�pult';
$lang['Mod_CP_explain'] = 'Az al�bbi mez�k haszn�lat�val t�bb m�veletet v�gezhet� el a f�rumon: lez�r�s, megnyit�s, �thelyez�s, t�rl�s.';

$lang['Select'] = 'Kiv�laszt';
$lang['Delete'] = 'T�r�l';
$lang['Move'] = '�thelyez';
$lang['Lock'] = 'Bez�r';
$lang['Unlock'] = 'Megnyit';

$lang['Topics_Removed'] = 'A kiv�laszott t�m�k sikeresen t�r�lve lettek az adatb�zisb�l.';
$lang['Topics_Locked'] = 'A kiv�laszott t�m�k le lettek z�rva';
$lang['Topics_Moved'] = 'A kiv�laszott t�m�k �thelyez�dtek';
$lang['Topics_Unlocked'] = 'A kiv�laszott t�m�k megny�ltak';
$lang['No_Topics_Moved'] = 'Nem lett �thelyezve t�ma';
/*****[BEGIN]******************************************
 [ Mod:    Topic Cement                        v1.0.3 ]
 ******************************************************/
$lang['Topics_Prioritized'] = 'The selected topics have been prioritized.';
$lang['Priority'] = 'Priority';
$lang['Prioritize'] = 'Prioritize';
/*****[END]********************************************
 [ Mod:    Topic Cement                        v1.0.3 ]
 ******************************************************/

$lang['Confirm_delete_topic'] = 'Biztosan el akarod t�vol�tani a kiv�laszott t�m�(ka)t?';
$lang['Confirm_lock_topic'] = 'Biztosan le akarod z�rni a kiv�lasztott t�m�(ka)t??';
$lang['Confirm_unlock_topic'] = 'Biztosan meg akarod nyitni a kiv�lasztott t�m�(ka)t??';
$lang['Confirm_move_topic'] = 'Biztosan �t akarod helyezni a kiv�lasztott t�m�(ka)t?';

$lang['Move_to_forum'] = '�thelyez�s a f�rumba';
$lang['Leave_shadow_topic'] = '�rny�k-t�ma hagy�sa a r�gi f�rumban';

$lang['Split_Topic'] = 'T�ma-sz�tv�laszt� vez�l�pult';
$lang['Split_Topic_explain'] = 'Az al�bbi mez�k haszn�lat�val egy t�m�t k�tf�lek�ppen v�laszthatsz sz�t: vagy az adott hozz�sz�l�sok kiemel�s�vel, vagy egy adott hozz�sz�l�st�l';
$lang['Split_title'] = '�j t�ma c�me';
$lang['Split_forum'] = '�j t�ma f�ruma';
$lang['Split_posts'] = 'Kiv�lasztott hozz�sz�l�sok sz�tv�laszt�sa';
$lang['Split_after'] = 'Sz�tv�laszt�s az adott hozz�sz�l�st�l';
$lang['Topic_split'] = 'A t�ma sikeresen kett� lett osztva';

$lang['Too_many_error'] = 'T�l sok hozz�sz�l�st v�lasztott�l ki. Csak egy hozz�sz�l�st v�lassz ki, az ut�na k�vetkez�k is kiemel�dnek.';

$lang['None_selected'] = 'A m�velet v�grahajt�s�hoz t�m�t is ki kell v�lasztani. L�pj vissza, �s v�lassz ki legal�bb egyet.';
$lang['New_forum'] = '�j f�rum';

$lang['This_posts_IP'] = 'A hozz�sz�l�s IP-je';
$lang['Other_IP_this_user'] = 'A felhaszn�l�hoz tartoz� egy�b IP c�mek';
$lang['Users_this_IP'] = 'Az IP-hez tartoz� felhaszn�l�k';
$lang['IP_info'] = 'IP inform�ci�';
$lang['Lookup_IP'] = 'IP keres�se';
//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Id�z�na: %s';

$lang['-12'] = '(GMT -12 �ra)';
$lang['-11'] = '(GMT -11 �ra)';
$lang['-10'] = '(GMT -10 �ra)';
$lang['-9'] = '(GMT -9 �ra)';
$lang['-8'] = '(GMT -8 �ra)';
$lang['-7'] = '(GMT -7 �ra)';
$lang['-6'] = '(GMT -6 �ra)';
$lang['-5'] = '(GMT -5 �ra)';
$lang['-4'] = '(GMT -4 �ra)';
$lang['-3.5'] = '(GMT -3.5 �ra)';
$lang['-3'] = '(GMT -3 �ra)';
$lang['-2'] = '(GMT -2 �ra)';
$lang['-1'] = '(GMT -1 �ra)';
$lang['0'] = '(GMT 0)';
$lang['1'] = '(GMT +1 �ra)';
$lang['2'] = '(GMT +2 �ra)';
$lang['3'] = '(GMT +3 �ra)';
$lang['3.5'] = '(GMT +3.5 �ra)';
$lang['4'] = '(GMT +4 �ra)';
$lang['4.5'] = '(GMT +4.5 �ra)';
$lang['5'] = '(GMT +5 �ra)';
$lang['5.5'] = '(GMT +5.5 �ra)';
$lang['6'] = '(GMT +6 �ra)';
$lang['6.5'] = '(GMT +6.5 �ra)';
$lang['7'] = '(GMT +7 �ra)';
$lang['8'] = '(GMT +8 �ra)';
$lang['9'] = '(GMT +9 �ra)';
$lang['9.5'] = '(GMT +9.5 �ra)';
$lang['10'] = '(GMT +10 �ra)';
$lang['11'] = '(GMT +11 �ra)';
$lang['12'] = '(GMT +12 �ra)';
$lang['13'] = 'GMT + 13 �ra';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 �ra) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 �ra) Midway-sziget, Szamoa';
$lang['tz']['-10'] = '(GMT -10 �ra) Hawai';
$lang['tz']['-9'] = '(GMT -9 �ra) Alaszka';
$lang['tz']['-8'] = '(GMT -8 �ra) Csendes-�ce�ni id�, Tijuana';
$lang['tz']['-7'] = '(GMT -7 �ra) Arizona, Hegyi id�';
$lang['tz']['-6'] = '(GMT -6 �ra) Amerika k�z�pid�, K�z�p-Amerika, Mexik�v�ros';
$lang['tz']['-5'] = '(GMT -5 �ra) Bogota, Lima, Quito, Indiana, Keleti id�';
$lang['tz']['-4'] = '(GMT -4 �ra) Atlanti-�ce�ni id�, Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 �ra) �j-Founland';
$lang['tz']['-3'] = '(GMT -3 �ra) Braz�lia, Buenos Aires, Georgetown, Gr�nland';
$lang['tz']['-2'] = '(GMT -2 �ra) K�z�p-atlanti id�z�na';
$lang['tz']['-1'] = '(GMT -1 �ra) Azori-szigetek, Z�ld-foki-szigetek';
$lang['tz']['0'] = '(GMT 0) Greenwich, London, Dublin, Lisszabon';
$lang['tz']['1'] = '(GMT +1 �ra) Belr�d, Budapest, Ljubljana, Pozsony, Pr�ga';
$lang['tz']['2'] = '(GMT +2 �ra) Ath�n, Isztambul, Minszk, Helsinki';
$lang['tz']['3'] = '(GMT +3 �ra) Bagdad, Kuvait, Rij�d, Moszkva, Szentp�terv�r';
$lang['tz']['3.5'] = '(GMT +3.5 �ra) Teher�n';
$lang['tz']['4'] = '(GMT +3.5 �ra) Teher�n';
$lang['tz']['4.5'] = '(GMT +4.5 �ra) Kabul';
$lang['tz']['5'] = '(GMT +5 �ra) Iszl�mb�d, Karacsi, Taskent, Jekatyerinburg';
$lang['tz']['5.5'] = '(GMT +5.5 �ra) Chennai, Kalkutta, Mumbai, �j-Delhi';
$lang['tz']['6'] = '(GMT +6 �ra) Almaty, Novoszibirszk, Astana, Dhaka';
$lang['tz']['6.5'] = '(GMT +6.5 �ra) Rangun';
$lang['tz']['7'] = '(GMT +7 �ra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk';
$lang['tz']['8'] = '(GMT +8 �ra) Hongkong, Peking, Irkutszk, Ul�nb�tor, Perth';
$lang['tz']['9'] = '(GMT +9 �ra) Jakutszk, Oszkara, Szapporo, Toki�, Sz�ul';
$lang['tz']['9.5'] = '(GMT +9.5 �ra) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 �ra) Brisbane, Canberra, Melbourne, Sydney, Guam';
$lang['tz']['11'] = '(GMT +11 �ra) Magad�n, Salamon-szigetek, �j Kaled�nia';
$lang['tz']['12'] = '(GMT +12 �ra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka';
$lang['tz']['13'] = 'GMT + 13 �ra';

$lang['datetime']['Sunday'] = 'Vas�rnap';
$lang['datetime']['Monday'] = 'H�tf�';
$lang['datetime']['Tuesday'] = 'Kedd';
$lang['datetime']['Wednesday'] = 'Szerda';
$lang['datetime']['Thursday'] = 'Cs�t�rt�k';
$lang['datetime']['Friday'] = 'P�ntek';
$lang['datetime']['Saturday'] = 'Szombat';
$lang['datetime']['Sun'] = 'Vas';
$lang['datetime']['Mon'] = 'H�tf�';
$lang['datetime']['Tue'] = 'Kedd';
$lang['datetime']['Wed'] = 'Szerd';
$lang['datetime']['Thu'] = 'Cs�t';
$lang['datetime']['Fri'] = 'P�nt';
$lang['datetime']['Sat'] = 'Szomb';
$lang['datetime']['January'] = 'Janu�r';
$lang['datetime']['February'] = 'Febru�r';
$lang['datetime']['March'] = 'M�rcius';
$lang['datetime']['April'] = '�prilis';
$lang['datetime']['May'] = 'M�jus';
$lang['datetime']['June'] = 'J�nius';
$lang['datetime']['July'] = 'J�lius';
$lang['datetime']['August'] = 'Augusztus';
$lang['datetime']['September'] = 'Szeptember';
$lang['datetime']['October'] = 'Okt�ber';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'M�rc';
$lang['datetime']['Apr'] = '�pr';
$lang['datetime']['May'] = 'M�j';
$lang['datetime']['Jun'] = 'J�n';
$lang['datetime']['Jul'] = 'J�l';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Szept';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';
$lang['interval']['day'] = 'day';
$lang['interval']['days'] = 'days';
$lang['interval']['week'] = 'week';
$lang['interval']['weeks'] = 'weeks';
$lang['interval']['month'] = 'month';
$lang['interval']['months'] = 'months';
$lang['interval']['year'] = 'year';
$lang['interval']['years'] = 'years';
//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = 'Album';
$lang['Personal_Gallery_Of_User'] = 'Personal Gallery of %s';
//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Inform�ci�';
$lang['Critical_Information'] = 'Kritikus inform�ci�';

$lang['General_Error'] = '�ltal�nos hiba';
$lang['Critical_Error'] = 'Kritikus hiba';
$lang['An_error_occured'] = 'Hiba ad�dott';
$lang['A_critical_error'] = 'Kritikus hiba ad�dott';
// FLAGHACK-start
$lang['Country_Flag'] = 'Country Flag';
$lang['Select_Country'] = 'SELECT COUNTRY' ;
// FLAGHACK-end 
/*****[BEGIN]******************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/
$lang['Quick_reply_panel'] = 'Szuper gyors v�lasz m�d';
$lang['Quick_Reply'] = 'Gyors v�lasz';
$lang['Show_quick_reply'] = 'Gyors v�lasz �rlap';
$lang['sqr']['0'] = 'Nem';
$lang['sqr']['1'] = 'Igen';
$lang['sqr']['2'] = 'Utols� oldalon csak';
$lang['Quick_reply_mode'] = 'Gyors v�lasz m�d';
$lang['Quick_reply_mode_basic'] = 'Alap';
$lang['Quick_reply_mode_advanced'] = 'El�re l�p';
$lang['Show_hide_quick_reply_form'] = 'Bemutat�s/elrejt�s gyors v�lasz';
$lang['Open_quick_reply'] = 'Aut�mata gyors v�lasz';
/*****[END]********************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/

$lang['Admin_reauthenticate'] = 'Hogy adminisztr�lhass hiteles�csd magad.';

/*****[BEGIN]******************************************
 [ Base:    Recent Topics                      v1.2.4 ]
 ******************************************************/
$lang['Recent_topics'] = '<b>�j t�m�k</b>';
$lang['Recent_today'] = 'Ma';
$lang['Recent_yesterday'] = 'Tegnap';
$lang['Recent_last24'] = 'Az elmult 24 �r�ban';
$lang['Recent_lastweek'] = 'Mult h�ten';
$lang['Recent_lastXdays'] = 'Mult h�napban';
$lang['Recent_last'] = 'Utolj�ra';
$lang['Recent_days'] = 'Napok';
$lang['Recent_first'] = 'Ind�t�s napja';
$lang['Recent_first_poster'] = ' by %s';
$lang['Recent_select_mode'] = 'M�d kiv�laszt�sa:';
$lang['Recent_showing_posts'] = 'P�st�k mutat�sa:';
$lang['Recent_title_one'] = '<font size=4>%s</font> topic %s'; // %s = topics; %s = sort method
$lang['Recent_title_more'] = '<font size=4>%s</font> topics %s'; // %s = topics; %s = sort method
$lang['Recent_title_today'] = ' Mai nap';
$lang['Recent_title_yesterday'] = ' Tegnapi nap';
$lang['Recent_title_last24'] = ' Az elm�lt 24 �r�ban';
$lang['Recent_title_lastweek'] = 'Az elmult h�ten';
$lang['Recent_title_lastXdays'] = ' Az utols� napon'; // %s = days
$lang['Recent_no_topics'] = 'Nem tal�ltam t�m�t.';
$lang['Recent_wrong_mode'] = 'Rossz m�dot v�lasztott�l.';
$lang['Recent_click_return'] = 'Kattint�s az oldaladra.';
/*****[END]********************************************
 [ Base:    Recent Topics                      v1.2.4 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/
$lang['Topic_global_announcement']='<b>K�zlem�ny mindenkinek:</b>';
$lang['Post_global_announcement'] = 'K�zlem�ny mindenkinek';
/*****[END]********************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Select Expand BBcodes              v1.2.8 ]
 ******************************************************/
$lang['Select'] = "Kijel�l";
$lang['Expand'] = "Kinyit";
$lang['Contract'] = "Bez�r";
/*****[END]********************************************
 [ Mod:     Select Expand BBcodes              v1.2.8 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Cache phpBB version in ACP         v1.0.0 ]
 ******************************************************/
$lang['Version_check'] = '�j verzi� keres�se';
/*****[END]********************************************
 [ Base:    Cache phpBB version in ACP         v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Search Only Subject                 v0.9.1 ]
 ******************************************************/
$lang['Search_subject_only'] = 'Keres�s az �zenetek k�z�tt';
/*****[END]********************************************
 [ Mod:    Search Only Subject                 v0.9.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     View/Disable Avatars/Signatures    v1.1.2 ]
 ******************************************************/
$lang['Show_avatars'] = 'Avatar mutat�sa';
$lang['Show_signatures'] = 'Al��r�s';
/*****[END]********************************************
 [ Mod:     View/Disable Avatars/Signatures    v1.1.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Quick Search                    v2.1.1 RC ]
 ******************************************************/
$lang['Quick_search_for'] = 'Keres�s';
$lang['Quick_search_at'] = 'vagy';
// In this case, the %s displays the Site Name as defined in the ACP. e.g. phpBB.com Advanced Search
$lang['Forum_advanced_search'] = 'R�szletes keres�s';
/*****[END]********************************************
 [ Mod:     Quick Search                    v2.1.1 RC ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Signature Editor/Preview Deluxe    v1.0.0 ]
 ******************************************************/
$lang['sig_description'] = 'Al��r�s szerkeszt�se (<b></b>)';
$lang['sig_edit'] = 'Al��r�s szerkeszt�se';
$lang['sig_current'] = 'Al��r�s';
$lang['sig_none'] = 'Nincs al��r�s';
$lang['sig_save'] = 'Ment�s';
$lang['sig_save_message'] = 'Al��r�s ment�se k�sz !';
/*****[END]********************************************
 [ Mod:     Signature Editor/Preview Deluxe    v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Separate Announcements & Sticky   v2.0.0a ]
 ******************************************************/
$lang['Global_Announcements'] = 'K�zlem�ny mindenkinek';
$lang['Announcements'] = 'K�zlem�nyek';
$lang['Sticky_Topics'] = 'K�nos t�m�k';
/*****[END]********************************************
 [ Mod:     Separate Announcements & Sticky   v2.0.0a ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Staff Site                         v2.0.3 ]
 ******************************************************/
$lang['Staff'] = 'Mukat�rs';
$lang['Forums'] = 'F�rumok';
$lang['Mod'] = 'Moder�tor';
$lang['Admin'] = 'Adminisztr�tor';
$lang['Super'] = 'Szuper Moder�tor';
$lang['Junior'] = 'Junior Admin';
$lang['Period'] = 'Milyen <b>%d</b> Nap'; // %d = days
$lang['Messenger'] = 'H�rn�k';
/*****[END]********************************************
 [ Mod:     Staff Site                         v2.0.3 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Better Session Handling             v1.0.0 ]
 ******************************************************/
$lang['BSH_Viewing_Topic'] = 'T�ma n�z�se: %t%';
$lang['BSH_Viewing_Post'] = 'Post�k n�z�se';
$lang['BSH_Viewing_Profile'] = 'N�zet %u%\'s Profil';
$lang['BSH_Viewing_Groups'] = 'Csoport n�zet';
$lang['BSH_Viewing_Forums'] = 'F�rum n�zet: %f%';
$lang['BSH_Index'] = 'Index n�zet';
$lang['BSH_Searching_Forums'] = 'Keres�s a f�rumba';
$lang['BSH_Viewing_Onlinelist'] = 'A h�l�n lista megtekint�se';
$lang['BSH_Viewing_Messages'] = 'Priv�t �zenetek megtekint�se';
$lang['BSH_Viewing_Memberlist'] = 'Fehaszn�l�k list�ja';
$lang['BSH_Login'] = 'Napl�z�s bekapcsol';
$lang['BSH_Logout'] = 'Napl�z�s kikapcsol';
$lang['BSH_Editing_Profile'] = 'Profil szerkeszt�se';
$lang['BSH_Viewing_ACP'] = '%sMegn�z�s ACP%s';
$lang['BSH_Moderating_Forum'] = 'F�rum moder�l�sa';
$lang['BSH_Viewing_FAQ'] = 'GYik megtekint�se';
$lang['BSH_Viewing_Category'] = 'Kateg�ri�k megtekint�se';

#==== Start: Language Integrations
$lang['BSH_Viewing_Tree'] = 'F�rum megtekint�se';
$lang['BSH_Viewing_Spiders'] = '%sKeres�k napl�ja%s';
$lang['BSH_Viewing_BACP'] = '%sVegyes ACP%s';
#==== End: Language Integrations
/*****[END]********************************************
 [ Mod:    Better Session Handling             v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Disable Board Admin Override        v0.1.1 ]
 ******************************************************/
$lang['Board_Currently_Disabled'] = 'Pillanatnyilag z�rva';
/*****[END]********************************************
 [ Mod:    Disable Board Admin Override        v0.1.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Memberlist Find User                v1.0.0 ]
 ******************************************************/
$lang['Look_up_User'] = 'Tag megjelenit�se';
/*****[END]********************************************
 [ Mod:    Memberlist Find User                v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Theme Simplifications              v1.0.0 ]
 ******************************************************/
$lang['Mini_Index'] = 'F�rum Kezd�lap';
$lang['Rules'] = 'Szab�lyzat';
$lang['Login_Logout'] = 'Bel�p�s / Kijelentkez�s';
/*****[END]********************************************
 [ Mod:     Theme Simplifications              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Welcome PM                         v2.0.0 ]
 ******************************************************/
$lang['Welcome_PM'] = '�dv�zl� priv�t �zenet';
$lang['Welcome_PM_Set'] = '�dv�zl� priv�t �zenet aktiv�lva';
$lang['Welcome_PM_Admin'] = '�dv�zl� �zenet';
/*****[END]********************************************
 [ Mod:     Welcome PM                         v2.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Limit smilies per post             v1.0.2 ]
 ******************************************************/
$lang['Max_smilies_per_post'] = 'Egyszerre csak maximum %s smilies szerepelhet.<br />You have %s smilies too much in use.';
/*****[END]********************************************
 [ Mod:     Limit smilies per post             v1.0.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     YA Merge                           v1.0.0 ]
 ******************************************************/
 $lang['Real_Name'] = 'Val�s n�v:';
 $lang['Newsletter'] = 'H�rlev�lk�ld�se e-mail-be?';
 $lang['Extra_Info'] = 'Extra Info:';
 $lang['Error_Check_Num'] = "�ev�nytelen sz�m<br /><br />�jra kell regisztr�lnod<br /><br />kattints <a href=\"%s\">ide</a> �s regisztr�lj";
 $lang['Extra_Info'] = 'Extra Info';
/*****[END]********************************************
 [ Mod:     YA Merge                           v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/
$lang['Move_merge_message'] = 'Eggyes�t�s: <b>%s</b> by <b>%s</b><br />From Topic <b>%s</b> (<b>%s</b>)';
$lang['Move_move_message'] = 'Mozgat: <b>%s</b> by <b>%s</b><br />From <b>%s</b> to <b>%s</b>';
$lang['Move_lock_message'] = 'Bez�r: <b>%s</b> by <b>%s</b>';
$lang['Move_edit_message'] = 'Szerkesz: <b>%s</b> by <b>%s</b>';
$lang['Move_unlock_message'] = 'Kinyit: <b>%s</b> by <b>%s</b>';
$lang['Move_split_message'] = 'Sz�tv�laszt: <b>%s</b> a <b>%s</b><br />T�m�b�l <b>%s</b> (<b>%s</b>)';
$lang['Close_window'] = 'Uj ablak nyit�sa';
$lang['Rules_title'] = 'Tev�kenys�g : %s';
$lang['Locking_topic'] = 'T�ma bez�r�s';
$lang['Unlocking_topic'] = 'T�m�t megnyit';
$lang['Spliting_topic'] = 'T�ma oszt�sa';
$lang['Moving_topic'] = 'T�ma mozgat�sa';
$lang['Deleting_topic'] = 'T�ma t�rl�se';
$lang['Editing_topic'] = 'T�ma szerkeszt�se';
$lang['Lock_Explication'] = 'Amikor a moder�tor/Administrator t�m�t lez�r, \'Nem lehets�ges sima felhaszn�l�k�nt. De Moderatorok/Administratorok can still continue to post.';
$lang['Unlock_Explication'] = 'A Moderator/Administr�tor Bez�rhat �s nyithat t�m�t. Ez lehetov� fog tenni mindegyik felhaszn�l�t tartani feladnia a sz�lban.';
$lang['Split_Explication'] = 'V�g�s egy t�ma amelyik rendelkezik sok oldalak adnak te a k�pess�get tart�zkod�snak a t�m�id jobban szervezett.';
$lang['Move_Explication'] = 'Ha kiv�lasztod a t�m�t k�pesleszel azt fel �s leffel� mozgatni �s tudsz benne uj t�m�t l�tre hoznia f�rumban.';
$lang['Delete_Explication'] = ' A Moderator/Adminisztr�tor t�r�lte a topikot, Nemlehet helyre�ll�tani <br /><b>de Ovatosan ezzel a funkci�val!</b>';
$lang['Edit_Explication'] = '�tszerkesztheted amit egy felhasz�l� �rt.';
$lang['No_action_specified'] = 'Nincs kiv�laszt�s';
/*****[END]********************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     XData                              v0.1.1 ]
 ******************************************************/
$lang['XData_too_long'] = ' %s t�l hossz�.';
$lang['XData_invalid'] = 'A be�rt adatok %s nem megfelel�ek.';
/*****[END]********************************************
 [ Mod:     XData                              v0.1.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     At a Glance Options                v1.0.0 ]
 ******************************************************/
$lang['show_glance_option']['1'] = 'Mind';
$lang['show_glance_option']['0'] = 'Egyik sem';
$lang['show_glance_option']['2'] = 'Tartalomjegyz�kbe vesz';
$lang['show_glance_option']['3'] = 'Egyetlen f�rum';
$lang['show_glance_option']['4'] = 'Egyetlen t�ma';
$lang['show_glance_option']['5'] = 'Trtalom �s t�ma';
$lang['show_glance_option']['6'] = 'Tartalom �s f�rum';
$lang['show_glance_option']['7'] = 'F�rum �s t�ma';
$lang['glance_show'] = 'Bemutat�s (Friss T�ma)<br />';
/*****[END]********************************************
 [ Mod:     At a Glance Options                v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Extended Quote Tag                 v1.0.0 ]
 ******************************************************/
$lang['View_post'] = '�zenetet n�z';
$lang['Post_review'] = '�zenetet �ttekint�s';
$lang['View_next_post'] = 'K�vetkez� �zenetet n�z';
$lang['View_previous_post'] = 'El�z� �zenetet n�z';
$lang['No_newer_posts'] = 'Nincs �j �zenet ebben a f�rumban';
$lang['No_older_posts'] = 'Nincs r�gebbi �zenet ebben a f�rumban';
/*****[END]********************************************
 [ Mod:     Extended Quote Tag                 v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     At a Glance Cement                 v1.0.0 ]
 ******************************************************/
$lang['topic_glance_priority'] = '�j t�m�k bemutat�sa';
/*****[END]********************************************
 [ Mod:     At a Glance Cement                 v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Online/Offline/Hidden              v2.2.6 ]
 ******************************************************/
$lang['Online'] = 'Bejelentkezve';
$lang['Offline'] = 'Kijelentkezve';
$lang['Hidden'] = 'Titkos';
$lang['is_online'] = 'Ki van a h�l�n?';
$lang['is_offline'] = '%s H�ny tag van?';
$lang['is_hidden'] = '%s H�ny rejtett tag';
$lang['Online_status'] = 'Helyzet';
/*****[END]********************************************
 [ Mod:     Online/Offline/Hidden              v2.2.6 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/
$lang['Images_Allowed_For_Registered_Only'] = 'K�rlek l�pj be, hogy megn�zd a k�pet.';
$lang['Links_Allowed_For_Registered_Only'] = 'K�rlek l�pj be, hogy n�zd a linket';
$lang['Emails_Allowed_For_Registered_Only'] = 'K�rlek l�pj be, hogy olvasd a levelet';
$lang['Get_Registered'] = 'Itt %sregisztr�lj%s vagy ';
$lang['Image_Blocked'] = 'V�lasszon a block nak egy k�pet.<br />%sEdit Your Profile%s';
$lang['Enter_Forum'] = 'L�pjen be a f�rumba!';
/*****[END]********************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Report Posts                       v1.2.3 ]
 ******************************************************/
$lang['Post_reports_none_cp'] = '';
$lang['Post_reports_one_cp'] = 'Elk�ld�tt %s Megn�zett levelek';
$lang['Post_reports_many_cp'] = '�rkezett %s Megn�zett levelek';

$lang['All'] = 'Mind';
$lang['Display'] = 'Csak mutat�s';
$lang['Report_post'] = 'Jelent�s k�ld�se';

$lang['Reporter'] = 'Jelent�s';
$lang['Status'] = 'St�tusz';
$lang['Select_one'] = 'Kiv�lasztok egyet';

$lang['Opt_in'] = 'V�laszt e-mail-ben kapjuk meg amikor egy jelent�st benyujtunk';
$lang['Opt_out'] = 'V�laszt teh�t e-mail-ben kapjuk meg amikor egy jelent�st benyujtunk';

$lang['Post_reported'] = 'Ak�zz�adott �zenet sikeres.';
$lang['Close_success'] = 'Jelent�st nyitott/z�rt sikeresen.';
$lang['Opt_success'] = 'V�lasz ki/be sikeresen.';
$lang['Delete_success'] = 'Jelent�st sikeresen t�r�lted.';
$lang['Click_return_reports'] = 'Kattints a visszat�r�shez a gombra hogy visszat�rhess a be�ll�t�sokba.';
$lang['Report_email'] = ' Lev�l k�ld�se';

$lang['Post_already_reported'] = 'Ezt a post�t m�r olvastad.';

$lang['Report_not_selected'] = '�zeneteket\v�lasztottad ki.';

$lang['Comments'] = 'Megjegyz�s';
$lang['Last_action_comments'] = 'Moder�tori megjegyz�sek';
$lang['Last_action_comments_explain'] = 'K�rlek �rj magyar�zatot';
$lang['Comments_explain'] = 'K�rlek irj megjegyz�st.';

$lang['Action'] = 'M�k�d�s';
$lang['Report_comment'] = 'Magyar�zat a tettedet illet�en';
$lang['Previous_comments'] = 'El�z� magyar�zatok';

$lang['Last_action_checkbox'] = 'This action was done through the checkbox and drop down menu.';

$lang['Opened_by_user_on_date'] = 'Nyitva %s on %s';
$lang['Closed_by_user_on_date'] = 'Z�rva %s on %s';
$lang['Opened'] = 'Nyitva';
$lang['Closed'] = 'Z�rva';
$lang['Open'] = 'Nyitott';
$lang['Close'] = 'Z�rt';

$lang['Non_existent_posts'] = 'T�r�lve %s az �zenet.';

$lang['Theme'] = 'T�ma';

/*****[END]********************************************
 [ Mod:     Report Posts                       v1.2.3 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Show Groups                        v1.0.1 ]
 ******************************************************/
$lang['Groups'] = 'Felhaszn�l� ki';
/*****[END]********************************************
 [ Mod:     Show Groups                        v1.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Hide Images                        v1.0.0 ]
 ******************************************************/
$lang['user_hide_images'] = 'K�pek elrejt�se a f�rumban';
/*****[END]********************************************
 [ Mod:     Hide Images                        v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Advanced BBCode Box               v5.0.0a ]
 ******************************************************/
$lang['BBCode_box_hidden'] = 'Elrejt';
$lang['BBcode_box_view'] = 'Kattint�sok tartalma';
$lang['BBcode_box_hide'] = 'Kattints az elrejt�shez';
/*****[END]********************************************
 [ Mod:     Advanced BBCode Box               v5.0.0a ]
 ******************************************************/

/*--ARCADE MOD--*/
$lang['lib_arcade'] = 'Arcade' ; 
$lang['statuser'] = 'felhaszn�l� Statisztika' ;

$lang['Login_attempts_exceeded'] = 'A maxim�lis sz�ma %s login pr�b�lkoz�sokat fel�lm�ltak. Figyelembe nem vagy v�ve fel� login a k�vetkezo %s percnyi pontoss�ggal m�r.';
$lang['Please_remove_install_contrib'] = 'K�rem gondoskodnak mindketto a telep�t�set/ �s contrib/alk�nyvt�rakat t�r�lnek';

/*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_title'] = 'A H�t Al�ir�sa';
/*****[END]********************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/

// Start add - Trophee
$lang['Winner']= 'Arcade Gy�ztes: ';
//End add - Trophee 

/*****[BEGIN]******************************************
 [ Mod:     Medal System                       v0.4.5 ]
 ******************************************************/
$lang['Medal_Control_Panel'] = 'Medal Control Panel';
$lang['Medals'] = 'Medals';
$lang['View_More'] = 'View more...';
$lang['Medal_amount'] = 'Amount: ';
$lang['Medal_Information'] = 'Medal Information';
$lang['Medal_name'] = 'Medal Name';
$lang['Medal_description'] = 'Medal Description';
$lang['Medal_image'] = 'Medal Image';
$lang['Medal_details'] = 'Award Details';
$lang['Medal_reason'] = 'Awarded Reason';
$lang['Medal_reason_explain'] = 'You can give a reason to why this medal this awarded to this user at this time.<br />This is not compulsory';
$lang['Medal_no_reason'] = '<i>No Reason was given</i>';
$lang['Medal_time'] = 'Awarded Time';
$lang['Medal_moderator'] = 'Medal Moderator';
$lang['No_medal_mod'] = 'No Medal Moderator';
$lang['Medal_userlist'] = 'User Lists';
$lang['Medal_Members'] = 'Members having this medal';
$lang['Medal_Members_explain'] = 'Click on the username to edit award reason(s)';
$lang['No_medal_members'] = 'No member has this medal';
$lang['No_medals_exist'] = 'No Medals Exist';
$lang['Medal_not_exist'] = 'That medal does not exist';
$lang['No_username_specified'] = 'No username specified';
$lang['No_medal_id_specified'] = 'No Medals specified';
$lang['Medal_user_username'] = 'Award one or more specific users with this Medal';
$lang['Medal_unmedal_username'] = 'Remove this Medal from one or more specific users';
$lang['Medal_unmedal_username_explain'] = 'You can remove multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser';
$lang['Medal_added'] = 'You have been awarded this medal.'; 
$lang['Medal_update_sucessful'] = 'User and Medal information has been updated';
$lang['Could_not_anonymous_user'] = 'You cannot give Anonymous a medal.';
$lang['Not_medal_moderator'] = 'You are not a moderator of this medal';
$lang['Link_to_cp'] = 'Medal Control Panel';
$lang['Click_return_medal'] = 'Click %sHere%s to return to medal information';
$lang['No_medal'] = 'No Medal Available';
/*****[END]********************************************
 [ Mod:     Medal System                       v0.4.5 ]
 ******************************************************/



// XS News
$lang['xs_latest_news'] = 'Latest News';
$lang['xs_no_news'] = 'There are no news items.';
$lang['xs_news_version'] = 'XS News Version: %s';
$lang['xs_news_ticker_feed'] = 'XML Feed Source: %s';
$lang['xs_no_ticker'] = 'There are no News Tickers defined, please visit the ACP to create one.';
$lang['xs_news_ticker_title'] = 'News Ticker';
$lang['xs_news_tickers_title'] = 'News Tickers';
$lang['xs_news_item_title'] = 'News Item';
$lang['xs_news_items_title'] = 'News Items';

// Sigphpbb
$lang['SigphpBB_Users'] = ' Users';
$lang['SigphpBB_Topics'] = ' Topics';
$lang['SigphpBB_Posts'] = ' Posts';
$lang['SigphpBB_Newest'] = 'Newest User';
$lang['SigphpBB_Attachments'] = ' Attachments';
$lang['SigphpBB_Chat'] = 'Chatter';
$lang['SigphpBB_Chatters'] = 'Chatters';
$lang['SigphpBB_Logged'] = ' Logged In and ';
$lang['SigphpBB_guest'] = ' Guest';
$lang['SigphpBB_guests'] = ' Guests';
$lang['SigphpBB_Catagories'] = ' Catagories';
$lang['SigphpBB_In'] = ' in ';
/*****[BEGIN]******************************************
 [ Mod:     Users Reputations Systems          v1.0.0 ]
 ******************************************************/
$lang['Reputation'] = 'H�rn�v';
$lang['No_votes'] = 'Nincs szavaz�s';
$lang['Votes'] = 'Szavaz';
/*****[END]********************************************
 [ Mod:     Users Reputations System           v1.0.0 ]
 ******************************************************/
 // ChatBox Mod
$lang['How_Many_Chatters'] = 'Jelen Vannak <B>%d</B> tag(s) cseveg�sen most';
$lang['Who_Are_Chatting' ] = '<B>%s</B>';
$lang['Click_to_join_chat'] = 'Kattints ide cseveg�s';
$lang['ChatBox'] = 'cseveg� Box';
$lang['log_out_chat'] = 'Sikeresen bel�pt�l a cseveg�be ';
$lang['Send'] = 'K�ld�tt';
$lang['Login_to_join_chat'] = 'Bel�p�s a cseveg�be'; 

$lang['Event_Start'] = 'Sz�l� vagy Kezdo D�tum';
$lang['Event_End'] = 'V�g D�tum �s Idok�z';
$lang['Calendar_advanced_form'] = 'el�mozd�tott';
$lang['Calendar_repeat_forever'] = 'ism�telnek �r�kre';
$lang['Clear_Date'] = 'Tiszta D�tum';
$lang['Date_not_specified'] = 'Kiv�laszt�s -->';
$lang['Select_start_date'] = 'K�rem Kiv�lasztanak egy Kezdo D�tumot'; // must escape ' as \\\' for javascript
$lang['Calendar_event_title'] = 'Napt�ri Esem�ny';
$lang['View_calendar'] = 'Napt�r';
$lang['View_previous_month'] = 'N�znek Elozo H�napot';
$lang['View_next_month'] = 'N�zet J�vo h�nap';
$lang['View_previous_year'] = 'N�zet Eloz� �v';
$lang['View_next_year'] = 'N�zet K�vetkez� �v';
$lang['Calendar_interval'] = 'Idok�z';
$lang['Calendar_repeat'] = 'Ism�telnek';
$lang['Calendar_start_monday'] = false;
$lang['Date_selector'] = 'D�tum V�laszt�';   // title/header for Date Selector Window

// Avatar Select on Register MOD
$lang['NO_AVATAR'] = 'NO AVATAR';
$lang['Avatar_register_explain'] = 'F�gg� be�ll�t�s, felt�ltesz vagy v�lasztasz avatart, a sikeres bejelentkez�s ut�n.';

// Points System MOD
$lang['Points_cp'] = 'Points Control Panel';
$lang['Points_sys']	= 'Points System';
$lang['Points_donation'] = 'Points Donation';
$lang['Points_method'] = 'Method';
$lang['Points_donate'] = '%sDonate%s';
$lang['Points_add_subtract'] = 'Add or subtract %s';
$lang['Points_amount'] = 'Amount';
$lang['Points_give_take'] = 'Amount of %s to give or take';
$lang['Points_give'] = 'Amount of %s to give';
$lang['Add'] = 'Add';
$lang['Subtract'] = 'Subtract';
$lang['Points_donate_to'] = 'The person you want to donate %s to';
$lang['Points_no_username']	= 'No username entered.';
$lang['Points_not_admin'] = 'You are not allowed to admin the points system.';
$lang['Points_cant_take'] = 'You can\'t take away that amount of %s from this user.'; //*
$lang['Points_thanks_donation']	= 'Thanks for your donation.';
$lang['Click_return_points_donate']	= 'Click %sHere%s to return to Points Donation';
$lang['Points_cant_donate']	= 'You can\'t donate that amount of %s to this user.';
$lang['Points_cant_donate_self'] = 'You can\'t donate %s to yourself.';
$lang['Points_user_donation_off'] = 'User donation is not enabled.';
$lang['Click_return_pointscp'] = 'Click %sHere%s to return to the Points Control Panel';
$lang['Points_user_updated'] = 'The user\'s %s has been updated successfully.';
$lang['Points_mass_edit'] = 'Mass Edit Usernames';
$lang['Points_mass_edit_explain'] = 'Enter one username per line.';
$lang['Points_notify'] = 'Always notify me of %s donations';
$lang['Points_notify_explain'] = 'Sends an e-mail when someone donates %s to you';
$lang['Points_enter_some_donate'] = 'Enter some %s to donate.';

//
// That's all, Folks!
// -------------------------------------------------

/*****[BEGIN]******************************************
 [ Mod:    Simple Subforums                    v1.0.1 ]
 ******************************************************/
$lang['Subforums'] = 'F�rumok';
/*****[END]********************************************
 [ Mod:    Simple Subforums                    v1.0.1 ]
 ******************************************************/
/*****[BEGIN]*****************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
$lang['Sponsor'] = 'T�mogat�k';
/*****[END]*******************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Gender                              v1.2.6 ]
 ******************************************************/
$lang['Gender'] = 'Nemed';//used in users profile to display witch gender he/she is 
$lang['Male'] = 'F�rfi'; 
$lang['Female']='N�'; 
$lang['No_gender_specify'] = 'Egyik sem, Nem meghat�rozott '; 
/*****[END]********************************************
 [ Mod:    Gender                              v1.2.6 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
$lang['Birthday_range'] = 'Sz�let�snapok korokat %d �s %d �vek, bez�r�lag.';
$lang['No_birthdays'] = 'Nincs sz�let�snap ma';
$lang['Congratulations'] = 'Gratul�ci�k a: <b>%s</b>';
$lang['Upcoming_birthdays'] = 'Felhaszn�l�k egy sz�let�snapja a k�vetkez�n bel�l %d napok: <b>%s</b>';
$lang['No_upcoming'] = 'Nincs felhaszn�l�knak sz�let�snapja a k�vetkez� %d napban';
$lang['Birthday'] = 'Sz�let�si idopont';
$lang['Month'] = 'H�nap';
$lang['Day'] = 'Nap';
$lang['Year'] = '�v';
$lang['Clear'] = 'Tiszt�tanak';
$lang['Year_Optional'] = '�v <i>(V�laszthat�)</i>';
$lang['Optional'] = '<i>(V�laszthat�)</i>';
$lang['Default_Month'] = '[ Kiv�lasztanak egy H�napot ]';
$lang['Default_Day'] = 'dd';
$lang['Default_Year'] = 'yyyy';
$lang['Birthday_invalid'] = 'Meghat�roznak egy �rv�nyes Sz�let�snapot.';
$lang['Todays_Birthdays'] = 'Mai Sz�let�snapok';
$lang['View_Birthdays'] = 'Boldog sz�let�snapot!';
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/ 
/*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_title'] = 'A H�t al��r�sa';
/*****[END]********************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
// Welcome Panel On Index MOD - START
$lang['Welcome_user'] = 'Szia %s!';
$lang['Welcome_normal_user'] = 'tag'; 
$lang['Welcome_user_info'] = 'Te %s vagy az <b>%s</b>';
$lang['Welcome_guest_info'] = 'Mint te nem regisztr�lt, n�h�ny tulajdons�g �rv�nytelen.';
$lang['Welcome_register'] = '%sKattints ide%s ha akarsz regisztr�lni <b>%s</b>';

$lang['Welcome_since_last_visit'] = 'Vannak: ';

$lang['Welcome_new_posts'] = '%s<b>%d</b>%s �j �zenetek';
$lang['Welcome_one_new_post'] = '%s<b>%d</b>%s �j �zenet';
$lang['Welcome_no_new_posts'] = '<b>No</b> �j �zenetek';

$lang['Welcome_new_topics'] = '%s<b>%d</b>%s �j t�m�k';
$lang['Welcome_one_new_topic'] = '%s<b>%d</b>%s �j t�ma';
$lang['Welcome_no_new_topics'] = '<b>No</b> �j t�m�k';

$lang['Welcome_new_pms'] = '%s<b>%d</b>%s �j �zenetek';
$lang['Welcome_one_new_pm'] = '%s<b>%d</b>%s �j �zenet';
$lang['Welcome_no_new_pms'] = '<b>No</b> �j �zenetek';

$lang['Welcome_user_posts'] = ' n�l, �s �rt�l %s<b>%d</b>%s cikket.';
$lang['Welcome_user_one_post'] = ' �s �rt�l %s<b>%d</b>%s cikket.';
$lang['Welcome_user_no_posts'] = ' �s nem �rt�l <b>cikket</b>.';

$lang['Welcome_suggested_topics'] = 'Az Oldal  <b>%s</b> megh�v t�ged olvasni ezt a t�m�t:';
$lang['Welcome_no_suggested_topic'] = 'GYIK (Gyakran feltett k�rd�sek)';
// Welcome Panel On Index MOD - END

// Start add - myCalendar MOD
$lang['DATE_SQL_FORMAT'] = '%M %e, %Y'; // This should be changed to the default date format for SQL for your language
$lang['DATE_INPUT_FORMAT'] = 'd/m/y'; // Requires 'd', 'm', and 'y' and a punctuation delimiter, order can change

$lang['interval']['day'] = 'nap';
$lang['interval']['days'] = 'napok';
$lang['interval']['week'] = 'h�t';
$lang['interval']['weeks'] = 'hetek';
$lang['interval']['month'] = 'h�nap';
$lang['interval']['months'] = 'h�napok';
$lang['interval']['year'] = '�v';
$lang['interval']['years'] = '�vek';

//
// MOD: Add cpanel Link
//
$lang['phpmyadmin'] = 'phpMyAdmin';
//
// MOD: -END-
//
 
/*****[BEGIN]******************************************
 [ Mod:     AlbumMod                           v2.0.54]
 ******************************************************/
$lang['Album'] = 'K�pt�r';
$lang['Clear_Cache'] = 'Gyorsit�t�r t�rl�se';
$lang['Personal_Galleries'] = 'Szem�lyes K�pt�r';
$lang['Personal_Gallery_Of_User'] = 'Egy�ni Gal�ri�ja %s';
/*****[END]********************************************
 [ Mod:     AlbumMod                           v2.0.54]
 ******************************************************/
  
 // sudoku Mod
$lang['Sudoku'] = 'Sudoku';
// End sudoku Mod
// Lottery Variables
$lang['lottery_second'] = 'Second';
$lang['lottery_seconds'] = 'Seconds';
$lang['lottery_minute'] = 'Minute';
$lang['lottery_minutes'] = 'Minutes';
$lang['lottery_hour'] = 'Hour';
$lang['lottery_hours'] = 'Hours';
$lang['lottery_day'] = 'Day';
$lang['lottery_days'] = 'Days';
$lang['lottery_current_history'] = 'Current History';
$lang['lottery_no_history'] = 'There is currently no history recorded!';
$lang['lottery_history_disabled'] = 'Lottery history is disabled on these forums!';
$lang['lottery_ticket_bought'] = 'Your ticket in the %s has been successfully purchased.';
$lang['lottery_tickets_bought'] = 'Your %s tickets in the %s have been successfully purchased.';
$lang['lottery_purchased_ticket'] = ' to purchase a ticket!';
$lang['lottery_purchased_tickets'] = ' to purchase %s tickets!';
$lang['lottery_purchased_ne'] = 'You do not have enough ';
$lang['lottery_too_many_tickets'] = 'You have already purchased the maximum amount of tickets allowed in this lottery! Please wait until the next draw.';
$lang['lottery_information'] = 'Information';
$lang['lottery_actions'] = 'Lottery Actions';
$lang['lottery_disabled'] = 'The lottery is currently turned off!<br /><br />Try again later.';
$lang['lottery_ID'] = 'ID';
$lang['lottery_winner'] = 'Winner';
$lang['lottery_amount_won'] = 'Amount Won';
$lang['lottery_time_won'] = 'Time Won';
$lang['lottery_total_history'] = 'There are a total of %s lottery history entries.';
$lang['lottery_history'] = 'History';
$lang['lottery_tickets_owned'] = 'Tickets Owned';
$lang['lottery_ticket_cost'] = 'Ticket Cost';
$lang['lottery_base_pool'] = 'Base Prize Pool';
$lang['lottery_current_entries'] = 'Current Entries';
$lang['lottery_total_pool'] = 'Total Prize Pool';
$lang['lottery_item_draw'] = 'Items in Draw';
$lang['lottery_time_draw'] = 'Time Until Drawn';
$lang['lottery_last_winner'] = 'Last Winner';
$lang['lottery_buy_ticket'] = 'Buy Ticket';
$lang['lottery_buy_tickets'] = 'Buy Tickets';
$lang['lottery_view_history'] = 'View Lottery History';
$lang['lottery_view_phistory'] = 'View Personal History';
$lang['lottery'] = 'Lottery';

// Lottery Error Variables
$lang['lottery_error_updating'] = 'Error updating %s table!';
$lang['lottery_error_deleting'] = 'Error deleting from %s table!';
$lang['lottery_error_selecting'] = 'Error getting information from %s table!';
$lang['lottery_error_inserting'] = 'Error inserting into %s table!';
$lang['lottery_error_variable'] = 'Could not read %s variable!';
$lang['lottery_invalid_command'] = 'That is not a valid command!';
$lang['lottery_no_history_type'] = 'No history type selected!';

$lang['Slot'] = 'Slot Machine';
$lang['VPoker'] = 'Video Poker';
$lang['VCasino'] = 'Virtual Casino';
$lang['BJ'] = 'Blackjack';
$lang['Keno'] = 'Keno';
//
// Anfang: DlMod
//
$lang['Dl_klicks'] = "Kattint�s";
$lang['Downloads'] = "Let�lt�sek";
$lang['Dl_download'] = "Let�lt�s";
$lang['Traffic'] = "Forgalom";
$lang['Dl_file_size'] = "M�ret";
$lang['Dl_file_name'] = "F�jl";
$lang['Dl_file_description'] = "Le�r�s";
$lang['Dl_account'] = "Account";
$lang['Dl_free'] = "Ingyenes Let�lt�s";
$lang['Dl_detail'] = "R�szletek";
$lang['Dl_info'] = "Info";
$lang['Dl_i'] = "i";
$lang['Dl_name'] = "Name";
$lang['Dl_not_availible'] = "not availible";
$lang['Dl_green_explain'] = "Let�lt�s! Nincs levon�s a felhaszn�l�i fi�kb�l.";
$lang['Dl_red_explain'] = "Nincs el�g forgalom.";
$lang['Dl_yellow_explain'] = "Let�lt�s! Forgalom levon�sa felhaszn�l�i fi�kb�l.";
$lang['Dl_grey_explain'] = "Let�lt�s! K�lso forr�s. Nincs levon�s a felhaszn�l�i fi�kb�l.";
//
// Ende: DlMod
//

// Top10 users website mod
$lang['top10'] = 'Top 10 of users website';
$lang['hits'] = 'Hits:';

//-- mod : Paypal Link in Profile ------------------------------------------------------------//-- add
$lang['Donate']			= 'Aj�nd�k';
$lang['Donate_explain']	= 'Be�rnak egy oldalad linket az adom�nynak.';
//-- fin mod : Paypal Link in Profile --------------------------------------------------------

?>