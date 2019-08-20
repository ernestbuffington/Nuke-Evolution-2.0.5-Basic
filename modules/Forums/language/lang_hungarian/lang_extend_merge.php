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
    $lang['Lang_extend_merge'] = 'Összefésüléss';
}

$lang['Refresh'] = 'Frissítés';
$lang['Merge_topics'] = 'Témák összefüzése';
$lang['Merge_title'] = 'Új téma címe';
$lang['Merge_title_explain'] = 'Új cím megadása a témának. Ha üressen hagyod akkot nem jelenik meg';
$lang['Merge_topic_from'] = 'Témák összefüzése';
$lang['Merge_topic_from_explain'] = 'Ezt a témát összefüzni egy másik témával. Téma száma (ID), Téma elérése (URL).';
$lang['Merge_topic_to'] = 'Téma visszaállítás';
$lang['Merge_topic_to_explain'] = 'A témával mozgatod a hozzászólásokat is. Add meg a téma számát (ID), az elérést a témához (URL), hozzászolásokat a témához';
$lang['Merge_from_not_found'] = 'Kiválasztott téma összevonás\létezõ';
$lang['Merge_to_not_found'] = 'Kiválasztott téma összevonás\létezõ';
$lang['Merge_topics_equals'] = 'Biztos, hogy\összemozgatod a témákat';
$lang['Merge_from_not_authorized'] = 'You are not a authorized to moderate topics coming from the forum of the topic to merge';
$lang['Merge_to_not_authorized'] =  'You are not a authorized to moderate topics coming from the forum of the destination topic';
$lang['Merge_poll_from'] = 'Szavazások a témával összevonva. Bemásolva a kiválasztott témához';
$lang['Merge_poll_from_and_to'] = 'A témák szavazásokat tartalmaznak. Szavazások az összevonással törlödnek';
$lang['Merge_confirm_process'] = 'Biztos, hogy összeakarod vonni <br />"<b>%s</b>"<br />val<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'A témák összevonva.';

?>