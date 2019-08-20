/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

 These steps are meant for people that have downloaded and installed Release 2.0.2 Final
 and wish to upgrade to Release 2.0.3.

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
 for example includes/cache and include/classes. Then go to manual forum upgrade steps below

 DO NOT upload the install.php, ips.php, config.php or the install/ folder

 Second Step
 -----------
 Run the upgrade.sql
 
 Third Step
 ----------
 Do the theme_edits.txt changes
 
 Fourth Step
 -----------
 Reupload/reinstall any supplementary items you might have (Member Application module is a new version)
 
 Both WYSIWYG have been updated and are now a seperate download
 
 If you cannot find a pervious supplementary item look in the downloads
 
 Fifth Step
 ----------
 Clear your cache
 
 
 
 Manual Forum upgrade
 ####################
 
 This is only meant for people with forum mods that choose not to reinstall
 them again.  So if you already over wrote the modules/Forums/ and/or includes/
 then you DO NOT NEED TO DO THIS!
 
 As always if you think there is a file you need to get changes for check the SourceForge page
 or you can PM me and I will send you one.
 
 includes/
 ---------
 
 These are the following includes root files you DO NOT HAVE TO UPLOAD.  But you need to upload
 all the rest.  I did it this way because the list would be smaller than listing everything to upload.
 Also be aware that there are new files in this folder, so make sure you upload everything.
 auth.php
 constants.php
 emailer.php
 functions.php
 functions_admin.php
 functions_post.php
 functions_report.php
 functions_search.php
 functions_selects.php
 functions_topics_list.php
 functions_validate.php
 javascript.php
 page_header.php
 page_header_printer.php
 page_header_review.php
 page_tail.php
 page_tail_review.php
 prune.php
 sessions.php
 showcp.php
 template.php
 topic_review.php
 usercp_activate.php
 usercp_avatar.php
 usercp_email.php
 usercp_register.php
 usercp_sendpasswd.php
 usercp_signature.php
 usercp_viewprofile.php
 
 If you do not think you have changed javascript.php then I would upload those also.  Trust
 me it is easier to upload than change.  But if you did change it then the changes can be found:
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/includes/javascript.php?view=diff&r1=87&r2=21&diff_format=h
 
 The follow are changes from 2.0.2 -> 2.0.3
 
 constants.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/includes/constants.php?view=diff&r1=93&r2=55&diff_format=h
 
 functions.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/includes/functions.php?view=diff&r1=93&r2=61&diff_format=h
 
 usercp_register.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/includes/usercp_register.php?view=diff&r1=77&r2=42&diff_format=h
 The change on line Line 514 might already be done, if it is then do not worry
 
 That's it! All the rest of the changes were to change the XDATA version numbers, so you probably do not care.
 
 modules/Forums/
 --------------
 
 Upload ONLY the following folders and files:
 admin/admin_xdata_auth.php
 admin/admin_xdata_fields.php
 admin/admin_userlist.php
 bbcode_box/
 language/lang-english/lang_xd.php
 templates/subSilver/admin/xd_edit_body.tpl
 
 The follow are changes from 2.0.2 -> 2.0.3

 admin/admin_users.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/admin/admin_users.php?view=diff&r1=93&r2=4&diff_format=h
 You really only need to change line 1512 (go to the bottom)
 
 language/lang-english/lang-main.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/language/lang_english/lang_main.php?view=diff&r1=93&r2=57&diff_format=h
 
 templates/subSilver/profile_add_body.tpl
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/templates/subSilver/profile_add_body.tpl?view=diff&r1=93&r2=4&diff_format=h
 
 posting.php
 http://nukeevolution.svn.sourceforge.net/viewvc/nukeevolution/Nuke-Evolution%20Basic%20v2.0.x/html/modules/Forums/posting.php?view=diff&r1=77&r2=62&diff_format=h
 If you cannot find this line then you do not need to wory, it's already gone
 
 ************************************************************************\