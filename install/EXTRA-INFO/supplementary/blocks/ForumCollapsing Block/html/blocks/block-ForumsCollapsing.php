<?php
########################################################################
# This program is free software. You can redistribute it and/or modify #
# it under the terms of the GNU General Public License as published by #
# the Free Software Foundation; either version 2 of the License.       #
# If you modify this, let me know for fun. =)                          #
########################################################################
# Raven modified (heavily) to use a collapsing table structure.        #
# Date Released: Original: 01/23/2004                                  #
#              : v2.0.0  : 07/14/2005                                  #
#              : v2.0.1  : 07/16/2005                                  #
#              : v2.1.0  : 08/21/2005                                  #
#              : v2.2.0  : 10/23/2005                                  #
#              : v2.3.0  : 01/19/2006                                  #
#              : v2.3.1  : 02/13/2006                                  #
# Support: http://ravenphpscripts.com                                  #
# Hosting: http://ravenwebhosting.com                                  #
# Version: 2.3.1                                                       #
########################################################################
# Version 2.3.1                                                        #
# 02/13/2006  : Modified default empty $skipTopPostersUserNames="''"   #
#             : due to certain releases of MySQL behavior.             #
#             : Added setting ($showTickerMessage) to control ticker   #
# Version 2.3.0                                                        #
# 11/27/2005  : Modified behavior of $showJumpBox to $showJumpBoxes    #
#             : Added setting ($showTickerMessage) to control ticker   #
# 11/13/2005  : Converted drop down boxes to use FieldSet              #
#             : Removed underlining of Jump To boxes                   #
#             : Added style tag for text color to optgroup             #
# 01/19/2006  : Added style sheet for show/hide button                 #
#             : Moved language defines to their own language folder    #
# Version 2.2.0                                                        #
# 10/23/2005  : Released.                                              #
# 10/23/2005  : Automated the recognizing of Admin and Moderators.     #
# 10/21/2005  : Restored some links that had been mistakenly GT'd.     #
# 10/20/2005  : Fixed links and titles for differentiatng forum, topic #
#               and last topic post.        .                          #
# 10/19/2005  : Added setting for number of posters/row and automated  #
#               the newline routine for same.                          #
# 10/15/2005  : Modified TopTenPoster verbiage and code to Top Posters.#
#               to allow for varying number to show.                   #
# 10/16/2005  : Modified code to not show hyper-links of profiles to   #
#               Anaonymous users.  This is for better SEO. It is       #
#               controllable through setting $hideLinksFromGuests      #
# Version 2.1.0                                                        #
# 08/21/2005  : Added routine to allow manual hiding of selected forums#
#               Renamed a few variables for standardization purposes.  #
# 08/20/2005  : Added routine to adjust displayed post time by profile #
# 08/13/2005  : Added border="0" to xmlicon - Thanks CurtisH           #
#               Added manual routines to recognise admins and mods in  #
#               order to hilite their roles when mousing over their    #
#               icons in the Top 10 posters. This could be automated,  #
#               but until that happens, this will suffice.             #
# Version 2.0.1                                                        #
# 07/16/2005  : Fixed layout of ticking message                        #
# Version 2.0.0                                                        #
# 07/14/2005  : Added a drop down box for a Jump-To Forum.  This was   #
#               suggested by ring_c. It has an optional switch.        #
#             : Converted several navigational links to drop down.     #
#             : Converted all text to language defines.                #
#             : Created some settings to make more flexible.           #
#             : Added ability to exclude user names from top ten list. #
# 06/19/2005  : Removed some not used code.                            #
#               Added top ten posters with avatars.  Made it optional. #
# 05/03/2005  : Added Watched Posts to header menu                     #
# 02/14/2004  : optimized sql for faster building                      #
# 05/25/2004  : Added code to identify the Forum and Section           #
# 06/28/2004  : Fixed code to show the Forum and Section when NOT in   #
#               hideViewReadOnly mode.                                 #
# 12/03/2004  : Added truncation to poster name and last replied name. #
########################################################################
global $user_prefix, $db, $sitename, $admin, $user, $bgcolor1, $bgcolor2, $textcolor1, $textcolor2;

