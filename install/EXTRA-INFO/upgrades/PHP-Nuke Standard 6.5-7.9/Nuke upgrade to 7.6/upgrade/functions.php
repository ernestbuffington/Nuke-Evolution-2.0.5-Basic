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
/* Last file update: 10/06/05                                           */
/************************************************************************/

#Global vars.
define("IN_PHPBB", true);
$data_file = "upgrade/data.txt";
if(!$open_data = @fopen($data_file, "r")) {
	echo $install_lang['data_error'];
	die();
}
$data = @fread($open_data, @filesize($data_file));
@fclose($open_data);
list($required_files, $chmods) = explode("\n###", $data);

$required_files = explode("\n", $required_files);
$chmods = explode("\n", $chmods);
if(!$directory_mode) {
$directory_mode = 0755; 
} else { 
$directory_mode = 0777; }
if (!$file_mode) {
$file_mode = 0666; 
} else { $file_mode = 0644; }
function message($message, $die=false) {
    global $install_lang;
    if ($die) {
        die("<table id=menu border=\"1\" width=\"100%\">"
            ."<th id=test align=\"center\">" . $install_lang['die_message'] . "</th>"
            ."<tr><td align=\"center\"><b>" . $message . "</b></td></tr>"
            ."</table></form>");
    } else {
        echo("<table id=menu border=\"1\" width=\"100%\">"
            ."<th id=test align=\"center\">" . $install_lang['general_message'] . "</th>"
            ."<tr><td align=\"center\"><b>" . $message . "</b></td></tr>"
            ."</table></form>");
    }
}

function check_required_files() {
    global $install_lang, $required_files;

    foreach($required_files as $file) {
        $file = @trim($file);
        #looping to make sure all required files are there..
        if (!is_file($file)) {
            $message .= $install_lang['thefile'] . " \"" . $file . "\" " . $install_lang['is_missing'];
        }
    }
    #End the loop, check to see if any errors.
    if ($message) {
        message($message, true);
    }
    return;
}

function make_step_list() {
    global $step, $step_a, $install_lang;

    while(list($step_num, $label) = each($step_a)) {
        if ($step_num < $step) {
            $show .= "<strike>$label</strike><hr />";
        } elseif ($step == $step_num) {
            $show .= "<b>$label</b><hr />";
        } else {
            $show .="$label<hr />";
        }
    }
    return $show;
}


function validate_data($post) {
    global $step, $next_step, $install_lang, $server_check;

    include_once('config.php');

    if ($error) {
        $error .="<tr><td align=\"center\"><input type=hidden name=step value=$next_step><input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\" disabled></td></tr>";
        return $error;
    }

    if (!($server_check = @mysql_connect($dbhost, $dbuname, $dbpass))) {
        $error .= "<tr><td align=\"center\"><font color=red>" . $install_lang['connection_failed'] . "</font></td></tr>";
    }

    if (!(@mysql_select_db($dbname, $server_check))) {
        $error .= "<tr><td align=\"center\"><font color=red>" . $install_lang['connection_failed2'] . "</font></td></tr>";
    }

    if ($error) {
        $error .="<tr><td align=\"center\"><input type=hidden name=step value=$next_step><input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\" disabled></td></tr>";
        return $error;
    }

    $result = mysql_query('SELECT Version_Num FROM '.$prefix.'_config');
    $row = mysql_fetch_assoc($result);
    if(!isset($row["Version_Num"]) || empty($row["Version_Num"])) {
        $error = "<tr><td align=\"center\"><font color=red>" . $install_lang['connection_failed'] . "</font></td></tr>";
        $error .="<tr><td align=\"center\"><input type=hidden name=step value=$next_step><input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\" disabled></td></tr>";
        return $error;
    }

    if($row["Version_Num"] == "7.5" || $row["Version_Num"] == "7.6") {
        $error = "<tr><td align=\"center\"><font color=red>" . $install_lang['why'] . " <br /><br />PHP-Nuke v".$row["Version_Num"]."</font></td></tr>";
        $error .="<tr><td align=\"center\"><input type=hidden name=step value=$next_step><input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\" disabled></td></tr>";
        return $error;
    }

    @mysql_close($server_check);

    $_SESSION['dbhost'] = $dbhost;
    $_SESSION['dbname'] = $dbname;
    $_SESSION['dbuser'] = $dbuname;
    $_SESSION['dbpass'] = $dbpass;
    $_SESSION['prefix'] = $prefix;
    $_SESSION['user_prefix'] = $user_prefix;
    $_SESSION['dbtype'] = "MySQL";
    $_SESSION['version'] = $row["Version_Num"];

    $message .= "<tr><td align=\"center\"><font color=green>" . $install_lang['data_success'] . "</font></td></tr>";
    $message .="<tr><td align=\"center\"> <input type=hidden name=step value=$next_step> <input type=submit name=submit value=\"" . $install_lang['continue'] . " $next_step\" ></td></tr>";

    return $message;
}


