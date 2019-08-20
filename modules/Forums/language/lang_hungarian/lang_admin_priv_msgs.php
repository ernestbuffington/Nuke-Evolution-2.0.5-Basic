<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
*                            $RCSfile: lang_admin_priv_msgs.php,v $
*                            -------------------
*   begin                : Tue January 20 2002
*   copyright            : (C) 2002-2003 Nivisec.com
*   email                : support@nivisec.com
*
*   $Id: lang_admin_priv_msgs.php,v 1.1 2005/07/21 15:49:49 Nivisec Exp $
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

/*************/
/*  IF YOU TRANSLATE THIS FILE, PLEASE UPLOAD IT AT:
/* http://www.nivisec.com/phpbb.php?l=ad
/*************/

/* General */
$lang['Deleted_Message'] = 'Törölt Privát üzenetek - %s <br />'; // %s = PM title
$lang['Archived_Message'] = 'Archivált Privát üzenetek - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = '%s nem törölhetõ, archívnak is jelölted <br />'; // %s = PM title
$lang['Private_Messages'] = 'Privát üzenetek';
$lang['Private_Messages_Archive'] = 'Archív Privát üzenetek';
$lang['Archive'] = 'Archív';
$lang['To'] = 'Címzett';
$lang['Subject'] = 'Tárgy';
$lang['Sent_Date'] = 'Küldés dátuma';
$lang['Delete'] = 'Törlés';
$lang['From'] = 'Feladó';
$lang['Sort'] = 'Rendezés';
$lang['Filter_By'] = 'Üzenet típus';
$lang['PM_Type'] = 'PÜ típus';
$lang['Status'] = 'Állapot';
$lang['No_PMS'] = 'Nincs megjeleníthetõ Privát üzenet';
$lang['Archive_Desc'] = 'Az archívált üzeneteket tekintheted meg itt. A felhasználók (küldõ, feladó) ezekhez nem férnek hozzá, de Te olvashatod, törölheted azokat.';
$lang['Normal_Desc'] = 'Minden Privát üzenetet tudsz itt kezelni.  Elolvashatod, törölheted, vagy arcíválhatod (megmarad, de a felhasználó nem látja) bármelyik üzenetet.';
$lang['Version'] = 'Verzió';
$lang['Remove_Old'] = 'Árva PÜ-k:</a> <span class="gensmall">Már nem létezõ felhasználók után maradt üzenetek törlése</span>';
$lang['Remove_Sent'] = 'Küldött PÜ-k:</a> <span class="gensmall">A küldött üzenetek fiókban az elküldött üzenetek pontos másolatai vannak. Ezekre nem igazán van szükség</span>';
$lang['Affected_Rows'] = '%d bejegyzés törölve<br>';
$lang['Removed_Old'] = 'Minden Árva PÜ eltávolítva<br>';
$lang['Removed_Sent'] = 'Minden Küldött PÜ eltávolítva<br>';
$lang['Utilities'] = 'Tömeges törlés segédprogram';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = 'Mindegyik'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = 'Olvasott PÜ'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = 'Új PÜ'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = 'Küldött PÜ'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = 'Mentett PÜ (Be)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = 'Mentett PÜ (Ki)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = 'Olvasatlan PÜ'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = 'Hiba: tábla lekérdezés.';
$lang['Error_Posts_Text_Table'] = 'Hiba: Privát üzenetek szöveg tábla lekérdezés.';
$lang['Error_Posts_Table'] = 'Hiba: Privát üzenetek tábla lekérdezés.';
$lang['Error_Posts_Archive_Table'] = 'Hiba: Archív Privát üzenetek tábla lekérdezés.';
$lang['No_Message_ID'] = 'Üzenet azonosító nincs megadva.';


/*Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

?>
