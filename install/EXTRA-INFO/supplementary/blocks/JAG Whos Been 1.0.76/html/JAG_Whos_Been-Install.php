<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/* -------------------------------------------------------- for PHP-Nuke v7.6 v1.0.76  */
/*                                                                                     */
/*      ////////// //\\ \\\\\\\\\\       Created by Dashe at http://nsd.jagamarog.com  */
/*             // //  \\ \\                                                            */
/*            // //    \\ \\             Email Address: dashe@jagamarog.com            */
/*           // /////\\\\\ \\   \\\\\                                                  */
/*          // //        \\ \\      \\   For More Scripts Visit Our Site               */
/*         // //          \\ \\\\\\\\\\                                                */
/* /////////  a g a m a r o g . c o m   N u k e   S c r i p t   D e v e l o p m e n t  */
/*                                                                                     */
/* Updated to work with PHP-Nuke 7.6 : BlueLion (admin@phpnuke-nederland.com)          */
/*                                                                                     */
/* Original Who Is Where Developed at Surf 4 All [http://www.surf4all.com]             */
/*                                                                                     */
/* ----------------------------------------------------------------------------------- */

/* DO NOT EDIT BELOW UNLESS YOU KNOW WHAT YOU ARE DOING ------------------------------ */

require_once('mainfile.php');

/* Set Global Variables & General Variables ------------------------------------------ */
global $prefix, $db, $dbname, $admin, $sitename, $nukeurl;

function table_exists($table, $dbname)
   {
   global $db;
   $tables = $db->sql_fetchtables($dbname);
   while (list($temp) = $db->sql_fetchrow($tables))
      {
        if($temp == $table)
           return TRUE;
      }
   return FALSE;
   }

/* Start The Script For Install ------------------------------------------------------ */
include_once(NUKE_BASE_DIR.'header.php');
   OpenTable();
   
   $ThemeSel = get_theme();
   echo "<link rel='StyleSheet' href='themes/$ThemeSel/forums/forums.css' type='text/css'>\n";
   echo "<table border='0' cellpadding='4' cellspacing='1' width='100%' class='forumline'>\n";
   echo "   <tr>\n";
   echo "      <th align='center' class='thTop' height='25' colspan='1'>&nbsp;Description&nbsp;</th>\n";
   echo "        <th width='150' align='center' class='thTop'>&nbsp;Result&nbsp;</th>\n";
   echo "   </tr>\n";

/* Stage 1 --------------------------------------------------------------------------- */
   echo "   <tr>\n";
   echo "      <td class='catleft' colspan='2' height='28'>\n";
   echo "         <span class='cattitle'><a href='#'>Stage 1: Checking Admin Status</a></span></td>\n";
   echo "  </tr>\n";
      
   if (is_admin())
      {
      echo "   <tr>\n";
      echo "      <td class='row1' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#00C000'>\n";
      echo "            Welcome to the JAG NSD, Whos Been Block v1.0.76 Installation File.<br /><br />This file is designed to install and check all the component required for this block. This file will only run if you are and Admin on $sitename ($nukeurl)\n";
      echo "         </span></td>\n";
      echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#00C000'><strong>Verified</strong></span></td>\n";
      echo "  </tr>\n";
      }
   else
      {
      echo "   <tr>\n";
      echo "      <td class='row1' colspan='1' height='20'>\n";
      echo "         <span color='#FF0000'>\n";
      echo "            To run this file you are required to be an Administrator of the PHP-Nuke system running on $sitename ($nukeurl). \n";
      echo "            If you are an Administrator please log in and re-run this file.<br /><br />\n";
      echo "            This was created to prevent the possibility of exploiting this site via this Install file incase it was not deleted.\n";
      echo "         </span></td>\n";
      echo "      <td class='row2' colspan='1' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#FF0000'><strong>FAILED</strong></span></td>\n";
      echo "  </tr>\n";
      echo "</table>\n";
      
      CloseTable();
      include_once(NUKE_BASE_DIR.'footer.php');
      exit;
      }

