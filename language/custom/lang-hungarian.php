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
define("_CANNOTCHANGEMODE", "Nemtudod mod�sitani az alap�rtelmezett f�jlt (%s)");
define("_CANNOTOPENFILE", "Nemlehet megnyitni a f�jlt (%s)");
define("_CANNOTWRITETOFILE", "Nemlehet �rni a f�jlt (%s)");
define("_CANNOTCLOSEFILE", "Nemlehet lez�rni a f�jlt (%s)");
define("_SITECACHED", "Az oldal gyorsit�t�rral rendelkezik.");
define("_UPDATECACHE", "Kattints ide az oldal friss�t�s�hez.");
/*****[END]********************************************
 [ Other:   Caching System                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Base:    Nuke Patched                       v3.1.0 ]
 ******************************************************/
define("_ERRORINVEMAIL","ERROR: Nem val�s Email");
/*****[END]********************************************
 [ Base:    Nuke Patched                       v3.1.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Persistent Admin Login             v2.0.0 ]
 ******************************************************/
define("_PERSISTENT","Automatikus bel�ptet�s");
/*****[END]********************************************
 [ Mod:     Persistent Admin Login             v2.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     phpBB User Groups Integration      v1.0.0 ]
 ******************************************************/
define("_ADMINGROUPS","Csoport szerkeszt�se");
define("_MVGROUPS","Csak Csoport");
define("_MVSUBUSERS","Csak El�fizet�");
define("_WHATGRDESC","Csak Csoporttags�ggal");
define("_WHATGROUPS","Melyik Csoport");
define("_GRMEMBERSHIPS","Csoport Tags�g");
define("_GRNONE","Nem");
/*****[END]********************************************
 [ Mod:     phpBB User Groups Integration      v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Block:   Administration                     v1.0.0 ]
 ******************************************************/
define("_ADMIN_BLOCK_TITLE","Gyors Navig�l�s");
define("_ADMIN_BLOCK_NUKE","Admin [Nuke-Evo]");
define("_ADMIN_BLOCK_FORUMS","Admin [F�rum]");
define("_ADMIN_BLOCK_LOGOUT","Kil�p�s");
define("_ADMIN_BLOCK_SETTINGS","Be�ll�t�sok");
define("_ADMIN_BLOCK_BLOCKS","Blokkok");
define("_ADMIN_BLOCK_MODULES","Modulok");
define("_ADMIN_BLOCK_CNBYA","Felhaszn�l�k");
define("_ADMIN_BLOCK_MSGS","�zenetek");
define("_ADMIN_BLOCK_NEWS","H�rek");
define("_ADMIN_BLOCK_LOGIN","Admin Bel�p�s");
define("_ADMIN_BLOCK_WHO_ONLINE","Jelenlegi L�t�gatok");
define("_ADMIN_BLOCK_OPTIMIZE_DB","Adatb�zis");
define("_ADMIN_BLOCK_DOWNLOADS", "Let�lt�sek");
define("_ADMIN_BLOCK_CLUBDOWNLOADS", "Club Let�lt�sek");
define("_CACHE_ADMIN", "Gyors�t�t�r");
define("_CACHE_CLEAR", "Gyors�t�t�r t�rl�se");
define("_ADMIN_ID","Admin ID:");
define("_ADMIN_PASS","Jelsz�:");
define("_SYSTEM_NOTIFIER","Rendszer �zenetek");


/*****[END]********************************************
 [ Block:   Administration                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/
define("_URL_SLASH_ERR","K�rem t�r�lni az / adatokat ");
define("_URL_HTTP_ERR","K�rem be�rni http:// adatokat ");
define("_URL_NHTTP_ERR","K�rem t�r�lni az http:// adatokat ");
define("_URL_PHP_ERR","K�rem t�r�lni a f�jl neve ut�n ");
define("_URL_MODULE_FORUM_ERR","K�rem t�r�lni a /modules/Forums v�g�t ");
/*****[END]********************************************
 [ Other:   URL Check                          v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Module:  Supporters                         v1.3.0 ]
 ******************************************************/
define("_WSUPPORT","V�rakoz� t�mogat�k");
define("_DSUPPORT","Inakt�v t�mogat�k");
define("_ASUPPORT","Akt�v t�mogat�k");
/*****[END]********************************************
 [ Module:  Supporters                         v1.3.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Block:   Awaiting Submissions               v1.0.0 ]
 ******************************************************/
