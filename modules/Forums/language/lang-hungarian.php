<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

######################################################################
# Modulo Splatt Forum per PHP-NUKE
#-------------------------
# Versione: 3.2
#
#  by:
#
# Giorgio Ciranni (~Splatt~) (http://www.splatt.it) (webmaster@splatt.it)
#
#
# Supporto tecnico disponibile sul Forum di www.splatt.it
######################################################################
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License.
######################################################################

/*****************************************************/
/* Messaggi Modulo Forum
/*****************************************************/

global $sitename;
define("_CHARSET","ISO-8859-2");
define("_FORUM","Fórum");
define("_FORUMACC","Felhasználók");
define("_FORUMCONF","Beállítás");
define("_FORUMRANK","Rang");
define("_UNABLETOQUERY","Csatlakozás az adatbázishoz");
define("_TODAYIS","Ma ");
define("_LASTVISIT","utolsó látogatásod ideje: ");
define("_TYPES","Tulajdonságok");
define("_FTOPICS","Téma");
define("_FPOSTS","Üzenet");
define("_FLPOSTS","Utolsó üzenet");
define("_PMSG","Privát üzenetek");
define("_PINBOX","Bejövõ");
define("_LOGINTOR","Elõtte be kell jelentkezned, mielõtt olvasnád az üzeneteket.");
define("_FORUM","Fórum");
define("_FORUMACC","Felhasználók");
define("_FORUMCONF","Beállítás");
define("_FORUMRANK","Rang");
define("_UNABLETOQUERY","Csatlakozás az adatbázishoz");
define("_TODAYIS","Ma ");
define("_LASTVISIT","utolsó látogatásod ideje: ");
define("_TYPES","Tulajdonságok");
define("_FTOPICS","Téma");
define("_FPOSTS","Üzenet");
define("_FLPOSTS","Utolsó üzenet");
define("_PMSG","Privát üzenetek");
define("_PINBOX","Bejövõ");
define("_LOGINTOR","Elõtte be kell jelentkezned, mielõtt olvasnád az üzeneteket.");
define("_MORETHEN","Több mint");
define("_WRONGPASS","Hibás jelszó!");
define("_FNOMORE","Nincs több fórum.");
define("_FFMOD","Moderátor");
define("_FCOULDNOTINSERT","Hiba, adatbázis nem hozzáférhetõ! Elnézést a hibáért!");
define("_FPOSTCOUNT","Az üzenet számláló nem növekedett.");
define("_FPOSTED","Új üzenet elküldve!");
define("_FVIEW","Kérlek várj egy pár másodpercet vagy kattints ide.");
define("_YOUMUST","Új témát kell nyitnod, vagy válaszolnod kell egy üzenetre");
define("_POSTIN","Válasz: ");
define("_FCANWRITE","Nyithatsz új témát, vagy válaszolhatsz ebbe a fórumba");
define("_YOUNOT","Ide nem tudsz írni!");
define("_FBACK","Vissza");
define("_FNICKNAME","Becenév");
define("_FPASSWORD","Jelszó");
define("_FSUBJECT","Tárgy");
define("_FMESSAGE","Üzenet");
define("_FMICON","Üzenet ikon");
define("_FON","Be");
define("_FOFF","Ki");
define("_FOPTIONS","Beállítások");
define("_DISHTML","HTML nincs engedélyezve ebben az üzenetben");
define("_FDIS","Nincs engedélyezve.");
define("_FTHISMAIL","ebben az üzenetben");
define("_FSHOWSIG","Vállalat");
define("_WHATISSIG","That one is setup in the User Pages.");
define("_FNOTIFY","Értesíts e-mail-ben, ha válasz érkezik.(csak regisztrált felhasználóknak)");
define("_FPAGED","Oldalak");
define("_FAQOUTE","Idézet");
define("_FAUTHOR","Szerzõ");
define("_FGOTO","Menj az oldalra: ");
define("_FADMINT","Adminisztráció");
define("_LOCKTHIS","Téma zárása");
define("_UNLOCKTHIS","Téma nyitása");
define("_FMOVET","Téma mozgatása");
define("_FDELT","Téma megszakítva");
define("_FJOINED","Regisztrálva :");
define("_FAPOSTS","Üzenetek :");
define("_FFROM","Lakhely:");
define("_NOTREG","Felhasználó nincs regisztrálva");
define("_FTPOSTED","Elküldve");
define("_FAPROFIL","Profil");
define("_FAEMAIL","E-mail");
define("_FAADD","Küld");
define("_FAEDIT","Módosít");
define("_TREVIEW","Válasz megtekintése");
define("_ENM","olvas");
define("_FPAGES","oldalak");
define("_BENV","Üdvözlünk $sitename Fórumban");
define("_HEAD1","Itt megoszthatjátok egymással ötleteiteket és gondolataitokat.");
define("_HEAD2","Próbálj meg segíteni azoknak, akiknek erre szükségük van.");
define("_HEAD3","Szabadon hozzászolhattok mindenhez.");
define("_ERRORE1","Hiba!");
define("_FNOTA","Még ha a fórum elérhetõ Névtelen felhasználók számára is, kérlek <a href=\"modules.php?name=Your_Account\">Regisztrálj!</a>");
define("_ERRQUERY","az adatbázis lekérdezés alatt");
define("_FERRORE","HIBA!");
define("_FNONTUO","Nem tudod módosítani ezt az üzenetet.");
define("_NOPERMESS","Nincs jogod, hogy módosítsd ezt az üzenetet.");
define("_MODBY","Ezt az üzenetet módosította:");
define("_FIL","on");
define("_CHECKCONF","Nem tudtam csatlakozni az adatbázishoz, kérlek ellenõrizd a beállításokat.");
define("_PUPD","Az üzeneted sikeresen módosítva lett!");
define("_CLIKVUPD","Kattints ide, ha látni szeretnéd a módosított üzenetet.");
define("_CLIKRET","Kattints ide, ha vissza szeretnél kerülni a fórum kezdõoldalára..");
define("_POSTCANC","Küldés megszakítva.");
define("_CLIKRETL","Kattints ide, hogy visszatérj az üzenetek listájához.");
define("_MODPOST","Üzenet módosítása");
define("_FNICK","Becenév");
define("_FERRPASS","Rossz jelszót adtál meg vagy nincs jogod módosítnai ezt az üzenetet. Kérlek menj vissza, és írd be újra a jelszavadat.");
define("_MESSICON","Üzenet ikon");
define("_FMESS","Üzenetek!");
define("_FOPT","Beállítások");
define("_FDELP","Töröld ezt az üzenetet");
define("_FATTACT","Összes aktív téma");
define("_DISCTOT","Összes téma");
define("_FLEGEN","Jelmagyarázat");
define("_CLICONSMI","Kattints ide, ha az üzenetedbe <a href=\"bb_smilies.php\">Smiley-t</a> szeretnél beszúrni:<br>");
define("_CLIONBOT","Kattints ide, ha az üzenetedbe <a href=\"bbcode_ref.php\">BBCode-t</a> szeretnél beszúrni:<br><br>");
define("_FRICAV","Haladó keresés");
define("_FRESET","Alap");
define("_FCANC","Mégsem");
define("_FPMESS","Privát üzenetek");
define("_FNOPMSG","Nincs új Privát üzeneted.");
define("_FPROF","Profil");
define("_FPREVMSG","Elõzõ üzenet");
define("_FNEXMSG","Következõ üzenet");
define("_FLOKTOP","A moderátor lezárta ezt a témát, nem tudsz válaszolni.");
define("_NOTIFSUB","Valaki válaszolt az üzenetedre.");
define("_CIAO","Üdv");
define("_NOTIFM1","Azért kaptad ezt az e-mailt, mert valaki válaszolt az üzenetedre a $sitename-on, és te kérted");
define("_NOTIFM2"," hogy szóljunk ilyen esetekben.\r\n\r\nItt láthatod a témát: ");
define("_NOTIFM3","Vagy láthatod az oldalunkon itt: $sitename.");
define("_GRAZ","Köszönöm");
define("_APRSTAF","$sitename munkatárs");
define("_FKEY","Kulcsszó vagy Frázis");
define("_FSEANY","Szó (Alapértelmezett)");
define("_FSEAL","Frázis");
define("_SALF","Az összes fórumban");
define("_AUTN","Szerzõ neve");
define("_SORTBY","Rendezve");
define("_FPTIM","Küldés dátuma");
define("_FSEA","Én megpróbáltam!");
define("_FNOREC","Nem találtam megfelelõ bejegyzést. Menj vissza.");
define("_FFTOPIC","Téma");
define("_FPRAC","Privát fórum");
define("_FLIVAC","Hozzáférési szint módosítva");
define("_FADNAC","Hozzáférési szint hozzáadása");
define("_FADNUSAC","Add az új felhasználót ehhez a hozzáférési szinthez");
define("_FUT","Felhasználó");
define("_FUSID","Felhasználó Id");
define("_FCUSACL","Felhasználói szint beállítása");
define("_FWARDEL","FIGYELMEZTETÉS: Ki akarod törölni ezt a hozzáférési szintet. Biztos vagy benne?");
define("_FNO","Nem");
define("_FSI","Igen");
define("_FEDUSAC","Felhasználó hozzáférési szint módosítása");
define("_FADD","Hozzáad");
define("_FSAV","Ment");
define("_WARDELU","FIGYELMEZTETÉS: Ki akarod törölni ezt a felhasználói hozzáférési szintet. Biztos vagy benne?");
define("_FACNEG","HOZZÁFÉRÉS MEGTAGADVA!!!!");
define("_FCONF","Fórum beállítások");
define("_FALHTML","HTML aktiválása");
define("_FALBBC","BBCode aktiválása");
define("_FALSIGN","Aláírás aktiválása");
define("_FHOTOP","Heated Discussion Threshold");
define("_FPOSTP","Üzenet/Oldal");
define("_FMESSCO1","Üzenet/Oldal száma");
define("_FTOPPF","Téma/Fórum");
define("_FMESCO2","Téma/Fórum száma.");
define("_FSAVC","Beállítások mentése");
define("_FCATE","Fórum Kategóriák");
define("_FID","Id");
define("_FCAT","Kategóriák");
define("_FNUM","Fórum Száma");
define("_FEDFO","Fórum módosítás");
define("_FADDCAT","Kategória hozzáadása");
define("_FCATT","Kategória");
define("_FPRAT","Jelenleg a fórumban ");
define("_FNAME","Név");
define("_FDESCR","Leírás");
define("_FACCE","Hozzáférés");
define("_FTIPO","Típus");
define("_FANON","Névtelen");
define("_FMODERAM","Moderátor/Adminisztrátor");
define("_FPUBLIC","Nyilvános");
define("_FPRIVA","Privát");
define("_FADDMOR","Új hozzáadása ");
define("_FNONE","Senki");
define("_FPASSIF","Jelszó <i>(Személyes)</i>");
define("_FATTUA","Moderátor/i Aktiválás/i");
define("_NOMODSA","Nincs Moderátor kijelölve");
define("_WADELCAT","FIGYELMEZTETÉS: Ki akarsz törölni egy Kategóriát és az összes üzenetét, szeretnéd folytatni?");
define("_WADELFO","FIGYELMEZTETÉS: Ki akarsz törölni egy Fórumot és az összes üzenetét, szeretnéd folytatni?");
define("_FORANKSI","Rangsor szerinti Fórum Struktúra");
define("_FTITL","Fokozat");
define("_FMINPO","Min. Üzenet");
define("_FMAXPO","Max. Üzenet");
define("_FRANSP","Speciális rangsorolás");
define("_FADDNRAN","Hozzáad egy új rangsorolást");
define("_WADELRA","FIGYELMEZTETÉS: Biztos ki akarod törölni ezt a Rangsorolást?");
define("_FENTNIPAS","Kérlek írd be a felhasználói nevedet és jelszavadat");
define("_FTUNOMOD","Te nem vagy moderátor ebben a fórumban, nincs jogod végrehajtani ezt a parancsot!");
define("_ERRORPASS","HIBA: Rossz jelszót adtál meg! Menj vissza és próbáld meg újra.");
define("_FTOPDEL","A Téma törölve lett az adatbázisból.");
define("_FCLIKTORET","Kattints ide, ha vissza szeretnél térni a Fórumba");
define("_FTOPMOV","A Téma át lett mozgatva!");
define("_FTOPLOK","A Téma le van zárva!");
define("_FTOPSBLOK","A Téma meg van nyitva!");
define("_FUSIP","felhasználó témaszám és IP információ");
define("_FFUSIP","Felhasználó IP:");
define("_FREDVIS","Figyelmeztetés: ");
define("_FIDENTMOD","Úgy tûnik, te vagy a moderátora ennek a fórumnak!");
define("_FONCEDEL","Ha rákattintasz a gombra, a kiválasztott Téma és az összes üzenete törlõdni fog az adatbázisból.");
define("_FONCEMOV","Ha rákattintasz a gombra, a kiválasztott Téma és az összes üzenete átkerül a kiválasztott Fórumba.");
define("_FONCELOK","Ha rákattintasz a gombra, a kiválasztott Téma zárva lesz. Meg tudod nyitni bármikor.");
define("_FONCEUNLOK","Ha rákattintasz a gombra, a kiválasztott téma megnyílik és hozzáférhetõ lesz a felhasználók számára.");
define("_FMOVETO","Mozgasd a Témát: ");
define("_FVIEWIP","IP");
define("_FANONIMO","Névtelen");
define("_LOCALDATETIME","%d-%m-%Y at %H:%M");
//define("_BY","tól");
define("_WEEKDAYDATETIME","%A, %e-%m-%Y at %H:%M");

