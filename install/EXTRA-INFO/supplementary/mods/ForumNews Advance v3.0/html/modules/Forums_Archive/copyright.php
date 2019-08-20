<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*                                                                       */
/*************************************************************************/

define('CP_INCLUDE_DIR', dirname(dirname(dirname(__FILE__))));
include(CP_INCLUDE_DIR.'/includes/showcp.php');

$author_name = "Mighty_Y";
$author_email = "";
$author_homepage = "http://www.code-area51.com";
$license = "GNU/GPL";
$download_location = "http://www.code-area51.com";
$module_version = "2.0.0";
$module_description = "Archive for the past ForumNews Articles, part of the ForumNews package";

show_copyright($author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description);

?>