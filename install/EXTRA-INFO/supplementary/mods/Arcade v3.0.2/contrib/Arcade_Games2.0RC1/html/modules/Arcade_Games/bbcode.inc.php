<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/** ANSIname => ANSIcode LUT */
$ANSINAME2CODE  = array ("reset"     => "\e[0m",    "bold"       => "\e[1m",
                         "underline" => "\e[4m",    "blink"      => "\e[5m",
                         "reverse"   => "\e[7m",    "invisible"  => "\e[8m",
                         "black"     => "\e[0;30m", "darkgrey"   => "\e[1;30m",
                         "red"       => "\e[0;31m", "lightred"   => "\e[1;31m",
                         "green"     => "\e[0;32m", "lightgreen" => "\e[1;32m",
                         "brown"     => "\e[0;33m", "yellow"     => "\e[1;33m",
                         "blue"      => "\e[0;34m", "lightblue"  => "\e[1;34m",
                         "purple"    => "\e[0;35m", "magenta"    => "\e[1;35m",
                         "cyan"      => "\e[0;36m", "lightcyan"  => "\e[1;36m",
                         "grey"      => "\e[0;37m", "white"      => "\e[1;37m",
                         "bgblack"   => "\e[40m",   "bgred"      => "\e[41m",
                         "bggreen"   => "\e[42m",   "bgyellow"   => "\e[43m",
                         "bgblue"    => "\e[44m",   "bgmagenta"  => "\e[45m",
                         "bgcyan"    => "\e[46m",   "bgwhite"    => "\e[47m"
                        );

/** BBColor => ANSIname LUT */
$BBCOLOR2ANSI    = array("skyblue"   => "blue",     "royalblue" => "blue",
                         "blue"      => "blue",     "darkblue"  => "blue",
                         "orange"    => "red",      "orangered" => "red",
                         "crimson"   => "red",      "red"       => "lightred",
                         "firebrick" => "red",      "darkred"   => "red",
                         "green"     => "green",    "limegreen" => "green",
                         "seagreen"  => "green",    "darkgreen" => "green",
                         "deeppink"  => "magenta",  "tomato"    => "red",
                         "coral"     => "cyan",     "purple"    => "purple",
                         "indigo"    => "blue",     "burlywood" => "red",
                         "sandybrown"=> "red",      "sierra"    => "sierra",
                         "chocolate" => "brown",    "teal"      => "teal",
                         "silver"    => "white",
                         "black"     => "black",    "yellow"    => "yellow",
                         "magenta"   => "magenta",  "cyan"      => "cyan",
                         "white"     => "white"
                        );

/** ANSInames => BBCode LUT */
$ANSINAME2BBCODE = array("bold" => "B", "underline" => "U", "reverse" => "I",
                         "red"    => "COLOR=red",      "blue"   => "COLOR=blue",
                         "green"  => "COLOR=green",    "cyan"   => "COLOR=cyan",
                         "magenta"=> "COLOR=deeppink", "purple" => "COLOR=purple",
                         "black"  => "COLOR=black",    "white"  => "COLOR=white",
                         "yellow" => "COLOR=yellow",   "brown"  => "COLOR=chocolate"
                        );

/** Fixed width for alignments */
//$width           = 80;


/*============================================================================*/


/**
 * Module supporting conversion of markups between ANSI, BBCode and (X)HTML.
 *
 * This is the initial release of a PHP port of my BBCode module for Ruby.
 * Both modules are part of my homepage at http://cochi.bei.t-online.de/.
 * I tried to adjust the style to the possibilities within PHP and tried
 * to follow the official PEAR standards for code. Furthermore I cleaned
 * up some matching expressions in both versions and adjusted HTML output
 * to return valid XHTML constructs. Also converted the RDoc comments as
 * used for Ruby into PHPDoc comments.
 * 
 * HISTORY:
 *  20021111    Initial version of this port
 *
 * @author      Thomas-Ivo Heinen <cochi@upb.de>
 * @version     20021111-2200
 */
