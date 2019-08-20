<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* MetOpen Home Page                                                    */
/* (C) Heshy Shayovitz for support http://www.metopen.com               */
/*                                                                      */
/*                                                                      */
/* PHPNUKE Copyright (c) 2005 by Francisco Burzi                        */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it AND/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/11/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

global $module_name;
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
define('INDEX_FILE',true);

global $prefix, $currentlang, $sitename, $user, $db, $bgcolor, $bgcolor1, $bgcolor2, $bgcolor4;

/************************************************************/
/* Preferences */
$bgcolor=_BGCOLOR;
if (empty($bgcolor)) $bgcolor=$bgcolor2; // "#ecf0f6";//"azure";//

//FEATURES
$catidfeature=_CATIDFEATURE;             //category id for features
$numfeatures=_NUMFEATURES;               //number of stories in the features section

//ARTICLES
$catidarticle=_CATIDARTICLE;
$numdaysrecent=_NUMDAYSRECENT;           //how recent in days should stories be shown. the number can increase if minnumart is greater (then it will show older articles)
$minnumart=_MINNUMART;                   //number of stories in the articles section. Enter 0 for none.
$numfullart=_NUMFULLART;                 //number of stories in the articles section with the first paragraph
$numarticleimages=_NUMARTICLEIMAGES;     //number of "full" articles that get topic images

//TIPS
$catidtip=_CATIDTIP;
$numtips=_NUMTIPS;                       //number of stories in the tips section. Enter 0 for none.

/*END PREFERENCES
/**********************************************************/

