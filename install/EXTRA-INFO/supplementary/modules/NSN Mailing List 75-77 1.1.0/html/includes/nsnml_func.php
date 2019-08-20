<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/05/2005
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$mlpending = time();
$mlexpired = $mlpending - 86400;
$db->sql_query("DELETE FROM `".$prefix."_nsnml_users` WHERE `joined` < $mlexpired AND `active` = 0");
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_users`");

function ML_Admin() {
  global $db, $prefix, $admin_file;
  OpenTable();
  $num1 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_users` WHERE `active`='1'"));
  $num2 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_issues`"));
  $num3 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists`"));
  if(!$num1) { $num1 = 0; }
  if(!$num2) { $num2 = 0; }
  if(!$num3) { $num3 = 0; }
  echo "<table border='0' width='100%'>\n";
  echo "<tr>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLViewSubscribers'>"._ML_VIEWSUBSCRIBERS."</a> ($num1)</td>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLViewIssues'>"._ML_VIEWISSUES."</a> ($num2)</td>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLAddIssue'>"._ML_CREATENEWISSUE."</a></td>\n";
  echo "</tr>\n";
  echo "<tr>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLViewLists'>"._ML_VIEWLISTS."</a> ($num3)</td>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLConfig'>"._ML_CONFIG."</a></td>\n";
  echo "<td align='center' width='33%'><a href='".$admin_file.".php?op=MLAddList'>"._ML_CREATENEWLIST."</a></td>\n";
  echo "</tr>\n";
  echo "<tr>\n";
  //echo "<td align='center' colspan='3'><a href='".$admin_file.".php'>"._ML_SITEADMIN."</a></td>\n";
  echo "</tr>\n";
  echo "</table>\n";
  CloseTable();
}

function mlsave_config($config_name, $config_value){
    global $prefix, $db;
    $db->sql_query("UPDATE `".$prefix."_nsnml_config` SET `config_value`='$config_value' WHERE `config_name`='$config_name'");
}

function mlget_config($config_name){
    global $prefix, $db;
    $configresult = $db->sql_query("SELECT `config_value` FROM `".$prefix."_nsnml_config` WHERE `config_name`='$config_name'");
    list($config_value) = $db->sql_fetchrow($configresult);
    return $config_value;
}

function mlget_configs(){
    global $prefix, $db;
    $configresult = $db->sql_query("SELECT `config_name`, `config_value` FROM `".$prefix."_nsnml_config`");
    while(list($config_name, $config_value) = $db->sql_fetchrow($configresult)) {
        $config[$config_name] = $config_value;
    }
    return $config;
}

?>