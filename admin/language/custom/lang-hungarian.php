<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Admin Icon/Link Pos                      v1.0.0       06/15/2005
      Advanced Error Reporting                 v1.0.0       08/22/2005
      Theme Management                         v1.0.2       12/16/2005
-=[Module]=-
      Supporters                               v1.3.0       07/14/2005
-=[Mod]=-
      Admin Tracker                            v1.0.1       06/08/2005
      Evolution Version Checker                v1.0.0       06/16/2005
      Who is Online                            v0.9.1       06/24/2005
      Queries Count                            v2.0.1       08/21/2005
      Custom Referers Mod                      v1.0.0       08/25/2005
      Admin Welcome Message                    v1.1.0       08/27/2005
      Hide Blocks                              v1.0.0       08/29/2005
      Censor                                   v1.0.0       10/20/2005
      Cache                                    v1.0.2       11/15/2005
      Admin IP Lock                            v2.0.1       11/17/2005
      Advanced Security Code Control           v1.0.0       12/17/2005
-=[Other]=-
      URL Check                                v1.0.0       07/01/2005
      Security Status                          v1.0.0       11/01/2005
      Meta Tags                                v1.0.0       11/20/2005
      Custom Text Area                         v1.0.0       11/23/2005
      Database Manager                         v2.0.0       12/17/2005
************************************************************************/

/*    Please put all your custom language or translations here     */

/*****[BEGIN]******************************************
 [ Base:    Admin Icon/Link Pos                v1.0.0 ]
 ******************************************************/
define("_ADMINPOS", "Admin állapot");
define("_UP", "Fel");
define("_DOWN", "Le");
define("_ADMIN_POS","Jó az icons/links:");
/*****[END]********************************************
 [ Base:    Admin Icon/Link Pos                v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Queries Count                       v2.0.1 ]
 ******************************************************/
define("_QUERIESCOUNT", "Számítások?");
/*****[END]********************************************
 [ Mod:    Queries Count                       v2.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Admin Welcome Message               v1.1.0 ]
 ******************************************************/
define("_ADMINWELCOME", "Üdvözöllek %s!");
define("_ADMINWELCOME2", "Üdvözöllek az adminisztrációban<br />Nem felejtettél el semmit?");
/*****[END]********************************************
 [ Mod:    Admin Welcome Message               v1.1.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:  Extended Surveys Admin Interface      v1.0.0 ]
 ******************************************************/
define("_POLLADMIN", "Kérdések Adminisztrálása");
define("_POLLMAIN", "Kérdések Adminisztráció");
define("_SURVEYSADMIN", "Kérdések");
define("_POLLCHOOSE", "Üdvözöllek a Kérdések Adminisztrálásában<br />Nem felejtettél el semmit?");
define("_ADDPOLL", "Szavazás hozzáadása");
define("_CHANGEPOLL", "Szavazás modósítása");
define("_DELETEPOLL", "Szavazás törlése");
define("_POLL_OPTIONS", "Extra Választás");
define("_POLL_INFO", "Szavazás blokk megváltoztatása");
define("_POLLDAYS", "Szám, ameddig a szavazás tart");
define("_POLLRANDOM", "Véletlen szavazás mutatása");
/*****[END]********************************************
 [ Mod:  Extended Surveys Admin Interface      v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Admin Tracker                      v1.0.1 ]
 ******************************************************/
define("_ADMIN_LOG","Biztonsági nyomkövetõ ");
define("_ADMIN_LOG_EXPLAIN1","Biztonsági nyomkövetõ napló");
define("_ADMIN_LOG_EXPLAIN2","- Admin belépés figyelõ<br />- Hibás admin belépés<br />- Intruder Alert<br />- MySQL hiba");
define("_ADMIN_LOG_CHG","<b>Admin nyomkövetõ napló <b>itt</b> megváltozott</b>");
define("_ADMIN_LOG_FINE","Admin nyomkövetõ napló nem változozz");
define("_ADMIN_LOG_CHECKED","Utolsó verzió ellenörzése");
define("_ADMIN_LOG_VIEW","napló megnézése");
define("_ADMIN_LOG_ACK","Nyugzáz");

