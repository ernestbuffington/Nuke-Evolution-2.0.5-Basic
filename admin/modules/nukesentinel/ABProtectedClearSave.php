<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$result = $db->sql_query("DELETE FROM `".$prefix."_nsnst_protected_ranges`");
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_protected_ranges`");
Header("Location: ".$admin_file.".php?op=ABProtectedMenu");

?>