
<?php

########################################################################
# PHP-Nuke Block: colapsible Center Forum Block v.1                        #
# Made for PHP-Nuke 6.5 and up                                         #
#                                                                      #
# Made by White_Devil http://devil-modz.us                               #
# This block is made for any theme              #
########################################################################
# This program is free software. You can redistribute it and/or modify #
# it under the terms of the GNU General Public License as published by #
# the Free Software Foundation; either version 2 of the License.       #
# If you modify this, let me know for fun. =)                          #
########################################################################

if (eregi("block-Forums.php",$PHP_SELF)) {
    Header("Location: index.php");
    die();
}

//Config Stuff
$HideViewReadOnly = 1;
$Last_New_Topics  = 12;
//end config stuff

global $prefix, $db, $sitename, $admin, $ThemeSel;

	if (file_exists("themes/$ThemeSel/forums/images/folder.gif")) {
	  $ajpart1 = "themes/$ThemeSel/forums/images/folder.gif";
	} else {
		$ajpart1 = "modules/Forums/templates/subSilver/images/folder_new.gif";
	}

	if (file_exists("themes/$ThemeSel/forums/images/icon_minipost_new.gif")) {
	  $ajpart2 = "themes/$ThemeSel/forums/images/icon_minipost_new.gif";
	} else {
		$ajpart2 = "modules/Forums/templates/subSilver/images/icon_minipost_new.gif";
	}







$viewlast .="
<style type=\"text/css\" media=\"screen\">
div.visible {
display: deviltag2visible;
}
div.deviltag2hidden {
display: none;
}
</style>

<script type=\"text/javascript\">
function deviltag2() {
var deviltag2 = document.getElementById('deviltag2');
if ( deviltag2.className == 'deviltag2hidden' ) {
deviltag2.className = 'deviltag2visible';
} else {
deviltag2.className = 'deviltag2hidden';
}
}
</script>
<center><strong>Last $Last_New_Topics Topics.</center></strong>

<div id='deviltag2' class='deviltag2visible'>

 <table border=\"3\" width=\"100%\" id=\"table1\" cellspacing=\"1\" style=\"border-collapse: collapse\">
	<tr>
		<td align=\"center\"><b>Fórum/Téma</b></td>
		<td align=\"center\"><b>Válaszok</b></td>
		<td align=\"center\"><b>Szerzõ</b></td>
		<td align=\"center\"><b>Nézve</b></td>
		<td align=\"center\"><b>Utolsó Posta</b></td>
	</tr>";


$Count_Topics = 0;
$Topic_Buffer = "";
$result = $db->sql_query( "SELECT t.topic_id, f.forum_name, f.forum_id, t.topic_last_post_id, t.topic_title, t.topic_poster, t.topic_views, t.topic_replies, t.topic_moved_id FROM ".$prefix."_bbtopics t, ".$prefix."_bbforums f where t.forum_id=f.forum_id ORDER BY topic_last_post_id DESC" );
while( list( $topic_id, $forum_name, $forum_id, $topic_last_post_id, $topic_title, $topic_poster, $topic_views, $topic_replies, $topic_moved_id ) = $db->sql_fetchrow( $result ) )

{
   $skip_display = 0;
   if( $HideViewReadOnly == 1 )
   {
      $result2 = $db->sql_query( "SELECT auth_view, auth_read FROM ".$prefix."_bbforums where forum_id = '$forum_id'" );
      list( $auth_view, $auth_read ) = $db->sql_fetchrow( $result2 );
      if( ( $auth_view != 0 ) or ( $auth_read != 0 ) ) { $skip_display = 1; }
   }

   if( $topic_moved_id != 0 )
   {
	  // Shadow Topic !!
      $skip_display = 1;
   }

   if( $skip_display == 0 )
   {
	  $Count_Topics += 1;

$result2 = $db->sql_query("SELECT username, user_id FROM ".$prefix."_users where user_id='$topic_poster'");
list($username, $user_id)=$db->sql_fetchrow($result2);
$avtor=$username;
$sifra=$user_id;

$result3 = $db->sql_query("SELECT poster_id, FROM_UNIXTIME(post_time,'%b %d, %Y at %T') as post_time FROM ".$prefix."_bbposts where post_id='$topic_last_post_id'");
list($poster_id, $post_time)=$db->sql_fetchrow($result3);

$result4 = $db->sql_query("SELECT username, user_id FROM ".$prefix."_users where user_id='$poster_id'");
list($username, $user_id)=$db->sql_fetchrow($result4);







$viewlast .= "
<tr>
<td><img src=\"$ajpart1\" width=\"19\" height=\"18\" border=\"0\" /><b>$forum_name</b><br>
<a href=\"modules.php?name=Forums&file=viewtopic&p=$topic_last_post_id#$topic_last_post_id\">$topic_title</a>
</td>
<td align=\"center\">
$topic_replies
</td>
<td align=\"center\">
<a href=\"modules.php?name=Forums&file=profile&mode=viewprofile&u=$sifra\">$avtor</a>
</td>
<td align=\"center\">
$topic_views
</td>
<td align=\"center\">
$post_time<br>
$username
<a href=\"modules.php?name=Forums&file=viewtopic&p=$topic_last_post_id#$topic_last_post_id\"><img src=\"$ajpart2\" border=\"0\" alt=\"Latest Post\"></a>
</td>
</tr>
";
}

   if( $Last_New_Topics == $Count_Topics ) { break 1; }

}


$viewlast .= "</table></div>";


$content .= "$viewlast";



?>