function DisplayCSS(){
  global $bgcolor, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $textcolor1, $textcolor2;
  return '<style type="text/css" media=screen>
<!--
  .feature {background-color: '.$bgcolor.'; width:100% align:center; padding: 3px ;}
  .featuretitle {FONT-SIZE: 150%;}
  .articlefuncs {text-align:right;}
  .tips {background-color: '.$bgcolor.'; border-style: groove; padding: 5px; width:40%; float:right; margin: 10px 0px 10px 10px ;}
  .odd {background-color:'.$bgcolor1.'; text-color:'.$textcolor1.';}
  .oddhover {background-color:'.$bgcolor2.'; text-color:'.'white'.';}
  .even { background-color:'.$bgcolor2.';text-color:'.$textcolor2.';}
  .evenhover { hover:'.$textcolor2.'; background-color:'.$bgcolor1.';text-color:'.'white'.';}
  hr.hrclass { border-top: 1px dashed #000; border-bottom: 1px dashed '.$bgcolor.'; width: 80%; height: 2px; margin: 3px auto 0 0; text-align: left;}
  hr.article { align: left; border-top: 1px dashed #000; border-bottom: 1px dashed '.$bgcolor.'; height: 2px; margin: 3px auto 0 0; text-align: left;}
  .hotspot {border-style: solid; border-width: 1px; padding: 3px;}

-->
</style>';

}
/*Functions Section */
function DisplayArticle($sid, $title, $hometext, $ratings, $score, $colspan, $topictext, $topicid, $topicimage ){
    global $admin;
    echo  "<div><span class=\"storytitle\"><a title=\""._BREAD.' '._TOPIC."\" href=\"modules.php?name=News&amp;new_topic=$topicid\"  >".$topictext.":</a> "
         ."<a href=\"modules.php?name=News&amp;file=article&amp;sid=$sid\" > $title</a>";
    displaystars($ratings, $score);
    echo  "<br /> </span>";
    if ($topicimage > "") echo  "<a title=\""._BREAD.' '._TOPIC."\" href=\"modules.php?name=News&amp;new_topic=$topicid\"  ><img alt=\"$topictext\" border=\"0\" src=\"images/topics/".$topicimage."\"  align=\"right\"></a>";
    echo  '<span class="content">'.$hometext.'</span>';
    echo  '<div class="articlefuncs">';
  DisplayButtons($sid, $title);
    echo '<br /><br />
    </div></div>';//close article div AND articlefuncs div
};
//_ADDBOOKMARK
function displaystars($ratings, $score) {
  if ($ratings != 0) {
        $rate = substr($score / $ratings, 0, 4);
        $r_image = round($rate);
        echo '<img src="images/articles/stars-'.$r_image.'.gif" border="0" title="'.$r_image.' '._OUTOF5STAR.' '.$ratings.' '._VOTES.'">';
  }

}

function DisplayArticleLine($sid, $title, $hometext, $ratings, $score, $i) {
    global $admin, $admin_file;
      if ($i & 1)
        echo '<div class="odd" onmouseover="this.className=\'oddhover\'" onmouseout="this.className=\'odd\'">';
      else
          echo '<div class="even" onmouseover="this.className=\'evenhover\'" onmouseout="this.className=\'even\'">';
      echo  "<img src=\"images/arrow.gif\" border=\"0\" > ";
      echo  '<span class="title"><a href="modules.php?name=News&amp;file=article&amp;sid='.$sid.'">'.$title.'</a>';
      displaystars($ratings,$score);
      echo '</span>';

      //echo '<a href="modules.php?name=News&amp;file=article&amp;sid='.$sid.'"> <img src="images/green_dot.gif" title="'._HREADMORE.'" border="0"></a>';
      if (is_admin()) {
        echo  " [<a href=\"".$admin_file.".php?op=EditStory&amp;sid=".$sid."\">"._EDIT."</a>] ";
      }
      echo "<br />";
      echo "</div>";
}

function DisplayFeature($sid, $title, $hometext, $ratings, $score, $topictext, $topicid, $image='') {
    global $admin;
    echo  '<div class="feature" >';
    echo  "<span class=\"storytitle\">";
    if(stristr( $hometext,"<img ") === FALSE AND $image > "")  echo  "<a title=\""._BREAD.' '._TOPIC."\" href=\"modules.php?name=News&amp;new_topic=$topicid\"  ><img alt=\"$topictext\" border=\"0\" src=\"images/topics/".$image."\"  align=\"right\"></a>"; //if there is an image in the article dont display the topic image
    echo  "<center><a class=\"featuretitle\" href=\"modules.php?name=News&amp;file=article&amp;sid=".$sid."\" >$title</a></center></span>";
    displaystars($ratings,$score);
    //echo  "<br />";
    echo  "<span class=\"featuretext\" >$hometext</span>";
    echo  '</div><div class="articlefuncs" >';
  DisplayButtons($sid,$title);
    echo "<br />
    </div>";
}

function HotSpot($hotspottxt, $hotspotblock) {
    if($hotspottxt > ""){
        echo '<div class="hotspot">'.$hotspottxt;
        if (substr($hotspotblock,0,6) == "block-"){
          $file = @file("blocks/".$hotspotblock."");
      if (!$file) {
          $content = _BLOCKPROBLEM;
      } else {
          @include("blocks/".$hotspotblock."");
      }

          echo $content;
      }
        echo '</div>';
    }
}

function DisplayButtons($sid, $title) {
  global $module_name, $nukeurl, $admin, $admin_file;
    if (is_admin()) {
        echo  "[<a href=\"".$admin_file.".php?op=EditStory&amp;sid=".$sid."\">"._EDIT."</a>] ";
    }

    echo  "<a href=\"modules.php?name=News&amp;file=article&amp;sid=".$sid."\">"._HREADMORE."</a>
    <a href=\"modules.php?name=News&amp;file=print&amp;sid=$sid\" title=\""._PRINTABLEVERSION."\"><img alt=\""._PRINTABLEVERSION."\" src=\"images/print.gif\" border=\"0\"></a>&nbsp;
    <a href=\"modules.php?name=News&amp;file=friend&amp;op=FriendSend&amp;sid=$sid\" title=\""._SENDTOFRIEND."\"><img alt=\""._SENDTOFRIEND."\" src=\"images/friend.gif\" border=\"0\"></a>&nbsp;";
  if(_NUKEBOOKMARK > "") echo "<a href=\"modules.php?name=Bookmarks&amp;file=edit_mark&amp;markname=".urlencode($title)."&amp;markurl=".urlencode("/modules.php?name=$module_name&amp;file=article&amp;sid=$sid&amp;mode=&amp;order=0&amp;hold=0")."&amp;popup=0\" title=\""._NUKEBOOKMARK."\">".'<img src="images/star.gif" border="0" alt="'._NUKEBOOKMARK.'" title="'._NUKEBOOKMARK.'"></a>';
    if(_BOOKMARK > "") echo '<a href="javascript:window.external.AddFavorite(\''.$nukeurl.urlencode("/modules.php?name=News&amp;file=article&amp;sid=$sid").'\',\''.$title.'\')"><img src="images/star.gif" border="0" alt="'._BOOKMARK.'" title="'._BOOKMARK.'"></a>&nbsp;';
  if(_PDF > "") echo '<a href="modules.php?name='.$module_name.'&amp;file=printpdf&amp;sid='.$sid.'"><img src="images/pdf.gif" border="0" alt="'._PDF.'" title="'._PDF.'"></a>';

}

include_once(NUKE_BASE_DIR.'header.php');
echo DisplayCSS();
/* top section for feature */

//OpenTable();
  echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"white\"><tr><td>\n";
    /*
echo"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">"
  . "  <tr>"
  . "    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\">"
  . "  <tr>"
  . "    <td bgcolor=\"#ACB5C3\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
  . "        <tr>"
  . "          <td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">"
  . "                    <tr> "
  . "                      <td bgcolor=\"#DEE0E2\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">"
  . "                          <tr> "
  . "                            <td>";
    */
HotSpot(_HOTSPOT1,_HOTSPOTBLOCK1);
//FEATURES
if ($numfeatures > 0){  //display the features
  echo '<div class="feature">';
  echo '<div class="title">'._FEATURE.' </div><hr class="hrclass">';
  $sql="SELECT s.sid, s.title, s.hometext, s.ratings, s.score, t.topictext,  t.topicid, t.topicimage FROM ".$prefix."_stories s, ".$prefix."_topics t "
       ." WHERE  t.topicid = s.topic AND s.catid='$catidfeature' ORDER BY s.time DESC limit 0, '$numfeatures'";
  //if(is_admin()) echo "FF ".$sql."</br />";
  $result = $db->sql_query($sql, $db);
  while(list($sid, $title, $hometext, $ratings, $score, $topictext, $topicid, $topicimage)= $db->sql_fetchrow($result)) {
            DisplayFeature($sid, $title, $hometext, $ratings, $score, $topictext ,$topicid, $topicimage);
  }
  echo "</div>";//feature
}  //only if $numfeatures > 0
HotSpot(_HOTSPOT2,_HOTSPOTBLOCK2);

//Section2 Create section to hold both Tips AND Articles
echo "<div>";
//display tips first so it can go to the right
if ($numtips > 0){// should we display the tips section
 echo '<span class="tips">';
 HotSpot(_HOTSPOT5,_HOTSPOTBLOCK5);
  //OPEN COLUMN 2
  echo "<span class=\"title\">"._TIPSMOSTRECENT."</span>  ";
  $result = $db->sql_query("SELECT s.sid, s.title, s.hometext, s.ratings, s.score, t.topictext, t.topicid FROM ".$prefix."_stories s, ".$prefix."_topics t WHERE catid='$catidtip' AND t.topicid = s.topic ORDER BY time DESC limit 0, ".$numtips."");
  list($sid, $title, $hometext, $ratings, $score, $topictext, $topicid) = $db->sql_fetchrow($result);
  echo DisplayArticle($sid, $title, $hometext, $ratings, $score,"colspan=\"2\"", $topictext, $topicid, "");//no image for tips
HotSpot(_HOTSPOT6,_HOTSPOTBLOCK6);
  //Display other recent tips
  echo "<span class=\"title\">"._TIPSMORE."</span>";
  while(list($sid, $title, $hometext, $ratings, $score) = $db->sql_fetchrow($result)) {
    $i=$i+1;
    echo DisplayArticleLine($sid, $title, $hometext, $ratings, $score, $i);
  }
  echo '<div style="text-align:center" class=\"tiny\"><a href="modules.php?name=Topics">'._TIPSREADMORE.'</a> | <a href="modules.php?name=Submit_News">'._TIPSSUBMIT.'</a></div>';
  HotSpot(_HOTSPOT7,_HOTSPOTBLOCK7);
  echo "</span>";//close tips

}
HotSpot(_HOTSPOT3,_HOTSPOTBLOCK3);

  //ARTICLES
  //count articles this month
  $sql = "SELECT count(sid), sum( counter ) "
        ."FROM `".$prefix."_stories` WHERE  (TO_DAYS(NOW()) - TO_DAYS(time) <= ".$numdaysrecent.") ";
  $result = $db->sql_query($sql);
  $row = $db->sql_fetchrow($result);
  $countrecent =$row[0];
  if ($countrecent < $minnumart)  $countrecent = $minnumart;
  $sql= "SELECT s.sid, s.title, s.hometext, s.ratings, s.score, t.topictext, t.topicid, t.topicimage, s.catid  "
       ."FROM ".$prefix."_stories s, ".$prefix."_topics t "
       ."WHERE s.catid in ('$catidarticle','$catidfeature') AND t.topicid = s.topic  ORDER  BY s.sid DESC LIMIT 0 , ".($countrecent+$numfeatures);
  //if(is_admin()) echo "AA ".$sql."</br />";
  $result = $db->sql_query($sql);
  $featuresshown=0;
    while(list($sid, $title, $hometext, $ratings, $score, $topictext, $topicid, $topicimage, $catid) = $db->sql_fetchrow($result)) {
       //echo "$numfeatures > $featuresshown AND $catid == $featureid yy $actuallyshown+ $featuresshown < $countrecent  zz<br />";
       if ($numfeatures > 0 AND $numfeatures > $featuresshown AND $catid == $catidfeature){//if this was a feature shown in the features section then skip it
         $featuresshown++;
       } elseif (($actuallyshown + $featuresshown) < $countrecent or $actuallyshown < $minnumart) {
           if ($actuallyshown==0){    echo '<br /><div class="title">'._ARTICLESRECENT.'</div> <hr class="article">';}
           $actuallyshown++;
         if ($actuallyshown <= $numfullart){//should this be a full article
               if ($actuallyshown <=$numarticleimages) $displaytopicimage =  $topicimage; else $displaytopicimage = "";
               DisplayArticle($sid, $title, $hometext, $ratings, $score,"", $topictext, $topicid, $displaytopicimage);
        } else { //just display line
            if ($actuallyshown == $numfullart+1) HotSpot(_HOTSPOT4,_HOTSPOTBLOCK4);

            echo DisplayArticleLine($sid, $title, $hometext, $ratings, $score, $actuallyshown);
        }
       }//dont show more articles than we should- including features already shown
    }
    if ($actuallyshown > 0)
    echo '<div class=\"tiny\" style="text-align: center;"><a href="modules.php?name=Topics">'._ARTICLESREADMORE.'</a> | <a href="modules.php?name=Submit_News">'._ARTICLESSUBMIT.'</a></div>';

  echo "</div>";//close section2

HotSpot(_HOTSPOT8,_HOTSPOTBLOCK8);
//CloseTable();
 echo "</td></tr></table></td></tr></table>\n";
HotSpot(_HOTSPOT9,_HOTSPOTBLOCK9);

include_once(NUKE_BASE_DIR.'footer.php');

?>