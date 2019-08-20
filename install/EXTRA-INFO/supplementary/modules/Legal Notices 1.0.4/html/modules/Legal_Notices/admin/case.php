<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
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

    if (!defined('ADMIN_FILE')) {
	    die ("Access Denied");
   }

    $module_name = "Legal_Notices";
    include_once("modules/$module_name/admin/language/lang-".$currentlang.".php");

switch($op) {

    case "legalmenu":
    case "legal":
    case "legalprivacy":
    case "legalterms":
    include("modules/$module_name/admin/index.php");
    break;

}

?>