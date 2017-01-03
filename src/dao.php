<?php
class DAO{
    private $database;
    
    function __construct(){
        $opts = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        
        $this->database = new PDO(CONFIG_DB_DRIVER .
                                  ':host=' . CONFIG_DB_HOST .
                                  ';dbname=' . CONFIG_DB_NAME .
                                  ';charset=' . CONFIG_DB_CHARSET,
                                  CONFIG_DB_USERNAME,
                                  CONFIG_DB_PASSWORD,
                                  $opts);
    }

    function create($table, $values){
        $sql = "INSERT INTO " . $table . "(";
        
        foreach($values as $key => $value){
            $sql .= $key . ",";
        }
        $sql = rtrim($sql, ","); // Remove ending comma
        
        $sql .= ") VALUES (";
        foreach($values as $value){
            $sql .= "?,";
        }
        $sql = rtrim($sql, ","); // Remove ending comma
        
        $sql .= ")";
        $stmt = $this->database->prepare($sql);
        
        $i = 1;
        foreach($values as &$value){
            $stmt->bindParam($i, $value);
            $i++;
        }

        if($stmt->execute()){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function all($table){
        $sql = "SELECT * FROM " . $table;
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>