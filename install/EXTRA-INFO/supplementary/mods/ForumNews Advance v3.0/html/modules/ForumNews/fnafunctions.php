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

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

function pagination($total_pages, $news_id, $id, $page, $num, $tz){
        global $module_name, $fnalang;
        if ( $total_pages == 1 )
        {
                echo '';
        }
        elseif ( $total_pages > 10 )
        {
                $init_page_max = ( $total_pages > 3 ) ? 3 : $total_pages;
                for($i = 1; $i < $init_page_max + 1; $i++)
                {
                        if($news_id != 0){
                        $page_string .= ( $i == $page ) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'&amp;news_id='.$news_id.'">' . $i . '</a>';
                        }else{
                         $page_string .= ( $i == $page ) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'">' . $i . '</a>';
                        }
                        if ( $i <  $init_page_max )
                        {
                                $page_string .= ", ";
                        }
                }

                if ( $total_pages > 3 )
                {
                        if ( $page > 1  && $page < $total_pages )
                        {
                                $page_string .= ( $page > 5 ) ? ' ... ' : ', ';

                                $init_page_min = ( $page > 4 ) ? $page : 5;
                                $init_page_max = ( $page < $total_pages - 4 ) ? $page : $total_pages - 4;

                                for($i = $init_page_min - 1; $i < $init_page_max + 2; $i++)
                                {
                                        if($news_id != 0){
                                        $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'&amp;news_id='.$news_id.'">' . $i . '</a>';
                                        }else{
                                        $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'">' . $i . '</a>';
                                        }
                                        if ( $i <  $init_page_max + 1 )
                                        {
                                                $page_string .= ', ';
                                        }
                                }

                                $page_string .= ( $page < $total_pages - 4 ) ? ' ... ' : ', ';
                        }
                        else
                        {
                                $page_string .= ' ... ';
                        }

                        for($i = $total_pages - 2; $i < $total_pages + 1; $i++)
                        {
                                if($news_id != 0){
                                $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'&amp;news_id='.$news_id.'">' . $i . '</a>';
                                }else{
                                $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'">' . $i . '</a>';
                                }
                                if( $i <  $total_pages )
                                {
                                        $page_string .= ", ";
                                }
                        }
                }
        }else
        {
                for($i = 1; $i < $total_pages + 1; $i++)
                        {
                                if($news_id != 0){
                                $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'&amp;news_id='.$news_id.'">' . $i . '</a>';
                                }else{
                                $page_string .= ($i == $page) ? '<strong>' . $i . '</strong>' : '<a href="modules.php?name='.$module_name.'&amp;page='.$i.'">' . $i . '</a>';
                                }
                                if( $i <  $total_pages )
                                {
                                        $page_string .= ", ";
                                }
                        }
        }
        if ( $total_pages > 1 & $id == 0 & $news_id == 0)
        {
        if ($page != 1){
        $previous = $page - 1;
        $previous = '<a href="modules.php?name='.$module_name.'&amp;page='.$previous.'">'._FNA_PREVIOUS.'</a> ';
        }else{
        $previous = '';
        }
        if ($page != $total_pages){
        $next = $page + 1;
        $next = ' <a href="modules.php?name='.$module_name.'&amp;page='.$next.'">'._FNA_NEXT.'</a>';
        }else{
        $next = '';
        }
        OpenTable();
        echo "<div align=\"center\"><strong>"._FNA_PAGE."</strong> ". $previous . $page_string . $next . "</div>";
        CloseTable();
        }elseif ($news_id != 0 & $total_pages > 1 & $id == 0 & $news > $num){
        if ($page != 1){
        $previous = $page - 1;
        $previous = '<a href="modules.php?name='.$module_name.'&amp;page='.$previous.'&amp;news_id='.$news_id.'">'._FNA_PREVIOUS.'</a> ';
        }else{
        $previous = '';
        }
        if ($page != $total_pages){
        $next = $page + 1;
        $next = ' <a href="modules.php?name='.$module_name.'&amp;page='.$next.'&amp;news_id='.$news_id.'">'._FNA_NEXT.'</a>';
        }else{
        $next = '';
        }
        OpenTable();
        echo "<div align=\"center\"><strong>"._FNA_PAGE."</strong> ". $previous . $page_string . $next . "</div>";
        CloseTable();
        }
}
function create_fnadate($format, $gmepoch, $tz)
{
        global $currentlang, $fnalang;
    static $translate;
    if ( empty($translate) && $currentlang != 'english' )
    {
                @reset($fnalang['datetime']);
        while ( list($match, $replace) = each(@$fnalang['datetime']) )
        {
            $translate[$match] = $replace;
        }
    }
        $l_timezone = explode('.', $tz);
        $l_timezone = (count($l_timezone) > 1 && $l_timezone[count($l_timezone)-1] != 0) ? $fnalang[sprintf('%.1f', $tz)] : $fnalang[number_format($tz)];
        $time = sprintf(_FNA_ALLTIMES, $l_timezone);
    return ( !empty($translate) ) ? strtr(@gmdate($format, $gmepoch + (3600 * $tz)), $translate)." ".$time : @gmdate($format, $gmepoch + (3600 * $tz))." ".$time;
}

?>