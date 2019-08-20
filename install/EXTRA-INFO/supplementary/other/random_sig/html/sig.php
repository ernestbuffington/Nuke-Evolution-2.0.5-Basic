<?php

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/************************************************************************
   Nuke-Evolution: Random Sig
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : sig.php
   Author        : Technocrat (www.nuke-evolution.com)
   Version       : 2.0.1
   Date          : 03/08/2005 (mm-dd-yyyy)

   Notes         : Allows you to have a random sig displayed on sites.
************************************************************************/

//Change me
$sig_folder = '/sigs/';

$sig_root = dirname(__FILE__).$sig_folder;

function ErrorImg($text)
{
       $im = imagecreate (300, 30); /* Create a blank image */
       $bgc = imagecolorallocate ($im, 255, 255, 255);
       $tc = imagecolorallocate ($im, 0, 0, 0);
       imagefilledrectangle ($im, 0, 0, 300, 30, $bgc);
       /* Output an errmsg */
       imagestring ($im, 3, 0, 0, $text, $tc);
       header("Content-Type: image/png");
       Imagepng($im,'',300);
       ImageDestroy ($im);
       die();
}

function LoadGif ($imgname)
{
   if (($im = @imagecreatefromgif ($imgname)) === false) /* Attempt to open */
       ErrorImg($imgname);
   return $im;
}

function LoadJpeg($imgname)
{
   if (($im = @imagecreatefromjpeg($imgname)) === false) /* Attempt to open */
       ErrorImg($imgname);
   return $im;
}

function LoadPNG($imgname)
{
   if (($im = @imagecreatefrompng($imgname)) === false) /* Attempt to open */
       ErrorImg($imgname);
   return $im;
}

function is_animated($filename)
{
    $filecontents=file_get_contents($filename);
    $str_loc=0;
    $count=0;
    while ($count < 2) # There is no point in continuing after we find a 2nd frame
    {
        $where1=strpos($filecontents,"\x00\x21\xF9\x04",$str_loc);
        if ($where1 === FALSE) { break; }
        else
        {
               $str_loc=$where1+1;
               $where2=strpos($filecontents,"\x00\x2C",$str_loc);
               if ($where2 === FALSE)
               {
                    break;
               }
               else
               {
                    if ($where1+8 == $where2) { $count++; }
                    $str_loc=$where2+1;
               }
        }
    }

    if ($count > 1) { return true; }
    else { return false; }
}

function headers() {
    header('Pragma: no-cache');
    header('Expires: 0');
    header('Cache-Control: no-cache, no-store, private');
}

//Look for invalid crap
if (!isset($_GET['user']) || preg_match("/[^\w_\-]/i",$_GET['user'])) {
    die();
}

$user = (is_dir($sig_root . $_GET['user'] . '/')) ? $_GET['user'] : ErrorImg("User " . $_GET['user'] . " does not exist");
$dir = $sig_root.$user.'/';

// Open a known directory, and proceed to read its contents
if ($dh = opendir($dir)) {
   $i = 0;
   while (($file = readdir($dh)) !== false) {
       if($file != "." && $file != "..") {
           $files[$i] = $file;
           $i++;
       }
   }
   closedir($dh);
} else {
   ErrorImg("Failed to open directory " . $dir);
}

if($i >= 2) {
   $r = rand(0, $i-1);
} else {
   ErrorImg("You have " . $i . " images, you must have more");
}

$sub = substr ( $files[$r], strlen($files[$r])-3, 3 );
$image = $dir . $files[$r];

if($sub == "jpg" || $sub == "jpe") {
    $im = LoadJpeg($image);
    headers();
    header("Content-Type: image/jpg");
    imagejpeg($im);
} else if($sub == "gif") {
    //Check to see if its animated
    if (!is_animated($image)) {
        $im = LoadGif($image);
        headers();
        header("Content-Type: image/gif");
        imagegif($im);
    } else {
        headers();
        header("Content-Type: image/gif");
        echo readfile($image);
        die();
    }
} else if($sub == "png") {
    $im = LoadPNG($image);
    headers();
    header("Content-Type: image/png");
    imagepng($im);
} else if($sub == "fla" || $sub == 'swf') {
    headers();
    header("Content-Type: application/x-shockwave-flash");
    echo readfile($image);
    die();
} else {
    ErrorImg("Bad file found " . $sub);
}
ImageDestroy($im);
?>