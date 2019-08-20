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

    require_once('modules/'.$module_name.'/admin/includes/Modules/Banners.php');

    function show_number_config($fancynl_config, $config, $text)
    {
        global $bgcolor2, $textcolor2;
        echo "<tr>";
            echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>".$text."</strong></font></td><td  width='50%'><input type=\"text\" name=\"".$config."\" size=\"1\" maxlength=\"2\" value='".intval($fancynl_config[$config])."'></td>";
        echo "</tr>";

    }
    function show_enable_disable_config($fancynl_config, $config, $text)
    {
        global $bgcolor2, $textcolor2;
        echo "<tr>";
            echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>".$text."</strong></font></td><td  width='50%'><input type=checkbox name=".$config." value=1 ";
            if(intval($fancynl_config[$config])==1) echo "checked";
            echo "></td>";
        echo "</tr>";
    }

    echo "<form method=post action=\"".$admin_file.".php?op=fancy-nl&amp;action=save\">\n";
        /* show download tables */
        echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center'>";
            echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>"._FANCYNL_DOWNNAME."</strong></font></td><td  width='50%'>";
                echo "<select name=\"fancynl_downloadstable\">\n";
                    $result = $db->sql_query("show tables like '".$prefix."_%_downloads'");
                    while (list($tableName) = $db->sql_fetchrow($result)) {
                        // Separate real table name from <prefix>_<real table name>_<downloads> 
                        if(ereg("(^[^_]*)_([^_]*)_downloads$", $tableName, $radical) && is_array($radical))
                        {
                            $DEF="";
                            if($radical[2]==$fancynl_config['fancynl_downloadstable']) $DEF="selected";
                            echo "<option value=\"".$radical[2]."\" ".$DEF.">".$radical[2]."</option>\n";
                        }
                    }
                echo "</select>";
            echo "</td></tr>";
            echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>"._FANCYNL_BANNERSYSTEM."</strong></font></td><td  width='50%'>";
                echo "<select name=\"fancynl_bannersystem\">\n";
                    $noselected=true;
                    if ($handle = opendir('modules/'.$module_name.'/admin/includes/Modules/Banners/')) {
                        while (false !== ($file = readdir($handle))) {
                            if (!is_dir('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$file)) {
                                require_once('modules/'.$module_name.'/admin/includes/Modules/Banners/'.$file);
                                $cname = substr($file,0,-4);
                                $cname2 = 'fnl'.$cname;
                                ${$cname} = new $cname2();
                                if (${$cname}->useme())
                                {
                                    $DEF="";
                                    if($file==$fancynl_config['fancynl_bannersystem']) { $DEF="selected"; $noselected=false; }
                                    echo "<option value=\"".$file."\" ".$DEF.">".${$cname}->name."</option>\n";
                                }
                            }
                        }
                    }
                    if($noselected==true) $DEF="selected"; else $DEF="";
                    echo "<option value=\"\" ".$DEF.">"._FANCYNL_NO_BANNER."</option>\n";
                echo "</select>";
            echo "</td></tr>";
            echo "<tr><td>";
            show_number_config($fancynl_config, 'fancynl_ads', _FANCYNL_ADS);
            echo "</td></tr>";
            show_enable_disable_config($fancynl_config, 'fancynl_randombanner', _FANCYNL_RANDOM_BANNER);
        echo "</table><hr/>";
        echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center'>";
            show_enable_disable_config($fancynl_config, 'fancynl_calc_news', _FANCYNL_CALC_NEWS);
            show_number_config($fancynl_config, 'fancynl_num_news', _NEWARTICLES);
            show_enable_disable_config($fancynl_config, 'fancynl_calc_dowl', _FANCYNL_CALC_DOWL);
            show_number_config($fancynl_config, 'fancynl_num_dowl', _XLASTDOWNLOADS);
            show_enable_disable_config($fancynl_config, 'fancynl_calc_webl', _FANCYNL_CALC_WEBL);
            show_number_config($fancynl_config, 'fancynl_num_webl', _XLASTWEBLINKS);
            show_enable_disable_config($fancynl_config, 'fancynl_calc_foru', _FANCYNL_CALC_FORU);
            show_number_config($fancynl_config, 'fancynl_num_foru', _XLASTFORUMPOSTS);
        echo "</table><hr/>";
        echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center'>";
            show_enable_disable_config($fancynl_config, 'fancynl_show_stat', _FANCYNL_SHOW_STAT);
            echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>"._FANCYNL_ARCHIVE."</strong></font></td><td  width='50%'>";
                echo "<select name=\"fancynl_archive\">\n";
                    $DEF0=""; $DEF1=""; $DEF2=""; $DEF3=""; 
                    switch(intval($fancynl_config['fancynl_archive']))
                    {
                        case 0: $DEF0="selected"; break;
                        case 2: $DEF2="selected"; break;
                        case 3: $DEF3="selected"; break;
                        
                        case 1: default: $DEF1="selected"; break;
                    }
                    echo "<option value=\"0\" ".$DEF0.">"._FANCYNL_ARCHIVE_NO."</option>\n";
                    echo "<option value=\"1\" ".$DEF1.">"._FANCYNL_ARCHIVE_FILE."</option>\n";
                    echo "<option value=\"2\" ".$DEF2.">"._FANCYNL_ARCHIVE_DB."</option>\n";
                    echo "<option value=\"3\" ".$DEF3.">"._FANCYNL_ARCHIVE_FILEDB."</option>\n";
                echo "</select>";
            echo "</td></tr>";
            show_enable_disable_config($fancynl_config, 'fancynl_queued', _FANCYNL_QUEUED);

        echo "</table><hr/>";
        echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center'>";
            echo "<tr>";        
                echo "<td align='right' width='50%' bgcolor='$bgcolor2'><font color=\"$textcolor2\"><strong>"._FANCYNL_SIGN."</strong></font></td><td  width='50%'><textarea rows=\"20\" cols=\"75\"  name=\"fancynl_sign\">".$fancynl_config['fancynl_sign']."</textarea></td>";
            echo "</tr>";        
        echo "</table><hr/>";

        echo "<table width='100%' border='0' cellpadding='2' cellspacing='2' align='center'>";
            show_number_config($fancynl_config, 'fancynl_archive_paging', _FANCYNL_ARCHIVEDB_PAGING);
        echo "</table><hr/>";

        echo "<center>";
            echo "<input type=submit value=\""._FANCYNL_GB_SAVE."\"></td>\n";
            echo "</center>";
    echo "</form>";

?>