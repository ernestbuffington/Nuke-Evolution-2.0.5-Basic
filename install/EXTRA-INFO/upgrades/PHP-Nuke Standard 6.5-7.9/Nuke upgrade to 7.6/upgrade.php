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
$total_steps="5";
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
} elseif ($step == 2) {
    include('upgrade/header.php');
	echo "<form method=post>"
		."<table id=menu border=\"1\" width=\"100%\">"
		."<th id=rowHeading align=\"center\">".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>";
	echo validate_data($_POST);
	echo "</table></form>";

    include('upgrade/footer.php');
} elseif ($step == 3) {
    include('upgrade/header.php');

    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\">".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>"
        ."<tr><td align=\"center\"><b>" . $install_lang['server_check'] . "</b></td></tr>";
    echo server_check();
    echo "<tr><td align=\"center\">$continue_button</td></tr>"
        ."</table></form>";

    include('upgrade/footer.php');
} elseif ($step == 4) {
    include('upgrade/header.php');

    echo "<form method=post>"
        ."<table id=menu border=\"1\" width=\"100%\">"
        ."<th id=rowHeading align=\"center\" colspan=2>".$nuke_name." " . $install_lang['installer_heading'] . " $step " . $install_lang['installer_heading2'] . " ".$total_steps."</th>";
    echo do_sql("");
    echo "</table></form>";

    include('upgrade/footer.php');
} elseif ($step == 5) {

    include('upgrade/header.php');

    message($install_lang['done']."<br /><br />".$install_lang['delete']);
    include('upgrade/footer.php');
}
?>