$hideLinksFromGuests	   	= TRUE;
$hideTheseForums     		= '-1';  // use a comma delimited list of forum id's to hide like '1,5,8'
$tickerWidth         		= '100%';
$tickerBGColor       		= "$bgcolor2";
$tickDelay           		= 4000; // in miliseconds
$hideViewReadOnly    		= TRUE;
$lastNewTopics       		= 25; // Number of topics to show when list is expanded
$countTopics         		= 0;
$showClosedNum			   	= 1; // Number of messages that are visible when collapsed - NOT IMPLEMENTED YET
$showJumpBoxes         		= TRUE; // Display or don't display the 2 Jump Boxes
$showTopPosters      		= 2;  // 0=None, 1=Username - no avatar,  2=Username and avatar
$showTopPostersRanks       = 3;  // 0=None, 1=Admin only, 2=Moderator only, 3=Admin and Moderator, 4=All
$showTopPostersNum			= 5;  // Total number of top posters to show
$showTopPostersPerRow      = 5;  // Number to show per line
$showTickerMessage         = TRUE; // show/hide the top ticker message
$skipTopPostersUserNames	= "''"; // use a comma separated list with each name in single quotes, like 'user1','user2'. Leace the default as "''" or it will err!
$backendForumsXML          = 'backendforums.php';  //Filename of the xml script.  Assumed in root directory.

//////////////////////////////////////////////////////////////////
// THERE SHOULD BE NO NEED TO EDIT BELOW THIS LINE
if(!defined('NUKE_EVO')) exit;

require('language/rwsforumcollapsing/lang-english.php');
$currentReporting = error_reporting();
error_reporting(0);
//
// The following should not be changed.  If you need to modify them, modify them in the language folder.
// These are strictly local scope
$bfcShowHide         = bfcSHOWHIDE;
$bfcJumpForum        = bfcJUMPFORUM;
$bfcJumpFunction     = bfcJUMPFUNCTION;
$bfcForum            = bfcFORUM;
$bfcTopic            = bfcTOPIC;
$bfcReplies          = bfcREPLIES;
$bfcAuthor           = bfcAUTHOR;
$bfcViews            = bfcVIEWS;
$bfcLastPost         = bfcLASTPOST;

// Calculate posting time offset for user defined timezones
$serverTimeZone = date("Z")/3600;
if ($serverTimeZone >= 0) $serverTimeZone = "+".$serverTimeZone;
if (is_user($user)) {
	$userinfo     = getusrinfo($user);
	$userTimeZone = $userinfo['user_timezone'];
}
else {
	$sql  = "SELECT config_value FROM ".$user_prefix."_bbconfig WHERE config_name='board_timezone'";
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrow($result);
	$userTimeZone = $rows['config_value'];
}
$userTimeZone = ($userTimeZone - $serverTimeZone)*3600;
if (!is_numeric($userTimeZone)) $userTimeZone = 0;

