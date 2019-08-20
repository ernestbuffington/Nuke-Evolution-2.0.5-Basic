/********************************************************/
/* NukeProject(tm)                                      */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

0. Copyright Notice
-------------------
- Our Package name and link MUST REMAIN in the credit footer of all NSN script
  generated pages. Translations are permitted, not renaming.
- This package CAN NOT be ported without written permission.
- This package CAN NOT be mirrored without written permission.
- The following are the only project licenses granted at this time (These projects
  may reproduce and/or include our scripts).
  1) OFFICIAL NSN Regional sites


1. Introduction and Requirements
--------------------------------
- It requires PHP-Nuke 7.0 thru 7.9 plus Patched 3.1 be installed.
- NukeProject(tm) is a project status tracker for your site visitors to keep upto
  date on your listed projects.
- You will need to create your Project Statuses and Task Statuses thru the admin
  section of the script before you can assign statuses to projects or tasks.


2. Installation
---------------
Extract archive to temp dir and copy included as noted below (and chmod if shown):
---------------------------------------------------------------------------------

#
#-----[ NOTE ]-----------------------------------------
#
For every file you open you will see something like:
/*****[CHANGES]**********************************************************
-=[Base]=-
      NukeSentinel                             v2.4.2       08/31/2005
      Nuke Patched                             v3.1.0       06/26/2005
      Language Selector                        v3.0.0       12/11/2005
      Admin File Check                         v3.0.0       11/19/2005
      PHP Input Filter                         v1.2.2       10/14/2005
      HTML Parser                              v1.2.0       10/27/2005
      Caching System                           v1.0.0       10/29/2005
      Debugger                                 v1.0.0       11/14/2005
      Module Simplifications                   v1.0.0       11/17/2005
      Evolution Functions                      v1.5.0       11/24/2005
      Theme Management                         v1.0.2       12/14/2005
-=[Mod]=-
      Admin Icon/Link Pos                      v1.0.0       06/02/2005
      Custom Language File                     v1.0.1       06/02/2005
      Advanced Username Color                  v1.0.5       06/11/2005
      Evolution Version Checker                v1.0.0       06/16/2005
      Lock Modules                             v1.0.0       08/04/2005
      phpBB User Groups Integration            v1.0.0       08/26/2005
      Group Colors                             v1.0.0       10/20/2005
      Censor                                   v1.0.0       10/20/2005
      NBBCode                                  v9.26.0      11/23/2005
      Color Toggle                             v1.0.0       11/25/2005
-=[Module]=-
      CNB Your Account                         v4.4.2       06/15/2005
-=[Other]=-
      Hide Blocks                              v1.0.0       06/23/2005
      SSL Administration                       v1.0.0       08/29/2005
      Validation                               v1.1.0       10/17/2005
      Extra Functions                          v1.0.0       12/22/2005
 ************************************************************************/

I would suggest adding an entry for the NukeProject in every file but that
is completely up to you.  Here is what that would look like:
/*****[CHANGES]**********************************************************
-=[Base]=-
      NukeSentinel                             v2.4.2       08/31/2005
      Nuke Patched                             v3.1.0       06/26/2005
      Language Selector                        v3.0.0       12/11/2005
      Admin File Check                         v3.0.0       11/19/2005
      PHP Input Filter                         v1.2.2       10/14/2005
      HTML Parser                              v1.2.0       10/27/2005
      Caching System                           v1.0.0       10/29/2005
      Debugger                                 v1.0.0       11/14/2005
      Module Simplifications                   v1.0.0       11/17/2005
      Evolution Functions                      v1.5.0       11/24/2005
      Theme Management                         v1.0.2       12/14/2005
-=[Mod]=-
      Admin Icon/Link Pos                      v1.0.0       06/02/2005
      Custom Language File                     v1.0.1       06/02/2005
      Advanced Username Color                  v1.0.5       06/11/2005
      Evolution Version Checker                v1.0.0       06/16/2005
      Lock Modules                             v1.0.0       08/04/2005
      phpBB User Groups Integration            v1.0.0       08/26/2005
      Group Colors                             v1.0.0       10/20/2005
      Censor                                   v1.0.0       10/20/2005
      NBBCode                                  v9.26.0      11/23/2005
      Color Toggle                             v1.0.0       11/25/2005
-=[Module]=-
      CNB Your Account                         v4.4.2       06/15/2005
      Projects                                 v2.0.0       10/25/2005
-=[Other]=-
      Hide Blocks                              v1.0.0       06/23/2005
      SSL Administration                       v1.0.0       08/29/2005
      Validation                               v1.1.0       10/17/2005
      Extra Functions                          v1.0.0       12/22/2005
 ************************************************************************/

# 
#-----[ OPEN ]------------------------------------------ 
#
mainfile.php

# 
#-----[ FIND ]------------------------------------------ 
#
?>

# 
#-----[ BEFORE, ADD ]------------------------------------------ 
#
/*****[BEGIN]******************************************
 [ Module:  Projects                           v2.0.0 ]
 ******************************************************/
include_once(NUKE_INCLUDE_DIR.'nsnpj_func.php');
/*****[END]********************************************
 [ Module:  Projects                           v2.0.0 ]
 ******************************************************/

#
#-----[ SAVE/CLOSE/UPLOAD mainfile.php ]------------------------------------------
#

#
#-----[ UPLOAD ]------------------------------------------
#
README.txt (do not upload, you're reading it)

* root = the root directory of your site.

html/admin/*.* ---------------------> root/admin/*.*
html/blocks/*.* --------------------> root/blocks/*.*
html/images/*.* --------------------> root/images/*.*
html/languages/*.* -----------------> root/languages/*.*
html/modules/*.* -------------------> root/modules/*.*
html/nsnpj_installer/*.* -----------> root/nsnpj_installer/*.*
html/nsnpj.php ---------------------> root/nsnpj.php
                                      This installer will install, upgrade,
                                      or remove NukeProject(tm).
                                      
                                      NOTE: If you see warnings while installing
                                      you can safely ignore them. This is because
                                      the installer tries to convert existing tables
                                      from the previous Work Board module.

#
#-----[ SQL ]------------------------------------------
#
Run http://www.yoursite.com/nsnpj.php and follow the installation instructions.

Delete file root/nsnpj.php and folder root/nsnpj_installer afterwards!