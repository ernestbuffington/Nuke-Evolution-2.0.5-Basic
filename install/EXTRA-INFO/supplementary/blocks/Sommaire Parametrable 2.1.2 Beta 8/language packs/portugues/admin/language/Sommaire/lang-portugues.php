<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

define("_SOM_ADMIN_HEADER","Nuke-Evolution Sommaire Menu :: Admin Panel");
define("_SOM_RETURNMAIN","Return to Main Administration");
define("_SOMMAIRE","Menu");
define("_SOMADMINTITLE","Administra��o do Menu");
define("_SOMMSGNOTNUM","O valor deste campo deve ser num�rico, por favor modifique.");
define("_SOMMSGVOID","Voce deve entrar com um valor para este campo !");
define("_SOMATTNSUPPRCAT","Aten��o&nbsp;!!&nbsp;&nbsp; Voce n�o pode
cancelar se voce apagar esta categoria ! (O bot�o 'Cancel'
n�o recria a categoria apagada)");
define("_SOMWEIGHT","Largura");
define("_SOMCATEGORIES","Categorias");
define("_SOMCATNAME","Nome da Categoria");
define("_SOMIMGNAME","Nome do arquivo de Imagem");
define("_SOMCATLINK","Link's  nesta categoria");
define("_SOMCATMODS","M�dulos nesta categoria");
define("_SOMNOIMG","[Sem Imagem]");
define("_SOMHR","Regra Horizontal");
define("_SOMCENTER","T�tulo Central");
define("_SOMBGCOLOR","C�r de Fundo");
define("_SOMEXTLINK","Link Externo");
define("_SOMMISEENPAGE","Mostrar");
define("_TARGETBLANK","Abrir em uma nova janela");
define("_SOMACTION","A��o");
define("_SOMSUPPR","[Apagar]");
define("_SOMADDCAT","Adiciona uma categoria");
define("_SOMNEWCATEGORY","Adiciona uma nova categoria :");
define("_SOMCANCEL","CANCELAR");
define("_SOMPOST","SALVAR SUAS MODIFICA��ES");
define("_SOMREMARKS","<strong>Observa��es :</strong><br /><br />"
    ."- A LARGURA � usada para organizar as categorias (categorias com uma largura menor ser�o mostradas primeiro). [number between 0 and 98]<br /><br />"
    ."- Voce pode criar a categoria sem nome : neste caso, a imagem n�o ser� mostrada.<br />"
    ."&nbsp;&nbsp;(usualmente se voce usar somente as regras horizontais para separar categorias)<br /><br />"
    ."- O nome do Arquivo de Imagem (para a categoria)� um arquivo de imagem dentro de /images/sommaire/. Voce tamb�m pode usar um arquivo FLASH (.swf)."
    ."<br />&nbsp;&nbsp;A IMAGEM (para o conte�do da categoria) � um arquivo de imagem dentro de /images/sommaire/categories/."
    ."<br />&nbsp;&nbsp;Quando voce adicionar um arquivo de imagem dentro deste Diret�rio, ele autom�ticamente ser� adicionado na caixa de Lista.<br />"
    ."&nbsp;&nbsp;Se voce n�o quiser mostrar a imagem antes do nome da categoria, coloque 'null.gif' (imagem transparente 20x20 px) no campo.<br /><br />"
    ."- O LINK NA CATEGORIA poder� ser qualquer url da Internet ou uma url relativa para o seu Site.<br />"
    ."&nbsp;&nbsp;Se voce colocar um link externo (come�ando com 'http://' ou 'ftp://'), o link ser� aberto em uma nova janela.<br />"
    ."&nbsp;&nbsp;Se voce colocar uma url relativa ('modules.php?name=Your_Account&op=new_user'), o link abrir� na janela ativa.<br />"
    ."&nbsp;&nbsp;Para abrir um link interno em uma nova janela, coloque com exatid�o, a url completa do seu Site.<br />"
    ."&nbsp;&nbsp;Para abrir um link externo na janela atual, digite 'HTTP://' (em letra maiuscula).<br /><br />"
    ."- A C�r de FUNDO deve ser o c�digo de c�r de um nome de c�r padr�o.<br />"
    ."&nbsp;&nbsp;ex: 'vermelho' : <font color=\"red\">RED</font>  --  '#ff0000' : <font color=\"#ff0000\">RED</font><br /><br />"
    ."- A CLASS usada para mostrar os nomes das categorias deve ser uma classe existente em todos os seus padr�es ["THEMES"].<br />"
    ."&nbsp;&nbsp;As classes est�o em arquivos no /themes/YOURTHEME/style/style.css.<br />"
    ."&nbsp;&nbsp;Voce pode adicionar suas proprias classes, por exemplo voce pode adicionar esta linha na folha de estilos de seus padr�es ["themes"] :<br />"
    ."&nbsp;&nbsp;<i>.sommaire        {FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 12px; COLOR: #363636; FONT-WEIGHT: bold}   </i><br />");
define("_SOMCATCONTENT","Conte�do das Categorias");
define("_SOMLINKURL","URL's dos links");
define("_SOMLINKTEXT","Textos dos links");
define("_SOMIMAGE","Imagem");
define("_SOMINVALIDWEIGHT","O valor da LARGURA � invalido para esta categoria");
define("_SOMMUSTBENUM"," O valor deve ser um n�mero entre 0 e 98 !!");
define("_SOMCATS","As Categorias");
define("_SOMAND","e");
define("_SOMSAMEWEIGHT","tem o mesmo TAMANHO !!");
define("_SOMMODIFWEIGHT","Retorne � p�gina anterior e modifique o valor do TAMANHO para uma das categorias.");
define("_SOMBACKADMIN","Retornar a Administra��o do Menu");
define("_SOMSUCCESS","Seu bloco foi atualizado com sucesso !");
define("_SOMGOADMIN","Configurar o seu Menu");
define("_SOMUPGRADESUCCESS","Seu Menu foi atualizado com sucesso !!");
define("_SOMV1DETECTED","Sommaire parametrable v.1.0 detectado !");
define("_SOMCLICKTOUPGRADE","Para atualizar o seu Menu, click");
define("_SOMHERE","AQUI");
define("_SOMWARNINGDELETECAT","Voce tem certeza que deseja apagar esta Categoria");
define("_SOMGENERALOPTIONS","Op��es Geraiss");
define("_SOMDISPLAYMEMBERSONLYMODULES","Mostra os m�dulos apenas para Membros");
define("_SOMCATEGORIESCLASS","Class para Nomes de Categorias");
define("_SOMDISPLAYMODULENORMAL","Normal (sempre apresentado)");
define("_SOMDISPLAYMODULEWITHICON","Apresentado com �cone");
define("_SOMDISPLAYMODULEWITHICONFORVISTORS","para Visistantes");
define("_SOMDISPLAYMODULEINVISIBLE","Invisivel para visitantes");
define ("_SOMYES","SIM");
define ("_SOMNO","N�O");
define("_SOMMAIREREMARKSTWO","<br />- Voce pode criar um Menu tipo popup, para faz�-lo, entre no campo 'url' com o link externo :<br />"
        ."&nbsp;&nbsp;<i>javascript:window.open('http://www.url.com','popup_sommaire','directories=no,menubar=no,status=no,location=no,scrollbars=no,resizable=no')</i><br />"
        ."<br />&nbsp;&nbsp;Voce pode modificar as op��es de apresenta��o (display scrollbars, etc...)<br />"
        ."&nbsp;&nbsp;Veja <a href=\"http://www.toutjavascript.com/savoir/savoir15.php3\">Tout Javascript - les popups</a> para maiores detalhes.<br /><br />");
define("_SOMMAIREHR","Regras Horizontais");
define("_SOMBOLD","Negrito");
define("_SOMLISTBOX","Caixa Tipo "Drop down"");
define("_SOMSENDTOHAVEMORE","Sauve suas modifica��es para adicionar novos link's.");
define("_SOMDISPLAYCLASSES","Mostrar :");
define("_SOMMODULESCLASS","classe CSS usada para m�dulos/links externos");
define("_SOMAUTODETECTNEW","Dete��o autom�tica de novidades");
define("_SOMSINCE","Novo desde ");
define("_SOMNBDAYS","dias");
define("_SOMDYNAMICMENU","Menu Din�mico");
define("_SOMJSSAVEBEFORE","Voce quer salvar suas modifica��es antes de apagar esta categoria ?");
define("_SOMEDITLINKTITLE","Editar um link...");
define("_SOMMOREOPTIONS","Mais op��es");
define("_SOMCLASS","classe CSS");
define("_SOMATTENTIONMOREOPTIONS","<strong>Aten��o !</strong><br />Se voce modificar no Painel de Administra��o do Sommaire qualque classe CSS de categorias, ou para m�dulos/links, em tempo o �cone 'New!' ser� apresentado, e o espec�fico valor para a categoria ou para o m�dulo/link ser� sobrescrito.");
define("_SOMMOREOPTIONSUCCESS","Suas modifica��es foram aplicadas !");
define("_SOMSENDTOVALIDATE","(Voce deve validar todas as modifica��es no Painel Principal do Sommaire para que suas modifica��es possam ser finalmente confirmadas)");
define("_SOMCLOSE","Fechar a janela");
define("_SOMTARGETBLANK","Link aberto em uma nova janela. Para abrir na janela atual, inicie a url com HTTP:// (letra maiscula)");
define("_SOMTARGETNONE","Link aberto na janela atual. Para abrir em uma nova janela, inicie a url com http:// (letra minuscula)");
define("_SOMNOTABLEPB","Sommaire Parametrable est� incapacitado de acessar as tabelas do banco de dados. Por favor verifique se voce instalou corretamente, e LEIA o FAQ !");
/* contribui��o ivensmeyer@uol.com.br*/

?>