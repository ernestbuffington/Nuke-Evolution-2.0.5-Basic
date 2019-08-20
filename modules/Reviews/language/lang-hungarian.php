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
define("_PREVIOUS","Elõzõ oldal");
define("_NEXT","Következõ oldal");
define("_SORTASC","Növekvõ sorrendben");
define("_SORTDESC","Csökkenõ sorrendben");
define("_CANCEL","Mégsem");
define("_GOBACK","<a href=\"javascript:history.go(-1)\">Vissza</a>");
define("_BACKTO","Vissza -");
define("_INDEX","Tartalom");

// Write Page Variables
define("_PRODUCTTITLE","Album cím");
define("_RIMAGEFILE","Kép file név");
define("_REVIEWER","Szerzõ:");
define("_MODIFICATION","módosítás");
define("_ISAVAILABLE","Az ismertetõ már elérhetõ a többi között.");
define("_EDITORWILLLOOK","A szerkesztõk átnézik a beküldött anyagod. Ha megfelelõ, hamarosan elérhetõ lesz!");
define("_REVIEWMOD","Ismertetõ módosítás");
define("_RDATE","Dátum:");
define("_RTITLE","Cím:");
define("_RTEXT","Szöveg:");
define("_REVEMAIL","E-mail:");
define("_GUESTCANTPOST","Csak regisztrált felhasználók küldhetnek be ismertetõt. <br>Ha beszeretnél küldeni egy ismertetõt <a href=\"modules.php?name=Your_Account\">jelentkezz be</a> vagy <a href=\"modules.php?name=Your_Account&op=new_user\">regisztrálj</a>");

// Review List Variables
define("_RWELCOME","Üdvözlünk az Ismertetõk modulban");
define("_REVIEWSLETTER","Ismertetõk ezzel a kezdõbetûvel:");
define("_TOTALREVIEWS","ismertetõt találtam.");
define("_RETURN2MAIN","Vissza a kezdõlapra");
define("_PAGE","Oldal");
define("_PAGEBREAK","Ha több oldalra bontanád az ismertetõt, használd a <b>&lt;!--pagebreak--&gt;</b> -et, ahol az oldaltörést szeretnéd.");
define("_LANGUAGE","Nyelv");
define("_HITS","Megnézve");
define("_PRODUCTSITE","A termék hivatalos weboldala. Az URL elejérõl ne hagyd le: \"http://\"");
define("_REVIEWID","Ismertetõ azonosító");
define("_ADMINLOGGED","Adminként vagy bejelentkezve... az ismertetõ azonnal");
define("_RMODIFIED","módosítva lesz");
define("_RADDED","fel lesz véve");
define("_YES","Igen");
define("_NO","Nem");
define("_PREVIEW","Megtekint");
define("_PREMODS","Módosítások megtekintése");
define("_LOOKSRIGHT","Jó lesz így?");
define("_ADDED","Hozzáadva");
define("_INVALIDTITLE","Helytelen név... Nem lehet üres");
define("_INVALIDSCORE","Helytelen pontszám... 1 és 10 között legyen");
define("_INVALIDTEXT","Helytelen leírás... Nem lehet üres");
define("_INVALIDHITS","Pozitív egész szám legyen");
define("_CHECKNAME","Neved és e-mail címed is add meg");
define("_INVALIDEMAIL","Helytelen e-mail (pl: te@hotmail.com)");
define("_INVALIDLINK","Ha linket írsz, add meg a link nevet is, vagy hagyd üresen midkettõt");
define("_RTHANKS","Köszönjük!<br>Ismertetõd hozzáadva az adatbázishoz<br><br>Ha megfelelõnek találjuk, hamarosan közzétesszük.<br>Kattints <a href=\"javascript:history.back(-1)\">ide</a> másik ismertetõért");
define("_RTHANKSADMIN","Köszönjük!<br><br>Ismertetõd máris elérhetõ.");
define("_CHECKREVIEW","Kérlek, figyelj a helyesírásra! Az ismertetõ legalább 100 szóból álljon! Használhatsz HTML kódokat is.<br> Kérlek használd az 'Aposztróf' jelet az \"Idézõjel\" helyett, és NE HASZNÁLD a &lt;br&gt; jelet új sor nyitásához, ez automatikusan lesz beszúrva :)");
define("_NAMEPRODUCT","Az ismertetett termék neve.");
define("_PRODUCTCAT","Kategória az ismertetett terméknek.");
define("_PRODUCTSUBCAT","Alkategória az ismertetett terméknek.");
define("_LINKTITLEREQ","Szükséges, ha adtál meg linket, egyébként elhagyható.");
define("_RLINK","Link");
define("_RLINKTITLE","Link neve");
define("_RIMAGEFILEREQ","Az ismertetõhöz tartozó kép neve. Helye: images/Reviews/. Elhagyható.");
define("_COVERIMAGE","Kép");
define("_SELECTSCORE","A termék értékelése");
define("_CHECKINFO","Bizonyosodj meg róla, hagy a beírt információk 100%-ig pontosak, nyelvtanilag helyesek. Ne írj csupa NAGY BETÛVEL, az ilyen ismertetõt nem fogjuk engedélyezni.");
define("_REMAIL","E-mail");
define("_REMAILREQ","E-mail címed. Szükséges.");
define("_FULLNAMEREQ","Teljes neved. Szükséges.");
define("_YOURNAME","Neved");
define("_RBACK","Ismertetõk kezdõlapja");

