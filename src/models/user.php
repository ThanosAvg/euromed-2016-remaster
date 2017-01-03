<?php
require APP_ROOT . '/model.php';
require APP_ROOT . '/dao.php';

class User extends Model{
    private $id;
    private $first_name;
    private $last_name;
    private $password;
    private $email;
    private $bday;
    private $country;
    private $city;
    private $address;
    private $zip;
    private $phone;
    private $wants_newsletter;

    protected static $table = "users";
    protected static $key = "id";
    
    function __construct(
        $first_name,
        $last_name,
        $password,
        $email,
        $bday,
        $country,
        $city,
        $address,
        $zip,
        $phone,
        $wants_newsletter
    ){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
        $this->email = $email;
        $this->bday = $bday;
        $this->country = $country;
        $this->city = $city;
        $this->address = $address;
        $this->zip = $zip;
        $this->phone = $phone;
        $this->wants_newsletter = $wants_newsletter;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getId(){
        return $this->id;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getBirthday(){
        return $this->bday;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getCity(){
        return $this->city;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getZip(){
        return $this->zip;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function wantsNewsletter(){
        return $this->wants_newsletter;
    }

    public function persist(){
        $values = array(
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'birthday'   => $this->bday,
            'password'   => $this->password,
            'country'    => $this->country,
            'city'       => $this->city,
            'address'    => $this->address,
            'zip'        => $this->zip,
            'phone'      => $this->phone,
            'newsletter' => $this->wants_newsletter  
        );
        $dao = new DAO();
        $success = $dao->create(User::$table, $values);
        return $success;
    }

    public static function all(){
        $dao = new DAO();
        $dao->all($table);
    }

    public static function find($id){
        
    }

    public static function delete($id){
        
    }
}
?>