/* AGGIUNTE PER VERSIONE 2.1 */

define("_FINMSGH","Üzenet fejléc");
define("_FINMSGF","Üzenet lábléc");
define("_FNOTIF","Értesítés");
define("_FNOTMAIL","Értesítés e-mail");
define("_FINDNOT","Értesítés cím");
define("_POSTINN","Küldés: ");
define("_FOPTIO","Opcionális");
define("_FOPPR","Ha privát");

/* AGGIUNTE PER VERSIONE 2.1 by REFOSCO */

define("_FORUMPREF","Tulajdonságok");
define("_FORUMPREFDESC","általános beállítások, HTML, BBCode, Post for page, üzenet fejléc és lábléc, stb.");
define("_FORUMDESC","category gestion,  Fórum hozzáadás, módosítás és törlés");
define("_FORUMRANKDESC","fórum rendszer rangsorolása, hozzáadás, módosítás, rangsorolások törlése");
define("_FORUMACCDESC","users gestion, hozzáadás, módosítás, hozzáférési jogosultságok");
define("_FORUMMENU","Fórum Adminisztrációs Menü");
define("_EDITRANK","Rang módosítása");

/* AGGIUNTE PER GESTIONE ATTACHMENT */

define("_FORUMATCHM","Csatolások");
define("_FORUMENABLECOOKIE","Ha ezt szeretnéd használni, engedélyezni kell a sütiket a böngészõdben");
define("_FORUMCLOSE","Bezárás");
define("_FORUMATCHMERRINVFILETYPE","HIBA : ezt a file-t nem lehet csatolni");
define("_FORUMATCHMERRMAXSIZEREACH","HIBA : fileméret nagyobb, mint az engedélyezett");
define("_FORUMATCHMMODEINFO","Ha csatolni szeretnél egy file-t az üzenetedhez, kövesd a következõ utasításokat, ismételd meg, ha több file-t szeretnél beszúrni.<br>Végül, kattints az <B>OK</B>-ra, hogy visszatérj az üzenetedhez.");
define("_FORUMATCHMMODEINFO1","Kattints a <B>Browse</B>-ra, hogy kiválaszd a file-t<br> vagy írd be az elérési utat a következõ mezõben.");
define("_FORUMATCHMMODEINFO2","Mozgasd a file-t a mezõben,<B></B> kattints az <B>Attach</B>-ra. File átviteli idõ változó (egy pár másodperctõl egy pár percig is eltarthat).");
define("_FORUMATCHMMODEINFO2","Move the file in the field<B></B> clicking on <B>Attach</B>. File transfer times may vary (from a few seconds to a few minutes).");
define("_FORUMATCHMFINDFILE","Fájl keresése");
define("_FORUMATCHMUPLOAD"," Csatolás ");
define("_FORUMATCHMREMOVE","Töröl");
define("_FORUMATCHMEMPTY","-- Nincs csatolás --");
define("_FORUMATCHMTOTSIZE","Teljes méret");
define("_FORUMATCHMMAXSIZE","maximum");
define("_FORUMATCHMCANCEL","Mégsem");
define("_FORUMATCHMDELCONFIRM","Biztos törölni szeretnéd ezt a file-t?");
define("_FORUMATCHMDOWNFILE","Fájl letöltés");
define("_FORUMATCHMOPENFILE","Fájl megnyitás");
define("_FORUMATCHMCODE","(Nyomd meg a &lt;Csatolások&gt; gombot, hogy hozzáadd az üzenetedhez)");

