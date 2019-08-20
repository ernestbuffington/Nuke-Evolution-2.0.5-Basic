<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

global $ThemeInfo, $theme_name;
echo "</td></tr></table>\n";
echo "  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1000\" align=\"center\">\n";
echo "   <tr>\n";
echo "   <td><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1000\" align=\"center\">\n";
echo "	  <tr>\n";
echo "		<td rowspan=\"3\"><img src=\"themes/$theme_name/images/footer_01.jpg\" width=\"18\" height=\"150\" alt=\"\"></td>\n";
echo "      <td rowspan=\"3\" background=\"themes/$theme_name/images/footer_02.jpg\" width=\"158\" valign=\"top\" height=\"150\">$showlinks</td>\n";
echo "		<td><img src=\"themes/$theme_name/images/footer_03.jpg\" width=\"247\" height=\"30\" alt=\"\"></td>\n";
echo "      <td height=\"30\" valign=\"top\"><a href=\"http://mangee.net\"><img src=\"themes/$theme_name/images/footer_04.jpg\" alt=\"MANGEE\" width=\"150\" height=\"30\" border=\"0\"></a></td>\n";
echo "		<td><img src=\"themes/$theme_name/images/footer_05.jpg\" width=\"247\" height=\"30\" alt=\"\"></td>\n";
echo "      <td rowspan=\"3\" background=\"themes/$theme_name/images/footer_06.jpg\" width=\"164\" valign=\"top\" height=\"150\">$showdls</td>\n";
echo "		<td rowspan=\"3\"><img src=\"themes/$theme_name/images/footer_07.jpg\" width=\"16\" height=\"150\" alt=\"\"></td>\n";
echo "	  </tr>\n";
echo "	  <tr>\n";
echo "		<td  colspan=\"3\"><img src=\"themes/$theme_name/images/footer_08.jpg\" width=\"644\" height=\"80\" alt=\"\"></td>\n";
echo "	  </tr>\n";
echo "	  <tr>\n";
echo "    <td  colspan=\"3\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"644\" align=\"center\">\n";
echo "	  <tr>\n";
echo "		<td><img src=\"themes/$theme_name/images/footer_09.jpg\" width=\"240\" height=\"40\" alt=\"\"></td>\n";
echo "      <td height=\"40\" valign=\"top\"><a href=\"http://psd-resources.de\"><img src=\"themes/$theme_name/images/footer_10.jpg\" alt=\"psd-resources.de\" width=\"164\" height=\"40\" border=\"0\"></a></td>\n";
echo "		<td><img src=\"themes/$theme_name/images/footer_11.jpg\" width=\"240\" height=\"40\" alt=\"\"></td>\n";
echo "    </tr></table></td>\n";
echo "	  </tr></table></td></tr></table>\n";
echo "  <table width=\"1000\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" background=\"themes/$theme_name/images/background.jpg\" align=\"center\">\n";
echo "   <tr>\n";
echo "   <td><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" align=\"center\">\n";
echo "	  <tr>\n";
echo "     <td>\n";
echo "<center>\n";
echo ads (2);
footmsg();
echo "</center>\n";
echo "     </td>\n";
echo "    </tr></table></td></tr></table>\n";

?>