if ($showTopPosters==1 OR $showTopPosters==2) {
	$sql = "SELECT user_id, username, user_posts, user_avatar, user_level, rank_title, rank_id FROM ".$user_prefix."_users u LEFT JOIN ".$user_prefix."_bbranks r on u.user_rank=r.rank_id where username NOT IN ($skipTopPostersUserNames) ORDER BY user_posts DESC LIMIT 0,$showTopPostersNum";
	$result=$db->sql_query($sql);
	$contentXML = '';
	if (strlen($backendForumsXML)>0) $contentXML = '<center><a href="backendforums.php" title="'.bfcBACKENDTITLE.'"><img src="images/blocks/xmlicon.gif" alt="" border="0" /></a></center>';
	$content .= "<br /><div align=\"center\"><strong><u>".bfcTOPPOSTERS."</u></strong><br /><br /><table class=\"outer\" cellpadding=\"0\" style=\"border-collapse: collapse; border-color:$textcolor1;\" cellspacing=\"1\" border=\"0\">";
	$cycle = 1;
	$content .= "<tr class=\"even\" vAlign=\"middle\">";
	while(list($user_id, $username, $user_posts, $user_avatar, $user_level, $rank_title, $rank_id) = $db->sql_fetchrow($result)) {
		$staffTitle = '';
		$username_color = UsernameColor($username);
		if ($showTopPostersRanks==3)
			if ($user_level==2||$user_level==3) $staffTitle = 'title="'.$rank_title.'"';
			else $staffTitle = '';
		elseif ($showTopPostersRanks==4) $staffTitle = 'title="'.$rank_title.'"';
		elseif ($showTopPostersRanks==1)
			if ($user_level==2) $staffTitle = 'title="'.$rank_title.'"';
			else $staffTitle = '';
		elseif ($showTopPostersRanks==2)
			if ($user_level==3) $staffTitle = 'title="'.$rank_title.'"';
			else $staffTitle = '';

		$newLine = FALSE;
		if ($showTopPosters==2) {
			$content .= "<td align=\"center\">";
			if ($user_avatar=="") {
				$content .= "&nbsp;&nbsp;<a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$user_id\" $staffTitle><img alt='' src=\"modules/Forums/images/avatars/noimage.gif\" border =\"0\" width=\"32\" /></a></td>";
			}
			elseif (eregi("http://", $user_avatar)) {
				$content .= "&nbsp;&nbsp;<a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$user_id\" $staffTitle><img alt='' src=\"$user_avatar\" border =\"0\" width=\"32\" /></a></td>";
			}
			else $content .= "&nbsp;&nbsp;<a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$user_id\" $staffTitle><img alt='' src=\"modules/Forums/images/avatars/$user_avatar\" border =\"0\" width=\"32\" /></a></td>";
		}
		$content .= "<td align=\"center\">&nbsp;<a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$user_id\" $staffTitle>$username_color</a>&nbsp;<br />&nbsp;<!--a href=\"modules.php?name=Forums&file=search&mode=results&search_author=$username\" $staffTitle-->Posts:<!--/a-->";
		$content .= "&nbsp;<!--a href=\"modules.php?name=Forums&file=search&mode=results&search_author=$username\" $staffTitle-->$user_posts<!--/a-->&nbsp;</td>";
		if (!($cycle%$showTopPostersPerRow)) $content .= "</tr>";
		$cycle++;
	}
	$content .= "</table></div><br />";
}
if ($hideLinksFromGuests&&!(is_admin($admin)||is_user($user))) $content = strip_tags($content,'<br /><tr><td><strong><img><center><table><div><u>');
$content = $contentXML.$content;

