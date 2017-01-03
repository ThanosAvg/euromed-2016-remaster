<?php
define('APP_ROOT', realpath('../'));
define('VIEWS', APP_ROOT . '/views');
define('CONTROLLERS', APP_ROOT . '/controllers');
define('MODELS', APP_ROOT . '/models');

require(APP_ROOT . '/config.php');
require("../controller.php");

if(isset($_GET['url'])){
    $url_arr = explode("/", $_GET['url']);
    $ctrl_name = $url_arr[0];
    if(!file_exists("../controllers/" . $ctrl_name . ".php")){
        // Control does not exist, show error.
        require "../controllers/notfound.php";
        $ctrl = new NotFound();
        $ctrl->index($url_arr);
    }
    else{
        // Load proper controller.
        require "../controllers/" . $ctrl_name . ".php";
        $ctrl = new $ctrl_name();
        $ctrl->index($url_arr);
    }
}
else{
    // No url was given, go to home.
    require "../controllers/home.php";
    $ctrl = new Home();
    $ctrl->index(array());
}
?>
