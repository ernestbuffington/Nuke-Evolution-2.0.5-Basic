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
define("_ADMINPOS", "Admin �llapot");
define("_UP", "Fel");
define("_DOWN", "Le");
define("_ADMIN_POS","J� az icons/links:");
/*****[END]********************************************
 [ Base:    Admin Icon/Link Pos                v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Queries Count                       v2.0.1 ]
 ******************************************************/
define("_QUERIESCOUNT", "Sz�m�t�sok?");
/*****[END]********************************************
 [ Mod:    Queries Count                       v2.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Admin Welcome Message               v1.1.0 ]
 ******************************************************/
define("_ADMINWELCOME", "�dv�z�llek %s!");
define("_ADMINWELCOME2", "�dv�z�llek az adminisztr�ci�ban<br />Nem felejtett�l el semmit?");
/*****[END]********************************************
 [ Mod:    Admin Welcome Message               v1.1.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:  Extended Surveys Admin Interface      v1.0.0 ]
 ******************************************************/
define("_POLLADMIN", "K�rd�sek Adminisztr�l�sa");
define("_POLLMAIN", "K�rd�sek Adminisztr�ci�");
define("_SURVEYSADMIN", "K�rd�sek");
define("_POLLCHOOSE", "�dv�z�llek a K�rd�sek Adminisztr�l�s�ban<br />Nem felejtett�l el semmit?");
define("_ADDPOLL", "Szavaz�s hozz�ad�sa");
define("_CHANGEPOLL", "Szavaz�s mod�s�t�sa");
define("_DELETEPOLL", "Szavaz�s t�rl�se");
define("_POLL_OPTIONS", "Extra V�laszt�s");
define("_POLL_INFO", "Szavaz�s blokk megv�ltoztat�sa");
define("_POLLDAYS", "Sz�m, ameddig a szavaz�s tart");
define("_POLLRANDOM", "V�letlen szavaz�s mutat�sa");
/*****[END]********************************************
 [ Mod:  Extended Surveys Admin Interface      v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Admin Tracker                      v1.0.1 ]
 ******************************************************/
define("_ADMIN_LOG","Biztons�gi nyomk�vet� ");
define("_ADMIN_LOG_EXPLAIN1","Biztons�gi nyomk�vet� napl�");
define("_ADMIN_LOG_EXPLAIN2","- Admin bel�p�s figyel�<br />- Hib�s admin bel�p�s<br />- Intruder Alert<br />- MySQL hiba");
define("_ADMIN_LOG_CHG","<b>Admin nyomk�vet� napl� <b>itt</b> megv�ltozott</b>");
define("_ADMIN_LOG_FINE","Admin nyomk�vet� napl� nem v�ltozozz");
define("_ADMIN_LOG_CHECKED","Utols� verzi� ellen�rz�se");
define("_ADMIN_LOG_VIEW","napl� megn�z�se");
define("_ADMIN_LOG_ACK","Nyugz�z");

define("_ERROR_LOG_CHG","<b>A hibanapl� <b>itt</b> megv�ltozott</b>");
define("_ERROR_LOG_FINE","A hiba napl� nem v�ltozott");
define("_ERROR_LOG_ERR","<b>Hiba a napl� megnyit�s�ban.</b>");
define("_ERROR_LOG_ERRCHMOD","<b>A f�jl ir�sv�dett. Megcsin�ltad a chmod-ot?</b>");
define("_ERROR_LOG_ERRFND","A log f�jl hi�nyzik");
define("_ERROR_ERR_OPEN","F�jl megnyit�si hiba.log");

define("_ADMIN_LOG_ERR","<b>Hiba van a napl�f�jlban, .log.</b>");
define("_ADMIN_LOG_ERRCHMOD","<b>A f�jl ir�sv�dett. Megcsin�ltad a chmod-ot?</b>");
define("_ADMIN_LOG_ERRFND","A log f�jl hi�nyzik");