function server_check() {
    global $install_lang, $server_check;

    $sql_ver = @mysql_get_server_info();

    if(!empty($sql_ver)) {
        if(intval(substr($sql_ver,0,1)) <= 3) {
            $error .= "<tr><td align=\"center\">" . $install_lang['mysql_incorrect'] . "</td></tr>";
        }
    }

    if (!isset($_SESSION['dbname']) || !isset($_SESSION['dbuser']) || !isset($_SESSION['dbpass']) || !isset($_SESSION['prefix']) || !isset($_SESSION['user_prefix']) || !isset($_SESSION['dbhost'])) {
        $message .= "<tr><td align=\"center\"><font color=red>" . $install_lang['session_lost'] . "</td></tr>";
    }

    $phpver = phpversion();
    if(substr($phpver,0,1) < "4") {
        $message .= "<tr><td align=\"center\"><font color=red>" . $install_lang['php_ver'] . " " .$phpver ."</td></tr>";
    }
    if ($message == "") {
        $message .= "<tr><td align=\"center\"><font color=green>" . $install_lang['checks_good'] . "</td></tr>";
    }

    return $message;
}

function do_sql($install_file) {
    global $nuke_name, $next_step, $step, $install_lang, $prefix, $server_check;

    $install_file = "upgrade/".substr($_SESSION['version'],0,1).substr($_SESSION['version'],2,1).".sql";

    if(!$handle = @fopen ($install_file, "r"))
    {
        $message = $install_lang['cant_open'] . " ".$install_file;
        return $message;
    }
    $contents = @fread ($handle, filesize ($install_file));
    @fclose ($handle);
    $filename = $install_file;

    $con = mysql_connect($_SESSION['dbhost'], $_SESSION['dbuser'], $_SESSION['dbpass']);
    mysql_select_db($_SESSION['dbname'], $con);

    $filesize       = filesize($filename);
    $file_position  = isset($HTTP_GET_VARS['pos']) ? $HTTP_GET_VARS['pos'] : 0;
    $errors         = isset($HTTP_GET_VARS['ignore_errors']) ? 0 : 1;

    if (!$fp = @fopen($filename,'rb'))
    {
        echo $install_lang['cant_open'] . " $filename";
    }

    $buffer = '';
    $inside_quote = 0;
    $quote_inside = '';
    $started_query = 0;
    $data_buffer = '';
    $last_char = "\n";

    @fseek($fp,$file_position);

    while ((!feof($fp) || strlen($buffer)))
    {
        do
        {
            if (!strlen($buffer))
            {
                $buffer .= fread ($fp,1024);
            }

            $current_char = $buffer[0];
            $buffer = substr($buffer, 1);

            if ($started_query)
            {
                $data_buffer .= $current_char;
            }
            elseif (preg_match("/[A-Za-z]/i",$current_char) && $last_char == "\n")
            {
                $started_query = 1;
                $data_buffer = $current_char;
            }
            else
            {
                $last_char = $current_char;
            }
        } while (!$started_query && (!feof($fp) || strlen($buffer)));


        if ($inside_quote && $current_char == $quote_inside && $last_char != '\\')
        {
            $inside_quote = 0;
        }
        elseif ($current_char == '\\' && $last_char == '\\')
        {
            $current_char = '';
        }
        elseif (!$inside_quote && ($current_char == '"' || $current_char == '`' || $current_char == '\''))
        {
            $inside_quote = 1;
            $quote_inside = $current_char;
        }
        elseif (!$inside_quote && $current_char == ';')
        {
            if($prefix != "nuke" && !empty($prefix)) {
                $data_buffer = str_replace("`nuke_", "`".$prefix."_", $data_buffer);
            }

            @mysql_query($data_buffer, $con);

            if ($errors && mysql_errno())
            {
                $message .= "<tr><td align=\"center\"><font color=red>" . $install_lang['sql_error'] . mysql_errno().": ".mysql_error()."</td></tr>";
            }


            $data_buffer = '';
            $last_char = "\n";
            $started_query = 0;
        }

        $last_char = $current_char;
    }


    $new_position = ftell($fp) - strlen($buffer) - strlen($data_buffer);

    @fclose($fp);
    @mysql_close($con);

    if (empty($message)) {
        $message = "<tr><td align=\"center\"><b><font color='green'>" . $install_lang['install_success'] . "</font></b></td></tr>";
    } else {
        //$message .= "<tr><td align=center><input type=hidden name=step value=$next_step><input type=submit name=confirm value=\"" . $install_lang['configure'] . "\" disabled></td></tr>";
    }
    $message .= "<tr><td align=center><input type=hidden name=step value=$next_step><input type=submit name=confirm value=\"" . $install_lang['finish'] . "\"></td></tr>";

    return $message;
}
?>