<?php
require_once APP_ROOT . '/database_service.php';
require_once APP_ROOT . '/models/user.php';

class UserDAO{
    private $dbs;

    function __construct(){
        $this->dbs = new DatabaseService();
    }
    
    public function create($obj){
        $values = array(
            'first_name' => $obj->first_name,
            'last_name'  => $obj->last_name,
            'email'      => $obj->email,
            'birthday'   => $obj->birthday,
            'password'   => $obj->password,
            'country'    => $obj->country,
            'city'       => $obj->city,
            'address'    => $obj->address,
            'zip'        => $obj->zip,
            'phone'      => $obj->phone,
            'newsletter' => $obj->newsletter  
        );
        $success = $this->dbs->create(User::$table, $values);
        return $success;
    }

    public function getAll(){
        return $this->dbs->all('User', User::$table);
    }

    public function getByEmail($email){
        return $this->dbs->query('User', 'SELECT * FROM users WHERE email = \'' .
                                 $email . '\'');
    }

    public function find($id){
        return $this->dbs->find('User', User::$table, User::$key, $id);
    } 
}

?>