<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/** 
*
* attachment mod faq [English]
*
* @package attachment_mod
* @version $Id: lang_faq_attach.php,v 1.1 2005/11/05 10:25:02 acydburn Exp $
* @copyright (c) 2002 torgeir andrew waterhouse
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($faq) || !is_array($faq))
{
    $faq = array();
}


$faq[] = array("--","Mellékletek");

$faq[] = array("Hogy tudok fájlt mellékelni?", "Új hozzászólás küldésekor tudsz fájlt mellékelni. Az üzenet beviteli mezõ alatt, a <i>Melléklet hozzáadásat</i> gombbal teheted meg. Amikor a <i>Tallózás...</i> gombra kattintasz, egy ablakot fogsz látni, amely a számítógéped könyvtár szerkezetét mutatja. Keresd meg a mellékelni kívánt fájlt, majd kattints a Megnyitás gombra.Ha leírást is fûznél a fájlhoz, a <i>Leírás</i> mezõt töltsd ki. Ha nem adsz hozzá leírást, a fájl neve lesz használva linkként a melléklethez. Amennyiben több melléklet hozzáfûzésére van lehetõség, minden mellékletnél a fenti eljárást kell követned, míg el nem éred a maximálisan csatolható fájlok számat<br/><br/>Az adminisztrátorok megszabhatják a feltölthetõ fájlok méretét, kiterjesztését és egyéb paramétereit. A Te felelõsséged, hogy a feltöltendõ fájl megfeleljen a fórum szabályzatában leírtaknak, egyébként a fájlt értesítés nélkül törölhetik<br/><br/>A fórum tulajdonosa, adminisztrátora, moderátora nem tehetõ felelõssé bármiféle adatveszteségedért");

$faq[] = array("Hogy tudok mellékletet fûzni a már elküldött hozzászóláshoz?", "Mellékletet fûzni a már elküldött hozzászóláshoz úgy tudsz, hogy szerkeszteted a hozzászólásod és követed a fent leírt folyamatot. A melléklet hozzá lesz adva a szerkesztett hozzászólásodhoz, amint a <i>Küldés</i> gombra kattintasz.");

$faq[] = array("Hogy tudok egy mellékletet törölni?", "Melléklet törléséhez szerkesztened kell a hozzászólásod és a <i>Melléklet törlése</i> gombra kattintani a törölni kívánt mellékletnél az <i>Elküldött mellékletek</i> ablakban. A melléklet törölve lesz a szerkesztett hozzászólásodból, amint a <i>Küldés</i> gombra kattintasz.");

$faq[] = array("Hogyan frissíthetem a leírást?", "A leírás frissítéséhez szerkesztened kell a hozzászólásod, átírnod a szöveget a  <i>Leírás</i> mezõben, majd a <i>Leírás frissítése</i> gombra kell kattintanod az <i>Elküldött mellékletek</i> ablakban. A melléklet leírása frissítve lesz a szerkesztett hozzászólásodban, amint a <i>Küldés</i> gombra kattintasz");

$faq[] = array("Miért nem látszik a melléklet a hozzászólásomban?", "Valószínüleg a fájl kiterjesztése már nem engedélyezett a fórumban, vagy egy adminisztrátor, vagy moderátor törölte azt, mert nem felelt meg a szabályzatban leírtaknak.");

$faq[] = array("Miért nem tudok mellékletet hozzáadni?", "Néhány fórumban csak bizonyos felhasználók, vagy csoportok tudnak mellékletet hozzáfûzni. Speciális joggal kell rendelkezned, hogy mellékletet tudj küldeni. Ilyen jogot az adminisztrátorok, vagy moderátorok adhatnak, lépj velük kapcsolatba.");

$faq[] = array("Meg van a szükséges jogom, miért nem tudok mellékletet hozzáadni?", "Az adminisztrátorok korlátozhatják a fájlok méretét, kiterjesztését és egyéb tulajdonságait a mellékleteknek. A moderátor, vagy az adminisztrátor megváltoztathatja a jogosultságodat, vagy megszüntetheti a feltöltést bizonyos fórumokban. Magyarázatot kaphatsz a hiba üzenetben, amikor megpróbálsz feltölteni.");

$faq[] = array("Miért nem tudom törölni a mellékleteket?", "Néhány fórumban csak bizonyos felhasználók, vagy csoportok tudnak mellékletet törölni. Speciális joggal kell rendelkezned, hogy mellékletet tudj törölni. Ilyen jogot az adminisztrátorok, vagy moderátorok adhatnak, lépj velük kapcsolatba.");

$faq[] = array("Miért nem nézhetem meg/tölthetem le a mellékletet?", "Néhány fórumban csak bizonyos felhasználók, vagy csoportok tudnak mellékletet megnézni/letölteni. Speciális joggal kell rendelkezned, hogy mellékletet tudj megnézni/letölteni. Ilyen jogot az adminisztrátorok, vagy moderátorok adhatnak, lépj velük kapcsolatba.");

$faq[] = array("Kivel lépjek kapcsolatba illegális, vagy annak vélt mellékletek kapcsán ?", "A fórum adminisztrátorával lépj kapcsolatba. Ha nem találod, kérdezd a fórum moderátorát, kihez fordulj. Ha nem kapsz választ, fordulj a domain tulajdonosához (használd a whois lookup keresõt), vagy ha ez egy ingyenes szolgáltatónál történik, keresd a szolgáltatót. Jegyezd meg, a phpBB csoport nem ellenõrzi, ki, hol és hogyan használja a fórumot.");

?>
