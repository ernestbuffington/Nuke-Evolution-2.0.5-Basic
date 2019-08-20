<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*                                                                       */
/*************************************************************************/

/*****[CHANGES]**********************************************************
-=[Mod]=-
      FNA Select Expand BBcodes                v1.0.2       06/14/2005
      FNA Extended Quote Tag                   v1.0.0       08/17/2005
      FNA Select Expand & Extended Quote Tag   v1.0.0       08/26/2005
      FNA Select Expand BBCode Addon           v1.0.2       10/01/2005
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

function trimText2( $hometext )
  {
$pos = strpos( $hometext, htmlspecialchars( '<!--break-->' ) );
if( ($pos !== false) && ($pos < strlen( $hometext )) ) {
      $trimmed = true;
      $hometext = substr( $hometext, 0, $pos );
      $hometext .= '...';
      return $hometext;
    }
  }

function trimText( $hometext, $size, $trimmed )
  {
    $pos = strpos( $hometext, htmlspecialchars( '<!--break-->' ) );
    if( ($pos !== false) && ($pos < strlen( $hometext )) ) {
      $trimmed = true;
      $hometext = substr( $hometext, 0, $pos );
      $hometext .= '...';
      return $hometext;
    }
    $segments = preg_split(
          '#(\[([a-zA-Z]+?).*?\].+?\[/\\2.*?\])#s' ,
          $hometext, -1,
          PREG_SPLIT_NO_EMPTY | PREG_SPLIT_OFFSET_CAPTURE );

    foreach( $segments as $segment )
    {
      if( ($segment[1] + strlen($segment[0]) > $size) &&
        ($segment[1] <= $size) )
      {
        $trimmed = true;
        $hometext = substr( $hometext, 0, $size );
        if (strlen($segment[0]) > strlen($segment[1])){
        $hometext .= '...';
        $shortened = "1";
        }else{
        $shortened = "0";
        }
        return $hometext;
      }
      elseif( $segment[1] > $size )
      {
        $trimmed = true;
        $hometext = substr( $hometext, 0, $segment[1] );
        if (strlen($segment[0]) > strlen($segment[1])){
        $hometext .= '...';
        $shortened = "1";
        }else{
        $shortened = "0";
        }
        return $hometext;
      }
    }
    $shortened = "0";
    return $hometext;

  }

function parseMessage( $hometext, $bbcode_uid )
  {
    $hometext  = parse_bbcode( $hometext, $bbcode_uid );
    $delim = htmlspecialchars( '<!--break-->' );
    $pos = strpos( $hometext, $delim );
    if( ($pos !== false) && ($pos < strlen( $hometext )) ) {
      $hometext = substr_replace( $hometext, html_entity_decode($delim), $pos, strlen($delim) );
    }
    return $hometext;
  }

/*****[BEGIN]******************************************
 [ Mod:     FNA Select Expand BBcodes              v1.0.2 ]
 ******************************************************/
global $phpbb_root_path;
$u_sxbb_jslib = 'includes/select_expand_bbcodes.js';

// Replacing BBCode variables, but also adding CR to preserve HTML comment delimiters for JS code.
$expand_ary1 = array('<!--', '//-->', SELECT, EXPAND, CONTRACT, '{U_SXBB_JSLIB}');
$expand_ary2 = array("\r<!--\r", "\r//-->\r", Select, Expand, Contract, $u_sxbb_jslib);
$expand_ary3 = array('<!--', '//-->');
$expand_ary4 = array("\r<!--\r", "\r//-->\r");

$bbcode_tpl['quote_open'] = str_replace($expand_ary1, $expand_ary2, $bbcode_tpl['quote_open']);
$bbcode_tpl['quote_username_open'] = str_replace($expand_ary1, $expand_ary2, $bbcode_tpl['quote_username_open']);
$bbcode_tpl['code_open'] = str_replace($expand_ary1, $expand_ary2, $bbcode_tpl['code_open']);

