<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : block-Link_to_us.php
   Author        : Nuke-Evolution Team
   Version       : 1.0.0
   Date          : 08/19/2005 (dd-mm-yyyy)

   Notes         : Displays a small banner from your website with a code
                   box where visitors can grab the URL and link back to
                   your website.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/19/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

//Change to your image
//The image should be around 88x31
$img_url = 'images/evo/minilogo.gif';

global $nukeurl, $sitename;

if(substr($img_url,0,4) == "http") {
    $img_link = $img_url;
} else if(substr($img_url,0,1) == "/"){
    $img_link = $nukeurl . $img_url;
} else {
    $img_link = $nukeurl ."/". $img_url;
}

$content = "<center>";
    
//Image
$content .= "<a href=\"".$nukeurl."\">";
$content .= "<img src=\"".$img_url."\" alt=\"".$sitename."\" title=\"".$sitename."\" border=\"0\" />";
$content .= "</a><br /><br />";

//Text area and link
$content .= "<form action=\"\" method=\"post\">";
$content .= "<textarea name=\"linktous\" cols=\"15\" rows=\"4\" readonly=\"readonly\">&lt;a href=&quot;".$nukeurl."&quot;&gt;&lt;img src=&quot;".$img_link."&quot; alt=&quot;".$sitename."&quot; title=&quot;".$sitename."&quot; border=&quot;0&quot; /&gt;&lt;/a&gt;</textarea>";
$content .= "</form>";

$content .= "</center>";

?>