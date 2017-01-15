<?php
class Visitors extends Controller{
    public function index($parameters){
        if(isset($parameters[1])){
            if($parameters[1] === 'TicketRegistration'){
                require VIEWS . '/header.php';
                require VIEWS . '/visitors/ticket_registration.php';
                require VIEWS . '/footer.php';
            }
            else if($parameters[1] === 'pricing'){
                require VIEWS . '/header.php';
                require VIEWS . '/visitors/pricing.php';
                require VIEWS . '/footer.php';
            }
        }
    }
}
?>
