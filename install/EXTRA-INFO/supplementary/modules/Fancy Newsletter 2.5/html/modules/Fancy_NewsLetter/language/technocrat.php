<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Evolution Functions
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : functions_browser.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 1.0.0
   Date          : 06.26.2005 (mm.dd.yyyy)

   Notes         : Easter Egg
************************************************************************/

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
     "http://www.w3.org/TR/html4/strict.dtd">';
echo '<html>
    <head>
    <style type="text/css">
        H1.myclass {font-size: 20pt; font-style: bold; color: blue; text-align: center}
        H1.myclass2 {font-size: 11pt; font-style: normal; text-align: center}
        H1.myclass3 {font-size: 11pt; font-style: normal; color: red; text-align: center}
    </style>

    <title>You Found an Easter Egg!!!</title>
    </head>';

echo '<body>';

echo '<table border="0" width="100%">';
echo '<tr align="center"><td><img src="/images/evo/sdh-1.jpg" alt="" title=""></td></tr>';
echo '<tr align="center"><td><H1 class="myclass2">Technocrat says:</H1></td></tr>';
echo '<tr><td><H1 class="myclass3">DRINK ALOT</H1></td></tr>';
echo '<tr><td><H1 class="myclass3">SLEEP ALITTLE</H1></td></tr>';
echo '</table>';
echo '</body></html>';

?>