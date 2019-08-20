<?php

/********************************************************/
/* HTTP Authentication Using PHP CGI and Apache         */
/* CGIAdminAuth.php                                     */
/* By: Raven PHP Scripts                                */
/* http://www.ravenphpscripts.com                       */
/* Copyright (c) 2004 by Raven PHP Scripts                */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_CGIAUTHSETUP;
include(NUKE_BASE_DIR."header.php");
title($pagetitle);
OpenTable();
$rp = strtolower(str_replace('index.php', '', realpath('index.php')));
$staccess = str_replace($rp, "", $ab_config['staccess_path']);
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'><tr><td>\n";
echo _AB_SAVEIN." <strong>".$ab_config['htaccess_path']." :</strong><br /><br />\n";
echo "<strong><code># -------------------------------------------<br />\n";
echo "# Start of NukeSentinel(tm) ".$admin_file.".php Auth<br />\n";
echo "# -------------------------------------------<br />\n";
echo "&lt;Files $staccess&gt;<br />\n";
echo "  deny from all<br />\n";
echo "&lt;/Files&gt;<br />\n";
echo "<br />\n";
echo "&lt;Files ".$admin_file.".php&gt;<br />\n";
echo "   &lt;Limit GET POST PUT&gt;<br />\n";
echo "require valid-user<br />\n";
echo "   &lt;/Limit&gt;<br />\n";
echo "   AuthName \"Restricted by NukeSentinel(tm)\"<br />\n";
echo "   AuthType Basic<br />\n";
echo "   AuthUserFile ".$ab_config['staccess_path']."<br />\n";
echo "&lt;/Files&gt;<br />\n";
echo "# -------------------------------------------<br />\n";
echo "# End of NukeSentinel(tm) ".$admin_file.".php Auth<br />\n";
echo "# -------------------------------------------</code></strong>\n";
echo "</td></tr></table>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>