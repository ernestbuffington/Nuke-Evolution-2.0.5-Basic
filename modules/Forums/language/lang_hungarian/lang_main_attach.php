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
$lang['Rules_attach_can'] = '<b>Mellékelhetsz</b> fájlokat a fórumban';
$lang['Rules_attach_cannot'] = '<b>Nem</b> mellékelhetsz fájlokat a fórumban';
$lang['Rules_download_can'] = '<b>Letölthetsz</b> fájlokat a fórumban';
$lang['Rules_download_cannot'] = '<b>Nem</b> tölthetsz le fájlokat a fórumban';
$lang['Sorry_auth_view_attach'] = 'Nincs jogosultságod megnézni, vagy letölteni ezt a mellékletet';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Leírás'; // used in Administration Panel too...
$lang['Downloaded'] = 'Letöltve';
$lang['Download'] = 'Letöltés'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Fájlméret';
$lang['Viewed'] = 'Megtekintve';
$lang['Download_number'] = '%d alkalommal'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Ezt a kiterjesztést \'%s\' egy admin deaktiválta, ezért a melléklet nem fog megjelenni.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Csatolás vezérlõpult';
$lang['Attach_posting_cp_explain'] = 'Ha a Melléklet hozzáadására kattintasz, egy ablakot fogsz látni a csatoláshoz.<br />Ha az Elküldött mellékletekre, egy listát látsz a már csatolt fájlokról, melyeket szerkeszthetsz is.<br />Ha le akarod cserélni (Új változat feltöltése) a mellékletet, kattints az utóbbi linkre. Ebben az esetben az Új változat feltöltése gombra kattints, ne a Melléklet hozzáadására.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Melléklet hozzáadása';
$lang['Add_attachment_title'] = 'Melléklet hozzáadása';
$lang['Add_attachment_explain'] = 'Ha nem akarsz fájlt mellékelni, hagyd a mezõket üresen';
$lang['File_name'] = 'Fájlnév';
$lang['File_comment'] = 'Leírás';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Elküldött mellékletek';
$lang['Options'] = 'Lehetõségek';
$lang['Update_comment'] = 'Leírás frissítése';
$lang['Delete_attachments'] = 'Mellékletek törlése';
$lang['Delete_attachment'] = 'Melléklet törlése';
$lang['Delete_thumbnail'] = 'Ikon törlése';
$lang['Upload_new_version'] = 'Új változat feltöltése';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s nem megfelelõ fájlnév'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'A melléklet túl nagy.<br />A PHP-ben engedélyezett linitet nem lépheted túl.<br />A Melléklet Mod-al sem tudsz nagyobb fájlt feltölteni, mint ami a php.ini-ben meg van adva.';
$lang['Attachment_php_size_overrun'] = 'A melléklet túl nagy.<br />Feltölthetõ maximális méret: %d MB.<br />Ez az érték a php.ini-ben meg van adva, és a Melléklet Mod-al sem tudsz nagyobb fájlt feltölteni.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Ez a kiterjesztés, %s nem engedélyezett'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Ez a kiterjesztés, %s ebben a fórumban nem engedélyezett'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'A melléklet túl nagy.<br />Maximális méret: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'A mellékletek számára fenntartott tárhely betelt. Lépj kapcsolatba az adminisztrátorral, ha kérdésed van.';
$lang['Too_many_attachments'] = 'A melléklet nem lett hozzáadva, mert a mellékelhetõ fájlok száma elérte a maximumot: %d'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'A mellékelt kép ne legyen nagyobb, mint %d pixel széles és %d pixel magas';
$lang['General_upload_error'] = 'Feltöltési hiba: A mellékletet nem sikerült ide feltölteni: %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Ki kell töltened a Melléklet hozzáadásánál lévõ mezõket';
$lang['Error_missing_old_entry'] = 'A melléklet nem lett frissítve, nem találni a régi mellékletet';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'A mellékletek számára fenntartott tárhely betelt a Privát üzeneteidnél. Törölj néhány kimenõ/bejövõ üzenetben lévõ mellékletet.';
$lang['Attach_quota_receiver_pm_reached'] = 'A mellékletek számára fenntartott tárhely betelt \'%s\' Privát üzeneteinél. Értesítsd errõl, vagy várj, amíg töröl néhány mellékletet.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Nem választottál ki mellékletet.';
$lang['Error_no_attachment'] = 'A kiválasztott melléklet nem létezik';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Biztosan törlöd a kiválasztott mellékleteket?';
$lang['Deleted_attachments'] = 'A mellékletek törölve.';
$lang['Error_deleted_attachments'] = 'Mellékletek törlése sikertelen.';
$lang['Confirm_delete_pm_attachments'] = 'Biztosan törlöd a mellékleteket a PÜ-bõl?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'A mellékletek hozzáadása funkció nem engedélyezett.';