define("_ERROR_LOG_CHG","<b>A hibanapló <b>itt</b> megváltozott</b>");
define("_ERROR_LOG_FINE","A hiba napló nem változott");
define("_ERROR_LOG_ERR","<b>Hiba a napló megnyitásában.</b>");
define("_ERROR_LOG_ERRCHMOD","<b>A fájl irásvédett. Megcsináltad a chmod-ot?</b>");
define("_ERROR_LOG_ERRFND","A log fájl hiányzik");
define("_ERROR_ERR_OPEN","Fájl megnyitási hiba.log");

define("_ADMIN_LOG_ERR","<b>Hiba van a naplófájlban, .log.</b>");
define("_ADMIN_LOG_ERRCHMOD","<b>A fájl irásvédett. Megcsináltad a chmod-ot?</b>");
define("_ADMIN_LOG_ERRFND","A log fájl hiányzik");

define("_TRACKER_HEAD_DATE","Dátum");
define("_TRACKER_HEAD_TIME","Idõ");
define("_TRACKER_HEAD_IP","IP");
define("_TRACKER_HEAD_MSG","Üzenet");

define("_TRACKER_UP","FRISSÍTÉS");
define("_TRACKER_BACK","Vissza");
define("_TRACKER_CLEAR", "Napló törlése");

define("_TRACKER_ERR_OPEN","Fájl megnyitási hiba, admin.log");
define("_TRACKER_ERR_UP","Frissítési hiba");

define("_TRACKER_CLEARED", "Az admin napló tartalma törölve!");
/*****[END]********************************************
 [ Mod:     Admin Tracker                      v1.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Evolution Version Checker          v1.0.0 ]
 ******************************************************/
define("_ADMIN_VER_TITLE","Nuke-Evolution Verzió ellenörzés");
define("_ADMIN_VER_ERRCON","Csatlakozási hiba a www.nuke-evolution.com");
define("_ADMIN_VER_ERRSQL","Adatbázis visszaírási hiba");
define("_ADMIN_VER_CHG","Az új verzió van jelen, Nuke-Evolution");
define("_ADMIN_VER_VIEW","Nézd meg az új verziót");
define("_ADMIN_VER_CUR","Az új verzió van jelen.");
define("_CHECKVER", "Kattints ide az új verzió kereséséhez");
define("_VER_ERR_CON","Csatlakozási hiba a <a href='http://www.nuke-evolution.com'>Nuke-Evolution</a>");
define("_VER_ERR_CHG","Hiba van a naplófájlban, .Log");
define("_VER_TITLE","Nuke-Evolution Verzió");
define("_VER_VER","A jelenlegi verzió :");
define("_VER_YOURVER","A jelenlegi verzió:");
define("_VER_CHGLOG","Nuke-Evolution naplófájl módosúlt, .Log");
define('_VERSIONOUTOFDATE', 'A telepítésed úgy látszik <strong>nem</strong> a legfrisseb. Frissítések álnak rendelkezésedre, kérlek látogass el az  <a href="http://www.evo-hungary.hu/modules.php?name=Downloads&cid=8" target="_new">Evo-Hungary oldalára</a> ,és töltsd le a legújabb változatot.');
define('_VERSIONLATESTINFO', 'Legújabb elérheto változat <strong>Nuke Evolution %s</strong>.');
define('_VERSIONCURRENTINFO', 'Jelenlegi változat <strong>Nuke Evolution %s</strong>.');
define('_VERSIONUP2DATE', 'A telepítésed a legfrisseb elérhetõ Nuke-Evolution verzió.');
define('_VERSIONFUNCTIONSDISABLED', 'Kapcsolat nem muködik.');
/*****[END]********************************************
 [ Mod:     Evolution Version Checker          v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Who is Online                      v0.9.1 ]
 ******************************************************/
