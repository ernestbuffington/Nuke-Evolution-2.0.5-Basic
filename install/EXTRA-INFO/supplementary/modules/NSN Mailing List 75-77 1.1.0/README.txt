/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

0. Copyright Notice
-------------------
- THIS PACKAGE IS NOT RELEASED AS GPL/GNU SCRIPTING.
- Our Package name and link MUST REMAIN in the credit footer of all NSN script
  generated pages. Translations are permitted, not renaming.
- This package CAN NOT be ported without written permission.
- This package CAN NOT be mirrored without written permission.
- The following are the only project licenses granted at this time (These projects
  may reproduce and/or include our scripts).
  1) OFFICIAL NSN Regional sites


1. Introduction and Requirements
--------------------------------
· It requires PHP-Nuke 7.5 thru 7.7 plus Patched 2.9+ be installed.
· Extensive admin section for a high level of control.
· Includes a block to make subscribing/unsubscribing easy.
· Allows for multiple mailing lists.
· Tracks who gets each issue emailed by the script.
· User can select which mailing list(s) they want to be on.
· Sends a confirmation email to ensure only those that want to be on a list are on a list.
· Added ` marks to enclose table and field names to prevent failed queries.
· Added get_magic_quotes_runtime to help prevent failed queries.
· Added selection of downloads system. (Removed in Evo v.2.0.3)
· Added selection of banners system. (Removed in Evo v.2.0.3)


2. Installation
---------------
Extract archive to temp dir and copy included as noted below (and CHMOD if shown):
---------------------------------------------------------------------------------
README.txt (do not upload, you're reading it)
html/blocks/*.* --------------------> root/blocks/*.*
html/images/*.* --------------------> root/images/*.*
html/includes/*.* ------------------> root/includes/*.*
html/modules/*.* -------------------> root/modules/*.*
* root = the root directory of your site.

html/nsnml.php ---------------------> This installer will install, upgrade,
                                      or uninstall NSN Mailing List.

NOW REMOVE THE FILE nsnml.php AND FOLDER nsnml_installer!


3. File Modifications
---------------------
Goto http://www.nukescripts.net/modules.php?name=Script_Depository . Once there go
in the Modified_Core_Files/NSN_Mailing_List section and select your version of
PHP-Nuke. There your will find pre-edited core files that you can use or compare
to your current copy to find the needed edits.