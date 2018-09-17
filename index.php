<?php

//Chama todas as dependencias sem precisar charma uma por uma;    
require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_Pagina();
    //Cria variavel
    $smarty->assign('NOME','Rodrigo Blefari Goncalves');
    $smarty->assign('GET_TEMA',Rotas::get_SitTEMA());
    
    echo"<br>";
    //echo Rotas::get_SiteHOME();
    //echo Rotas::get_SitRAIZ();
    //echo Rotas::get_SitTEMA();
    //echo Rotas::pag_SitCARRINHO();
    
    //Seta qual nome do arquivo que vai ser compilado(deve ser sempre ultima instrucao)
    $smarty->display('index.tpl');

?>