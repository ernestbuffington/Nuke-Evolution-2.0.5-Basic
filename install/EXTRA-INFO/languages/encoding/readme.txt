When you want to encode your files to any other format, 
then open encoder.php with a text editor like notepad or any other text editor,
and modify the $path variable to the dir you want to encode the files of.

You need to place the encoder.php file in the root of your site (in the same dir as config.php),
and then use the complete path to the dir.

Example:
You want to modify the forum template files of your theme. Your theme is located here:
"themes/YOUR_THEME/". Then we pick the $path variable in encoder.php and fill in the whole path:
"themes/YOUR_THEME/forums/" (this is the dir of the forum template files). Now it will convert all the files
in that folder. 

It will only modify the files within the dir, not the files within the subdirs.

DO NOT ENCODE MORE THAN ONCE! THIS WILL SCREW UP YOUR FILES!

If you have issues with most likely _DECODING_ from UTF-8, then change the iconv() function to utf8_decode
So this:

    # now convert contents to new charset
    $content = iconv($in, $out, $content);

Will become this:

    # now convert contents to new charset
    $content = utf8_decode($content);

If there are any questions, please ask them in the forums so that we can add them to this file :)