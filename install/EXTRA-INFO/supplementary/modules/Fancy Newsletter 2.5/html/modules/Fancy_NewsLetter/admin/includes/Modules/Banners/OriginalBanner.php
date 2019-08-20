<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

class fnlOriginalBanner extends FancyNLBanners {
    function fnlOriginalBanner()
    {
        global $prefix, $nukeurl;

        $this->clickpath_prefix=$nukeurl."/index.php?op=ad_click&amp;";
        $this->name="PHP-Nuke Original Banner";

        // Default original PHP-Nuke fields
        $this->sql_col_id="bid";
        $this->sql_col_type="type";
        $this->sql_col_alttext="alttext";
        $this->sql_col_imageurl="imageurl";
        $this->sql_col_clickurl="clickurl";
        $this->sql_table_with_prefix=$prefix."_banner";
        $this->sql_where_conditions=array("active='1'");

        $this->col_value_type="0";
    }
}

?>