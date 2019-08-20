<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS:
    2002-12-15    Philip M. White (pwhite@mailhaven.com)
        Fixed many minor grammatical problems.
*/

//
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Bel�p�si �s Regisztr�ci�s tudnival�k");
$faq[] = array("Mi�rt nem tudok bel�pni?", "Regisztr�ltad magadat? El�fordulhat, hogy a f�rum l�togat�sa regisztr�ci�hoz k�t�tt. Ki lett�l tiltva a F�rumr�l (ebben az esetben egy �zenet jelenik meg)? L�pj kapcsolatba a webmesterrel, vagy az Adminisztr�torral, hogy mi�rt tiltottak le. Ha regisztr�lva vagy, �s nem vagy kitiltva az oldalr�l, akkor ellen�rizd, hogy nem g�pelted-e el a nevet, vagy a jelsz�t. Ellen�rizd k�tszer is, mivel legt�bbsz�r ez a hiba. Ha a hiba m�g mindig fenn�ll, akkor l�pj kapcsolatba az Adminisztr�torral, megadva a hiba pontos ok�t.");
$faq[] = array("Mi�rt kell regisztr�lnom magamat?", "A regisztr�ci� nem k�telez�, ez az Adminisztr�toron m�lik, hogy sz�ks�gess� teszi-e. A regisztr�lt felhaszn�l�k t�bb szolg�ltat�shoz jutnak, melyek nem �rhet�ek el a Vend�geknek, mint p�ld�ul egy�ni Avatar k�pek, Priv�t �zenet k�ld�se, email k�ld�s, csoporttags�gok, stb. Puszt�n n�h�ny perc a regisztr�ci�, mely meg�ri a t�bb funkci� �rdek�ben.");
$faq[] = array("Mi�rt l�p ki automatikusan a rendszerb�l?", "Amennyiben a bel�p�sn�l nem jel�lted be az <i>Automatikus bel�p�s</i> opci�t, akkor csak egy meghat�rozott ideig l�t a rendszer, mint akt�v felhaszn�l�. Ez megakad�lyozza, hogy illet�ktelenek f�rjenek hozz� az azonos�t�dhoz, vagy hogy a nevedben �rjanak a F�rumba. Nem aj�nlott az <i>Automatikus bel�p�s</i> haszn�lata ha nyilv�nos helyr�l haszn�lod a F�rumot, mint p�ld�ul k�nyvt�r, internet k�v�z�, stb.");
$faq[] = array("Hogyan tudom megakad�lyozni, hogy m�sok l�ss�k mikor vagyok �pp jelen a F�rumon?", "A Profilban be�ll�that� egy opci�, mellyel ez letilthat�: <i>Jelenl�t elrejt�se</i>. Ha ezt bekapcsolod, akkor csak az Adminisztr�tor, vagy saj�t magad fogod l�tni, hogy jelen vagy-e. A bekapcsol�s�val Rejtett felhaszn�l�nak sz�m�tasz.");
$faq[] = array("Elfelejtettem a jelszavamat!", "Semmi p�nik! A jelsz�t nem lehet ut�lag kider�teni, de lehet �jat k�sz�ttetni. Ehhez menj vissza a Bel�p�s oldalra, kattints az <u>Elfelejtettem a jelsz�t</u> linkre, k�vesd az utas�t�sokat, �s r�vid id�n bel�l �jra be tudsz l�pni a F�rumba.");
$faq[] = array("Regisztr�ltam magamat, de m�gsem tudok bel�pni!", "El�sz�r ellen�rizd, hogy helyes nevet, �s jelsz�t adt�l-e meg. Ha ez rendben van, akkor k�t dolog miatt nem tudsz bel�pni. Az egyik, hogy n�h�ny f�rumon el�bb aktiv�lni kell a regisztr�ci�t, hogy be tudj l�pni. Ezt vagy neked, vagy az Adminisztr�tornak kell megtennie, m�g az els� bel�p�s el�tt. A regisztr�ci� v�g�n megtudhatod, hogy sz�ks�ges-e aktiv�lnod, a regisztr�ci�t. Az aktiv�l�s lehet email �ltal: ekkor ellen�rizd a regisztr�ci�n�l megadott emailc�medet, �s k�vesd a benne l�v� utas�t�sokat. Az aktiv�ci�ra az�rt van sz�ks�g, hogy megakad�lyozzuk a F�rum n�vtelens�g�vel vissza�l� felhaszn�l�kat. Ha biztos vagy benne, hogy �rv�nyes emailt adt�l meg, �s bel�that� id�n bel�l nem kapt�l emailt, akkor l�pj kapcsolatba az Adminisztr�torral.");
$faq[] = array("R�gebben regisztr�ltam magamat, de egy ideje nem tudok bel�pni?!", "Ennek az a leggyakoribb oka, hogy hib�s nevet, vagy jelsz�t adt�l meg (ellen�rizd az emailt, amit regisztr�l�sn�l kapt�l), vagy mert az Adminisztr�tor valami okn�l fogva t�r�lte az azonos�t�dat. Lehet hogy m�r regisztr�lva vagy, de m�g semmihez sem sz�lt�l hozz�? A F�rum bizonyos id�k�z�nk�nt t�rli azokat a felhaszn�l�kat, akik r�g�ta nem sz�ltak hozz� egy t�m�hoz sem. Regisztr�ld �jra magadat, �s kapcsol�dj be a besz�lget�sekbe.");


