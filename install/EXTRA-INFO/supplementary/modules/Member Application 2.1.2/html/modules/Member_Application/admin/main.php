<?php
/***************************************************************************
*                             Member Application
*                            -------------------
*   begin                : 13 Nov, 2005
*   copyright            : (C) 2005, 2006 Tim Leitz DrivenByFaith
*   email                : tim@drivenbyfaith.org
*
*   Id: memberapplication v 2.1.2 Tim Leitz
*   Primary Function    :   display admin menu for MA
*	  run from			      :	  admin/index.php
*   file name           :   admin/main.php
*
***************************************************************************/
/***************************************************************************
*
*   This program is subject to the license agreement in the user manual.
*-16A
***************************************************************************/

if ( !defined('ADMIN_FILE') )
{
  die ("Access Denied");
}

echo "<script language=\"javascript\" type=\"\">"
."function updFormNo(){"
."  adminurl = '".$admin_file."';"
."  formnoval = document.mainnav.formno.value;"
."  if (formnoval<0)"
."  {"
."    formurl = adminurl + \".php?op=MAnewform&formno=-1\";"
."  }"
."  else"
."  {"
."    formurl = adminurl + \".php?op=MAsetup&formno=\" + formnoval;"
."  }"
."  window.location = formurl;"
."}"
."</script>";

$sqlform = "SELECT * FROM `".$prefix."_MA_mapcfg`";
if ( !($resultform = $db->sql_query($sqlform)) )
{
  echo "ERROR - 16A1 - ".MA_UATOCTERROR."! <br>";
  CloseTable();
  include("footer.php");
  exit();   
}

$rowform = $db->sql_fetchrow($resultform);

//create form here for this menu.  include return to site admin.
echo "<form id=\"mainnav\" name=\"mainnav\">";

echo "  <div align=\"center\">";
echo "<table align='center' cellpadding='2' cellspacing='8'>";
echo "  <tr>";

echo "  <td align='center'>";
echo "    <a href='".$admin_file.".php?op=MAsetup&formno=".$formno."' ><img src='modules/Member_Application/images/formsetup.png'></a><BR>";
echo "<a href='".$admin_file.".php?op=MAsetup&formno=".$formno."'>".MA_FORMSETUP."</a>";
echo "</td>";

echo "  <td align='center'>";
echo "    <a href='".$admin_file.".php?op=MAapplist&formno=".$formno."'><img src='modules/Member_Application/images/applist.png'></a><br>";
echo "    <a href='".$admin_file.".php?op=MAapplist&formno=".$formno."'>".MA_APPLIST."</a>";
echo "</td>";

echo "  <td align='center'>";
echo "    <a href='".$admin_file.".php?op=MAlistpq&formno=".$formno."'><img src='modules/Member_Application/images/qlist.png'></a><br>";
echo "    <a href='".$admin_file.".php?op=MAlistpq&formno=".$formno."'>".MA_QUESTIONLIST."</a>";
echo "</td>";

echo "  <td align='center'>";
echo "<img src='modules/Member_Application/images/chgform.png'><br>";
echo "    <SELECT ID=\"formno\" NAME=\"formno\" onchange='updFormNo();'>";
if (!$rowform) 
{
  echo "    <OPTION selected VALUE=\"-1\">".MA_NFOFTXT."";
  echo "    <OPTION VALUE=\"-1\">".MA_CFFTXT."";
}
else
{
  echo "    <OPTION VALUE=\"-1\">".MA_CNFTXT."";
  do
  {
  if ($rowform['formno']==$formno)
	  {
	    echo "  <OPTION selected VALUE=\"".$rowform['formno']."\">".$rowform['formtitle'];
	  }
	  else
	  {
	    echo "  <OPTION VALUE=\"".$rowform['formno']."\">".$rowform['formtitle'];
	  }
  } while ($rowform = $db->sql_fetchrow($resultform));
}  
echo "    </SELECT>";
echo "</td>";

echo "  <td align='center'>";
echo "    <a href=\"".$nukeurl."/modules.php?name=Member_Application&appno=".$row1['formno']."\" target=\"_blank\"><img src ='modules/Member_Application/images/viewform.png'></a><BR>";
echo "    <a href=\"".$nukeurl."/modules.php?name=Member_Application&appno=".$row1['formno']."\" target=\"_blank\">".MA_VIEWFORM."</a>";
echo "</td>";

echo "  <td align='center'>";
echo "    <a href=\"".$admin_file.".php\"><img src='modules/Member_Application/images/admin.png'></a><BR>";
echo "    <a href=\"".$admin_file.".php\">".MA_MAINADMINISTRATION."</a>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "  </div>";
echo "</form>";

CloseTable();

echo "<br>";

OpenTable();

echo "<table align='center' width='100%'>\n";

?>
