<?php
class Conference extends Controller{
    public function index($parameters){
        if(!isset($parameters[1])){
            // 404            
        }
        else if($parameters[1] === "keynote-speakers"){
            require VIEWS . '/header.php';
            require VIEWS . '/conference/keynote.php';
            require VIEWS . '/footer.php';
        }
    }
}
?>
