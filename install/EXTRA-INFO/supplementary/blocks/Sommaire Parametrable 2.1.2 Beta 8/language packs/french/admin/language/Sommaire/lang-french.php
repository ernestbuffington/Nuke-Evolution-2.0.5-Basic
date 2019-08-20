<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/* Pour le module Sommaire Paramétrable */
define("_SOM_ADMIN_HEADER","Nuke-Evolution Sommaire Menu :: Admin Panel");
define("_SOM_RETURNMAIN","Return to Main Administration");
define("_SOMMAIRE","Sommaire");
define("_SOMADMINTITLE","Administration Sommaire");
define("_SOMMSGNOTNUM","La valeur du champ saisi n'est pas numérique, veuillez la modifier");
define("_SOMMSGVOID","Veuillez entrer une valeur !");
define("_SOMATTNSUPPRCAT","Attention&nbsp;!!&nbsp;&nbsp; Supprimer une catégorie est définitif ! (Le bouton 'Annuler' ne recrée pas la catégorie supprimée)");
define("_SOMWEIGHT","Poids");
define("_SOMCATEGORIES","Catégories");
define("_SOMCATNAME","Nom de la catégorie");
define("_SOMIMGNAME","Nom du fichier image");
define("_SOMCATLINK","Lien sur la catégorie");
define("_SOMCATMODS","Modules dans cette catégorie");
define("_SOMNOIMG","[Pas d'image]");
define("_SOMHR","Barre horizontale");
define("_SOMCENTER","Centrer");
define("_SOMBGCOLOR","Couleur de fond");
define("_SOMEXTLINK","Lien externe");
define("_SOMMISEENPAGE","Mise en page");
define("_TARGETBLANK","Ouvrir dans une nouvelle page");
define("_SOMACTION","Action");
define("_SOMSUPPR","[Supprimer]");
define("_SOMADDCAT","Ajouter une catégorie");
define("_SOMNEWCATEGORY","Ajouter une nouvelle catégorie :");
define("_SOMCANCEL","ANNULER");
define("_SOMPOST","SAUVER LES MODIFICATIONS");
define("_SOMREMARKS","<strong>Remarques :</strong><br /><br />"
    ."- Le POIDS correspond à l'ordre d'affichage des catégories. [nombre entre 0 et 98]<br /><br />"
    ."- Vous pouvez créer une catégorie sans nom : dans ce cas, l'image ne sera pas affichée.<br />"
    ."&nbsp;&nbsp;(utile par exemple si vous n'utilisez que les barres horizontales pour séparer les catégories)<br /><br />"
    ."- Le NOM DU FICHIER IMAGE (pour la catégorie) est une image présente dans /images/sommaire/. Vous pouvez mettre un fichier FLASH .swf à la place."
    ."<br />&nbsp;&nbsp;L'IMAGE (pour le contenu de la catégorie) est une image présente dans /images/sommaire/categories/."
    ."<br />&nbsp;&nbsp;Quand vous ajoutez une image dans ces répertoires, elle est ajoutée dans la liste déroulante correspondante.<br /><br />"
    ."- Le LIEN EXTERNE peut être une url complète ou bien une adresse relative à votre site.<br />"
    ."&nbsp;&nbsp;Si vous indiquez une url externe (commençant par 'http://' ou 'ftp://'), le lien s'ouvrira dans une nouvelle page.<br />"
    ."&nbsp;&nbsp;Si vous indiquez une url relative ('modules.php?name=Your_Account&op=new_user'), le lien s'ouvrira dans la page courante.<br />"
    ."&nbsp;&nbsp;Pour ouvrir un lien interne dans une nouvelle page, indiquez l'url complète de votre site.<br />"
    ."&nbsp;&nbsp;Pour ouvrir un lien externe dans la page courante, indiquez 'HTTP://' (en majuscules).<br /><br />"
    ."- La COULEUR DE FOND doit être un code couleur ou un nom de couleur standard.<br />"
    ."&nbsp;&nbsp;ex: 'red' : <font color=\"red\">ROUGE</font>  --  '#ff0000' : <font color=\"#ff0000\">ROUGE</font><br /><br />"
    ."- La CLASSE utilisée pour afficher les noms des catégories doit être une classe présente dans tous vos thèmes.<br />"
    ."&nbsp;&nbsp;Les classes se trouvent dans le fichier /themes/VOTRETHEME/style/style.css.<br />"
    ."&nbsp;&nbsp;Vous pouvez créer votre propre classe, par exemple en rajoutant la ligne suivante dans les feuilles de style de vos thèmes :<br />"
    ."&nbsp;&nbsp;<i>.sommaire        {FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 12px; COLOR: #363636; FONT-WEIGHT: bold}   </i><br />");
