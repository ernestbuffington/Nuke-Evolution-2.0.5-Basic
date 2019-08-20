<?php
if (!defined('MODULE_FILE')) { die ("You can't access this file directly..."); }

else
{
    $phpbb_root_path = 'modules/Forums/';
}
define('IN_PHPBB', true);

$i = 0;
while ( !file_exists($phpbb_root_path . 'extension.inc') && ($i++ < 4) )
{
        $phpbb_root_path .= '../';
}
if ( $i > 4 )
{
   message_die(GENERAL_MESSAGE, 'Unable to find extension.inc, terminating. Please move this file into your main/"root" phpbb directory and try again.');
}

include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include('includes/constants.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX, $nukeuser);
init_userprefs($userdata);
//
// End session management
//

if( !$userdata['session_logged_in'] )
{
        redirect(append_sid("login.$phpEx?redirect=sql_install.$phpEx", true));
}

if( $userdata['user_level'] != ADMIN )
{
   message_die(GENERAL_MESSAGE, 'You are not authorised to access this page');
}

define('IN_PHPBB', TRUE);
define('PHPBB_VERSION_USED', '2.0.5');
define('REQUIRED_PHP', '4.0.1');
$error_msg = '';
$info_msg = '';

$mode_list = array(
'Install' => 'modules/Forums/install/SQL.sql');

if (!isset($HTTP_GET_VARS['mode']) && !isset($HTTP_GET_VARS['submit']))
{
	print_header();
	print_modes_select();
	print_footer();
}
else
{
	print_header();
	
	$sql_queue_list = $mode_list[$HTTP_GET_VARS['mode']];
	$phpbb_root_path = 'modules/Forums/';
	$info_msg .= 'Using sql queue list file '.$sql_queue_list.'.<br>';
	if ($fp = @fopen($sql_queue_list, "r"))
	{
		$coments_pattern = "/##(.)*\n/";
		$seperator = ";";
		$file_data = @fread($fp, filesize($sql_queue_list));
		fclose($fp);
		
		$file_data = preg_replace($coments_pattern, '', $file_data);

		$sql_queue = explode($seperator, $file_data);
		
		for ($i=0; $i < count($sql_queue); $i++)
		{
			$sql_queue[$i] = trim($sql_queue[$i]);
			if ($sql_queue[$i] == '') unset($sql_queue[$i]);
		}
	}
	else $error_msg .= 'Can not open '.$sql_queue_list.'.  It is needed to continue!<br>';
	
	$info_msg .= 'Found php version '.phpversion().'.<br>';

	if (phpversion() < REQUIRED_PHP) $error_msg .= 'php version '.REQUIRED_PHP.' or greater is required for this hack.';
	
	if (empty($error_msg))
	{
		include($phpbb_root_path.'extension.inc');
		include('includes/constants.'.$phpEx);
		include('includes/db/db.'.$phpEx);
		
		$sql = 'SELECT config_value FROM ' . CONFIG_TABLE . "
		WHERE config_name = 'version'";
		$result = $db->sql_query($sql);
		$vrow = $db->sql_fetchrow($result);
		$phpbb_version = '2'.$vrow['config_value'];
		$info_msg .= 'Found phpbb version '.$phpbb_version.'.<br>';
		
		print '<span class="gen">'.$info_msg.'</span><br><br>';
		
		for($i=0; $i < count($sql_queue); $i++)
		{
			$sql = str_replace('`nuke_', "`" . $prefix . "_", $sql_queue[$i]);
			if (!$db->sql_query($sql))
			{
				$error = $db->sql_error();
				$error_m = $error['message'];
				$error_info = (substr_count($error_m, 'Duplicate') || substr_count($error_m, 'already exists')) ? '<br><b>Analysis:</b><span class="gen">This is considered a duplicate entry and can be ignored as a failure because the needed information is already inserted.</span>' : '';
				echo "[<font color=\"red\">FAILED</font>] <span class=\"gensmall\">:: $sql</span><br />
		<b>Reason:</b><span class=\"gen\">$error_m</span>
		$error_info<br /><br />";
			}
			else
			{
				print '[<font color="green">OK</font>] <span class="gensmall">:: ' . $sql . '</span><br /><br />';
			}
		}
		print '<br /><span class="maintitle">Please delete this file (modules/Forums/SQL.php) and modules/Forums/install/*.* for security reasons!</span>';
	}
	else
	{
		print '<span class="gen"><font color="red">'.$error_msg."</font></span>";
	}
	print_footer();
}

function print_header()
{
	echo '<html><head><title>SQL Install</title><style type="text/css">
<!--
body {
	background-color: #E5E5E5;
	scrollbar-face-color: #DEE3E7;
	scrollbar-highlight-color: #FFFFFF;
	scrollbar-shadow-color: #DEE3E7;
	scrollbar-3dlight-color: #D1D7DC;
	scrollbar-arrow-color:  #006699;
	scrollbar-track-color: #EFEFEF;
	scrollbar-darkshadow-color: #98AAB1;
}
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #006699; }
a:hover		{ text-decoration: underline; color : #DD6900; }
hr	{ height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}
.bodyline	{ background-color: #FFFFFF; border: 1px #98AAB1 solid; }
.forumline	{ background-color: #FFFFFF; border: 2px #006699 solid; }

td.row1	{ background-color: #EFEFEF; }
td.row2	{ background-color: #DEE3E7; }
td.row3	{ background-color: #D1D7DC; }
td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/subSilver/images/cellpic1.gif);
			background-color:#D1D7DC; border: #FFFFFF; border-style: solid; height: 28px;
}
td.cat,td.catHead,td.catBottom {
	height: 29px;
	border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #FFFFFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
	background-color: #D1D7DC; border: #FFFFFF; border-style: solid;
}

th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop	 { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }
.maintitle	{
	font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
	text-decoration: none; line-height : 120%; color : #000000;
}
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.gen,.genmed,.gensmall { color : #000000; }
a.gen,a.genmed,a.gensmall { color: #006699; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #DD6900; text-decoration: underline; }
.cattitle		{ font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #006699}
a.cattitle		{ text-decoration: none; color : #006699; }
a.cattitle:hover{ text-decoration: underline; }
.copyright		{ font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
a.copyright		{ color: #444444; text-decoration: none;}
a.copyright:hover { color: #000000; text-decoration: underline;}
-->
</style></head><body>
<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
<tr><td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr> 
<td><center><a href="http://www.nuke-revolution.com"><img src="http://www.nuke-revolution.com/images/banners/nuke.png" border="0" vspace="1" /></a></center></td></tr></table><br />';
}

function print_footer()
{
	
}

function print_modes_select()
{
	global $mode_list;
	
	echo '
	<form action="modules.php" method="get" name="choose_form">
	<center><span class="gen">Choose an option:&nbsp;&nbsp;
	<select name="mode">';
	foreach($mode_list as $name => $file)
	{
		echo '
		<option>'.$name.'</option>';
	}
	echo '
	</select><br />
	<input type="hidden" name="name" value="Forums">
	<input type="hidden" name="file" value="install">
	<input type="submit" name="submit" value="Submit"></form>';
}
?>