// Comments Section
define("_POSTANON","Küldés névtelenül");
define("_ALLOWEDHTML","Engedélyezett HTML kódok");
define("_RCREATEACCOUNT","<a href=modules.php?name=Your_Account>Regisztráció</a>");
define("_YOURCOMMENT","Megjegyzés");
define("_MYSCORE","Pontszám:");
define("_YOURNICK","Felhasználónév");
define("_REVIEWCOMMENT","Megjegyzés fûzése az ismertetõhöz:");

// Category, SubCategory Listing


define("_THEREARE","Jelenleg");
define("_REVIEWSINDB"," ismertetõ található az adatbázisban.");
define("_10MOSTPOP","10 legnépszerûbb ismertetõ");
define("_10MOSTREC","10 legfrissebb ismertetõ");
define("_REVIEW","Ismertetõ");
define("_REVIEWS","Ismertetõk");
define("_NOREVIEWS","Nincs ismertetõ");
define("_NOSUBCATS"," és nincsenek alkategóriák");
define("_CATEGORIES","Kategóriák");
define("_SUB_CATEGORIES","Alkategóriák");
define("_VCATEGORIES","Kategóriák áttekintése");
define("_LATESTREVIEW","Legújabb ismertetõk: ");
define("_REVIEWSFOUND","ismertetõ");
define("_WELCOMETO","Üdvözlünk -");
define("_WRITEREVIEW","Ismertetõ írása");
define("_WRITEREVIEWFOR","Ismertetõ írása");
define("_ALLREVIEWS","Minden ismertetõ listázása");
define("_LISTINGALLREVIEWSIN","Minden tétel listázása");
define("_LISTINGALLSUBCATSIN","Minden alkategória listázása");
define("_CATEGORY","Kategória");
define("_SUBCATEGORY","Alkategória");

define("_SUBCATTITLE","Megnevezés");
define("_TOTALREVIEW","Összes");
define("_NEWREVIEW","Új ismertetõk");
define("_LATESTADDED","Utoljára felvett");

define("_SUBCATA2Z","Alkategóriák (A-Z)");
define("_SUBCATZ2A","Alkategóriák (Z-A)");

define("_TITLEA2Z","Név (A-Z)");
define("_TITLEZ2A","Név (Z-A)");
define("_POPULARITY1","Népszerûség (Kevésbé népszerûek elõl)");
define("_POPULARITY2","Népszerûség (Legnépszerûbbek elõl)");
define("_DATE1","Dátum (Régebbi ismertetõk elõl)");
define("_DATE2","Dátum (Új ismertetõk elõl)");
define("_RATING1","Osztályzat (Legkisebb pontszámúak elõl)");
define("_RATING2","Osztályzat (Legmagasabb pontszámúak elõl)");
define("_SORTREVIEWSBY","Ismertetõk listázása:");
define("_SORTTITLE","Név");
define("_SORTDATE","Dátum");
define("_SORTRATING","Osztályzat");
define("_SORTHITS","Népszerûség");
define("_REVIEWSCURSORTEDBY","Ismertetõk listázása jelenleg: ");
define("_REVIEWSNAME","Ismertetõ neve");

// Read Review
define("_AUTHOR","Szerzõ");
define("_DATE","Dátum");
define("_SCORE","Pontszám");
define("_HITS","Olvasva");
define("_ADMIN","Admin");
define("_RELATEDLINK","Kapcsolódó Link");
define("_OPTIONS","Opciók");
define("_REPLYMAIN","Megjegyzés");
define("_SENDTOFRIEND","Küld el egy barátnak");
define("_PRINTREVIEW","Ismertetõ nyomtatása");
define("_REVIEWNAME","Termék neve");
define("_WRITE","Írta");
define("_REVIEWFOR","Ismertetõ");
define("_ENTERINFO","Az információkat a leírásoknak megfelelõen add meg");
?>