define("_TRACKER_HEAD_DATE","D�tum");
define("_TRACKER_HEAD_TIME","Id�");
define("_TRACKER_HEAD_IP","IP");
define("_TRACKER_HEAD_MSG","�zenet");

define("_TRACKER_UP","FRISS�T�S");
define("_TRACKER_BACK","Vissza");
define("_TRACKER_CLEAR", "Napl� t�rl�se");

define("_TRACKER_ERR_OPEN","F�jl megnyit�si hiba, admin.log");
define("_TRACKER_ERR_UP","Friss�t�si hiba");

define("_TRACKER_CLEARED", "Az admin napl� tartalma t�r�lve!");
/*****[END]********************************************
 [ Mod:     Admin Tracker                      v1.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Evolution Version Checker          v1.0.0 ]
 ******************************************************/
define("_ADMIN_VER_TITLE","Nuke-Evolution Verzi� ellen�rz�s");
define("_ADMIN_VER_ERRCON","Csatlakoz�si hiba a www.nuke-evolution.com");
define("_ADMIN_VER_ERRSQL","Adatb�zis vissza�r�si hiba");
define("_ADMIN_VER_CHG","Az �j verzi� van jelen, Nuke-Evolution");
define("_ADMIN_VER_VIEW","N�zd meg az �j verzi�t");
define("_ADMIN_VER_CUR","Az �j verzi� van jelen.");
define("_CHECKVER", "Kattints ide az �j verzi� keres�s�hez");
define("_VER_ERR_CON","Csatlakoz�si hiba a <a href='http://www.nuke-evolution.com'>Nuke-Evolution</a>");
define("_VER_ERR_CHG","Hiba van a napl�f�jlban, .Log");
define("_VER_TITLE","Nuke-Evolution Verzi�");
define("_VER_VER","A jelenlegi verzi� :");
define("_VER_YOURVER","A jelenlegi verzi�:");
define("_VER_CHGLOG","Nuke-Evolution napl�f�jl m�dos�lt, .Log");
define('_VERSIONOUTOFDATE', 'A telep�t�sed �gy l�tszik <strong>nem</strong> a legfrisseb. Friss�t�sek �lnak rendelkez�sedre, k�rlek l�togass el az  <a href="http://www.evo-hungary.hu/modules.php?name=Downloads&cid=8" target="_new">Evo-Hungary oldal�ra</a> ,�s t�ltsd le a leg�jabb v�ltozatot.');
define('_VERSIONLATESTINFO', 'Leg�jabb el�rheto v�ltozat <strong>Nuke Evolution %s</strong>.');
define('_VERSIONCURRENTINFO', 'Jelenlegi v�ltozat <strong>Nuke Evolution %s</strong>.');
define('_VERSIONUP2DATE', 'A telep�t�sed a legfrisseb el�rhet� Nuke-Evolution verzi�.');
define('_VERSIONFUNCTIONSDISABLED', 'Kapcsolat nem muk�dik.');
/*****[END]********************************************
 [ Mod:     Evolution Version Checker          v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Who is Online                      v0.9.1 ]
 ******************************************************/
define("_4nwho0a","L�togat�k");
define("_4nwho00","<b>Ki van jelen?</b><br><i>Verzi�: 0.91</i>");
define("_4nwho01","Vissza ");
define("_4nwho02","Szerver id�: ");
define("_4nwho03"," Jelenl�v� felhaszn�l�k");
define("_4nwho04","N�v");
define("_4nwho05","IP-c�m");
define("_4nwho06","Hoszt n�v");
define("_4nwho07","Itt t�lt�tt id�");
define("_4nwho08","Felhaszn�l� szerkeszt�se");
define("_4nwho09","Friss�t");
define("_4nwho10","Honnan");
define("_4nwho11","Leg�jabb felhaszn�l�k");
define("_4nwho12","Felhaszn�l�k sz�ma");
define("_4nwho13","Felhaszn�l�i inform�ci�k");
define("_4nwho14","Vend�g");
define("_4nwho15","Ismeretlen domain");
define("_4nwho16","Nem domain");
define("_4nwho17","Jelenleg");
define("_4nwho18","vend�g �s");
define("_4nwho19","felhaszn�l� olvas minket.");
define("_4nwho20","Felhaszn�l� t�rl�se");
define("_4nwhocopy","4nWhoIsOnline a <a href=\"http://warpspeed.4thdimension.de\" target=\"_blank\">www.warp-speed.de</a> -t�l @ <a href=\"http://www.4thdimension.de\" target=\"_blank\">4thDimension.de</a> Networking.");

