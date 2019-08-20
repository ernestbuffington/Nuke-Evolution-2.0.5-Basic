<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/*                                                                        */
/* This is the language module with all the system messages               */
/*                                                                        */
/* If you made a translation, please go to the site and send to me        */
/* the translated file. Please keep the original text order by modules,   */
/* and just one message per line, also double check your translation!     */
/*                                                                        */
/* You need to change the second quoted phrase, not the capital one!      */
/*                                                                        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* And, if you use HTML code, please double check it.                     */
/**************************************************************************/


// General Variables
define("_PREVIOUS","El�z� oldal");
define("_NEXT","K�vetkez� oldal");
define("_SORTASC","N�vekv� sorrendben");
define("_SORTDESC","Cs�kken� sorrendben");
define("_CANCEL","M�gsem");
define("_GOBACK","<a href=\"javascript:history.go(-1)\">Vissza</a>");
define("_BACKTO","Vissza -");
define("_INDEX","Tartalom");

// Write Page Variables
define("_PRODUCTTITLE","Album c�m");
define("_RIMAGEFILE","K�p file n�v");
define("_REVIEWER","Szerz�:");
define("_MODIFICATION","m�dos�t�s");
define("_ISAVAILABLE","Az ismertet� m�r el�rhet� a t�bbi k�z�tt.");
define("_EDITORWILLLOOK","A szerkeszt�k �tn�zik a bek�ld�tt anyagod. Ha megfelel�, hamarosan el�rhet� lesz!");
define("_REVIEWMOD","Ismertet� m�dos�t�s");
define("_RDATE","D�tum:");
define("_RTITLE","C�m:");
define("_RTEXT","Sz�veg:");
define("_REVEMAIL","E-mail:");
define("_GUESTCANTPOST","Csak regisztr�lt felhaszn�l�k k�ldhetnek be ismertet�t. <br>Ha beszeretn�l k�ldeni egy ismertet�t <a href=\"modules.php?name=Your_Account\">jelentkezz be</a> vagy <a href=\"modules.php?name=Your_Account&op=new_user\">regisztr�lj</a>");

// Review List Variables
define("_RWELCOME","�dv�zl�nk az Ismertet�k modulban");
define("_REVIEWSLETTER","Ismertet�k ezzel a kezd�bet�vel:");
define("_TOTALREVIEWS","ismertet�t tal�ltam.");
define("_RETURN2MAIN","Vissza a kezd�lapra");
define("_PAGE","Oldal");
define("_PAGEBREAK","Ha t�bb oldalra bontan�d az ismertet�t, haszn�ld a <b>&lt;!--pagebreak--&gt;</b> -et, ahol az oldalt�r�st szeretn�d.");
define("_LANGUAGE","Nyelv");
define("_HITS","Megn�zve");
define("_PRODUCTSITE","A term�k hivatalos weboldala. Az URL elej�r�l ne hagyd le: \"http://\"");
define("_REVIEWID","Ismertet� azonos�t�");
define("_ADMINLOGGED","Admink�nt vagy bejelentkezve... az ismertet� azonnal");
define("_RMODIFIED","m�dos�tva lesz");
define("_RADDED","fel lesz v�ve");
define("_YES","Igen");
define("_NO","Nem");
define("_PREVIEW","Megtekint");
define("_PREMODS","M�dos�t�sok megtekint�se");
define("_LOOKSRIGHT","J� lesz �gy?");
define("_ADDED","Hozz�adva");
define("_INVALIDTITLE","Helytelen n�v... Nem lehet �res");
define("_INVALIDSCORE","Helytelen pontsz�m... 1 �s 10 k�z�tt legyen");
define("_INVALIDTEXT","Helytelen le�r�s... Nem lehet �res");
define("_INVALIDHITS","Pozit�v eg�sz sz�m legyen");
define("_CHECKNAME","Neved �s e-mail c�med is add meg");
define("_INVALIDEMAIL","Helytelen e-mail (pl: te@hotmail.com)");
define("_INVALIDLINK","Ha linket �rsz, add meg a link nevet is, vagy hagyd �resen midkett�t");
define("_RTHANKS","K�sz�nj�k!<br>Ismertet�d hozz�adva az adatb�zishoz<br><br>Ha megfelel�nek tal�ljuk, hamarosan k�zz�tessz�k.<br>Kattints <a href=\"javascript:history.back(-1)\">ide</a> m�sik ismertet��rt");
define("_RTHANKSADMIN","K�sz�nj�k!<br><br>Ismertet�d m�ris el�rhet�.");
define("_CHECKREVIEW","K�rlek, figyelj a helyes�r�sra! Az ismertet� legal�bb 100 sz�b�l �lljon! Haszn�lhatsz HTML k�dokat is.<br> K�rlek haszn�ld az 'Aposztr�f' jelet az \"Id�z�jel\" helyett, �s NE HASZN�LD a &lt;br&gt; jelet �j sor nyit�s�hoz, ez automatikusan lesz besz�rva :)");
define("_NAMEPRODUCT","Az ismertetett term�k neve.");
define("_PRODUCTCAT","Kateg�ria az ismertetett term�knek.");
define("_PRODUCTSUBCAT","Alkateg�ria az ismertetett term�knek.");
define("_LINKTITLEREQ","Sz�ks�ges, ha adt�l meg linket, egy�bk�nt elhagyhat�.");
define("_RLINK","Link");
define("_RLINKTITLE","Link neve");
define("_RIMAGEFILEREQ","Az ismertet�h�z tartoz� k�p neve. Helye: images/Reviews/. Elhagyhat�.");
define("_COVERIMAGE","K�p");
define("_SELECTSCORE","A term�k �rt�kel�se");
define("_CHECKINFO","Bizonyosodj meg r�la, hagy a be�rt inform�ci�k 100%-ig pontosak, nyelvtanilag helyesek. Ne �rj csupa NAGY BET�VEL, az ilyen ismertet�t nem fogjuk enged�lyezni.");
define("_REMAIL","E-mail");
define("_REMAILREQ","E-mail c�med. Sz�ks�ges.");
define("_FULLNAMEREQ","Teljes neved. Sz�ks�ges.");
define("_YOURNAME","Neved");
define("_RBACK","Ismertet�k kezd�lapja");

