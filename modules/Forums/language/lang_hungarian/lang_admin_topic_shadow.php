<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
*                            $RCSfile: lang_admin_topic_shadow.php,v $
*                            -------------------
*   copyright            : (C) 2002-2003 Nivisec.com
*   email                : support@nivisec.com
*
*   $Id: lang_admin_topic_shadow.php,v 1.3 2003/06/26 00:16:32 nivisec Exp $
*
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

/* If you are translating this, please e-mail a copy to me! */
/* admin@nivisec.com is fine to use */

//General
$lang['Del_Before_Date'] = 'A(z) %s elõtti árnyék témák törölve<br />'; // %s = insertion of date
$lang['Deleted_Topic'] = 'A(z) %d azonosítójú árnyék téma törölve<br />'; // %d = insertion of topic id
$lang['Affected_Rows'] = '%d bejegyzést érintett<br />'; // %d = affected rows (not avail with all databases!)
$lang['Delete_From_Date'] = 'Az adott dátum elõtti árnyék témák eltávolítása.';
$lang['Delete_Before_Date_Button'] = 'Dátumnál régebbiek törlése';
$lang['No_Shadow_Topics'] = 'Nincs árnyék téma.';
$lang['Topic_Shadow'] = 'Árnyék téma';
$lang['TS_Desc'] = 'Eltávolíthatod az árnyék témákat, anélkül, hogy az új helyén törölnéd azt.  Árnyék téma akkor készül, ha egy témát másik fórumba helyezel át, és a helyén hagysz egy linket az új fórumba.';
$lang['Month'] = 'Hónap';
$lang['Day'] = 'Nap';
$lang['Year'] = 'Év';
$lang['Clear'] = 'Kijelölést megszüntet';

$lang['Title'] = 'Cím';
$lang['Moved_To'] = 'Áthelyezve ide';
$lang['Moved_From'] = 'Áthelyezve innen';
$lang['Delete'] = 'Törlés';

//Modes
$lang['topic_time'] = 'Téma ideje';
$lang['topic_title'] = 'Téma címe';

//Errors
$lang['Error_Month'] = 'A hónap 1 és 12 közötti legyen';
$lang['Error_Day'] = 'A nap 1 és 31 közötti legyen';
$lang['Error_Year'] = 'Az évszám 1970 és 2038 közötti legyen';
$lang['Error_Topics_Table'] = 'Hiba: hozzáférés a témák táblájához';

//Special Cases, Do not change for another language
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];



?>
