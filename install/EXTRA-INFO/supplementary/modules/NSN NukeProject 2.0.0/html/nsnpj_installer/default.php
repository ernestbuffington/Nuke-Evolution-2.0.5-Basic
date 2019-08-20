<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeProject(tm)                                      */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo $label;
echo $warning;
echo "<tr><td><select name='op'>\n";
echo "<option value=''>---- Install Options ----</option>\n";
echo "<option value='install'>First Time Install of $pagename</option>\n";
echo "<option value=''>---- Removal Options ----</option>\n";
echo "<option value='remove'>Remove $pagename tables</option>\n";
echo "<option value='remove_wb'>Remove NSN Work Board tables</option>\n";
echo "<option value='remove_wp'>Remove NSN Work Probe tables</option>\n";
echo "<option value='remove_wr'>Remove NSN Work Request tables</option>\n";
echo "</select> <input type='submit' value='COMMIT'></td></tr>\n";
echo "</table>\n";
echo "</form>";
echo "<br /><table border='0' cellpadding='0' cellspacing='0' align='center'>\n";
echo "<tr><td width='100%' align='center'><strong>Help Support NukeScripts(tm)</strong></td></tr>\n";
echo "<tr><td width='100%' align='center'><a href='http://www.nukescripts.net/modules.php?name=Donations'><img src='https://www.paypal.com/en_US/i/btn/x-click-but21.gif' border='0' alt='Make donations with PayPal!'  align='center'></a></td></tr>\n";
echo "</table>\n";

?>