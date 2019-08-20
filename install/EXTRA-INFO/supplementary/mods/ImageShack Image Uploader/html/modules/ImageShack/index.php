<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       10/18/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die('You can\'t access this file directly...');
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
$module_name = basename(dirname(__FILE__));

include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo '<table border="1" width="100%">';
echo '<tr align="center" valign="middle"><td>';
echo '<iframe src="http://imageshack.us/iframe.php?txtcolor=111111&amp;type=blank&amp;size=30" scrolling="no" allowtransparency="true" frameborder="0" width="280" height="70">Update your browser for ImageShack.us!</iframe>';
echo '</td></tr>';
echo '</table>';
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>