// Comments Section
define("_POSTANON","K�ld�s n�vtelen�l");
define("_ALLOWEDHTML","Enged�lyezett HTML k�dok");
define("_RCREATEACCOUNT","<a href=modules.php?name=Your_Account>Regisztr�ci�</a>");
define("_YOURCOMMENT","Megjegyz�s");
define("_MYSCORE","Pontsz�m:");
define("_YOURNICK","Felhaszn�l�n�v");
define("_REVIEWCOMMENT","Megjegyz�s f�z�se az ismertet�h�z:");

// Category, SubCategory Listing


define("_THEREARE","Jelenleg");
define("_REVIEWSINDB"," ismertet� tal�lhat� az adatb�zisban.");
define("_10MOSTPOP","10 legn�pszer�bb ismertet�");
define("_10MOSTREC","10 legfrissebb ismertet�");
define("_REVIEW","Ismertet�");
define("_REVIEWS","Ismertet�k");
define("_NOREVIEWS","Nincs ismertet�");
define("_NOSUBCATS"," �s nincsenek alkateg�ri�k");
define("_CATEGORIES","Kateg�ri�k");
define("_SUB_CATEGORIES","Alkateg�ri�k");
define("_VCATEGORIES","Kateg�ri�k �ttekint�se");
define("_LATESTREVIEW","Leg�jabb ismertet�k: ");
define("_REVIEWSFOUND","ismertet�");
define("_WELCOMETO","�dv�zl�nk -");
define("_WRITEREVIEW","Ismertet� �r�sa");
define("_WRITEREVIEWFOR","Ismertet� �r�sa");
define("_ALLREVIEWS","Minden ismertet� list�z�sa");
define("_LISTINGALLREVIEWSIN","Minden t�tel list�z�sa");
define("_LISTINGALLSUBCATSIN","Minden alkateg�ria list�z�sa");
define("_CATEGORY","Kateg�ria");
define("_SUBCATEGORY","Alkateg�ria");

define("_SUBCATTITLE","Megnevez�s");
define("_TOTALREVIEW","�sszes");
define("_NEWREVIEW","�j ismertet�k");
define("_LATESTADDED","Utolj�ra felvett");

define("_SUBCATA2Z","Alkateg�ri�k (A-Z)");
define("_SUBCATZ2A","Alkateg�ri�k (Z-A)");

define("_TITLEA2Z","N�v (A-Z)");
define("_TITLEZ2A","N�v (Z-A)");
define("_POPULARITY1","N�pszer�s�g (Kev�sb� n�pszer�ek el�l)");
define("_POPULARITY2","N�pszer�s�g (Legn�pszer�bbek el�l)");
define("_DATE1","D�tum (R�gebbi ismertet�k el�l)");
define("_DATE2","D�tum (�j ismertet�k el�l)");
define("_RATING1","Oszt�lyzat (Legkisebb pontsz�m�ak el�l)");
define("_RATING2","Oszt�lyzat (Legmagasabb pontsz�m�ak el�l)");
define("_SORTREVIEWSBY","Ismertet�k list�z�sa:");
define("_SORTTITLE","N�v");
define("_SORTDATE","D�tum");
define("_SORTRATING","Oszt�lyzat");
define("_SORTHITS","N�pszer�s�g");
define("_REVIEWSCURSORTEDBY","Ismertet�k list�z�sa jelenleg: ");
define("_REVIEWSNAME","Ismertet� neve");

// Read Review
define("_AUTHOR","Szerz�");
define("_DATE","D�tum");
define("_SCORE","Pontsz�m");
define("_HITS","Olvasva");
define("_ADMIN","Admin");
define("_RELATEDLINK","Kapcsol�d� Link");
define("_OPTIONS","Opci�k");
define("_REPLYMAIN","Megjegyz�s");
define("_SENDTOFRIEND","K�ld el egy bar�tnak");
define("_PRINTREVIEW","Ismertet� nyomtat�sa");
define("_REVIEWNAME","Term�k neve");
define("_WRITE","�rta");
define("_REVIEWFOR","Ismertet�");
define("_ENTERINFO","Az inform�ci�kat a le�r�soknak megfelel�en add meg");
?>
