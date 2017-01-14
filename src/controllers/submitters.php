<?php
class Submitters extends Controller{
    public function index($parameters){
        if(!isset($parameters[1])){
            require 'notfound.php';
            $notFound = new NotFound();
            $notFound->index(array());
            return;
        }
        if($parameters[1] === 'SpeakerInfo'){
            require VIEWS . '/header.php';
            require VIEWS . '/submitters/speaker_info.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'GuidelinesInformation'){
            require VIEWS . '/header.php';
            require VIEWS . '/submitters/guidelines_info.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] === 'PaperSubmission'){
            require VIEWS . '/header.php';
            require VIEWS . '/submitters/paper_submission.php';
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
