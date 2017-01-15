<?php
require MODELS . '/user_dao.php';

class Register extends Controller{
    public function index($parameters){
        if($_POST['action'] == 'register'){
            $this->doRegister();
        }
    }

    private function doRegister(){
        if(
            !isset($_POST['first_name']) || $_POST['first_name'] == "" ||
            !isset($_POST['last_name']) || $_POST['last_name'] == "" ||
            !isset($_POST['password']) || $_POST['password'] == "" ||
            !isset($_POST['password_confirm']) || $_POST['password_confirm'] == "" ||
            !isset($_POST['email']) || $_POST['email'] == ""
        ){
            echo 'false';
        }
        else{
            if(!isset($_POST['newsletter'])){
                $newsletter = 0;
            }
            else{
                $newsletter = 1;
            }
            $dao = new UserDAO();
            if($dao->getByEmail($_POST['email']) != NULL){
                // User exists
                echo 'false';
                return;
            }
            $hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user = User::build(
                $_POST['first_name'],
                $_POST['last_name'],
                $hash_password,
                $_POST['email'],
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                $newsletter
            );
            $result = $dao->create($user);
            if($result){
                session_start();
                $_SESSION['user_first_name'] = $user->first_name;
                $_SESSION['user_last_name'] = $user->last_name;
                $_SESSION['user_email'] = $user->email;
                echo 'true';
            }
            else{
                echo 'false';
            }
            return ;
        }
    }
}
?>