/*****[END]********************************************
 [ Mod:     Who is Online                      v0.9.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:   SSL Administration                 v1.0.0 ]
 ******************************************************/
define("_SSLADMIN","SSL m�d aktiv�l�sa az adminsz�m�ra?");
define("_SSLWARNING","Install�lva kell lenni az SSL nek a szerveren");
/*****[END]********************************************
 [ Other:   SSL Administration                 v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Hide Blocks                         v1.0.0 ]
 ******************************************************/
define("_SHOWLEFTBLOCKS","Bal blokk mutat�sa");
define("_SHOWRIGHTBLOCKS","Jobb blokk mutat�sa");
/*****[END]********************************************
 [ Mod:    Hide Blocks                         v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
define("_URL_SERVER_ERROR","A be�rt URL(%s) nem megfelel� a szerver sz�m�ra (%s)");
define("_URL_CONFIRM_ERROR","Kihagyod ezt a be�ll�t�st?");
/*****[END]********************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Lock Modules                       v1.0.0 ]
 ******************************************************/
define("_LOCK_MODULES_TITLE","Bel�p�s kik�nyszer�t�se");
define("_LOCK_MODULES","Bel�p�s kik�nyszer�t�se b�rmi�ron:");
/*****[END]********************************************
 [ Mod:     Lock Modules                       v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Censor                             v1.0.0 ]
 ******************************************************/
define("_CENSOR","Cenz�r�z");
define("_CENSOR_WORDS","Szavakat cenz�r�z");
define("_CENSOR_OFF","Ki");
define("_CENSOR_WHOLE","Teljes szavakat");
define("_CENSOR_PARTIAL","Helyenk�nti szavakat");
define("_CENSOR_SETTINGS","Cenz�ra be�ll�t�sa?");
/*****[END]********************************************
 [ Base:    Censor                             v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Cache                              v1.0.2 ]
 ******************************************************/
define("_CACHE_ENABLED","Enged�lyezve");
define("_CACHE_DISABLED", "Kikapcsol");
define("_CACHE_HOWTOENABLE", "Hogy enged�lyez?");
define("_CACHE_CLEARNOW", "T�rl�s �jra");
define("_CACHE_NO", "Nem");
define("_CACHE_YES", "Igen");
define("_CACHE_GOOD", "Kit�n�");
define("_CACHE_BAD", "A Gyors�t� t�r nem chmodded!");
define("_CACHE_HEADER", "Nuke-Evolution Gyors�t� t�r :: Admin Ablak");
define("_CACHE_STATUS", "Gyors�t� t�r �llapot:");
define("_CACHE_DIR_STATUS", "Gyors�t� t�r k�nyvt�r �llapot:");
define("_CACHE_NUM_FILES", "Gyorsit� t�r f�jlok sz�ma:");
define("_CACHE_LAST_CLEARED", "Gyors�t� t�r utols� t�rl�se:");
define("_CACHE_SIZE", "Gyors�t� t�r m�rete:");
define("_CACHE_USER_CAN_CLEAR", "A felhaszn�l� tudja t�r�lni a gyors�t� t�rat:");
define("_CACHE_CLEAR", "Gyors�t� t�r t�rl�se");
define("_CACHE_RETURN", "Vissza az adminisztr�ci�s men�h�z");
define("_CACHE_FILENAME", "F�jl neve");
define("_CACHE_FILESIZE", "F�jl m�rete");
define("_CACHE_LASTMOD", "Utols� m�dos�t�s");
define("_CACHE_OPTIONS", "Be�ll�t�sok");
define("_CACHE_DELETE", "T�rl�s");
define("_CACHE_VIEW", "Megn�z");
define("_CACHE_RETURNCACHE", "Vissza a gyors�t� t�r adminba");
define("_CACHE_INVALID", "Nem megengedett m�velet");
define("_CACHE_FILE_DELETE_SUCC", "F�jl t�r�lve");
define("_CACHE_FILE_DELETE_FAIL", "F�jl t�rl�si hiba");
define("_CACHE_CAT_DELETE_SUCC", "Kategoria t�r�lve");
define("_CACHE_CAT_DELETE_FAIL", "Kategoria t�rl�si hiba");
define("_CACHE_CLEARED_SUCC", "Gyors�t� t�r t�r�lve");
define("_CACHE_CLEARED_FAIL", "Gyors�t� t�r t�rl�si hiba");
define("_CACHE_PREF_UPDATED_SUCC", "Kezdem�nyez�s v�grehalytva");
define("_CACHE_ENABLE_HOW", "Gyors�t� t�r nincs enged�lyezve, \$use_cache to \"true\" a config.php f�jlban.");
define("_CACHESAFEMODE", "Biztons�gi m�d enged�lyezve a szerveren, gyors�t� t�r hiba!");
define("_CACHENOTALLOWED", "Nem megengedett a f�jl megn�z�se!");
/*****[END]********************************************
 [ Base:    Cache                              v1.0.2 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:  Security Status                     v1.0.0 ]
 ******************************************************/
