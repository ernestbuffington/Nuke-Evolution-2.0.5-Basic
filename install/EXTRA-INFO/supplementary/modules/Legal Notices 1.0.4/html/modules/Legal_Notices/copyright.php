<?php

/************************************************************************/
/* Cms Revolution: Advanced Website Portal System                       */
/************************************************************************/
/* Copyright (c) 2006 by paragon-entity (www.paragon-entity.com)        */
/* http://cmsrevolution.com                                             */
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

$author_name = "Revolution";
$license = "GNU/GPL";
$author_email = "support@cmsrevolution.com";
$author_homepage = "http://www.cmsrevolution.com";
$download_location = "http://www.cmsrevolution.com";
$module_name = "Legal Notices";
$module_version = "1.0";
$module_description = "Legal Notices Module is a complete legal notification";

// DO NOT TOUCH THE FOLLOWING COPYRIGHT CODE. YOU'RE JUST ALLOWED TO CHANGE YOUR "OWN"
// MODULE'S DATA (SEE ABOVE) SO THE SYSTEM CAN BE ABLE TO SHOW THE COPYRIGHT NOTICE
// FOR YOUR MODULE/ADDON. PLAY FAIR WITH THE PEOPLE THAT WORKED CODING WHAT YOU USE!!
// YOU ARE NOT ALLOWED TO MODIFY ANYTHING ELSE THAN THE ABOVE REQUIRED INFORMATION.
// AND YOU ARE NOT ALLOWED TO DELETE THIS FILE NOR TO CHANGE ANYTHING FROM THIS FILE IF
// YOU'RE NOT THIS MODULE'S AUTHOR.

function show_copyright() {
    global $author_name, $author_email, $author_homepage, $license, $download_location, $module_name, $module_version, $module_description;
    if ($author_name == "") { $author_name = "N/A"; }
    if ($author_email == "") { $author_email = "N/A"; }
    if ($author_homepage == "") { $author_homepage = "N/A"; }
    if ($license == "") { $license = "N/A"; }
    if ($download_location == "") { $download_location = "N/A"; }
    if ($module_version == "") { $module_version = "N/A"; }
    if ($module_description == "") { $module_description = "N/A"; }
    echo "<html>\n"
                ."<body bgcolor=\"#FFFFFF\" link=\"#363636\" alink=\"#363636\" vlink=\"#363636\">\n"
                ."<title>$module_name: Copyright Information</title>\n"
                ."<font size=\"2\" color=\"#363636\" face=\"Verdana, Helvetica\">\n"
                ."<center><strong>Module Copyright &copy; Information</strong><br />"
                ."$module_name Module for <a href=\"http://phpnuke.org\" target=\"new\">PHP-Nuke</a><br /><br /></center>\n"				
                ."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<strong>Module's Name:</strong> $module_name<br />\n"
                ."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<strong>Module's Version:</strong> $module_version<br />\n"
                ."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<strong>Module's Description:</strong> $module_description<br />\n"
                ."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<strong>License:</strong> $license<br />\n"
                ."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<strong>Author's Name:</strong> $author_name<br /><br />\n"
                ."<center>[ <a href=\"$author_homepage\" target=\"new\">Author's HomePage</a> | <a href=\"$download_location\" target=\"new\">Module's Download</a> | <a href=\"javascript:void(0)\" onClick=javascript:self.close()>Close</a> ]</center>\n"
                ."</font>\n"
                ."</body>\n"
                ."</html>";
}

show_copyright();


?>