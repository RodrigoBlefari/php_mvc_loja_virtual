<?php

Class Template extends Smarty
{
    function __construct()
    {
        parent:: __construct();
        //Seta o diretorio do template
        $this->setTemplateDir('view/');
        //seta dir cache(defaut)
        $this->setCacheDir('view/cache/');
        //Seta quonde estao arquivo.tpl arquivo que vai ser compilado
        $this->setCompileDir('view/compile/');
    
    }
}