<?php
require_once APP_ROOT . '/model.php';
class User_has_file extends Model{
    public $user_email;
    public $file;

    public static $table = "user_has_table";
    public static $key = "user_email";
}