define("_4nwho0a","Látogatók");
define("_4nwho00","<b>Ki van jelen?</b><br><i>Verzió: 0.91</i>");
define("_4nwho01","Vissza ");
define("_4nwho02","Szerver idõ: ");
define("_4nwho03"," Jelenlévõ felhasználók");
define("_4nwho04","Név");
define("_4nwho05","IP-cím");
define("_4nwho06","Hoszt név");
define("_4nwho07","Itt töltött idõ");
define("_4nwho08","Felhasználó szerkesztése");
define("_4nwho09","Frissít");
define("_4nwho10","Honnan");
define("_4nwho11","Legújabb felhasználók");
define("_4nwho12","Felhasználók száma");
define("_4nwho13","Felhasználói információk");
define("_4nwho14","Vendég");
define("_4nwho15","Ismeretlen domain");
define("_4nwho16","Nem domain");
define("_4nwho17","Jelenleg");
define("_4nwho18","vendég és");
define("_4nwho19","felhasználó olvas minket.");
define("_4nwho20","Felhasználó törlése");
define("_4nwhocopy","4nWhoIsOnline a <a href=\"http://warpspeed.4thdimension.de\" target=\"_blank\">www.warp-speed.de</a> -tõl @ <a href=\"http://www.4thdimension.de\" target=\"_blank\">4thDimension.de</a> Networking.");

/*****[END]********************************************
 [ Mod:     Who is Online                      v0.9.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:   SSL Administration                 v1.0.0 ]
 ******************************************************/
define("_SSLADMIN","SSL mód aktiválása az adminszámára?");
define("_SSLWARNING","Installálva kell lenni az SSL nek a szerveren");
/*****[END]********************************************
 [ Other:   SSL Administration                 v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Hide Blocks                         v1.0.0 ]
 ******************************************************/
define("_SHOWLEFTBLOCKS","Bal blokk mutatása");
define("_SHOWRIGHTBLOCKS","Jobb blokk mutatása");
/*****[END]********************************************
 [ Mod:    Hide Blocks                         v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
define("_URL_SERVER_ERROR","A beírt URL(%s) nem megfelelõ a szerver számára (%s)");
define("_URL_CONFIRM_ERROR","Kihagyod ezt a beállítást?");
/*****[END]********************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Lock Modules                       v1.0.0 ]
 ******************************************************/
define("_LOCK_MODULES_TITLE","Belépés kikényszerítése");
define("_LOCK_MODULES","Belépés kikényszerítése bármiáron:");
/*****[END]********************************************
 [ Mod:     Lock Modules                       v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Censor                             v1.0.0 ]
 ******************************************************/
define("_CENSOR","Cenzúráz");
define("_CENSOR_WORDS","Szavakat cenzúráz");
define("_CENSOR_OFF","Ki");
define("_CENSOR_WHOLE","Teljes szavakat");
define("_CENSOR_PARTIAL","Helyenkénti szavakat");
define("_CENSOR_SETTINGS","Cenzúra beállítása?");
/*****[END]********************************************
 [ Base:    Censor                             v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Cache                              v1.0.2 ]
 ******************************************************/
