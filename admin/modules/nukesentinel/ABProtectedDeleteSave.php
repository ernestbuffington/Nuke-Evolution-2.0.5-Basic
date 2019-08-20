<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$db->sql_query("DELETE FROM `".$prefix."_nsnst_protected_ranges` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi'");
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_protected_ranges`");
Header("Location: ".$admin_file.".php?op=$xop&min=$min&column=$column&direction=$direction&sip=$sip");

?>