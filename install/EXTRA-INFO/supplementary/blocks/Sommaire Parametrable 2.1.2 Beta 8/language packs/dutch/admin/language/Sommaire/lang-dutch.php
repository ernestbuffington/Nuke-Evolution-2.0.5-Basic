<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/* Dutch translation by robbert@trebbor.nl */
define("_SOM_ADMIN_HEADER","Nuke-Evolution Sommaire Menu :: Admin Panel");
define("_SOM_RETURNMAIN","Return to Main Administration");
define("_SOMMAIRE","Menu");
define("_SOMADMINTITLE","Administratie Menu");
define("_SOMMSGNOTNUM","De waarde van dit veld moet een cijfer zijn, aub aanpassen.");
define("_SOMMSGVOID","Je moet een waarde invullen voor dit veld !");
define("_SOMATTNSUPPRCAT","Letop&nbsp;!!&nbsp;&nbsp; Je kunt niet annuleren als je een categorie verwijderd! (De 'Annuleren' knop maakt dit niet ongedaan)");
define("_SOMWEIGHT","Volgorde");
define("_SOMCATEGORIES","Catogorieen");
define("_SOMCATNAME","Categorie naam");
define("_SOMIMGNAME","Icon keuze");
define("_SOMCATLINK","Link in deze categorie");
define("_SOMCATMODS","Onderdelen in deze categorie");
define("_SOMNOIMG","[Geen icon]");
define("_SOMHR","Horizontale regel");
define("_SOMCENTER","Centreer titel");
define("_SOMBGCOLOR","Achtergrond kleur");
define("_SOMEXTLINK","External link");
define("_SOMMISEENPAGE","weergave");
define("_TARGETBLANK","Open in een nieuw window");
define("_SOMACTION","Actie");
define("_SOMSUPPR","[Verwijderen]");
define("_SOMADDCAT","Toevoegen van een nieuwe categorie");
define("_SOMNEWCATEGORY","catogorie toevoegen :");
define("_SOMCANCEL","ANNULEREN");
define("_SOMPOST","OPSLAAN VAN DE WIJZIGINGEN");
define("_SOMREMARKS","<strong>Opmerkingen :</strong><br /><br />"
    ."- Categorieen met een lager waarde worden eerder weergegeven. [De waarde MOET een getal zijn tussen 0 en 98]<br /><br />"
    ."- Je kunt een categorie toevoegen zonder naam: het icon is dan niet zichtbaar.<br />"
    ."&nbsp;&nbsp;(handig als je alleen horizontal regels gebruikt, je kunt dan categorieen splitsen)<br /><br />"
    ."- De ICON bestands naam (voor categorieen) is een plaatje in de map: /images/sommaire/.<br />"
    ."&nbsp;&nbsp;Je kunt hiervoor ook een FLASH bestand gebruiken(.swf)."
    ."<br />&nbsp;&nbsp;Het ICON (voor categorie inhoud) is een plaatje in de map /images/sommaire/categories/.<br />&nbsp;&nbsp;Als je een icon toevoegt in deze map, het wordt automatisch in de lijst.<br />"
    ."&nbsp;&nbsp;Als je geen plaatje wilt voor de cotogorie selecteer dan: 'null.gif' (doorzichtig 20x20 px icon) in de lijst.<br /><br />"
    ."- DE LINK NAAR EEN CATOGORIE kan een internet url of een url naar je eigen homepage zijn.<br />"
    ."&nbsp;&nbsp;Als je een externe link gebruikt (beginned met 'http://' or 'ftp://'), Dan wordt de link geopend in een nieuw scherm.<br />"
    ."&nbsp;&nbsp;Als je een interne url gebruikt ('modules.php?name=Your_Account&op=new_user'), Dan wordt de link in het zelfde scherm geopend.<br />"
    ."&nbsp;&nbsp;Om een interne link in een nieuw scherm te openen, vul dan de gehele url in.<br />"
    ."&nbsp;&nbsp;Om een externe link in het zelfde scherm to openen, type 'HTTP://' (in hoofdletters).<br /><br />"
    ."- De achtergrond kleur moet er een zijn van de standaard kleur.<br />"
    ."&nbsp;&nbsp;VB: 'red' : <font color=\"red\">RED</font>  --  '#ff0000' : <font color="#ff0000">RED</font><br /><br />"
    ."- De CLASS gebruikt bij de weergave van de categorieen moeten een naam hebben in alle themes.<br />"
    ."&nbsp;&nbsp;De classes zitten in het bestand /themes/JOUWTHEME/style/style.css.<br />"
    ."&nbsp;&nbsp;Als je jouw eigen class toevoegt, kun je als voorbeeld de volgende regel toevoegenaan het style sheets van jouw themes :<br />"
    ."&nbsp;&nbsp;<i>.sommaire        {FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 12px; COLOR: #363636; FONT-WEIGHT: bold}   </i><br />");
