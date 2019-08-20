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
define("_FORUM","F�rum");
define("_FORUMACC","Felhaszn�l�k");
define("_FORUMCONF","Be�ll�t�s");
define("_FORUMRANK","Rang");
define("_UNABLETOQUERY","Csatlakoz�s az adatb�zishoz");
define("_TODAYIS","Ma ");
define("_LASTVISIT","utols� l�togat�sod ideje: ");
define("_TYPES","Tulajdons�gok");
define("_FTOPICS","T�ma");
define("_FPOSTS","�zenet");
define("_FLPOSTS","Utols� �zenet");
define("_PMSG","Priv�t �zenetek");
define("_PINBOX","Bej�v�");
define("_LOGINTOR","El�tte be kell jelentkezned, miel�tt olvasn�d az �zeneteket.");
define("_FORUM","F�rum");
define("_FORUMACC","Felhaszn�l�k");
define("_FORUMCONF","Be�ll�t�s");
define("_FORUMRANK","Rang");
define("_UNABLETOQUERY","Csatlakoz�s az adatb�zishoz");
define("_TODAYIS","Ma ");
define("_LASTVISIT","utols� l�togat�sod ideje: ");
define("_TYPES","Tulajdons�gok");
define("_FTOPICS","T�ma");
define("_FPOSTS","�zenet");
define("_FLPOSTS","Utols� �zenet");
define("_PMSG","Priv�t �zenetek");
define("_PINBOX","Bej�v�");
define("_LOGINTOR","El�tte be kell jelentkezned, miel�tt olvasn�d az �zeneteket.");
define("_MORETHEN","T�bb mint");
define("_WRONGPASS","Hib�s jelsz�!");
define("_FNOMORE","Nincs t�bb f�rum.");
define("_FFMOD","Moder�tor");
define("_FCOULDNOTINSERT","Hiba, adatb�zis nem hozz�f�rhet�! Eln�z�st a hib��rt!");
define("_FPOSTCOUNT","Az �zenet sz�ml�l� nem n�vekedett.");
define("_FPOSTED","�j �zenet elk�ldve!");
define("_FVIEW","K�rlek v�rj egy p�r m�sodpercet vagy kattints ide.");
define("_YOUMUST","�j t�m�t kell nyitnod, vagy v�laszolnod kell egy �zenetre");
define("_POSTIN","V�lasz: ");
define("_FCANWRITE","Nyithatsz �j t�m�t, vagy v�laszolhatsz ebbe a f�rumba");
define("_YOUNOT","Ide nem tudsz �rni!");
define("_FBACK","Vissza");
define("_FNICKNAME","Becen�v");
define("_FPASSWORD","Jelsz�");
define("_FSUBJECT","T�rgy");
define("_FMESSAGE","�zenet");
define("_FMICON","�zenet ikon");
define("_FON","Be");
define("_FOFF","Ki");
define("_FOPTIONS","Be�ll�t�sok");
define("_DISHTML","HTML nincs enged�lyezve ebben az �zenetben");
define("_FDIS","Nincs enged�lyezve.");
define("_FTHISMAIL","ebben az �zenetben");
define("_FSHOWSIG","V�llalat");
define("_WHATISSIG","That one is setup in the User Pages.");
define("_FNOTIFY","�rtes�ts e-mail-ben, ha v�lasz �rkezik.(csak regisztr�lt felhaszn�l�knak)");
define("_FPAGED","Oldalak");
define("_FAQOUTE","Id�zet");
define("_FAUTHOR","Szerz�");
define("_FGOTO","Menj az oldalra: ");
define("_FADMINT","Adminisztr�ci�");
define("_LOCKTHIS","T�ma z�r�sa");
define("_UNLOCKTHIS","T�ma nyit�sa");
define("_FMOVET","T�ma mozgat�sa");
define("_FDELT","T�ma megszak�tva");
define("_FJOINED","Regisztr�lva :");
define("_FAPOSTS","�zenetek :");
define("_FFROM","Lakhely:");
define("_NOTREG","Felhaszn�l� nincs regisztr�lva");
define("_FTPOSTED","Elk�ldve");
define("_FAPROFIL","Profil");
define("_FAEMAIL","E-mail");
define("_FAADD","K�ld");
define("_FAEDIT","M�dos�t");
define("_TREVIEW","V�lasz megtekint�se");
define("_ENM","olvas");
define("_FPAGES","oldalak");
define("_BENV","�dv�zl�nk $sitename F�rumban");
define("_HEAD1","Itt megoszthatj�tok egym�ssal �tleteiteket �s gondolataitokat.");
define("_HEAD2","Pr�b�lj meg seg�teni azoknak, akiknek erre sz�ks�g�k van.");
define("_HEAD3","Szabadon hozz�szolhattok mindenhez.");
define("_ERRORE1","Hiba!");
define("_FNOTA","M�g ha a f�rum el�rhet� N�vtelen felhaszn�l�k sz�m�ra is, k�rlek <a href=\"modules.php?name=Your_Account\">Regisztr�lj!</a>");
define("_ERRQUERY","az adatb�zis lek�rdez�s alatt");
define("_FERRORE","HIBA!");
define("_FNONTUO","Nem tudod m�dos�tani ezt az �zenetet.");
define("_NOPERMESS","Nincs jogod, hogy m�dos�tsd ezt az �zenetet.");
define("_MODBY","Ezt az �zenetet m�dos�totta:");
define("_FIL","on");
define("_CHECKCONF","Nem tudtam csatlakozni az adatb�zishoz, k�rlek ellen�rizd a be�ll�t�sokat.");
define("_PUPD","Az �zeneted sikeresen m�dos�tva lett!");
define("_CLIKVUPD","Kattints ide, ha l�tni szeretn�d a m�dos�tott �zenetet.");
define("_CLIKRET","Kattints ide, ha vissza szeretn�l ker�lni a f�rum kezd�oldal�ra..");
define("_POSTCANC","K�ld�s megszak�tva.");
define("_CLIKRETL","Kattints ide, hogy visszat�rj az �zenetek list�j�hoz.");
define("_MODPOST","�zenet m�dos�t�sa");
define("_FNICK","Becen�v");
define("_FERRPASS","Rossz jelsz�t adt�l meg vagy nincs jogod m�dos�tnai ezt az �zenetet. K�rlek menj vissza, �s �rd be �jra a jelszavadat.");
define("_MESSICON","�zenet ikon");
define("_FMESS","�zenetek!");
define("_FOPT","Be�ll�t�sok");
define("_FDELP","T�r�ld ezt az �zenetet");
define("_FATTACT","�sszes akt�v t�ma");
define("_DISCTOT","�sszes t�ma");
define("_FLEGEN","Jelmagyar�zat");
define("_CLICONSMI","Kattints ide, ha az �zenetedbe <a href=\"bb_smilies.php\">Smiley-t</a> szeretn�l besz�rni:<br>");
define("_CLIONBOT","Kattints ide, ha az �zenetedbe <a href=\"bbcode_ref.php\">BBCode-t</a> szeretn�l besz�rni:<br><br>");
define("_FRICAV","Halad� keres�s");
define("_FRESET","Alap");
define("_FCANC","M�gsem");
define("_FPMESS","Priv�t �zenetek");
define("_FNOPMSG","Nincs �j Priv�t �zeneted.");
define("_FPROF","Profil");
define("_FPREVMSG","El�z� �zenet");
define("_FNEXMSG","K�vetkez� �zenet");
define("_FLOKTOP","A moder�tor lez�rta ezt a t�m�t, nem tudsz v�laszolni.");
define("_NOTIFSUB","Valaki v�laszolt az �zenetedre.");
define("_CIAO","�dv");
define("_NOTIFM1","Az�rt kaptad ezt az e-mailt, mert valaki v�laszolt az �zenetedre a $sitename-on, �s te k�rted");
define("_NOTIFM2"," hogy sz�ljunk ilyen esetekben.\r\n\r\nItt l�thatod a t�m�t: ");
define("_NOTIFM3","Vagy l�thatod az oldalunkon itt: $sitename.");
define("_GRAZ","K�sz�n�m");
define("_APRSTAF","$sitename munkat�rs");
define("_FKEY","Kulcssz� vagy Fr�zis");
define("_FSEANY","Sz� (Alap�rtelmezett)");
define("_FSEAL","Fr�zis");
define("_SALF","Az �sszes f�rumban");
define("_AUTN","Szerz� neve");
define("_SORTBY","Rendezve");
define("_FPTIM","K�ld�s d�tuma");
define("_FSEA","�n megpr�b�ltam!");
define("_FNOREC","Nem tal�ltam megfelel� bejegyz�st. Menj vissza.");
define("_FFTOPIC","T�ma");
define("_FPRAC","Priv�t f�rum");
define("_FLIVAC","Hozz�f�r�si szint m�dos�tva");
define("_FADNAC","Hozz�f�r�si szint hozz�ad�sa");
define("_FADNUSAC","Add az �j felhaszn�l�t ehhez a hozz�f�r�si szinthez");
define("_FUT","Felhaszn�l�");
define("_FUSID","Felhaszn�l� Id");
define("_FCUSACL","Felhaszn�l�i szint be�ll�t�sa");
define("_FWARDEL","FIGYELMEZTET�S: Ki akarod t�r�lni ezt a hozz�f�r�si szintet. Biztos vagy benne?");
define("_FNO","Nem");
define("_FSI","Igen");
define("_FEDUSAC","Felhaszn�l� hozz�f�r�si szint m�dos�t�sa");
define("_FADD","Hozz�ad");
define("_FSAV","Ment");
define("_WARDELU","FIGYELMEZTET�S: Ki akarod t�r�lni ezt a felhaszn�l�i hozz�f�r�si szintet. Biztos vagy benne?");
define("_FACNEG","HOZZ�F�R�S MEGTAGADVA!!!!");
define("_FCONF","F�rum be�ll�t�sok");
define("_FALHTML","HTML aktiv�l�sa");
define("_FALBBC","BBCode aktiv�l�sa");
define("_FALSIGN","Al��r�s aktiv�l�sa");
define("_FHOTOP","Heated Discussion Threshold");
define("_FPOSTP","�zenet/Oldal");
define("_FMESSCO1","�zenet/Oldal sz�ma");
define("_FTOPPF","T�ma/F�rum");
define("_FMESCO2","T�ma/F�rum sz�ma.");
define("_FSAVC","Be�ll�t�sok ment�se");
define("_FCATE","F�rum Kateg�ri�k");
define("_FID","Id");
define("_FCAT","Kateg�ri�k");
define("_FNUM","F�rum Sz�ma");
define("_FEDFO","F�rum m�dos�t�s");
define("_FADDCAT","Kateg�ria hozz�ad�sa");
define("_FCATT","Kateg�ria");
define("_FPRAT","Jelenleg a f�rumban ");
define("_FNAME","N�v");
define("_FDESCR","Le�r�s");
define("_FACCE","Hozz�f�r�s");
define("_FTIPO","T�pus");
define("_FANON","N�vtelen");
define("_FMODERAM","Moder�tor/Adminisztr�tor");
define("_FPUBLIC","Nyilv�nos");
define("_FPRIVA","Priv�t");
define("_FADDMOR","�j hozz�ad�sa ");
define("_FNONE","Senki");
define("_FPASSIF","Jelsz� <i>(Szem�lyes)</i>");
define("_FATTUA","Moder�tor/i Aktiv�l�s/i");
define("_NOMODSA","Nincs Moder�tor kijel�lve");
define("_WADELCAT","FIGYELMEZTET�S: Ki akarsz t�r�lni egy Kateg�ri�t �s az �sszes �zenet�t, szeretn�d folytatni?");
define("_WADELFO","FIGYELMEZTET�S: Ki akarsz t�r�lni egy F�rumot �s az �sszes �zenet�t, szeretn�d folytatni?");
define("_FORANKSI","Rangsor szerinti F�rum Strukt�ra");
define("_FTITL","Fokozat");
define("_FMINPO","Min. �zenet");
define("_FMAXPO","Max. �zenet");
define("_FRANSP","Speci�lis rangsorol�s");
define("_FADDNRAN","Hozz�ad egy �j rangsorol�st");
define("_WADELRA","FIGYELMEZTET�S: Biztos ki akarod t�r�lni ezt a Rangsorol�st?");
define("_FENTNIPAS","K�rlek �rd be a felhaszn�l�i nevedet �s jelszavadat");
define("_FTUNOMOD","Te nem vagy moder�tor ebben a f�rumban, nincs jogod v�grehajtani ezt a parancsot!");
define("_ERRORPASS","HIBA: Rossz jelsz�t adt�l meg! Menj vissza �s pr�b�ld meg �jra.");
define("_FTOPDEL","A T�ma t�r�lve lett az adatb�zisb�l.");
define("_FCLIKTORET","Kattints ide, ha vissza szeretn�l t�rni a F�rumba");
define("_FTOPMOV","A T�ma �t lett mozgatva!");
define("_FTOPLOK","A T�ma le van z�rva!");
define("_FTOPSBLOK","A T�ma meg van nyitva!");
define("_FUSIP","felhaszn�l� t�masz�m �s IP inform�ci�");
define("_FFUSIP","Felhaszn�l� IP:");
define("_FREDVIS","Figyelmeztet�s: ");
define("_FIDENTMOD","�gy t�nik, te vagy a moder�tora ennek a f�rumnak!");
define("_FONCEDEL","Ha r�kattintasz a gombra, a kiv�lasztott T�ma �s az �sszes �zenete t�rl�dni fog az adatb�zisb�l.");
define("_FONCEMOV","Ha r�kattintasz a gombra, a kiv�lasztott T�ma �s az �sszes �zenete �tker�l a kiv�lasztott F�rumba.");
define("_FONCELOK","Ha r�kattintasz a gombra, a kiv�lasztott T�ma z�rva lesz. Meg tudod nyitni b�rmikor.");
define("_FONCEUNLOK","Ha r�kattintasz a gombra, a kiv�lasztott t�ma megny�lik �s hozz�f�rhet� lesz a felhaszn�l�k sz�m�ra.");
define("_FMOVETO","Mozgasd a T�m�t: ");
define("_FVIEWIP","IP");
define("_FANONIMO","N�vtelen");
define("_LOCALDATETIME","%d-%m-%Y at %H:%M");
//define("_BY","t�l");
define("_WEEKDAYDATETIME","%A, %e-%m-%Y at %H:%M");