/* AGGIUNTE VARIE 3.0 */

define("_RANKIM","Kép");
define("_NONE","Nincs");
define("_RANKIMB","(N.B. Képeknek ebben a könyvtárban kell lenniük:  <b>images/forum/special/</b>)");
define("_RANKIMD","jelenleg elérhetõ képek:");
define("_NONEPOST","Fórum Üres!");
define("_LASTENP","Utolsó tíz üzenet");

/* AGGIUNTE VARIE 3.1 */

define("_FDI","of");
define("_MAXUPFILE","Max csatolt file méret (Kb)");
define("_MAXFILE","Csatolások");
define("_INVIA","Küldés");
define("_RESETTA","Alap");
define("_CATORDE","Sorrend");
define("_CATUP","Mozgasd egy helyel fel");
define("_CATDOWN","Mozgasd egy helyel le");
define("_CATRESET","Alapbeállítások");
define("_FPAGE","Oldal");
define("_FUSDEL","A felhasználó nem található az adatbázisban");
define("_FNASCBS","Bal oldali blokk elrejtése");
define("_FVISBS","Bal oldali blokk mutatása");
define("_FULTM","Utolsó üzenetek ");
define("_FMPIUL","Több olvasott üzenet");
define("_FMEDRI","Átlagosan minden fórumban:");
define("_FRISPS","üzenet van");
define("_FCERCF","Keresés a Fórumban");
define("_FISCRIPT","*elsõ karakter nem elfogadott*");
define("_FINSCRIPT","*utolsó karakter nem elfogadott*");
define("_FHACK","<font color=\"#FF0000\"> *** TILTOTT KÓD BEILLESZTÉS - LEHET, HOGY EGY HACKER PRÓBÁLKOZOTT TÁMADÁSSAL! IP CÍM FELJEGYEZVE! *** </font>");

/* HELP SYSTEM */

define("_SFHS","Splatt Fórum Help System");
define("_HSH1","Kattints ide, és új üzenetet tudsz küldeni ebbe a fórumba.");
define("_HSH2","Kattints ide, és láthatod az utolsó üzenetet ebben a fórumban.");
define("_HSH3","Kattints ide, és a bal oldali blokk nélkül láthatod a fórumot. Ez a legjobb megoldás hogy egyszerûbbé tedd a navigálást");
define("_HSH4","Kattints ide, ha látni szeretnéd a bal oldali blokkot.");
define("_HSH5","Több mint tíz olvasott üzenet, láthatod hányszor olvasták õket.");
define("_HSH6","Az utolsó tíz üzenet a fórumban, idõrendi sorrendben.");
define("_HSH7","Itt láthatod milyen korlátozások vannak beállítva a fórumban.");

define("_LOCALDATE","%d-%m-%Y");

?>