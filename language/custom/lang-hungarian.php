<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       07/14/2005
      Admin File Check                         v2.0.0       08/27/2005
      Caching System                           v1.0.0       10/29/2005
-=[Mod]=-
      phpBB User Groups Integration            v1.0.0       08/26/2005
      Persistent Admin Login                   v2.0.0       12/10/2005
      Password Strength Meter                  v1.0.0       11/01/2005
-=[Block]=-
      Administration                           v1.0.0       07/01/2005
      Awaiting Submissions                     v1.0.0       07/14/2005
-=[Module]=-
      Supporters                               v1.3.0       07/14/2005
      Fancy NewsLetter                         v1.0.0       11/07/2005
-=[Other]=-
      URL Check                                v1.0.0       07/01/2005
      Need To Delete                           v1.0.0       08/01/2005
      Admin Password Confirm                   v1.0.0       08/02/2005
      Surveys Block (fix)                      v1.0.0       10/26/2005
      RSS Feeds (fix)                          v1.0.0       10/27/2005
 ************************************************************************/

/* Please put all your custom language or translations here */

/*****[BEGIN]******************************************
 [ Other:   Caching System                     v1.0.0 ]
 ******************************************************/
define("_CANNOTCHANGEMODE", "Nemtudod modósitani az alapértelmezett fájlt (%s)");
define("_CANNOTOPENFILE", "Nemlehet megnyitni a fájlt (%s)");
define("_CANNOTWRITETOFILE", "Nemlehet írni a fájlt (%s)");
define("_CANNOTCLOSEFILE", "Nemlehet lezárni a fájlt (%s)");
define("_SITECACHED", "Az oldal gyorsitótárral rendelkezik.");
define("_UPDATECACHE", "Kattints ide az oldal frissítéséhez.");
/*****[END]********************************************
 [ Other:   Caching System                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Nuke Patched                       v3.1.0 ]
 ******************************************************/
define("_ERRORINVEMAIL","ERROR: Nem valós Email");
/*****[END]********************************************
 [ Base:    Nuke Patched                       v3.1.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Persistent Admin Login             v2.0.0 ]
 ******************************************************/
define("_PERSISTENT","Automatikus beléptetés");
/*****[END]********************************************
 [ Mod:     Persistent Admin Login             v2.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     phpBB User Groups Integration      v1.0.0 ]
 ******************************************************/
define("_ADMINGROUPS","Csoport szerkesztése");
define("_MVGROUPS","Csak Csoport");
define("_MVSUBUSERS","Csak Elõfizetõ");
define("_WHATGRDESC","Csak Csoporttagsággal");
define("_WHATGROUPS","Melyik Csoport");
define("_GRMEMBERSHIPS","Csoport Tagság");
define("_GRNONE","Nem");
/*****[END]********************************************
 [ Mod:     phpBB User Groups Integration      v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Block:   Administration                     v1.0.0 ]
 ******************************************************/
define("_ADMIN_BLOCK_TITLE","Gyors Navigálás");
define("_ADMIN_BLOCK_NUKE","Admin [Nuke-Evo]");
define("_ADMIN_BLOCK_FORUMS","Admin [Fórum]");
define("_ADMIN_BLOCK_LOGOUT","Kilépés");
define("_ADMIN_BLOCK_SETTINGS","Beállítások");
define("_ADMIN_BLOCK_BLOCKS","Blokkok");
define("_ADMIN_BLOCK_MODULES","Modulok");
define("_ADMIN_BLOCK_CNBYA","Felhasználók");
define("_ADMIN_BLOCK_MSGS","Üzenetek");
define("_ADMIN_BLOCK_NEWS","Hírek");
define("_ADMIN_BLOCK_LOGIN","Admin Belépés");
define("_ADMIN_BLOCK_WHO_ONLINE","Jelenlegi Látógatok");
define("_ADMIN_BLOCK_OPTIMIZE_DB","Adatbázis");
define("_ADMIN_BLOCK_DOWNLOADS", "Letöltések");
define("_ADMIN_BLOCK_CLUBDOWNLOADS", "Club Letöltések");
define("_CACHE_ADMIN", "Gyorsítótár");
define("_CACHE_CLEAR", "Gyorsítótár törlése");
define("_ADMIN_ID","Admin ID:");
define("_ADMIN_PASS","Jelszó:");
define("_SYSTEM_NOTIFIER","Rendszer Üzenetek");


/*****[END]********************************************
 [ Block:   Administration                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
define("_URL_SLASH_ERR","Kérem törölni az / adatokat ");
define("_URL_HTTP_ERR","Kérem beírni http:// adatokat ");
define("_URL_NHTTP_ERR","Kérem törölni az http:// adatokat ");
define("_URL_PHP_ERR","Kérem törölni a fájl neve után ");
define("_URL_MODULE_FORUM_ERR","Kérem törölni a /modules/Forums végét ");
/*****[END]********************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Module:  Supporters                         v1.3.0 ]
 ******************************************************/
