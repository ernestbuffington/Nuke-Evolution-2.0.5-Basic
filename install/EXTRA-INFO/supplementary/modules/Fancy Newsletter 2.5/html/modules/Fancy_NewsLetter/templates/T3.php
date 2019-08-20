<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

$datum = date("Y-m-d");

function FormatDate($strDate){
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

$emailbody = "<!-- Your system does not enable you to read the malls in HTML, here the message: " . $inhalt . "  -->
<html><body><br /><center><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"90%\">
<tr><td width=\"262\" height=\"75\" background=".$nukeurl."/modules/".$module_name."/templates/T3/head_left.jpg>
<a target=\"_blank\" href=\"".$nukeurl."\" title=\"Sent From ".".$sitename."."\">
<img border=\"0\" src=".$nukeurl."/modules/".$module_name."/templates/T3/head_left.jpg width=\"262\" height=\"75\"></a></td>
<td background=".$nukeurl."/modules/".$module_name."/templates/T3/head_fill.jpg>&nbsp;</td>
<td width=\"50\" height=\"75\" background=".$nukeurl."/modules/".$module_name."/templates/T3/head_rigth.jpg>
<a href=mailto:$adminmail title=\"Email from Webmaster\">
<img border=\"0\" src=".$nukeurl."/modules/".$module_name."/templates/T3/head_rigth.jpg width=\"50\" height=\"75\"></a></td>
</tr></table></center><div align=\"center\"><center>
<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"90%\" style=\"border-collapse: collapse\"><tr>
<td colspan=3 width=\"99%\" align=\"left\" style=\"padding:1; \" bgcolor=\"#C0C0C0\">&nbsp;&nbsp;&nbsp;<font face=\"Verdana\" size=\"2\" color=\"black\"><strong>Sent by</strong> $sender <strong>on</strong> ".FormatDate($datum)." <strong>Subject:</strong> $thema</font></td></tr>
<tr><td colspan=3 width=\"99%\" align=\"left\" style=\"border-style: double; border-width: 3; padding-left: 8; padding-right: 3; padding-top: 1; padding-bottom: 1\" bordercolor=\"#C0C0C0\">
<br /><font face=\"Verdana\" size=\"2\" sans-serif, Helvetica, Arial>$inhalt <br /> $sign <br /><br /> $newsbody $downbody $wlbody $forumbody $totstats</font></td></tr></table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" width=\"90%\"><tr>
<td width=\"262\" height=\"20\" background=".$nukeurl."/modules/".$module_name."/templates/T3/bot_left.jpg>
<td background=".$nukeurl."/modules/".$module_name."/templates/T3/bot_fill.jpg>&nbsp;</td>
<td width=\"50\" height=\"20\" background=".$nukeurl."/modules/".$module_name."/templates/T3/bot_rigth.jpg></td></tr></table></center></div>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"89%\" align=\"center\"><tr><td>
<center>$banr</center><br />$unsub</td></tr></table>
</body>
</html>
";

?>