<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : block-Nuke-Evolution.php
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
$content = "<marquee scrollamount='5' onmouseover='this.scrollAmount=1' onmouseout='this.scrollAmount=5' onmousedown='this.scrollAmount=0' onmouseup='this.scrollAmount=1'>";
$content .= "<a href=\"http://www.nuke-evolution.com\" target=\"_blank\"><img src=\"images/evo/minilogo.gif\" alt=\"\" border=\"0\" /></a>";
$content .= "<a href=\"http://www.Evo-Mods.com\" target=\"_blank\"><img src=\"images/evo/evomods.gif\" alt=\"\" border=\"0\" /></a>";
$content .= "<a href=\"http://www.website-portals.net\" target=\"_blank\"><img src=\"images/evo/cmsrev.jpg\" alt=\"\" border=\"0\" /></a>";
$content .= "</marquee>";

?>