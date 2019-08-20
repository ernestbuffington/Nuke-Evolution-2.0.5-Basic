<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/** 
*
* attachment mod main [English]
*
* @package attachment_mod
* @version $Id: lang_main_attach.php,v 1.1 2005/11/05 10:25:02 acydburn Exp $
* @copyright (c) 2002 Meik Sievertsen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
    $lang = array();
}

//
// Attachment Mod Main Language Variables

// Auth Related Entries
$lang['Rules_attach_can'] = '<b>Mell�kelhetsz</b> f�jlokat a f�rumban';
$lang['Rules_attach_cannot'] = '<b>Nem</b> mell�kelhetsz f�jlokat a f�rumban';
$lang['Rules_download_can'] = '<b>Let�lthetsz</b> f�jlokat a f�rumban';
$lang['Rules_download_cannot'] = '<b>Nem</b> t�lthetsz le f�jlokat a f�rumban';
$lang['Sorry_auth_view_attach'] = 'Nincs jogosults�god megn�zni, vagy let�lteni ezt a mell�kletet';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Le�r�s'; // used in Administration Panel too...
$lang['Downloaded'] = 'Let�ltve';
$lang['Download'] = 'Let�lt�s'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'F�jlm�ret';
$lang['Viewed'] = 'Megtekintve';
$lang['Download_number'] = '%d alkalommal'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Ezt a kiterjeszt�st \'%s\' egy admin deaktiv�lta, ez�rt a mell�klet nem fog megjelenni.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Csatol�s vez�rl�pult';
$lang['Attach_posting_cp_explain'] = 'Ha a Mell�klet hozz�ad�s�ra kattintasz, egy ablakot fogsz l�tni a csatol�shoz.<br />Ha az Elk�ld�tt mell�kletekre, egy list�t l�tsz a m�r csatolt f�jlokr�l, melyeket szerkeszthetsz is.<br />Ha le akarod cser�lni (�j v�ltozat felt�lt�se) a mell�kletet, kattints az ut�bbi linkre. Ebben az esetben az �j v�ltozat felt�lt�se gombra kattints, ne a Mell�klet hozz�ad�s�ra.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Mell�klet hozz�ad�sa';
$lang['Add_attachment_title'] = 'Mell�klet hozz�ad�sa';
$lang['Add_attachment_explain'] = 'Ha nem akarsz f�jlt mell�kelni, hagyd a mez�ket �resen';
$lang['File_name'] = 'F�jln�v';
$lang['File_comment'] = 'Le�r�s';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Elk�ld�tt mell�kletek';
$lang['Options'] = 'Lehet�s�gek';
$lang['Update_comment'] = 'Le�r�s friss�t�se';
$lang['Delete_attachments'] = 'Mell�kletek t�rl�se';
$lang['Delete_attachment'] = 'Mell�klet t�rl�se';
$lang['Delete_thumbnail'] = 'Ikon t�rl�se';
$lang['Upload_new_version'] = '�j v�ltozat felt�lt�se';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s nem megfelel� f�jln�v'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'A mell�klet t�l nagy.<br />A PHP-ben enged�lyezett linitet nem l�pheted t�l.<br />A Mell�klet Mod-al sem tudsz nagyobb f�jlt felt�lteni, mint ami a php.ini-ben meg van adva.';
$lang['Attachment_php_size_overrun'] = 'A mell�klet t�l nagy.<br />Felt�lthet� maxim�lis m�ret: %d MB.<br />Ez az �rt�k a php.ini-ben meg van adva, �s a Mell�klet Mod-al sem tudsz nagyobb f�jlt felt�lteni.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Ez a kiterjeszt�s, %s nem enged�lyezett'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Ez a kiterjeszt�s, %s ebben a f�rumban nem enged�lyezett'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'A mell�klet t�l nagy.<br />Maxim�lis m�ret: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'A mell�kletek sz�m�ra fenntartott t�rhely betelt. L�pj kapcsolatba az adminisztr�torral, ha k�rd�sed van.';
$lang['Too_many_attachments'] = 'A mell�klet nem lett hozz�adva, mert a mell�kelhet� f�jlok sz�ma el�rte a maximumot: %d'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'A mell�kelt k�p ne legyen nagyobb, mint %d pixel sz�les �s %d pixel magas';
$lang['General_upload_error'] = 'Felt�lt�si hiba: A mell�kletet nem siker�lt ide felt�lteni: %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Ki kell t�ltened a Mell�klet hozz�ad�s�n�l l�v� mez�ket';
$lang['Error_missing_old_entry'] = 'A mell�klet nem lett friss�tve, nem tal�lni a r�gi mell�kletet';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'A mell�kletek sz�m�ra fenntartott t�rhely betelt a Priv�t �zeneteidn�l. T�r�lj n�h�ny kimen�/bej�v� �zenetben l�v� mell�kletet.';
$lang['Attach_quota_receiver_pm_reached'] = 'A mell�kletek sz�m�ra fenntartott t�rhely betelt \'%s\' Priv�t �zenetein�l. �rtes�tsd err�l, vagy v�rj, am�g t�r�l n�h�ny mell�kletet.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Nem v�lasztott�l ki mell�kletet.';
$lang['Error_no_attachment'] = 'A kiv�lasztott mell�klet nem l�tezik';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Biztosan t�rl�d a kiv�lasztott mell�kleteket?';
$lang['Deleted_attachments'] = 'A mell�kletek t�r�lve.';
$lang['Error_deleted_attachments'] = 'Mell�kletek t�rl�se sikertelen.';
$lang['Confirm_delete_pm_attachments'] = 'Biztosan t�rl�d a mell�kleteket a P�-b�l?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'A mell�kletek hozz�ad�sa funkci� nem enged�lyezett.';

$lang['Directory_does_not_exist'] = 'A k�nyvt�r, \'%s\' nem l�tezik, vagy nem tal�lhat�.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Ellen�rizd, a(z) \'%s\' k�nyvt�rat.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'A k�nyvt�r, \'%s\' nem �rhat�. Meg kell hat�roznod a felt�lt�si utat �s a k�nyvt�r chmod �rt�k�t 777-re kell �ll�tanod a felt�lt�shez.<br />Ftp el�r�sn�l az Attrib�tumokat �rd �t rwxrwxrwx �rt�kekre.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Nem lehet kapcsol�dni az FTP szerverhez: \'%s\'. Ellen�rizd az FTP be�ll�t�sokat.';
$lang['Ftp_error_login'] = 'Nem lehet bejelentkezni az FTP szerverre. A felhaszn�l� n�v \'%s\' , vagy a jelsz� nem megfelel�. Ellen�rizd az FTP be�ll�t�sokat.';
$lang['Ftp_error_path'] = 'Az ftp k�nyvt�r nem el�rhet�: \'%s\'. Ellen�rizd az FTP be�ll�t�sokat.';
$lang['Ftp_error_upload'] = 'Az ftp k�nyvt�rba nem lehet felt�lteni: \'%s\'. Ellen�rizd az FTP be�ll�t�sokat.';
$lang['Ftp_error_delete'] = 'Az ftp k�nyvt�rb�l nem lehet t�r�lni: \'%s\'. Ellen�rizd az FTP be�ll�t�sokat.<br />M�sik lehets�ges ok: nem l�tez� mell�klet, n�zd meg az �rny�k csatol�sokat.';
$lang['Ftp_error_pasv_mode'] = 'Nem lehets�ges az FTP passz�v m�d enged�lyez�se/tilt�sa';

// Attach Rules Window
$lang['Rules_page'] = 'Mell�kletek szab�lyai';
$lang['Attach_rules_title'] = 'Enged�lyezett kiterjeszt�s csoportok �s m�reteik';
$lang['Group_rule_header'] = '%s -> Maxim�lis felt�lt�si m�ret: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Enged�lyezett f�jlt�pusok �s m�retek';
$lang['Note_user_empty_group_permissions'] = 'MEGJEGYZ�S:<br />Alapesetben tudsz f�jlokat csatolni a f�rumban, <br />de ha nincsenek Kiterjeszt�s csoportok enged�lyezve ott, <br />nem tudsz b�rmit mell�kelni. Ha megpr�b�lod m�gis, <br />hiba�zenetet fogsz kapni.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Felt�lt�si kv�ta';
$lang['Pm_quota'] = 'P� kv�ta';
$lang['User_upload_quota_reached'] = 'El�rted a maxim�lis kv�ta limitet: %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Felhaszn�l�i MVP';
$lang['UACP'] = 'Felhaszn�l�i Mell�klet Vez�rl�pult';
$lang['User_uploaded_profile'] = 'Felt�ltve: %s';
$lang['User_quota_profile'] = 'Kv�ta: %s';
$lang['Upload_percent_profile'] = 'Az �sszes %d%%-a';

// Common Variables
$lang['Bytes'] = 'b�jt';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Mell�kletek keres�se';
$lang['Test_settings'] = 'Be�ll�t�sok tesztel�se';
$lang['Not_assigned'] = 'Nincs hozz�rendelve';
$lang['No_file_comment_available'] = 'F�jl le�r�s nem el�rhet�';
$lang['Attachbox_limit'] = 'Mell�klet t�rol�d %d%% -ig tel�tett';
$lang['No_quota_limit'] = 'Nincs kv�ta limit';
$lang['Unlimited'] = 'Korl�tlan';

?>