/*****[BEGIN]******************************************
 [ Mod:     FNA Select Expand & Extended Quote Tag v1.0.0 ]
 ******************************************************/
    $bbcode_tpl['quote_post_open'] = str_replace($expand_ary1, $expand_ary2, $bbcode_tpl['quote_post_open']);
    $bbcode_tpl['quote_username_post_open'] = str_replace($expand_ary1, $expand_ary2, $bbcode_tpl['quote_username_post_open']);
/*****[END]********************************************
 [ Mod:     FNA Select Expand & Extended Quote Tag v1.0.0 ]
 ******************************************************/
$bbcode_tpl['quote_close'] = str_replace($expand_ary3, $expand_ary4, $bbcode_tpl['quote_close']);
$bbcode_tpl['code_close'] = str_replace($expand_ary3, $expand_ary4, $bbcode_tpl['code_close']);
/*****[BEGIN]******************************************
 [ Mod:     FNA Select Expand & Extended Quote Tag v1.0.0 ]
 ******************************************************/
    $bbcode_tpl['quote_post_close'] = str_replace($expand_ary3, $expand_ary4, $bbcode_tpl['quote_post_close']);
    $bbcode_tpl['quote_username_post_close'] = str_replace($expand_ary3, $expand_ary4, $bbcode_tpl['quote_username_post_close']);
/*****[END]********************************************
 [ Mod:     FNA Select Expand & Extended Quote Tag v1.0.0 ]
 [ Mod:     FNA Select Expand BBcodes              v1.0.2 ]
 ******************************************************/

