<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/* Journal 2.0 Enhanced and Debugged 2004                               */
/* by sixonetonoffun -- http://www.netflake.com --                      */
/* Images Created by GanjaUK -- http://www.GanjaUK.com                  */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/04/2005
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

##################################################
# Include some common header for HTML generation #
##################################################
define('HOME_FILE', true);
function head() {
    global $sitename, $pagetitle;
    $ThemeSel = get_theme();
    include_once(NUKE_THEMES_DIR.$ThemeSel.'/theme.php');
    echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "<title>$sitename $pagetitle</title>\n";
    include(NUKE_INCLUDE_DIR.'meta.php');
    include(NUKE_INCLUDE_DIR.'javascript.php');
    if (file_exists(NUKE_THEMES_DIR.$ThemeSel.'/images/favicon.ico')) {
        echo "<link rel=\"shortcut icon\" href=\"themes/$ThemeSel/images/favicon.ico\" type=\"image/x-icon\">\n";
    }
    if (file_exists("modules/Journal/styles/$ThemeSel/style/style.css")) {
        echo "<link rel=\"StyleSheet\" href=\"modules/Journal/styles/$ThemeSel/style/style.css\" type=\"text/css\">\n";
    } else {
        echo "<link rel=\"StyleSheet\" href=\"themes/$ThemeSel/style/style.css\" type=\"text/css\">\n";
    }
    if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_head.php')) {
        @include_once(NUKE_INCLUDE_DIR.'custom_files/custom_head.php');
    }
    if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_header.php')) {
        @include_once(NUKE_INCLUDE_DIR.'custom_files/custom_header.php');
    }
    echo "</head>\n";
    themeheader();
}

online();
head();

include_once(NUKE_INCLUDE_DIR.'counter.php');
if(defined('HOME_FILE')) {
    include_once(NUKE_INCLUDE_DIR.'messagebox.php');
    blocks('Center');
}

?>