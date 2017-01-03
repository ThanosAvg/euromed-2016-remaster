<?php
error_reporting(E_ALL);

define('APP_ROOT', realpath('../'));
require(APP_ROOT . '/config.php');
require(APP_ROOT . '/dao.php');

function testCreation(){
    $dao = new DAO();
    $values = array(
        'first_name' => 'test_first',
        'last_name'  => 'test_last',
        'email'      => 'myemail3@test.com',
        'birthday'   => '2012-11-11',
        'password'   => '123456',
        'country'    => 'testCountry',
        'city'       => 'testCity',
        'address'    => 'testAddr',
        'zip'        => '12222',
        'phone'      => '901-902-903',
        'newsletter' => '0'
    );
    $table = "users";

    if($dao->create($table, $values)){
        echo 'Create test passed';
    }
    else{
        echo 'Create test failed';
    }
}

function test_all(){
    $dao = new DAO();
    $result = $dao->all("users");
    foreach($result as $val){
        echo $val->email . "<br>";
    }
}

test_all();
?>
