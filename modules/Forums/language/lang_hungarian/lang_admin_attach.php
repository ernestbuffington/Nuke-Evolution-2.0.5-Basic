<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/** 
*
* attachment mod admin [English]
*
* @package attachment_mod
* @version $Id: lang_admin_attach.php,v 1.3 2005/11/20 13:38:55 acydburn Exp $
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Vez�rl�pult';
$lang['Shadow_attachments'] = '�rny�k csatol�sok';
$lang['Forbidden_extensions'] = 'Tiltott kiterjeszt�sek';
$lang['Extension_control'] = 'Kiterjeszt�s be�ll�t�sok';
$lang['Extension_group_manage'] = 'Kiterjeszt�s csoport be�ll�t�sok';
$lang['Special_categories'] = 'Speci�lis kateg�ri�k';
$lang['Sync_attachments'] = 'Mell�kletek szinkroniz�l�sa';
$lang['Quota_limits'] = 'Mennyis�gi korl�toz�sok';

// Attachments -> Management
$lang['Attach_settings'] = 'Mell�kletek (csatol�sok) be�ll�t�sa';
$lang['Manage_attachments_explain'] = 'A mell�kletek (csatol�sok) �ltal�nos jellemz�it �ll�thatod be itt. Ha a be�ll�t�sok tesztel�s�re kattintasz, n�h�ny rendszerteszt fog lefutni, hogy j�l m�k�dik-e a Csatol�s. Ha probl�m�d van a felt�lt�ssel, futtasd le a tesztet, r�szletes le�r�st kapsz a hib�kr�l.';
$lang['Attach_filesize_settings'] = 'Csatolt f�jlok m�ret�nek be�ll�t�sai';
$lang['Attach_number_settings'] = 'Mell�kletek sz�mainak be�ll�t�sai';
$lang['Attach_options_settings'] = 'Mell�kletek be�ll�t�sa';

$lang['Upload_directory'] = 'Felt�lt�si k�nyvt�r';
$lang['Upload_directory_explain'] = '�rd be a f�rum relat�v el�r�si �tj�t, ahova a mell�kletek lesznek felt�ltve. P�ld�ul \'files\', ha a f�rum helye http://www.yourdomain.com/modules/Forums, �s a csatol�sok felt�lt�s�nek helye http://www.yourdomain.com/modules/Forums/files lesz.';
$lang['Attach_img_path'] = 'Hozz�sz�l�s mell�klet ikon';
$lang['Attach_img_path_explain'] = 'Ez a k�p fog megjelenni a hozz�sz�l�sban/priv�t �zenetben, ha Mell�kletet tartalmaz. Hagyd �resen a mez�t, ha nem akarsz megjelen�teni ikont. Ez a be�ll�t�s fel�l�rhat� a Kiterjeszt�s csoport be�ll�t�sokn�l.';
$lang['Attach_topic_icon'] = 'T�ma mell�klet ikon';
$lang['Attach_topic_icon_explain'] = 'Ez a k�p fog megjelenni a t�ma el�tt, amely mell�kletet tartalmaz. Hagyd �resen a mez�t, ha nem akarsz megjelen�teni ikont.';
$lang['Attach_display_order'] = 'Mell�kletek megjelen�t�si sorrendje';
$lang['Attach_display_order_explain'] = 'V�laszd ki a mell�kletek megjelen�t�si sorrendj�t a  hozz�sz�l�sban/priv�t �zenetben, cs�kken� sorrend (�jabb mell�kletek el�l), vagy n�vekv� sorrend (r�gebbi mell�kletek el�l).';
$lang['Show_apcp'] = '�j t�pus� Csatol�s vez�rl�pult megjelen�t�se';
$lang['Show_apcp_explain'] = 'V�lassz az �j t�pus� Csatol�s vez�rl�pult megjelen�t�se (igen) vagy a r�gi m�dszer, k�t mez�vel: Csatolt f�jl �s Megjegyz�s (nem) megjelenit�se k�z�l. A k�l�nbs�get neh�z elmagyar�zni, legjobb, ha megn�zed mindkett�t.';

$lang['Max_filesize_attach'] = 'F�jlm�ret';
$lang['Max_filesize_attach_explain'] = 'A mell�kletek maxim�lis m�rete. �rj 0-t, ha \'korl�tlan\'. Az �rt�ket korl�tozhatja a szerver be�ll�t�sa. Amennyiben a php be�ll�t�sokban csak 2 MB felt�lt�s van enged�lyezve, akkor enn�l nagyobb �rt�ket felesleges megadni.';
$lang['Attach_quota'] = 'Mell�kletek kv�t�ja';
$lang['Attach_quota_explain'] = 'Maxim�lis lemezter�let, amelyet az �SSZES mell�klet lefoglalhat a t�rhelyeden. �rj 0-t, ha \'korl�tlan\'.';
$lang['Max_filesize_pm'] = 'Maxim�lis f�jlm�ret a Priv�t �zenetek k�nyvt�rban';
$lang['Max_filesize_pm_explain'] = 'Maxim�lis lemezter�let a mell�kleteknek, amelyet a felhaszn�l�k Priv�t �zenetekhez haszn�lhatnak. �rj 0-t, ha \'korl�tlan\'.';
$lang['Default_quota_limit'] = 'Alap�rtelmezett kv�ta limit';
$lang['Default_quota_limit_explain'] = 'Kiv�laszthatsz egy alap�rtelmezett kv�ta limitet, melyet automatikusan hozz�rendel a felhaszn�l�khoz egy be�ll�tott limit n�lk�l. A \'Nincs kv�ta limit\' be�ll�t�s nem alkalmazhat� valamennyi csatol�si kv�t�ra, ehelyett haszn�ld az alap�rtelmezett be�ll�t�sokat, melyeket fentebb meghat�rozt�l.';

$lang['Max_attachments'] = 'Mell�kletek maxim�lis sz�ma';
$lang['Max_attachments_explain'] = 'A mell�kletek maxim�lis sz�ma hozz�sz�l�sonk�nt.';
$lang['Max_attachments_pm'] = 'Mell�kletek maxim�lis sz�ma Priv�t �zenetenk�nt';
$lang['Max_attachments_pm_explain'] = 'A mell�kletek maxim�lis sz�ma, amelyet enged�lyezel Priv�t �zenetenk�nt.';

$lang['Disable_mod'] = 'Mell�kletek tilt�sa';
$lang['Disable_mod_explain'] = 'Els�sorban az �j sablonok, vagy t�m�k tesztel�s�re, letilt minden csatol�s funkci�t, kiv�ve az Admin Panelen.';
$lang['PM_Attachments'] = 'Mell�kletek enged�lyez�se Priv�t �zenetekben';
$lang['PM_Attachments_explain'] = 'F�jlok csatol�s�nak enged�lyez�se/tilt�sa a Priv�t �zenetekben.';
$lang['Ftp_upload'] = 'FTP felt�lt�s enged�lyez�se';
$lang['Ftp_upload_explain'] = 'FTP felt�lt�s enged�lyez�se/tilt�sa. Ha enged�lyezed, be kell �ll�tanod a mell�kletek FTP tulajdons�gait, �s gy�z�dj meg r�la, hogy a felt�lt�si k�nyvt�r ne legyen m�r haszn�latban.';
$lang['Attachment_topic_review'] = 'Megjelen�ted a mell�kleteket a t�ma el�n�zet�ben ?';
$lang['Attachment_topic_review_explain'] = 'Ha igen, akkor minden mell�kelt f�jl megjelenik az el�n�zeti ablakban.';

$lang['Ftp_server'] = 'FTP Szerver';
$lang['Ftp_server_explain'] = 'Add meg a szerver IP-c�m�t, vagy az FTP-Hoszt nev�t, amelyen kereszt�l a f�jlokat lehet felt�lteni. Ha nem �rsz be semmit, a szerver ugyanaz lesz, mint amely a f�rum telep�t�sekor volt haszn�lva. Az ftp://, vagy m�s el�tag nem kell, csak pl. ftp.foo.com, vagy ha gyorsabb a sima IP c�m.';

$lang['Attach_ftp_path'] = 'FTP el�r�si �t a felt�lt�si k�nyvt�rhoz';
$lang['Attach_ftp_path_explain'] = 'A k�nyvt�r, ahol a mell�kletek lesznek t�rolva. A k�nyvt�r legyen olvashat� (CHMOD). Ne �rd be az IP, vagy az FTP-c�met ide, ez a mez� csak az FTP el�r�st tartalmazza.<br />P�ld�ul: /home/web/uploads';
$lang['Ftp_download_path'] = 'FTP el�r�si �t let�lt�si linkje';
$lang['Ftp_download_path_explain'] = 'A k�nyvt�r URL c�me, ahol a mell�kletek vannak t�rolva.<br />Ha t�voli el�r�s� FTP szervert haszn�lsz, a teljes url c�met add meg, p�ld�ul http://www.mystorage.com/phpBB2/upload.<br />Ha helyi kiszolg�l�n t�rolod a f�jlokat, az url relat�v el�r�s�t �rd be, p�ld�ul \'upload\'.<br />Hagyd a mez�t �resen, ha az FTP el�r�s nem hozz�f�rhet� az Internetr�l.';
$lang['Ftp_passive_mode'] = 'FTP passz�v m�d enged�lyez�se';
$lang['Ftp_passive_mode_explain'] = 'Passz�v FTP kapcsolat eset�n a PASV parancsot kell kiadnunk param�terek n�lk�l, �s a szerver a v�laszban fogja megmondani, hogy hova kapcsol�djon a kliens�nk.';

$lang['No_ftp_extensions_installed'] = 'Nem tudod haszn�lni az FTP felt�lt�st, mert a telep�tett PHP ezt nem engedi.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Itt t�r�lheted azokat a metell�kletek, amelyek hi�nyoznak a rendszerb�l, �s azokat, amelyeket m�r nem lehet felhaszn�lni. Let�ltheted, vagy megn�zheted a f�jlt, ha r�kattintasz; ha nincs link, a f�jl nincs meg.';
$lang['Shadow_attachments_file_explain'] = 'T�r�lheted azokat a f�jlokat, amelyek ugyan megvannak a rendszerben, de nem kapcsol�dnak egyetlen hozz�sz�l�shoz sem.';
$lang['Shadow_attachments_row_explain'] = 'Minden hi�nyz� mell�kletet t�r�lhetsz.';
$lang['Empty_file_entry'] = '�res f�jl bejegyz�s';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Ikon vissza�ll�tva a mell�klethez: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Mell�kletek szinkroniz�l�sa befejezve.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Kiterjeszt�sek be�ll�t�sai';
$lang['Manage_extensions_explain'] = 'Itt tudod be�ll�tani a f�jl kiterjeszt�seket. Ha egy kiterjeszt�s felt�lt�s�t enged�lyezni/tiltani akarod, haszn�ld a Kiterjeszt�s csoport be�ll�t�sok men�t.';
$lang['Explanation'] = 'Magyar�zat';
$lang['Extension_group'] = 'Kiterjeszt�s csoport';
$lang['Invalid_extension'] = '�rv�nytelen kiterjeszt�s';
$lang['Extension_exist'] = 'Ez a kiterjeszt�s m�r l�tezik: %s '; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Ez a kiterjeszt�s tiltva van: %s . Nem tudod hozz�adni az enged�lyezett kiterjeszt�sekhez'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Kiterjeszt�s csoport be�ll�t�sok';
$lang['Manage_extension_groups_explain'] = 'Itt tudsz hozz�adni, t�r�lni, m�dos�tani kiterjeszt�s csoportot; letilthatsz csoportokat, speci�lis kateg�ri�hoz rendelheted azokat; let�lt�si m�dot tudsz v�ltoztatni �s egy felt�lt�si ikont tudsz hozz�juk rendelni, amely meggjelenik, ha egy csoporthoz tartozik a mell�klet.';
$lang['Special_category'] = 'Speci�lis kateg�ria';
$lang['Category_images'] = 'K�pek';
$lang['Category_stream_files'] = 'Stream f�jlok';
$lang['Category_swf_files'] = 'Flash f�jlok';
$lang['Allowed'] = 'Enged�lyezett';
$lang['Allowed_forums'] = 'Enged�lyezett f�rumok';
$lang['Ext_group_permissions'] = 'Csoport hozz�f�r�s';
$lang['Download_mode'] = 'Let�lt�si m�d';
$lang['Upload_icon'] = 'Felt�lt�si ikon';
$lang['Max_groups_filesize'] = 'Maxim�lis f�jlm�ret';
$lang['Extension_group_exist'] = 'Ez a kiterjeszt�s csoport m�r l�tezik: %s'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Speci�lis kateg�ria be�ll�t�sok';
$lang['Manage_categories_explain'] = 'Itt tudod be�ll�tani a speci�lis kateg�ri�kat, melyek kiterjeszt�s csoportokhoz vannak rendelve.';
$lang['Settings_cat_images'] = 'Speci�lis kateg�ria be�ll�t�sai: K�pek';
$lang['Settings_cat_streams'] = 'Speci�lis kateg�ria be�ll�t�sai: Stream f�jlok';
$lang['Settings_cat_flash'] = 'Speci�lis kateg�ria be�ll�t�sai: Flash f�jlok';
$lang['Display_inlined'] = 'K�pek k�zvetlen megjelen�t�se';
$lang['Display_inlined_explain'] = 'Kiv�laszthatod, hogy a k�peket k�zvetlen�l megjelen�tse a hozz�sz�l�sokban (igen), vagy csak egy link jel�lje azokat ?';
$lang['Max_image_size'] = 'K�pek maxim�lis m�rete';
$lang['Max_image_size_explain'] = 'Itt adhatod meg, a csatolhat� k�pek maxim�lis m�ret�t (sz�less�g x magass�g pixelben).<br />Ha az �rt�ke 0x0, akkor a funkci� nem megengedett. Ez a funkci� n�h�ny k�ppel nem m�k�dik a PHP korl�toz�sai miatt.';
$lang['Image_link_size'] = 'K�p link m�rete';
$lang['Image_link_size_explain'] = 'Ha ezt a be�ll�tott m�retet egy k�p m�rete el�ri, a k�p linkk�nt fog megjelenni,<br />ha a k�zvetlen megjelen�t�s enged�lyezve van (sz�less�g x magass�g pixelben).<br />Ha az �rt�ke 0x0, akkor a funkci� nem megengedett. Ez a funkci� n�h�ny k�ppel nem m�k�dik a PHP korl�toz�sai miatt.';
$lang['Assigned_group'] = 'Hozz�rendelt csoport';

$lang['Image_create_thumbnail'] = 'Ikonk�p k�sz�t�se';
$lang['Image_create_thumbnail_explain'] = 'Mindig k�sz�t ikonk�pet. Ez a funci� minden be�ll�t�st �rv�nytelen�thet a Speci�lis kateg�ri�kban, kiv�ve a K�pek maxim�lis m�ret�t. Ezzel a funkci�val egy ikonk�pet jelenithetsz meg a hozz�sz�l�sban, amelyre r�kattintva a k�p teljes m�ret�ben l�that� lesz. Ehez a funkci�hoz telep�teni kell a Imagick-et, ha ez nincs telep�tve, vagy a PHP Safe-m�dja be van kapcsolva, akkor a GD-extensions lesz haszn�lva.';
$lang['Image_min_thumb_filesize'] = 'Minim�lis ikonk�p f�jlm�ret';
$lang['Image_min_thumb_filesize_explain'] = 'Ha a k�p kisebb, mint az itt be�ll�tott f�jlm�ret, nem lesz ikonk�p k�sz�tve.';
$lang['Image_imagick_path'] = 'Imagick Program (Teljes el�r�si �t)';
$lang['Image_imagick_path_explain'] = '�rd be a Imagick Program teljes el�r�si �tvonal�t, ez �ltal�ban /usr/bin/convert (Windows rendszeren: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Imagick keres�se';

$lang['Use_gd2'] = 'GD2 Extension haszn�lata';
$lang['Use_gd2_explain'] = 'PHP a GD1, vagy GD2 Extension-t haszn�lja k�pek kezel�s�re. Imagemagick n�lk�l a k�pekb�l ikonk�p k�sz�t�shez k�t m�dszert haszn�lhatsz. Ha az ikonk�p rossz min�s�g�, vagy ford�tott �llapot�, pr�b�ld ki a m�sik lehet�s�get.';
$lang['Attachment_version'] = 'Mell�klet Mod Verzi� %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Tiltott kiterjeszt�sek be�ll�t�sa';
$lang['Manage_forbidden_extensions_explain'] = 'Hozz�adhatsz, vagy t�r�lhetsz tiltott kiterjeszt�st. A php, php3 �s a php4 alapb�l tiltva van biztons�gi okok miatt, ezeket ne t�r�ld.';
$lang['Forbidden_extension_exist'] = 'Ez a tiltott kiterjeszt�s m�r l�tezik: %s'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = '%s -ez a kiterjeszt�s szerepel az enged�lyezett kiterjeszt�sek k�z�tt, t�r�ld onnan, miel�tt itt hozz�adn�d.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Kiterjeszt�s csoport be�ll�t�sok -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'A kiv�lasztott f�rumokra (F�rum hozz�ad�sa mez�b�l) tudod korl�tozni a Kiterjeszt�s csoportokat. Alap esetben a Kiterjeszt�s csoportok miden f�rum felhaszn�l�j�nak enged�lyezve van mell�kletek hozz�ad�s�ra. Csak add hozz� a kiv�lasztott f�rumot a Kiterjeszt�s csoporthoz, az alap�rtelmezett MINDEN F�RUM be�ll�t�s megsz�nik, amint hozz�adsz egy f�rumot a list�b�l. A MINDEN F�RUM be�ll�t�st b�rmikor vissza�ll�thatod. Ha hozz�adsz egy f�rumot, de az enged�lyek MINDEN F�RUM-ra vonatkoznak, nem �rsz el v�ltoz�st. Ha megv�ltoztatsz, vagy korl�tozol egy bizonyos f�rumot, itt �jra ellen�rizheted a f�rumot. Ez megy automatikusan is, de �gy jobban ellen�rz�sed alatt tarthatod a dolgokat. Tartsd �szben, itt minden f�rum list�z�sra ker�l.';
$lang['Note_admin_empty_group_permissions'] = 'MEGJEGYZ�S:<br />A lent felsorolt f�rumok felhaszn�l�i tudnak f�jlokat csatolni a hozz�sz�l�saikhoz, de mivel nincsenek Kiterjeszt�s csoportok be�ll�tva ott, nem k�ldhetnek b�rmit. Ha megpr�b�lj�k, hiba �zenetet kapnak.<br /><br />';
$lang['Add_forums'] = 'F�rum hozz�ad�sa';
$lang['Add_selected'] = 'Kiv�lasztott hozz�ad�sa';
$lang['Perm_all_forums'] = 'MINDEN F�RUM';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Mell�kletek kv�ta limit be�ll�t�sa';
$lang['Manage_quotas_explain'] = 'Hozz�adhatsz/t�r�lhetsz/v�ltoztathatsz kv�ta limitet. Ezeket a kv�ta limiteket hozz�rendelheted felhaszn�l�khoz �s csoportok. Ha egy felhaszn�l�hoz kv�ta limitet adn�l, menj a Felhaszn�l�k->Be�ll�t�sok pontra, v�laszd ki a felhaszn�l�t �s a v�laszthat� lehet�s�geket lent fogod tal�lni. Ha egy csoporthoz k�v�nsz kv�ta limitet adni,  menj a Csoportok->Be�ll�t�sok pontra, v�laszd ki a csoportot�s a l�tni fogod be�ll�t�si lehet�s�geket. Ha megn�zn�d, egy adott kv�ta limithez mely felhaszn�l�k �s csoportok vannak rendelve, kattints a \'Megtekint�s\' -re a kv�ta limit le�r�s bal oldal�n.';
$lang['Assigned_users'] = 'Felhaszn�l�k';
$lang['Assigned_groups'] = 'Csoportok';
$lang['Quota_limit_exist'] = 'Ez a kv�ta limit m�r l�tezik: %s'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'F�jlcsatol�sok vez�rl�pult';
$lang['Control_panel_explain'] = 'Itt megtekintheted �s menedzselheted az �sszes mell�kletet, k�l�nb�z� szempontok alapj�n: Felhaszn�l�k, Mell�kletek, stb.';
$lang['File_comment_cp'] = 'F�jl magyar�zat';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Haszn�ld a * karaktert behelyettes�t�sre';
$lang['Size_smaller_than'] = 'Mell�klet m�rete kisebb, mint (b�jt)';
$lang['Size_greater_than'] = 'Mell�klet m�rete nagyobb, mint (b�jt)';
$lang['Count_smaller_than'] = 'Let�lt�sek sz�ma kevesebb, mint';
$lang['Count_greater_than'] = 'Let�lt�sek sz�ma t�bb, mint';
$lang['More_days_old'] = 'T�bb, mint ennyi nappal r�gebbi';
$lang['No_attach_search_match'] = 'Nincs megfelel� a keres�si felt�teleknek';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Mell�kletek sz�ma';
$lang['Total_filesize'] = 'F�jlok �ssz. m�rete';
$lang['Number_posts_attach'] = 'Mell�kletekkel ell�tott hozz�sz�l�sok sz�ma';
$lang['Number_topics_attach'] = 'Mell�kletekkel ell�tott t�m�k sz�ma';
$lang['Number_users_attach'] = 'F�ggetlen felhaszn�l�k �ltal k�ld�tt csatol�sok';
$lang['Number_pms_attach'] = 'Mell�kletek sz�ma a Priv�t �zenetekben';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = '%s mell�kleteinek statisztik�ja'; // replace %s with username
$lang['Size_in_kb'] = 'M�ret (KB)';
$lang['Downloads'] = 'Let�lt�sek';
$lang['Post_time'] = 'K�ld�s ideje';
$lang['Posted_in_topic'] = 'T�ma';
$lang['Submit_changes'] = 'V�ltoz�sok ment�se';

// Sort Types
$lang['Sort_Attachments'] = 'Mell�kletek';
$lang['Sort_Size'] = 'M�ret';
$lang['Sort_Filename'] = 'F�jln�v';
$lang['Sort_Comment'] = 'Megjegyz�s';
$lang['Sort_Extension'] = 'Kiterjeszt�s';
$lang['Sort_Downloads'] = 'Let�lt�sek';
$lang['Sort_Posttime'] = 'K�ld�s ideje';
$lang['Sort_Posts'] = 'K�ldve';

// View Types
$lang['View_Statistic'] = 'Statisztik�k';
$lang['View_Search'] = 'Keres�s';
$lang['View_Username'] = 'Felhaszn�l�n�v';
$lang['View_Attachments'] = 'Mell�kletek';

// Successfully updated
$lang['Attach_config_updated'] = 'Mell�kletek be�ll�t�sai friss�tve';
$lang['Click_return_attach_config'] = 'Kattints %side%s, hogy visszat�rj a Mell�kletek be�ll�t�saihoz';
$lang['Test_settings_successful'] = 'Be�ll�t�sok tesztje v�get�rt, a be�ll�t�sok j�nak t�nnek.';

// Some basic definitions
$lang['Attachments'] = 'Mell�kletek';
$lang['Attachment'] = 'Mell�klet';
$lang['Extensions'] = 'Kiterjeszt�sek';
$lang['Extension'] = 'Kiterjeszt�s';

// Auth pages
$lang['Auth_attach'] = 'K�ld�tt f�jlok';
$lang['Auth_download'] = 'Let�lt�tt f�jlok';

?>
