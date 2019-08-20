<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

class fnlBannerExchange22a extends FancyNLBanners {
    function fnlBannerExchange22a()
    {
        global $nukeurl;
        $this->clickpath_prefix=$nukeurl."/banners/banners.php?op=click&amp;"; // Example taken from BannerExchange2.2a
        $this->name="Banner Exchange 2.2a";

        // Default original PHP-Nuke fields
        $this->sql_col_id="bid";
        $this->sql_col_type=null;
        $this->sql_col_alttext="alttext";
        $this->sql_col_imageurl="imageurl";
        $this->sql_col_clickurl="clickurl";
        $this->sql_table_with_prefix="banner_exchange";
        $this->sql_where_conditions=array("active='1'");

        $this->col_value_type=null;
    }
}

?>