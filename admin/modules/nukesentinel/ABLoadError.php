<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = "NukeSentinel(tm): Error Loading Functions";
include(NUKE_BASE_DIR."header.php");
title($pagetitle);
OpenTable();
echo "It appears that NukeSentinel(tm) has not been configured correctly.  The
most common cause is that you either have an error in the syntax that is
including includes/nukesentinel.php from your mainfile.php, or you have not
added the NukeSentinel(tm) code to your mainfile.php.  Details for including this
code are included in the download package in the <strong>Edits_For_Core_Files</strong> directory.";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>