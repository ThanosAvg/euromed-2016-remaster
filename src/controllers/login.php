<?php
require MODELS . '/user_dao.php';

class Login extends Controller{
    public function index($parameters){
        if(isset($_POST['action']) && $_POST['action'] == 'login'){
            $this->doLogin();
        }
        else if(isset($parameters[1]) && $parameters[1] == 'check'){
            $this->doLoginCheck();
        }
        else if(isset($parameters[1]) && $parameters[1] == 'logout'){
            $this->doLogout();
        }
    }

    public function doLoginCheck(){
        session_start();
        if(isset($_SESSION['user_email']) && $_SESSION['user_email'] != ""){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }

    private function doLogin(){
        if(!isset($_POST['email']) || !isset($_POST['password'])){
            echo 'false';
        }
        else{
            $dao = new UserDAO();
            $user = $dao->getByEmail($_POST['email']);
            if($user == NULL){
                echo 'false';
            }
            else{
                if(!password_verify($_POST['password'], $user->password)){
                    echo 'false';
                }
                else{
                    session_start();
                    $_SESSION['user_first_name'] = $user->first_name;
                    $_SESSION['user_last_name'] = $user->last_name;
                    $_SESSION['user_email'] = $user->email;
                    echo 'true';
                }
            }
        }
    }

    private function doLogout(){
        session_start();
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();
        header('Location: ' . PUBLIC_ROOT);
    }
}
?>
