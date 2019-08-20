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

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

global $admin_file;
if(!defined('ADMIN_FILE')) { die('Illegal Access Detected!!'); }
switch($op) {
    case 'ABAuthEdit':
    case 'ABAuthEditSave':
    case 'ABAuthList':
    case 'ABAuthListScan':
    case 'ABAuthResend':
    case 'ABBlockedIP':
    case 'ABBlockedIPAdd':
    case 'ABBlockedIPAddSave':
    case 'ABBlockedIPClear':
    case 'ABBlockedIPClearExpired':
    case 'ABBlockedIPClearSave':
    case 'ABBlockedIPDelete':
    case 'ABBlockedIPDeleteSave':
    case 'ABBlockedIPEdit':
    case 'ABBlockedIPEditSave':
    case 'ABBlockedIPMenu':
    case 'ABBlockedIPView':
    case 'ABBlockedOverlapCheck':
    case 'ABBlockedRange':
    case 'ABBlockedRangeAdd':
    case 'ABBlockedRangeAddSave':
    case 'ABBlockedRangeClear':
    case 'ABBlockedRangeClearExpired':
    case 'ABBlockedRangeClearSave':
    case 'ABBlockedRangeDelete':
    case 'ABBlockedRangeDeleteSave':
    case 'ABBlockedRangeEdit':
    case 'ABBlockedRangeEditSave':
    case 'ABBlockedRangeMenu':
    case 'ABBlockedRangeView':
    case 'ABCGIAuth':
    case 'ABCGIBuild':
    case 'ABConfig':
    case 'ABConfigAdmin':
    case 'ABConfigAuthor':
    case 'ABConfigClike':
    case 'ABConfigFilter':
    case 'ABConfigFlood':
    case 'ABConfigHarvester':
    case 'ABConfigReferer':
    case 'ABConfigRequest':
    case 'ABConfigSave':
    case 'ABConfigScript':
    case 'ABConfigString':
    case 'ABConfigUnion':
    case 'ABConfigUpdate':
    case 'ABCountryList':
    case 'ABDBMaintence':
    case 'ABDBOptimize':
    case 'ABDBRepair':
    case 'ABDBStructure':
    case 'ABExcludedAdd':
    case 'ABExcludedAddSave':
    case 'ABExcludedClear':
    case 'ABExcludedClearSave':
    case 'ABExcludedDelete':
    case 'ABExcludedDeleteSave':
    case 'ABExcludedEdit':
    case 'ABExcludedEditSave':
    case 'ABExcludedList':
    case 'ABExcludedMenu':
    case 'ABExcludedOverlapCheck':
    case 'ABExcludedView':
    case 'ABImport':
    case 'ABImportBlockedRange':
    case 'ABImportIP2Country':
    case 'ABIP2Country':
    case 'ABIP2CountryAdd':
    case 'ABIP2CountryAddSave':
    case 'ABIP2CountryDelete':
    case 'ABIP2CountryDeleteSave':
    case 'ABIP2CountryEdit':
    case 'ABIP2CountryEditSave':
    case 'ABIP2CountryList':
    case 'ABIP2CountryOverlapCheck':
    case 'ABIP2CountryUpdateBlocked':
    case 'ABIP2CountryUpdateBlockedRanges':
    case 'ABIP2CountryUpdateExcludedRanges':
    case 'ABIP2CountryUpdateProtectedRanges':
    case 'ABIP2CountryUpdateTracked':
    case 'ABLoadError':
    case 'ABMain':
    case 'ABMainSave':
    case 'ABPrintBlockedIP':
    case 'ABPrintBlockedIPView':
    case 'ABPrintBlockedRange':
    case 'ABPrintBlockedRangeView':
    case 'ABPrintExcludedList':
    case 'ABPrintExcludedView':
    case 'ABPrintProtectedList':
    case 'ABPrintProtectedView':
    case 'ABPrintTracked':
    case 'ABPrintTrackedAgents':
    case 'ABPrintTrackedAgentsPages':
    case 'ABPrintTrackedPages':
    case 'ABPrintTrackedRefers':
    case 'ABPrintTrackedRefersPages':
    case 'ABPrintTrackedUsers':
    case 'ABPrintTrackedUsersPages':
    case 'ABProtectedAdd':
    case 'ABProtectedAddSave':
    case 'ABProtectedClear':
    case 'ABProtectedClearSave':
    case 'ABProtectedDelete':
    case 'ABProtectedDeleteSave':
    case 'ABProtectedEdit':
    case 'ABProtectedEditSave':
    case 'ABProtectedList':
    case 'ABProtectedMenu':
    case 'ABProtectedOverlapCheck':
    case 'ABProtectedView':
    case 'ABSearch':
    case 'ABSearchResults':
    case 'ABSearchRangeResults':
    case 'ABTemplate':
    case 'ABTemplateSource':
    case 'ABTemplateView':
    case 'ABTracked':
    case 'ABTrackedAdd':
    case 'ABTrackedAddSave':
    case 'ABTrackedAgents':
    case 'ABTrackedAgentsDelete':
    case 'ABTrackedAgentsIPs':
    case 'ABTrackedAgentsListAdd':
    case 'ABTrackedAgentsPages':
    case 'ABTrackedClear':
    case 'ABTrackedClearSave':
    case 'ABTrackedDelete':
    case 'ABTrackedDeleteSave':
    case 'ABTrackedDeleteUser':
    case 'ABTrackedDeleteUserIP':
    case 'ABTrackedMenu':
    case 'ABTrackedPages':
    case 'ABTrackedRefers':
    case 'ABTrackedRefersDelete':
    case 'ABTrackedRefersIPs':
    case 'ABTrackedRefersListAdd':
    case 'ABTrackedRefersPages':
    case 'ABTrackedUsers':
    case 'ABTrackedUsersIPs':
    case 'ABTrackedUsersPages':
        include(NUKE_ADMIN_MODULE_DIR.'nukesentinel.php');
    break;
}
?>