<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

global $ThemeInfo, $theme_name;
if ($banners == 1){
echo "  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1000\" background=\"themes/$theme_name/images/background.jpg\" align=\"center\">\n";
echo "   <tr><td width=\"50%\"></td>\n";
echo "   <td><div align=\"center\">\n";
echo    ads (0);
echo "   </div></td>";
echo "    <td width=\"50%\"></td></tr></table>\n";}

echo "  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1000\" align=\"center\">\n";
echo "   <tr>\n";
echo "   <td><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1000\" align=\"center\">\n";
echo "	  <tr>\n";
echo "		<td colspan=\"3\"><img src=\"themes/$theme_name/images/logo.jpg\" width=\"1000\" height=\"316\" alt=\"\"></td>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td rowspan=\"6\"><img src=\"themes/$theme_name/images/header_02.jpg\" width=\"845\" height=\"184\" alt=\"\"></td>\n";
echo "		<td align=\"center\" onMouseout= this.style.backgroundImage='url(themes/$theme_name/images/button.jpg)' onMouseover= this.style.backgroundImage='url(themes/$theme_name/images/hit.jpg)' background=\"themes/$theme_name/images/button.jpg\" width=\"122\" height=\"22\" alt=\"\"><a href=\"$link1\" class=\"copyright\">" . urlencode($ThemeInfo['link1text']) . "</a></TD>\n";
echo "		<td rowspan=\"6\"><img src=\"themes/$theme_name/images/header_04.jpg\" width=\"33\" height=\"184\" alt=\"\"></td>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td align=\"center\" onMouseout= this.style.backgroundImage='url(themes/$theme_name/images/button.jpg)' onMouseover= this.style.backgroundImage='url(themes/$theme_name/images/hit.jpg)' background=\"themes/$theme_name/images/button.jpg\" width=\"122\" height=\"22\" alt=\"\"><a href=\"$link2\" class=\"copyright\">" . urlencode($ThemeInfo['link2text']) . "</a></TD>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td align=\"center\" onMouseout= this.style.backgroundImage='url(themes/$theme_name/images/button.jpg)' onMouseover= this.style.backgroundImage='url(themes/$theme_name/images/hit.jpg)' background=\"themes/$theme_name/images/button.jpg\" width=\"122\" height=\"22\" alt=\"\"><a href=\"$link3\" class=\"copyright\">" . urlencode($ThemeInfo['link3text']) . "</a></TD>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td align=\"center\" onMouseout= this.style.backgroundImage='url(themes/$theme_name/images/button.jpg)' onMouseover= this.style.backgroundImage='url(themes/$theme_name/images/hit.jpg)' background=\"themes/$theme_name/images/button.jpg\" width=\"122\" height=\"22\" alt=\"\"><a href=\"$link4\" class=\"copyright\">" . urlencode($ThemeInfo['link4text']) . "</a></TD>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td align=\"center\" onMouseout= this.style.backgroundImage='url(themes/$theme_name/images/button.jpg)' onMouseover= this.style.backgroundImage='url(themes/$theme_name/images/hit.jpg)' background=\"themes/$theme_name/images/button.jpg\" width=\"122\" height=\"22\" alt=\"\"><a href=\"$link5\" class=\"copyright\">" . urlencode($ThemeInfo['link5text']) . "</a></TD>\n";
echo "    </tr>\n";
echo "	  <tr>\n";
echo "		<td><img src=\"themes/$theme_name/images/header_09.jpg\" width=\"122\" height=\"74\" alt=\"\"></td>\n";
echo "    </tr>\n";
echo "    </table></td></tr></table>\n";
echo "  <table width=\"1000\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" background=\"themes/$theme_name/images/background.jpg\" align=\"center\">\n";
echo "  <tr valign=\"top\">\n";
echo "  	<td valign=\"top\">\n";
?>	