class BBCode_Arcade {

    /**
     * Returns the ANSI sequence for given color, if existant.
     * 
     * @param   String      A valid name of a ANSI-convertible color.
     * @returns String      The ANSi sequence for the color.
     * @public
     * @static
     */
    function ansi($colorname) {
        $colorname = trim($colorname);
        return ($GLOBALS[ANSINAME2BBCODE][strtolower($colorname)]);
    }

  
    /**
     * Will strip any BBCode tags from the given string.
     *
     * @param   String      A string with BBCode markup
     * @returns String      The string without BBCode markup
     * @public
     * @static
     */ 
    function strip_bbcode($string) {
        $string = trim($string);
        return (preg_replace("/\[[A-Za-z0-9\/=]+\]/", "", $string));
    }


    /**
     * Returns the string with all ansi escape sequences converted to BBCodes.
     * 
     * @param   String      A ANSI-sequence marked string.
     * @returns String      The string with BBCode markup.
     * @public
     * @static
     */
    function ansi_to_bbcode($string) {
        $string = trim($string);
        if (is_null($string) || empty($string)) return ("");
        $result = "";
        $tagstack = array();

        // Iterate over input lines
        foreach( explode("\n", $string) as $line) {
            preg_match("/\e\[[0-9;]+m/", $line, $ansi);
            if (is_null($ansi) || empty($ansi)) continue;

            $temp = array_flip($GLOBALS[ANSINAME2CODE]);

            // Iterate over found ansi sequences
            foreach($ansi as $seq) {
                $ansiname = $temp[ str_replace(chr(27), "\e", $seq) ];
                $bbname = "";

                // Pop last tag and form closing tag
                if ($ansiname == "reset") {
                    $lasttag = array_pop($tagstack);

                    $temp2 = explode("=", $lasttag);
                    $bbname = "/" . $temp2[0];
                }

                // Get corresponding BBCode tag + Push to stack
                else {
                    $bbname = $GLOBALS[ANSINAME2BBCODE][$ansiname];
                    array_push($tagstack, $bbname);
                }

                // Replace ansi sequence by BBCode tag
                $replace = sprintf("[%s]", $bbname);
                $line = preg_replace( "/" . preg_quote($seq) . "/", $replace, $line );
            }

            // Append converted line
            $result .= sprintf("%s\n", $line); 
        }
      
        // Some tags are unclosed 
        while (! empty($tagstack)) {
            $temp2 = explode("=", array_pop($tagstack));
            $result .= sprintf("[/%s]", $temp2[0]); 
        }

        return ($result); 
    }


    /**
     * Returns the string with all formatting instructions in BBCodes 
     * converted to ANSI code sequences / aligned with spaces to specified 
     * width.
     * 
     * @param   String      A BBCode marked string.
     * @returns String      The string with ANSI sequences.
     * @public
     * @static
     */
    function bbcode_to_ansi($string, $usecolors = true) {
        $string = trim($string);
        if (is_null($string) || empty($string)) return "";
        $result = "";

        if (! $usecolors) return BBCode_Arcade::strip_bbcode($string);

        // Iterate over lines
        foreach( explode("\n", $string) as $line) {

            // TODO: stacking? other styles!
            foreach( $GLOBALS[ANSINAME2BBCODE] as $key=>$val) {
                $line = preg_replace("/\[" . $val . "\]/", $GLOBALS[ANSINAME2CODE][$key], $line);
                $line = preg_replace("/\[\/" . $val . "\]/", $GLOBALS[ANSINAME2CODE]["reset"], $line);
            }

            // Fonttypes and sizes not available
            $line = preg_replace("/\[SIZE=\d\]/", "", $line);
            $line = preg_replace("/\[\/SIZE\]/", "", $line);
            $line = preg_replace("/\[FONT=[^\]]*\]/", "", $line);
            $line = preg_replace("/\[\/FONT\]/", "", $line);
    
            // Color-mapping
            preg_match("/\[COLOR=(.*?)\]/i", $line, $colors);
            foreach($colors as $col) {
                $name = $GLOBALS[BBCOLOR2ANSI][strtolower($col)];
                if (empty($name)) $name = $GLOBALS[BBCOLOR2ANSI]["white"];
                $code = $GLOBALS[ANSINAME2CODE][$name];
   
                $line = preg_replace("/\[COLOR=" . $col . "\]/i", $code); 
            }
            $line = str_replace("[/COLOR]", $GLOBALS[ANSINAME2CODE]["reset"], $line);

            // TODO: Alignment
            // TODO: IMGs
            // TODO: EMAILs
            // TODO: URLs
            // TODO: QUOTEs
            // TODO: LISTs

            $result .= sprintf("%s\n", $line);
        }

        return ($result);
    }


