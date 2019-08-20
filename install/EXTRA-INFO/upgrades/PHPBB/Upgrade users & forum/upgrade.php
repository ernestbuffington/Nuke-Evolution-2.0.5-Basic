<?
/************************************************************************/
/* PHP-NUKE Evolution: Advanced Installer                               */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2005 by The Nuke-Evolution Team                        */
/* http://Nuke-Evolution.com                                            */
/* Written by JeFFb68CAM  (http://Evo-Mods.com)                         */
/*                                                                      */
/* You may NOT use this installer for your own needs or script. It is   */
/* written specifically for Nuke-Evolution.                             */
/*                                                                      */
/* Last file update:10/06/05                                            */
/************************************************************************/

session_start();
include('upgrade/functions.php');
include('includes/functions_selects.php');
$nuke_name = "Nuke Evolution (Basic)";
if (!isset($_SESSION['language']) || $_SESSION['language'] == "english") {
$_SESSION['language'] = ($_POST['language']) ? $_POST['language'] : "english";
}
if ($_SESSION['language']) {
	if (is_file("upgrade/language/lang_" . $_SESSION['language'] . "/lang-install.php")) {
			include("upgrade/language/lang_" . $_SESSION['language'] . "/lang-install.php");
	} else {
			include("upgrade/language/lang_english/lang-install.php");
	}
}
$step = ($_GET['step']) ? $_GET['step'] : $_POST['step'];
if (!$step) $step = "0";
$total_steps="7";
$next_step = $step + 1;
$continue_button = "<input type=hidden name=step value=\"".$next_step."\"><input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\">";
check_required_files();
if( ini_get('safe_mode') ){
    include('upgrade/header.php');
    echo "<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">$nuke_name " . $install_lang['installer_heading'] . " ".$install_lang['failed']."</th>"
        ."<tr><td align=\"center\"><font color=\"red\"><b>" . $install_lang['safe_mode'] . "</b></font></td></tr>"
        ."</table>";
    include('upgrade/footer.php');
    die();
}
if($_POST['download_file'] && !empty($_SESSION['configData']) && !$_POST['continue']) {
	header("Content-Type: text/x-delimtext; name=config.php");
	header("Content-disposition: attachment; filename=config.php");

	$configData = $_SESSION['configData'];
	echo $configData;

	die();
}
if ($step >= 5){
    if (!mysql_connect($_SESSION['dbhost'], $_SESSION['dbuser'], $_SESSION['dbpass']))
    {
        die ($install_lang['couldnt_connect'] . mysql_error());
    }
    if (!mysql_select_db($_SESSION['dbname'])) {
        die ($install_lang['couldnt_select_db'] . mysql_error());
    }
}
if ($step == 0) {
    include('upgrade/header.php');
    $lang_select = language_select('english', "language", $dirname="upgrade/language");
    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">$nuke_name " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " $total_steps</th>"
        ."<tr><td align=\"center\"><b>$lang_select</b></td></tr>"
        ."<tr><td align=\"center\">$continue_button</td></tr>"
        ."</table></form>";
    include('upgrade/footer.php');
}
elseif ($step == 1) {
    include('upgrade/header.php');
    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">$nuke_name " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " $total_steps</th>"
        ."<tr><td align=\"center\"><b>" . $install_lang['briefing'] . "</b></td></tr>"
        ."<tr><td align=\"center\">$continue_button</td></tr>"
        ."</table></form>";
    include('upgrade/footer.php');
}
elseif ($step == 2) {
    include('upgrade/header.php');

    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">$nuke_name " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " $total_steps</th>"
        ."<tr><td align=\"center\"><b>" . $install_lang['chmod'] . "</b></td></tr>";
    echo chmod_files();
    echo "<tr><td align=\"center\">$continue_button</td></tr></table></form>";

    include('upgrade/footer.php');
} elseif ($step == 3) {
    include('upgrade/header.php');

    $confirm = ($_POST['confirm'] ) ? $_POST['confirm'] : '';
    if (!$confirm) {
        echo "<form name=config method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\" colspan=2>".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>"
        ."<tr><td align=\"center\" colspan=2 class=row1><b>" . $install_lang['config_maker'] . "</b></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['dbhost'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 value=localhost name=dbhost></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['dbname'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 value=\"\" name=dbname></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['dbuser'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 name=dbuser></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['dbpass'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 name=dbpass></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['prefix'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 value=\"nuke\" name=prefix></td></tr>"
        ."<tr><td align=\"center\" width=50%><b>" . $install_lang['user_prefix'] . "</b></td> <td align=\"center\" width=50%><input type=text length=60 value=\"nuke\" name=user_prefix></td></tr>"
        ."<tr><td align=center>"
        ."<b>" . $install_lang['dbtype'] . "</b></td><td align=center>"
        ."<select size=\"1\" name=\"dbtype\">";
        $handle = opendir('includes/db');
        while(false !== ($file = readdir($handle))) {
            if(preg_match('/(.*?)\.php/i', $file, $database) && ($file != 'db.php') && ($file != 'error.php') && ($file != 'db-old.php')) {
                echo "<option value='".strtolower($database[1])."'>".ucfirst($database[1])."</option>";
            }
        }
        closedir($handle);
        echo "</select></td></tr>"
        ."<tr><td align=center colspan=2><input type=hidden name=step value=\"".$step."\"><input type=submit name=confirm value=\"" . $install_lang['confirm_data'] . "\"></td></tr>"
        ."</table></form>";
    } else {
        echo "<form method=post>"
            ."<table id=menu border=\"1\" width=\"100%\">"
            ."<th id=rowHeading align=\"center\">".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>";
        echo validate_data($_POST);
        echo "</table></form>";

    }
    include('upgrade/footer.php');
} elseif ($step == 4) {
    include('upgrade/header.php');

    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>"
        ."<tr><td align=\"center\"><b>" . $install_lang['server_check'] . "</b></td></tr>";
    echo server_check();
    echo "<tr><td align=\"center\">$continue_button</td></tr>"
        ."</table></form>";

    include('upgrade/footer.php');
} elseif ($step == 5) {
    include('upgrade/header.php');

    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\" colspan=2>".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>";
    echo "<tr><td align=\"center\"><font color=\"green\">" . $install_lang['drop_complete'] . "</font></td></tr>";
    echo do_sql("upgrade/install.sql");
    echo do_sql("upgrade/upgrade.sql");
    echo "</table></form>";

    include('upgrade/footer.php');
} elseif ($step == 6) {
    include('upgrade/header.php');
    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\" colspan=2>".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>";
    echo site_form();
    echo "<tr><td align=center colspan=2><input type=hidden name=step value=\"$next_step\"><input type=submit name=submit value=\"" . $install_lang['configure'] . "\">  <input type=submit name=skip value=\"" . $install_lang['skip'] . "\"></td></tr>";
    echo "</table></form>";
    include('upgrade/footer.php');
} elseif ($step == 7) {
    $skip = (isset($_POST['skip'])) ? $_POST['skip'] : '';
    $submit = (isset($_POST['submit'])) ? $_POST['submit'] : '';

    include('upgrade/header.php');
    if ($submit) {
        site_form(0);
    }
    message($install_lang['done']."<br /><br />".$install_lang['delete']);
    include('upgrade/footer.php');
}
?>