$faq[] = array("--","Felhaszn�l�i be�ll�t�sok");
$faq[] = array("Hogyan v�ltoztathatom meg a be�ll�t�saimat?", "Amennyiben regisztr�lt felhaszn�l� vagy, a be�ll�t�saidat a <u>Profil</u> men�pontra kattintva �rheted el. Ez �ltal�ban az oldal tetej�n tal�lhat�, de nem minden esetben - f�gg a haszn�latban l�v� st�lust�l.");
$faq[] = array("A d�tum �s/vagy id�be�ll�t�s nem pontos!", "Az id� helyesen jelenik meg, ha helyes id�z�na van be�ll�tva (Magyarorsz�g a \"GMT +1\" z�n�ba tartozik). Ezt a szolg�ltat�st csak regisztr�lt felhaszn�l�k vehetik ig�nybe.");
$faq[] = array("Megv�ltoztattam az id�z�n�t, de m�g mindig pontatlan az id�!", "Ha biztosan a helyes id�z�na van be�ll�tva, akkor feltehet�leg az�rt nem pontos, mivel probl�ma lehet a k�tfajta id�sz�m�t�s. Jelenleg a f�rum motorja nem t�mogatja a t�li-ny�ri id�sz�m�t�s v�ltoz�s�nak k�vet�s�t, �gy fordulhat el� a +-1 �ra elt�r�s az pontos id�h�z k�pest.");
$faq[] = array("A haszn�lni k�v�nt nyelv nincs a list�ban!", "Ennek az az oka, hogy az Adminisztr�tor nem telep�tett m�s nyelvet a F�rumhoz, vagy mert a F�rumhoz nincsen ford�t�s a k�v�nt nyelven. K�rd meg az Adminisztr�tort, hogy, hogy telep�tse a nyelvet a F�rumhoz, vagy ha ilyen nem l�tezik, nyugodtan k�sz�tsd el a ford�t�st. Tov�bbi inform�ci��rt keresd fel a phpBB Csoport weboldal�t (a link az oldal alj�n tal�lhat�).");
$faq[] = array("Hogyan jelen�thetek meg egy k�pet a nevem alatt?", "A felhaszn�l�i n�v alatt k�t k�p tal�lhat�. Az egyik a Rangot mutatja (ezek �ltal�ban csillagok, vagy egy�b sorminta, melyek a hozz�sz�l�sok sz�m�nak f�ggv�ny�ben v�ltoznak). Ez alatt van egy nagyobb k�p, melyet Avatarnak nevez�nk. Az Avatar egy egyedi �s szem�lyes k�p, mely m�s �s m�s a legt�bb felhaszn�l�nak. A F�rum Adminisztr�tor�t�l f�gg, hogy lehet�s�g van-e Avatar megjelen�t�s�re. Ha nem tudsz Avatart haszn�lni, akkor az Adminisztr�tor letiltotta ezt a lehet�s�get.");
$faq[] = array("Hogyan tudom megv�ltoztatni a Rangomat?", "�ltal�ban a felhaszn�l�k nem v�ltoztathatj�k meg k�zvetlen�l a rangot, mivel ez a hozz�sz�l�sok sz�m�t�l f�gg. Min�l t�bb hozz�sz�l�st �rsz, ann�l nagyobb lesz a rangod. A rang �ltal�ban a felhaszn�l�n�v alatt l�that� a t�m�kban. Vannak speci�lis rangok, mint p�ld�ul \"Adminsztr�tor\", vagy \"Moder�tor\". Lehet�leg ne sz�lj hozz� feleslegesen a t�m�khoz csak mert a rangodat szeretn�d n�velni: az Adminisztr�tornak �s a Moder�toroknak b�rmikor lehet�s�ge van lefokozni a rangodat, ha �gy l�tj�k j�nak.");
$faq[] = array("Mi�rt kell bejelentkezni az emailk�ld�shez?", "A F�rumon kereszt�li emailk�ld�s csak regisztr�lt felhaszn�l�k sz�m�ra lehets�ges. Ezzel a n�vtelen emberek nemk�v�nt levelez�s�nek elker�l�s�re van.");


