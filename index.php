<?php

//Chama todas as dependencias sem precisar charma uma por uma;    
require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_Pagina();
    //Cria variavel
    $smarty->assign('NOME','Rodrigo Blefari Goncalves');
    
    echo"<br>";
    echo Rotas::get_SiteHOME();
    
    //Seta qual nome do arquivo que vai ser compilado(deve ser sempre ultima instrucao)
    $smarty->display('index.tpl');

?>