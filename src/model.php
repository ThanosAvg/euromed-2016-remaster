<?php
class Model{

    protected static $table;
    protected static $key;
    
    public function persist(){
        // To be overriden by models
        // Stores model to database
        throw new Exception('Not implemented');
    }

    public static function all(){
        // To be overriden by models
        // Query to return all entries of model
        throw new Exception('Not implemented');
    }

    public static function find($id){
        // To be overriden by models
        // Query to return by key
        throw new Exception('Not implemented');
    }

    public static function delete($id){
        // To be overriden by models
        // Deletes entry by key
        throw new Exception('Not implemented');
    }
}
?>