$lang['Directory_does_not_exist'] = 'A könyvtár, \'%s\' nem létezik, vagy nem található.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Ellenõrizd, a(z) \'%s\' könyvtárat.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'A könyvtár, \'%s\' nem írható. Meg kell határoznod a feltöltési utat és a könyvtár chmod értékét 777-re kell állítanod a feltöltéshez.<br />Ftp elérésnél az Attribútumokat írd át rwxrwxrwx értékekre.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Nem lehet kapcsolódni az FTP szerverhez: \'%s\'. Ellenõrizd az FTP beállításokat.';
$lang['Ftp_error_login'] = 'Nem lehet bejelentkezni az FTP szerverre. A felhasználó név \'%s\' , vagy a jelszó nem megfelelõ. Ellenõrizd az FTP beállításokat.';
$lang['Ftp_error_path'] = 'Az ftp könyvtár nem elérhetõ: \'%s\'. Ellenõrizd az FTP beállításokat.';
$lang['Ftp_error_upload'] = 'Az ftp könyvtárba nem lehet feltölteni: \'%s\'. Ellenõrizd az FTP beállításokat.';
$lang['Ftp_error_delete'] = 'Az ftp könyvtárból nem lehet törölni: \'%s\'. Ellenõrizd az FTP beállításokat.<br />Másik lehetséges ok: nem létezõ melléklet, nézd meg az árnyék csatolásokat.';
$lang['Ftp_error_pasv_mode'] = 'Nem lehetséges az FTP passzív mód engedélyezése/tiltása';

// Attach Rules Window
$lang['Rules_page'] = 'Mellékletek szabályai';
$lang['Attach_rules_title'] = 'Engedélyezett kiterjesztés csoportok és méreteik';
$lang['Group_rule_header'] = '%s -> Maximális feltöltési méret: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Engedélyezett fájltípusok és méretek';
$lang['Note_user_empty_group_permissions'] = 'MEGJEGYZÉS:<br />Alapesetben tudsz fájlokat csatolni a fórumban, <br />de ha nincsenek Kiterjesztés csoportok engedélyezve ott, <br />nem tudsz bármit mellékelni. Ha megpróbálod mégis, <br />hibaüzenetet fogsz kapni.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Feltöltési kvóta';
$lang['Pm_quota'] = 'PÜ kvóta';
$lang['User_upload_quota_reached'] = 'Elérted a maximális kvóta limitet: %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Felhasználói MVP';
$lang['UACP'] = 'Felhasználói Melléklet Vezérlõpult';
$lang['User_uploaded_profile'] = 'Feltöltve: %s';
$lang['User_quota_profile'] = 'Kvóta: %s';
$lang['Upload_percent_profile'] = 'Az összes %d%%-a';

// Common Variables
$lang['Bytes'] = 'bájt';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Mellékletek keresése';
$lang['Test_settings'] = 'Beállítások tesztelése';
$lang['Not_assigned'] = 'Nincs hozzárendelve';
$lang['No_file_comment_available'] = 'Fájl leírás nem elérhetõ';
$lang['Attachbox_limit'] = 'Melléklet tárolód %d%% -ig telített';
$lang['No_quota_limit'] = 'Nincs kvóta limit';
$lang['Unlimited'] = 'Korlátlan';

?>
