<?php
require_once APP_ROOT . '/database_service.php';
require_once APP_ROOT . '/models/user.php';
require_once APP_ROOT . '/models/user_has_file.php';

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

    public function storePaper($email, $paper){
        if(!$this->dbs->find('User_has_file', 'user_has_file', User_has_file::$key, $email)){
            $suc = $this->dbs->create('user_has_file', array(
                "user_email" => $email,
                "file" => $paper
            ));
            return $suc;
        }
        else{
            $suc = $this->dbs->update('user_has_file', array(
                'file' => $paper
            ), User_has_file::$key, $email);
            return $suc;
        }
    }

    public function hasPaper($email){
        if($this->dbs->find('User_has_file', 'user_has_file', User_has_file::$key, $email)){
            return true;
        }
        else{
            return false;
        }
    }

    public function getPaper($email){
        $result = $this->dbs->query('User_has_file',
                                 "SELECT * FROM user_has_file WHERE user_email = '" . $email . "'");
        return $result->file;
    }
    
    public function save($obj){
        $suc = $this->dbs->update(User::$table, array(
            'first_name' => $obj->first_name,
            'last_name'  => $obj->last_name,
            'birthday'   => $obj->birthday,
            'password'   => $obj->password,
            'country'    => $obj->country,
            'city'       => $obj->city,
            'address'    => $obj->address,
            'zip'        => $obj->zip,
            'phone'      => $obj->phone,
            'newsletter' => $obj->newsletter
        ), User::$key, $obj->email);
        return $suc;
    }
}

?>
