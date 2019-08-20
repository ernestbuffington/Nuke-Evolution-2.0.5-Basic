<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/* Pour le module Sommaire Param�trable */
define("_SOM_ADMIN_HEADER","Nuke-Evolution Sommaire Menu :: Admin Panel");
define("_SOM_RETURNMAIN","Return to Main Administration");
define("_SOMMAIRE","Sommaire");
define("_SOMADMINTITLE","Administration Sommaire");
define("_SOMMSGNOTNUM","La valeur du champ saisi n'est pas num�rique, veuillez la modifier");
define("_SOMMSGVOID","Veuillez entrer une valeur !");
define("_SOMATTNSUPPRCAT","Attention&nbsp;!!&nbsp;&nbsp; Supprimer une cat�gorie est d�finitif ! (Le bouton 'Annuler' ne recr�e pas la cat�gorie supprim�e)");
define("_SOMWEIGHT","Poids");
define("_SOMCATEGORIES","Cat�gories");
define("_SOMCATNAME","Nom de la cat�gorie");
define("_SOMIMGNAME","Nom du fichier image");
define("_SOMCATLINK","Lien sur la cat�gorie");
define("_SOMCATMODS","Modules dans cette cat�gorie");
define("_SOMNOIMG","[Pas d'image]");
define("_SOMHR","Barre horizontale");
define("_SOMCENTER","Centrer");
define("_SOMBGCOLOR","Couleur de fond");
define("_SOMEXTLINK","Lien externe");
define("_SOMMISEENPAGE","Mise en page");
define("_TARGETBLANK","Ouvrir dans une nouvelle page");
define("_SOMACTION","Action");
define("_SOMSUPPR","[Supprimer]");
define("_SOMADDCAT","Ajouter une cat�gorie");
define("_SOMNEWCATEGORY","Ajouter une nouvelle cat�gorie :");
define("_SOMCANCEL","ANNULER");
define("_SOMPOST","SAUVER LES MODIFICATIONS");
define("_SOMREMARKS","<strong>Remarques :</strong><br /><br />"
    ."- Le POIDS correspond � l'ordre d'affichage des cat�gories. [nombre entre 0 et 98]<br /><br />"
    ."- Vous pouvez cr�er une cat�gorie sans nom : dans ce cas, l'image ne sera pas affich�e.<br />"
    ."&nbsp;&nbsp;(utile par exemple si vous n'utilisez que les barres horizontales pour s�parer les cat�gories)<br /><br />"
    ."- Le NOM DU FICHIER IMAGE (pour la cat�gorie) est une image pr�sente dans /images/sommaire/. Vous pouvez mettre un fichier FLASH .swf � la place."
    ."<br />&nbsp;&nbsp;L'IMAGE (pour le contenu de la cat�gorie) est une image pr�sente dans /images/sommaire/categories/."
    ."<br />&nbsp;&nbsp;Quand vous ajoutez une image dans ces r�pertoires, elle est ajout�e dans la liste d�roulante correspondante.<br /><br />"
    ."- Le LIEN EXTERNE peut �tre une url compl�te ou bien une adresse relative � votre site.<br />"
    ."&nbsp;&nbsp;Si vous indiquez une url externe (commen�ant par 'http://' ou 'ftp://'), le lien s'ouvrira dans une nouvelle page.<br />"
    ."&nbsp;&nbsp;Si vous indiquez une url relative ('modules.php?name=Your_Account&op=new_user'), le lien s'ouvrira dans la page courante.<br />"
    ."&nbsp;&nbsp;Pour ouvrir un lien interne dans une nouvelle page, indiquez l'url compl�te de votre site.<br />"
    ."&nbsp;&nbsp;Pour ouvrir un lien externe dans la page courante, indiquez 'HTTP://' (en majuscules).<br /><br />"
    ."- La COULEUR DE FOND doit �tre un code couleur ou un nom de couleur standard.<br />"
    ."&nbsp;&nbsp;ex: 'red' : <font color=\"red\">ROUGE</font>  --  '#ff0000' : <font color=\"#ff0000\">ROUGE</font><br /><br />"
    ."- La CLASSE utilis�e pour afficher les noms des cat�gories doit �tre une classe pr�sente dans tous vos th�mes.<br />"
    ."&nbsp;&nbsp;Les classes se trouvent dans le fichier /themes/VOTRETHEME/style/style.css.<br />"
    ."&nbsp;&nbsp;Vous pouvez cr�er votre propre classe, par exemple en rajoutant la ligne suivante dans les feuilles de style de vos th�mes :<br />"
    ."&nbsp;&nbsp;<i>.sommaire        {FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 12px; COLOR: #363636; FONT-WEIGHT: bold}   </i><br />");