/* AGGIUNTE PER VERSIONE 2.1 */

define("_FINMSGH","�zenet fejl�c");
define("_FINMSGF","�zenet l�bl�c");
define("_FNOTIF","�rtes�t�s");
define("_FNOTMAIL","�rtes�t�s e-mail");
define("_FINDNOT","�rtes�t�s c�m");
define("_POSTINN","K�ld�s: ");
define("_FOPTIO","Opcion�lis");
define("_FOPPR","Ha priv�t");

/* AGGIUNTE PER VERSIONE 2.1 by REFOSCO */

define("_FORUMPREF","Tulajdons�gok");
define("_FORUMPREFDESC","�ltal�nos be�ll�t�sok, HTML, BBCode, Post for page, �zenet fejl�c �s l�bl�c, stb.");
define("_FORUMDESC","category gestion,  F�rum hozz�ad�s, m�dos�t�s �s t�rl�s");
define("_FORUMRANKDESC","f�rum rendszer rangsorol�sa, hozz�ad�s, m�dos�t�s, rangsorol�sok t�rl�se");
define("_FORUMACCDESC","users gestion, hozz�ad�s, m�dos�t�s, hozz�f�r�si jogosults�gok");
define("_FORUMMENU","F�rum Adminisztr�ci�s Men�");
define("_EDITRANK","Rang m�dos�t�sa");

