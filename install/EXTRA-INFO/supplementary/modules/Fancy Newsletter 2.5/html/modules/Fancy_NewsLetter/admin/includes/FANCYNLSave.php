<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

    /********************************************************/
    /* Fancy NewsLetter Installation                        */
    /* By: Louis Lecaroz (louis.lecaroz@le-resistant.com)   */
    /* http://www.le-resistant.com                          */
    /* Under GNU/GPL License                                */
    /********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Access Denied");
}

if (!defined('FANCYNL_FILE')) {
   die("Illegal File Access");
}

global $db, $prefix;

$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".$fancynl_downloadstable."' WHERE config_name='fancynl_downloadstable'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".$fancynl_bannersystem."' WHERE config_name='fancynl_bannersystem'");

$fancynl_sign = Fix_Quotes($fancynl_sign);
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".$fancynl_sign."' WHERE config_name='fancynl_sign'");

$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_calc_news)."' WHERE config_name='fancynl_calc_news'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_num_news)."' WHERE config_name='fancynl_num_news'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_calc_dowl)."' WHERE config_name='fancynl_calc_dowl'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_num_dowl)."' WHERE config_name='fancynl_num_dowl'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_calc_webl)."' WHERE config_name='fancynl_calc_webl'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_num_webl)."' WHERE config_name='fancynl_num_webl'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_calc_foru)."' WHERE config_name='fancynl_calc_foru'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_num_foru)."' WHERE config_name='fancynl_num_foru'");

$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_show_stat)."' WHERE config_name='fancynl_show_stat'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_archive)."' WHERE config_name='fancynl_archive'");

$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_archive_paging)."' WHERE config_name='fancynl_archive_paging'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_randombanner)."' WHERE config_name='fancynl_randombanner'");
$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_queued)."' WHERE config_name='fancynl_queued'");

$result = $db->sql_query("UPDATE ".$prefix."_fancynl_config SET config_value='".intval($fancynl_ads)."' WHERE config_name='fancynl_ads'");

?>