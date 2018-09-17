 <?php

 Class Rotas
 {
     public static $pag;

    public function get_SiteHOME()
    {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    public function get_SitRAIZ()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

     static function get_Pagina()
     {
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/',$pagina);
            
            //$pagina = 'controller/' . $_GET['pag'] . '.php';

            $pagina = 'controller/' . self::$pag[0] . '.php';
            echo "$pagina";
            if(file_exists($pagina)){
                include $pagina;
            } else {
                include 'error.php';
            }
        }
     }
 }