/* AGGIUNTE PER GESTIONE ATTACHMENT */

define("_FORUMATCHM","Csatol�sok");
define("_FORUMENABLECOOKIE","Ha ezt szeretn�d haszn�lni, enged�lyezni kell a s�tiket a b�ng�sz�dben");
define("_FORUMCLOSE","Bez�r�s");
define("_FORUMATCHMERRINVFILETYPE","HIBA : ezt a file-t nem lehet csatolni");
define("_FORUMATCHMERRMAXSIZEREACH","HIBA : filem�ret nagyobb, mint az enged�lyezett");
define("_FORUMATCHMMODEINFO","Ha csatolni szeretn�l egy file-t az �zenetedhez, k�vesd a k�vetkez� utas�t�sokat, ism�teld meg, ha t�bb file-t szeretn�l besz�rni.<br>V�g�l, kattints az <B>OK</B>-ra, hogy visszat�rj az �zenetedhez.");
define("_FORUMATCHMMODEINFO1","Kattints a <B>Browse</B>-ra, hogy kiv�laszd a file-t<br> vagy �rd be az el�r�si utat a k�vetkez� mez�ben.");
define("_FORUMATCHMMODEINFO2","Mozgasd a file-t a mez�ben,<B></B> kattints az <B>Attach</B>-ra. File �tviteli id� v�ltoz� (egy p�r m�sodperct�l egy p�r percig is eltarthat).");
define("_FORUMATCHMMODEINFO2","Move the file in the field<B></B> clicking on <B>Attach</B>. File transfer times may vary (from a few seconds to a few minutes).");
define("_FORUMATCHMFINDFILE","F�jl keres�se");
define("_FORUMATCHMUPLOAD"," Csatol�s ");
define("_FORUMATCHMREMOVE","T�r�l");
define("_FORUMATCHMEMPTY","-- Nincs csatol�s --");
define("_FORUMATCHMTOTSIZE","Teljes m�ret");
define("_FORUMATCHMMAXSIZE","maximum");
define("_FORUMATCHMCANCEL","M�gsem");
define("_FORUMATCHMDELCONFIRM","Biztos t�r�lni szeretn�d ezt a file-t?");
define("_FORUMATCHMDOWNFILE","F�jl let�lt�s");
define("_FORUMATCHMOPENFILE","F�jl megnyit�s");
define("_FORUMATCHMCODE","(Nyomd meg a &lt;Csatol�sok&gt; gombot, hogy hozz�add az �zenetedhez)");

