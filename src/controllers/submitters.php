<?php
require MODELS . '/user_dao.php';

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
            if(empty($parameters[2])){
                session_start();
                $show_prev = false;
                if(!empty($_SESSION['user_email'])){
                    $userDAO = new UserDAO();
                    if($userDAO->hasPaper($_SESSION['user_email'])){
                        $show_prev = true;
                    }
                }
                require VIEWS . '/header.php';
                require VIEWS . '/submitters/paper_submission.php';
                require VIEWS . '/footer.php';                
            }
            else if($parameters[2] === 'submit'){
                $this->doUpload();
            }
            else if($parameters[2] === 'get'){
                $this->doGet();
            }
        }
        else{
            require 'notfound.php';
            $notFound = new NotFound();
            $notFound->index(array());
            return;
        }
    }

    public function doUpload(){
        //print_r($_FILES['paper']['name']);
	if($_FILES['paper']['type'] == 'application/pdf'){
            $data = file_get_contents($_FILES['paper']['tmp_name']);
            session_start();
            $userDAO = new UserDAO();
            $suc = $userDAO->storePaper($_SESSION['user_email'], $data);
            if($suc){
                header('Location: ' . PUBLIC_ROOT . '/submitters/PaperSubmission?msg=3');
            }
            else{
                header('Location: ' . PUBLIC_ROOT . '/submitters/PaperSubmission?msg=1');
            }
        }
	else{
	    //echo "Unsupported format!<br>";
            header('Location: ' . PUBLIC_ROOT . '/submitters/PaperSubmission?msg=2');

        }
    }

    public function doGet(){
        $userDAO = new UserDAO();
        session_start();
        $pdf = $userDAO->getPaper($_SESSION['user_email']);
        header("Content-Type: application/pdf");
        header('Content-Disposition: attachment; filename="paper_submission.pdf"');
        echo $pdf;
    }
}
?>