if ($showJumpBoxes) {
		include_once('includes/constants.php');
		$sql = "SELECT c.cat_id, c.cat_title, c.cat_order
			FROM " . $user_prefix . "_bbcategories c, " . $user_prefix . "_bbforums f
			WHERE f.cat_id = c.cat_id
			GROUP BY c.cat_id, c.cat_title, c.cat_order
			ORDER BY c.cat_order";
		if ( !($result = $db->sql_query($sql)) )
		{
			$content = bfcGETCATEGORYLISTERROR.bfcMYSQLSAID.mysql_error();
		}

		$category_rows = array();
		while ( $row = $db->sql_fetchrow($result) )
		{
			$category_rows[] = $row;
		}

		if ( $total_categories = count($category_rows) )
		{
			$sql = "SELECT *
				FROM " . $user_prefix . "_bbforums
				ORDER BY cat_id, forum_order";
			if ( !($result = $db->sql_query($sql)) )
			{
				$content = bfcGETFORUMINFOERROR.bfcMYSQLSAID.mysql_error();
			}

			$boxstring = '<select name="' . POST_FORUM_URL . '" onchange="if(this.options[this.selectedIndex].value != -1){ top.location.href=this.options[this.selectedIndex].value }"><optgroup label="' . 'Select Forum' . '" style="color:'.$textcolor2.'"><option value="-1">&nbsp;</option></optgroup>';

			$forum_rows = array();
			while ( $row = $db->sql_fetchrow($result) )
			{
				$forum_rows[] = $row;
			}

			if ( $total_forums = count($forum_rows) )
			{
				for($i = 0; $i < $total_categories; $i++)
				{
					$boxstring_forums = '';
					for($j = 0; $j < $total_forums; $j++)
					{
						if ( $forum_rows[$j]['cat_id'] == $category_rows[$i]['cat_id'] && $forum_rows[$j]['auth_view'] <= AUTH_REG )

//					if ( $forum_rows[$j]['cat_id'] == $category_rows[$i]['cat_id'] && $is_auth[$forum_rows[$j]['forum_id']]['auth_view']<= AUTH_REG )
					{
							$selected = ( $forum_rows[$j]['forum_id'] == $match_forum_id ) ? 'selected="selected"' : '';
							$boxstring_forums .=  '<option value="modules.php?name=Forums&file=viewforum&f=' . $forum_rows[$j]['forum_id'] . '"' . $selected . '>' . $forum_rows[$j]['forum_name'] . '</option>';
						}
					}

					if ( $boxstring_forums != '' )
					{
						$boxstring .= '<optgroup label="' . $category_rows[$i]['cat_title'] . '" style="color:'.$textcolor2.'">';
						$boxstring .= $boxstring_forums.'</optgroup>';
					}
				}
			}
			$boxstring .= '</select>';
		}
		else
		{
			$boxstring .= '<select name="' . POST_FORUM_URL . '" onchange="if(this.options[this.selectedIndex].value != -1){ top.location.href=this.options[this.selectedIndex].value }"></select>';
		}

		if ( !empty($SID) )
		{
			$boxstring .= '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
		}

$links = '<select onchange="if(this.options[this.selectedIndex].value != -1){ top.location.href=this.options[this.selectedIndex].value }"><optgroup style="color:'.$textcolor2.';" label="'.bfcSELECT.'"><option value="-1">&nbsp;</option>';
$links .= "<option value=\"modules.php?name=Forums&file=search&search_id=unanswered\">".bfcVIEWUNANSWEREDPOSTS."</option>";
$links .= "<option value=\"modules.php?name=Forums\">".bfcFORUMINDEX."</option>";
$links .= "<option value=\"modules.php?name=Forums&file=search\">".bfcSEARCHFORUMS."</option>";
if (is_user($user)) {
	$links  .= "<option value=\"modules.php?name=Forums&file=search&search_id=newposts\">".bfcVIEWPOSTSSINCELASTVISIT."</option>";
	$links  .= "<option value=\"modules.php?name=Forums&file=search&search_id=egosearch\">".bfcVIEWYOURPOSTS."</option>";
	$links .= "<option value=\"modules.php?name=Watched_Topics\">".bfcWATCHEDTOPICS."</option>";
	$links .= "<option value=\"modules.php?name=Forums&file=profile&mode=editprofile\">".bfcPROFILE."</option>";
	$links .= "<option value=\"modules.php?name=Private_Messages&amp;file=index&amp;folder=inbox\">".bfcPRIVATEMESSAGES."</option>";
}
$links .= "</optgroup></select>";
if ($showJumpBoxes) $content .= <<<_JS_
<center><table align="center" width="100%"><tr><td align="center" ><strong>$bfcJumpFunction</strong></td><td align="center"><strong>$bfcJumpForum</strong></td></tr>
					<tr><td align="center">$links</td><td align="center">$boxstring</td></tr>
			</table>
<br />
_JS_;

$content .= <<<_JS_
<table><tr><th height="25" align="center" nowrap width="49%"><font color="$textcolor1"><strong><i>[$bfcForum]</i>&nbsp;$bfcTopic</strong></font></th><th width="3%" align="center" nowrap><font color="$textcolor1"><strong>&nbsp;$bfcReplies&nbsp;</strong></font></th><th width="17%" align="center" nowrap><font color="$textcolor1"><strong>&nbsp;$bfcAuthor&nbsp;</strong></font></th><th width="3%" align="center" nowrap><font color="$textcolor1"><strong>&nbsp;$bfcViews&nbsp;</strong></font></th><th align="center" nowrap><font color="$textcolor1"><strong>&nbsp;$bfcLastPost&nbsp;</strong></font></th></tr></table></center>
_JS_;
}
$result = $db->sql_query( "SELECT t.topic_id, t.forum_id, t.topic_last_post_id, t.topic_title, t.topic_poster, t.topic_views, t.topic_replies, t.topic_moved_id, t.topic_status, f.forum_name FROM ".$user_prefix."_bbtopics t,".$user_prefix."_bbforums f WHERE t.forum_id NOT IN($hideTheseForums) AND t.forum_id=f.forum_id ORDER BY t.topic_last_post_id DESC");

$content .= "\n\n<script type=\"text/javascript\">\nvar tickercontents=new Array();\n";
$cnt = 0;
while( list( $topic_id, $forum_id, $topic_last_post_id, $topic_title, $topic_poster, $topic_views, $topic_replies, $topic_moved_id, $topic_status, $forum_name ) = $db->sql_fetchrow( $result ) )