define("_WSUPPORT","Várakozó támogatók");
define("_DSUPPORT","Inaktív támogatók");
define("_ASUPPORT","Aktív támogatók");
/*****[END]********************************************
 [ Module:  Supporters                         v1.3.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Block:   Awaiting Submissions               v1.0.0 ]
 ******************************************************/
define("_STORIES", "Sztori");
define("_AWL","Web Link");
define("_ASUP","Támogató");
define("_AREV","Áttekintés");
define("_ABAN", "Szalagcím");
define("_ABANNERS", "Mûködõ Szalagcím");
define("_DBANNERS", "Nem mûködõ Szalagcím");
/*****[BEGIN]******************************************
 [ Block:  FNA                                v3.0.0 ]
 ******************************************************/
define("_FNA", "Fórum Hírek");
define("_FNATOPICS", "Várakozó Írás");
define("_FNAPOSTS", "Várakozó Posta");
define("_FNAUSERS", "Jóváhagyott Tagok");
/*****[END]********************************************
 [ Block:  FNA                                v3.0.0 ]
 ******************************************************/

/*****[END]********************************************
 [ Block:   Awaiting Submissions               v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/
define("_NEED_DELETE","Törölni kell");
/*****[END]********************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/
define("_PASS_CONFIRM","Jelszó ismétlése");
define("_ERROR","Hiba");
define("_PASS_NOT_MATCH","A jelszók nem eggyeznek");
/*****[END]********************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Validation                         v1.0.0 ]
 ******************************************************/
define("VALIDATE_ERROR","A %s beírás %s nem helyénvaló ");
define("VALIDATE_USERNAME","felhasználó név");
define("VALIDATE_TEXT","text");
define("VALIDATE_FULLNAME","teljes név");
define("VALIDATE_NUMBER","szám");
define("VALIDATE_EMAIL","email");
define("VALIDATE_URL","URL");
define("VALIDATE_SHORT","rövid");
define("VALIDATE_LONG","hosszú");
define("VALIDATE_SMALL","kevés");
define("VALIDATE_BIG","sok");
define("VALIDATE_TEXT_SIZE","A %s beírás %s nem helyénvaló<br />itt csak %s karakterek");
define("VALIDATE_NUMBER_SIZE","A %s nem helyénvaló %s nem jó<br />itt csak %s");
define("VALIDATE_WORD","A beírás megtalálható %s nem elfogadott");
/*****[END]********************************************
 [ Other:  Validation                          v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Password Strength Meter            v1.0.0 ]
 ******************************************************/
define("PSM_HELP_TITLE","Jelszó állomány Help");
define("PSM_NOTRATED","Jelszó Mérõ");
define("PSM_WEAK","Gyenge");
define("PSM_MED","Közepes");
define("PSM_STRONG","Erõs");
define("PSM_STRONGER","Erõsebb");
define("PSM_STRONGEST","Nagyon erõs");
/*****[END]********************************************
 [ Mod:     Password Strength Meter            v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Module:  Fancy NewsLetter                   v1.0.0 ]
 ******************************************************/
define("_FNL_BLOCK_MUST_BE_LOGGED_IN","Be kell jelentkezni a levél küldéséhez");
define("_FNL_BLOCK_ERR01","Hibás levél beállítások");
define("_FNL_BLOCK_OPTIN","Kattints <a href='modules.php?name=Fancy_NewsLetter&amp;file=optin'>ide</a> a levél elküldéséhez");
define("_FNL_BLOCK_OPTOUT","Kattints <a href='modules.php?name=Fancy_NewsLetter&amp;file=optout'>ide</a> a levél nem lessz elküldve");
/*****[END]********************************************
 [ Module:  Fancy NewsLetter                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Surveys Block                      v1.0.0 ]
 ******************************************************/
define("_NOSURVEYS", "Nincs szavazás!");
/*****[END]********************************************
 [ Other:   Surveys Block                      v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   RSS Feeds                          v1.0.0 ]
 ******************************************************/
define("_NORSS", "Az RSS fájl nem létezik!");
/*****[END]********************************************
 [ Other:   RSS Feeds                          v1.0.0 ]
 ******************************************************/

define('_QUERIES','Lekérdezés:');
define('_DB_TIME','Adatbázis elérési Idõ:');
define('_PAGEFOOTER','[ '._PAGEGENERATION.' %s '._SECONDS.' | '._QUERIES.' %s ]');
define("_AB_CURVER","Beálitások");

?>