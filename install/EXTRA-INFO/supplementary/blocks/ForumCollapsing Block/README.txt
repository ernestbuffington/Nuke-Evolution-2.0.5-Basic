Raven's Collapsing Forums Block (c) 2005, 2006

[DESCRIPTION]
This block allows you to conserve space by utilizing DHTML and Javascript to expand and contract the block.  You have many parameters (settings) to ease the control and appearance.  Installation is as simple as it can get.



[FILES]
Files in this distribution:
README      ----> DO NOT FTP (You're reading it now)
blocks/*    ----> /NUKEROOT/blocks/*
images/*    ----> /NUKEROOT/images/*
language/*  ----> /NUKEROOT/language/*



[INSTALLATION]
- Copy/FTP blocks, images, and language folder as described above to your server.
- Edit your includes/javascript.php file.  Add the contents of the javascript.txt file (from this package) just before //DO NOT PUT ANYTHING AFTER THIS LINE.  Save it and then Copy/FTP the includes/javascript.php file tp your server.
- Edit the settings at the top of the block-ForumsCollapsing.php file and then FTP block-ForumsCollapsing.php to your blocks folder.
- Activate the block through the Nuke Block Admin Control Panel.



[UPGRADING FROM v2.2.0 OR PRIOR]
Remove this code from NUKEROOT/language folder:
/*******************************/
/*   Collapsing Forums Block   */
/*******************************/
define('bfcTOPICLOCKED','Topic Locked');
define('bfcBACKENDTITLE','Syndicate RavenPHPScripts - PHP Web Host - Quality Web Hosting For All PHP Applications');
define('bfcTOPPOSTERS','Top Posters:');
define('bfcMYSQLSAID','MySQL said: ');
define('bfcJUMPFORUM','Jump To Forum');
define('bfcJUMPFUNCTION','Jump To Function');
define('bfcGETCATEGORYLISTERROR',"Couldn't obtain category list. ");
define('bfcGETFORUMINFOERROR',"Couldn't obtain forums information. ");
define('bfcSELECT','Select');
define('bfcVIEWPOSTSSINCELASTVISIT','View Posts Since Last Visit');
define('bfcVIEWYOURPOSTS','View Your Posts');
define('bfcVIEWUNANSWEREDPOSTS','View Unanswered Posts');
define('bfcFORUMINDEX','Forum Index');
define('bfcSEARCHFORUMS','Search Forums');
define('bfcWATCHEDTOPICS','View/Edit Your Watched Posts');
define('bfcPROFILE','Profile');
define('bfcPRIVATEMESSAGES','Private Messages');
define('bfcFORUM','Forum');
define('bfcTOPIC','Topic');
define('bfcREPLIES','Replies');
define('bfcAUTHOR','Author');
define('bfcVIEWS','Views');
define('bfcLASTPOST','Last Post');
define('bfcSHOWHIDE','Show/Hide');



[SETTINGS]
$hideLinksFromGuests            = TRUE;
- Setting this to TRUE will not allow links to become hyperlinks if only visiting as a guest.  This is advantageous for better search engine rankings as it keeps the number of links down on the page.

$hideTheseForums            = '-1';
- Leave this set to -1 if you are not using.  It must have a value.  From time to time you may have forums that you don't want to see in the block, for various reasons.  Place thos id's in this setting, separated by commas.  You do NOT eed to place hidden and private forums in here.  Those are determinable by the system.  This is for forums that would normally be shown but you want hidden.

$tickerWidth                = '100%';
- Sets the table width for the block.  The block is 100% but this setting will adjust the forum block to whatever percentage that you choose.

$tickerBGColor              = "$bgcolor2";
- This sets the background color of the ticker block.

$tickDelay                  = 4000; // in miliseconds
- Sets the time inbetween changing of the forum information in the top row of the ticker block.  1000 miliseconds = 1 second.

$hideViewReadOnly           = TRUE;
- Setting this to TRUE will cause the block to honor the permissions of the user doing the viewing.  This should always be set to TRUE.

$lastNewTopics              = 25; // Number of topics to show when list is expanded
- Sets the table height of the expanded block.  Set it to the number of latest postings to be shown.

$countTopics                = 0;

$showClosedNum              = 1; // Number of messages that are visible when collapsed - NOT IMPLEMENTED YET

$showJumpBoxex              = TRUE;
- The JumpBox allows the 2 drop down boxes containg shortcuts/links to other functions and forums.

$showTopPosters             = 2;  // 0=None, 1=Username - no avatar,  2=Username and avatar
- When active, this will display the different details about the Top Posters.

$showTopPostersRanks       = 3;  // 0=None, 1=Admin only, 2=Moderator only, 3=Admin and Moderator, 4=All
- When active, this will display the PHPBB rank of the Top Posters.

$showTopPostersNum          = 5;  // Total number of top posters to show
- The total number of Top Posters to show.

$showTopPostersPerRow      = 5;  // Number to show per line
- The maximum number of Top Posters to show per line.

$showTickerMessage         = FALSE; // show/hide the top ticker message
- When set to TRUE it will show the rotating latest post as the top message.

$skipTopPostersUserNames    = "'SKIPME'"; // use a comma separated list with each name in single quotes, like 'user1','user2'.
- If there are certain usernames that you do not want to see in the Top Posters listing, enter them here, comma delimited and in single quotes. For instance, if you have a user that would normally fall out in your Top Posters but is no longer active or for any reason you do not want him/her listed, just add them to this setting. Note that if you want to use an EMPTY setting then you must use "''" as the value or it will err out.

$backendForumsXML          = 'backendforums.php';  //Filename of the xml script.  Assumed in root directory.
- Optionally display an XML button at the top to link to most recent headlines. Leave blank for no button to be shown.