{
   $skip_display = 0;
   $result1 = $db->sql_query( "SELECT auth_view, auth_read, forum_name, cat_id FROM ".$user_prefix."_bbforums where forum_id = '$forum_id'");
   list( $auth_view, $auth_read, $forum_name, $cat_id ) = $db->sql_fetchrow( $result1 );

   if( $hideViewReadOnly)
   {
      if( ( $auth_view != 0 ) or ( $auth_read != 0 ) ) { $skip_display = 1; }
   }

   if( $topic_moved_id != 0 )
   {
	  // Shadow Topic !!
      $skip_display = 1;
   }

   if( $skip_display == 0 )
   {
	  $countTopics += 1;
$result5 = $db->sql_query("SELECT cat_title FROM ".$user_prefix."_bbcategories where cat_id='$cat_id'");
list($cat_title)=$db->sql_fetchrow($result5);
$result2 = $db->sql_query("SELECT username, user_id FROM ".$user_prefix."_users where user_id='$topic_poster'");
list($username, $user_id)=$db->sql_fetchrow($result2);
$avtor=$username;
$sifra=$user_id;
$result4 = $db->sql_query("SELECT u.username, u.user_id, p.poster_id, FROM_UNIXTIME(p.post_time + $userTimeZone) as post_time FROM ".$user_prefix."_users u, ".$user_prefix."_bbposts p where u.user_id=p.poster_id AND p.post_id='$topic_last_post_id'");
list($username, $user_id, $poster_id, $post_time)=$db->sql_fetchrow($result4);
$_username = substr($username,0,15);
$_avtor = substr($avtor,0,15);
if ($topic_status) $lockTopic = "<img src='/images/blocks/locktopicgray.gif' width='14' height='14' alt='".bfcTOPICLOCKED."' title='".bfcTOPICLOCKED."' border='none' /> ";
else $lockTopic = "";
if (!$hideLinksFromGuests||is_admin($admin)||is_user($user)) {
$content .= <<<_JS_
	tickercontents[$cnt] = "<tr><td width=\"60%\" bgcolor=\"$bgcolor1\" class=\"row1\"><a href=\"modules.php?name=Forums&file=viewforum&f=$forum_id\" title=\"$forum_name\"><span style=\"text-decoration:none;font-style: italic\">[$cat_title:&nbsp;$forum_name]<\/span><\/a><br /><a href=\"modules.php?name=Forums&file=viewtopic&t=$topic_id\" title=\"$topic_title\"><span style=\"text-decoration:none;\">&nbsp;$lockTopic$topic_title<\/span><\/a><\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row2\" width=\"5%\">$topic_replies<\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row3\" width=\"20%\"><a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$sifra\">$_avtor<\/a><\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row2\" width=\"5%\">$topic_views<\/td><td align=\"center\" nowrap bgcolor=\"$bgcolor1\" class=\"row3\"><font size=\"-2\" width=\"10%\"><i>&nbsp;&nbsp;$post_time&nbsp;<\/i><\/font><br /><a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$user_id\">$_username<\/a>&nbsp;<a href=\"modules.php?name=Forums&file=viewtopic&p=$topic_last_post_id#$topic_last_post_id\"><img src=\"images/blocks/icon_minipost_new.gif\" alt=\"Last Post\" border=\"0\" \/><\/a><\/td><\/tr>";
_JS_;
}
else {
$content .= <<<_JS_
	tickercontents[$cnt] = "<tr><td width=\"60%\" bgcolor=\"$bgcolor1\" class=\"row1\"><a href=\"modules.php?name=Forums&file=viewtopic&p=$topic_last_post_id#$topic_last_post_id\" title=\"$topic_title\"><span style=\"text-decoration:none;font-style: italic\">[$cat_title:&nbsp;$forum_name]<\/span><br />&nbsp;$lockTopic$topic_title<\/a><\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row2\" width=\"5%\">$topic_replies<\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row3\" width=\"20%\">$_avtor<\/td><td align=\"center\" bgcolor=\"$bgcolor1\" class=\"row2\" width=\"5%\">$topic_views<\/td><td align=\"center\" nowrap bgcolor=\"$bgcolor1\" class=\"row3\"><font size=\"-2\" width=\"10%\"><i>&nbsp;&nbsp;$post_time&nbsp;<\/i><\/font><br />$_username<\/td><\/tr>";
_JS_;
}
$content = str_replace(chr(153),"(tm)",$content);
$cnt++;
}
   if( $lastNewTopics == $countTopics ) { break 1; }

}
$cnt--;

$content .= <<<_JS_
tickercontents[0] = "<table>"+tickercontents[0];
tickercontents[$cnt] = tickercontents[$cnt]+"<\/table>";
_JS_;

// BEGIN - DHTML code for the collapsing table
$js = <<< _JS_

