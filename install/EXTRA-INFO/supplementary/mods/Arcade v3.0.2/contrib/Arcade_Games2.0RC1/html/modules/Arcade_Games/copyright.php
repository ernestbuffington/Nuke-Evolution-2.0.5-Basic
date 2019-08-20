<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

define('CP_INCLUDE_DIR', dirname(dirname(dirname(__FILE__))));
require_once(CP_INCLUDE_DIR.'/includes/showcp.php');

// To have the Copyright window work in your module just fill the following
// required information and then copy the file "copyright.php" into your
// module's directory. It's all, as easy as it sounds ;)

$author_name = "Rica";
$author_email = "ricalawaba00@ifrance.com";
$author_homepage = "http://www.thehorde.be";
$license = "freeware";
$download_location = "http://www.thehorde.be/modules.php?name=Downloads&amp;d_op=viewdownload&amp;cid=5";
$module_version = "2.0";
$module_description = "<br />Module for Nuke 6.5+ with block"
                    ."<br />for <a target=\"_blank\"href='http://www.nukearcade.com'>Arcade Mod V3+</a>"
                    ." from <a target=\"_blank\" href='http://www.nukearcade.com'>http://www.nukearcade.com</a>"
                    ."<br /> Implement an interface in PHP-Nuke for the 'Arcade Mod' phpBB ported mod"
                    ."<br />Search function, Last games, Last scores, Last played...";

// DO NOT TOUCH THE FOLLOWING COPYRIGHT CODE. YOU'RE JUST ALLOWED TO CHANGE YOUR "OWN"
// MODULE'S DATA (SEE ABOVE) SO THE SYSTEM CAN BE ABLE TO SHOW THE COPYRIGHT NOTICE
// FOR YOUR MODULE/ADDON. PLAY FAIR WITH THE PEOPLE THAT WORKED CODING WHAT YOU USE!!
// YOU ARE NOT ALLOWED TO MODIFY ANYTHING ELSE THAN THE ABOVE REQUIRED INFORMATION.
// AND YOU ARE NOT ALLOWED TO DELETE THIS FILE NOR TO CHANGE ANYTHING FROM THIS FILE IF
// YOU'RE NOT THIS MODULE'S AUTHOR.

show_copyright($author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description);

?>