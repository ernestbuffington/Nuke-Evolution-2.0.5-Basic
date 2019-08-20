<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team - Nuke-Evolution.com

   Filename      : block-Google.php
   Author        : LombudXa (Rodmar) (www.evolved-Systems.net)
   Version       : 1.5.0
   Date          : 01/14/2006 (mm-dd-yyyy)

   Description   : Google Block lets you search directly from your
                   website. You also can search search in your own domain
                   via Google's domain search.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

global $nukeurl, $ThemeSel, $sitename, $bgcolor1;

/*****[BEGIN]******************************************
 [ Configuration:                                     ]
 ******************************************************/
$URLGoogle = 'http://www.google.com/';          // URL from where google will search; change it to match your country if you like
$URLGoogleCustom = $URLGoogle . 'custom';       // Do not change this unless you know what you are doing
$domainGoogle = $nukeurl;                       // Domain of your web page where google has to search
$webGoogle = $nukeurl;                          // Your web page URL

$logoHeighGoogle = "50";                        // Logo Height (max: 50)
$logoWidthGoogle = "425";                       // Logo Width
$logoGoogle = $nukeurl.'/images/logo.gif';      // Website Logo Path
$imageGoogle = '/images/powered/google.gif';    // Google image

$headerBGGoogle = $bgcolor1;                    //color of result page's header background
$bgGoogle = $bgcolor1;                          //results page background
/*****[END]********************************************
 [ Configuration:                                     ]
 ******************************************************/

$content = "<!-- Powered by evolved-Systems.net Google SiteSearch -->"
             ."<form method=\"get\" action=\"".$URLGoogleCustom."\" target=\"google_window\">"
               ."<table align=\"center\">"
                 ."<tr>"
               ."<td nowrap=\"nowrap\" valign=\"top\" align=\"center\">"
               ."<a href=\"".$URLGoogle."\">"
               ."<img src=\"".$imageGoogle."\" border=\"0\" alt=\"Google\"></a></td>"
             ."</tr>"
             ."<tr>"
               ."<td align=\"center\"><input type=\"hidden\" name=\"domains\" value=\"".$nukeurl."\">"
               ."<input type=\"text\" name=\"q\" size=\"18\" maxlength=\"255\" value=\"\"></td>"
             ."</tr>"
             ."<tr>"
               ."<td align=\"center\"><input type=\"submit\" name=\"sa\" value=\""._SEARCH."\"></td>"
             ."</tr>"
             ."<tr>"
               ."<td><br /><span size=\"-1\">"
                 ."<input type=\"radio\" name=\"sitesearch\" value=\"\" checked=\"checked\"> Web "
                 ."<input type=\"radio\" name=\"sitesearch\" value=\"".$nukeurl."\"> ".$sitename.""
               ."</span>"
                 ."<input type=\"hidden\" name=\"client\" value=\"pub-2213784782027146\">"
                 ."<input type=\"hidden\" name=\"forid\" value=\"1\">"
                 ."<input type=\"hidden\" name=\"channel\" value=\"1795587205\">"
                 ."<input type=\"hidden\" name=\"ie\" value=\"ISO-8859-1\">"
                 ."<input type=\"hidden\" name=\"oe\" value=\"ISO-8859-1\">"
                 ."<input type=\"hidden\" name=\"cof\" value=\"GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:".$bgGoogle.";LBGC:".$headerBGGoogle.";ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;LH:".$logoHeighGoogle.";LW:".$logoWidthGoogle.";L:".$logoGoogle.";S:".$nukeurl.";FORID:1;\">"
                 ."<input type=\"hidden\" name=\"hl\" value=\"en\">"
               ."<br /></td></tr>"
               ."</table>"
             ."</form>"
          ."<!-- Powered by evolved-Systems.net Google SiteSearch -->";

?>