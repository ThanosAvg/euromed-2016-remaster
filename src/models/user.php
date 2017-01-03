<?php
require_once APP_ROOT . '/model.php';
require_once APP_ROOT . '/database_service.php';

class User extends Model{
    public $id;
    public $first_name;
    public $last_name;
    public $password;
    public $email;
    public $birthday;
    public $country;
    public $city;
    public $address;
    public $zip;
    public $phone;
    public $newsletter;

    public static $table = "users";
    public static $key = "id";
    
    public static function build(
        $first_name,
        $last_name,
        $password,
        $email,
        $birthday,
        $country,
        $city,
        $address,
        $zip,
        $phone,
        $newsletter
    ){
        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;
        $user->email = $email;
        $user->birthday = $birthday;
        $user->country = $country;
        $user->city = $city;
        $user->address = $address;
        $user->zip = $zip;
        $user->phone = $phone;
        $user->newsletter = $newsletter;
        return $user;
    }
}
?>
