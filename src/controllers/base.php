<?php
class Base extends Controller{
    public function index($parameters){
        if(isset($parameters[1]) && $parameters[1] == 'Sitemap'){
            require VIEWS . '/header.php';
            require VIEWS . '/base/sitemap.php';
            require VIEWS . '/footer.php';
        }
    }
}
?>
