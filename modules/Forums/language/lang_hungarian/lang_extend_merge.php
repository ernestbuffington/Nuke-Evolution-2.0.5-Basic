<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
 *                        lang_extend_merge.php [English]
 *                        -------------------------------
 *    begin                : 28/09/2003
 *    copyright            : Ptirhiik
 *    email                : ptirhiik@clanmckeen.com
 *
 *    version                : 1.0.1 - 21/10/2003
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

if (!defined('IN_PHPBB')) {
   die("Hacking attempt");
   exit;
}

// admin part
if ( $lang_extend_admin )
{
    $lang['Lang_extend_merge'] = '�sszef�s�l�ss';
}

$lang['Refresh'] = 'Friss�t�s';
$lang['Merge_topics'] = 'T�m�k �sszef�z�se';
$lang['Merge_title'] = '�j t�ma c�me';
$lang['Merge_title_explain'] = '�j c�m megad�sa a t�m�nak. Ha �ressen hagyod akkot nem jelenik meg';
$lang['Merge_topic_from'] = 'T�m�k �sszef�z�se';
$lang['Merge_topic_from_explain'] = 'Ezt a t�m�t �sszef�zni egy m�sik t�m�val. T�ma sz�ma (ID), T�ma el�r�se (URL).';
$lang['Merge_topic_to'] = 'T�ma vissza�ll�t�s';
$lang['Merge_topic_to_explain'] = 'A t�m�val mozgatod a hozz�sz�l�sokat is. Add meg a t�ma sz�m�t (ID), az el�r�st a t�m�hoz (URL), hozz�szol�sokat a t�m�hoz';
$lang['Merge_from_not_found'] = 'Kiv�lasztott t�ma �sszevon�s\l�tez�';
$lang['Merge_to_not_found'] = 'Kiv�lasztott t�ma �sszevon�s\l�tez�';
$lang['Merge_topics_equals'] = 'Biztos, hogy\�sszemozgatod a t�m�kat';
$lang['Merge_from_not_authorized'] = 'You are not a authorized to moderate topics coming from the forum of the topic to merge';
$lang['Merge_to_not_authorized'] =  'You are not a authorized to moderate topics coming from the forum of the destination topic';
$lang['Merge_poll_from'] = 'Szavaz�sok a t�m�val �sszevonva. Bem�solva a kiv�lasztott t�m�hoz';
$lang['Merge_poll_from_and_to'] = 'A t�m�k szavaz�sokat tartalmaznak. Szavaz�sok az �sszevon�ssal t�rl�dnek';
$lang['Merge_confirm_process'] = 'Biztos, hogy �sszeakarod vonni <br />"<b>%s</b>"<br />val<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'A t�m�k �sszevonva.';

?>