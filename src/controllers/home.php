<?php
class Home extends Controller{
    public function index($parameters){
        require VIEWS . '/header.php';
        require VIEWS . '/home/index.php';
        require VIEWS . '/footer.php';
    }
}
?>
