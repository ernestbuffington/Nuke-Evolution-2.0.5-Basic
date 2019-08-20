<?php

# WARNING: DECODING UTF-8 MAY CAUSE PROBLEMS, THEN USE THE FUNCTION utf8_decode INSTEAD OF iconv!

#
# CONFIG
#
// Modify to what dir you want to encode the files off
// Example: themes/chromo/forums
$path = 'modules/coppermine/themes/maze';

// Encode from... default ISO-8859-1
$in = 'ISO-8859-1';

// Encode to... default UTF-8
$out = 'UTF-8';

#
# FUNCTIONS
# DO NOT TOUCH
#
// converts a file to utf-8
function encode_file($in, $out, $file) {

    # get file contents
    $content = file_get_contents($file);

    # now convert contents to new charset
    $content = iconv($in, $out, $content);

    # change permissions if needed
    if(!is_writable($file)) {
        chmod($file, 0777);
    }
    
    # put back to file
    $return = (file_put_contents($file, $content)) ? true : false;

    chmod($file, 0666);
    
    # return status
    return $return;

}

function convert_all($in, $out, $path) {
    $handle = opendir($path);
    while(false !== ($file = readdir($handle))) {
        if(is_file($path.'/'.$file) && substr(mime_content_type($path.'/'.$file), 0, 5) == 'text/') {
            if(encode_file($in, $out, $path.'/'.$file)) {
                echo $path.'/'.$file.' was '.$out.' encoded<br />';
            } else {
                echo 'failed encoding '.$path.'/'.$file.' to '.$out.'<br />';
            }
        }
    }
    closedir($handle);
}

if(!function_exists("mime_content_type")){
	function mime_content_type($filename){

		$filename = basename($filename);

		$mime[".zip"] = "application/x-zip-compressed";
		$mime[".gif"] = "image/gif";
		$mime[".png"] = "image/x-png";
		$mime[".jpg"] = "image/jpeg";
		$mime[".jpeg"] = "image/jpeg";
		$mime[".tif"] = "image/tiff";
		$mime[".tiff"] = "image/tiff";
		$mime[".pdf"] = "application/pdf";
		$mime[".hqx"] = "application/mac-binhex40";
		$mime[".doc"] = "application/msword";
		$mime[".dot"] = "application/msword";
		$mime[".exe"] = "application/octet-stream";
		$mime[".au"] = "audio/basic";
		$mime[".snd"] = "audio/basic";
		$mime[".mid"] = "audio/mid";
		$mime[".mp3"] = "audio/mpeg";
		$mime[".aif"] = "audio/x-aiff";
		$mime[".ra"] = "audio/x-pn-realaudio";
		$mime[".ram"] = "audio/x-pn-realaudio";
		$mime[".wav"] = "audio/x-wav";
		$mime[".bmp"] = "image/bmp";
		$mime[".ra"] = "audio/x-pn-realaudio";
		$mime[".htm"] = "text/html";
		$mime[".html"] = "text/html";
		$mime[".css"] = "text/css";
		$mime[".txt"] = "text/plain";
		$mime[".mov"] = "video/quicktime";
		$mime[".mpg"] = "video/mpeg";
		$mime[".asx"] = "video/x-ms-asf";
		$mime[".avi"] = "video/x-msvideo";

		$ext = strrchr($filename, '.');
		return $mime[$ext];
	}
}

if(!function_exists('file_get_contents')) {
    function file_get_contents($filename, $use_include_path = 0) {
        $file = @fopen($filename, 'rb', $use_include_path);
        $data = '';
        if ($file) {
            while (!feof($file)) $data .= fread($file, 1024);
            @fclose($file);
        }
        return $data;
    }
}

if(!function_exists('iconv')) {
    function iconv($in, $out, $content) {
        return ($in == 'ISO-8859-1' && $out == 'UTF-8') ? utf8_encode($content) : $content;
    }
}

if (!function_exists('file_put_contents')) {
	function file_put_contents($filename, $data) {
		if (($h = @fopen($filename, 'w+')) === false) {
			return false;
		}
		if (($bytes = @fwrite($h, $data)) === false) {
			return false;
		}
		fclose($h);
		return $bytes;
	}
}

$path = dirname(__FILE__).'/'.$path;
convert_all($in, $out, $path);

?>