define("_SEC_STATUS", "Biztons�gi �llapot");
define("_INPUT_FILTER", "Bej�v� sz�r�");
define("_SEC_OFF", "Kikapcsol");
define("_SEC_ON", "Enged�lyez");
define("_ADMIN_IP_LOCK", "Admin IP z�rol�s");
/*****[END]********************************************
 [ Other:  Security Status                     v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:  Meta Tags                           v1.0.0 ]
 ******************************************************/
define('_METACONFIG', 'Meta Tags Adminisztr�ci�');
define('_META_TAGS', 'Meta Tags');
/*****[END]********************************************
 [ Other:  Meta Tags                           v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
define("_TEXT_AREA", "Be�llitott sz�vegszerkeszt�");
define("_TEXT_AREA_FCK", "Editor");
define("_TEXT_AREA_BBCODE", "BBCode");
define("_TEXT_AREA_NONE", "Nincs");
/*****[END]********************************************
 [ Mod:     Custom Text Area                   v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Color Toggle                        v1.0.0 ]
 ******************************************************/
define("_COLORTOGGLE", "Csoport, �s n�v szineinek be�ll�t�sa");
/*****[END]********************************************
 [ Mod:    Color Toggle                        v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
define("_THEMES_PERMISSIONS", "Enged�lyez�s");
define("_THEMES_HEADER", "Nuke Evolution :: T�ma Rendszerez�");
define("_THEMES_DEFAULT", "Be�llitott T�ma");
define("_THEMES_NUMTHEMES", "T�m�k sz�ma");
define("_THEMES_NUMUNINSTALLED", "Elt�volitott T�m�k sz�ma");
define("_THEMES_MOSTPOPULAR", "Kedvelt T�ma");
define("_THEMES_OPTIONS", "T�m�k be�ll�t�sa");
define("_THEMES_RETURNMAIN", "Vissza az Adminisztr�c��ba");
define("_THEMES_MAKEDEFAULT", "Alap�rtelmezett");
define("_THEMES_DEACTIVATE", "Kikapcsolt");
define("_THEMES_ACTIVATE", "Bekapcsolt");
define("_THEMES_UNINSTALL", "Elt�volit");
define("_THEMES_EDIT", "Szerkeszt");
define("_THEMES_VIEW", "Megn�z");
define("_THEMES_NONE", "M�gsem");
define("_THEMES_NAME", "T�ma neve");
define("_THEMES_CUSTOMN", "Sorozat neve");
define("_THEMES_NUMUSERS", "Felhaszn�l�k");
define("_THEMES_STATUS", "�llapot");
define("_THEMES_GROUPS", "Csoport");
define("_THEMES_OPTS", "Be�ll�t�s");
define("_THEMES_INSTALLED", "Telepitett t�m�k");
define("_THEMES_ALLUSERS", "Minden felhaszn�l�");
define("_THEMES_GROUPSONLY", "Csoportok");
define("_THEMES_ADMINS", "Adminisztr�torok");
define("_THEMES_UNINSTALLED", "Elt�volitott t�m�k");
define("_THEMES_QINSTALL", "Gyors hoz�ad�s");
define("_THEMES_INSTALL", "Hozz�ad�s");
define("_THEMES_CUSTOMNAME", "Egy�ni t�ma neve");
define("_THEMES_ACTIVE", "Bekapcsolt");
define("_THEMES_RETURN", "Vissza a T�ma Rendszerez�be");
define("_THEMES_UPDATED", "T�ma friss�tve!");
define("_THEMES_UPDATEFAILED", "T�ma megnyit�si hiba!");
define("_THEMES_THEME_INSTALLED", "T�ma hozz�adva!");
define("_THEMES_THEME_INSTALLED_FAILED", "T�ma hiba!");
define("_THEMES_THEME_UNINSTALLED", "T�ma elt�vol�tva");
define("_THEMES_THEME_UNINSTALLED_FAILED", "T�ma elt�vol�t�si hiba!");
define("_THEMES_UNINSTALL1", "Biztos hogy elt�vol�od a t�m�t?");
define("_THEMES_UNINSTALL2", "T�ma be�ll�t�s�nak elvet�se!");
define("_THEMES_UNINSTALL3", "Minden felhaszn�l� sz�m�ra alp�rtelmezett t�ma!");
define("_THEMES_THEME_UNINSTALL", "T�ma elt�vol�t�sa");
define("_THEMES_THEME_DEACTIVATED", "T�ma kikapcsol�sa!");
define("_THEMES_THEME_DEACTIVATED_FAILED", "T�ma kikapcsol�si hiba!");
define("_THEMES_DEACTIVATE1", "Biztos hogy kikapcsolod a t�m�t?");
define("_THEMES_DEACTIVATE2", "T�ma vissza�ll�t�sa minden felhaszn�l� sz�m�ra!");
define("_THEMES_THEME_DEACTIVATE", "T�ma kikapcsol�sa");
define("_THEMES_TRANSFER", "T�ma felhaszn�l�k sz�m�ra");
define("_THEMES_MANG_OPTIONS", "T�ma rendszerbe�ll�t�sok");
define("_THEMES_ALLOWCHANGE", "Felhaszn�l�k v�laszthatnak t�m�t");
define("_THEMES_SUBMIT", "K�ld�s");
define("_THEMES_SETTINGS_UPDATED", "Be�ll�t�s mentve!");
define("_THEMES_THEME_TRANSFER", "T�ma k�ld�se");
define("_THEMES_RETURN_OPTIONS", "Vissza a t�ma be�ll�t�sokhoz");
define("_THEMES_VIEW_STATS", "Statisztika megn�z�se");
define("_THEMES_FROM", "T�m�t�l");
define("_THEMES_TO", "T�m�ig");
define("_THEMES_DEFAULT", "Alap�rtelmezett");
define("_THEMES_TRANSFER_UPDATED", "Felhaszn�l�k friss�t�se!");
define("_THEMES_THEMES", "T�m�k");
define("_THEMES_ADV_OPTS", "Tov�bbi t�ma be�ll�t�sok");
define("_THEMES_ADV_COMP", "A t�ma megfelelt");
define("_THEMES_DEF_LOADED", "Alap�rtelmezett be�ll�t�sok bet�ltve.");
define("_THEMES_REST_DEF", "Alap�rtelmezett be�ll�t�sa");
define("_THEMES_NOT_COMPAT", "<font color='red'>A t�ma nem megfelel�</font><br />T�lts le t�m�t <a href='http://www.evo-hungary.hu/modules.php?name=Downloads3' target='_blank'><b>Evo-Hungary</b></a> oldal�r�l");
define("_THEMES_DEFAULT", "Alap�rtelmezett");
define("_THEMES_PREVIEW", "T�ma bemutat�");
define("_THEMES_INACTIVE", "Kikapcsolt t�ma");
define("_THEMES_QUNINSTALLED", "T�ma hozz�ad�sa");
define("_THEMES_USER_OPTIONS", "Felhaszn�l�k be�ll�t�sa");
define("_THEMES_USERID", "Tag sorsz�ma");
define("_THEMES_USERNAME", "Tag nick neve");
define("_THEMES_REALNAME", "Tag valodi neve");
define("_THEMES_USEREMAIL", "Tag Email cime");
define("_THEMES_FUNCTIONS", "T�ma funkci�k");
define("_THEMES_USERTHEME", "Tag t�m�ja");
define("_THEMES_PAGE_OF", "Oldal sz�ma");
define("_THEMES_PAGE_FIRST", "Oldal friss�t�se");
define("_THEMES_PAGE_PREVIOUS", "El�z� oldal");
define("_THEMES_PAGE_NEXT", "K�vetkez� oldal");
define("_THEMES_PAGE_LAST", "Utols� oldal oldal");
define("_NOREALNAME", "Nincs");
define("_THEMES_USER_RESET", "Alap �llapot");
define("_THEMES_USER_MODIFY", "Modos�t�s");
define("_THEMES_USER_SELECT", "V�lasztott t�ma");



/*****[END]********************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Advanced Security Code Control      v1.0.0 ]
 ******************************************************/
