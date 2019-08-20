<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

//####################::GnaUnited.com Presents::####################\\
//  Project: My Uploads                                             \\
//  Public Version: 4.4 Unregistered                                \\
//  Technical Version: 4.4.0                                        \\
//  Package Name: My_Uploads4.4.UNREG.ZIP                           \\
//  License: Commercial                                             \\
//##################################################################\\

define('CP_INCLUDE_DIR', dirname(dirname(dirname(__FILE__))));
include(CP_INCLUDE_DIR.'/includes/showcp.php');

$author_name = "Alex Hession";
$author_user_email = "my_uploads@gnaunited.com";
$author_homepage = "http://www.gnaunited.com";
$license = "GNU/GPL";
$download_location = "http://ds1.gnaunited.com/my_uploads";
$module_version = "4.4 Unregistered";
$module_description = "This module allows your users to have a set amount of space on your webserver.";

// DO NOT TOUCH THE FOLLOWING COPYRIGHT CODE. YOU'RE JUST ALLOWED TO CHANGE YOUR "OWN"
// MODULE'S DATA (SEE ABOVE) SO THE SYSTEM CAN BE ABLE TO SHOW THE COPYRIGHT NOTICE
// FOR YOUR MODULE/ADDON. PLAY FAIR WITH THE PEOPLE THAT WORKED CODING WHAT YOU USE!!
// YOU ARE NOT ALLOWED TO MODIFY ANYTHING ELSE THAN THE ABOVE REQUIRED INFORMATION.
// AND YOU ARE NOT ALLOWED TO DELETE THIS FILE NOR TO CHANGE ANYTHING FROM THIS FILE IF
// YOU'RE NOT THIS MODULE'S AUTHOR.

show_copyright($author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description);

?>