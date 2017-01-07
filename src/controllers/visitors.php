<?php
class Visitors extends Controller{
    public function index($parameters){
        if(isset($parameters[1]) && $parameters[1] == 'TicketRegistration'){
            require VIEWS . '/header.php';
            require VIEWS . '/visitors/ticket_registration.php';
            require VIEWS . '/footer.php';
        }
    }
}
?>
