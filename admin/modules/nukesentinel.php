<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

global $admin_file, $prefix, $db, $admdata;
if(!defined('ADMIN_FILE')) { die("Illegal Access Detected!!"); }
if(defined("NUKESENTINEL_IS_LOADED")) $ab_config = abget_configs();
else $op = 'ABLoadError';
$nsnab_ver = "";
include("admin/modules/nukesentinel/functions.php");
$checktime = strtotime(date("Y-m-d", TIME()));
if($ab_config['version_check'] < $checktime) {
  $errno = 0;
  $errstr = $nsnab_ver_info = '';
  if ($fsock = @fsockopen('www.nukescripts.net', 80, $errno, $errstr, 10)) {
    @fputs($fsock, "GET /versions/nsnab.txt HTTP/1.1\r\n");
    @fputs($fsock, "HOST: www.nukescripts.net\r\n");
    @fputs($fsock, "Connection: close\r\n\r\n");
    $get_info = false;
    while (!@feof($fsock)) {
      if ($get_info) {
        $nsnab_ver_info = @fread($fsock, 1024);
      } else {
        if (@fgets($fsock, 1024) == "\r\n") {
          $get_info = true;
        }
      }
    }
    @fclose($fsock);
    absave_config('version_check', '$checktime');
    absave_config('version_newest', '$nsnab_ver_info');
  }
}