define("_USEGFXCHECK", "Biztons�gi k�d");
define("_GFXOPT", "Biztons�gi k�d be�ll�t�sok");
define("_GFX_NC","Nem n�zi");
define("_GFX_AC","Adminisztr�tor bel�p�sn�l");
define("_GFX_LC","Felhaszn�l� bel�p�sn�l");
define("_GFX_RC","�j felhaszn�l� bel�p�sn�l");
define("_GFX_CA","Felhaszn�l� bel�p�sn�l, �s �j felhaszn�l� bel�p�sn�l");
define("_GFX_AUC","Adminisztr�tor bel�p�sn�l,�s Felhaszn�l� bel�p�sn�l");
define("_GFX_ANC","Adminisztr�tor bel�p�sn�l,�s �j felhaszn�l� bel�p�sn�l");
define("_GFX_ALLC","Mindenki sz�m�ra (Admin �s felhaszn�l�)");
define("_GFX_CODESIZE","Karakterek sz�ma");
define("_GFX_CODEFONT","Bet�");
define("_FONTUPLOAD","Bet� hozz�ad�sa (ttf) felt�lt�se");
define("_GFX_USEIMAGE","H�tt�r megnyit�sa?");
define("_GFX_DEFAULTFONT","Alap�rtelmezett bet�");
/*****[END]********************************************
 [ Mod:    Advanced Security Code Control      v1.0.0 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Other:    Database Manager                  v2.0.0 ]
 ******************************************************/
