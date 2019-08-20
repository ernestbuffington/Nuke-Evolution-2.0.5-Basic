<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/*                                                                        */
/* This is the language module with all the system messages               */
/*                                                                        */
/* If you made a translation go to the my website and send to me          */
/* the translated file. Please keep the original text order by modules,   */
/* and just one message per line, also double check your translation!     */
/*                                                                        */
/* You need to change the second quoted phrase, not the capital one!      */
/*                                                                        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* And, if you use HTML code, please double check it.                     */
/**************************************************************************/

/*****[CHANGES]**********************************************************
-=[Mod]=-
      Display Topic Icon                       v1.0.0       06/27/2005
      Display Writes                           v1.0.0       10/14/2005
 ************************************************************************/

define("_NEWS","News");
define("_FUNCTIONS","Functions");
define("_YES","Yes");
define("_NO","No");
define("_ALLTOPICS","All Topics");
define("_CATEGORY","Category");
define("_SAVECHANGES","Save Changes");
define("_OK","Ok!");
define("_SAVE","Save");
define("_NOSUBJECT","No Subject");
define("_ARTICLES","Articles");
define("_ALL","All");
define("_AREYOUSURE","Are you sure you included a URL? Did you test them for typos?");
define("_SELECTTOPIC","Select Topic");
define("_OPTION","Option");
define("_AUTHOR","Author");
define("_NAME","Name");
define("_DATE","Date");
define("_TITLE","Title");
define("_HOUR","Hour");
define("_EDITCATEGORY","Edit Category");
define("_ARTICLEADMIN","Articles/Stories Administration");
define("_ADDARTICLE","Add New Article");
define("_STORYTEXT","Story Text");
define("_EXTENDEDTEXT","Extended Text");
define("_ARESUREURL","(Are you sure you included an URL? Did you test it for typos?)");
define("_PUBLISHINHOME","Publish in Home?");
define("_ONLYIFCATSELECTED","Only works if <i>Articles</i> category isn't selected");
define("_ADD","Add");
define("_PROGRAMSTORY","Do you want to program this story?");
define("_NOWIS","Now is");
define("_DAY","Day");
define("_UMONTH","Month");
define("_YEAR","Year");
define("_PREVIEWSTORY","Preview Story");
define("_POSTSTORY","Post Story");
define("_REMOVESTORY","Are you sure you want to remove Story ID #");
define("_ANDCOMMENTS","and all it's comments?");
define("_CATEGORIESADMIN","Categories Administration");
define("_CATEGORYADD","Add a New Category");
define("_CATNAME","Category Name");
define("_NOARTCATEDIT","You can't edit <i>Articles</i> Category");
define("_ASELECTCATEGORY","Select Category");
define("_CATEGORYNAME","Category Name");
define("_DELETECATEGORY","Delete Category");
define("_SELECTCATDEL","Select a Category to Delete");
define("_CATDELETED","Category Deleted!");
define("_WARNING","Warning");
define("_THECATEGORY","The Category");
define("_HAS","has");
define("_STORIESINSIDE","stories inside");
define("_DELCATWARNING1","You can Delete this Category and ALL its stories and comments");
define("_DELCATWARNING2","or you can Move ALL the stories to a New Category.");
define("_DELCATWARNING3","What do you want to do?");
define("_YESDEL","Yes! Delete ALL!");
define("_NOMOVE","No! Move my Stories");
define("_MOVESTORIES","Move Stories to a New Category");
define("_ALLSTORIES","ALL stories under");
define("_WILLBEMOVED","will be moved.");
define("_SELECTNEWCAT","Please Select the New Category");
define("_MOVEDONE","Congratulations! The move has been completed!");
define("_CATEXISTS","This Category already exists!");
define("_CATSAVED","Category Saved!");
define("_GOTOADMIN","Go to Admin Section");
define("_CATADDED","New Category Added!");
define("_AUTOSTORYEDIT","Edit Automated Story");
define("_NOTES","Notes");
define("_CHNGPROGRAMSTORY","Select new date for this Story:");
define("_SUBMISSIONSADMIN","Stories Submissions Administration");
define("_DELETESTORY","Delete Story");
define("_EDITARTICLE","Edit Article");
define("_NOSUBMISSIONS","No New Submissions");
define("_NEWSUBMISSIONS","New Stories Submissions");
define("_NOTAUTHORIZED1","You aren't authorized to touch this Article!");
define("_NOTAUTHORIZED2","You can't edit and/or delete articles that you don't published");
define("_POLLTITLE","Poll Title");
define("_POLLEACHFIELD","Please enter each available option into a single field");
define("_ACTIVATECOMMENTS","Activate Comments for this Story?");
define("_LANGUAGE","Language");
define("_ATTACHAPOLL","Attach a Poll to this article");
define("_LEAVEBLANKTONOTATTACH","(Leave blank to post the article without any attached Poll)<br />(NOTE: Automated/Programmed news can't have attached Polls)");
define("_USERPROFILE","User Profile");
define("_EMAILUSER","Email User");
define("_SENDPM","Send Private Message");

/*****************************************************/
/* NEW in NSN News 1.1.0                             */
/*****************************************************/
define("_NE_SELECT","Válassz oldalt");
define("_NE_OF","a(z)");
define("_NE_PAGES","oldalból");
define("_NE_NEWSCONFIG","Hírek beállításai");
define("_NE_DISPLAYTYPE","Cikkek megjelenítése");
define("_NE_SINGLE","Egy oszlopban");
define("_NE_DUAL","Két oszlopban");
define("_NE_READLINK","A Tovább linkre kattintva<br>\n a cikk egésze");
define("_NE_POPUP","Felbukkanó ablakban");
define("_NE_PAGE","Az oldalon jelenik meg" );
define("_NE_TEXTTYPE","Cikk hossza");
define("_NE_TRUNCATE","255 karakter körül megvágva");
define("_NE_COMPLETE","Eredeti szöveg");
define("_NE_NOTIFYAUTH","Szerzõ értesítése");
define("_NE_NOTIFYAUTHNOTE","Jóváhagyás esetén, a szerzõ<br>\nértesítve lesz");
define("_NE_NO","Nem");
define("_NE_YES","Igen");
define("_NE_HOMETOPIC","Rovatok a kezdõlapon");
define("_NE_ALLTOPICS","Minden rovat");
define("_NE_HOMENUMBER","Cikkek a kezdõlapon");
define("_NE_NUKEDEFAULT","Nuke alapbeállítás");
define("_NE_ARTICLES","Cikk");
define("_NE_HOMENUMNOTE","A felhasználók megváltoztathatják,<br>\nha ez engedélyezve van a beállításoknál");
define("_NE_SAVECHANGES","Változások mentése");

/*****[BEGIN]******************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/
define("_DISPLAY_T_ICON","Display Topic Icon with News Article?");
/*****[END]********************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Display Writes                      v1.0.0 ]
 ******************************************************/
define("_DISPLAY_WRITES","Display Author Writes \"text\" with News Article?");
/*****[END]********************************************
 [ Mod:    Display Writes                      v1.0.0 ]
 ******************************************************/

?>