define("_SOMCATCONTENT","Categorie inhoud");
define("_SOMLINKURL","link's URL");
define("_SOMLINKTEXT","link's tekst");
define("_SOMIMAGE","Plaatje");
define("_SOMINVALIDWEIGHT","De VOLGORDE waarde is niet toegestaan in deze categorie");
define("_SOMMUSTBENUM"," De waarde MOET een getal zijn tussen 0 en 98 !!");
define("_SOMCATS","De categorieen");
define("_SOMAND","en");
define("_SOMSAMEWEIGHT","hebben de zelfde VOLGORDE !!");
define("_SOMMODIFWEIGHT","Ga terug naar de vorige pagina en wijzig de VOLGORDE waarde van een van deze categorieen.");
define("_SOMBACKADMIN","Terug naar het administratie Menu");
define("_SOMSUCCESS","Jouw block is goed bijgewerkt !");
define("_SOMGOADMIN","Wijzig jouw Menu");
define("_SOMUPGRADESUCCESS","Jouw Menu is goed bijgewerkt !!");
define("_SOMV1DETECTED","Sommaire parametrable v.1.0 gededecteerdt !");
define("_SOMCLICKTOUPGRADE","Om jouw menu bij tewerken, klik");
define("_SOMHERE","HIER");
define("_SOMWARNINGDELETECAT","Weet je zeker dat je deze categorie wilt verwijderen");
define("_SOMGENERALOPTIONS","Algemene Option");
define("_SOMDISPLAYMEMBERSONLYMODULES","Weergeven van 'members only' modulen");
define("_SOMCATEGORIESCLASS","Soort voor categorieen' namen");
define("_SOMDISPLAYMODULENORMAL","Normaal (Altijd zichtbaar)");
define("_SOMDISPLAYMODULEWITHICON","Zichtbaar met icon");
define("_SOMDISPLAYMODULEWITHICONFORVISTORS","voor bezoekers");
define("_SOMDISPLAYMODULEINVISIBLE","Onzichtbaar voor bezoekers");
define ("_SOMYES","Ja");
define ("_SOMNO","Nee");
define("_SOMMAIREREMARKSTWO","<br />- Je kunt een popup scherm maken door in het veld url of external url volgende regel te plaatsen:<br />"
        ."&nbsp;&nbsp;<i>javascript:window.open('http://www.helpmy.com','popup_sommaire','directories=no,menubar=no,status=no,location=no,scrollbars=no,resizable=no')</i><br />"
        ."<br />&nbsp;&nbsp;Je kunt de weergave opties wijzigen (display scrollbars, etc...)<br />"
        ."&nbsp;&nbsp;Meer info zie: <a href=\"http://www.toutjavascript.com/savoir/savoir15.php3\">Tout Javascript - les popups</a>.<br /><br />");
define("_SOMMAIREHR","Horiz. rule");
define("_SOMBOLD","Vet");
define("_SOMLISTBOX","Uitklap Menu");
define("_SOMSENDTOHAVEMORE","Bewaar uw wijzigingen om meer links toe te voegen.");
define("_SOMDISPLAYCLASSES","weergave :");
define("_SOMMODULESCLASS","CSS class used for modules/external links");
define("_SOMAUTODETECTNEW","Automatische detectie van nieuws");
define("_SOMSINCE","Nieuw voor");
define("_SOMNBDAYS","dagen");
define("_SOMDYNAMICMENU","Dynamisch menu");
define("_SOMJSSAVEBEFORE","Wil je de wijzigingen bewaren, voor het verwijderen van deze categorie ?");
define("_SOMEDITLINKTITLE","Wijzig een link...");
define("_SOMMOREOPTIONS","Meer opties");
define("_SOMCLASS","CSS class");
define("_SOMATTENTIONMOREOPTIONS","<strong>Letop !</strong><br />Als je wijzigingen maakt in het sommaire's admin panel bij algemene CSS class voor categorieen, of voor modulen/links, of de tijd: dat de 'New!' icon zichtbaar is, Wordt de huidige waarde van een categorie of een module/link overschreven.");
define("_SOMMOREOPTIONSUCCESS","Jouw wijzigingen zijn toegepast !");
define("_SOMSENDTOVALIDATE","(Je kunt controleren of je instellingen zijn geaccepteerd in het hoofd menu scherm)");
define("_SOMCLOSE","Sluit dit scherm");
define("_SOMTARGETBLANK","Link openen in een nieuw scherm. Om het te openen in het zelfde scherm, begin url met HTTP:// (hoofdletters)");
define("_SOMTARGETNONE","Link openen in het zelfde scherm. Om het te openen in een nieuw scherm, begin url met http:// (kleineletter)");
define("_SOMNOTABLEPB","Sommaire Parametrable kan geen toegang krijgen met zij Database tabellen. Aub controleren of je alles goed geinstalleed hebt, en LEES DE FAQ !");

?>