define("_STORIES", "Sztori");
define("_AWL","Web Link");
define("_ASUP","T�mogat�");
define("_AREV","�ttekint�s");
define("_ABAN", "Szalagc�m");
define("_ABANNERS", "M�k�d� Szalagc�m");
define("_DBANNERS", "Nem m�k�d� Szalagc�m");
/*****[BEGIN]******************************************
 [ Block:  FNA                                v3.0.0 ]
 ******************************************************/
define("_FNA", "F�rum H�rek");
define("_FNATOPICS", "V�rakoz� �r�s");
define("_FNAPOSTS", "V�rakoz� Posta");
define("_FNAUSERS", "J�v�hagyott Tagok");
/*****[END]********************************************
 [ Block:  FNA                                v3.0.0 ]
 ******************************************************/

/*****[END]********************************************
 [ Block:   Awaiting Submissions               v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/
define("_NEED_DELETE","T�r�lni kell");
/*****[END]********************************************
 [ Other:   Need To Delete                     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/
define("_PASS_CONFIRM","Jelsz� ism�tl�se");
define("_ERROR","Hiba");
define("_PASS_NOT_MATCH","A jelsz�k nem eggyeznek");
/*****[END]********************************************
 [ Other:   Admin Password Confirm             v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Validation                         v1.0.0 ]
 ******************************************************/
define("VALIDATE_ERROR","A %s be�r�s %s nem hely�nval� ");
define("VALIDATE_USERNAME","felhaszn�l� n�v");
define("VALIDATE_TEXT","text");
define("VALIDATE_FULLNAME","teljes n�v");
define("VALIDATE_NUMBER","sz�m");
define("VALIDATE_EMAIL","email");
define("VALIDATE_URL","URL");
define("VALIDATE_SHORT","r�vid");
define("VALIDATE_LONG","hossz�");
define("VALIDATE_SMALL","kev�s");
define("VALIDATE_BIG","sok");
define("VALIDATE_TEXT_SIZE","A %s be�r�s %s nem hely�nval�<br />itt csak %s karakterek");
define("VALIDATE_NUMBER_SIZE","A %s nem hely�nval� %s nem j�<br />itt csak %s");
define("VALIDATE_WORD","A be�r�s megtal�lhat� %s nem elfogadott");
/*****[END]********************************************
 [ Other:  Validation                          v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Password Strength Meter            v1.0.0 ]
 ******************************************************/
define("PSM_HELP_TITLE","Jelsz� �llom�ny Help");
define("PSM_NOTRATED","Jelsz� M�r�");
define("PSM_WEAK","Gyenge");
define("PSM_MED","K�zepes");
define("PSM_STRONG","Er�s");
define("PSM_STRONGER","Er�sebb");
define("PSM_STRONGEST","Nagyon er�s");
/*****[END]********************************************
 [ Mod:     Password Strength Meter            v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Module:  Fancy NewsLetter                   v1.0.0 ]
 ******************************************************/
define("_FNL_BLOCK_MUST_BE_LOGGED_IN","Be kell jelentkezni a lev�l k�ld�s�hez");
define("_FNL_BLOCK_ERR01","Hib�s lev�l be�ll�t�sok");
define("_FNL_BLOCK_OPTIN","Kattints <a href='modules.php?name=Fancy_NewsLetter&amp;file=optin'>ide</a> a lev�l elk�ld�s�hez");
define("_FNL_BLOCK_OPTOUT","Kattints <a href='modules.php?name=Fancy_NewsLetter&amp;file=optout'>ide</a> a lev�l nem lessz elk�ldve");
/*****[END]********************************************
 [ Module:  Fancy NewsLetter                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   Surveys Block                      v1.0.0 ]
 ******************************************************/
define("_NOSURVEYS", "Nincs szavaz�s!");
/*****[END]********************************************
 [ Other:   Surveys Block                      v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:   RSS Feeds                          v1.0.0 ]
 ******************************************************/
define("_NORSS", "Az RSS f�jl nem l�tezik!");
/*****[END]********************************************
 [ Other:   RSS Feeds                          v1.0.0 ]
 ******************************************************/

define('_QUERIES','Lek�rdez�s:');
define('_DB_TIME','Adatb�zis el�r�si Id�:');
define('_PAGEFOOTER','[ '._PAGEGENERATION.' %s '._SECONDS.' | '._QUERIES.' %s ]');
define("_AB_CURVER","Be�lit�sok");

?>