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
$lang['Deleted_Message'] = 'T�r�lt Priv�t �zenetek - %s <br />'; // %s = PM title
$lang['Archived_Message'] = 'Archiv�lt Priv�t �zenetek - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = '%s nem t�r�lhet�, arch�vnak is jel�lted <br />'; // %s = PM title
$lang['Private_Messages'] = 'Priv�t �zenetek';
$lang['Private_Messages_Archive'] = 'Arch�v Priv�t �zenetek';
$lang['Archive'] = 'Arch�v';
$lang['To'] = 'C�mzett';
$lang['Subject'] = 'T�rgy';
$lang['Sent_Date'] = 'K�ld�s d�tuma';
$lang['Delete'] = 'T�rl�s';
$lang['From'] = 'Felad�';
$lang['Sort'] = 'Rendez�s';
$lang['Filter_By'] = '�zenet t�pus';
$lang['PM_Type'] = 'P� t�pus';
$lang['Status'] = '�llapot';
$lang['No_PMS'] = 'Nincs megjelen�thet� Priv�t �zenet';
$lang['Archive_Desc'] = 'Az arch�v�lt �zeneteket tekintheted meg itt. A felhaszn�l�k (k�ld�, felad�) ezekhez nem f�rnek hozz�, de Te olvashatod, t�r�lheted azokat.';
$lang['Normal_Desc'] = 'Minden Priv�t �zenetet tudsz itt kezelni.  Elolvashatod, t�r�lheted, vagy arc�v�lhatod (megmarad, de a felhaszn�l� nem l�tja) b�rmelyik �zenetet.';
$lang['Version'] = 'Verzi�';
$lang['Remove_Old'] = '�rva P�-k:</a> <span class="gensmall">M�r nem l�tez� felhaszn�l�k ut�n maradt �zenetek t�rl�se</span>';
$lang['Remove_Sent'] = 'K�ld�tt P�-k:</a> <span class="gensmall">A k�ld�tt �zenetek fi�kban az elk�ld�tt �zenetek pontos m�solatai vannak. Ezekre nem igaz�n van sz�ks�g</span>';
$lang['Affected_Rows'] = '%d bejegyz�s t�r�lve<br>';
$lang['Removed_Old'] = 'Minden �rva P� elt�vol�tva<br>';
$lang['Removed_Sent'] = 'Minden K�ld�tt P� elt�vol�tva<br>';
$lang['Utilities'] = 'T�meges t�rl�s seg�dprogram';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = 'Mindegyik'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = 'Olvasott P�'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = '�j P�'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = 'K�ld�tt P�'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = 'Mentett P� (Be)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = 'Mentett P� (Ki)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = 'Olvasatlan P�'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = 'Hiba: t�bla lek�rdez�s.';
$lang['Error_Posts_Text_Table'] = 'Hiba: Priv�t �zenetek sz�veg t�bla lek�rdez�s.';
$lang['Error_Posts_Table'] = 'Hiba: Priv�t �zenetek t�bla lek�rdez�s.';
$lang['Error_Posts_Archive_Table'] = 'Hiba: Arch�v Priv�t �zenetek t�bla lek�rdez�s.';
$lang['No_Message_ID'] = '�zenet azonos�t� nincs megadva.';


/*Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

?>