define("_SOMCATCONTENT","Contenu de la catégorie");
define("_SOMLINKURL","Adresse du Lien");
define("_SOMLINKTEXT","Texte du Lien");
define("_SOMIMAGE","Image");
define("_SOMINVALIDWEIGHT","Valeur Poids  invalide pour la catégorie");
define("_SOMMUSTBENUM"," Cette valeur DOIT être un nombre compris entre 0 et 98 !!");
define("_SOMCATS","Les catégories");
define("_SOMAND","et");
define("_SOMSAMEWEIGHT","ont le même Poids !!");
define("_SOMMODIFWEIGHT","Retournez à la page précédente et modifiez le Poids de l'une de ces catégories.");
define("_SOMBACKADMIN","Retour à l'administration du sommaire");
define("_SOMSUCCESS","Votre sommaire a été modifié avec succès !");
define("_SOMGOADMIN","Configurer le sommaire");
define("_SOMUPGRADESUCCESS","Votre sommaire a été upgradé avec succès !!");
define("_SOMV1DETECTED","Sommaire paramétrable v.1.0 détecté !");
define("_SOMCLICKTOUPGRADE","Pour upgrader votre sommaire, cliquez");
define("_SOMHERE","ICI");
define("_SOMWARNINGDELETECAT","Etes-vous sûr de vouloir supprimer la catégorie");
define("_SOMGENERALOPTIONS","Options générales");
define("_SOMDISPLAYMEMBERSONLYMODULES","Affichage des modules réservés aux membres");
define("_SOMCATEGORIESCLASS","Classe utilisée pour le nom des catégories");
define("_SOMDISPLAYMODULENORMAL","Normal (affichés tout le temps)");
define("_SOMDISPLAYMODULEWITHICON","Affichés avec icone");
define("_SOMDISPLAYMODULEWITHICONFORVISTORS","pour les visiteurs");
define("_SOMDISPLAYMODULEINVISIBLE","Invisibles pour les visiteurs");
define ("_SOMYES","Oui");
define ("_SOMNO","Non");
define("_SOMMAIREREMARKSTWO","<br />- Vous pouvez cr&eacute;er un popup, pour cela il faut entrer ceci dans le champ 'url' du lien externe :<br />"
        ."&nbsp;&nbsp;<i>javascript:window.open('http://www.url.com','popup_sommaire','directories=no,menubar=no,status=no,location=no,scrollbars=no,resizable=no')</i><br />"
        ."<br />&nbsp;&nbsp;Vous pouvez modifier les options d'affichage en autorisant les scrollbars, etc...<br />"
        ."&nbsp;&nbsp;Consultez <a href=\"http://www.toutjavascript.com/savoir/savoir15.php3\">Tout Javascript - les popups</a> pour plus de détails.<br /><br />");
define("_SOMMAIREHR","Barre Horiz.");
define("_SOMBOLD","Gras");
define("_SOMLISTBOX","Liste d&eacute;roulante");
define("_SOMSENDTOHAVEMORE","Sauvez vos modifications pour ajouter de nouveaux liens.");
define("_SOMDISPLAYCLASSES","Affichage :");
define("_SOMMODULESCLASS","Classe CSS utilisée pour les modules/liens externes");
define("_SOMAUTODETECTNEW","Détection automatique des nouveautés");
define("_SOMSINCE","Nouveau pendant");
define("_SOMNBDAYS","jours");
define("_SOMDYNAMICMENU","Menu dynamique");
define("_SOMJSSAVEBEFORE","Voulez-vous sauvegarder vos modifications avant de supprimer la catégorie?");
define("_SOMEDITLINKTITLE","Editer un lien...");
define("_SOMMOREOPTIONS","Plus d'options");
define("_SOMCLASS","Classe CSS");
define("_SOMATTENTIONMOREOPTIONS","<strong>Attention !</strong><br />Si vous modifiez dans l'administration du Sommaire la classe g&eacute;n&eacute;rale pour les cat&eacute;gories ou les liens/modules, ou bien la dur&eacute;e des nouveaut&eacute;s, les valeurs sp&eacute;cifiques &agrave; une catégorie ou un lien/module seront effac&eacute;es.");
define("_SOMMOREOPTIONSUCCESS","Vos modifications ont &eacute;t&eacute; prises en compte !");
define("_SOMSENDTOVALIDATE","(Validez les modifications dans la fen&ecirc;tre principale pour qu'elles soient finalis&eacute;es)");
define("_SOMCLOSE","Fermer la fen&ecirc;tre");
define("_SOMTARGETBLANK","Page ouverte dans une nouvelle fen&ecirc;tre. Pour ouvrir dans la m&ecirc;me fen&ecirc;tre, commencer le lien par HTTP:// (majucules)");
define("_SOMTARGETNONE","Page ouverte dans la m&ecirc;me fen&ecirc;tre. Pour ouvrir dans une nouvelle fen&ecirc;tre, commencer le lien par http:// (minuscules)");
define("_SOMNOTABLEPB","Sommaire Paramétrable ne peut pas accéder à ses tables dans la base de données. Vérifiez que vous avez installé correctement, et LISEZ LA FAQ !");

?>