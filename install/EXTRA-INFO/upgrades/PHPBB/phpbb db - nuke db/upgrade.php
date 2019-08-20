<?php

define('BASE_DIR', dirname(__FILE__) . '/');
define('UPGRADE_DIR', BASE_DIR . 'upgrade/');

function head() {
    global $text;
    $title = (empty($text['Title'])) ? 'PHPBB Datebase - Nuke Database' : $text['Title'];
    echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
            <html xmlns=\"http://www.w3.org/1999/xhtml\">
            <head>\n
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />\n
            <title>".$title."</title>\n
            <style type=\"text/css\">
            <!--
            .style1 {
            	color: #FF0000;
            	font-weight: bold;
            	font-size: large;
            }
            .style2 {color: #0000FF}
            .style3 {
            	color: #00FF00;
            	font-weight: bold;
            	font-size: large;
            }
            -->
            </style>
            </head>\n
            <body>\n
            <p align=\"center\">\n
            <img src=\"upgrade/logo.gif\" alt=\"logo.gif\" />
            </p>\n
            <p>&nbsp;</p>\n
            <p>&nbsp;</p>\n";
}

function foot() {
    echo "<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>\n
            <a href=\"http://validator.w3.org/check?uri=referer\">\n
             <img src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Transitional\" height=\"31\" width=\"88\" />\n
            </a>\n
          </p>\n";
    echo "</body>\n
            </html>";
}

function get_langs() {
    if(!is_dir(UPGRADE_DIR)) {
        return '';
    }
    if($handle = @opendir(UPGRADE_DIR)) {
        while (($file = @readdir($handle)) !== false) {
            if(strstr($file,'lang-')) {
                $lang = substr($file,strlen('lang-'));
                $lang = substr($lang,0,strlen($lang)-4);
                $langs[] = $lang;
            }
        }
        if(is_array($langs)) {
            return $langs;
        }
    }
    return '';
}

function lang() {
    $langs = get_langs();
    
    if(is_array($langs)) {
        echo "<form id=\"lang\" name=\"lang\" method=\"post\" action=\"upgrade.php\">\n";
        echo "<div align=\"center\">\n";
        echo "<select name=\"selectlang\">\n";
        foreach ($langs as $lang) {
            echo "<option value=\"".$lang."\">".$lang."</option>\n";
        }
        echo "</select>\n";
        echo "<input type=\"submit\" name=\"Submit\" value=\"Submit\" />\n";
        echo "</div>\n"; 
        echo "</form>\n";
    } else {
        echo "<div align=\"center\" class=\"style1\">ERROR!<br />Could not load languages</div>";
    }
}

function type($step=0) {
    global $text;
    echo "<form id=\"upgrade\" name=\"upgrade\" method=\"post\" action=\"upgrade.php?step=".$step."\">\n";
    
    echo "<div align=\"center\">\n";
    echo "<p><input type=\"submit\" name=\"users\" value=\"".$text['Users']."\" /><br />\n";
    echo "<input type=\"submit\" name=\"uf\" value=\"".$text['UF']."\" /></p>\n";
    echo "</div>\n"; 
}

function confirm($step=1) {
    global $text;
    echo "<form id=\"upgrade\" name=\"upgrade\" method=\"post\" action=\"upgrade.php?step=".$step."\">\n";
    
    echo "<div align=\"center\">\n";
    echo "<p>".$text['Confirm']."<br />\n";
    echo "<input type=\"submit\" name=\"yes\" value=\"".$text['Yes']."\" /><br />\n";
    echo "<input type=\"submit\" name=\"no\" value=\"".$text['No']."\" /></p>\n";
    echo "</div>\n";
    if(isset($_POST['users'])) {
        $name = 'users';
    } else if(isset($_POST['uf'])) {
        $name = 'uf';
    }
    echo "<input type=\"hidden\" name=\"".$name."\" value=\"1\" />\n";
}

function error($db) {
    global $dbhost, $dbname, $dbuser, $dbpasswd, $table_prefix, $text;
    
    echo "<span class=\"style1\">".mysql_errno($db).": ".mysql_error($db)."</span><br />\n";
}

function upgrade_users() {
    global $dbhost, $dbname, $dbuser, $dbpasswd, $table_prefix, $text;
    
    echo "<div align=\"center\">\n";
    if(!($db = mysql_connect($dbhost, $dbuser, $dbpasswd))) {
        die($text['error']['DB_Connect']);
    }
    if(!mysql_select_db($dbname,$db)) {
        die($text['error']['DB_Table']);
    }
    //Rename users table
    $sql = 'RENAME TABLE `'.$table_prefix.'users` TO `nuke_users`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Make user_id an int(11)
    $sql = 'ALTER TABLE `nuke_users` CHANGE `user_id` `user_id` INT( 11 ) NOT NULL DEFAULT "0"';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Make user_id auto_increment
    $sql = 'ALTER TABLE `nuke_users` CHANGE `user_id` `user_id` INT( 11 ) NOT NULL AUTO_INCREMENT ';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Add name field
    $sql = 'ALTER TABLE `nuke_users` ADD `name` VARCHAR( 60 ) NOT NULL AFTER `user_id`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_active
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_active` tinyint AFTER `user_level`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_email
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_email` VARCHAR(255) AFTER `username`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Create femail
    $sql = 'ALTER TABLE `nuke_users` ADD `femail` VARCHAR( 255 ) NOT NULL AFTER `user_email`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_website
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_website` VARCHAR(255) AFTER `femail`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_avatar
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_avatar` VARCHAR(255) AFTER `user_website`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_regdate
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_regdate` VARCHAR(20) AFTER `user_avatar`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_icq
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_icq` VARCHAR(15) AFTER `user_regdate`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_occ
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_occ` VARCHAR(100) AFTER `user_icq`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_from
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_from` VARCHAR(100) AFTER `user_occ`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_interests
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_interests` VARCHAR(255) AFTER `user_from`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_sig
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_sig` TEXT AFTER `user_interests`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_viewemail
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_viewemail` tinyint AFTER `user_sig`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_viewemail
    $sql = 'ALTER TABLE `nuke_users` ADD `user_theme` INT( 3 ) NOT NULL AFTER `user_viewemail`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_aim
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_aim` VARCHAR(255) AFTER `user_theme`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_yim
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_yim` VARCHAR(255) AFTER `user_aim`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_msnm
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_msnm` VARCHAR(255) AFTER `user_yim`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Add a bunch of fields
    $sql = 'ALTER TABLE `nuke_users` 
            ADD storynum tinyint(4) NOT NULL default "10" AFTER `user_password`,
            ADD umode varchar(10) NOT NULL default "" AFTER `storynum`, 
            ADD uorder tinyint(1) NOT NULL default "0" AFTER `umode`, 
            ADD thold tinyint(1) NOT NULL default "0" AFTER `uorder`, 
            ADD noscore tinyint(1) NOT NULL default "0" AFTER `thold`,
            ADD bio tinytext NOT NULL AFTER `noscore`, 
            ADD ublockon tinyint(1) NOT NULL default "0" AFTER `bio`, 
            ADD ublock tinytext NOT NULL AFTER `ublockon`,
            ADD theme varchar(255) NOT NULL default "" AFTER `ublock`,
            ADD commentmax int(11) NOT NULL default "4096" AFTER `theme`, 
            ADD counter int(11) NOT NULL default "0" AFTER `commentmax`,
            ADD newsletter int(1) NOT NULL default "0" AFTER `counter`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_posts
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_posts` mediumint AFTER `newsletter`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Change user_posts to int 11
    $sql = 'ALTER TABLE `nuke_users` CHANGE `user_posts` `user_posts` INT( 11 ) NULL DEFAULT NULL';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_attachsig
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_attachsig` tinyint AFTER `user_posts`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_rank
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_rank` INT AFTER `user_attachsig`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Move user_level
    $sql = 'ALTER TABLE nuke_users MODIFY COLUMN `user_level` tinyint AFTER `user_rank`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Add broadcast & popmeson
    $sql = 'ALTER TABLE `nuke_users`
            ADD broadcast tinyint(1) NOT NULL default "1" AFTER `user_level`,
            ADD popmeson tinyint(1) NOT NULL default "0" AFTER `broadcast`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Add points and last IP
    $sql = 'ALTER TABLE `nuke_users`
            ADD points int(10) default "0",
            ADD last_ip varchar(15) NOT NULL default "0"';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Change anon to 1 not -1
    $sql = 'UPDATE `nuke_users` SET `user_id` = "1" WHERE `user_id` = -1';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    echo "</div>";
    mysql_close($db);
}

function upgrade_forums() {
    global $dbhost, $dbname, $dbuser, $dbpasswd, $table_prefix, $text;
    
    echo "<div align=\"center\">\n";
    if(!($db = mysql_connect($dbhost, $dbuser, $dbpasswd))) {
        die($text['error']['DB_Connect']);
    }
    if(!mysql_select_db($dbname,$db)) {
        die($text['error']['DB_Table']);
    }
    //Rename auth_access
    $sql = 'RENAME TABLE `'.$table_prefix.'auth_access` TO `nuke_bbauth_access`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename banlist
    $sql = 'RENAME TABLE `'.$table_prefix.'banlist` TO `nuke_bbbanlist`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Add broadcast & popmeson
    $sql = 'ALTER TABLE `nuke_bbbanlist`
            ADD ban_time int(11) default NULL,
            ADD ban_expire_time int(11) default NULL,
            ADD ban_by_userid mediumint(8) default NULL,
            ADD ban_priv_reason text,
            ADD ban_pub_reason_mode tinyint(1) default NULL,
            ADD ban_pub_reason text';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename categories
    $sql = 'RENAME TABLE `'.$table_prefix.'categories` TO `nuke_bbcategories`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename config
    $sql = 'RENAME TABLE `'.$table_prefix.'config` TO `nuke_bbconfig`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename disallow
    $sql = 'RENAME TABLE `'.$table_prefix.'disallow` TO `nuke_bbdisallow`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename forum_prune
    $sql = 'RENAME TABLE `'.$table_prefix.'forum_prune` TO `nuke_bbforum_prune`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename forum_prune
    $sql = 'RENAME TABLE `'.$table_prefix.'forum_prune` TO `nuke_bbforum_prune`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename forums
    $sql = 'RENAME TABLE `'.$table_prefix.'forums` TO `nuke_bbforums`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename groups
    $sql = 'RENAME TABLE `'.$table_prefix.'groups` TO `nuke_bbgroups`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename posts
    $sql = 'RENAME TABLE `'.$table_prefix.'posts` TO `nuke_bbposts`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename posts_text
    $sql = 'RENAME TABLE `'.$table_prefix.'posts_text` TO `nuke_bbposts_text`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename privmsgs
    $sql = 'RENAME TABLE `'.$table_prefix.'privmsgs` TO `nuke_bbprivmsgs`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename privmsgs_text
    $sql = 'RENAME TABLE `'.$table_prefix.'privmsgs_text` TO `nuke_bbprivmsgs_text`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename ranks
    $sql = 'RENAME TABLE `'.$table_prefix.'ranks` TO `nuke_bbranks`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename search_results
    $sql = 'RENAME TABLE `'.$table_prefix.'search_results` TO `nuke_bbsearch_results`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename search_wordlist
    $sql = 'RENAME TABLE `'.$table_prefix.'search_wordlist` TO `nuke_bbsearch_wordlist`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename search_wordmatch
    $sql = 'RENAME TABLE `'.$table_prefix.'search_wordmatch` TO `nuke_bbsearch_wordmatch`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename sessions
    $sql = 'RENAME TABLE `'.$table_prefix.'sessions` TO `nuke_bbsessions`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename smilies
    $sql = 'RENAME TABLE `'.$table_prefix.'smilies` TO `nuke_bbsmilies`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename themes
    $sql = 'RENAME TABLE `'.$table_prefix.'themes` TO `nuke_bbthemes`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename themes_name 
    $sql = 'RENAME TABLE `'.$table_prefix.'themes_name` TO `nuke_bbthemes_name`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename topics
    $sql = 'RENAME TABLE `'.$table_prefix.'topics` TO `nuke_bbtopics`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename topics_watch
    $sql = 'RENAME TABLE `'.$table_prefix.'topics_watch` TO `nuke_bbtopics_watch`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename user_group
    $sql = 'RENAME TABLE `'.$table_prefix.'user_group` TO `nuke_bbuser_group`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename vote_desc
    $sql = 'RENAME TABLE `'.$table_prefix.'vote_desc` TO `nuke_bbvote_desc`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename vote_results
    $sql = 'RENAME TABLE `'.$table_prefix.'vote_results` TO `nuke_bbvote_results`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename vote_voters
    $sql = 'RENAME TABLE `'.$table_prefix.'vote_voters` TO `nuke_bbvote_voters`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename vote_words
    $sql = 'RENAME TABLE `'.$table_prefix.'words` TO `nuke_bbwords`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename confirm
    $sql = 'RENAME TABLE `'.$table_prefix.'confirm` TO `nuke_bbconfirm`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    //Rename sessions_keys
    $sql = 'RENAME TABLE `'.$table_prefix.'sessions_keys` TO `nuke_bbsessions_keys`';
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    echo "</div>";
    mysql_close($db);
}

function drop_other() {
    global $dbhost, $dbname, $dbuser, $dbpasswd, $table_prefix, $text;
    
    echo "<div align=\"center\">\n";
    if(!($db = mysql_connect($dbhost, $dbuser, $dbpasswd))) {
        die($text['error']['DB_Connect']);
    }
    if(!mysql_select_db($dbname,$db)) {
        die($text['error']['DB_Table']);
    }
    $sql = "DROP TABLE `".$table_prefix."auth_access`, `".$table_prefix."banlist`, `".$table_prefix."categories`, `".$table_prefix."config`, `".$table_prefix."confirm`, `".$table_prefix."disallow`, `".$table_prefix."forum_prune`, `".$table_prefix."forums`, `".$table_prefix."groups`, `".$table_prefix."posts`, `".$table_prefix."posts_text`, `".$table_prefix."privmsgs`, `".$table_prefix."privmsgs_text`, `".$table_prefix."ranks`, `".$table_prefix."search_results`, `".$table_prefix."search_wordlist`, `".$table_prefix."search_wordmatch`, `".$table_prefix."sessions`, `".$table_prefix."sessions_keys`, `".$table_prefix."smilies`, `".$table_prefix."themes`, `".$table_prefix."themes_name`, `".$table_prefix."topics`, `".$table_prefix."topics_watch`, `".$table_prefix."user_group`, `".$table_prefix."vote_desc`, `".$table_prefix."vote_results`, `".$table_prefix."vote_voters`, `".$table_prefix."words`";
    if(!$result = mysql_query($sql, $db)) {
        error($db);
    } else {
        echo "<span class=\"style2\">".$sql."</span><br />\n";
    }
    echo "</div>";
    mysql_close($db);
}



if(isset($_POST['selectlang']) && !empty($_POST['selectlang'])) {
    //Look for invalid crap
    if (preg_match("/[^\w_\-]/i",$_POST['selectlang'])) {
        die('Nice Try');
    }
    $language = $_POST['selectlang'];
    @include_once(UPGRADE_DIR.'lang-'.$language.'.php');
    global $text;
    $text = str_replace('&', "&amp;", $text);
} else {
    head();
    $language = '';
    lang();
    foot();
    die();
}

if (isset($_GET['step']) && ($_GET['step'] == '1' && isset($_POST['no']))) {
	header("Location: upgrade.php?step=0");
    die();
}

head();
$step = (isset($_GET['step'])) ? $_GET['step'] : '';
switch ($step) {
    case '0':
        confirm();
    break;
    case '1':
        include_once(BASE_DIR.'config.php');
        if(isset($_POST['users'])) {
            upgrade_users();
            drop_other();
        } else if(isset($_POST['uf'])) {
            upgrade_users();
            upgrade_forums();
        }
        global $text;
        echo "<span class=\"style3\">".$text['Complete']."</span><br />\n";
        echo "<span class=\"style1\">".$text['Delete']."</span>\n";
    break;
    default:
        type();
    break;
}

if(!empty($language)) {
    echo "<input type=\"hidden\" name=\"selectlang\" value=\"".$language."\" />\n";
}

if(!empty($language)) echo "</form>\n";
foot();
?>