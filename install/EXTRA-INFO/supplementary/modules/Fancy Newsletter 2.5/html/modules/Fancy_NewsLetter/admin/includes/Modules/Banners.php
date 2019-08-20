<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

class FancyNLBanners {
    var $name;                // Name of this module extension for Banners management in newsletters
    var $clickpath_prefix;    // URL prefix to construct full URL path when clicking on the banner

    var $sql_col_id;        // Banner ID column name
    var $sql_col_type;        // Banner type column name to generate, if not of this type, the html code will not be construct
    var $sql_col_alttext;    // Banner Alternative text column name
    var $sql_col_imageurl;    // Banner Image URL, if empty, the html code will not be generated
    var $sql_col_clickurl;    // Banner click url, create a href on the banner to open a browser when clicking on the picture

    var $sql_table_with_prefix;    // Full Banner table name
    var $sql_where_conditions;    // Add more specific conditions when searching banners in the database

    var $col_value_type;    // Attended value of the $sql_col_type column to generate the html code

    function FancyNLBanners()
    {
        global $prefix, $nukeurl;

        $this->clickpath_prefix=$nukeurl."/index.php?op=ad_click&amp;";
        $this->name="Banners Base Class";

        // Default original PHP-Nuke fields
        $this->sql_col_id="bid";
        $this->sql_col_type=null;
        $this->sql_col_alttext="alttext";
        $this->sql_col_imageurl="imageurl";
        $this->sql_col_clickurl="clickurl";
        $this->sql_table_with_prefix=$prefix."_banner";
        $this->sql_where_conditions=array("active='1'");

        $this->col_value_type=null;
    }

    function getname() // Return the name of this module
    {
        return $this->name;
    }

    function useme() // Returns true if this module is to be used 
    {
        if ($this->databaseexists()==true) return true;
        return false;
    }

    function databaseexists() // Returns true if the database for this module is installed
    {
        global $db;
        if($db->sql_fetchrow($db->sql_query("show tables like '".$this->sql_table_with_prefix."'")))  return true;
        return false;
    }

    function construct_doquery_where($id="")
    {
        global $db;
        
        $where=null;

        if($this->sql_table_with_prefix!=null && $this->sql_table_with_prefix!="")
        {
            // Construct the search condition if needed
            unset($cols); $where="";    
            if(is_array($this->sql_where_conditions)) $cols=$this->sql_where_conditions;
            if($id!=null && $id!="") $cols[]=$this->sql_col_id."='".$id."'";
            if($this->sql_col_type!=null && $this->sql_col_type!="") $cols[]=$this->sql_col_type."='".$this->col_value_type."'";
            if(is_array($cols))
            {
                foreach($cols as $col)
                {
                    if($where!="" && $col!="") $where.=" AND ";
                    $where.=$col;
                }
            }
        }
        return $where;
    }
    function construct_doquery_fields($id="")
    {
        global $db;
        
        $fields=null;
        if($this->sql_table_with_prefix!=null && $this->sql_table_with_prefix!="")
        {
            // Create the string of fields to retrieve
            $fields="";    $cols = array($this->sql_col_id,$this->sql_col_type,$this->sql_col_alttext,$this->sql_col_imageurl,$this->sql_col_clickurl);
            foreach($cols as $col)
            {
                if($fields!="" && $col!="") $fields.=",";
                $fields.=$col;
            }

            if($fields==null || $fields=="") $fields="*";
        }
        return $fields;
    }
    
    function getrandombanner()
    {
        global $db;
        
        $randombanner=null;

        if($this->sql_col_imageurl==null || $this->sql_col_imageurl=="" || $this->sql_col_id==null || $this->sql_col_id=="") return null;
        
        if($this->sql_table_with_prefix!=null && $this->sql_table_with_prefix!="")
        {
            
            $numrows=0;
            $where=$this->construct_doquery_where($id);

            $sql="SELECT COUNT(*) AS total FROM ".$this->sql_table_with_prefix.
                ((($where!=null) && $where!="")?(" WHERE (".$where.")"):"");
            $results=$db->sql_query($sql);
            if($results!=null)
            {
                if ( $total = $db->sql_fetchrow($results) )    $numrows = $total['total'];
                $db->sql_freeresult($results);
            }

            if ($numrows>1) 
            {
                $numrows = $numrows-1;
                mt_srand((double)microtime()*1000000);
                $bannum = mt_rand(0, $numrows);
            } else 
            {
                $bannum = 0;
            }

            $fields=$this->construct_doquery_fields();
            $sql="SELECT ".$fields." FROM ".$this->sql_table_with_prefix.
                ((($where!=null) && $where!="")?(" WHERE (".$where.")"):"")." LIMIT $bannum,1";
            $results=$db->sql_query($sql);
            if($results!=null)
            {
                if ( $total = $db->sql_fetchrow($results) )    $randombanner = $total[$this->sql_col_id];
                $db->sql_freeresult($results);
            }
        }

        return $randombanner;
    }

    function doquery($id="")
    {
        global $db;
        
        $sql=null;

        if($this->sql_col_imageurl==null || $this->sql_col_imageurl=="") return null;

        if($this->sql_table_with_prefix!=null && $this->sql_table_with_prefix!="")
        {
            
            $fields=$this->construct_doquery_fields($id);
            $where=$this->construct_doquery_where($id);

            $sql="SELECT ".$fields." FROM ".$this->sql_table_with_prefix.
                ((($where!=null) && $where!="")?(" WHERE (".$where.")"):"");
        }
        if(!$sql || $sql=="") return null;

        return $db->sql_query($sql);
    }

    function getresult($results)
    {
        global $db;
        return $db->sql_fetchrow($results);
    }

    function formatclickurl($result)
    {
        if(
            $this->sql_col_clickurl==null || $this->sql_col_clickurl=="" 
                || 
            $this->sql_col_id==null || $this->sql_col_id==""
                ||
            $result[$this->sql_col_id]==null || $result[$this->sql_col_id]==""
        ) return null;
        return($this->clickpath_prefix."bid=".$result[$this->sql_col_id]);
    }

    function formatresult($result) // Format a result to be displayed in the module
    {
        $text=null;
        // Only if a link & if a type condition exist, must be true!
        if
        (
            ($result[$this->sql_col_imageurl]!=null && $result[$this->sql_col_imageurl]!="")
                && 
            ($this->sql_col_type==null || ($result[$this->sql_col_type]==$this->col_value_type))
        ) 
        {
            $text="<img border=0 src=\"".$result[$this->sql_col_imageurl]."\" alt=\"";
            $text.=(($this->sql_col_alttext!=null && $this->sql_col_alttext!="" && $result[$this->sql_col_alttext]!=null)?$result[$this->sql_col_alttext]:"");
            $text.="\" title=\"";
            $text.=(($this->sql_col_alttext!=null && $this->sql_col_alttext!="" && $result[$this->sql_col_alttext]!=null)?$result[$this->sql_col_alttext]:"");
            $text.="\">";
        }
        return $text;
    }

    function free($results)
    {
         global $db;
         $db->sql_freeresult($results);
    }
}

?>