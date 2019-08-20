<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
//this file is FROM lorkan.com's News and Story Archive 
//mods made by metopen.com for MetOpen Home Page

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/11/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

require_once("mainfile.php");
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

if(!isset($sid)) {
    exit();
}
 
function PrintPage($sid) {
    global $site_logo, $nukeurl, $sitename, $datetime, $prefix, $db, $module_name;
    $result = $db->sql_query("SELECT title, time, hometext, bodytext, topic, notes FROM ".$prefix."_stories WHERE sid='$sid'");
    list($title, $time, $hometext, $bodytext, $topic, $notes) = $db->sql_fetchrow($result);
    $result2 = $db->sql_query("SELECT topictext FROM ".$prefix."_topics WHERE topicid='$topic'");
    list($topictext) = $db->sql_fetchrow($result2);
    formatTimestamp($time);
    $datetime = formatTimestamp($datetime);
    $html = "<br /><br /><br />"._PDATE." ".$time."    "._PTOPIC." ".$topictext."<br /><br /><strong>".$title."</strong><br /><br />".$hometext."<br />";
    if ( !empty($bodytext) ) {
       $html .= $bodytext."<br /><br />";
    }
    $html .= "<br /><br /><br />"._COMESFROM." ".$sitename.":<br /><br /><a href=\"$nukeurl\">".$nukeurl."</a><br /><br />"._THEURL."<br /><br /><a href=\"$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid\">$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid</a> ";
    $pdftitle = "$title";
    $pdfauthor = "http://www.lorkan.com";
    $pdfdescription = "$hometext";

    $pdftitle = "$title";
    define("FPDF_FONTPATH","class/fpdf/font/");
    require_once(NUKE_BASE_DIR.'class/fpdf/fpdf.php');

class PDF extends FPDF
{
var $B;
var $I;
var $U;
var $HREF;

function PDF($orientation='P',$unit='mm',$format='A4')
{
    //Call parent constructor
    $this->FPDF($orientation,$unit,$format);
    //Initialization
    $this->B=0;
    $this->I=0;
    $this->U=0;
    $this->HREF='';
}

function WriteHTML($html)
{
    //HTML parser
    $html=str_replace("\n",' ',$html);
    $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            //Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            //Tag
            if($e{0}=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                //Extract properties
                $a2=split(' ',$e);
                $tag=strtoupper(array_shift($a2));
                $prop=array();
                foreach($a2 as $v)
                    if(ereg('^([^=]*)=["\']?([^"\']*)["\']?$',$v,$a3))
                        $prop[strtoupper($a3[1])]=$a3[2];
                $this->OpenTag($tag,$prop);
            }
        }
    }
}

function OpenTag($tag,$prop)
{
    //Opening tag
    if($tag=='B' or $tag=='I' or $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF=$prop['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    //Closing tag
    if($tag=='B' or $tag=='I' or $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF='';
}

function SetStyle($tag,$enable)
{
    //Modify style and SELECT corresponding font
    $this->$tag+=($enable ? 1 : -1);
    $style='';
    foreach(array('B','I','U') as $s)
        if($this->$s>0)
            $style.=$s;
    $this->SetFont('',$style);
}

function PutLink($URL,$txt)
{
    //Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
// ekke 19.07.2002

/** function Header()
{
    global $pdftitle;
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Calculate width of pdftitle and position
    $w=$this->GetStringWidth($pdftitle)+6;
    $this->SetX((210-$w)/2);
    //Colors of frame, background and text
    $this->SetDrawColor(0,0,0);
    $this->SetFillColor(182,251,251);
    $this->SetTextColor(0,0,0);
    //Thickness of frame (0.2 mm)
    $this->SetLineWidth(0.2);
    //pdftitle
    $this->Cell($w,9,$pdftitle,1,1,'C',1);
    //Line break
    $this->Ln(10);
}
*/
function Footer()
{
$printpdfdate = date("d.m.Y");
$printpdfhour = date("H.i");

    //Position at 1.5 cm FROM bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',10);
    //Text color in gray
    $this->SetTextColor(128);
    //Page number
    $this->Cell(0,10,_PAGE.$this->PageNo() ._PRINTEDON.$printpdfdate._PRINTTIME.$printpdfhour.' .' ,0,0,'C');
}
/**
function Chapterpdftitle($num,$label)
{
    //Arial 12
    $this->SetFont('Arial','',12);
    //Background color
    $this->SetFillColor(200,220,255);
    //pdftitle
    $this->Cell(0,6,"Artikel Nr. $num : $label",0,1,'L',1);
    //Line break
    $this->Ln(4);
}

function ChapterBody($pdffile)
{
$txt = $pdffile ;
    //Times 12
    $this->SetFont('Times','',12);
    //Output justified text
    $this->MultiCell(0,5,$txt);
    //Line break
    $this->Ln();
    //Mention in italics
    $this->SetFont('','I');
    $this->Cell(0,5,"Internet");
}

function PrintChapter($num,$pdftitle,$pdffile)
{
    $this->AddPage();
    $this->Chapterpdftitle($num,$pdftitle);
    $this->ChapterBody($pdffile);
}

//Page header aus tut 2 geändert
function PrintImage()
{
$this->AddPage();
    //Logo
    $this->Image('tutorial/logo_pb.png',10,8,33);
    //Arial bold 15
    // $this->SetFont('Arial','B',15);
    //Move to the right
    // $this->Cell(80);
    //Title
    // $this->Cell(30,10,'Title',1,0,'C');
    //Line break
    // $this->Ln(20);
}
*/
/**
$printpdfdate = date('d.m.Y');
$printpdfhour = date ('H.i');
$printpdfurl = ($nuke_url."/modules.php?name=News&amp;file=print&amp;sid".$sid) ;
$lalala = ( $hometext . $bodytext);
$pdf=new PDF();
$pdf->Open();
$pdftitle= $sitename ;
$pdf->Settitle($pdftitle);
$pdf->SetAuthor('autor hier');
$pdf->PrintImage();
// For text:
$pdf->PrintChapter($sid,$title,$lalala);
$pdf->Output();
*/
// ekke ende
}

$pdf=new PDF();
$pdf->Open();
$pdf->SetTitle($pdftitle);
$pdf->SetAuthor($pdfauthor);
$pdf->SetMargins(25,40);
//First page
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
// $pdf->Write(5,'To discover what\'s new in this tutorial, click ');
// $pdf->SetFont('','U');
$link=$pdf->AddLink();
// $pdf->Write(5,'here',$link);
// $pdf->SetFont('');
//Second page
// $pdf->AddPage();
$pdf->SetLink($link);
if (_PDFIMAGE > "")
    $pdf->Image(_PDFIMAGE,25,25,100,0,'',$nukeurl);
//$pdf->SetTopMargin(400);
//$pdf->SetLeftMargin(25);
$pdf->SetFontSize(14);
$pdf->WriteHTML($html.$pdfimage);
$pdf->AliasNbPages();
$pdf->Output();
}
PrintPage($sid);

?>