<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_VIEWIP;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_VIEWIP);
ipbanmenu();
CarryMenu();
blockedipmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$getIPs = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ips` WHERE `ip_addr`='$xIPs'"));
$getIPs['date'] = date("Y-m-d H:i:s",$getIPs['date']);
list($getIPs['reason']) = $db->sql_fetchrow($db->sql_query("SELECT `reason` FROM `".$prefix."_nsnst_blockers` WHERE `blocker`='".$getIPs['reason']."'"));
$lookupip = str_replace("*", "0", $xIPs);
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_BLOCKEDIP.":</strong></td><td><a href='".$ab_config['lookup_link']."$lookupip' target='_blank'>$xIPs</a></td></tr>";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_USER.":</strong></td><td>".$getIPs['username']."</td></tr>";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_AGENT.":</strong></td><td>".$getIPs['user_agent']."</td></tr>";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_BLOCKEDON.":</strong></td><td>".$getIPs['date']."</td></tr>";
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._AB_NOTES.":</strong></td><td>".$getIPs['notes']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_REASON.":</strong></td><td>".$getIPs['reason']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' colspan='2'>&nbsp;</td></tr>\n";
$getIPs['query_string'] = htmlentities(base64_decode($getIPs['query_string']));
$getIPs['query_string'] = str_replace("%20", " ", $getIPs['query_string']);
$getIPs['query_string'] = str_replace("/**/", "/* */", $getIPs['query_string']);
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_QUERY.":</strong></td><td>".info_img("<strong>"._AB_QUERY.":</strong> ".$getIPs['query_string'], r)."</td></tr>\n";
$getIPs['get_string'] = htmlentities(base64_decode($getIPs['get_string']));
$getIPs['get_string'] = str_replace("%20", " ", $getIPs['get_string']);
$getIPs['get_string'] = str_replace("/**/", "/* */", $getIPs['get_string']);
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_GET.":</strong></td><td>".info_img("<strong>"._AB_GET.":</strong> ".$getIPs['get_string'], r)."</td></tr>\n";
$getIPs['post_string'] = htmlentities(base64_decode($getIPs['post_string']));
$getIPs['post_string'] = str_replace("%20", " ", $getIPs['post_string']);
$getIPs['post_string'] = str_replace("/**/", "/* */", $getIPs['post_string']);
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_POST.":</strong></td><td>".info_img("<strong>"._AB_POST.":</strong> ".$getIPs['post_string'], r)."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_X_FORWARDED.":</strong></td><td>".$getIPs['x_forward_for']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_CLIENT_IP.":</strong></td><td>".$getIPs['client_ip']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_REMOTE_ADDR.":</strong></td><td>".$getIPs['remote_addr']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_REMOTE_PORT.":</strong></td><td>".$getIPs['remote_port']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_REQUEST_METHOD.":</strong></td><td>".$getIPs['request_method']."</td></tr>\n";
echo "<tr><td align='center' colspan='2'>"._GOBACK."</td></tr>";
echo "</table>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>