<?php
class Test extends Controller{
    public function index($parameters){
        echo "Hello from test";
        echo "MY parameters are:";
        foreach($parameters as $parameter){
            echo $parameter . " ";
        }
        echo "POST: " . $_POST['variable'] . "<br>";
    }
}
?>
