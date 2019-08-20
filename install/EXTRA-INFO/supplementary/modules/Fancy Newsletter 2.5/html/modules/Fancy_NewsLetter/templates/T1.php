<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

$datum = date("Y-m-d");

function FormatDate($strDate) {
    $Adob = explode ("-",$strDate);
    $newdob = $Adob[2];
    if ($Adob[1] == 1)$month = _JANUARY;
    if ($Adob[1] == 2)$month = _FEBRUARY;
    if ($Adob[1] == 3)$month = _MARCH;
    if ($Adob[1] == 4)$month = _APRIL;
    if ($Adob[1] == 5)$month = _MAY;
    if ($Adob[1] == 6)$month = _JUNE;
    if ($Adob[1] == 7)$month = _JULY;
    if ($Adob[1] == 8)$month = _AUGUST;
    if ($Adob[1] == 9)$month = _SEPTEMBER;
    if ($Adob[1] == 10)$month = _OCTOBER;
    if ($Adob[1] == 11)$month = _NOVEMBER;
    if ($Adob[1] == 12)$month = _DECEMBER;
    $newdob = "".$newdob." ".$month." ".$Adob[0];
    return $newdob;
}

$emailbody = "<!-- Hai " . $name . " Your system does not enable you to read the malls in HTML, here is the message: " . $inhalt . " -->
<html><body><center><a target=\"_blank\" href=\"".$nukeurl."\">
<img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/images/logo.gif\" alt=\"".$sitename."\" title=\"Newsletter for ".$sitename."\"></a></center>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"90%\" height=29 align=\"center\"><tr>
<td width=\"8%\" height=29 background=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner.gif\" align=\"center\">
<p align=\"left\"><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner_l.gif\" width=\"19\" height=\"29\" alt=\"\"></td></p>
<td width=\"8%\" height=29 background=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner.gif\" align=\"center\">
<p align=\"right\"><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T1/title_left.gif\" width=\"5\" height=\"29\" alt=\"\"></p><td width=\"68%\" background=\"".$nukeurl."/modules/".$module_name."/templates/T1/title.gif\" align=\"center\">
<font class=storytitle><strong><font size=\"2\" face=\"Verdana\" class=\"storycat\" color=\"#FFFFFF\">Newsletter for ".$sitename."</font>
<font size=\"2\" face=\"Verdana\" class=\"storycat\" color=\"#EEEEEE\">".FormatDate($datum)."</font></strong></font></td>
<td width=\"8%\" background=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner.gif\" align=\"center\">
<p align=\"left\"><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T1/title_right.gif\" width=\"5\" height=\"29\" alt=\"\"></td></p>
<td width=\"8%\" background=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner.gif\" align=\"center\">
<p align=\"right\"><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T1/corner_r.gif\" width=\"19\" height=\"29\" alt=\"\"></td></p>
</tr></table><table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#eeeeee\" width=\"90%\" align=\"center\">
<tr><td bgcolor=\"#C0C0C0\">&nbsp;<strong><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Sent </font></strong><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>
by:</strong> $sender <strong>Subject:</strong>$thema</font><table border=\"0\" cellpadding=\"8\" cellspacing=\"3\" width=\"100%\" align=\"center\">
<tr><td width=\"100%\" bgcolor=\"#FFFFFF\"><br /><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$inhalt <br /> $sign <br /><br /> $newsbody $downbody $wlbody $forumbody $totstats</font></td>
</tr></table></td></tr></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"89%\" align=\"center\"><tr><td>
<center>$banr</center><br /><hr><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/images/watch.gif\" alt=\"\" valign=\"middle\"><font color=\"red\"><small> $unsub</small></font></td></tr></table>
</body></html>";

?>