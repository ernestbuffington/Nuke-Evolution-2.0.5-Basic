<?php

/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Az elérés tilos...');
}

global $lang_donate;

//Common
$lang_donate['DONATIONS'] = 'Ajándék';
$lang_donate['BREAK'] = ':';
$lang_donate['DONATE'] = 'Ajándékoz';
$lang_donate['CONFIRM'] = 'Megerõsít';

//Index
$lang_donate['VIEW_DONATIONS'] = 'Ajándékok Megnézése';
$lang_donate['MAKE_DONATIONS'] = 'Ajándékok kivitelezése';

//Errors
$lang_donate['GEN_NF'] = 'Általános beállítás nem található';
$lang_donate['PAGE_NF'] = 'Oldal beállítás nem található';
$lang_donate['DON_NF'] = 'Ajándék nem található';
$lang_donate['VALUES_NF'] = 'Ajándék értékek nem találhatók';
$lang_donate['CURRENCY_NF'] = 'Valuta kód nem található';
$lang_donate['FAILED'] = 'Ajándék hibás feljegyzés!';
$lang_donate['ERROR'] = '<span style="color: #FF0000; font-weight: bold;">HIBA!</span><br />';
$lang_donate['NO_PP_ADD'] = 'PayPal cím  nincs beállítva';

//View
$lang_donate['DATE'] = 'Dátum';
$lang_donate['USERNAME'] = 'Felhasználói név';
$lang_donate['AMOUNT'] = 'Összeg';
$lang_donate['TOTAL'] = 'Összes';
$lang_donate['GOAL'] = 'Cél';
$lang_donate['DIFF'] = 'Különbség';
$lang_donate['NEXT'] = 'Következõ';
$lang_donate['PREV'] = 'Elõbbi';
$lang_donate['NEXT_DIRECTION'] = '&gt;&gt;';
$lang_donate['PREV_DIRECTION'] = '&lt;&lt;';
$lang_donate['N/A'] = 'N/A';

//Make
$lang_donate['AMOUNT'] = 'Összeg';
$lang_donate['TYPE_PRIVATE'] = 'Magán';
$lang_donate['TYPE_ANON'] = 'Névtelen';
$lang_donate['TYPE_REGULAR'] = 'Szabályos';
$lang_donate['TYPE'] = 'Ajándék Típusa';
$lang_donate['MESSAGE'] = 'Üzenet/Indok';
$lang_donate['DONATE_TO'] = 'Ajándékoz';

//Help
$lang_donate['HELP_TOTAL'] = 'Ez fog megjelenni a végösszeghez az ajándékoz eddig.';
$lang_donate['HELP_GOAL'] = 'Ez fog megjelenni a végösszeghez az ajándékoz eddig e hónapig a havi célhoz.';
$lang_donate['HELP_DONATION_REGULAR'] = 'Minden nyilvános';
$lang_donate['HELP_DONATION_ANON'] = 'Minden kivéve az ajándék, rejtett az adminnak.<br /><br /><strong>ÜZENET:</strong> A PayPalnál az összes információd így nem 100% névtelenül';
$lang_donate['HELP_DONATION_PRIVATE'] = 'Ajándékod rejtett, de nyilvános az <strong>adminnak</strong>.';

//Confirm
$lang_donate['CONFIRM_DONATION'] = 'Kérem megerõsíteni az ajándékod %s %s?';
$lang_donate['COME_BACK'] = 'Ön elkészített egy ajándékot <strong>KÉREM</strong> gyõzõdjön meg róla, hogy használta a PayPal gombot, visszatérés a helyhez, vagy az ajándékod nem fog beszámítani.';

define("_DONINDEX","Adomány");

?>