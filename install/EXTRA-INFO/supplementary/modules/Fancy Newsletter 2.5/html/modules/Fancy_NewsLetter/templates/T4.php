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

$emailbody = "<!-- Hai Your system does not enable you to read the malls in HTML!  Here is the message: " . $inhalt . "
-->

<html>
<body bgcolor=\"#C0C0C0\">

<br /><center>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"95%\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
<tr><td width=\"274\" height=\"100\" background=\"".$nukeurl."/modules/".$module_name."/templates/T4/head-logo.png\" align=\"left\">
<a target=\"_blank\" href=\"".$nukeurl."\" title=\"Accédez à ".$sitename."\"><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T4/head-logo.png\" width=\"274\" height=\"100\"></a></td>
<td width=\"100%\" background=\"".$nukeurl."/modules/".$module_name."/templates/T4/head-c.png\">&nbsp;</td>
<td background=\"".$nukeurl."/modules/".$module_name."/templates/T4/head-r.png\">
<img name=\"headr0\" src=\"".$nukeurl."/modules/".$module_name."/templates/T4/head-r.png\" width=\"92\" height=\"100\" border=\"0\" align=\"right\" USEMAP=\"#head-r\" hspace=\"0\">
<map name=\"head-r\"><area shape=\"rect\" COORDS=\"37, 3, 82, 49\" href=mailto:$adminmail title=\"email from webmaster\"></map>
</td></tr></table></center>

<center><table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"95%\" bgcolor=\"#C0C0C0\">
<tr><td width=\"100%\"><center>
<table border=\"0\" cellspacing=\"8\" width=\"100%\"><tr>
<td width=\"33%\" bgcolor=\"#C0C0C0\" style=\"border-style: double; border-width: 3\" bordercolor=\"#666666\">&nbsp;Sent by $sender</td>
<td width=\"34%\" bgcolor=\"#C0C0C0\" style=\"border-style: double; border-width: 3\" bordercolor=\"#666666\">&nbsp;On ".FormatDate($datum)."</td>
<td width=\"33%\" bgcolor=\"#C0C0C0\" style=\"border-style: double; border-width: 3\" bordercolor=\"#666666\">&nbsp;Subject: $thema</td>
</tr><tr>
<td width=\"100%\" bgcolor=\"#FFFFFF\" colspan=\"3\" style=\"border-style: double; border-width: 3; padding: 6\">$inhalt <br /> $sign <br /><br /> $newsbody $downbody $wlbody $forumbody $totstats</td>
</tr></table></center></td></tr></table></center>

<center>
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"95%\" bgcolor=\"#666666\" bordercolor=\"#000000\">
<tr><td width=\"100%\">$unsub</td></tr></table></center><center>$banr</center>

</body>
</html>
";

?>