<?
define('APP_ROOT', realpath('../'));
require_once APP_ROOT . '/config.php';
require_once APP_ROOT . '/models/user.php';
require_once APP_ROOT . '/models/user_dao.php';

function test_user_create(){
    $user = User::build(
        "BlaFirst1",
        "BlaLast",
        "12345",
        "myAwesomeMail6@di.uoa.gr",
        "1980-11-11",
        "greece",
        "mykonos",
        "nisianemwn95",
        "19203",
        "2104123401",
        FALSE
    );
    $userDAO = new UserDAO();
    if($userDAO->create($user)){
        echo 'Create user test passed <br>';
    }
    else{
        echo 'Create user test failed <br>';
    }
}

function test_user_all(){
    $dao = new UserDAO();
    $users = $dao->getAll();
    foreach($users as $user){
        echo $user->first_name . '<br>';
    }
}

function test_user_find(){
    $userDAO = new UserDAO();
    $user = $userDAO->find(2);
    echo $user->email . ' ' . $user->id;
}

//test_user_create();
//test_user_all();
test_user_find();
?>