$faq[] = array("--","Hozz�sz�l�ssal kapcsolatos k�rd�sek");
$faq[] = array("Hogyan sz�lhatok hozz� a f�rumokhoz?", "Egyszer�, csak a megfelel� gombra kell kattintanod, mely vagy a f�rumban tal�lhat�, vagy a t�m�ban. Ha a f�rumban egy �j hozz�sz�l�st k�sz�tesz, akkor egy c�met is adj meg a t�m�nak. Ha egy m�r megnyitott t�m�ban �rsz egy �j hozz�sz�l�st, akkor nem k�telez� c�met megadni. Hozz�sz�l�s k�ld�s�hez el�bb regisztr�lnod kell magadat. A f�rum vagy a t�ma alj�n tal�lhat�ak meg a hozz�juk tartoz� jogosults�gaid (<i>�j t�m�t nyithat, Szavazhat, stb.</i>)");
$faq[] = array("Hogyan szerkeszthetek vagy t�r�lhetek egy hozz�sz�l�st?", "Csak abban az esetben m�dos�thatsz vagy t�r�lhetsz egy hozz�sz�l�st, ha azt te k�sz�tetted, vagy ha Moder�tor, vagy a F�rum Adminisztr�tora vagy. Az <i>�t�r</i> gombra kattintva tudsz m�dos�tani egy hozz�sz�l�st. Ha valaki m�r v�laszolt a hozz�sz�l�sodra, abban az esetben egy r�vid megjegyz�st tal�l, hogy az h�nyszor lett m�r m�dos�tva. Ez nem jelenik meg, ha m�g senki sem v�laszolt a hozz�sz�l�sra, vagy ha a Moder�torok vagy az Adminisztr�tor szerkesztette �t. Eml�keztet��l, a sima felhaszn�l�k nem t�r�lhetnek egy hozz�sz�l�st, melyre m�r �rkezett v�lasz.");
$faq[] = array("Hogyan csatolhatom az al��r�somat a hozz�sz�l�shoz?", "A csatol�shoz el�sz�r el kell k�sz�tened az al��r�st; ezt a Profilodban teheted meg. Ut�na a hozz�sz�l�sban be kell kapcsolni az <i>Al��r�s hozz�ad�s�t</i>. Az al��r�s automatikusan is hozz�adhat� minden hozz�sz�l�shoz, ez szint�n a Profilban kapcsolhat� be (ha ez be van kapcsolva, ett�l f�ggetlen�l hozz�sz�l�sonk�nt m�g kikapcsolhat�).");
$faq[] = array("Hogyan k�sz�thetek szavaz�st?", "A szavaz�s k�sz�t�se egyszer�, amikor egy �j t�m�t nyitsz, akkor ezzel egy�tt egy szavaz�st is ind�thatsz. A szavaz�s term�szetesen opcion�lis, nem k�telez� a t�manyit�shoz. Szavaz�st �gy is k�sz�thetsz, ha hozz�sz�l�sban az �t�rra kattintasz (a m�dos�t�shoz terr�szetesen megfelel� jogokkal kell rendelkezned), �s a <i>Szavaz�s hozz�ad�sa</i> linkre kattintassz. Megadhatsz egy c�met a szavaz�snak, �s legal�bb k�t v�laszt�si lehet�s�get �rj be (t�bb lehet�s�g be�r�s�hoz kattints a <i>Hozz�ad�s</i> gombra. Ezenk�v�l id�limitet is megadhatsz a szavaz�shoz, mellyel megadhat�, hogy h�ny napig legyen �rv�nyes a szavaz�s. A v�laszt�si lehet�s�gek sz�ma meg van hat�rozva, melyet az Adminisztr�tor hat�roz meg.");
$faq[] = array("Hogyan szerkeszthetek vagy t�r�lhetek egy szavaz�st?", "A hozz�sz�l�sokhoz hasonl�an a szavaz�sokat is csak a szavaz�s k�sz�t�je, egy moder�tor, vagy az Adminisztr�tor szerkesztheti. Egy szavaz�s m�dos�t�s�hoz menj a t�ma els� hozz�sz�l�s�hoz (�ltal�ban ehhez tartozik a szavaz�s), �s kattints az �t�r�s gombra. Ha senki sem szavazott az adott t�m�ban, akkor a k�sz�t�je t�r�lheti a szavaz�st; ha m�r szavaztak, akkor csak egy Moder�tor vagy az Adminisztr�tor m�dos�thatja vagy t�r�lheti.");
$faq[] = array("Mi�rt nem f�rek hozz� egyes f�rumokhoz?", "N�h�ny f�rum csak kiemelt felhaszn�l�k �s/vagy csoportok sz�m�ra hozz�f�rhet�. A f�rum megtekint�s�hez, olvas�s�hoz, hozz�sz�l�s k�ld�s�hez speci�lis enged�ly kell, amit vagy a f�rum Moder�tor�t�l vagy az Adminisztr�tort�l kaphatsz meg.");
$faq[] = array("Mi�rt nem tudok szavazni?", "Csak regisztr�lt felhaszn�l�k vehetnek r�szt a szavaz�sokban (a t�bbsz�ri szavaz�s elker�l�se v�gett). Amennyiben regisztr�lt felhaszn�l� vagy de m�gsem tudsz szavazni, akkor nincsen jogosults�god a szavaz�shoz.");


