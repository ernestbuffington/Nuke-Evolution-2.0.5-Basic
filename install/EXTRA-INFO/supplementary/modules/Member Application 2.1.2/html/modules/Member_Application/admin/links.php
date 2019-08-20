<?php
/***************************************************************************
*                             Member Application
*                            -------------------
*   begin                : 13 Nov, 2005
*   copyright            : (C) 2005, 2006 Tim Leitz DrivenByFaith
*   email                : tim@drivenbyfaith.org
*
*   Id: memberapplication v 2.1.2 Tim Leitz
*   Primary Function    :   setup links for admin area
*	  run from			      :	  admin.php
*   file name           :   admin/links.php
*
***************************************************************************/
/***************************************************************************
*
*   This program is subject to the license agreement in the user manual.
*
***************************************************************************/

if ( !defined('ADMIN_FILE') )
{
  die("Illegal File Access");
}

if(!defined('NUKE_MODULES_DIR')) {
  define('NUKE_MODULES_DIR', "modules/" );
}

$module_name = basename(dirname(dirname(__FILE__)));

include(NUKE_MODULES_DIR . $module_name . "/version.php"); 

global $admin_file;

adminmenu("" .$admin_file. ".php?op=Member_Application", "Member Application V $MA_Version", "../../modules/Member_Application/images/MAlogo2.png");

?>