if ($nsnab_ver_info > $ab_config['version_number']) {
  $nsnab_ver = "<tr><td align='center' colspan='3'><strong>"._AB_NEWVER." - ".$nsnab_ver_info."</strong></td></tr>";
} else {
  $nsnab_ver = "<tr><td align='center' colspan='3'><strong><i>"._AB_CURVER."</i></strong></td></tr>";
}
$textrowcol = "rows='10' cols='60'";
if (is_mod_admin()) {
  switch ($op) {
    case 'ABAuthEdit':include('admin/modules/nukesentinel/ABAuthEdit.php');break;
    case 'ABAuthEditSave':include('admin/modules/nukesentinel/ABAuthEditSave.php');break;
    case 'ABAuthList':include('admin/modules/nukesentinel/ABAuthList.php');break;
    case 'ABAuthListScan':include('admin/modules/nukesentinel/ABAuthListScan.php');break;
    case 'ABAuthResend':include('admin/modules/nukesentinel/ABAuthResend.php');break;
    case 'ABBlockedIP':include('admin/modules/nukesentinel/ABBlockedIP.php');break;
    case 'ABBlockedIPAdd':include('admin/modules/nukesentinel/ABBlockedIPAdd.php');break;
    case 'ABBlockedIPAddSave':include('admin/modules/nukesentinel/ABBlockedIPAddSave.php');break;
    case 'ABBlockedIPClear':include('admin/modules/nukesentinel/ABBlockedIPClear.php');break;
    case 'ABBlockedIPClearExpired':include('admin/modules/nukesentinel/ABBlockedIPClearExpired.php');break;
    case 'ABBlockedIPClearSave':include('admin/modules/nukesentinel/ABBlockedIPClearSave.php');break;
    case 'ABBlockedIPDelete':include('admin/modules/nukesentinel/ABBlockedIPDelete.php');break;
    case 'ABBlockedIPDeleteSave':include('admin/modules/nukesentinel/ABBlockedIPDeleteSave.php');break;
    case 'ABBlockedIPEdit':include('admin/modules/nukesentinel/ABBlockedIPEdit.php');break;
    case 'ABBlockedIPEditSave':include('admin/modules/nukesentinel/ABBlockedIPEditSave.php');break;
    case 'ABBlockedIPMenu':include('admin/modules/nukesentinel/ABBlockedIPMenu.php');break;
    case 'ABBlockedIPView':include('admin/modules/nukesentinel/ABBlockedIPView.php');break;
    case 'ABBlockedOverlapCheck':include('admin/modules/nukesentinel/ABBlockedOverlapCheck.php');break;
    case 'ABBlockedRange':include('admin/modules/nukesentinel/ABBlockedRange.php');break;
    case 'ABBlockedRangeAdd':include('admin/modules/nukesentinel/ABBlockedRangeAdd.php');break;
    case 'ABBlockedRangeAddSave':include('admin/modules/nukesentinel/ABBlockedRangeAddSave.php');break;
    case 'ABBlockedRangeClear':include('admin/modules/nukesentinel/ABBlockedRangeClear.php');break;
    case 'ABBlockedRangeClearExpired':include('admin/modules/nukesentinel/ABBlockedRangeClearExpired.php');break;
    case 'ABBlockedRangeClearSave':include('admin/modules/nukesentinel/ABBlockedRangeClearSave.php');break;
    case 'ABBlockedRangeDelete':include('admin/modules/nukesentinel/ABBlockedRangeDelete.php');break;
    case 'ABBlockedRangeDeleteSave':include('admin/modules/nukesentinel/ABBlockedRangeDeleteSave.php');break;
    case 'ABBlockedRangeEdit':include('admin/modules/nukesentinel/ABBlockedRangeEdit.php');break;
    case 'ABBlockedRangeEditSave':include('admin/modules/nukesentinel/ABBlockedRangeEditSave.php');break;
    case 'ABBlockedRangeMenu':include('admin/modules/nukesentinel/ABBlockedRangeMenu.php');break;
    case 'ABBlockedRangeView':include('admin/modules/nukesentinel/ABBlockedRangeView.php');break;
    case 'ABCGIAuth':include('admin/modules/nukesentinel/ABCGIAuth.php');break;
    case 'ABCGIBuild':include('admin/modules/nukesentinel/ABCGIBuild.php');break;
    case 'ABConfig':include('admin/modules/nukesentinel/ABConfig.php');break;
    case 'ABConfigAdmin':include('admin/modules/nukesentinel/ABConfigAdmin.php');break;
    case 'ABConfigAuthor':include('admin/modules/nukesentinel/ABConfigAuthor.php');break;
    case 'ABConfigClike':include('admin/modules/nukesentinel/ABConfigClike.php');break;
    case 'ABConfigFilter':include('admin/modules/nukesentinel/ABConfigFilter.php');break;
    case 'ABConfigFlood':include('admin/modules/nukesentinel/ABConfigFlood.php');break;
    case 'ABConfigHarvester':include('admin/modules/nukesentinel/ABConfigHarvester.php');break;
    case 'ABConfigReferer':include('admin/modules/nukesentinel/ABConfigReferer.php');break;
    case 'ABConfigRequest':include('admin/modules/nukesentinel/ABConfigRequest.php');break;
    case 'ABConfigSave':include('admin/modules/nukesentinel/ABConfigSave.php');break;
    case 'ABConfigScript':include('admin/modules/nukesentinel/ABConfigScript.php');break;
    case 'ABConfigString':include('admin/modules/nukesentinel/ABConfigString.php');break;
    case 'ABConfigUnion':include('admin/modules/nukesentinel/ABConfigUnion.php');break;
    case 'ABConfigUpdate':include('admin/modules/nukesentinel/ABConfigUpdate.php');break;
    case 'ABCountryList':include('admin/modules/nukesentinel/ABCountryList.php');break;
    case 'ABDBMaintence':include('admin/modules/nukesentinel/ABDBMaintence.php');break;
    case 'ABDBOptimize':include('admin/modules/nukesentinel/ABDBOptimize.php');break;
    case 'ABDBRepair':include('admin/modules/nukesentinel/ABDBRepair.php');break;
    case 'ABDBStructure':include('admin/modules/nukesentinel/ABDBStructure.php');break;
    case 'ABExcludedAdd':include('admin/modules/nukesentinel/ABExcludedAdd.php');break;
    case 'ABExcludedAddSave':include('admin/modules/nukesentinel/ABExcludedAddSave.php');break;
    case 'ABExcludedClear':include('admin/modules/nukesentinel/ABExcludedClear.php');break;
    case 'ABExcludedClearSave':include('admin/modules/nukesentinel/ABExcludedClearSave.php');break;
    case 'ABExcludedDelete':include('admin/modules/nukesentinel/ABExcludedDelete.php');break;
    case 'ABExcludedDeleteSave':include('admin/modules/nukesentinel/ABExcludedDeleteSave.php');break;
    case 'ABExcludedEdit':include('admin/modules/nukesentinel/ABExcludedEdit.php');break;
    case 'ABExcludedEditSave':include('admin/modules/nukesentinel/ABExcludedEditSave.php');break;
    case 'ABExcludedList':include('admin/modules/nukesentinel/ABExcludedList.php');break;
    case 'ABExcludedMenu':include('admin/modules/nukesentinel/ABExcludedMenu.php');break;
    case 'ABExcludedOverlapCheck':include('admin/modules/nukesentinel/ABExcludedOverlapCheck.php');break;
    case 'ABExcludedView':include('admin/modules/nukesentinel/ABExcludedView.php');break;
    case 'ABImport':include('admin/modules/nukesentinel/ABImport.php');break;
    case 'ABImportBlockedRange':include('admin/modules/nukesentinel/ABImportBlockedRange.php');break;
    case 'ABImportIP2Country':include('admin/modules/nukesentinel/ABImportIP2Country.php');break;
    case 'ABIP2Country':include('admin/modules/nukesentinel/ABIP2Country.php');break;
    case 'ABIP2CountryAdd':include('admin/modules/nukesentinel/ABIP2CountryAdd.php');break;
    case 'ABIP2CountryAddSave':include('admin/modules/nukesentinel/ABIP2CountryAddSave.php');break;
    case 'ABIP2CountryDelete':include('admin/modules/nukesentinel/ABIP2CountryDelete.php');break;
    case 'ABIP2CountryDeleteSave':include('admin/modules/nukesentinel/ABIP2CountryDeleteSave.php');break;
    case 'ABIP2CountryEdit':include('admin/modules/nukesentinel/ABIP2CountryEdit.php');break;
    case 'ABIP2CountryEditSave':include('admin/modules/nukesentinel/ABIP2CountryEditSave.php');break;
    case 'ABIP2CountryList':include('admin/modules/nukesentinel/ABIP2CountryList.php');break;
    case 'ABIP2CountryOverlapCheck':include('admin/modules/nukesentinel/ABIP2CountryOverlapCheck.php');break;
    case 'ABIP2CountryUpdateBlocked':include('admin/modules/nukesentinel/ABIP2CountryUpdateBlocked.php');break;
    case 'ABIP2CountryUpdateBlockedRanges':include('admin/modules/nukesentinel/ABIP2CountryUpdateBlockedRanges.php');break;
    case 'ABIP2CountryUpdateExcludedRanges':include('admin/modules/nukesentinel/ABIP2CountryUpdateExcludedRanges.php');break;
    case 'ABIP2CountryUpdateProtectedRanges':include('admin/modules/nukesentinel/ABIP2CountryUpdateProtectedRanges.php');break;
    case 'ABIP2CountryUpdateTracked':include('admin/modules/nukesentinel/ABIP2CountryUpdateTracked.php');break;
    case 'ABLoadError':include('admin/modules/nukesentinel/ABLoadError.php');break;
    case 'ABMain':include('admin/modules/nukesentinel/ABMain.php');break;
    case 'ABMainSave':include('admin/modules/nukesentinel/ABMainSave.php');break;
    case 'ABPrintBlockedIP':include('admin/modules/nukesentinel/ABPrintBlockedIP.php');break;
    case 'ABPrintBlockedIPView':include('admin/modules/nukesentinel/ABPrintBlockedIPView.php');break;
    case 'ABPrintBlockedRange':include('admin/modules/nukesentinel/ABPrintBlockedRange.php');break;
    case 'ABPrintBlockedRangeView':include('admin/modules/nukesentinel/ABPrintBlockedRangeView.php');break;
    case 'ABPrintExcludedList':include('admin/modules/nukesentinel/ABPrintExcludedList.php');break;
    case 'ABPrintExcludedView':include('admin/modules/nukesentinel/ABPrintExcludedView.php');break;
    case 'ABPrintProtectedList':include('admin/modules/nukesentinel/ABPrintProtectedList.php');break;
    case 'ABPrintProtectedView':include('admin/modules/nukesentinel/ABPrintProtectedView.php');break;
    case 'ABPrintTracked':include('admin/modules/nukesentinel/ABPrintTracked.php');break;
    case 'ABPrintTrackedAgents':include('admin/modules/nukesentinel/ABPrintTrackedAgents.php');break;
    case 'ABPrintTrackedAgentsPages':include('admin/modules/nukesentinel/ABPrintTrackedAgentsPages.php');break;
    case 'ABPrintTrackedPages':include('admin/modules/nukesentinel/ABPrintTrackedPages.php');break;
    case 'ABPrintTrackedRefers':include('admin/modules/nukesentinel/ABPrintTrackedRefers.php');break;
    case 'ABPrintTrackedRefersPages':include('admin/modules/nukesentinel/ABPrintTrackedRefersPages.php');break;
    case 'ABPrintTrackedUsers':include('admin/modules/nukesentinel/ABPrintTrackedUsers.php');break;
    case 'ABPrintTrackedUsersPages':include('admin/modules/nukesentinel/ABPrintTrackedUsersPages.php');break;
    case 'ABProtectedAdd':include('admin/modules/nukesentinel/ABProtectedAdd.php');break;
    case 'ABProtectedAddSave':include('admin/modules/nukesentinel/ABProtectedAddSave.php');break;
    case 'ABProtectedClear':include('admin/modules/nukesentinel/ABProtectedClear.php');break;
    case 'ABProtectedClearSave':include('admin/modules/nukesentinel/ABProtectedClearSave.php');break;
    case 'ABProtectedDelete':include('admin/modules/nukesentinel/ABProtectedDelete.php');break;
    case 'ABProtectedDeleteSave':include('admin/modules/nukesentinel/ABProtectedDeleteSave.php');break;
    case 'ABProtectedEdit':include('admin/modules/nukesentinel/ABProtectedEdit.php');break;
    case 'ABProtectedEditSave':include('admin/modules/nukesentinel/ABProtectedEditSave.php');break;
    case 'ABProtectedList':include('admin/modules/nukesentinel/ABProtectedList.php');break;
    case 'ABProtectedMenu':include('admin/modules/nukesentinel/ABProtectedMenu.php');break;
    case 'ABProtectedOverlapCheck':include('admin/modules/nukesentinel/ABProtectedOverlapCheck.php');break;
    case 'ABProtectedView':include('admin/modules/nukesentinel/ABProtectedView.php');break;
    case 'ABSearch':include('admin/modules/nukesentinel/ABSearch.php');break;
    case 'ABSearchResults':include('admin/modules/nukesentinel/ABSearchResults.php');break;
    case 'ABSearchRangeResults':include('admin/modules/nukesentinel/ABSearchRangeResults.php');break;
    case 'ABTemplate':include('admin/modules/nukesentinel/ABTemplate.php');break;
    case 'ABTemplateSource':include('admin/modules/nukesentinel/ABTemplateSource.php');break;
    case 'ABTemplateView':include('admin/modules/nukesentinel/ABTemplateView.php');break;
    case 'ABTracked':include('admin/modules/nukesentinel/ABTracked.php');break;
    case 'ABTrackedAdd':include('admin/modules/nukesentinel/ABTrackedAdd.php');break;
    case 'ABTrackedAddSave':include('admin/modules/nukesentinel/ABTrackedAddSave.php');break;
    case 'ABTrackedAgents':include('admin/modules/nukesentinel/ABTrackedAgents.php');break;
    case 'ABTrackedAgentsDelete':include('admin/modules/nukesentinel/ABTrackedAgentsDelete.php');break;
    case 'ABTrackedAgentsIPs':include('admin/modules/nukesentinel/ABTrackedAgentsIPs.php');break;
    case 'ABTrackedAgentsListAdd':include('admin/modules/nukesentinel/ABTrackedAgentsListAdd.php');break;
    case 'ABTrackedAgentsPages':include('admin/modules/nukesentinel/ABTrackedAgentsPages.php');break;
    case 'ABTrackedClear':include('admin/modules/nukesentinel/ABTrackedClear.php');break;
    case 'ABTrackedClearSave':include('admin/modules/nukesentinel/ABTrackedClearSave.php');break;
    case 'ABTrackedDelete':include('admin/modules/nukesentinel/ABTrackedDelete.php');break;
    case 'ABTrackedDeleteSave':include('admin/modules/nukesentinel/ABTrackedDeleteSave.php');break;
    case 'ABTrackedDeleteUser':include('admin/modules/nukesentinel/ABTrackedDeleteUser.php');break;
    case 'ABTrackedDeleteUserIP':include('admin/modules/nukesentinel/ABTrackedDeleteUserIP.php');break;
    case 'ABTrackedMenu':include('admin/modules/nukesentinel/ABTrackedMenu.php');break;
    case 'ABTrackedPages':include('admin/modules/nukesentinel/ABTrackedPages.php');break;
    case 'ABTrackedRefers':include('admin/modules/nukesentinel/ABTrackedRefers.php');break;
    case 'ABTrackedRefersDelete':include('admin/modules/nukesentinel/ABTrackedRefersDelete.php');break;
    case 'ABTrackedRefersIPs':include('admin/modules/nukesentinel/ABTrackedRefersIPs.php');break;
    case 'ABTrackedRefersListAdd':include('admin/modules/nukesentinel/ABTrackedRefersListAdd.php');break;
    case 'ABTrackedRefersPages':include('admin/modules/nukesentinel/ABTrackedRefersPages.php');break;
    case 'ABTrackedUsers':include('admin/modules/nukesentinel/ABTrackedUsers.php');break;
    case 'ABTrackedUsersIPs':include('admin/modules/nukesentinel/ABTrackedUsersIPs.php');break;
    case 'ABTrackedUsersPages':include('admin/modules/nukesentinel/ABTrackedUsersPages.php');break;
  }
} else {
  echo "Access Denied";
}

?>