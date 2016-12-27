<?php
class NotFound extends Controller{
    public function index($parameters){
        require VIEWS . '/header.php';
        require VIEWS . '/notfound/index.php';
        require VIEWS . '/footer.php';
    }
}
?>
