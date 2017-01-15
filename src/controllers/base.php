<?php
class Base extends Controller{
    public function index($parameters){
        if(!isset($parameters[1])){
            require 'notfound.php';
            $notFound = new NotFound();
            $notFound->index(array());
            return;
        }
        if($parameters[1] === 'Sitemap'){
            require VIEWS . '/header.php';
            require VIEWS . '/base/sitemap.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'search'){
            require VIEWS . '/header.php';
            require VIEWS . '/base/search.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'programme'){
            require VIEWS . '/header.php';
            require VIEWS . '/base/programme.php';
            require VIEWS . '/footer.php';
        }
        else if ($parameters[1] === 'empty') {
            require VIEWS . '/header.php';
            require VIEWS . '/base/empty.php';
            require VIEWS . '/footer.php';
        }
    }
}
?>