/* Stage 2 --------------------------------------------------------------------------- */
   echo "   <tr>\n";
   echo "      <td class='catleft' colspan='2' height='28'>\n";
   echo "         <span class='cattitle'><a href='#'>Stage 2: Checking For Required Files</a></span></td>\n";
   echo "  </tr>\n";

   $Files = array(
               "admin/case/case.JAG_Whos_Been.php",
               "admin/links/links.JAG_Whos_Been.php",
               "admin/modules/JAG_Whos_Been.php",
               "blocks/block-JAG_Whos_Been.php",
               "images/admin/whosbeen.png",
               "includes/custom_files/JAG_Whos_Been_Copy.php",
               "includes/custom_files/custom_head_JAG_Whos_Been.php",
               "language/JAG_Whos_Been/lang-english.php"
              );
   $i=0;
   while (!empty($Files[$i]))
      {
      echo "   <tr> \n";
      echo "      <td class='row1' height='20' align='left' Valign='top'>\n";
      echo "         <span><nobr>$Files[$i]</nobr></span></td>\n";
      echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
      
      if(file_exists($Files[$i]))
         {
         echo "         <span style='color:#00C000;'><strong>File Found</strong></span></td>\n";
         }
      else
         {
         echo "         <span style='color:#FF0000;'><strong>File Not Found</strong></span></td>\n";
         $NotAllFiles = 1;
         }

      echo "   </tr> \n";
      $i++;
      }
   
   if ($NotAllFiles == 1)
      {   
      echo "   <tr>\n";
      echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#FF0000'>\n";
      echo "            There appears to be one or more files missing, the block will not work correctly unless all files uploaded to your \n";
      echo "            server and in the correct folder. Please upload the missing file(s) and run this script again.\n";
      echo "         </span></td>\n";
      echo "      <td class='row2' height='20' align='center' Valign='middle'>\n";
      echo "         <a href='".$_SERVER['PHP_SELF']."'><strong>RE-CHECK</strong></a></td>\n";
      echo "  </tr>\n";
      }

/* Stage 3 --------------------------------------------------------------------------- */
   echo "   <tr>\n";
   echo "      <td class='catleft' colspan='2' height='28'>\n";
   echo "         <span class='cattitle'><a href='#'>Stage 3: Creating & Verify Table Structure</a></span></td>\n";
   echo "  </tr>\n";
   
   $checktable1 = $prefix."_jag_whos_been_config";
   
   $QI0 = "DROP TABLE IF EXISTS $checktable1";
   $RI0 = $db->sql_query($QI0); // or die("Bad QI0:".mysql_error());
   
   $QI1 = "CREATE TABLE $checktable1
            (
             `jag_whos_been_user_maxi` int(5) NOT NULL default '0',
            `jag_whos_been_show_numb` int(1) NOT NULL default '0',
            `jag_whos_been_numb_lead` int(5) NOT NULL default '0',
            `jag_whos_been_name_leng` int(5) NOT NULL default '0',
            `jag_whos_been_show_expl` int(1) NOT NULL default '0',
            `jag_whos_been_expl_name` varchar(50) NOT NULL default ''
            ) type=MyISAM";
   $RI1 = $db->sql_query($QI1); // or die("Bad QI1:".mysql_error());
   
   echo "   <tr> \n";
   echo "      <td class='row1' align='left' Valign='middle' colspan='1'>\n";
   echo "         <span><nobr>$checktable1</nobr></span></td>\n";
   echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
   
   if (table_exists($checktable1, $dbname)) 
      {
      echo "         <span style='color:#00C000;'><strong>Table Created</strong></span></td>\n";
      }
   else
      {
      echo "         <span style='color:#FF0000;'><strong>Unable To Create</strong></span></td>\n";
      $NotAllTables = 1;
      }
      
   echo "   </tr>\n";
   
   $checktable2 = $prefix."_jag_whos_been";
   
   $QI2 = "DROP TABLE IF EXISTS $checktable2";
   $RI2 = $db->sql_query($QI2) or die("Bad QI2:".mysql_error());
            
   $QI3 = "CREATE TABLE $checktable2 
            (
            jag_whos_been_id int(15) NOT NULL auto_increment,
            jag_whos_been_user_id int(11) NOT NULL default '0',
            jag_whos_been_username varchar(25) NOT NULL default '',
            jag_whos_been_time int(15) default NULL,
            jag_whos_been_ip varchar(50) default NULL,
            PRIMARY KEY  (jag_whos_been_id),
            UNIQUE KEY id (jag_whos_been_id)
            ) type=MyISAM AUTO_INCREMENT=2;";
   $RI3 = $db->sql_query($QI3) or die("Bad QI3:".mysql_error());
   
   echo "   <tr> \n";
   echo "      <td class='row1' align='left' Valign='middle' colspan='1'>\n";
   echo "         <span><nobr>$checktable2</nobr></span></td>\n";
   echo "      <td class='row2' height='20' align='left' Valign='top'>\n";

   if (table_exists($checktable2, $dbname)) 
      {
      echo "         <span style='color:#00C000;'><strong>Table Created</strong></span></td>\n";
      }
   else
      {
      echo "         <span style='color:#FF0000;'><strong>Unable To Create Table</strong></span></td>\n";
      $NotAllTables = 1;
      }
      
   echo "   </tr>\n";
   
   if ($NotAllTables == 1)
      {   
      echo "   <tr>\n";
      echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#FF0000'>It appears that one or more of the tables failed to create, the block will not work correctly unless all tables are created in your database. Please use the sql file to create the correct table structure via phpMyAdmin (or similar). The file is located in the extracted fiels sql/jag_whos_been.sql</span></td>\n";
      echo "      <td class='row2' height='20' align='center' Valign='middle'>\n";
      echo "         <a href='".$_SERVER['PHP_SELF']."'><strong>RE-CHECK</strong></a></td>\n";
      echo "  </tr>\n";
      }

