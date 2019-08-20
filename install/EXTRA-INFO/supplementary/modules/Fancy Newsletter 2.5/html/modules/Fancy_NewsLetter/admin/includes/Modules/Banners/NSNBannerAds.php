<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

class fnlNSNBannerAds extends FancyNLBanners {
    function fnlNSNBannerAds()
    {
        global $prefix, $nukeurl;

        $this->clickpath_prefix=$nukeurl."/clicksba.php?"; // Taken from NSN Banner Ads 1.3
        $this->name="NSN Banner Ads";

        // Default original PHP-Nuke fields
        $this->sql_col_id="bid";
        $this->sql_col_type=null;
        $this->sql_col_alttext="alttext";
        $this->sql_col_imageurl="imageurl";
        $this->sql_col_clickurl="clickurl";
        $this->sql_table_with_prefix=$prefix."_nsnba_banners";
        $this->sql_where_conditions=array("active='1'");

        $this->col_value_type=null;
    }
}

?>