$faq[] = array("--","Form�z�s �s t�ma t�pusok");
$faq[] = array("Mi az a BBCode?", "A BBCode egy speci�lis v�ltozata a HTML nyelvnek. A BBCode haszn�lat�nak enged�lyez�se a f�rum Adminisztr�tor�t�l f�gg, de neked is lehet�s�ged van arra, hogy a hozz�sz�l�saidban ki-, vagy bekapcsold a BBCode-t. A BBCode hasonl� fel�p�t�s�, mint a HTML, kiv�ve hogy a tagek nem kacsacs�r k�z�tt (&lt; �s &gt;), hanem sz�gletes z�r�jelben \"[\" \"]\" vannak;  amellett  lehet�s�get ny�jt hogy hogyan �s mik�nt lehet a sz�vegeket szebben, jobban, tagoltabban megjelen�teni. A haszn�latban l�v� st�lust�l f�gg, hogy pontosan hol tal�lhat� meg a BBCode panel, melyr�l k�nnyed�n �s gyorsan be lehet illeszteni a tageket a sz�vegbe. Fontos, hogy mindig �gyelj�nk a tagek lez�r�s�ra. Egy r�szletesebb le�r�s tal�lhat� m�g a BBCode Gy.I.K-ban, melyet a hozz�sz�l�s k�sz�t�s�n�l tal�lsz meg.");
$faq[] = array("Haszn�lhatok HTML-t k�dot?", "Ez az Adminisztr�tort�l f�gg, � hat�rozza meg hogy lehet-e haszn�lni vagy nem. Ha enged�lyezte a haszn�lat�t, akkor is csak val�sz�n�leg n�h�ny tag fog m�k�dni. Ennek <i>biztons�gi</i> okai vannak; megakad�lyozza hogy a felhaszn�l�k ak�r v�letlen�l ak�r sz�nd�kosan megv�ltoztass�k az oldal(ak) form�tum�t vagy kin�zet�t, vagy hogy egy�b probl�m�t okozzanak. A HTML k�dokat b�rki letilthatja a hozz�sz�l�s�ban.");
$faq[] = array("Mik az Emotikonok?", "Smiley-k vagy m�sn�ven Emotikonok kis grafik�k, melyekkel �rz�seket lehet kifejeztetni. P�ld�ul a :) jelent�se mosolyg�s, boldogs�g, a :( jelent�se szomor�s�g. A haszn�lhat� emotikonok teljes list�ja megtal�lhat�k a hozz�sz�l�s k�sz�t�s�n�l. Lehet�leg ne haszn�lj t�l sok emotikont, mert nehezen lesz olvashat� a hozz�sz�l�s.");
$faq[] = array("Csatolhatok k�peket a hozz�sz�l�shoz?", "Egy hozz�sz�l�sban k�peket is meg lehet jelen�ttetni, de ezt csak k�ls� webc�m megad�s�val. Jelenleg nincs lehet�s�g arra, hogy a F�rumra t�ltsd fel a k�peket. A megjelen�t�s�hez egy publikus, az interneten el�rhet� k�pet kell megadni, p�ld�ul: http://www.akarmi.hu/kep.jpg. A saj�t g�pen tal�lhat� k�peket nem lehet megjelen�teni (kiv�ve ha fut egy webszerver a g�pen, sem a v�dett oldalakon tal�lhat� k�peket (p�ld�ul lev�lfi�kokban (Hotmail, Yahoo), vagy jelsz�val v�dett oldalakon), stb. A k�p megjelen�t�s�hez haszn�ld a BBCode [img] tagj�t, vagy a megfelel� HTML taget (amennyiben ez ut�bbi enged�lyezve van).");
$faq[] = array("Mik azok a K�zlem�nyek?", "A k�zlem�nyek gyakran fontos inform�ci�kat tartalmaznak, �rdemes ezeket min�l hamarabb elolvasni. A k�zlem�nyek az adott f�rumban mindig az oldal tetej�n, az �sszes oldalon megtal�lhat�ak. Ahhoz hogy valaki k�zlem�nyt k�ldj�n, megfelel� jogokkal kell rendelkeznie, melyet az Adminisztr�tor �ll�t be.");
$faq[] = array("Mik azok a Kiemelt t�m�k?", "A kiemelt t�m�k a K�zlem�nyek alatt jelennek meg, de csak a f�rum els� oldal�n. Ezek �ltal�ban el�g fontos inform�ci�kat tartalmaznak, ez�rt aj�nlott az elolvas�sa. Hasonl�an a K�zlem�nyekhez, az Adminisztr�tor d�nti el, hogy ki �rhat Kiemelt t�m�t.");
$faq[] = array("Mik azok a lez�rt t�m�k?", "A t�m�kat vagy a Moder�torok, vagy az Adminisztr�tor z�rhatja le. Az ilyen t�m�kba nem lehet t�bb hozz�sz�l�st vagy szavazatot k�ldeni. Egy t�ma lez�r�s�nak t�bb oka lehet.");


