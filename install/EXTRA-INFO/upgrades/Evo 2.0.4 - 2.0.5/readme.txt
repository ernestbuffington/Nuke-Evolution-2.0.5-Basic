/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

 These steps are meant for people that have downloaded and installed Release 2.0.4
 and wish to upgrade to Release 2.0.5.

 Prestart
 --------
 I would backup your site and DB if I were you.

 Read EACH step COMPLETELY before attempting that step!!!

 Close/disable your site also.

 First Step
 ----------
 Upload all the files from the html folder.
 
 If you do not want to loose any smiles or ranks you then do not upload
 the modules/Forums/images folder.

 If you do not want to lose any forum mods then do not upload the modules/Forums folder
 or the files in the root of includes/  but you must upload all the other subfolders
 for example includes/cache and include/classes. Then go to manual forum upgrade steps below.

 DO NOT upload the install.php, ips.php, config.php or the install/ folder

 Second Step
 -----------
 Reupload/reinstall any supplementary items you might have
  
 Both WYSIWYG have been updated and are now a seperate download
  
 If you cannot find a pervious supplementary item look in the downloads
 
 Third Step
 ----------
 Clear your cache
 
 Notes
 -----
 There is no upgrade.sql or theme_edits for this upgrade.
 
 Manual Forum upgrade
 ####################
 
 The only files you need to upload are includes/function_evo.php & modules/Forums/glance.php
 
 One file to edit:
 modules/Forums/modcp.php:
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/modcp.php?view=diff&r1=124&r2=42&diff_format=h