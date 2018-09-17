 <?php

 Class Rotas
 {
     public static $pag;
     private static $pasta_controller = 'controller';
     private static $pasta_view = 'view';

    public function get_SiteHOME()
    {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }
    public function get_SitRAIZ()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }
    public function get_SitTEMA()
    {
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }
    public function pag_SitCARRINHO()
    {
        return self::get_SiteHOME() . '/carrinho';    }

    static function get_Pagina()
    {
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/',$pagina);
            
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