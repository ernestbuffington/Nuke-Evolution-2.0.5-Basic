<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**************************************************************************/
/*         TRADUZIONE IN ITALIANO A CURA DI NUKE-EVOLUTION.IT             */
/*                                 STAFF                                  */
/*                LuckyLuciano  pex1968  _-Paky-_                         */
/*                   www.nuke-evolution.it                                */
/*                   info@nuke-evolution.it                               */
/**************************************************************************/

define("_SOM_ADMIN_HEADER","Nuke-Evolution Sommaire Menu :: Admin Panel");
define("_SOM_RETURNMAIN","Return to Main Administration");
define("_SOMMAIRE","Sommario");
define("_SOMADMINTITLE","Menù Amministrazione");
define("_SOMMSGNOTNUM","Il valore di questo campo deve essere numerico, per favore modificalo.");
define("_SOMMSGVOID","Devi inserire un valore in questo campo !");
define("_SOMATTNSUPPRCAT","Attenzione&nbsp;!!&nbsp;&nbsp; Non puoi più tornare indietro se elimini una categoria ! (Il pulsante 'Cancella' non ricrea le categorie eliminate)");
define("_SOMWEIGHT","Peso");
define("_SOMCATEGORIES","Categorie");
define("_SOMCATNAME","Nome Categoria");
define("_SOMIMGNAME","Nome del file dell'immagine");
define("_SOMCATLINK","Link a questa categoria");
define("_SOMCATMODS","Moduli in questa categoria");
define("_SOMNOIMG","[Nessuna Immagine]");
define("_SOMHR","Linea Orizzontale");
define("_SOMCENTER","Centra Titolo");
define("_SOMBGCOLOR","Colore di sfondo");
define("_SOMEXTLINK","Link esterno");
define("_SOMMISEENPAGE","Mostra");
define("_TARGETBLANK","Apri in una nuova finestra");
define("_SOMACTION","Azione");
define("_SOMSUPPR","[Elimina]");
define("_SOMADDCAT","Aggiungi una nuova categoria");
define("_SOMNEWCATEGORY","Aggiungi una nuova categoria :");
define("_SOMCANCEL","CANCELLA");
define("_SOMPOST","SALVA LE TUE MODIFICHE");
define("_SOMREMARKS","<strong>Nota :</strong><br /><br />"
    ."- Il PESO viene usato per ordinare le categorie (Le categorie con un PESO minore vengono mostrate prima). [numero tra 0 e 98]<br /><br />"
    ."- Puoi creare una categoria senza nome : in questo caso, in questo caso l'immagine non verrà visualizzata.<br />"
    ."&nbsp;&nbsp;(Utile se usi solo la linea orizzontale per separare le categorie)<br /><br />"
    ."- IL NOME DEL FILE DELL'IMMAGINE (per la categoria) è un file di immagine che sta all'interno di /images/sommaire/. Puoi anche inserire un file in FLASH (.swf)."
    ."<br />&nbsp;&nbsp;L'IMMAGINE (per i contenuti delle categorie) è un file di immagine presente all'interno di /images/sommaire/categories/."
    ."<br />&nbsp;&nbsp;quando aggiungi un'immagine in queste cartelle, automaticamente viene agiunta al box nell'elenco.<br />"
    ."&nbsp;&nbsp;Se non vuoi mostrare un'immagine prima del nome della categoria, inserisci 'null.gif' (immagine trasparente 20x20 px) nel campo.<br /><br />"
    ."- IL LINK ALLA CATEGORIA può essere qualsiasi url internet od un url relativo al tuo sito.<br />"
    ."&nbsp;&nbsp;Se inseririsci un link esterno (inizialo con 'http://' o 'ftp://'), il link verrà aperto in una nuova finestra.<br />"
    ."&nbsp;&nbsp;Se inserisci un url interno e relativo al tuo sito ('modules.php?name=Your_Account&op=new_user'), il link verrà aperto nella finestra corrente.<br />"
    ."&nbsp;&nbsp;Per aprire un link interno in una nuova finestra, inserisci l'url completo ed esatto del tuo sito.<br />"
    ."&nbsp;&nbsp;Per aprire un link esterno nella finestra corrente, digita 'HTTP://' (in maiuscolo).<br /><br />"
    ."- IL COLORE DI SFONDO deve essere un codice di colore oppure un nome di colore standard.<br />"
    ."&nbsp;&nbsp;es: 'red' : <font color=\"red\">ROSSO</font>  --  '#ff0000' : <font color=\"#ff0000\">ROSSO</font><br /><br />"
    ."- La CLASSE usata per mostrare il nome delle categorie deve essere una classe esistenti in tutti i tuoi temi.<br />"
    ."&nbsp;&nbsp;Le Classi sono nel file /themes/TUOTEMA/style/style.css.<br />"
    ."&nbsp;&nbsp;Puoi aggiungere le tue classi, per esempio puoi aggiungere questa linea nello style.css dei tuoi temi :<br />"
    ."&nbsp;&nbsp;<i>.sommaire        {FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 12px; COLOR: #363636; FONT-WEIGHT: bold}   </i><br />");
