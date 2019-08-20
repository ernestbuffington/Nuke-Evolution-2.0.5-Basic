<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**
 *
 * @version V2.0
 * @date 5 December 2004
 *
 * Arcade Games Nuke 6.5+ Module
 * -----------------------------
 * Author: Rica http://www.thehorde.be
 * Date: 5 December 2004
 * License: Free/GPL
 *
 * Purpose: PHP-Nuke 6.5+ Module Addon for the ported Arcad Mod
 *          from http://arcade.portedmods.com  V3.1 AND above
 *             - It's an independant module that permit users to search
 *             games in the 'Arcade Mod' database.
 *             - Alternative to the phpBB main Arcade Page
 *             - Allow to view list of newest games , last played games,
 *             Most AND Least Popular, TOP 10 players, Last High Scores
 *
 * Languages:
 *             Danish    - NiceM http://www.origon.dk
 *             English - Rica http://www.thehorde.be
 *             French  - Rica http://www.thehorde.be
 *             Spanish - Socket http://www.los-elegidos.com
 *             Thai    - 9uiTarZ Chaiyaphat Jirawibhas : guitarzonline@hotmail.com
 *
 * Interrest:
 *             Pure Nuke Module, you dont need to modify/hack any files
 *             from the ported arcade modules.
 *
 * Installation:
 *             Same for all PHPNuke modules :
 *           - Upload html/* to Nukeroot/*
 *              - Check your Administration/Modules in PHP-Nuke and
 *                Activate the 'Arcade Games' Module
 *              - Set permission to Administrator , if you just want to test it
 *                or visitors/members/subscribers depending of your preferences.
 *
 *
 * I wouls like to thanks :
 *         - original Author of the Arcade Module :
 *                 Giefca from http://www.Gf-phpBB.com
 *
 *         - The portedmods Team that made the port
 *                 Barcrest
 *                 JRSweets
 *                 PhantomK
 *                 TheSwede
 *
 *         - Portedmods Admins - http://www.portedmods.com
 *                 Anor
 *                 Mighty-Y
 *
 * Legal Warnings:
 *             My code are test code. Use it at your own risk. If you cant afford
 *             the risk. Dont use it !
 *
 * Version Information
 * 2.0 5 December 2004
 *         - Language files (Thanks to all guys who translate the language files)
 *         - Added an All Games Links
 *         - Added Arcade Thread Message support
 *         - Added Arcade Rate-It Mode Support
 *         - Added Play in Popup Link
 *         -
 *         - Added extra admin configuration Option
 *             - Right Block
 *             - Game Icon Size
 *             - Games by page
 *             - Top Message (with bbcode support)
 *             - Rating
 *             - Arcade Thread  (with bbcode suppport)
 *             - Popup Link
 *
 * NB: Of course , enable option for modules you have installed only ..... :)
 *                  It's not enough to enable "Rating" if you didnt install "Rate mod"
 *                 or Aracade thread .
 * NB2:            Popup Link  is a feature of the V3.0.2
 *
 * 1.0 First Release 5 October 2004
 **/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/20/2005
-=[Mod]=-
      Advanced Username Color                  v1.0.5       12/10/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die ("You can't access this file directly...");
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

require_once(NUKE_BASE_MODULES.'mainfile.php');
include_once(NUKE_MODULES_DIR.$module_name.'/bbcode.inc.php');

$ArcadeGamesVersion="2.0";
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

define('ag_PLAYGAMEURL',"modules.php?name=Forums&amp;file=games&amp;gid=" );
define('ag_PLAYPOPUPGAMEURL',"modules.php?name=Forums&amp;file=gamespopup&amp;gid=" );
define('ag_ADDGAMEFAVORI',"modules.php?name=Forums&amp;file=arcade&amp;favori=" );
define('ag_ADMINGAMEURL',"modules/Forums/admin/arcade_elmt.php?mode=edit&amp;game_id=");
define('ag_USERSTATSURL',"modules.php?name=Forums&amp;file=statarcade&amp;uid=");
define('ag_GAMESCORE',"modules.php?name=Forums&amp;file=scoreboard&amp;gid=");
define('ag_AGMODURL',"modules.php?name=$module_name");
define('ag_AGMODURLOP',ag_AGMODURL."&amp;op=");

global $db, $prefix, $admin;

$sql="SELECT * FROM ".$prefix."_bbarcade";
$result=$db->sql_query($sql)
    or die(_AG_CANNOTREADCONFIG);
$arcadeconfig=array();
while($row=$db->sql_fetchrow($result)){
    $arcadeconfig[$row['arcade_name']]=$row['arcade_value'];
}

//default values
if (!isset($arcadeconfig['nag_NumberGamesShown'])) {
    $arcadeconfig['nag_NumberGamesShown']=30;
}
if (!isset($arcadeconfig['nag_ShowRightBlock'])) {
    $arcadeconfig['nag_ShowRightBlock']=1;
}
if (!isset($arcadeconfig['nag_IconSize'])) {
    $arcadeconfig['nag_IconSize']=60;
}
if (!isset($arcadeconfig['nag_RankShown'])) {
    $arcadeconfig['nag_RankShown']=0;
}
if (!isset($arcadeconfig['nag_TopInfo'])) {
    $arcadeconfig['nag_TopInfo']="";
}
if (!isset($arcadeconfig['nag_ShowPopupLink'])) {
    $arcadeconfig['nag_ShowPopupLink']=0;
}
if (!isset($arcadeconfig['nag_EnableRateStats'])) {
    $arcadeconfig['nag_EnableRateStats']=0;
}
if (!isset($arcadeconfig['nag_ShowHighScoreComment'])) {
    $arcadeconfig['nag_ShowHighScoreComment']=0;
}
if (!isset($arcadeconfig['nag_UseArcadeThread'])) {
    $arcadeconfig['nag_UseArcadeThread']=0;
}