$faq[] = array("--","Felhaszn�l�i szintek �s Csoportok");
$faq[] = array("Ki az Adminisztr�tor?", "Az Adminisztr�tor a F�rum legmagasabb rang� �s jog� felhaszn�l�ja, � �zemelteti, �s tartja karban. Az eg�sz F�rumhoz hozz�f�rhet, �s m�dos�thatja, p�ld�ul jogosults�gokat adhat, letilthat felhaszn�l�kat, csoportokat hozhat l�tre, Moder�tori jogosults�gokat adhat, stb. Ezenk�v�l b�rmely f�rumot �s t�m�t moder�lhatja. Az Adminisztr�tor �ltal�ban egy szem�ly, de ez F�rumt�l f�gg, van ahol t�bben rendelkeznek ilyen jogosults�ggal.");
$faq[] = array("Kik azok a Moder�torok?", "A Moder�torok olyan k�l�nleges jogosults�gokkal rendelkez� felhaszn�l�k, akiknek az a feladata, hogy napr�l napra figyelemmel k�vess�k a f�rumok m�k�d�s�t. Jogukban �ll b�rmely hozz�sz�l�s szerkeszt�se vagy t�rl�se, ezenk�v�l lez�rhatj�k, kinyithatj�k, �thelyezhetik, t�r�lhetik vagy sz�tv�laszthatj�k a t�m�kat, amikben moder�lhatnak. �ltal�ban az a dolguk, hogy elt�vol�ts�k a t�m�ba nem ill� hozz�sz�l�sokat, vagy a s�rteget�, t�mad� hangv�tel� anyagokat.");
$faq[] = array("Mik azok a Csoportok?", "Az Adminisztr�tor csoportokba rendezheti az azonos �rdekl�d�si k�r� felhaszn�l�kat. Egy felhaszn�l� t�bb csoportba is tartozhat, �s a csoportokhoz k�l�nb�z� hozz�f�r�si jogok rendelhet�ek. Ezzel k�nnyed�n lehet p�ld�ul z�rtk�r� f�rumokat k�sz�teni, vagy moder�tori jogokat adni egyszerre t�bb felhaszn�l�knak.");
$faq[] = array("Hogyan csatlakozhatok egy Csoporthoz?", "A Csoportok megtekint�s�hez kattints a lap tetej�n tal�lhat� Csoportok men�pontra. A link helye a haszn�lt st�lus-t�m�t�l f�gg. Nem minden csoport �rhet� el, lehetnek <i>ny�lt</i> csoportok, z�rt csoportok, vagy ak�r rejtett csoportok is. Ha csoport nyitott, akkor a megfelel� gombra kattintva el lehet k�ldeni a csatlakoz�si k�relmet. A csatlakoz�shoz sz�ks�ges a csoport Moder�tor�nak j�v�hagy�sa, megk�rdezheti, hogy mi�rt takarsz csatlakozni a csoportba. Ha a moder�tor elutas�tja a k�relmedet, akkor annak biztosan megvan az oka, �gy ne �t hib�ztasd.");
$faq[] = array("Hogyan lehetek Csoport Moder�tor?", "A Csoportokat az Adminisztr�tor k�sz�ti, �gy a hozz�tartoz� moder�tori jogokat is � adja ki. Ha saj�t csoportot akarsz ind�tani, akkor l�pj kapcsolatba az Adminisztr�torral, p�ld�ul egy Priv�t �zenet k�ld�s�vel.");