define("_DATABASE", "Adatb�zis");
define("_ACTIONRESULTS", "Itt vannak az erdm�nyek");
define("_IMPORTSUCCESS","Import�l�s <em>%s</em> megt�rt�nt");
define("_CHECKALL","Mindet kijel�l");
define("_UNCHECKALL","Kijel�l�s megsz�ntet�se");
define("_SAVEDATABASE","DB ment�se");
define("_ANALYZEDATABASE","Analizis");
define("_CHECKDATABASE","Kijel�l");
define("_OPTIMIZEDATABASE","Optimaliz�l");
define("_REPAIRDATABASE","Jav�t");
define("_STATUSDATABASE","�llapot");
define("_BACKUPTASKS","Feladatok ment�se");
define("_SAVEDATA","Adatok ment�se");
define("_INCLUDESTATEMENT","Besz�mit�s %s �ll�t�s");
define("_GZIPCOMPRESS","GZIP t�m�r�t�s");
define("_OPTIMIZETEXT",'<strong>OPTIMIZE</strong></div><br /><div align="justify">Should be used if you have deleted a large part of a table or if you have made many changes to a table with variable-length rows (tables that have VARCHAR, BLOB, or TEXT columns). Deleted records are maintained in a linked list and subsequent INSERT operations reuse old record positions. You can use OPTIMIZE to reclaim the unused space and to defragment the datafile.<br />
In most setups you don\'t have to run OPTIMIZE at all. Even if you do a lot of updates to variable length rows it\'s not likely that you need to do this more than once a month/week and only on certain tables.</div><br />
OPTIMIZE works in the following way:<ul>
<li>If the table has deleted or split rows, repair the table.</li>
<li>If the index pages are not sorted, sort them.</li>
<li>If the statistics are not up to date (and the repair couldn\'t be done by sorting the index), update them.</li>
</ul><strong>Note:</strong> the table is locked during the time in which OPTIMIZE is running!');
define("_IMPORTFILE","SQL F�jlt felt�lt");
define("_IMPORTSQL", "Felt�lt�s");
define("_DBACTION", "Akci�");
/*****[END]********************************************
 [ Other:    Database Manager                  v2.0.0 ]
 ******************************************************/

/*--FNL--*/
/*****[BEGIN]******************************************
 [ Modules:  Fancy NewsLetter                  v2.5.0 ]
 ******************************************************/
define("_FANCYNL","Fancy H�rlev�l");
/*****[END]********************************************
 [ Modules:  Fancy NewsLetter                  v2.5.0 ]
 ******************************************************/

/*--CalendarMx--*/ 

/*****[BEGIN]******************************************
 [ Other:    System Info                       v1.0.0 ]
 ******************************************************/
 define("_PHP_MODULES", "PHP Modulok");
 define("_PHP_CORE", "PHP Magja");
 define("_PHP_ENVIRO", "PHP K�rnyezet");
 define("_PHP_VARS", "PHP V�ltoz�k");
 define("_SQL_SRV", "SQL Szerver");
 define("_INFO_GENERAL", "�lltal�nos");
/*****[END]********************************************
 [ Other:    System Info                       v1.0.0 ]
 ******************************************************/

define('_SMADM','Oldal t�rk�p');

define('_PSM_CLICK',' Er�sebb jelsz� el�r�s�hez,');
define('_PSM_HERE','kattints ide');		
define('_PSM_HELP',' (Segits�g)');
define('_PSM_NOTRATED','jelsz� er�ss�ge');

define('_MAILCONTENT','H�rlev�l tartalma');

/*****[BEGIN]******************************************
 [ Mod:     Lazy Google Tap                    v1.0.0 ]
 ******************************************************/ 
define('_LAZY_TAP','Letapogat�s');
define('_IMG_RESIZE','K�p m�retez�se:');
define('_IMG_WIDTH','K�p sz�less�ge:');
define('_COLLAPSE','Blokk enged�lyez�se');
define('_LAZY_TAP_OFF','Letapogat�s kikapcsolva ');
define('_LAZY_TAP_BOT','Letapogat�s keres�k');
define('_LAZY_TAP_EVERYONE','Letapogat�s');
define('_LAZY_TAP_ADMIN','Admin, �s keres�');
define('_COLLAPSE_TITLE','Sz�veg');
define('_COLLAPSE_ICON','Iconk�p');
/*****[END]********************************************
 [ Mod:     Lazy Google Tap                    v1.0.0 ]
 ******************************************************/ 
define('_SITEMAP_ADMIN_HEADER','Oldalt�rk�p Adminisztr�ci�');
define('_SITEMAP_RETURNMAIN','Vissza az Adminisztr�ci�hoz');
define('_SITEMAPADMIN','Oldalt�rk�p Adminisztr�ci�');
define('_XMLCREATE','H�rolvas� enged�lyez�se');
define('_NNEWS','H�rek');
define('_NTOPICS','F�rum H�rek');
define('_NDOWN','Let�lt�sek');
define('_NREV','Ismertet�');
define('_NUSER','Felhaszn�l�k');

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
define('_IMG_RESIZE','K�p m�retez�s');
define('_IMG_WIDTH','Max K�p Sz�less�g');
/*****[END]********************************************
 [ Mod:     Image Resize Mod                   v2.4.5 ]
 ******************************************************/ 

/*****[BEGIN]******************************************
 [ Base:    Switch Content Script              v2.0.0 ]
 ******************************************************/
define('_COLLAPSE','Blokk Enged�jez�se?');
define('_COLLAPSE_TITLE','Fejl�c');
define('_COLLAPSE_ICON','Icon');
/*****[END]********************************************
 [ Base:    Switch Content Script              v2.0.0 ]
 ******************************************************/ 

/*****[BEGIN]******************************************
 [ Base:    Blocks                             v.1.0.0]
 ******************************************************/
define('_BLOCK_ADMIN_HEADER', 'Nuke-Evolution Blokk :: Admin Fel�let');
define('_BLOCK_RETURNMAIN', 'Vissza Az Adminisztr�ci�ba');
define('_BLOCK_ADMIN_NOTE', 'Ha Itt Aktiv�lod, Vagy kikapcsolod a Blokkot <br />Ne Felejts El Friss�teni!');
define('_BLOCK_INACTIVE','A Blokk Nem Akt�v<br />(Dupl�n Kattints R� Az Aktiv�l�shoz/Kikapcsol�s�hoz)');
define('_BLOCK_LINK_DELETE','Blokk T�rl�se');
define('_BLOCK_TITLE','Fejl�c');
define('_BLOCK_EDIT','Szerkeszt�s');
/*****[END]********************************************
 [ Base:    Blocks                             v.1.0.0]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Modules                            v.1.0.0]
 ******************************************************/
define('_MOD_CAT_TITLE','Kategoria Fejl�ce');
define('_MOD_CAT_IMG','Kategoria K�p F�jl Neve');
define('_MOD_CAT_IMG_NOTE','<strong>�zenet:</strong> Kategoria K�p Heje <i>images/blocks/modules/</i> K�nyvt�r.');
define('_MOD_CAT_LINK_TITLE','Link Fejl�ce');
define('_MOD_CAT_EDIT','Kategoria Szerkeszt�se');
define('_MOD_INACTIVE','Modul Kikapcsolva<br />(Dupl�n Kattints Ide Az Aktiv�l�shoz/Kikapcsol�shoz)');
define('_MOD_LINK','link');
define('_MOD_LINK_DELETE','link T�rl�se');
define('_MOD_CAT_DELETE','Kategoria T�rl�se');
define('_MOD_CAT_ORDER','Kategoria V�ltoztat�sa');
define('_MOD_TITLE','Fejl�c');
define('_MOD_COLLAPSE','Aktiv�lod a Kategori�t?');
define('_MOD_EXPLAIN','Ha Itt Aktiv�lod, Vagy kikapcsolod a Modult <br />Ne Felejts El Friss�teni!');
define('_MOD_EXPLAIN2','Most <strong>KELL</strong> Kategoria V�ltoz�sok El�tt Mentened.<br />A V�ltoz�sok Nem Friss�ltek Automatikussan!');
define('_MOD_NF_VALUES','Could Not Get Values');
define('_MOD_ERROR_TITLE','V�lassz Fejl�cet, �s Linket');
define('_MOD_ERROR_GROUPS','V�lassz Csoportot');
define('_MOD_ERROR_CAT_NF','Nincs Ijen Kategoria');
/*****[BEGIN]******************************************
 [ Base:    Modules                            v.1.0.0]
 ******************************************************/

define('_TEXT_AREA', 'Text Area');

define("_SITECACHED", "Az oldal gyorsit�t�rral rendelkezik.");
define("_UPDATECACHE", "Kattints ide az oldal friss�t�s�hez.");
define("_AB_CURVER","Be�lit�sok");

?>
