<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Admin Menu
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : java_admin_menu.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 1.0.3
   Date          : 01/06/2005 (mm-dd-yyyy)

   Notes         : Adds a java-based admin menu to the admin area
************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

if(is_admin()) {
    $menu_user = cookiedecode();

    $menu_filename = NUKE_INCLUDE_DIR.'menu/'.strtolower($menu_user[1]).'.mnu';
    if(is_file($menu_filename)) {
        if($handle = @fopen($menu_filename,"r")) {
            $content = @fread($handle, filesize($menu_filename));
            @fclose($handle);
        }
    }
    if (!empty($content) && isset($content)) {

        function mnu_decode($content) {
            //Check to make sure there are the items to decode
            if(!preg_match('/.*(NSNST|USERNAME|NUMBROKENL|NUMWAITL|NUMMODREQL|NUMSUPPEN|NUMSUPACT|NUMSUPDEA|SITENAME|NUMWAITS|NUMBROKEN|NUMWAITD|NUMMODREQD|BANNERSINACTIVE|BANNERSACTIVE|NUMWAITREVIEWS|CACHENABLED|CACHELAST|CACHEFILES|CACHEDIR).*/',$content)){
                return $content;
            }
            $pos = strpos($content, 'USERNAME');
            if($pos !== false) {
                $menu_user = cookiedecode();
                $content = str_replace('USERNAME', $menu_user[1], $content);
            }
                $pos = strpos($content, 'NUMBROKENL');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numbrokenl = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_links_modrequest WHERE brokenlink='1'"));
                        $numbrokenl = $numbrokenl['numrows'];
                $content = str_replace('NUMBROKENL', $numbrokenl, $content);
            }
                $pos = strpos($content, 'NUMMODREQL');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $nummodreql = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_links_modrequest WHERE brokenlink='0'"));
                        $nummodreql = $nummodreql['numrows'];
                $content = str_replace('NUMMODREQL', $nummodreql, $content);
            }
                $pos = strpos($content, 'NUMSUPPEN');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numsuppen = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_nsnsp_sites WHERE site_status='0'"));
                        $numsuppen = $numsuppen['numrows'];
                $content = str_replace('NUMSUPPEN', $numsuppen, $content);
            }
                $pos = strpos($content, 'NUMWAITL');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numwaitl = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_links_newlink"));
                        $numwaitl = $numwaitl['numrows'];
                $content = str_replace('NUMWAITL', $numwaitl, $content);
            }
                $pos = strpos($content, 'NUMSUPACT');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numsupact = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_nsnsp_sites WHERE site_status='1'"));
                        $numsupact = $numsupact['numrows'];
                $content = str_replace('NUMSUPACT', $numsupact, $content);
            }
                $pos = strpos($content, 'NUMSUPDEA');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numsupdea = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_nsnsp_sites WHERE site_status='-1'"));
                        $numsupdea = $numsupdea['numrows'];
                $content = str_replace('NUMSUPDEA', $numsupdea, $content);
            }
                $pos = strpos($content, 'NUMWAITS');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numwaits = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_queue"));
                        $numwaits = $numwaits['numrows'];
                $content = str_replace('NUMWAITS', $numwaits, $content);
            }
                $pos = strpos($content, 'NUMBROKEN');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numbrokend = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_downloads_mods WHERE brokendownload='1'"));
                        $numbrokend = $numbrokend['numrows'];
                $content = str_replace('NUMBROKEN', $numbrokend, $content);
            }
                $pos = strpos($content, 'NUMWAITD');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numwaitd = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_downloads_new"));
                        $numwaitd = $numwaitd['numrows'];
                $content = str_replace('NUMWAITD', $numwaitd, $content);
            }
                $pos = strpos($content, 'BANNERSINACTIVE');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $inactive = $db->sql_numrows($db->sql_query("SELECT bid FROM " . $prefix . "_banner WHERE active='0'"));
                $content = str_replace('BANNERSINACTIVE', $inactive, $content);
            }
                $pos = strpos($content, 'BANNERSACTIVE');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $active = $db->sql_numrows($db->sql_query("SELECT bid FROM " . $prefix . "_banner WHERE active='1'"));
                $content = str_replace('BANNERSACTIVE', $active, $content);
            }
                $pos = strpos($content, 'NUMWAITREVIEWS');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $numwaitreviews = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_reviews_add"));
                        $numwaitreviews = $numwaitreviews['numrows'];
                $content = str_replace('NUMWAITREVIEWS', $numwaitreviews, $content);
            }
                $pos = strpos($content, 'NUMMODREQD');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                        $nummodreqd = $db->sql_fetchrow($db->sql_query("SELECT COUNT(*) AS numrows FROM ".$prefix."_downloads_mods WHERE brokendownload='0'"));
                        $nummodreqd = $nummodreqd['numrows'];
                $content = str_replace('NUMMODREQD', $nummodreqd, $content);
            }
            $pos = strpos($content, 'NSNST');
            if($pos !== false) {
                global $prefix, $db, $admin_file;
                $total_ips = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ips`"));
                $total_ips = intval($total_ips);
                $content = str_replace('NSNST', $total_ips, $content);
            }
	    $pos = strpos($content, 'CACHENABLED');
	    if($pos != false) {
		global $admin_file, $evoconfig, $usrclearcache, $cache;
		$enabled = ($cache->valid) ? "<font color='green'>" . Enabled . "</font>" : "<font color='red'>" . Disabled . "</font>";
		$content = str_replace('CACHENABLED', $enabled, $content);
	    }
	    $pos = strpos($content, 'CACHELAST');
	    if($pos != false) {
		global $admin_file, $evoconfig, $usrclearcache, $cache;
		$last_cleared = date('m/j/y', $evoconfig['cache_last_cleared']);
		$content = str_replace('CACHELAST', $last_cleared, $content);
	    }
	    $pos = strpos($content, 'CACHEFILES');
	    if($pos != false) {
		global $admin_file, $evoconfig, $usrclearcache, $cache;
		$cache_num_files = $cache->count_rows();
		$content = str_replace('CACHEFILES', $cache_num_files, $content);
	    }
	    $pos = strpos($content, 'CACHEDIR');
	    if($pos != false) {
		global $admin_file, $evoconfig, $usrclearcache, $cache;
		$cache_good = (is_writable(NUKE_CACHE_DIR) && !ini_get('safe_mode')) ? "<font color='green'>" . Good . "</font>" : "<font color='red'>" . Bad . "</font>";
		$content = str_replace('CACHEDIR', $cache_good, $content);
	    }
            global $sitename;
            $content = str_replace('SITENAME', $sitename, $content);
            return $content;
        }
        function mnu_admin($content){
            global $admin_file;
            if($admin_file != 'admin') {
                $content = str_replace('admin.php', $admin_file.'.php', $content);
            }
            return $content;
        }
     $content = mnu_decode($content);
     $content = mnu_admin($content);
    echo "<script type=\"text/javascript\">\n";    
    echo "
//Static Slide Menu 6.5 © MaXimuS 2000-2001, All Rights Reserved.
//Site: http://www.absolutegb.com/maximus
//Script featured on Dynamic Drive (http://www.dynamicdrive.com)

NS6 = (document.getElementById&&!document.all)
IE = (document.all)
NS = (navigator.appName==\"Netscape\" && navigator.appVersion.charAt(0)==\"4\")

tempBar='';barBuilt=0;ssmItems=new Array();

function truebody(){
return (document.compatMode!=\"BackCompat\")? document.documentElement : document.body
}

moving=setTimeout('null',1)
function moveOut() {
if ((NS6||NS)&&parseInt(ssm.left)<0 || IE && ssm.pixelLeft<0) {
clearTimeout(moving);moving = setTimeout('moveOut()', slideSpeed);slideMenu(10)}
else {clearTimeout(moving);moving=setTimeout('null',1)}};
function moveBack() {clearTimeout(moving);moving = setTimeout('moveBack1()', waitTime)}
function moveBack1() {
if ((NS6||NS) && parseInt(ssm.left)>(-menuWidth) || IE && ssm.pixelLeft>(-menuWidth)) {
clearTimeout(moving);moving = setTimeout('moveBack1()', slideSpeed);slideMenu(-10)}
else {clearTimeout(moving);moving=setTimeout('null',1)}}
function slideMenu(num){
if (IE) {ssm.pixelLeft += num;}
if (NS6) {ssm.left = parseInt(ssm.left)+num+\"px\";}
if (NS) {ssm.left = parseInt(ssm.left)+num; bssm.clip.right+=num;bssm2.clip.right+=num;}}

function makeStatic() {
if (NS||NS6) {winY = window.pageYOffset;}
if (IE) {winY = truebody().scrollTop;}
if (NS6||IE||NS) {
if (winY!=lastY&&winY>YOffset-staticYOffset) {
smooth = .2 * (winY - lastY - YOffset + staticYOffset);}
else if (YOffset-staticYOffset+lastY>YOffset-staticYOffset) {
smooth = .2 * (winY - lastY - (YOffset-(YOffset-winY)));}
else {smooth=0}
if(smooth > 0) smooth = Math.ceil(smooth);
else smooth = Math.floor(smooth);
if (IE) bssm.pixelTop+=smooth;
if (NS6) bssm.top=parseInt(bssm.top)+smooth+\"px\"
if (NS) bssm.top=parseInt(bssm.top)+smooth
lastY = lastY+smooth;
setTimeout('makeStatic()', 1)}}

function buildBar() {
if(barText.indexOf('<IMG')>-1) {tempBar=barText}
else{for (b=0;b<barText.length;b++) {tempBar+=barText.charAt(b)+\"<br />\"}}
document.write('<td align=\"center\" rowspan=\"100\" width=\"'+barWidth+'\" bgcolor=\"'+barBGColor+'\" valign=\"'+barVAlign+'\"><p align=\"center\"><font face=\"'+barFontFamily+'\" Size=\"'+barFontSize+'\" COLOR=\"'+barFontColor+'\"><strong>'+tempBar+'</strong></font></p></TD>')}

function initSlide() {
if (NS6){ssm=document.getElementById(\"thessm\").style;bssm=document.getElementById(\"basessm\").style;
bssm.clip=\"rect(0 \"+document.getElementById(\"thessm\").offsetWidth+\" \"+document.getElementById(\"thessm\").offsetHeight+\" 0)\";ssm.visibility=\"visible\";}
else if (IE) {ssm=document.all(\"thessm\").style;bssm=document.all(\"basessm\").style
bssm.clip=\"rect(0 \"+thessm.offsetWidth+\" \"+thessm.offsetHeight+\" 0)\";bssm.visibility = \"visible\";}
else if (NS) {bssm=document.layers[\"basessm1\"];
bssm2=bssm.document.layers[\"basessm2\"];ssm=bssm2.document.layers[\"thessm\"];
bssm2.clip.left=0;ssm.visibility = \"show\";}
if (menuIsStatic==\"yes\") makeStatic();}

function buildMenu() {
if (IE||NS6) {document.write('<DIV ID=\"basessm\" style=\"visibility:hidden;Position : Absolute ;Left : '+XOffset+'px ;Top : '+YOffset+'px ;Z-Index : 20;width:'+(menuWidth+barWidth+10)+'px\"><DIV ID=\"thessm\" style=\"Position : Absolute ;Left : '+(-menuWidth)+'px ;Top : 0 ;Z-Index : 20;\" onmouseover=\"moveOut()\" onmouseout=\"moveBack()\">')}
if (NS) {document.write('<LAYER name=\"basessm1\" top=\"'+YOffset+'\" LEFT='+XOffset+' visibility=\"show\"><ILAYER name=\"basessm2\"><LAYER visibility=\"hide\" name=\"thessm\" bgcolor=\"'+menuBGColor+'\" left=\"'+(-menuWidth)+'\" onmouseover=\"moveOut()\" onmouseout=\"moveBack()\">')}
if (NS6){document.write('<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"'+(menuWidth+barWidth+2)+'px\" bgcolor=\"'+menuBGColor+'\"><TR><TD>')}
document.write('<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" width=\"'+(menuWidth+barWidth+2)+'px\" bgcolor=\"'+menuBGColor+'\">');
for(i=0;i<ssmItems.length;i++) {
if(!ssmItems[i][3]){ssmItems[i][3]=menuCols;ssmItems[i][5]=menuWidth-1}
else if(ssmItems[i][3]!=menuCols)ssmItems[i][5]=Math.round(menuWidth*(ssmItems[i][3]/menuCols)-1);
if(ssmItems[i-1]&&ssmItems[i-1][4]!=\"no\"){document.write('<TR>')}
if(!ssmItems[i][1]){
document.write('<td bgcolor=\"'+hdrBGColor+'\" HEIGHT=\"'+hdrHeight+'px\" ALIGN=\"'+hdrAlign+'\" VALIGN=\"'+hdrVAlign+'\" WIDTH=\"'+ssmItems[i][5]+'\" COLSPAN=\"'+ssmItems[i][3]+'\">&nbsp;<font face=\"'+hdrFontFamily+'\" Size=\"'+hdrFontSize+'\" COLOR=\"'+hdrFontColor+'\"><strong>'+ssmItems[i][0]+'</strong></font></td>')}
else {if(!ssmItems[i][2])ssmItems[i][2]=linkTarget;
document.write('<TD BGCOLOR=\"'+linkBGColor+'\" onmouseover=\"bgColor=\''+linkOverBGColor+'\'\" onmouseout=\"bgColor=\''+linkBGColor+'\'\" WIDTH=\"'+ssmItems[i][5]+'px\" COLSPAN=\"'+ssmItems[i][3]+'\"><ILAYER><LAYER onmouseover=\"bgColor=\''+linkOverBGColor+'\'\" onmouseout=\"bgColor=\''+linkBGColor+'\'\" WIDTH=\"100%\" ALIGN=\"'+linkAlign+'\"><DIV  ALIGN=\"'+linkAlign+'\"><FONT face=\"'+linkFontFamily+'\" Size=\"'+linkFontSize+'\">&nbsp;<A HREF=\"'+ssmItems[i][1]+'\" target=\"'+ssmItems[i][2]+'\" CLASS=\"ssmItems\">'+ssmItems[i][0]+'</DIV></LAYER></ILAYER></TD>')}
if(ssmItems[i][4]!=\"no\"&&barBuilt==0){buildBar();barBuilt=1}
if(ssmItems[i][4]!=\"no\"){document.write('</TR>')}}
document.write('</table>')
if (NS6){document.write('</TD></TR></TABLE>')}
if (IE||NS6) {document.write('</DIV></DIV>')}
if (NS) {document.write('</LAYER></ILAYER></LAYER>')}
theleft=-menuWidth;lastY=0;setTimeout('initSlide();', 1)}";
    echo "</script>\n";
    
    echo "<script type=\"text/javascript\">\n";
    echo '
<!--

/*
Configure menu styles below
NOTE: To edit the link colors, go to the STYLE tags and edit the ssm2Items colors
*/
YOffset=150; // no quotes!!
XOffset=0;
staticYOffset=30; // no quotes!!
slideSpeed=20 // no quotes!!
waitTime=100; // no quotes!! this sets the time the menu stays out for after the mouse goes off it.
menuBGColor="black";
menuIsStatic="yes"; //this sets whether menu should stay static on the screen
menuWidth=130; // Must be a multiple of 10! no quotes!!
menuCols=1;
hdrFontFamily="Arial";
hdrFontSize="-2";
hdrFontColor="white";
hdrBGColor="#170088";
hdrAlign="left";
hdrVAlign="center";
hdrHeight="10";
linkFontFamily="Arial";
linkFontSize="0";
linkBGColor="white";
linkOverBGColor="#FFFF99";
linkTarget="_top";
linkAlign="Left";
barBGColor="#444444";
barFontFamily="Arial";
barFontSize="0";
barFontColor="white";
barVAlign="center";
barWidth=15; // no quotes!!
barText="ADMIN MENU"; // <IMG> tag supported. Put exact html for an image to show.';
echo $content . "\n";
echo 'buildMenu();

//-->';
        echo "</script>\n\n";
    }
}

?>