    /**
     * Returns the (X)HTML markup string as BBCode.
     * 
     * @param   String      A (X)HTML marked string.
     * @returns String      The string with BBCode
     * @public
     * @static
     */
    function html_to_bbcode($string) {
        $string = trim($string);
        if (is_null($string) || empty($string)) return ("");
        $result = "";

        // Iterate over lines
        foreach( preg_split("/<br *\/?>/i", $string) as $line) {
            $styles = array("strong" => "b", "b" => "b",
                            "em"     => "i", "i" => "i",
                            "u" => "u");

            // preserve B, I, U
            foreach( $styles as $html => $code) {
                $line = preg_replace("/<" . $html . ">/i", "[" . strtoupper($code) ."]", $line);
                $line = preg_replace("/<\/" . $html . ">/i", "[/" . strtoupper($code) ."]", $line);
            }

            // TODO: COLORs
            // TODO: SIZEs
            // TODO: FONTs

            // EMAIL
            $line = preg_replace("/<a +href *= *\"mailto:(.*?)\".*?>.*?<\/a>/i", "[EMAIL]\\1[/EMAIL]", $line);

            // URL
            $line = preg_replace("/<a +href *= *\"((?:https?|ftp):\/\/.*?)\".*?>(.*?)<\/a>/i", "[URL=\\1]\\2[/URL]", $line);

            // Other refs + closing tags => throw away
            $line = preg_replace("/<a +href *= *\".*?\".*?>/i", "", $line);
            $line = preg_replace("/<\/a>/i",            "", $line);

            // IMG
            $line = preg_replace("/<img +src *= *\"(.*?)\".*?\/?>/i", "[IMG=\\1]", $line);

            // CENTER (right/left??)
            $line = preg_replace("/<center>/i",   "[ALIGN=center]", $line);
            $line = preg_replace("/<\/center>/i", "[/ALIGN]",       $line);

            // QUOTE
            $line = preg_replace("/<(?:xmp|pre)>/i",   "[QUOTE]",  $line);
            $line = preg_replace("/<\/(?:xmp|pre)>/i", "[/QUOTE]", $line);

            // LIST
            $line = preg_replace("/<ul>/i",   "\n[LIST]\n",  $line);
            $line = preg_replace("/<\/ul>/i", "\n[/LIST]\n", $line);
            $line = preg_replace("/<li *\/?> */i", "\n[*] ", $line);

            // Unknown tags => throw away
            $line = preg_replace("/<.*? *\/?>/", "", $line);
       
            $result .= sprintf("%s<br />\n", $line);
        }

        return (preg_replace("/<br *\/?>/i", "\n", $result));
    }

    
    /**
     * Returns the string with all formatting instructions in BBCodes 
     * converted to XHTML markups
     * 
     * @param   String      A BBCode marked string.
     * @returns String      The string with XHTML.
     * @public
     * @static
     */
    function bbcode_to_html($string) {
        $string = trim($string);
        if (is_null($string) || empty($string)) return ("");
        $result = "";

        // Iterate over lines
        foreach( explode("\n", $string) as $line) {
            $styles = array( "b" => "strong", "i" => "em", "u" => "u" );

            // preserve B, I, U
            foreach( $styles as $code => $html) {
                $line = preg_replace("/\[" . $code . "\]/i", "<" . $html .">", $line);
                $line = preg_replace("/\[\/" . $code . "\]/i", "</" . $html .">", $line);
            }

            // COLOR => font color=... (TODO: should be numeric!)
            $line = preg_replace("/\[COLOR=(.*?)\]/i", "<font color=\"\\1\">", $line);
            $line = preg_replace("/\[\/COLOR\]/i",     "</font>",              $line);

            // SIZE => font size=...
            $line = preg_replace("/\[SIZE=(.*?)\]/i", "<font size=\"\\1\">", $line);
            $line = preg_replace("/\[\/SIZE\]/i",     "</font>",             $line);

            // URL
            $line = preg_replace("/\[URL\]([^\[]+?)\[\/URL\]/i",   "<a href=\"\\1\">\\1</a>", $line);
            $line = preg_replace("/\[URL=(.*?)\](.+?)\[\/URL\]/i", "<a href=\"\\1\">\\2</a>", $line);

            // IMG
            $line = preg_replace("/\[IMG=(.*?)\]/i", "<img src=\"\\1\" />", $line);
            
            // ALIGN=center (TODO: right, left)
            $line = preg_replace("/\[ALIGN=center\]/i", "<center>",  $line);
            $line = preg_replace("/\[ALIGN=left\]/i",   "<center>",  $line);
            $line = preg_replace("/\[ALIGN=right\]/i",  "<center>",  $line);
            $line = preg_replace("/\[\/ALIGN\]/i",      "</center>", $line);

            // QUOTE
            if (preg_match("/\[QUOTE\]/i",   $line)) $quote+=1;
            if (preg_match("/\[\/QUOTE\]/i", $line) && ($quote > -1)) $quote-=1;
            $line = preg_replace("/\[QUOTE\]/i",   "<pre>\n",  $line);
            $line = preg_replace("/\[\/QUOTE\]/i", "</pre>\n", $line);
            if ($quote > 0) {
                $line = preg_replace("/^/", str_repeat("&#62;", $quote), $line);
            }

            // EMAIL
            $line = preg_replace("/\[EMAIL\](.*?)\[\/EMAIL\]/i", "<a href=\"mailto:\\1\">\\1</a>", $line);

            // LIST (TODO: LIST=1, LIST=A)
            $line = preg_replace("/\[LIST(?:=(.*?))?\]/i", "\n<ul>\n",  $line);
            $line = preg_replace("/\[\/LIST\]/i",          "\n</ul>\n", $line);
            $line = preg_replace("/\[\*\]/i",              "\n<li />",  $line);

            // FONT => font ??????
            // ?BLUR?, FADE?

            $result .= sprintf("%s<br />\n", $line);
        }

        return ($result);
    }
  


/*----------------------------------------------------------------------------*/
// Transitive methods


    /**
     * Returns the string with ANSI code sequences converted to XHTML markup.
     * 
     * @param   String      A ANSI-sequence marked string.
     * @returns String      The string with XHTML.
     * @public
     * @static
     */
    function ansi_to_html($string) {
        $bbcoded = BBCode_Arcade::ansi_to_bbcode($string );
        $htmled  = BBCode_Arcade::bbcode_to_html($bbcoded);
    
        return ($htmled);
    } 


    /**
     * Returns the (X)HTML markup code as ANSI sequences.
     * 
     * @param   String      A (X)HTML marked string.
     * @returns String      The string with ANSI sequences.
     * @public
     * @static
     */
    function html_to_ansi($string) {
        $bbcoded = BBCode_Arcade::ansi_to_bbcode($string );
        $ansied  = BBCode_Arcade::bbcode_to_ansi($bbcoded);

        return ($ansied);
    }
}

?>