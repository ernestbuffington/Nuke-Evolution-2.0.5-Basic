<?php

if (eregi("block-Random_Themes_Multi_Center.php",$PHP_SELF)) {
    Header("Location: index.php");
    die();
}


// the only thing you might want to change on this block is the width of the images if your theme cant handle 150 pixels

// the actual size of the images on show are 413 x 692 they have been sized down to fit within nuke side blocks below are the settings to adjust it

$width="118";  //sets the width of the image
$height="95";  // sets the height of the image

//do not edit below unless you know what you are doing

include("scripts/gradient.js");

$content  =  "<div align=\"center\">";
$content  .= " <table border=\"0\" cellpadding=\"4\" style=\"border-collapse: collapse\" width=\"100%\" id=\"table1\" cellspacing=\"4\">";
$content  .= "   <tr>";
$content  .= "     <td>";
$content  .= "     <p align=\"center\">";
$content  .= "     <a title=\"Download Themes.\" target=\"_blank\" href=\"http://www.evo-hungary.hu/modules.php?name=Downloads3\">";
$content  .= "     <img border=\"0\" class=\"gradualshine\" onMouseover=\"slowhigh(this)\" onMouseout=\"slowlow(this)\" src=\"http://www.evo-hungary.hu/pics/themes/rotate.php?img=Revolution.png\" width=\"$width\" height=\"$height\" border=\"0\"></a></td>";
$content  .= "     <td>";
$content  .= "     <p align=\"center\">";
$content  .= "     <a title=\"Download Themes.\" target=\"_blank\" href=\"http://www.evo-hungary.hu/modules.php?name=Downloads3\">";
$content  .= "     <img border=\"0\" class=\"gradualshine\" onMouseover=\"slowhigh(this)\" onMouseout=\"slowlow(this)\" src=\"http://www.evo-hungary.hu/pics/themes/rotate.php?img=Inferno1.png\" width=\"$width\" height=\"$height\" border=\"0\"></a></td>";
$content  .= "   </tr>";
$content  .= "   <tr>";
$content  .= "     <td>";
$content  .= "     <p align=\"center\">";
$content  .= "     <a title=\"Download Themes.\" target=\"_blank\" href=\"http://www.evo-hungary.hu/modules.php?name=Downloads3\">";
$content  .= "     <img border=\"0\" class=\"gradualshine\" onMouseover=\"slowhigh(this)\" onMouseout=\"slowlow(this)\" src=\"http://www.evo-hungary.hu/pics/themes/rotate.php?img=EIBones.png\" width=\"$width\" height=\"$height\" border=\"0\"></a></td>";
$content  .= "     <td>";
$content  .= "     <p align=\"center\">";
$content  .= "     <a title=\"Download Themes.\" target=\"_blank\" href=\"http://www.evo-hungary.hu/modules.php?name=Downloads3\">";
$content  .= "     <img border=\"0\" class=\"gradualshine\" onMouseover=\"slowhigh(this)\" onMouseout=\"slowlow(this)\" src=\"http://www.evo-hungary.hu/pics/themes/rotate.php?img=MG-gs039.png\" width=\"$width\" height=\"$height\" border=\"0\"></a></td>";
$content  .= "   </tr>";
$content  .= " </table>";
$content  .= "</div>";
$content  .= "<center><p align=\"center\"><b>Link To Us</b></p>";
$content  .= " <p align=\"center\">";
$content  .= " <img border=\"0\" class=\"gradualshine\" onMouseover=\"slowhigh(this)\" onMouseout=\"slowlow(this)\" src=\"http://www.evo-hungary.hu/modules/LinktoUs/images/Logo.gif\" width=\"360\" height=\"60\"></a></p></center>";



?>