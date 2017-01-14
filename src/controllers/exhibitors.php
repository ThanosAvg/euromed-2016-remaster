<?php
class Exhibitors extends Controller{
    public function index($parameters){
        if(!isset($parameters[1])){
            require 'notfound.php';
            $notFound = new NotFound();
            $notFound->index(array());
            return;
        }
        if($parameters[1] === 'ExhibitorInfo'){
            require VIEWS . '/header.php';
            require VIEWS . '/exhibitors/exhibitor_info.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'AttendingExhibitors'){
            require VIEWS . '/header.php';
            require VIEWS . '/exhibitors/attending_exhibitors.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'ExhibitorRegistration'){
            require VIEWS . '/header.php';
            require VIEWS . '/exhibitors/exhibitor_registration.php';
            require VIEWS . '/footer.php';
        }
        else{
            require 'notfound.php';
            $notFound = new NotFound();
            $notFound->index(array());
            return;
        }
    }
}
?>
