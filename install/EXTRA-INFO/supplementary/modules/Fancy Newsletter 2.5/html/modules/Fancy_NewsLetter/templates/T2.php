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

$emailbody = "<!-- ".$lang_textmsg." " . $inhalt . " -->
<html><body>
<center><table width='90%' border='0'>
<tr><td align='center' valign='middle' ><a target=\"_blank\" href=\"".$nukeurl."\">
<img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/images/logo.gif\" alt=\"".$sitename."\" title=\"Newsletter from ".$sitename."\"></a>
</td></tr><tr><td align='center' valign='top'> <table cellSpacing=0 cellPadding=5 width='100%' border=0>
<tbody><tr><td><table cellSpacing=0 cellPadding=0 width='100%' border=0><tbody><tr><td valign=bottom align=right width=50><img height=28 alt=''
src='".$nukeurl."/modules/".$module_name."/templates/T2/top_left.gif' width=50 border=0></td>
<td valign=center align=middle width='100%' background=".$nukeurl."/modules/".$module_name."/templates/T2/top_center.gif><font class=storytitle><strong><font size='2' face='Verdana, Arial, Helvetica, sans-serif'
class=storycat>".$sitename." Newsletter: ".FormatDate($datum)."</font></strong></font></td>
<td valign=bottom align=left width=50><img height=28 alt='' src='".$nukeurl."/modules/".$module_name."/templates/T2/top_right.gif' width=50 border=0></td></tr></tbody></table>
<table cellSpacing=0 cellPadding=0 width='100%' border=0><tbody><tr><td bgColor=#006699> <table cellSpacing=0 cellPadding=0 width='100%' border=0>
<tbody><tr><td bgColor=#525e6e> <table cellSpacing=1 cellPadding=1 width='100%' border=0><tbody><tr>
<td background=".$nukeurl."/modules/".$module_name."/templates/T2/bg_cat.gif bgColor=#ffcc00 height=30><DIV align=center> <font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Sent By: $lang_sendfrom</strong> $sender <strong> - <strong>Subject:</strong>$lang_mailtopic</strong>
$thema</font></div></td></tr><tr><td bgColor=#eaedf4> <table cellSpacing=0 cellPadding=8 width='100%' border=0><tbody><tr>
<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>$inhalt <br /> $sign <br /><br /> $newsbody $downbody $wlbody $forumbody $totstats</font>
</font></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
<table cellSpacing=0 cellPadding=0 width='100%' border=0><tbody><tr><td valign=top align=right width=40><img height=9 alt=''
src='".$nukeurl."/modules/".$module_name."/templates/T2/bottom_left.gif' width=40 border=0></td>
<td width='100%' background=".$nukeurl."/modules/".$module_name."/templates/T2/bottom_center.gif><img height=1 alt='' src='".$nukeurl."/modules/".$module_name."/templates/T2/spacer.gif' width=1 border=0></td>
<td valign=top align=left width=40><img height=9 alt='' src='".$nukeurl."/modules/".$module_name."/templates/T2/bottom_right.gif' width=40 border=0></td>
</tr></tbody></table></td></tr></tbody></table></td></tr></table></center>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"89%\" align=\"center\"><tr><td>
<center>$banr</center><br /><hr><img border=\"0\" src=\"".$nukeurl."/modules/".$module_name."/images/watch.gif\" valign=middle><font color=\"red\"><small> $unsub</small></font></td></tr></table></body></html>";

?>