//configure the below 2 variables to set the width/background color of the ticker.  These are set at the top of this script and carried to here for convenience.
var tickerwidth="$tickerWidth";
var tickerbgcolor="$tickerBGColor";

//configure the below variable to determine the delay between ticking of messages (in miliseconds).  This is set at the top of this script and carried to here for convenience.
var tickdelay=$tickDelay;

////Do not edit pass this line////////////////

var ie4=document.all
var ns6=document.getElementById
var ns4=document.layers

var currentmessage=0
var tickercontentstotal=''

function changetickercontent(){
_JS_;

if ($showTickerMessage) {
	$js .= "tickercontents[currentmessage] = '<table>'+tickercontents[currentmessage]+'<\/table>'\n";
}
else $js .= "\ntickercontents[currentmessage] = 'Click on the Show/Hide text (on the far right) to expand/collapse this block'";

$js .= <<< _JS_

	if (ns4){
		tickerobj.document.tickernssub.document.write('<strong><a href="#" onClick="return expandlist(event)">$bfcShowHide<\/a><\/b> | '+tickercontents[currentmessage])
		tickerobj.document.tickernssub.document.close()
	}
	else if (ie4||ns6){
		tickerobj.innerHTML=tickercontents[currentmessage]
		previousmessage=(currentmessage==0)? tickercontents.length-1 : currentmessage-1
		tickerexpand_item=ns6? document.getElementById("expand"+currentmessage) : eval("expand"+currentmessage)
		tickerexpand_previousitem=ns6? document.getElementById("expand"+previousmessage) : eval("expand"+previousmessage)
		tickerexpand_previousitem.className=""
		tickerexpand_item.className="expandhighlight"
	}
_JS_;

if ($showTickerMessage) {
	$js .= "\ncurrentmessage=(currentmessage==tickercontents.length-1)? 0 : currentmessage+1\n";
	$js .= "\nsetTimeout(\"changetickercontent()\",tickdelay)";
}

$js .= "\n}\n";

$js .= <<< _JS_
function start_ticking(){
	if (ns4) document.tickernsmain.visibility="show"
	tickerobj=ie4? tickerlist : ns6? document.getElementById("tickerlist") : ns4? document.tickernsmain : ""
	tickerexpandobj=ie4? tickerexpand : ns6? document.getElementById("tickerexpand") : ns4? document.expandlayer : ""

	for (i=0;i<tickercontents.length;i++) //get total scroller contents
		tickercontentstotal+='<div id="expand'+i+'">'+tickercontents[i]+'<\/div>'
	if (ie4||ns6)
		tickerexpandobj.innerHTML=tickercontentstotal
	else{
		tickerexpandobj.document.write(tickercontentstotal)
		tickerexpandobj.document.close()
	}
	changetickercontent()
}

function expandlist(e){
	if (ie4||ns6){
		tickerexpand_parent=ie4? tickerexpand.parentElement : document.getElementById("tickerexpand").parentNode
		tickerexpand_parent.style.display=(tickerexpand_parent.style.display=="none")? "" : "none"
	}
	else{
		document.expandlayer.left=e.pageX-e.layerX
		document.expandlayer.top= e.pageY-e.layerY+20
		document.expandlayer.visibility=(document.expandlayer.visibility=="hide")? "show" : "hide"
		return false
	}
}

if (ie4||ns6)
document.write('<table border="0" style="width:'+tickerwidth+';border:1px solid black;text-indent:2px" bgcolor="'+tickerbgcolor+'" cellspacing="0" cellpadding="0"><tr><td width="90%" id="tickerlist" bgcolor="'+tickerbgcolor+'"><\/td><td width="10%" bgcolor="'+tickerbgcolor+'"><div id="listbutton" onClick="expandlist()">$bfcShowHide<\/div><\/td><\/tr><tr style="display:none"><td id="tickerexpand" width="90%" bgcolor="'+tickerbgcolor+'"> <\/td><td width="10%"><\/td><\/tr><\/table>')

    if (window.addEventListener)
        window.addEventListener("load", start_ticking, false)
    else if (window.attachEvent)
        window.attachEvent("onload", start_ticking)
    else if (document.getElementById)
        womAdd('start_ticking()');
</script>

_JS_;
// END - DHTML code for the collapsing table

$content .= "\n".$js."\n\n<!-- END TRACE -->\n\n";
$content = "\n\n<!-- BEGIN TRACE -->\n\n".$content;
error_reporting($currentReporting);
?>