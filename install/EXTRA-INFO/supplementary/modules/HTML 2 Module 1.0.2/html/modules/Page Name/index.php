<?php

/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

define('INDEX_FILE', true);

$module_name = basename(dirname(__FILE__));

function get_page($page) {
    global $module_name;
    $page_content = @file_get_contents(NUKE_MODULES_DIR.$module_name.'/'.$page);
    if (empty($page_content) || !$page_content) {
        $page_content = '<center>Page Not Found</center>';
    }
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo $page_content;
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

if (isset($_GET['page'])) {
    if (preg_match("/[^\w_\-]/i", $_GET['page'])) {
        $page = 'page';
    } else {
        $page = $_GET['page'];
    }
} else {
    $page = 'page';
}
$page .= '.html';

get_page($page);
?>