/* AGGIUNTE VARIE 3.0 */

define("_RANKIM","K�p");
define("_NONE","Nincs");
define("_RANKIMB","(N.B. K�peknek ebben a k�nyvt�rban kell lenni�k:  <b>images/forum/special/</b>)");
define("_RANKIMD","jelenleg el�rhet� k�pek:");
define("_NONEPOST","F�rum �res!");
define("_LASTENP","Utols� t�z �zenet");

/* AGGIUNTE VARIE 3.1 */

define("_FDI","of");
define("_MAXUPFILE","Max csatolt file m�ret (Kb)");
define("_MAXFILE","Csatol�sok");
define("_INVIA","K�ld�s");
define("_RESETTA","Alap");
define("_CATORDE","Sorrend");
define("_CATUP","Mozgasd egy helyel fel");
define("_CATDOWN","Mozgasd egy helyel le");
define("_CATRESET","Alapbe�ll�t�sok");
define("_FPAGE","Oldal");
define("_FUSDEL","A felhaszn�l� nem tal�lhat� az adatb�zisban");
define("_FNASCBS","Bal oldali blokk elrejt�se");
define("_FVISBS","Bal oldali blokk mutat�sa");
define("_FULTM","Utols� �zenetek ");
define("_FMPIUL","T�bb olvasott �zenet");
define("_FMEDRI","�tlagosan minden f�rumban:");
define("_FRISPS","�zenet van");
define("_FCERCF","Keres�s a F�rumban");
define("_FISCRIPT","*els� karakter nem elfogadott*");
define("_FINSCRIPT","*utols� karakter nem elfogadott*");
define("_FHACK","<font color=\"#FF0000\"> *** TILTOTT K�D BEILLESZT�S - LEHET, HOGY EGY HACKER PR�B�LKOZOTT T�MAD�SSAL! IP C�M FELJEGYEZVE! *** </font>");

/* HELP SYSTEM */

define("_SFHS","Splatt F�rum Help System");
define("_HSH1","Kattints ide, �s �j �zenetet tudsz k�ldeni ebbe a f�rumba.");
define("_HSH2","Kattints ide, �s l�thatod az utols� �zenetet ebben a f�rumban.");
define("_HSH3","Kattints ide, �s a bal oldali blokk n�lk�l l�thatod a f�rumot. Ez a legjobb megold�s hogy egyszer�bb� tedd a navig�l�st");
define("_HSH4","Kattints ide, ha l�tni szeretn�d a bal oldali blokkot.");
define("_HSH5","T�bb mint t�z olvasott �zenet, l�thatod h�nyszor olvast�k �ket.");
define("_HSH6","Az utols� t�z �zenet a f�rumban, id�rendi sorrendben.");
define("_HSH7","Itt l�thatod milyen korl�toz�sok vannak be�ll�tva a f�rumban.");

define("_LOCALDATE","%d-%m-%Y");

?>