/* Stage 4 --------------------------------------------------------------------------- */
   echo "   <tr>\n";
   echo "      <td class='catleft' colspan='2' height='28'>\n";
   echo "         <span class='cattitle'><a href='#'>Stage 4: Insert & Verify Data Into Tables</a></span></td>\n";
   echo "  </tr>\n";

   $QI4 = "INSERT INTO $checktable1
            VALUES (10, 1, 1, 15, 1, '[Shown as HH:MM:SS]')";
   $RI4 = $db->sql_query($QI4); // or die("Bad QI4:".mysql_error());

   $QI5 = "SELECT * 
         FROM $checktable1";
   $RI5 = $db->sql_query($QI5); // or die("Bad QI5:".mysql_error());

   echo "   <tr> \n";
   echo "      <td class='row1' align='left' Valign='middle' colspan='1'>\n";
   echo "         <nobr>Data inserted into table $checktable1</nobr></td>\n";
   echo "      <td class='row2' align='left' height='20'>\n";

   if ($db->sql_numrows($RI5) > 0)
      {
      echo "         <span style='color:#00C000;'><strong>Data Verified</strong></span></td>\n";
      }
   else
      {
      echo "         <span style='color:#FF0000;'><strong>Failed to Insert Data</strong></span></td>\n";
      $NotAllData = 1;
      }
      
   echo "   </tr>\n";
      
   if ($NotAllData == 1)
      {
      echo "   <tr>\n";
      echo "      <td class='row2' height='20' align='left' Valign='top'>\n";
      echo "         <span color='#FF0000'>It appears that not all the data was inserted in to the appropriate tables, the block will not work correctly unless all the data is inserted into the tables on your database. Plesae use the sql file to insert the data into the table structure via phpMyAdmin (or similar). The file is located in the extracted fiels sql/jag_whos_been.sql</span></td>\n";
      echo "      <td class='row2' height='20' align='center' Valign='middle'>\n";
      echo "         <a href='".$_SERVER['PHP_SELF']."'>RE-CHECK</a></td>\n";
      echo "  </tr>\n";
      }

/* Stage 5 --------------------------------------------------------------------------- */
   echo "   <tr>\n";
   echo "      <td class='catleft' colspan='2' height='28'>\n";
   echo "         <span class='cattitle'><a href='#'>Stage 5: Overall Installation Result</a></span></td>\n";
   echo "  </tr>\n";

/* Final Row ------------------------------------------------------------------------- */
      
   if ($NotAllFiles == 1 OR $NotAllTables == 1 OR $NotAllData == 1 OR $NotAllCode == 1)
      {
      echo "   <tr>\n";
      echo "      <td class='row1' colspan='1' height='28'>\n";
      echo "         <span color='#FF0000'><strong>THE INSTALLATION HAS FAILED, PLEASE CHECK IF ALL FILES ARE IN PLACE AND INSERT THE SQL FILE INTO YOUR DATABASE, YOU CAN RUN THIS FILE AGAIN TO CHECK THE RESULTS.<br /><br />WHEN FINISHED MAKE SURE YOU DELETE THIS FILE!!!!</strong></span></td>\n";
      echo "      <td class='row2' colspan='1' height='28' align='center'>\n";
      echo "         <a href='".$_SERVER['PHP_SELF']."'><strong>RE-CHECK</strong></a></td>\n";
      echo "  </tr>\n";
      }
   else
      {
      echo "   <tr>\n";
      echo "      <td class='row1' colspan='1' height='28'>\n";
      echo "         <span color='#00C000'><strong>THE INSTALLATION HAS COMPLETED SUCCESSFULLY.</strong></span></td>\n";
      echo "      <td class='row2' colspan='1' height='28' align='left'>\n";
      echo "         <a href='".$_SERVER['PHP_SELF']."'><strong>Install Complete</strong></a></td>\n";
      echo "  </tr>\n";
      }
      
   echo "</table>\n";
   
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>