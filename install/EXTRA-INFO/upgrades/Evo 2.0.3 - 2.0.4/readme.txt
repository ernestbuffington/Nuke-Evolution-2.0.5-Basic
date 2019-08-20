/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

 These steps are meant for people that have downloaded and installed Release 2.0.3
 and wish to upgrade to Release 2.0.4.

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
 Run the upgrade.sql
 
 Third Step
 ----------
 Do the theme_edits.txt changes
 
 Fourth Step
 -----------
 Reupload/reinstall any supplementary items you might have
 
 Both WYSIWYG have been updated and are now a seperate download
 
 If you cannot find a pervious supplementary item look in the downloads
 
 Fifth Step
 ----------
 Clear your cache
 
 Sixth Step:
 -----------
 If you are using Sentinel IP2Country make sure you reimport any countries
 and check for duplicates.
 
 
 Manual Forum upgrade
 ####################
 
 This is only meant for people with forum mods that choose not to reinstall
 them again.  So if you already over wrote the modules/Forums/ and/or includes/
 then you DO NOT NEED TO DO THIS!
 
 As always if you think there is a file you need to get changes for check the SourceForge page
 or you can PM me and I will send you one.
 
 includes/
 ---------
 
 These are the following includes root files you need to upload from the root of includes/
 counter.php
 functions_browser.php
 functions_evo.php
 log.php
 nsnne_func.php
 nukesentinel.php
 
 This is the only file you will have to manually edit:
 /includes/usercp_register.php ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/includes/usercp_register.php?view=diff&pathrev=99&r1=97&r2=77&diff_format=h
 
 modules/Forums/
 --------------

 These are the following forum files you need to upload:
 modules/Forums/admin/admin_xdata_auth.php
 modules/Forums/admin/admin_xdata_fields.php
 
 These are the files you will have to manually make changes to
 /modules/Forums/common.php ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/common.php?view=diff&r1=105&r2=57&diff_format=h

 /modules/Forums/viewtopic.php ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/viewtopic.php?view=diff&pathrev=99&r1=98&r2=93&diff_format=h

 /modules/Forums/templates/subSilver/admin/user_edit_body.tpl ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/templates/subSilver/admin/user_edit_body.tpl?view=diff&pathrev=99&r1=99&r2=95&diff_format=h

 /modules/Forums/templates/subSilver/admin/board_config/board_avatar.tpl ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/templates/subSilver/admin/board_config/board_avatar.tpl?view=diff&pathrev=99&r1=99&r2=95&diff_format=h

 /modules/Forums/templates/subSilver/admin/board_config/board_general.tpl ->
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/templates/subSilver/admin/board_config/board_general.tpl?view=diff&pathrev=99&r1=99&r2=95&diff_format=h
 
 ************************************************************************\