define("_CACHE_ENABLED","Engedélyezve");
define("_CACHE_DISABLED", "Kikapcsol");
define("_CACHE_HOWTOENABLE", "Hogy engedélyez?");
define("_CACHE_CLEARNOW", "Törlés újra");
define("_CACHE_NO", "Nem");
define("_CACHE_YES", "Igen");
define("_CACHE_GOOD", "Kitûnõ");
define("_CACHE_BAD", "A Gyorsító tár nem chmodded!");
define("_CACHE_HEADER", "Nuke-Evolution Gyorsító tár :: Admin Ablak");
define("_CACHE_STATUS", "Gyorsító tár állapot:");
define("_CACHE_DIR_STATUS", "Gyorsító tár könyvtár állapot:");
define("_CACHE_NUM_FILES", "Gyorsitó tár fájlok száma:");
define("_CACHE_LAST_CLEARED", "Gyorsító tár utolsó törlése:");
define("_CACHE_SIZE", "Gyorsító tár mérete:");
define("_CACHE_USER_CAN_CLEAR", "A felhasználó tudja törölni a gyorsító tárat:");
define("_CACHE_CLEAR", "Gyorsító tár törlése");
define("_CACHE_RETURN", "Vissza az adminisztrációs menühöz");
define("_CACHE_FILENAME", "Fájl neve");
define("_CACHE_FILESIZE", "Fájl mérete");
define("_CACHE_LASTMOD", "Utolsó módosítás");
define("_CACHE_OPTIONS", "Beállítások");
define("_CACHE_DELETE", "Törlés");
define("_CACHE_VIEW", "Megnéz");
define("_CACHE_RETURNCACHE", "Vissza a gyorsító tár adminba");
define("_CACHE_INVALID", "Nem megengedett mûvelet");
define("_CACHE_FILE_DELETE_SUCC", "Fájl törölve");
define("_CACHE_FILE_DELETE_FAIL", "Fájl törlési hiba");
define("_CACHE_CAT_DELETE_SUCC", "Kategoria törölve");
define("_CACHE_CAT_DELETE_FAIL", "Kategoria törlési hiba");
define("_CACHE_CLEARED_SUCC", "Gyorsító tár törölve");
define("_CACHE_CLEARED_FAIL", "Gyorsító tár törlési hiba");
define("_CACHE_PREF_UPDATED_SUCC", "Kezdeményezés végrehalytva");
define("_CACHE_ENABLE_HOW", "Gyorsító tár nincs engedélyezve, \$use_cache to \"true\" a config.php fájlban.");
define("_CACHESAFEMODE", "Biztonsági mód engedélyezve a szerveren, gyorsító tár hiba!");
define("_CACHENOTALLOWED", "Nem megengedett a fájl megnézése!");
/*****[END]********************************************
 [ Base:    Cache                              v1.0.2 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:  Security Status                     v1.0.0 ]
 ******************************************************/
define("_SEC_STATUS", "Biztonsági állapot");
define("_INPUT_FILTER", "Bejövõ szürõ");
define("_SEC_OFF", "Kikapcsol");
define("_SEC_ON", "Engedélyez");
define("_ADMIN_IP_LOCK", "Admin IP zárolás");
/*****[END]********************************************
 [ Other:  Security Status                     v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:  Meta Tags                           v1.0.0 ]
 ******************************************************/
define('_METACONFIG', 'Meta Tags Adminisztráció');
define('_META_TAGS', 'Meta Tags');
/*****[END]********************************************
 [ Other:  Meta Tags                           v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
define("_TEXT_AREA", "Beállitott szövegszerkesztõ");
define("_TEXT_AREA_FCK", "Editor");
define("_TEXT_AREA_BBCODE", "BBCode");
define("_TEXT_AREA_NONE", "Nincs");
/*****[END]********************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Color Toggle                        v1.0.0 ]
 ******************************************************/
