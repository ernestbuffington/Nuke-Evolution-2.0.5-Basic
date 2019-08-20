<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = $pagename;
include_once(NUKE_BASE_DIR.'header.php');
title($pagetitle);
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>\n";
echo "<tr><td>This script will install, destall or upgrade the tables for the $pagename.</td></tr>\n";
echo "<tr><td><strong>Backup data tables before going on!</strong></td></tr>\n";
echo "<tr><td><select name='op'>\n";
echo "<option value=''>---- Install Options ----</option>\n";
echo "<option value='install'>First Time Install of $pagename</option>\n";
echo "<option value=''>---- Upgrade Options ----</option>\n";
echo "<option value='100-101'>Upgrade $pagename 1.0.0 to 1.0.1</option>\n";
echo "<option value='101-102'>Upgrade $pagename 1.0.1 to 1.0.2</option>\n";
echo "<option value='102-103'>Upgrade $pagename 1.0.2 to 1.0.3</option>\n";
echo "<option value='103-110'>Upgrade $pagename 1.0.3 to 1.1.0</option>\n";
echo "<option value=''>---- Destall Options ----</option>\n";
echo "<option value='destall'>Destall $pagename</option>\n";
echo "</select> <input type='submit' value='COMMIT'></td></tr>\n";
echo "<tr><td><strong>Once you have finished with this script, delete it from your server!</strong></td></tr>\n";
echo "</form>";
echo "</table><br />\n";
echo "<table border='0' cellpadding='0' cellspacing='0' align='center'>\n";
echo "<tr><td width='100%' align='center'><strong>Help Support NukeScripts(tm)</strong></td></tr>\n";
echo "<tr><td width='100%' align='center'><a href='http://www.nukescripts.net/modules.php?name=Donations'><img src='https://www.paypal.com/en_US/i/btn/x-click-but21.gif' border='0' alt='Make donations with PayPal!'  align='center'></a></td></tr>\n";
echo "</table>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>