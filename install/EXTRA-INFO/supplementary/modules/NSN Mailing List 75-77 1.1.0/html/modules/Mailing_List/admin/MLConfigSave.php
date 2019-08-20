<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

mlsave_config("date_format",$xdate_format);
//mlsave_config("banner_table",$xbanner_table);
//mlsave_config("download_table",$xdownload_table);
header("Location: ".$admin_file.".php?op=MLConfig");

?>