define("_SOMCATCONTENT","Contenuto Categoria");
define("_SOMLINKURL","URL Link");
define("_SOMLINKTEXT","Testo LInk");
define("_SOMIMAGE","Immagine");
define("_SOMINVALIDWEIGHT","Il valore del PESO non è valido per la categoria");
define("_SOMMUSTBENUM"," Questo valore DEVE essere un numero compreso tra 0 e 98 !!");
define("_SOMCATS","Le Categorie");
define("_SOMAND","e");
define("_SOMSAMEWEIGHT","hanno lo stesso PESO !!");
define("_SOMMODIFWEIGHT","Torna indietro alla pagina precedente e modifica il valore del PESO di una di queste categorie.");
define("_SOMBACKADMIN","Indietro al menù di amministrazione");
define("_SOMSUCCESS","Il tuo blocco è stato aggiornato con successo !");
define("_SOMGOADMIN","Configura il tuo Menù");
define("_SOMUPGRADESUCCESS","Il tuo Menu è stato aggiornato con successo !!");
define("_SOMV1DETECTED","Sommaire parametrable v.1.0 individuato !");
define("_SOMCLICKTOUPGRADE","Per aggiornare il tuo menu, clicca");
define("_SOMHERE","QUI");
define("_SOMWARNINGDELETECAT","Sei sicuro di voler eliminare la categoria");
define("_SOMGENERALOPTIONS","Opzioni Generali");
define("_SOMDISPLAYMEMBERSONLYMODULES","Visualizzazione dei moduli 'solo per membri registrati'");
define("_SOMCATEGORIESCLASS","Classe per i nomi delle Categorie");
define("_SOMDISPLAYMODULENORMAL","Normale (sempre visualizzato)");
define("_SOMDISPLAYMODULEWITHICON","Visualizzato con icona");
define("_SOMDISPLAYMODULEWITHICONFORVISTORS","per visitatori");
define("_SOMDISPLAYMODULEINVISIBLE","Invisibile per visitatori");
define("_SOMYES","Si");
define("_SOMNO","No");
define("_SOMMAIREREMARKSTWO","<br />- Puoi creare un popup, per farlo, inserisci nel campo 'url' di link esterni :<br />"
        ."&nbsp;&nbsp;<i>javascript:window.open('http://www.url.com','popup_sommaire','directories=no,menubar=no,status=no,location=no,scrollbars=no,resizable=no')</i><br />"
        ."<br />&nbsp;&nbsp;Puoi modificare le opzioni di visualizzazione (display scrollbars, etc...)<br />"
        ."&nbsp;&nbsp;Guarda <a href=\"http://www.toutjavascript.com/savoir/savoir15.php3\">Tout Javascript - les popups</a> per ulteriori dettagli.<br /><br />");
define("_SOMMAIREHR","Linea Orizzontale");
define("_SOMBOLD","Bold");
define("_SOMLISTBOX","Drop down box");
define("_SOMSENDTOHAVEMORE","Salva le modifiche per aggiungere nuovi links.");
define("_SOMDISPLAYCLASSES","Visualizzazione :");
define("_SOMMODULESCLASS","Classe CSS usata per modules/links esterni");
define("_SOMAUTODETECTNEW","Individuazione automatica di novità");
define("_SOMSINCE","Nuovo per");
define("_SOMNBDAYS","giorni");
define("_SOMDYNAMICMENU","Menu Dinamico");
define("_SOMJSSAVEBEFORE","Vuoi salvare le modifiche prima di eliminare questa categoria ?");
define("_SOMEDITLINKTITLE","Edita un link...");
define("_SOMMOREOPTIONS","Altre opzioni");
define("_SOMCLASS","Classe CSS");
define("_SOMATTENTIONMOREOPTIONS","<strong>Attenzione !</strong><br />Se modifichi nel pannello di amministrazione di sommaire la Classe CSS generale per le categorie, o per modules/links, o per il tempo di visualizzazione dell'icona 'New!', i valori di una categoria specifica o un modulo/link verranno sovrascritti.");
define("_SOMMOREOPTIONSUCCESS","Le tue modifiche sono state applicate !");
define("_SOMSENDTOVALIDATE","(Devi validare tutte le modifiche nel pannello principale di sommaire per fare in modo che le tue modifiche abbiano effetto)");
define("_SOMCLOSE","Chiudi la finestra");
define("_SOMTARGETBLANK","Link aperto in una nuova finestra. Per aprirlo nella stessa finestra, inizia l'url con HTTP:// (maiuscolo)");
define("_SOMTARGETNONE","Link aperto nella stessa finestra. Per aprirlo in una nuova finestra, inizia l'url con http:// (minuscolo)");
define("_SOMNOTABLEPB","Sommaire Parametrable non è in grado di accedere alle sue tabelle del database. Per cortesia verifica di averle installate correttamente, e leggi le FAQ !");

?>