if (is_admin()) {
    if (!isset($arcadeconfig['nag_version'])) { // First Installation
        agAdminConfig();
        exit();
    }
    elseif ($arcadeconfig['nag_version']!=$ArcadeGamesVersion){
        // for update when needed, useless right now
        die(_AG_VERSIONCONFLICT);
    }
}
if (!isset($offset)) {
    $offset=0;
}else{
    $offset=intval($offset);
}

$index=$arcadeconfig['nag_ShowRightBlock'];

// Javascript for popup Link
?>
<script language="Javascript">
var win = null;
function Arcade_Popup(mypage,myname,w,h,scroll)
{
  LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
  TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
  settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',status='+scroll+',resizable=yes';
  win = window.open(mypage,myname,settings);
}
    </script>
<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

function ArcadeGamesHeader(){
     global $module_name, $ArcadeGamesVersion,$prefix,$db,$arcadeconfig, $user_prefix;
     include_once(NUKE_BASE_DIR.'header.php');
     title(_AG_ARCADEGAMES." $ArcadeGamesVersion");

     echo "<table width=\"100%\" border=0>";
     echo "<tr><td align=\"center\">[&nbsp;";
     echo "<a href='".ag_AGMODURLOP."highscores' class=\"content\">"._AG_LASTHIGHSCORES."</a>";
     echo "&nbsp;|&nbsp;";
     echo "<a href='".ag_AGMODURLOP."newestgames' class=\"content\">"._AG_NEWESTGAMES."</a>";
     echo "&nbsp;|&nbsp;";
     echo "<a href='".ag_AGMODURLOP."lastplayed' class=\"content\">"._AG_LASTPLAYED."</a>";
     echo "&nbsp;|&nbsp;";
     echo "<a href='".ag_AGMODURLOP."category' class=\"content\">"._AG_BYCATEGORY."</a>";
      echo "&nbsp;]</td></tr>";
     echo "<tr><td align=\"center\">[&nbsp;";
     echo "<a href='".ag_AGMODURLOP."mostpopular' class=\"content\">"._AG_MOSTPOPULAR."</a>";
     echo "&nbsp;|&nbsp;";
     echo "<a href='".ag_AGMODURLOP."leastpopular' class=\"content\">"._AG_LEASTPOPULAR."</a>";
      echo "&nbsp;|&nbsp;";
     echo "<a href='".ag_AGMODURLOP."top10' class=\"content\">"._AG_RANKING."</a>";
       echo "&nbsp;|&nbsp;";
     if ($arcadeconfig['nag_EnableRateStats']==1) {
         echo "<a href='".ag_AGMODURLOP."byrate' class=\"content\">"._AG_BYRATE."</a>";
         echo "&nbsp;|&nbsp;";
     }
     echo "<a href='".ag_AGMODURLOP."allgames' class=\"content\">"._AG_ALLGAMES."</a>";
     echo "&nbsp;]</td></tr>";
     global $admin;
     if (is_admin()) {
              echo "<tr><td align=\"center\">"._AG_ADMIN.": [&nbsp;";
             echo "<a href='".ag_AGMODURLOP."adminconfig' class=\"content\">"._AG_CONFIG."</a>";
             echo "&nbsp;]</td></tr>";
     }
     echo "</table>";

     OpenTable();
     echo "<table width=\"100%\" align=\"center\"><tr><td width=\"50%\">";
     agSearchDBForm();
     echo "</td><td>";

     $sql = "SELECT u.username, u.user_id, g.game_name, g.game_id "
           ."FROM ".$prefix."_bbgamehash gh "
           ."LEFT JOIN ".$prefix."_bbsessions s ON gh.user_id = s.session_user_id "
           ."LEFT JOIN ".$user_prefix."_users u ON gh.user_id = u.user_id "
           ."LEFT JOIN ".$prefix."_bbgames g ON gh.game_id = g.game_id "
           ."WHERE gh.hash_date >= s.session_time AND (" . time() . "- gh.hash_date <= 300) "
           ."GROUP BY u.user_id "
           ."ORDER BY gh.hash_date DESC";
     $result=$db->sql_query($sql);
     echo sprintf(_AG_XUSERSPLAYING,$db->sql_numrows());
     if ($db->sql_numrows()) {
          echo "<br />|";
         while($row=$db->sql_fetchrow($result)){
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
             echo "&nbsp;<a href='".ag_USERSTATSURL.$row['user_id']."'>".UsernameColor($row['username'])."</a> on <a href='".ag_PLAYGAMEURL.$row['game_id']."'>".$row['game_name']."</a> |";
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
         } // while
     }
     echo "</td></tr>";

     //statistic line
     echo "<tr><td colspan=\"2\" align=\"center\">";
     $sql = "SELECT COUNT(game_id) AS nbj,SUM(game_set) AS total_partie  FROM " .$prefix."_bbgames";
     $result = $db->sql_query($sql) or die(_AG_CANNOTREADDATABASE.": ".mysql_error());
     while ( $row = $db->sql_fetchrow($result) ){$res[] = $row;}
     $sql = "SELECT SUM(score_time) AS score_time , COUNT(DISTINCT user_id) AS total_user FROM " .$prefix."_bbscores";
     $result = $db->sql_query($sql)or die(_AG_CANNOTREADDATABASE.": ".mysql_error());
     while ( $row = $db->sql_fetchrow($result) ){$res2[] = $row;}
     echo sprintf(_AG_STATSLINE,$res2[0]['total_user'],$res[0]['total_partie'],$res[0]['nbj']);
     echo "</td></tr>";
     //end of statistic line
     if (!empty($arcadeconfig['nag_TopInfo'])) {
        $bbcode=new BBCode_Arcade();
         echo "<tr><td colspan=\"2\">".$bbcode->bbcode_to_html($arcadeconfig['nag_TopInfo'])."</td></tr>";
     }

     echo "</table>";
     CloseTable();
      OpenTable();
}
function ArcadeGamesFooter(){
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function ArcadeGamesTableHeader($ExtraHeader=""){
    if (true) {
            echo "     <table width=\"100%\" border=\"0\">\n";
            echo "<tr>";
            echo "<th width=\"150\">"._AG_NAME."</th>";
            echo "<th width=\"200\">"._AG_CHAMPION."</th>";
            echo "<th width=\"100\">"._AG_STATS."</th>";
            echo "<th>Info</th>";
            echo "$ExtraHeader</tr>";
    }else {
            echo "     <table width=\"100%\" border=\"1\">\n";
            echo "        <tr><td colspan='2' align=\"center\">"._AG_NAME."</td>";
                        echo "<td align=\"center\">"._AG_DESCRIPTION."</td>";
                        echo "<td align=\"center\">"._AG_HIGHSCORE."</td>";
                        echo "<td align=\"center\">"._AG_PLAYED."</td>";
            echo "$ExtraHeader</tr>\n";
    }
}
function ArcadeGamesTableFooter(){
    echo "    </table>\n";
}

function RateForm($gameid){
    return "<form action='".ag_AGMODURLOP."rateit' method='POST'>
                                    <input type='hidden' name='gid' value='$gameid'>
                                    <select name='ratevalue'>
                                        <option>0 - "._AG_BAD."</option>
                                        <option>1 - </option>
                                        <option>2 - </option>
                                        <option>3 - </option>
                                        <option>4 - </option>
                                        <option selected>5 - "._AG_AVERAGE."</option>
                                        <option>6 - </option>
                                        <option>7 - </option>
                                        <option>8 - </option>
                                        <option>9 - </option>
                                        <option>10- "._AG_UBER."</option>
                                    </select><input type='submit' />
                                    </form>";
}
// Format Data for a line of game's information
function agGamesDBRow($row,$extracolumninfo=NULL)
{
    global  $module_name,$admin,$db,$prefix,$user_prefix,$arcadeconfig;
    $picdirectory="modules/Forums/games/pics/";
    echo "  <tr>\n";
    $iconsize=$arcadeconfig['nag_IconSize'];

    $sql="SELECT s.*, u.username, c.comments_value "
        ."FROM ".$prefix."_bbscores s "
        ."LEFT JOIN ".$user_prefix."_users u ON u.user_id=s.user_id "
        ."LEFT JOIN ".$prefix."_bbarcade_comments c ON c.game_id=".$row['game_id']." "
        ."WHERE s.game_id=".$row['game_id']." "
        ."ORDER BY s.score_game DESC LIMIT 0,1";
    $result=$db->sql_query($sql) or die(mysql_error());
    $row2=$db->sql_fetchrow($result);

    if ($arcadeconfig['nag_EnableRateStats']) {
        $sql="SELECT SUM(gr.rate) AS sumrate, COUNT(gr.user_id) AS numrate,(SUM(gr.rate)/count(gr.user_id)) AS rate  "
            ."FROM ".$prefix."_bbgames_rate gr "
            ."WHERE gr.game_id=".$row['game_id'];
        $result=$db->sql_query($sql) or die(__FILE__.",Line:".__LINE__.":". mysql_error());
        $ratingrow=$db->sql_fetchrow($result);
    }
    //First 2 cols
    if (true) {
        echo "<td ><fieldset><legend>".$row['game_name']."</legend>\n";
        if (isset($row['game_pic']) AND !empty($row['game_pic'])) {
            echo "<div align=\"center\"><a href='".ag_PLAYGAMEURL. $row['game_id'] . "'><img src=\"" . $picdirectory . $row['game_pic'] . "\" width=$iconsize height=$iconsize border=0></a></div>\n";
        } else {
            echo "<div align=\"center\"><a href='" .ag_PLAYGAMEURL. $row['game_id'] . "'><img src=\"modules/$module_name/images/nopic.gif\" width=$iconsize height=$iconsize border=0></a></div>\n";
        }
        echo "      <a href='" .ag_PLAYGAMEURL. $row['game_id'] . "'>"._AG_SAMEWINDOW."</a>\n";
        if ($arcadeconfig['nag_ShowPopupLink']==1) {
            echo "<br />      <a href='javascript:Arcade_Popup(\"".ag_PLAYPOPUPGAMEURL. $row['game_id']."\", \"New_Window\", \"".$row['game_width']."\", \"".$row['game_height']."\", \"yes\")'>"._AG_NEWWINDOW."</a>\n";
        }
        echo "</fieldset></td>\n";
        echo "<td align=\"center\" ";
        if ($row2) {
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo "<a href='".ag_USERSTATSURL.$row2['user_id']."'>".UsernameColor($row2['username'])."</a>";
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo  ": <strong>".$row2['score_game']."</strong><br />".date("d M H:i " , $row2['score_date']);
         }
         if ($arcadeconfig['nag_ShowHighScoreComment']==1 AND !empty($row2['comments_value'])) {
             echo"<div >"._AG_WINNERCOMMENT." :</div>\n";
            echo "<div align=\"center\"><em>".htmlentities($row2['comments_value'])."</em></div>\n";
          }
        if (is_admin()) {
            echo "<br />[&nbsp;<a target=\"_blank\" href='".ag_ADMINGAMEURL.$row['game_id']."'>"._AG_ADMIN."</a>&nbsp;]\n";
        }
        echo "</td>\n";
        echo "<td>\n";
        if ($arcadeconfig['nag_UseArcadeThread']) {
            echo "      ".agCreateThreadLink($row['game_id'])."<br />\n";
        }

        echo "      <a href='".ag_GAMESCORE.$row['game_id']."'>"._AG_HIGHSCORE."</a><br />";
        echo "      "._AG_PLAYED.": ".$row['game_set']."<br />";

        if ($arcadeconfig['use_fav_category']) {
            echo "      <a href='".ag_ADDGAMEFAVORI.$row['game_id']."'>"._AG_ADDFAVORITES."</a><br />";
        }

        echo "</td>\n";
        echo "<td valign=\"top\">\n";
        echo "<fieldset><legend><strong>"._AG_DESCRIPTION."</strong></legend>\n";
        echo ($row['game_desc']==""?"&nbsp;"._AG_NODESC."":$row['game_desc']);
        echo "</fieldset>";
        if ($arcadeconfig['nag_EnableRateStats']) {
            echo "<br /><fieldset><legend><strong>"._AG_RATING."</strong></legend>\n";
            echo "<table width=100%><tr><td><u><strong>".number_format($ratingrow['rate'],2)."</strong> /10</u></td><td>".RateForm($row['game_id'])."</td></tr><tr><td colspan=2>".sprintf(_AG_XVOTES,$ratingrow['numrate'])."</td></tr></table>";
            echo "</fieldset>";
        }
        echo "</td>";
        echo "$extracolumninfo</tr>\n";

    }else
    { // this is the first version of the line format.... useless right now, never used... :)
      // Keeping for future improvements
        if (isset($row['game_pic']) AND !empty($row['game_pic'])) {
            echo "        <td align=\"center\" width=\"$iconsize\"><a href='".ag_PLAYGAMEURL. $row['game_id'] . "'><img src=\"" . $picdirectory . $row['game_pic'] . "\" width=$iconsize height=$iconsize border=0></a></td>\n";
        } else {
            echo "        <td align=\"center\" width=\"$iconsize\" align=center height=$iconsize><a href='" .ag_PLAYGAMEURL. $row['game_id'] . "'><img src=\"modules/$module_name/images/nopic.gif\" width=$iconsize height=$iconsize border=0></a></td>\n";
        }

        echo "        <td align=\"center\"><strong>".$row['game_name'] . "</strong>";
        if ($arcadeconfig['nag_ShowPopupLink']==1) {
                echo "<br /><a href='javascript:Arcade_Popup(\"".ag_PLAYPOPUPGAMEURL. $row['game_id']."\", \"New_Window\", \"".$row['game_width']."\", \"".$row['game_height']."\", \"yes\")'>"._AG_NEWWINDOW."</a>";
        }
        if (is_admin()) {
            echo "<br />[&nbsp;<a target=\"_blank\" href='".ag_ADMINGAMEURL.$row['game_id']."'>"._AG_ADMIN."</a>&nbsp;]";
        }
        echo "</td>\n";
        //Third cols : Description
        echo "        <td><fieldset><legend>"._AG_DESCRIPTION."</legend>".($row['game_desc']==""?"&nbsp;"._AG_NODESC."":$row['game_desc'])."</fieldset>";

          if ($arcadeconfig['nag_ShowHighScoreComment']==1 AND !empty($row2['comments_value'])) {
            echo "<br /><br /><small><u>Comment</u>:&nbsp;<em>";
            echo "&nbsp;\"".htmlentities($row2['comments_value']);
            echo "\"</em></small>";
          }
        echo "</td>\n";
        //Fourth Cols: HighScore
        echo "        <td align=\"center\">";
        if ($row2) {
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo "<a href='".ag_USERSTATSURL.$row2['user_id']."'>".UsernameColor($row2['username'])."</a><br />";
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            echo $row2['score_game']."<br />".date("D M d, Y g:i a" , $row2['score_date']);
        }
        else echo "&nbsp;";
        echo "        </td>\n";
        //Fifth Row : Played
        echo "        <td align='center'>" . $row['game_set'] . " times</td>\n";
        //Extra Rows
        if ($extracolumninfo) {
            echo $extracolumninfo;
        }
        echo "  </tr>\n";
    }
}

function agSearchDBForm(){
    global $srchstring,$module_name;
    echo "<form action=\"".ag_AGMODURL."\" method=\"post\">\n";
    echo "<input type=\"hidden\" name='op' value=\"searchdb\">\n";
    echo _AG_SEARCHGAMES." :<input type=\"text\" name=\"srchstring\" value=\"$srchstring\" size=\"25\" title=\"Use Wildcards * AND ? such AS 'yeti*'\">\n";
    echo "<input type=\"submit\">";
    echo "</form>\n";
}

function agSearchDB(){
    global $module_name, $srchstring,  $prefix, $db, $user_prefix,$arcadeconfig;
    ArcadeGamesHeader();
    $srchstring = str_replace("\'","''",$srchstring);//sql injection anti-hack
    $srchstring="*".$srchstring."*";
    if (trim($srchstring) <> "**") {
        title("Search Results");
        // replace wildcards */? to use with mysql "LIKE"
        $search = str_replace("_", "\\_", $srchstring);
        $search = str_replace("%", "\\%", $search);
        $search = str_replace("*", "%" , $search);
        $search = str_replace("?", "_" , $search);

        $sql = "SELECT * FROM " . $prefix . "_bbgames "
              ."WHERE game_name LIKE '$search' "
              ."ORDER BY `game_name` LIMIT ".$arcadeconfig['nag_NumberGamesShown'];
        $result = $db->sql_query($sql) or
            die(_AG_CANNOTREADDATABASE." <br /> ".mysql_error()."<br />$sql");
        if (!$db->sql_numrows())
        {
                echo "No matches.<br />";
        }
        else
        {
            echo "<u>"._AG_RESULTS."</u><br /><br />\n";
            echo " <table width=\"100%\" border=\"1\">\n";
            echo "<tr><td colspan='2' align=\"center\">"._AG_NAME."</td><td align=\"center\">"._AG_DESCRIPTION."</td><td align=\"center\">"._AG_HIGHSCORE."</td><td align=\"center\">"._AG_PLAYED."</td></tr>";
            while ($row = $db->sql_fetchrow($result)) {
                    agGamesDBRow($row);
            }
            echo " </table>\n";
        }
    }
 ArcadeGamesFooter();
}

function agCreatePreviousNextLink($ForURL,$count){
    global $offset,$arcadeconfig;
    if ($offset > 0) {
     $prevoffset=($offset-$arcadeconfig['nag_NumberGamesShown'])>0?($offset-$arcadeconfig['nag_NumberGamesShown']):0;
      echo "<a href='$ForURL&amp;offset=$prevoffset'>".sprintf(_AG_PREVX,$arcadeconfig['nag_NumberGamesShown'])."</a>&nbsp;";
    }
    if ($count>=$arcadeconfig['nag_NumberGamesShown']) {
      echo "<a href='$ForURL&amp;offset=".($offset+$arcadeconfig['nag_NumberGamesShown'])."'>".sprintf(_AG_NEXTX,$arcadeconfig['nag_NumberGamesShown'])."</a>&nbsp;";
    }
}

function agNewestGames(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();
    $sql = " SELECT * FROM ".$prefix."_bbgames ORDER BY game_order DESC LIMIT $offset,".($arcadeconfig['nag_NumberGamesShown']);
    $result=$db->sql_query($sql);
    title(_AG_NEWESTGAMES);
    ArcadeGamesTableHeader();
    $count=0;
    while($row=$db->sql_fetchrow($result)){
        $count++;
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."newestgames",$count);
    ArcadeGamesFooter();
}

function agHighScores(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();
    $sql = " SELECT g.* "
          ."FROM ".$prefix."_bbgames g "
          ."ORDER BY g.game_highdate "
          ."DESC LIMIT  $offset,".$arcadeconfig['nag_NumberGamesShown']."" ;
    $result=$db->sql_query($sql);
    title(_AG_LASTHIGHSCORES);
    ArcadeGamesTableHeader();
    $count=0;
    while($row=$db->sql_fetchrow($result)){
        $count++;
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."highscores",$count);
    ArcadeGamesFooter();
}

function agMostPopular(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();
    $sql = " SELECT * FROM ".$prefix."_bbgames  ORDER BY game_set DESC LIMIT $offset,".$arcadeconfig['nag_NumberGamesShown']."" ;
    $result=$db->sql_query($sql);
    title(_AG_MOSTPOPULAR);
    ArcadeGamesTableHeader();
    $count=0;
    while($row=$db->sql_fetchrow($result)){
        $count++;
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."mostpopular",$count);
    ArcadeGamesFooter();
}

function agLeastPopular(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();
    $sql = "SELECT * FROM ".$prefix."_bbgames "
          ."ORDER BY game_set ASC LIMIT $offset,".$arcadeconfig['nag_NumberGamesShown']."" ;
    $result=$db->sql_query($sql);
    title(_AG_LEASTPOPULAR);
    ArcadeGamesTableHeader();
    $count=0;
    while($row=$db->sql_fetchrow($result)){
        $count++;
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."leastpopular",$count);
    ArcadeGamesFooter();
}

function agLastPlayed(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();

    $sql = " SELECT s.score_date,s.score_game,g.*,u.username, u.user_id "
          ."FROM ".$prefix."_bbscores s "
          ."LEFT JOIN ".$prefix."_bbgames g ON  g.game_id=s.game_id "
          ."LEFT JOIN ".$user_prefix."_users u ON  u.user_id=s.user_id "
          ."ORDER BY s.score_date DESC LIMIT $offset,".$arcadeconfig['nag_NumberGamesShown']."" ;

    $result=$db->sql_query($sql);
    title(_AG_LASTPLAYED);
    ArcadeGamesTableHeader("<td align=\"center\">"._AG_LASTSCORE."</td>");
    $count=0;
    while($row=$db->sql_fetchrow($result)){

        $count++;
        agGamesDBRow($row,
            "<td align=\"center\"><strong>".$row['score_game']."</strong><br />".date("D M d, Y g:i a" ,$row['score_date'])
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
            ." by <a href='".ag_USERSTATSURL.$row['user_id']."'>".UsernameColor($row['username'])."</a></td>");
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."lastplayed",$count);
    ArcadeGamesFooter();
}

function agAdminConfig(){
    global $db,$user_prefix,$prefix,$arcadeconfig,$ArcadeGamesVersion;
    global $mode;

    ArcadeGamesHeader();
    title(_AG_CONFIG);

    if ($mode=="submit") {
        global $showrightblock,$index,$numbergamesshown,$iconsize,$rankshown,$topinfo;
        global $showpopuplink,$enableratestats,$showhighscorecomment,$usearcadethread;

        $REPLACE="REPLACE INTO ".$prefix."_bbarcade (arcade_name,arcade_value) VALUES ";

        $db->sql_query($REPLACE."('nag_version','$ArcadeGamesVersion')");
        $db->sql_query($REPLACE."('nag_ShowRightBlock','$showrightblock')");
        $index=$arcadeconfig['nag_ShowRightBlock']=$showrightblock;
        $db->sql_query($REPLACE."('nag_NumberGamesShown','$numbergamesshown')");
        $arcadeconfig['nag_NumberGamesShown']=$numbergamesshown;
        $db->sql_query($REPLACE."('nag_IconSize','$iconsize')");
        $arcadeconfig['nag_IconSize']=$iconsize;
        $db->sql_query($REPLACE."('nag_RankShown','$rankshown')");
        $arcadeconfig['nag_RankShown']=$rankshown;
        $db->sql_query($REPLACE."('nag_TopInfo','".$topinfo."')");
        $arcadeconfig['nag_TopInfo']=stripslashes($topinfo);
        $db->sql_query($REPLACE."('nag_ShowPopupLink','".$showpopuplink."')");
        $arcadeconfig['nag_ShowPopupLink']=$showpopuplink;
        $db->sql_query($REPLACE."('nag_EnableRateStats','".$enableratestats."')");
        $arcadeconfig['nag_EnableRateStats']=$enableratestats;
        $db->sql_query($REPLACE."('nag_ShowHighScoreComment','".$showhighscorecomment."')");
        $arcadeconfig['nag_ShowHighScoreComment']=$showhighscorecomment;
        $db->sql_query($REPLACE."('nag_UseArcadeThread','".$usearcadethread."')");
        $arcadeconfig['nag_UseArcadeThread']=$usearcadethread;

        echo "<div align=\"center\">"._AG_CONFIGRECORDED."</div><br />";
    }

    echo "<table align=\"center\" border=\"1\" cellspacing=\"2\">\n";
    echo "<form action='".ag_AGMODURLOP."adminconfig&amp;mode=submit' method=\"post\">\n";
    echo "    <tr><td align=\"center\" >Arcade Game Version</th><td align=\"center\">$ArcadeGamesVersion</td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"showrightblock\">"._AG_SHOWRIGHTBLOCK.":</label></td><td align=\"center\"><INPUT type='radio' ".($arcadeconfig['nag_ShowRightBlock']==1?"checked":"")." name='showrightblock' value='1'>"._AG_YES." <INPUT type='radio' ".($arcadeconfig['nag_ShowRightBlock']==1?"":"checked")." name='showrightblock' value='0'>"._AG_NO." </td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"showpopuplink\">"._AG_SHOWPOPUPLINK.":</label></td><td align=\"center\"><INPUT type='radio'".($arcadeconfig['nag_ShowPopupLink']==1?"checked":"")."  name='showpopuplink' value='1'>"._AG_YES." <INPUT type='radio' ".($arcadeconfig['nag_ShowPopupLink']==1?"":"checked")." name='showpopuplink' value='0'>"._AG_NO." </td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"usearcadethread\">"._AG_USEARCADETHREAD.":</label></td><td align=\"center\"><INPUT type='radio'".($arcadeconfig['nag_UseArcadeThread']==1?"checked":"")."  name='usearcadethread' value='1'>"._AG_YES." <INPUT type='radio' ".($arcadeconfig['nag_UseArcadeThread']==1?"":"checked")." name='usearcadethread' value='0'>"._AG_NO." </td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"enableratestats\">"._AG_SHOWRATELINK.":</td><td align=\"center\"><INPUT type='radio'".($arcadeconfig['nag_EnableRateStats']==1?"checked":"")."  name='enableratestats' value='1'>"._AG_YES." <INPUT type='radio' ".($arcadeconfig['nag_EnableRateStats']==1?"":"checked")." name='enableratestats' value='0'>"._AG_NO." </td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"showhighscorecomment\">"._AG_SHOWSCORECOMMENT.":</td><td align=\"center\"><INPUT type='radio'".($arcadeconfig['nag_ShowHighScoreComment']==1?"checked":"")."  name='showhighscorecomment' value='1'>"._AG_YES." <INPUT type='radio' ".($arcadeconfig['nag_ShowHighScoreComment']==1?"":"checked")." name='showhighscorecomment' value='0'>"._AG_NO." </td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"numbergamesshown\">"._AG_NUMBERGAMESSHOWN.":</label></td><td  align=\"center\"><input type=\"text\" name=\"numbergamesshown\" value='".$arcadeconfig['nag_NumberGamesShown']."'></td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"iconsize\">"._AG_ICONSIZE.":</label></td><td  align=\"center\"><input type=\"text\" name=\"iconsize\" value='".$arcadeconfig['nag_IconSize']."'></td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"rankshown\">"._AG_RANKSHOWN.":</label><br /><em>0 for unlimited</em></td><td align=\"center\"><input type=\"text\" name=\"rankshown\" value='".$arcadeconfig['nag_RankShown']."'></td></tr>\n";
    echo "    <tr><td align=\"center\"><label for=\"topinfo\">"._AG_TOPINFO.":</label><br /><em>Leave Blank for none</em></td><td><textarea name=\"topinfo\" cols=\"25\" rows=\"8\">".$arcadeconfig['nag_TopInfo']."</textarea></td></tr>\n";
    echo "    <tr><th colspan=\"2\"><input type=\"submit\"></th></tr>\n";
    echo "</form>\n";
    echo "</table>\n";

    ArcadeGamesFooter();
}

//Rankings function
function agTop10(){
    global $db,$user_prefix,$prefix,$arcadeconfig;
    ArcadeGamesHeader();
    title(_AG_RANKING);

    $limitrank= $arcadeconfig['nag_RankShown']>0?"LIMIT ".intval($arcadeconfig['nag_RankShown']):"";

    $sql = "SELECT COUNT(*) AS nbvictoires, g.game_highuser, u.user_id, u.username, u.user_level "
          ."FROM ".$prefix."_bbgames g, ".$user_prefix."_users u "
          ."WHERE g.game_highuser = u.user_id AND g.game_highuser <> 0 "
          ."GROUP BY g.game_highuser ORDER BY nbvictoires DESC $limitrank";

    $result=$db->sql_query($sql);
    echo "<table width=\"100%\" border=\"1\">\n";
    $place=1;
    while($row=$db->sql_fetchrow($result)){
        echo "<tr><td align=center>$place</td>";
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
        echo "<td><a href='".ag_USERSTATSURL.$row['user_id']."'>".UsernameColor($row['username'])."</a></td>";
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
        echo "<td>".sprintf(_AG_XVICTORIES,$row['nbvictoires'])." </td>";
        echo "<td>";
        $sql="SELECT * FROM ".$prefix."_bbgames WHERE game_highuser=".$row['user_id']." ORDER BY game_name";
        $result2=$db->sql_query($sql);
        while($row2=$db->sql_fetchrow($result2)){
            echo " <a href='".ag_PLAYGAMEURL.$row2['game_id']."'>".$row2['game_name']."</a>,&nbsp;";
        } // while
        echo "</td>";
        echo "</tr>";
        $place++;
    }
    echo "</table>\n";
    ArcadeGamesFooter();
}

function agByRate(){
    global $db,$prefix,$arcadeconfig,$offset;
    ArcadeGamesHeader();
    title(_AG_BYRATE);

    $sql="SELECT SUM(gr.rate) AS sumrate,count(gr.user_id) AS numrate,(SUM(gr.rate)/count(gr.user_id)) AS rate ,g.* "
        ."FROM ".$prefix."_bbgames_rate gr "
        ."LEFT JOIN ".$prefix."_bbgames g ON g.game_id=gr.game_id "
        ."GROUP BY gr.game_id "
        ."ORDER BY rate DESC LIMIT $offset,".$arcadeconfig['nag_NumberGamesShown'];
    $result=$db->sql_query($sql)
        or die(mysql_error());
    ArcadeGamesTableHeader();
    $count=0;
    while($row=$db->sql_fetchrow($result)){
        $count++;
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    agCreatePreviousNextLink(ag_AGMODURLOP."byrate",$count);
    ArcadeGamesFooter();
}

function agCategory(){
    global $db,$user_prefix,$prefix,$user,$start;
    ArcadeGamesHeader();
    title(_AG_BYCATEGORY);
    echo "<table width=\"100%\" border=\"0\">\n";
    //Category listing
    $catarray=array();
    $sql="SELECT * FROM ".$prefix."_bbarcade_categories ORDER BY arcade_catorder";
    $result=$db->sql_query($sql)
        or die(_AG_CANNOTREADDATABASE);
    while($row=$db->sql_fetchrow($result)){
        $catarray[]=$row;
    }
    global $cat;
    $cat=isset($cat)?$cat:$catarray[0]['arcade_catid'];

    echo "    <tr><td align=\"center\">\n";
    foreach($catarray AS $category){
        $bstag=($cat==$category['arcade_catid'])?"<strong>":"";
        $betag=($cat==$category['arcade_catid'])?"</strong>":"";
        echo "&nbsp; <a href='".ag_AGMODURLOP."category&amp;cat=".$category['arcade_catid']."'>$bstag".$category['arcade_cattitle']."(".$category['arcade_nbelmt'].")$betag</a>";
    }
    echo "</td></tr></table>";
    if (isset($cat)) {
        $cat=intval($cat);
        $sql="SELECT * FROM ".$prefix."_bbgames WHERE arcade_catid='$cat' ORDER BY game_name";
        $result=$db->sql_query($sql)
            or die(_AG_CANNOTREADDATABASE);
        ArcadeGamesTableHeader()    ;
        while($row=$db->sql_fetchrow($result)){
            agGamesDBRow($row);
        }
        ArcadeGamesTableFooter();
    }
    ArcadeGamesFooter();
}

function agAllGames(){
    global $db,$user_prefix,$prefix,$user,$start;
    ArcadeGamesHeader();
    title(_AG_ALLGAMES);
    $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    echo "<table width=\"100%\" border=\"0\">\n";
    echo "    <tr><td colspan=\"5\" align=\"center\">\n";
    echo "        &nbsp;<a href='".ag_AGMODURLOP."allgames'>[0-9]</a>\n";
    for($i=0;$i<strlen($alphanum);$i++){
        echo "        &nbsp;<a href='".ag_AGMODURLOP."allgames&amp;start=".substr($alphanum,$i,1 )."'>".substr($alphanum,$i,1 )."</a>\n";
    }
    echo "    </td></tr></table>\n";
    ArcadeGamesTableHeader();

    if (isset($start)) {
        $WHERE="WHERE game_name LIKE '".substr($start,0,1 )."%'";
    }else {
        $WHERE="WHERE ";
        for($i=0;$i<9;$i++){
            $WHERE .="game_name LIKE '$i%' OR ";
        }
        $WHERE .="game_name LIKE '9%'";
    }
    $sql="SELECT * "
        ."FROM ".$prefix."_bbgames "
        ."$WHERE "
        ."ORDER BY game_name";
    $result=$db->sql_query($sql)
        or die(__FILE__.",".__LINE__.": <br /> "._AG_CANNOTREADDATABASE." :<br />Query: '$sql'<br />MySQL Error: ".mysql_error());
    while($row=$db->sql_fetchrow($result)){
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();

    ArcadeGamesFooter();
}
function agShowMessages(){
    global $gid;
    ArcadeGamesHeader();

    agCreateHeaderForGame(intval($gid));
    title(_AG_MESSAGES);
    agMessagesForGames(intval($gid));
    ArcadeGamesFooter();
}

function agCreateThreadLink($gameid){
    global $db,$prefix;
    $sql="SELECT count(*) AS messagecount "
        ."FROM ".$prefix."_bbarcade_message "
        ."WHERE game_id=$gameid";
    $result=$db->sql_query($sql)
        or die(_AG_CANNOTREADDATABASE);
    $row=$db->sql_fetchrow($result);
    $count=$row?$row['messagecount']:0;
    return "<a href='".ag_AGMODURLOP."showthread&amp;gid=$gameid'>".sprintf(_AG_XMESSAGES,$count)."</a>";
}

function agCreateHeaderForGame($gameid){
    global $db,$prefix;
    $sql="SELECT * "
        ."FROM ".$prefix."_bbgames "
        ."WHERE game_id=$gameid";
    $result=$db->sql_query($sql)
     or die(_AG_CANNOTREADDATABASE);
    $row=$db->sql_fetchrow($result);
    ArcadeGamesTableHeader() ;
    agGamesDBRow($row);
    ArcadeGamesTableFooter();
}
function agMessagesForGames($gameid){
    global $db,$prefix,$user_prefix;

    $sql="SELECT m.*,u.username,s.score_set  "
        ."FROM ".$prefix."_bbarcade_message m "
        ."LEFT JOIN ".$user_prefix."_users u on u.user_id=m.user_id "
        ."LEFT JOIN ".$prefix."_bbscores s on (s.user_id=m.user_id AND s.game_id=$gameid) "
        ."WHERE m.game_id=$gameid "
        ."ORDER BY message_date DESC";

    $result=$db->sql_query($sql)
        or die(_AG_CANNOTREADDATABASE." ".mysql_error());
    echo "<table width=\"100%\" border='1'>";
    $bbcode=new BBCode_Arcade();
    while($row=$db->sql_fetchrow($result)){
/*****[BEGIN]******************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
        echo "<tr><td width=\"120\"  valign=\"top\"><a href='".ag_USERSTATSURL.$row['user_id']."'>".UsernameColor($row['username'])."</a>"
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
                  ."<br />".date("d M H:i " , $row['message_date'])
                  ."<br />"._AG_PLAYED.": ".$row['score_set']."</td>";
        echo "<td class=\"code\" valign=top>". $bbcode->bbcode_to_html($row['message'])."</td></tr>";
    }
    echo "</table>";
    $row=$db->sql_fetchrow($result);
}

function agRateIt(){
    global $user,$prefix,$db,$HTTP_POST_VARS,$HTTP_GET_VARS;
    if (is_user()) {
        global $cookie;
        cookiedecode();
        if (!empty($HTTP_POST_VARS['gid']) || !empty($HTTP_GET_VARS['gid'])) {
            $gid = (!empty($HTTP_POST_VARS['gid'])) ? intval($HTTP_POST_VARS['gid']) : intval($HTTP_GET_VARS['gid']);
        } else {
            die("Such game doesnt exist");
        }
        if (!empty($HTTP_POST_VARS['ratevalue']) || !empty($HTTP_GET_VARS['ratevalue'])) {
            $ratevalue = intval((!empty($HTTP_POST_VARS['ratevalue'])) ? intval($HTTP_POST_VARS['ratevalue']) : intval($HTTP_GET_VARS['ratevalue']));
            if ($ratevalue<0 or $ratevalue>10) {
                $ratevalue=5;
            }
        } else {
            die("No rating value");
        }

        $sql="REPLACE INTO ".$prefix."_bbgames_rate (game_id,user_id,rate) VALUES($gid,".$cookie[0].",$ratevalue) ";
        $db->sql_query($sql) or die("Cannot insert new rating");

        $header_location = (@preg_match("/Microsoft|WebSTAR|Xitami/", getenv("SERVER_SOFTWARE"))) ? "Refresh: 0; URL=" : "Location: ";
        header($header_location . "modules.php?name=Forums&file=games&gid=$gid");

    }
    else {
        ArcadeGamesHeader();
        echo "<table align=center cellpadding=10 border=1><tr><td align=center><strong>"._AG_ONLYREGISTERED.".</strong></td></tr></table>";
        ArcadeGamesFooter();
    }
}

function agShowDefault(){
    global $db,$user_prefix,$prefix;
    ArcadeGamesHeader();
    $sql = " SELECT * FROM ".$prefix."_bbgames  ORDER BY game_highdate DESC LIMIT 0,15" ;
    $result=$db->sql_query($sql);


    title(_AG_LASTHIGHSCORES);
    ArcadeGamesTableHeader();
    while($row=$db->sql_fetchrow($result)){
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    $sql = " SELECT * FROM ".$prefix."_bbgames  ORDER BY game_order DESC LIMIT 0,15" ;
    $result=$db->sql_query($sql);
    title(_AG_NEWESTGAMES);

    ArcadeGamesTableHeader();
    while($row=$db->sql_fetchrow($result)){
        agGamesDBRow($row);
    }
    ArcadeGamesTableFooter();
    ArcadeGamesFooter();
}

//let's parse
switch($op){
    case "searchdb":
        agSearchDB();
        ;
        break;
    case "highscores":
        agHighScores();
        break;
    case "top10":
        agTop10();
        break;
    case "newestgames":
        agNewestGames();
        break;
    case "mostpopular":
        agMostPopular();
        break;
    case "leastpopular":
        agLeastPopular();
        break;
    case "lastplayed":
        agLastPlayed();
        break;
    case "unplayed":
        agUnplayed();
        break;
    case "category":
        agCategory();
        break;
    case "allgames":
        agAllGames();
        break;
    case "byrate":
        agByRate();
        break;
    case "rateit":
        agRateIt();
        break;
    case "showthread":
        agShowMessages();
        break;
    case "adminconfig":
             if (is_admin()) {
                 agAdminConfig();
             } else {
                 die("Yessssssssssssssss! ... hmmm wait no. You're not administrator. I thought for few secs you were...");
             }
             break;
    default:
        agShowDefault();
        ;
} // switch

$name=$module_name; // for copyright link

?>