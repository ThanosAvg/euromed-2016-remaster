<?php
require MODELS . '/user_dao.php';

class Profile extends Controller{
    public function index($parameters){
        session_start();
        if(!isset($_SESSION['user_email'])){
            require VIEWS . '/header.php';
            require VIEWS . '/forbidden.php';
            require VIEWS . '/footer.php';
            return ;
        }
        if(!isset($parameters[1])){
            require VIEWS . '/header.php';
            require VIEWS . '/profile/index.php';
            require VIEWS . '/footer.php';
        }
        else if($parameters[1] == 'update'){
            $userDAO = new UserDAO();
            $myUser = $userDAO->find($_SESSION['user_email']);
            if(is_null($myUser)){
                require VIEWS . '/header.php';
                require VIEWS . '/forbidden.php';
                require VIEWS . '/footer.php';
            }
            else{
                if(
                    !isset($_POST['first_name']) || $_POST['first_name'] == "" ||
                    !isset($_POST['last_name']) || $_POST['last_name'] == "" ||
                    !isset($_POST['birthday']) || $_POST['birthday'] == "" ||
                    !isset($_POST['country']) || $_POST['country'] == "" ||
                    !isset($_POST['city']) || $_POST['city'] == "" ||
                    !isset($_POST['address']) || $_POST['address'] == "" ||
                    !isset($_POST['zip']) || $_POST['zip'] == "" ||
                    !isset($_POST['phone']) || $_POST['phone'] == ""
                ){
                    $error = "Invalid data";
                    require VIEWS . '/header.php';
                    require VIEWS . '/profile/index.php';
                    require VIEWS . '/footer.php';
                    return ;
                }
                // Edit our user's values
                $myUser->first_name = $_POST['first_name'];
                $myUser->last_name = $_POST['last_name'];
                $myUser->birthday = $_POST['birthday'];
                $myUser->country = $_POST['country'];
                $myUser->city = $_POST['city'];
                $myUser->address = $_POST['address'];
                $myUser->zip = $_POST['zip'];
                $myUser->phone = $_POST['phone'];
                $myUser->newsletter = isset($_POST['newsletter']) ? 1 : 0;

                // Save the changes
                $userDAO->save($myUser);
            }
        }
    }
}
?>