define("_SOMCATCONTENT","Contenu de la cat�gorie");
define("_SOMLINKURL","Adresse du Lien");
define("_SOMLINKTEXT","Texte du Lien");
define("_SOMIMAGE","Image");
define("_SOMINVALIDWEIGHT","Valeur Poids  invalide pour la cat�gorie");
define("_SOMMUSTBENUM"," Cette valeur DOIT �tre un nombre compris entre 0 et 98 !!");
define("_SOMCATS","Les cat�gories");
define("_SOMAND","et");
define("_SOMSAMEWEIGHT","ont le m�me Poids !!");
define("_SOMMODIFWEIGHT","Retournez � la page pr�c�dente et modifiez le Poids de l'une de ces cat�gories.");
define("_SOMBACKADMIN","Retour � l'administration du sommaire");
define("_SOMSUCCESS","Votre sommaire a �t� modifi� avec succ�s !");
define("_SOMGOADMIN","Configurer le sommaire");
define("_SOMUPGRADESUCCESS","Votre sommaire a �t� upgrad� avec succ�s !!");
define("_SOMV1DETECTED","Sommaire param�trable v.1.0 d�tect� !");
define("_SOMCLICKTOUPGRADE","Pour upgrader votre sommaire, cliquez");
define("_SOMHERE","ICI");
define("_SOMWARNINGDELETECAT","Etes-vous s�r de vouloir supprimer la cat�gorie");
define("_SOMGENERALOPTIONS","Options g�n�rales");
define("_SOMDISPLAYMEMBERSONLYMODULES","Affichage des modules r�serv�s aux membres");
define("_SOMCATEGORIESCLASS","Classe utilis�e pour le nom des cat�gories");
define("_SOMDISPLAYMODULENORMAL","Normal (affich�s tout le temps)");
define("_SOMDISPLAYMODULEWITHICON","Affich�s avec icone");
define("_SOMDISPLAYMODULEWITHICONFORVISTORS","pour les visiteurs");
define("_SOMDISPLAYMODULEINVISIBLE","Invisibles pour les visiteurs");
define ("_SOMYES","Oui");
define ("_SOMNO","Non");
define("_SOMMAIREREMARKSTWO","<br />- Vous pouvez cr&eacute;er un popup, pour cela il faut entrer ceci dans le champ 'url' du lien externe :<br />"
        ."&nbsp;&nbsp;<i>javascript:window.open('http://www.url.com','popup_sommaire','directories=no,menubar=no,status=no,location=no,scrollbars=no,resizable=no')</i><br />"
        ."<br />&nbsp;&nbsp;Vous pouvez modifier les options d'affichage en autorisant les scrollbars, etc...<br />"
        ."&nbsp;&nbsp;Consultez <a href=\"http://www.toutjavascript.com/savoir/savoir15.php3\">Tout Javascript - les popups</a> pour plus de d�tails.<br /><br />");
define("_SOMMAIREHR","Barre Horiz.");
define("_SOMBOLD","Gras");
define("_SOMLISTBOX","Liste d&eacute;roulante");
define("_SOMSENDTOHAVEMORE","Sauvez vos modifications pour ajouter de nouveaux liens.");
define("_SOMDISPLAYCLASSES","Affichage :");
define("_SOMMODULESCLASS","Classe CSS utilis�e pour les modules/liens externes");
define("_SOMAUTODETECTNEW","D�tection automatique des nouveaut�s");
define("_SOMSINCE","Nouveau pendant");
define("_SOMNBDAYS","jours");
define("_SOMDYNAMICMENU","Menu dynamique");
define("_SOMJSSAVEBEFORE","Voulez-vous sauvegarder vos modifications avant de supprimer la cat�gorie?");
define("_SOMEDITLINKTITLE","Editer un lien...");
define("_SOMMOREOPTIONS","Plus d'options");
define("_SOMCLASS","Classe CSS");
define("_SOMATTENTIONMOREOPTIONS","<strong>Attention !</strong><br />Si vous modifiez dans l'administration du Sommaire la classe g&eacute;n&eacute;rale pour les cat&eacute;gories ou les liens/modules, ou bien la dur&eacute;e des nouveaut&eacute;s, les valeurs sp&eacute;cifiques &agrave; une cat�gorie ou un lien/module seront effac&eacute;es.");
define("_SOMMOREOPTIONSUCCESS","Vos modifications ont &eacute;t&eacute; prises en compte !");
define("_SOMSENDTOVALIDATE","(Validez les modifications dans la fen&ecirc;tre principale pour qu'elles soient finalis&eacute;es)");
define("_SOMCLOSE","Fermer la fen&ecirc;tre");
define("_SOMTARGETBLANK","Page ouverte dans une nouvelle fen&ecirc;tre. Pour ouvrir dans la m&ecirc;me fen&ecirc;tre, commencer le lien par HTTP:// (majucules)");
define("_SOMTARGETNONE","Page ouverte dans la m&ecirc;me fen&ecirc;tre. Pour ouvrir dans une nouvelle fen&ecirc;tre, commencer le lien par http:// (minuscules)");
define("_SOMNOTABLEPB","Sommaire Param�trable ne peut pas acc�der � ses tables dans la base de donn�es. V�rifiez que vous avez install� correctement, et LISEZ LA FAQ !");

?>