$faq[] = array("--","Priv�t �zenet");
$faq[] = array("Nem tudok Priv�t �zenetet k�ldeni!", "Ennek n�gy oka lehet: 1. Nem vagy regisztr�lva. 2. Nem vagy bel�pve a F�rumra. 3. az Adminisztr�tor nem enged�lyezte a F�rumon a Priv�t �zenet k�ld�s�t. 4. Nem k�ldhetsz Priv�t �zeneteket. Ha a legutols� eset �ll fenn, l�pj kapcsolatba az Adminisztr�torral.");
$faq[] = array("Folyamatosan k�retlen �zeneteket kapok!", "A j�v�ben lehet�s�g lesz letiltani a nemk�v�nt Priv�t �zeneteket. Egyel�re erre nincs lehet�s�g, ha k�retlen �zeneteket kapsz, �rtes�tsd az Adminisztr�tort, �s � megteszi a sz�ks�ges l�p�seket.");
$faq[] = array("K�retlen vagy s�rteget� leveleket kapok valakit�l a F�rumr�l!", "Ezt sajn�lattal halljuk, ebben az esetben a k�vetkez� l�p�seket tedd meg. �rtes�tsd az Adminisztr�tort, �s k�ldd el neki a kapott levelet, els�sorban a lev�l fejl�ce sz�ks�ges (mivel ez tartalmazza a felad� adatait). Az Adminisztr�tor meg fogja tenni a sz�ks�ges l�p�seket.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 k�rd�sek");
$faq[] = array("Kik k�sz�tett�k ezt a f�rumot?", "A szoftver tulajdonosa a <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. �k foglalkoznak a kiad�ssal, fejleszt�ssel �s a szerz�i jogok is �ket illeti meg. A szoftver a GNU General Public licensz al� tartozik. Tov�bbi r�szletek a weboldalon.");
$faq[] = array("Mi�rt nem �rhet� el az X szolg�ltat�s?", "A szoftvert a phpBB Group k�sz�tette �s licenszeli. Ha �gy gondolod, hogy �jabb szolg�ltat�sok, �s opci�k sz�ks�ges a f�rumba, akkor l�togasd meg a phpbb.com weboldalt, ahol elmondhatod az �tleteidet, �szrev�teleidet. Ne k�ldj k�r�seket a phpbb.com F�rum�ba, a fejleszt�k a www.sourceforge.net oldalon v�rj�k az �tleteket. Azonk�v�l olvasd �t a F�rumot, mert lehet hogy az �tletet m�s m�r felvetette, �s m�r folyamatban van a megval�s�t�sa.");
$faq[] = array("Ki az illet�kes a F�rumon olvashat� tartalommal kapcsolatban?", "Els�sorban a F�rum Adminisztr�tor�t kell felkeresni. Ha ez nem lehets�ges, akkor a weboldal tulajdonos�t (ezt kider�theti egy �n. \"whois\" keres�ssel). Ha a f�rum egy ingyenes t�rhelyen tal�lhat�, akkor azt a szolg�ltat�t �rtes�tse. A phpBB Group-nak semmilyen k�ze, hozz�f�r�se vagy belesz�l�sa nincs a F�rumon olvashat� tartalomhoz, �s nem is �llnak kapcsolatban a szoftver �zemeltet�j�vel.");

//
// This ends the FAQ entries
//

?>