function parse_bbcode($hometext, $bbcode_uid){
        $bbcode_tpl = array();
	$bbcode_tpl['b'] = "<span style=\"font-weight: bold;\">";
        $bbcode_tpl['b_close'] = "</span>";
        $bbcode_tpl['strike'] = "span style=\"text-decoration:line-through;\"> ";
        $bbcode_tpl['strike_close'] = "</span>";
        $bbcode_tpl['acronym'] = "<acronym title=\"$1\">";
        $bbcode_tpl['acronym_close'] = "</acronym>";
	$bbcode_tpl['i'] = "<span style=\"font-style: italic;\">";
        $bbcode_tpl['i_close'] = "</span>";
        $bbcode_tpl['u'] = "<span style=\"text-decoration: underline;\">";
        $bbcode_tpl['u_close'] = "</span>";
	$bbcode_tpl['size_open'] = "<span style=\"font-size: $1px; line-height: normal\">";
        $bbcode_tpl['size_close'] = "</span>";
        $bbcode_tpl['color_open'] = "<span style=\"color: $1;\">";
        $bbcode_tpl['color_close'] = "</span>";
        $bbcode_tpl['img'] = "<img src=\"$1\" border=\"0\" />";
        $bbcode_tpl['url1'] = "<a href=\"$1$2\" target=\"_blank\" class=\"postlink\">$1$2</a>";
        $bbcode_tpl['url2'] = "<a href=\"http://$1\" target=\"_blank\" class=\"postlink\">$1</a>";
        $bbcode_tpl['url3'] = "<a href=\"$1$2\" target=\"_blank\" class=\"postlink\">$6</a>";
        $bbcode_tpl['url4'] = "<a href=\"http://$1\" target=\"_blank\" class=\"postlink\">$5</a>";
        $bbcode_tpl['email'] = "<a href=\"mailto:$1\" class=\"postlink\">$1</a>";
/*****[BEGIN]******************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.0 ]
 ******************************************************/
        $bbcode_tpl['code_open'] = "</span><table class=\"bodyline\" width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td class=\"helpline\"><span class=\"genmed\"><strong>"._FNA_LANGCODE.":</strong><script type=\"text/javascript\" src=\"includes/select_expand_bbcodes.js\"></script><script type=\"text/javascript\">var id ='SXBB'+(1000 + Math.floor(Math.random() * 5000));SXBB[id] = new _SXBB(id);SXBB[id].T['select'] = 'SELECT';SXBB[id].T['expand'] = 'EXPAND';SXBB[id].T['contract'] = 'CONTRACT';SXBB[id].writeCmd();</script></span></td></tr><tr><td class=\"code\"><script type=\"text/javascript\">SXBB[id].writeDiv();</script>";
        $bbcode_tpl['code_close'] = "<script type=\"text/javascript\">document.write('</div>');</script></td></tr></table><span class=\"postbody\">";
/*****[END]********************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.0 ]
 ******************************************************/
        $bbcode_tpl['align_open'] = "<div style=\"text-align:$1\">";
        $bbcode_tpl['align_close'] = "</div>";
/*****[BEGIN]******************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.0 ]
 ******************************************************/
        $bbcode_tpl['quote_open'] = "</span><table class=\"bodyline\" width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td class=\"helpline\"><span class=\"genmed\"><strong>"._FNA_LANGQUOTE.":</strong><script type=\"text/javascript\" src=\"includes/select_expand_bbcodes.js\"></script><script type=\"text/javascript\">var id = 'SXBB' + (1000 + Math.floor(Math.random() * 5000));SXBB[id] = new _SXBB(id);SXBB[id].T['select'] = 'SELECT';SXBB[id].T['expand'] = 'EXPAND';SXBB[id].T['contract'] = 'CONTRACT';SXBB[id].writeCmd();</script></span></td></tr><tr><td class=\"quote\"><script type=\"text/javascript\">SXBB[id].writeDiv();</script>";
        $bbcode_tpl['quote_close'] = "</td><script type=\"text/javascript\">document.write('</div>');</script></td></tr></table><span class=\"postbody\">";
        $bbcode_tpl['quote_username_open'] = "</span><table class=\"bodyline\" width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td class=\"helpline\"><span class=\"genmed\"><strong>$1 "._FNA_LANGWROTE.":</strong><script type=\"text/javascript\" src=\"includes/select_expand_bbcodes.js\"></script><script type=\"text/javascript\">var id = 'SXBB' + (1000 + Math.floor(Math.random() * 5000));SXBB[id] = new _SXBB(id);SXBB[id].T['select'] = 'SELECT';SXBB[id].T['expand'] = 'EXPAND';SXBB[id].T['contract'] = 'CONTRACT';SXBB[id].writeCmd();</script></span></td></tr><tr><td class=\"quote\"><script type=\"text/javascript\">SXBB[id].writeDiv();</script>";
/*****[END]********************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.0 ]
 ******************************************************/
 /*****[BEGIN]******************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.2 ]
 ******************************************************/
        $bbcode_tpl['quote_post_open'] = "</span><table class=\"bodyline\" width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td class=\"helpline\"><span class=\"genmed\"><strong>$1 "._FNA_LANGQUOTE.":</strong><script type=\"text/javascript\" src=\"includes/select_expand_bbcodes.js\"></script><script type=\"text/javascript\">var id ='SXBB'+(1000 + Math.floor(Math.random() * 5000));SXBB[id] = new _SXBB(id);SXBB[id].T['select'] = 'SELECT';SXBB[id].T['expand'] = 'EXPAND';SXBB[id].T['contract'] = 'CONTRACT';SXBB[id].writeCmd();</script></span></td></tr><tr><td class=\"quote\"><script type=\"text/javascript\">SXBB[id].writeDiv();</script>";
        $bbcode_tpl['quote_post_close'] = "</td><script type=\"text/javascript\">document.write('</div>');</script></td></tr></table><span class=\"postbody\">";
        $bbcode_tpl['quote_username_post_open'] = "</span><table class=\"bodyline\" width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td class=\"helpline\"><span class=\"genmed\"><strong>$1 "._FNA_LANGWROTE.":</strong><script type=\"text/javascript\" src=\"includes/select_expand_bbcodes.js\"></script><script type=\"text/javascript\">var id ='SXBB'+(1000 + Math.floor(Math.random() * 5000));SXBB[id] = new _SXBB(id);SXBB[id].T['select'] = 'SELECT';SXBB[id].T['expand'] = 'EXPAND';SXBB[id].T['contract'] = 'CONTRACT';SXBB[id].writeCmd();</script></span></td></tr><tr><td class=\"quote\"><script type=\"text/javascript\">SXBB[id].writeDiv();</script>";
        $bbcode_tpl['quote_username_post_close'] = "</td><script type=\"text/javascript\">document.write('</div>');</script></td></tr></table><span class=\"postbody\">";
/*****[END]********************************************
 [ Mod:    FNA Select Expand BBCode Addon      v1.0.2 ]
 ******************************************************/
        $bbcode_tpl['ulist_open'] = "<ul>";
        $bbcode_tpl['ulist_close'] = "</ul>";
        $bbcode_tpl['olist_open'] = "<ol type=\"$1\">";
        $bbcode_tpl['olist_close'] = "</ol>";
        $bbcode_tpl['list_item'] = "<li>";
        $bbcode_tpl['hr'] = "<hr noshade color='#000000' size='1'>";
	$bbcode_tpl['font_open'] = "<span style=\"font-family:$1\">";
	$bbcode_tpl['font_close'] = "</span>";
        $bbcode_tpl['marq_open'] = "<marquee direction=\"$1\" scrolldelay=\"120\">";
        $bbcode_tpl['marq_close'] = "</marquee>";
        $bbcode_tpl['fade_open'] = "<span style=\"height: 1; Filter: Alpha(Opacity=100, FinishOpacity=0, Style=1, StartX=0, FinishX=100%)\">";
        $bbcode_tpl['fade_close'] = "</span>";
        $bbcode_tpl['edit_open'] = "<table width=\"85%\" cellspacing=\"1\" cellpadding=\"3\" border=\"0\" align=\"center\"><tr><td><span class=\"genmed\"><strong>Update:</strong></span></td></tr><tr><td class=\"code\">";
        $bbcode_tpl['edit_close'] = "</tr></table><span class=\"postbody\">";

        $patterns = array();
        $replacements = array();
        $patterns[] = "#\[img:$bbcode_uid\](.*?)\[/img:$bbcode_uid\]#si";
        $replacements[] = $bbcode_tpl['img'];
        $patterns[] = "#\[url\]([a-z0-9]+?://){1}([\w\-]+\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*)?)\[/url\]#is";
        $replacements[] = $bbcode_tpl['url1'];
        $patterns[] = "#\[url\]((www|ftp)\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*?)?)\[/url\]#si";
        $replacements[] = $bbcode_tpl['url2'];
        $patterns[] = "#\[url=([a-z0-9]+://)([\w\-]+\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*?)?)\](.*?)\[/url\]#si";
        $replacements[] = $bbcode_tpl['url3'];
        $patterns[] = "#\[url=(([\w\-]+\.)*?[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*)?)\](.*?)\[/url\]#si";
        $replacements[] = $bbcode_tpl['url4'];
        $patterns[] = "#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si";
        $replacements[] = $bbcode_tpl['email'];
        $hometext = preg_replace($patterns, $replacements, $hometext);

        $code_start_html = $bbcode_tpl['code_open'];
        $code_end_html =  $bbcode_tpl['code_close'];

        $match_count = preg_match_all("#\[code:1:$bbcode_uid\](.*?)\[/code:1:$bbcode_uid\]#si", $hometext, $matches);
        for ($i = 0; $i < $match_count; $i++)
        {
            $before_replace = $matches[1][$i];
            $after_replace = $matches[1][$i];
            $after_replace = str_replace("  ", "&nbsp; ", $after_replace);
            $after_replace = str_replace("  ", " &nbsp;", $after_replace);
            $after_replace = str_replace("\t", "&nbsp; &nbsp;", $after_replace);
            $str_to_match = "[code:1:$bbcode_uid]" . $before_replace . "[/code:1:$bbcode_uid]";
            $replacement = $code_start_html;
            $replacement .= $after_replace;
            $replacement .= $code_end_html;
            $hometext = str_replace($str_to_match, $replacement, $hometext);
        }

        $hometext = str_replace("[code:$bbcode_uid]", $code_start_html, $hometext);
        $hometext = str_replace("[/code:$bbcode_uid]", $code_end_html, $hometext);
        $hometext = preg_replace("/\[acronym:$bbcode_uid=\"(.*?)\"\]/si", $bbcode_tpl['acronym'], $hometext);
        $hometext = str_replace("[/acronym:$bbcode_uid]", $bbcode_tpl['acronym_close'], $hometext);
        $hometext = str_replace("[quote:$bbcode_uid]", $bbcode_tpl['quote_open'], $hometext);
        $hometext = str_replace("[/quote:$bbcode_uid]", $bbcode_tpl['quote_close'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=p=&quot;([0-9]+)&quot;\]/si", $bbcode_tpl['quote_post_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=p=\"([0-9]+)\"\]/si", $bbcode_tpl['quote_post_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=(?:&quot;?([^\"]*)&quot;?);p=(?:&quot;?([0-9]+)&quot;?)\]/si", $bbcode_tpl['quote_username_post_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=(?:\"?([^\"]*)\"?);p=(?:\"?([0-9]+)\"?)\]/si", $bbcode_tpl['quote_username_post_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=(?:\"?([^\"]*)&quot;?);p=(?:&quot;?([0-9]+)\"?)\]/si", $bbcode_tpl['quote_username_post_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=\"(.*?)\"\]/si", $bbcode_tpl['quote_username_open'], $hometext);
        $hometext = preg_replace("/\[quote:$bbcode_uid=&quot;(.*?)&quot;\]/si", $bbcode_tpl['quote_username_open'], $hometext);
        $hometext = str_replace("[list:$bbcode_uid]", $bbcode_tpl['ulist_open'], $hometext);
        $hometext = preg_replace("/\[align=(left|right|center|justify):$bbcode_uid\]/si", $bbcode_tpl['align_open'], $hometext);
        $hometext = str_replace("[/align:$bbcode_uid]", $bbcode_tpl['align_close'], $hometext);
        $hometext = str_replace("[hr:$bbcode_uid]", $bbcode_tpl['hr'], $hometext);
        $hometext = preg_replace("/\[marq=(left|right|up|down):$bbcode_uid\]/si", $bbcode_tpl['marq_open'], $hometext);
        $hometext = str_replace("[/marq:$bbcode_uid]", $bbcode_tpl['marq_close'], $hometext);
        $hometext = str_replace("[*:$bbcode_uid]", $bbcode_tpl['listitem'], $hometext);
        $hometext = str_replace("[/list:u:$bbcode_uid]", $bbcode_tpl['ulist_close'], $hometext);
        $hometext = str_replace("[/list:o:$bbcode_uid]", $bbcode_tpl['olist_close'], $hometext);
        $hometext = preg_replace("/\[list=([a1]):$bbcode_uid\]/si", $bbcode_tpl['olist_open'], $hometext);
        $hometext = preg_replace("/\[font=(.*?):$bbcode_uid\]/si", $bbcode_tpl['font_open'], $hometext);
        $hometext = str_replace("[/font:$bbcode_uid]", $bbcode_tpl['font_close'], $hometext);
        $hometext = str_replace("[b:$bbcode_uid]", $bbcode_tpl['b'], $hometext);
        $hometext = str_replace("[/b:$bbcode_uid]", $bbcode_tpl['b_close'], $hometext);
        $hometext = str_replace("[strike:$bbcode_uid]", $bbcode_tpl['strike'], $hometext);
        $hometext = str_replace("[/strike:$bbcode_uid]", $bbcode_tpl['strike_close'], $hometext);
        $hometext = str_replace("[u:$bbcode_uid]", $bbcode_tpl['u'], $hometext);
        $hometext = str_replace("[i:$bbcode_uid]", $bbcode_tpl['i'], $hometext);
        $hometext = str_replace("[/u:$bbcode_uid]", $bbcode_tpl['u_close'], $hometext);
        $hometext = str_replace("[/i:$bbcode_uid]", $bbcode_tpl['i_close'], $hometext);
        $hometext = preg_replace("/\[size=([1-2]?[0-9]):$bbcode_uid\]/si", $bbcode_tpl['size_open'], $hometext);
        $hometext = str_replace("[/size:$bbcode_uid]", $bbcode_tpl['size_close'], $hometext);
        $hometext = preg_replace("/\[color=(\#[0-9A-F]{6}|[a-z]+):$bbcode_uid\]/si", $bbcode_tpl['color_open'], $hometext);
        $hometext = str_replace("[/color:$bbcode_uid]", $bbcode_tpl['color_close'], $hometext);
        $hometext = str_replace("[edit:$bbcode_uid]", $bbcode_tpl['edit_open'], $hometext);
        $hometext = str_replace("[/edit:$bbcode_uid]", $bbcode_tpl['edit_close'], $hometext);
        $hometext = str_replace("[fade:$bbcode_uid]", $bbcode_tpl['fade_open'], $hometext);
        $hometext = str_replace("[/fade:$bbcode_uid]", $bbcode_tpl['fade_close'], $hometext);
        $hometext = smilies_pass( $hometext );
        $hometext = make_clickable($hometext);
        $hometext = str_replace("\n", '<br />', $hometext);
		$hometext = str_replace("[s:$bbcode_uid]", '<strike>', $hometext);
        $hometext = str_replace("[/s:$bbcode_uid]", '</strike>', $hometext);
        return $hometext;
}

function smilies_pass($message)
{
    static $orig, $repl;
    if (!isset($orig))
    {
        global $db, $prefix;
        $orig = $repl = array();
        $sql = "SELECT * FROM ".$prefix."_bbsmilies";
        if( !$result = $db->sql_query($sql) )
        {
            message_die(GENERAL_ERROR, "Couldn't obtain smilies data", "", __LINE__, __FILE__, $sql);
        }
        $smilies = $db->sql_fetchrowset($result);

        if (count($smilies))
        {
            usort($smilies, 'smiley_sort');
        }

        for ($i = 0; $i < count($smilies); $i++)
        {
            $orig[] = "/(?<=.\W|\W.|^\W)" . pregquote($smilies[$i]['code'], "/") . "(?=.\W|\W.|\W$)/";
            $repl[] = '<img src="modules/Forums/images/smiles/' . $smilies[$i]['smile_url'] . '" alt="' . $smilies[$i]['emoticon'] . '" border="0" />';
        }
    }

    if (count($orig))
    {
        $message = preg_replace($orig, $repl, ' ' . $message . ' ');
        $message = substr($message, 1, -1);
    }
    
    return $message;
}

function smiley_sort($a, $b)
{
    if ( strlen($a['code']) == strlen($b['code']) )
    {
        return 0;
    }

    return ( strlen($a['code']) > strlen($b['code']) ) ? -1 : 1;
}

function pregquote( $str, $delimiter )
{
   $txt = preg_quote( $str );
   $txt = str_replace($delimiter, '\\' . $delimiter, $txt );
   $hometext = $txt;
   return $hometext;
}

function make_clickable($text)
{
    $ret = ' ' . $text;
    $ret = preg_replace("#([\t\r\n ])([a-z0-9]+?){1}://([\w\-]+\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*)?)#i", '\1<a href="\2://\3" target="_blank">\2://\3</a>', $ret);
    $ret = preg_replace("#([\t\r\n ])(www|ftp)\.(([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^ \"\n\r\t<]*)?)#i", '\1<a href="http://\2.\3" target="_blank">\2.\3</a>', $ret);
    $ret = preg_replace("#([\n ])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
    $ret = substr($ret, 1);
    $hometext = $ret;

    return $hometext;
}

?>