define("_COLORTOGGLE", "Csoport, és név szineinek beállítása");
/*****[END]********************************************
 [ Mod:    Color Toggle                        v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
define("_THEMES_PERMISSIONS", "Engedélyezés");
define("_THEMES_HEADER", "Nuke Evolution :: Téma Rendszerezõ");
define("_THEMES_DEFAULT", "Beállitott Téma");
define("_THEMES_NUMTHEMES", "Témák száma");
define("_THEMES_NUMUNINSTALLED", "Eltávolitott Témák száma");
define("_THEMES_MOSTPOPULAR", "Kedvelt Téma");
define("_THEMES_OPTIONS", "Témák beállítása");
define("_THEMES_RETURNMAIN", "Vissza az Adminisztrácíóba");
define("_THEMES_MAKEDEFAULT", "Alapértelmezett");
define("_THEMES_DEACTIVATE", "Kikapcsolt");
define("_THEMES_ACTIVATE", "Bekapcsolt");
define("_THEMES_UNINSTALL", "Eltávolit");
define("_THEMES_EDIT", "Szerkeszt");
define("_THEMES_VIEW", "Megnéz");
define("_THEMES_NONE", "Mégsem");
define("_THEMES_NAME", "Téma neve");
define("_THEMES_CUSTOMN", "Sorozat neve");
define("_THEMES_NUMUSERS", "Felhasználók");
define("_THEMES_STATUS", "Állapot");
define("_THEMES_GROUPS", "Csoport");
define("_THEMES_OPTS", "Beállítás");
define("_THEMES_INSTALLED", "Telepitett témák");
define("_THEMES_ALLUSERS", "Minden felhasználó");
define("_THEMES_GROUPSONLY", "Csoportok");
define("_THEMES_ADMINS", "Adminisztrátorok");
define("_THEMES_UNINSTALLED", "Eltávolitott témák");
define("_THEMES_QINSTALL", "Gyors hozáadás");
define("_THEMES_INSTALL", "Hozzáadás");
define("_THEMES_CUSTOMNAME", "Egyéni téma neve");
define("_THEMES_ACTIVE", "Bekapcsolt");
define("_THEMES_RETURN", "Vissza a Téma Rendszerezõbe");
define("_THEMES_UPDATED", "Téma frissítve!");
define("_THEMES_UPDATEFAILED", "Téma megnyitási hiba!");
define("_THEMES_THEME_INSTALLED", "Téma hozzáadva!");
define("_THEMES_THEME_INSTALLED_FAILED", "Téma hiba!");
define("_THEMES_THEME_UNINSTALLED", "Téma eltávolítva");
define("_THEMES_THEME_UNINSTALLED_FAILED", "Téma eltávolítási hiba!");
define("_THEMES_UNINSTALL1", "Biztos hogy eltávolíod a témát?");
define("_THEMES_UNINSTALL2", "Téma beállításának elvetése!");
define("_THEMES_UNINSTALL3", "Minden felhasználó számára alpértelmezett téma!");
define("_THEMES_THEME_UNINSTALL", "Téma eltávolítása");
define("_THEMES_THEME_DEACTIVATED", "Téma kikapcsolása!");
define("_THEMES_THEME_DEACTIVATED_FAILED", "Téma kikapcsolási hiba!");
define("_THEMES_DEACTIVATE1", "Biztos hogy kikapcsolod a témát?");
define("_THEMES_DEACTIVATE2", "Téma visszaállítása minden felhasználó számára!");
define("_THEMES_THEME_DEACTIVATE", "Téma kikapcsolása");
define("_THEMES_TRANSFER", "Téma felhasználók számára");
define("_THEMES_MANG_OPTIONS", "Téma rendszerbeállítások");
define("_THEMES_ALLOWCHANGE", "Felhasználók választhatnak témát");
define("_THEMES_SUBMIT", "Küldés");
define("_THEMES_SETTINGS_UPDATED", "Beállítás mentve!");
define("_THEMES_THEME_TRANSFER", "Téma küldése");
define("_THEMES_RETURN_OPTIONS", "Vissza a téma beállításokhoz");
define("_THEMES_VIEW_STATS", "Statisztika megnézése");
define("_THEMES_FROM", "Témától");
define("_THEMES_TO", "Témáig");
define("_THEMES_DEFAULT", "Alapértelmezett");
define("_THEMES_TRANSFER_UPDATED", "Felhasználók frissítése!");
define("_THEMES_THEMES", "Témák");
define("_THEMES_ADV_OPTS", "További téma beállítások");
define("_THEMES_ADV_COMP", "A téma megfelelt");
define("_THEMES_DEF_LOADED", "Alapértelmezett beállítások betöltve.");
define("_THEMES_REST_DEF", "Alapértelmezett beállítása");
define("_THEMES_NOT_COMPAT", "<font color='red'>A téma nem megfelelõ</font><br />Tölts le témát <a href='http://www.evo-hungary.hu/modules.php?name=Downloads3' target='_blank'><b>Evo-Hungary</b></a> oldaláról");
define("_THEMES_DEFAULT", "Alapértelmezett");
define("_THEMES_PREVIEW", "Téma bemutató");
define("_THEMES_INACTIVE", "Kikapcsolt téma");
define("_THEMES_QUNINSTALLED", "Téma hozzáadása");
define("_THEMES_USER_OPTIONS", "Felhasználók beállítása");
define("_THEMES_USERID", "Tag sorszáma");
define("_THEMES_USERNAME", "Tag nick neve");
define("_THEMES_REALNAME", "Tag valodi neve");
define("_THEMES_USEREMAIL", "Tag Email cime");
define("_THEMES_FUNCTIONS", "Téma funkciók");
define("_THEMES_USERTHEME", "Tag témája");
define("_THEMES_PAGE_OF", "Oldal száma");
define("_THEMES_PAGE_FIRST", "Oldal frissítése");
define("_THEMES_PAGE_PREVIOUS", "Elözõ oldal");
define("_THEMES_PAGE_NEXT", "Következõ oldal");
define("_THEMES_PAGE_LAST", "Utolsó oldal oldal");
define("_NOREALNAME", "Nincs");
define("_THEMES_USER_RESET", "Alap állapot");
define("_THEMES_USER_MODIFY", "Modosítás");
define("_THEMES_USER_SELECT", "Választott téma");



/*****[END]********************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Advanced Security Code Control      v1.0.0 ]
 ******************************************************/
