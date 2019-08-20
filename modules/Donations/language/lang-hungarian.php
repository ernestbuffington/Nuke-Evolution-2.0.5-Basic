<?php

/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Az el�r�s tilos...');
}

global $lang_donate;

//Common
$lang_donate['DONATIONS'] = 'Aj�nd�k';
$lang_donate['BREAK'] = ':';
$lang_donate['DONATE'] = 'Aj�nd�koz';
$lang_donate['CONFIRM'] = 'Meger�s�t';

//Index
$lang_donate['VIEW_DONATIONS'] = 'Aj�nd�kok Megn�z�se';
$lang_donate['MAKE_DONATIONS'] = 'Aj�nd�kok kivitelez�se';

//Errors
$lang_donate['GEN_NF'] = '�ltal�nos be�ll�t�s nem tal�lhat�';
$lang_donate['PAGE_NF'] = 'Oldal be�ll�t�s nem tal�lhat�';
$lang_donate['DON_NF'] = 'Aj�nd�k nem tal�lhat�';
$lang_donate['VALUES_NF'] = 'Aj�nd�k �rt�kek nem tal�lhat�k';
$lang_donate['CURRENCY_NF'] = 'Valuta k�d nem tal�lhat�';
$lang_donate['FAILED'] = 'Aj�nd�k hib�s feljegyz�s!';
$lang_donate['ERROR'] = '<span style="color: #FF0000; font-weight: bold;">HIBA!</span><br />';
$lang_donate['NO_PP_ADD'] = 'PayPal c�m  nincs be�ll�tva';

//View
$lang_donate['DATE'] = 'D�tum';
$lang_donate['USERNAME'] = 'Felhaszn�l�i n�v';
$lang_donate['AMOUNT'] = '�sszeg';
$lang_donate['TOTAL'] = '�sszes';
$lang_donate['GOAL'] = 'C�l';
$lang_donate['DIFF'] = 'K�l�nbs�g';
$lang_donate['NEXT'] = 'K�vetkez�';
$lang_donate['PREV'] = 'El�bbi';
$lang_donate['NEXT_DIRECTION'] = '&gt;&gt;';
$lang_donate['PREV_DIRECTION'] = '&lt;&lt;';
$lang_donate['N/A'] = 'N/A';

//Make
$lang_donate['AMOUNT'] = '�sszeg';
$lang_donate['TYPE_PRIVATE'] = 'Mag�n';
$lang_donate['TYPE_ANON'] = 'N�vtelen';
$lang_donate['TYPE_REGULAR'] = 'Szab�lyos';
$lang_donate['TYPE'] = 'Aj�nd�k T�pusa';
$lang_donate['MESSAGE'] = '�zenet/Indok';
$lang_donate['DONATE_TO'] = 'Aj�nd�koz';

//Help
$lang_donate['HELP_TOTAL'] = 'Ez fog megjelenni a v�g�sszeghez az aj�nd�koz eddig.';
$lang_donate['HELP_GOAL'] = 'Ez fog megjelenni a v�g�sszeghez az aj�nd�koz eddig e h�napig a havi c�lhoz.';
$lang_donate['HELP_DONATION_REGULAR'] = 'Minden nyilv�nos';
$lang_donate['HELP_DONATION_ANON'] = 'Minden kiv�ve az aj�nd�k, rejtett az adminnak.<br /><br /><strong>�ZENET:</strong> A PayPaln�l az �sszes inform�ci�d �gy nem 100% n�vtelen�l';
$lang_donate['HELP_DONATION_PRIVATE'] = 'Aj�nd�kod rejtett, de nyilv�nos az <strong>adminnak</strong>.';

//Confirm
$lang_donate['CONFIRM_DONATION'] = 'K�rem meger�s�teni az aj�nd�kod %s %s?';
$lang_donate['COME_BACK'] = '�n elk�sz�tett egy aj�nd�kot <strong>K�REM</strong> gy�z�dj�n meg r�la, hogy haszn�lta a PayPal gombot, visszat�r�s a helyhez, vagy az aj�nd�kod nem fog besz�m�tani.';

define("_DONINDEX","Adom�ny");

?>