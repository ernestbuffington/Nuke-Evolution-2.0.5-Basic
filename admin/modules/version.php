<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Content Management System
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : case.version.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 1.0.0
   Date          : 06/16/2005 (dd-mm-yyyy)

   Notes         : Verifies if latest Nuke-Evolution Basic Release is
                   installed and a recent changelog.
************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
      Evolution Version Checker                v1.0.0       06/16/2005
      Caching System                           v1.0.0       10/31/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Illegal File Access");
}
define(CUR_EVO, strtolower(EVO_EDITION));
function evo_check_version() {
    $ver = evo_get_version();
    return (NUKE_EVO == $ver) ? 0 : 1;
}

function evo_get_version() {

    if(evo_site_down()) {
        return NUKE_EVO;
    }
    $contents = @file_get_contents('http://www.nuke-evolution.com/version_'.CUR_EVO.'.txt');

    if(substr($contents,strlen($contents)-1) == "\n") {
        $contents = substr($contents,0,strlen($contents)-1);
    }

    return $contents;
}

function evo_compare() {
    global $db, $prefix, $cache;

    $check = evo_check_version();
    if($check == 0) {
        $sql_ver = "UPDATE ".$prefix."_evolution SET evo_value = '0' WHERE evo_field='ver_previous'";
        $db->sql_query($sql_ver);
/*****[BEGIN]******************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
        $cache->delete('evoconfig');
/*****[END]********************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
        return "<strong><span style='color:green'>"._ADMIN_VER_CUR."</span></strong>";
    }
    $current = NUKE_EVO;
    $s = strpos($log_raw,$current);
    if(!$s) {
        return -1;
    }
    return $log_evo;
}

function evo_changelog() {
    $data = @file('http://www.nuke-evolution.com/changelog_'.CUR_EVO.'.txt');
    $log_evo = "<table width='100%'>";
    $names = array(
                "TECHNOCRAT" => "Technocrat",
                "JEFFB68CAM" => "JeFFb68CAM",
                "REVOLUTION" => "Revolution",
                "QUAKE" => "Quake",
                "KREAGON" => "Kreagon",
                "DANUK" => "DanUK",
                "LTABDIEL" => "Ltabdiel",
                "JELLE" => "Jelle",
                "RODMAR" => "Rodmar",
                "PLATINUMTHEMES" => "PlatinumThemes",
                "DIEDIEDIE" => "Diediedie",
                "TULISAN" => "Tulisan",
                "REORGANISATION" => "ReOrGaNiSaTiOn"
            );
    for($i=0, $maxi=count($data);$i<$maxi;$i++) {
        $line = $data[$i];
        if(stristr($line, " - [")) {
            $log_evo .= "<tr><td style='text-indent: 15pt;'>";
            $log_evo .= htmlspecialchars($line);
            $log_evo .= "</td></tr>";
        } else {
            $line = trim($line);
            $line = isset($names[strtoupper($line)]) ? "<strong><u>" . $names[strtoupper($line)] . "</u></strong>" : $line;
            $log_evo .= "<tr><td>";
            $log_evo .= $line;
            $log_evo .= "</td></tr>";
        }
    }
    $log_evo .= "</table>";
    return $log_evo;
}

function evo_get_download() {
    global $evo;

    if (evo_site_down()) {
        return false;
    }

    $contents = @file_get_contents('http://www.nuke-evolution.com/download_'.CUR_EVO.'.txt');

    if(substr($contents,strlen($contents)-1) == "\n") {
        $contents = substr($contents,0,strlen($contents)-1);
    }

    return $contents;
}

function evo_version() {
    global $db, $prefix, $admin_file;

    echo "<center>";
    echo "<strong><span class=\"title\">"._VER_TITLE."</span></strong><br /><br />";

    $ret_ver = evo_get_version();
    if(!$ret_ver) {
        echo "<strong><span style='color:red'>"._VER_ERR_CON."</span></strong>";
    } else {
        echo "<strong><span style='color:blue'>"._VER_VER."</span></strong> ".$ret_ver." ".EVO_EDITION."<br /><strong><span style='color:blue'>"._VER_YOURVER."</span></strong> ".EVO_VERSION."<br /></center>";
        $log_evo = evo_changelog();
        if($download = evo_get_download()) {
            $log_evo = "<strong><a href='".$download."'>Download v".$ret_ver."</a></strong><br /><br />". $log_evo;
            $log_evo .= "<br /><br /><strong><a href='".$download."'>Download v".$ret_ver."</a></strong>";
        }
        echo $log_evo;
        echo "<center>";
    }
    echo "<br /><br /><strong><a href='".$admin_file.".php'>"._TRACKER_BACK."</a></strong>";
    echo "</center>";
}

global $prefix, $db;
if (is_mod_admin()) {

    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    switch ($op) {
        case "version":
            evo_version();
        break;
    }
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
} else {
    echo "Access Denied";
}

?>