define("_USEGFXCHECK", "Biztonsági kód");
define("_GFXOPT", "Biztonsági kód beállítások");
define("_GFX_NC","Nem nézi");
define("_GFX_AC","Adminisztrátor belépésnél");
define("_GFX_LC","Felhasználó belépésnél");
define("_GFX_RC","Új felhasználó belépésnél");
define("_GFX_CA","Felhasználó belépésnél, és Új felhasználó belépésnél");
define("_GFX_AUC","Adminisztrátor belépésnél,és Felhasználó belépésnél");
define("_GFX_ANC","Adminisztrátor belépésnél,és Új felhasználó belépésnél");
define("_GFX_ALLC","Mindenki számára (Admin és felhasználó)");
define("_GFX_CODESIZE","Karakterek száma");
define("_GFX_CODEFONT","Betû");
define("_FONTUPLOAD","Betû hozzáadása (ttf) feltöltése");
define("_GFX_USEIMAGE","Háttér megnyitása?");
define("_GFX_DEFAULTFONT","Alapértelmezett betû");
/*****[END]********************************************
 [ Mod:    Advanced Security Code Control      v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:    Database Manager                  v2.0.0 ]
 ******************************************************/
define("_DATABASE", "Adatbázis");
define("_ACTIONRESULTS", "Itt vannak az erdmények");
define("_IMPORTSUCCESS","Importálás <em>%s</em> megtörtént");
define("_CHECKALL","Mindet kijelöl");
define("_UNCHECKALL","Kijelölés megszüntetése");
define("_SAVEDATABASE","DB mentése");
define("_ANALYZEDATABASE","Analizis");
define("_CHECKDATABASE","Kijelöl");
define("_OPTIMIZEDATABASE","Optimalizál");
define("_REPAIRDATABASE","Javít");
define("_STATUSDATABASE","Állapot");
define("_BACKUPTASKS","Feladatok mentése");
define("_SAVEDATA","Adatok mentése");
define("_INCLUDESTATEMENT","Beszámitás %s állítás");
define("_GZIPCOMPRESS","GZIP tömörítés");
define("_OPTIMIZETEXT",'<strong>OPTIMIZE</strong></div><br /><div align="justify">Should be used if you have deleted a large part of a table or if you have made many changes to a table with variable-length rows (tables that have VARCHAR, BLOB, or TEXT columns). Deleted records are maintained in a linked list and subsequent INSERT operations reuse old record positions. You can use OPTIMIZE to reclaim the unused space and to defragment the datafile.<br />
In most setups you don\'t have to run OPTIMIZE at all. Even if you do a lot of updates to variable length rows it\'s not likely that you need to do this more than once a month/week and only on certain tables.</div><br />
OPTIMIZE works in the following way:<ul>
<li>If the table has deleted or split rows, repair the table.</li>
<li>If the index pages are not sorted, sort them.</li>
<li>If the statistics are not up to date (and the repair couldn\'t be done by sorting the index), update them.</li>
</ul><strong>Note:</strong> the table is locked during the time in which OPTIMIZE is running!');
define("_IMPORTFILE","SQL Fájlt feltõlt");
define("_IMPORTSQL", "Feltõltés");
define("_DBACTION", "Akció");
/*****[END]********************************************
 [ Other:    Database Manager                  v2.0.0 ]
 ******************************************************/

/*--FNL--*/
/*****[BEGIN]******************************************
 [ Modules:  Fancy NewsLetter                  v2.5.0 ]
 ******************************************************/
define("_FANCYNL","Fancy Hírlevél");
/*****[END]********************************************
 [ Modules:  Fancy NewsLetter                  v2.5.0 ]
 ******************************************************/

/*--CalendarMx--*/ 

/*****[BEGIN]******************************************
 [ Other:    System Info                       v1.0.0 ]
 ******************************************************/
 define("_PHP_MODULES", "PHP Modulok");
 define("_PHP_CORE", "PHP Magja");
 define("_PHP_ENVIRO", "PHP Környezet");
 define("_PHP_VARS", "PHP Változók");
 define("_SQL_SRV", "SQL Szerver");
 define("_INFO_GENERAL", "Álltalános");
/*****[END]********************************************
 [ Other:    System Info                       v1.0.0 ]
 ******************************************************/

define('_SMADM','Oldal térkép');

define('_PSM_CLICK',' Erösebb jelszó eléréséhez,');
define('_PSM_HERE','kattints ide');		
define('_PSM_HELP',' (Segitség)');
define('_PSM_NOTRATED','jelszó erössége');

define('_MAILCONTENT','Hírlevél tartalma');

/*****[BEGIN]******************************************
 [ Mod:     Lazy Google Tap                    v1.0.0 ]
 ******************************************************/ 
define('_LAZY_TAP','Letapogatás');
define('_IMG_RESIZE','Kép méretezése:');
define('_IMG_WIDTH','Kép szélessége:');
define('_COLLAPSE','Blokk engedélyezése');
define('_LAZY_TAP_OFF','Letapogatás kikapcsolva ');
define('_LAZY_TAP_BOT','Letapogatás keresõk');
define('_LAZY_TAP_EVERYONE','Letapogatás');
define('_LAZY_TAP_ADMIN','Admin, és keresó');
define('_COLLAPSE_TITLE','Szöveg');
define('_COLLAPSE_ICON','Iconkép');
/*****[END]********************************************
 [ Mod:     Lazy Google Tap                    v1.0.0 ]
 ******************************************************/ 
define('_SITEMAP_ADMIN_HEADER','Oldaltérkép Adminisztráció');
define('_SITEMAP_RETURNMAIN','Vissza az Adminisztrációhoz');
define('_SITEMAPADMIN','Oldaltérkép Adminisztráció');
define('_XMLCREATE','Hírolvasó engedélyezése');
define('_NNEWS','Hírek');
define('_NTOPICS','Fórum Hírek');
define('_NDOWN','Letöltések');
define('_NREV','Ismertetõ');
define('_NUSER','Felhasználók');

/*****[BEGIN]******************************************
 [ Mod:     Evolution UserInfo Block           v1.0.0 ]
 ******************************************************/
define('_EVO_USERINFO','Evolution UserInfoBlock');
/*****[END]********************************************
 [ Mod:     Evolution UserInfo Block           v1.0.0 ]
 ******************************************************/ 

/*****[BEGIN]******************************************
 [ Mod:     Image Resize Mod                   v2.4.5 ]
 ******************************************************/
define('_IMG_RESIZE','Kép méretezés');
define('_IMG_WIDTH','Max Kép Szélesség');
/*****[END]********************************************
 [ Mod:     Image Resize Mod                   v2.4.5 ]
 ******************************************************/ 

/*****[BEGIN]******************************************
 [ Base:    Switch Content Script              v2.0.0 ]
 ******************************************************/
define('_COLLAPSE','Blokk Engedéjezése?');
define('_COLLAPSE_TITLE','Fejléc');
define('_COLLAPSE_ICON','Icon');
/*****[END]********************************************
 [ Base:    Switch Content Script              v2.0.0 ]
 ******************************************************/ 

/*****[BEGIN]******************************************
 [ Base:    Blocks                             v.1.0.0]
 ******************************************************/
define('_BLOCK_ADMIN_HEADER', 'Nuke-Evolution Blokk :: Admin Felület');
define('_BLOCK_RETURNMAIN', 'Vissza Az Adminisztrációba');
define('_BLOCK_ADMIN_NOTE', 'Ha Itt Aktiválod, Vagy kikapcsolod a Blokkot <br />Ne Felejts El Frissíteni!');
define('_BLOCK_INACTIVE','A Blokk Nem Aktív<br />(Duplán Kattints Rá Az Aktiváláshoz/Kikapcsolásához)');
define('_BLOCK_LINK_DELETE','Blokk Törlése');
define('_BLOCK_TITLE','Fejléc');
define('_BLOCK_EDIT','Szerkesztés');
/*****[END]********************************************
 [ Base:    Blocks                             v.1.0.0]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Modules                            v.1.0.0]
 ******************************************************/
define('_MOD_CAT_TITLE','Kategoria Fejléce');
define('_MOD_CAT_IMG','Kategoria Kép Fájl Neve');
define('_MOD_CAT_IMG_NOTE','<strong>Üzenet:</strong> Kategoria Kép Heje <i>images/blocks/modules/</i> Könyvtár.');
define('_MOD_CAT_LINK_TITLE','Link Fejléce');
define('_MOD_CAT_EDIT','Kategoria Szerkesztése');
define('_MOD_INACTIVE','Modul Kikapcsolva<br />(Duplán Kattints Ide Az Aktiváláshoz/Kikapcsoláshoz)');
define('_MOD_LINK','link');
define('_MOD_LINK_DELETE','link Törlése');
define('_MOD_CAT_DELETE','Kategoria Törlése');
define('_MOD_CAT_ORDER','Kategoria Változtatása');
define('_MOD_TITLE','Fejléc');
define('_MOD_COLLAPSE','Aktiválod a Kategoriát?');
define('_MOD_EXPLAIN','Ha Itt Aktiválod, Vagy kikapcsolod a Modult <br />Ne Felejts El Frissíteni!');
define('_MOD_EXPLAIN2','Most <strong>KELL</strong> Kategoria Változások Elött Mentened.<br />A Változások Nem Frissültek Automatikussan!');
define('_MOD_NF_VALUES','Could Not Get Values');
define('_MOD_ERROR_TITLE','Válassz Fejlécet, És Linket');
define('_MOD_ERROR_GROUPS','Válassz Csoportot');
define('_MOD_ERROR_CAT_NF','Nincs Ijen Kategoria');
/*****[BEGIN]******************************************
 [ Base:    Modules                            v.1.0.0]
 ******************************************************/

define('_TEXT_AREA', 'Text Area');

define("_SITECACHED", "Az oldal gyorsitótárral rendelkezik.");
define("_UPDATECACHE", "Kattints ide az oldal frissítéséhez.");
define("_AB_CURVER","Beálitások");

?>
