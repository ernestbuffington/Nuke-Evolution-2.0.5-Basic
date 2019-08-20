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
    
    global $bgcolor1, $bgcolor3, $bgcolor4, $textcolor1,  $textcolor3,  $textcolor4;

    echo "<table border='1' align='center' bordercolor='$bgcolor4' cellspacing='0' cellpadding='3'>\n" 
    ."<tr>\n" 
    ."<td width='100%' height='19' bgcolor='$bgcolor3' align='center'><font color=\"$textcolor3\"><strong>Archives</strong></font></td>\n" 
    ."</tr>\n"
    ."<tr>\n" 
    ."<td width='100%'><font size='2'><center>\n" 
    ."<table border='1' bordercolor='$bgcolor4' cellspacing='0' cellpadding='3'>\n" 
    ."<tr>\n" 
    ."<td width='19' bgcolor='$bgcolor3'><font size='2' color=\"$textcolor3\">N°</font></td>\n"
    ."<td width='175' bgcolor='$bgcolor3'><font size='2' color=\"$textcolor3\">Date send</font></td>\n" 
    ."<td width='225' colspan='2' bgcolor='$bgcolor3' align='center' ><font size='2' color=\"$textcolor3\">Newsletter</font></td>\n" 
    ."</tr>\n"; 

    $path = "modules/".$module_name."/archives"; 
    $folder = dir($path);
    function date_inscription($d){
        setlocale(LC_TIME,locale); 
        
        return(strftime("%A %d %B %Y", mktime(0,0,0,substr($d, 4, 2),substr($d, 6, 2),substr($d, 0, 4)))); 
    } 
    $n = 1; 
    while($fichier = $folder->read()){ 
        $file_envq = count($fichier); 
        if($fichier != "." AND $fichier != ".." AND $fichier!="index.html"){
            $form = $fichier;
            echo "<tr>\n"
            ."<td width='19' nowrap bgcolor='$bgcolor1'><font size='2' color=\"$textcolor1\">".$n."</font></td>\n"
            ."<td width='175' nowrap bgcolor='$bgcolor1'><font size='2' color=\"$textcolor1\"><i>".date_inscription($form)."</i></font></td>\n"
            ."<td width='225' nowrap bgcolor='$bgcolor1' align='center'><font size='2' color=\"$textcolor1\"><a href=\"modules/".$module_name."/archives/".$form."\" target=\"_blank\">$form</a></font></td>\n"
            ."</tr>\n"; 
            $n++; 
        }
    }
    $folder->close(); 
    echo "</table>\n" 
    ."</center>\n" 
    ."</td>\n"
    ."</tr>\n" 
    ."</table>\n";

?>