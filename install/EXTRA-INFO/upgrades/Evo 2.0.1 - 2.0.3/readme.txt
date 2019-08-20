/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

 These steps are meant for people that have downloaded and installed Release 2.0.1 Final
 and wish to upgrade to Release 2.0.3

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
 for example includes/cache and include/classes. Then go to http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution?view=rev
 and view the previous revisions looking for file changes to modules/Forums/
 and includes/

 DO NOT upload the install.php, ips.php, config.php or the install/ folder

 Second Step
 -----------
 Run the upgrade.sql
 
 Third Step
 ----------
 Do the theme_edits.txt changes & Replace the viewtopic_quickreply.tpl in to all of your themes forums folder
 (ie themes/chromo/forums/) with the one in this upgrades\Evo 2.0.1 - 2.0.3\theme\forums\viewtopic_quickreply.tpl
 
 Fourth Step
 -----------
 Reupload/reinstall any supplementary items you might have (Member Application module is a new version)
 
 Both WYSIWYG have been updated and are now a seperate download
 
 If you cannot find a pervious supplementary item look in the downloads
 
 Fifth Step
 ----------
 Clear your cache
 
 ************************************************************************\
