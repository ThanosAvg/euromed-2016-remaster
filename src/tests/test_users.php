<?
define('APP_ROOT', realpath('../'));
require(APP_ROOT . '/config.php');
require(APP_ROOT . '/models/user.php');

function test_user_create(){
    $user = new User(
        "TestUserFirst",
        "TestUserLast",
        "12345",
        "myAwesomeMail2@di.uoa.gr",
        "1980-11-11",
        "greece",
        "mykonos",
        "nisianemwn95",
        "19203",
        "2104123401",
        FALSE
    );
    if($user->persist()){
        echo 'Create user test passed <br>';
    }
    else{
        echo 'Create user test failed <br>';
    }
}

test_user_create();
?>